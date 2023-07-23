(function(window, document, $) {
    'use strict';
    var $html = $('html');
    var $body = $('body');


    $(window).on('load', function() {
        var rtl;
        var compactMenu = false; // Set it to true, if you want default menu to be compact

        if ($('html').data('textdirection') == 'rtl') {
            rtl = true;
        }

        setTimeout(function() {
            $html.removeClass('loading').addClass('loaded');
        }, 1200);

        $.app.menu.init(compactMenu);

        // Navigation configurations
        var config = {
            speed: 300 // set speed to expand / collpase menu
        };
        if ($.app.nav.initialized === false) {
            $.app.nav.init(config);
        }

        Unison.on('change', function(bp) {
            $.app.menu.change();
        });

        var $sidebar_img = $('.main-menu').data('img'),
        $sidebar_img_container = $('.navigation-background');

        if( $sidebar_img_container.length > 0 && $sidebar_img !== undefined ){
            $sidebar_img_container.css('background-image','url("' + $sidebar_img + '")');
        }

        // Tooltip Initialization
        $('[data-toggle="tooltip"]').tooltip({
            container: 'body'
        });

        //Hide navbar search box on close click
        var toogleBtn = $(".header-navbar .navbar-search-close");
        $(toogleBtn).click(function(event) {
            $('.navbar-search .dropdown-toggle').click();
        });

        // Top Navbars - Hide on Scroll
        if ($(".navbar-hide-on-scroll").length > 0) {
            $(".navbar-hide-on-scroll.fixed-top").headroom({
                "offset": 205,
                "tolerance": 5,
                "classes": {
                    // when element is initialised
                    initial: "headroom",
                    // when scrolling up
                    pinned: "headroom--pinned-top",
                    // when scrolling down
                    unpinned: "headroom--unpinned-top",
                }
            });
            // Bottom Navbars - Hide on Scroll
            $(".navbar-hide-on-scroll.fixed-bottom").headroom({
                "offset": 205,
                "tolerance": 5,
                "classes": {
                    // when element is initialised
                    initial: "headroom",
                    // when scrolling up
                    pinned: "headroom--pinned-bottom",
                    // when scrolling down
                    unpinned: "headroom--unpinned-bottom",
                }
            });
        }

        //Match content & menu height for content menu
        setTimeout(function() {
            if ($('body').hasClass('vertical-content-menu')) {
                setContentMenuHeight();
            }
        }, 500);

        function setContentMenuHeight() {
            var menuHeight = $('.main-menu').height();
            var bodyHeight = $('.content-body').height();
            if (bodyHeight < menuHeight) {
                $('.content-body').css('height', menuHeight);
            }
        }

        // Collapsible Card
        $('a[data-action="collapse"]').on('click', function(e) {
            e.preventDefault();
            $(this).closest('.card').children('.card-content').collapse('toggle');
            $(this).closest('.card').find('[data-action="collapse"] i').toggleClass('ft-minus ft-plus');

        });

        // Toggle fullscreen
        $('a[data-action="expand"]').on('click', function(e) {
            e.preventDefault();
            $(this).closest('.card').find('[data-action="expand"] i').toggleClass('ft-maximize ft-minimize');
            $(this).closest('.card').toggleClass('card-fullscreen');
        });

        //  Notifications & messages scrollable
        if ($('.scrollable-container').length > 0) {
            $('.scrollable-container').perfectScrollbar({
                theme: "dark"
            });
        }

        // Reload Card
        $('a[data-action="reload"]').on('click', function() {
            var block_ele = $(this).closest('.card');

            // Block Element
            block_ele.block({
                message: '<div class="ft-refresh-cw icon-spin font-medium-2"></div>',
                timeout: 2000, //unblock after 2 seconds
                overlayCSS: {
                    backgroundColor: '#FFF',
                    cursor: 'wait',
                },
                css: {
                    border: 0,
                    padding: 0,
                    backgroundColor: 'none'
                }
            });
        });

        // Close Card
        $('a[data-action="close"]').on('click', function() {
            $(this).closest('.card').removeClass().slideUp('fast');
        });

        // Match the height of each card in a row
        setTimeout(function() {
            $('.row.match-height').each(function() {
                $(this).find('.card').not('.card .card').matchHeight(); // Not .card .card prevents collapsible cards from taking height
            });
        }, 500);


        $('.card .heading-elements a[data-action="collapse"]').on('click', function() {
            var $this = $(this),
                card = $this.closest('.card');
            var cardHeight;

            if (parseInt(card[0].style.height, 10) > 0) {
                cardHeight = card.css('height');
                card.css('height', '').attr('data-height', cardHeight);
            } else {
                if (card.data('height')) {
                    cardHeight = card.data('height');
                    card.css('height', cardHeight).attr('data-height', '');
                }
            }
        });

        // Add open class to parent list item if subitem is active except compact menu
        var menuType = $body.data('menu');
        if (menuType != 'vertical-compact-menu' && menuType != 'horizontal-menu' && compactMenu === false) {
            if ($body.data('menu') == 'vertical-menu-modern') {
                if (localStorage.getItem("menuLocked") === "true") {
                    $(".main-menu-content").find('li.active').parents('li').addClass('open');
                }
            } else {
                $(".main-menu-content").find('li.active').parents('li').addClass('open');
            }
        }
        if (menuType == 'vertical-compact-menu' || menuType == 'horizontal-menu') {
            $(".main-menu-content").find('li.active').parents('li:not(.nav-item)').addClass('open');
            $(".main-menu-content").find('li.active').parents('li').addClass('active');
        }

        //card heading actions buttons small screen support
        $(".heading-elements-toggle").on("click", function() {
            $(this).parent().children(".heading-elements").toggleClass("visible");
        });

        //  Dynamic height for the chartjs div for the chart animations to work
        var chartjsDiv = $('.chartjs'),
            canvasHeight = chartjsDiv.children('canvas').attr('height');
        chartjsDiv.css('height', canvasHeight);

        if ($body.hasClass('boxed-layout')) {
            if ($body.hasClass('vertical-overlay-menu') || $body.hasClass('vertical-compact-menu')) {
                var menuWidth = $('.main-menu').width();
                var contentPosition = $('.app-content').position().left;
                var menuPositionAdjust = contentPosition - menuWidth;
                if ($body.hasClass('menu-flipped')) {
                    $('.main-menu').css('right', menuPositionAdjust + 'px');
                } else {
                    $('.main-menu').css('left', menuPositionAdjust + 'px');
                }
            }
        }

        $('.nav-link-search').on('click', function() {
            var $this = $(this),
                searchInput = $(this).siblings('.search-input');

            if (searchInput.hasClass('open')) {
                searchInput.removeClass('open');
            } else {
                searchInput.addClass('open');
            }
        });
    });


    $(document).on('click', '.menu-toggle, .modern-nav-toggle', function(e) {
        e.preventDefault();

        // Toggle menu
        $.app.menu.toggle();

        setTimeout(function() {
            $(window).trigger("resize");
        }, 200);

        if ($('#collapsed-sidebar').length > 0) {
            setTimeout(function() {
                if ($body.hasClass('menu-expanded') || $body.hasClass('menu-open')) {
                    $('#collapsed-sidebar').prop('checked', false);
                } else {
                    $('#collapsed-sidebar').prop('checked', true);
                }
            }, 1000);
        }

        return false;
    });

    $(document).on('click', '.close-navbar', function(e) {
        e.preventDefault();

        // Toggle menu
        $.app.menu.toggle();
    });

    $(document).on('click', '.open-navbar-container', function(e) {

        var currentBreakpoint = Unison.fetch.now();

        // Init drilldown on small screen
        $.app.menu.drillDownMenu(currentBreakpoint.name);

        // return false;
    });

    $(document).on('click', '.main-menu-footer .footer-toggle', function(e) {
        e.preventDefault();
        $(this).find('i').toggleClass('pe-is-i-angle-down pe-is-i-angle-up');
        $('.main-menu-footer').toggleClass('footer-close footer-open');
        return false;
    });

    // Add Children Class
    $('.navigation').find('li').has('ul').addClass('has-sub');

    $('.carousel').carousel({
        interval: 2000
    });

    // Page full screen
    $('.nav-link-expand').on('click', function(e) {
        if (typeof screenfull != 'undefined') {
            if (screenfull.enabled) {
                screenfull.toggle();
            }
        }
    });
    if (typeof screenfull != 'undefined') {
        if (screenfull.enabled) {
            $(document).on(screenfull.raw.fullscreenchange, function() {
                if (screenfull.isFullscreen) {
                    $('.nav-link-expand').find('i').toggleClass('ft-minimize ft-maximize');
                } else {
                    $('.nav-link-expand').find('i').toggleClass('ft-maximize ft-minimize');
                }
            });
        }
    }

    $(document).on('click', '.mega-dropdown-menu', function(e) {
        e.stopPropagation();
    });

    $(document).ready(function() {

        /**********************************
         *   Form Wizard Step Icon
         **********************************/
        $('.step-icon').each(function() {
            var $this = $(this);
            if ($this.siblings('span.step').length > 0) {
                $this.siblings('span.step').empty();
                $(this).appendTo($(this).siblings('span.step'));
            }
        });
    });

    // Update manual scroller when window is resized
    $(window).resize(function() {
        $.app.menu.manualScroller.updateHeight();
    });

})(window, document, jQuery);

var INGENIOUS = {};

INGENIOUS.copyToClipboard = function (classString, message) {

    var clipboard = new ClipboardJS(classString);

    clipboard.on('success', function(e) {
        toastr.success(message, "Hurray..!!");
    });

    clipboard.on('error', function(e) {
        toastr.error('Error while copying data', "Error");
    });

};

INGENIOUS.getDownlineUser = function (element) {

    var tracking_id = $(element).val();
    $('.user-get-response').remove();

    if (tracking_id.length < 6) {

        toastr.error('Invalid Tracking ID, Try Again', "Oops");
        $(element).val('');
        return false;
    }

    $.get('/user/account/get-children', {'tracking_id': tracking_id }, function(response) {

        if(response.status) {

            $(element).parent().after('' +
                '<div class="user-get-response text-center m-b-10">' +
                '<input type="hidden" name="user_id" value="'+response.user.id+'">' +
                '<input type="hidden" name="tracking_id" value="'+response.user.tracking_id+'">' +
                '<div class="alert alert-primary">'+response.user.name+'</div>'+
                '</div>');
        }
        else {

            toastr.error(response.message, "Oops");
            $(element).val('');
        }
    });

};

INGENIOUS.numericInput = function (evt) {

    var theEvent = evt || window.event;

    // Handle paste
    if (theEvent.type === 'paste') {
        key = event.clipboardData.getData('text/plain');
    } else {
        // Handle key press
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
    }
    var regex = /[0-9]|\./;
    if( !regex.test(key) ) {
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();
    }

};

INGENIOUS.showPassword = function (element) {

    var passwordElement = $(element).parent().parent().find('input.passwordInput');

    var inputType = passwordElement.attr('type');

    if (inputType === 'password') {
        $(element).html('<i class="la la-eye"></i>');
        passwordElement.attr('type', 'text');
    }
    else {
        $(element).html('<i class="la la-eye-slash"></i>');
        passwordElement.attr('type', 'password');
    }

};

INGENIOUS.blockUI = function (show=true) {

    if (!show) {
        $.unblockUI();
        return false
    }

    $.fn.center = function () {
        this.css("position", "absolute");
        this.css("top", ($(window).height() - this.height()) / 2 + $(window).scrollTop() + "px");
        this.css("left", ($(window).width() - this.width()) / 2 + $(window).scrollLeft() + "px");
        return this;
    };

    $.blockUI({
        css: {
            backgroundColor: 'transparent',
            border: 'none'
        },
        message: '<div class="ing-spinner"></div>',
        baseZ: 1500,
        overlayCSS: {
            backgroundColor: '#FFFFFF', opacity: 0.7, cursor: 'wait'
        }
    });

    $('.blockUI.blockMsg').center();

};


INGENIOUS.resizeImage = function (element=null, class_name=null) {

    let file = null;
    let html_element = element ? $(element) : $('.' + class_name);
    file = html_element[0].files[0];

    $('.base64_image').remove();

    if (file.type === "image/jpeg" || file.type === "image/png") {

        let reader = new FileReader();
        reader.onload = function(readerEvent) {

            let image = new Image();
            image.onload = function(imageEvent) {
                let max_size = 500;
                let w = image.width;
                let h = image.height;

                if (w > h) {  if (w > max_size) { h*=max_size/w; w=max_size; }
                } else     {  if (h > max_size) { w*=max_size/h; h=max_size; } }

                let canvas = document.createElement('canvas');
                canvas.width = w;
                canvas.height = h;
                canvas.getContext('2d').drawImage(image, 0, 0, w, h);

                let dataURL = null;
                if (file.type == "image/jpeg") {
                    dataURL = canvas.toDataURL("image/jpeg", 1.0);
                } else {
                    dataURL = canvas.toDataURL("image/png");
                }

                html_element.after('<input type="hidden" class="base64_image" name="base64_image" value="'+dataURL+'">');
            }
            image.src = readerEvent.target.result;
        }
        reader.readAsDataURL(file);
    } else {
        toastr.error("Please only select images in JPG or PNG format","Oops");
    }
};
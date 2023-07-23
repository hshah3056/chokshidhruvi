/* Independent Components of Vuejs */
Vue.component('vue-datepicker', {
    props: ['value', 'name'],
    watch: {
        value: function(new_value) {
            this.input_value = new_value ? moment(new_value).format('DD MMM Y') : null
        }
    },
    data: function () {
        return {
            input_value: this.value ? moment(this.value).format('DD MMM Y') : null
        }
    },
    template: `<input type="text" ref="datePicker" class="form-control" :name="name" :value="input_value" readonly>`,
    mounted: function() {
        let self = this;
        $(this.$el).datepicker({
            autoclose: true,
            todayHighlight: true,
            format: "dd M yyyy",
        }).on('changeDate', function(e) {
            self.$emit('input', e.target.value)
        });
    }
});


Vue.component('vue-counter-button', {
    props: ['value', 'min'],
    watch: {
        value: function (newVal) {
            this.counter = newVal;
        }
    },
    data: function () {
        return {
            counter: this.value,
            min_value: this.min
        }
    },
    template: `<div class="counter-component">
        <div class="input-group " style="margin-top: 0.5rem">
        <span class="input-group-append">
        <button class="reduced items-count btn-dark" type="button" @click="decrement"><i class="la la-minus"></i></button>
        </span>
        <input type="text" class="form-control text-center" title="Qty" :value="counter.current" maxlength="12" readonly>
        <span class="input-group-append">
        <button class="increase items-count btn-dark" type="button" @click="increment"><i class="la la-plus"></i></button>
        </span>
        </span>
        </div>
        </div>
    `,
    methods: {
        increment: function () {

            if (this.counter.actual > this.counter.current) {
                this.counter.current += 1;
                this.$emit('input', {action: 'increment', current: this.counter.current, actual: this.counter.actual})
            }
            else {
                swal("Oops", "This item has not enough stock, Support Admin", "error");
            }

        },
        decrement: function () {

            if (this.counter.current > this.min_value) {
                this.counter.current -= 1;
                this.$emit('input', {action: 'decrement', current: this.counter.current, actual: this.counter.actual})
            }
        }
    }
});

Vue.component('vue-filer', {
    props: ['value', 'limit', 'maxSize', 'extensions', 'showThumb', 'addMore', 'name'],
    template: '<input type="file" :name="nameValue">',
    data: function () {
        return {
            nameValue: this.name ? this.name : 'image',
            filerInput: null,
            limitValue: this.limit ? this.limit : 1,
            maxSizeValue: this.maxSize ? this.maxSize : 2,
            allowExt: this.extensions ? this.extensions : ['jpg', 'jpeg', 'png'],
            displayThumbs: this.showThumbs ? this.showThumbs : true,
            addMoreValue: this.addMore === '0' ? false : true
        }
    },
    watch: {
        value: function (newValue, oldValue) {
            // $(this.$el).val(value).trigger('change')
        }
    },
    mounted: function () {

        let self = this;

        $(this.$el).filer({
            limit: self.limitValue, maxSize: self.maxSizeValue, extensions: self.allowExt, showThumbs: self.displayThumbs, addMore: self.addMoreValue,
            changeInput: true,
            onSelect: function () {

                setTimeout(() => {

                    let images = $('.jFiler-item-thumb-image').map(function() {
                        let imageSource = $(this).children('img').attr('src');
                        return imageSource.replace(/^data:image\/[a-z]+;base64,/, "");
                    });

                    self.$emit('input', images);

                }, 500);
            },
            onRemove: function () {

                setTimeout(() => {

                    let images = $('.jFiler-item-thumb-image').map(function() {
                        let imageSource = $(this).children('img').attr('src');
                        return imageSource.replace(/^data:image\/[a-z]+;base64,/, "");
                    });

                    self.$emit('input', images);

                }, 500);
            }
        });

    }
});
Vue.component('vue-select2', {
    props: ['options', 'value', 'allowSearch', 'placeHolder'],
    data: function () {
        return {
            select_options: this.options
        }
    },
    template: `<select class="full-width">
               <option value="" v-if="placeHolder">{{ placeHolder }}</option>
               <option v-for="select_option in select_options" :value="select_option.value">{{ select_option.label }}</option>
               </select>`,
    mounted: function () {

        let vm = this;

        $(this.$el).select2({ minimumResultsForSearch: this.allowSearch, data: this.options }).val(this.value).trigger('change').on('change', function () {
            vm.$emit('input', this.value);
            vm.eventOnChange();
        })
    },
    watch: {
        value: function (value) {
            // $(this.$el).val(value).trigger('change')
        },
        options: function (options) {
            $(this.$el).empty().select2({ data: options })
        }
    },
    destroyed: function () {
        $(this.$el).off().select2('destroy')
    },
    methods: {
        eventOnChange() {
            this.$emit('change-select2');
        }
    }
});
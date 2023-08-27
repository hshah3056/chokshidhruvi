<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="author" content="Dhruvi shah">
    <title>@yield('title') - Admin Management</title>
    <link rel="apple-touch-icon" href="/website-assets/img/logos/favicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="/website-assets/img/logos/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/fonts/feather/style.min.css?v1">
    <link rel="stylesheet" type="text/css" href="/admin-assets/fonts/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/pace.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/plugins/toastr/toastr.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/style.css?version=oct2019">
    <link rel="stylesheet" type="text/css" href="/admin-assets/plugins/pick-a-date/bundle.css">
    {{-- DateRange filter  css--}}
    <link href="/admin-assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen">
    <link href="/admin-assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" media="screen">
    <link rel="stylesheet" href="/admin-assets/css/chat.css">
    <style>
        .bg-green{
            background-color: #55892e;
        }
    </style>
    @yield('import-css')
    @yield('page-css')
</head>
<body class="horizontal-layout horizontal-menu 2-columns menu-expanded" data-open="hover" data-menu="horizontal-menu" data-color="bg-green" data-col="2-columns">

@include('admin-panel.template.header')
{{--@include('admin-panel.template.left-sidebar')--}}
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        @yield('content')
    </div>
</div>
@include('admin-panel.template.footer')
<script src="/admin-assets/js/vendors.min.js" type="text/javascript"></script>
<script src="/admin-assets/js/app-menu.js" type="text/javascript"></script>
<script src="/admin-assets/js/app.js?v=202010" type="text/javascript"></script>
<script src="/admin-assets/plugins/pick-a-date/picker.js" type="text/javascript"></script>
<script src="/admin-assets/plugins/pick-a-date/picker.date.js" type="text/javascript"></script>
<script src="/admin-assets/plugins/pick-a-date/picker.time.js" type="text/javascript"></script>
<script src="/admin-assets/plugins/pick-a-date/legacy.js" type="text/javascript"></script>
<script src="/admin-assets/plugins/toastr/toastr.min.js" type="text/javascript"></script>
<script src="/admin-assets/plugins/sweetalert/sweetalert.min.js"></script>
<script src="/admin-assets/js/lodash.js"></script>
<script src="/admin-assets/plugins/axios/axios.min.js"></script>
<script src="/admin-assets/plugins/vue/{{ env('APP_ENV') == 'local' ? 'vue.js' : 'vue.min.js' }}"></script>
<script src="/admin-assets/plugins/vue/vue-helper.js?v=3"></script>
{{-- DateRange filter  js--}}
<script src="/admin-assets/plugins/moment/moment.js" type="text/javascript"></script>
<script src="/admin-assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="/admin-assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
@yield('import-javascript')
@yield('page-javascript')
<script>
    $('.date-range').daterangepicker({
        locale: {
            format: 'DD MMM YYYY'
        },
        autoUpdateInput: false,
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-success',
        cancelClass: 'btn-danger',
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }).on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('DD MMM YYYY') + ' - ' + picker.endDate.format('DD MMM YYYY'));
    }).on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });
</script>
<script>
    @if(session('errors'))
    toastr.error('{{ session('errors')->first() }}', "Error");
    @elseif(session('error'))
    toastr.error('{{ session('error') }}', "Oops..!!");
    @elseif(session('success'))
    toastr.success('{{ session('success') }}', "Hurray..!!");
    @endif
</script>
<script type="text/javascript">
    var timestamp = '<?= now(); ?>';
    function updateTime(){
        $('#time').html(Date(timestamp));
        timestamp++;
    }
    $(function(){
        setInterval(updateTime, 1000);
    });
</script>
</body>
</html>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="author" content="Tymk Softwares">
    <title>@yield('title') - {{ config('project.brand') }}</title>
    <link rel="apple-touch-icon" href="/admin-assets/images/company/favicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="/admin-assets/images/company/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/fonts/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/pace.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/style.css?v=oct2020v1">
    <link rel="stylesheet" type="text/css" href="/admin-assets/plugins/pick-a-date/bundle.css">
    <style>
        .card-body {  padding: 1rem;  }
    </style>
</head>
<body class="vertical-layout vertical-menu 1-column bg-full-screen-image menu-expanded blank-page blank-page" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="1-column">
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        <div class="content-body">
            @yield('content')
        </div>
    </div>
</div>
<script src="/admin-assets/js/vendors.min.js" type="text/javascript"></script>
<script src="/admin-assets/js/app-menu.js" type="text/javascript"></script>
<script src="/admin-assets/js/app.js?v=oct2020V1" type="text/javascript"></script>
<script src="/admin-assets/plugins/toastr/toastr.min.js" type="text/javascript"></script>
<script src="/admin-assets/plugins/pick-a-date/picker.js" type="text/javascript"></script>
<script src="/admin-assets/plugins/pick-a-date/picker.date.js" type="text/javascript"></script>
<script src="/admin-assets/plugins/pick-a-date/legacy.js" type="text/javascript"></script>
<script src="/plugins/sweetalert/sweetalert.min.js"></script>
<script src="/admin-assets/plugins/moment/moment.js" type="text/javascript"></script>
<script src="/admin-assets/plugins/axios/axios.min.js"></script>
<script src="/admin-assets/plugins/vue/{{ env('APP_ENV') == 'local' ? 'vue.js' : 'vue.min.js' }}"></script>
<script src="/admin-assets/plugins/vue/vue-helper.js?v=1"></script>
<script src="/admin-assets/plugins/vue/vue-global.js"></script>

<script>
    @if(session('errors'))
swal('Oops', '{{ session('errors')->first() }}', 'error');
    @elseif(session('error'))
swal('Oops', '{{ session('error') }}', 'error');
    @elseif(session('success'))
swal('Hurray', '{{ session('success') }}', 'success');
    @endif
</script>

@yield('page-javascript')
</body>
</html>

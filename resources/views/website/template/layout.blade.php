<!DOCTYPE html>
<html lang="en">

<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="Dhruvi" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="Dhruvi,Dhruvi Chokshi,Dhruvi Chokshi- Nutritionist and Clinical Dietitian, best nutritionist" />
    <meta name="description" content="Dhruvi Chokshi- Nutritionist and Clinical Dietitian" />

    <meta property="og:description" content="Dhruvi Chokshi - Nutritionist and Clinical Dietitian">
    <meta property="og:url" content="https://chokshidhruvi.com/">
    <meta property="og:title" content="Dhruvi Chokshi- Nutritionist and Clinical Dietitian">
    <meta property="og:type" content="Dhruvi Chokshi- Nutritionist and Clinical Dietitian">
    <meta property="og:site_name" content="Dhruvi Chokshi">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="canonical" href="https://chokshidhruvi.com/"/>
    <meta name="robots" content="index, follow">
    <!-- title  -->
    <title>Dhruvi Chokshi- Nutritionist and Clinical Dietitian </title>

    <!-- favicon -->
    <link rel="shortcut icon" href="/website-assets/img/logos/favicon.png" />
    <link rel="apple-touch-icon" href="/website-assets/img/logos/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/website-assets/img/logos/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/website-assets/img/logos/apple-touch-icon-114x114.png" />

    <!-- plugins -->
    <link rel="stylesheet" href="/website-assets/css/plugins.css">

    <!-- search css -->
    <link rel="stylesheet" href="/website-assets/search/search.css">

    <!-- quform css -->
    <link rel="stylesheet" href="/website-assets/quform/css/base.css">

    <!-- theme core css -->
    <link href="/website-assets/css/styles.css" rel="stylesheet">

    @yield('page-css')
    @yield('import-css')
</head>

<body>
<!-- PAGE LOADING
  ================================================== -->
<div id="preloader"></div>

<!-- MAIN WRAPPER
================================================== -->
<div class="main-wrapper">
@include('website.template.header')

@yield('page-content')

@include('website.template.footer')

</div>
<!-- BUY TEMPLATE
   ================================================== -->
{{--<div class="buy-theme alt-font d-none d-lg-inline-block"><a href="https://themeforest.net/item/habitro-nutrition-health-and-diet-html-template/35917031" target="_blank"><i class="fas fa-cart-plus"></i><span>Buy Template</span></a></div>--}}

{{--<div class="all-demo alt-font d-none d-lg-inline-block"><a href="https://themeforest.net/user/websitedesigntemplates" target="_blank"><i class="far fa-envelope"></i><span>Quick Question?</span></a></div>--}}

<!-- SCROLL TO TOP
================================================== -->
<a href="#!" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>

<!-- all js include start -->

<!-- jQuery -->
<script src="/website-assets/js/jquery.min.js"></script>

<!-- popper js -->
<script src="/website-assets/js/popper.min.js"></script>

<!-- bootstrap -->
<script src="/website-assets/js/bootstrap.min.js"></script>

<!-- jquery -->
<script src="/website-assets/js/core.min.js"></script>

<!-- search -->
<script src="/website-assets/search/search.js"></script>

<!-- theme core scripts -->
<script src="/website-assets/js/main.js"></script>

<!-- form plugins js -->
<script src="/website-assets/quform/js/plugins.js"></script>

<!-- form scripts js -->
<script src="/website-assets/quform/js/scripts.js"></script>

<!-- all js include end -->

@yield('page-js')
@yield('import-js')
@yield('page-javascript')
</body>
</html>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="author" content="Tymk Softwares">
    <title>Forgot Password {{ config('project.brand') }} Account</title>
    <link rel="apple-touch-icon" href="/admin-assets/images/company/favicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="/admin-assets/images/company/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN CSS-->
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/fonts/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/pace.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="/admin-assets/css/style.css">
</head>
<body class="vertical-layout vertical-menu 1-column bg-full-screen-image menu-expanded blank-page blank-page" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="1-column">
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-md-4 col-12 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 m-0">
                            <div class="card-header border-0">
                                <div class="text-center mb-1">
                                    <p style="font-size: x-large; font-style: normal; font-weight: 600;">Hello there!</p> <span style="font-size: 8rem;color:#fff;background-image:-webkit-gradient(linear,left top,right top,from(#514a9d),to(#24c6dc));border-radius: 20px;" class="la la-hands-helping"></span>
                                </div>
                                @if(session('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                @elseif(session('errors'))
                                    <div class="alert alert-danger">{{ session('errors')->first() }}</div>
                                @else
                                    <div class="font-large-1  text-center">
                                        Forgot Password
                                    </div>
                                    <div class="font-small-3 text-center">
                                        Enter the employeeId and Contact Number on your account to request a new password.
                                    </div>
                                @endif
                                @if (session('success'))
                                    <div class="alert alert-success"> {{ session('success') }}</div>
                                @endif
                            </div>
                            <div class="card-content">

                                <div class="card-body">
                                    <form class="form-horizontal" action="" method="post" novalidate>
                                        {{ csrf_field() }}
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="text" class="form-control round" name="client_id" placeholder="Your Employee Id" value="{{ old('client_id') }}" required>
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="text" class="form-control round" name="new_password" placeholder="Enter Your New Password" required>
                                            <div class="form-control-position">
                                                <i class="ft-phone"></i>
                                            </div>
                                        </fieldset>
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-blue-cyan col-12 mr-1 mb-1">
                                                Submit
                                            </button>
                                        </div>

                                    </form>
                                </div>
                                <p class="card-subtitle text-muted text-right font-small-3 mx-2">
                                    <span>Login Your Account ? <a href="{{ route('admin-login') }}" class="card-link">Login</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
</body>
</html>

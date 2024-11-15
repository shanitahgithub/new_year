<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title') | {{ config('app.name') }}</title>

    <!-- General CSS Files -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/components.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/iziToast.min.css') }}">
    <link href="{{ asset('assets/css/sweetalert.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
</head>

<body>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="login-brand">
<<<<<<< HEAD
                        <img src="data:image/png;base64,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" alt="logo" width="100"
=======
                        <img src="{{ asset('img/logo.png') }}" alt="logo" width="100"
>>>>>>> f86adb9 (project setup)
                             class="shadow-light">
                    </div>
                    @yield('content')
                    <div class="simple-footer">
{{--                        Copyright &copy; {{ getSettingValue('application_name') }}  {{ date('Y') }}--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- General JS Scripts -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>

<!-- JS Libraies -->

<!-- Template JS File -->
<script src="{{ asset('web/js/stisla.js') }}"></script>
<script src="{{ asset('web/js/scripts.js') }}"></script>
<!-- Page Specific JS File -->
</body>
</html>

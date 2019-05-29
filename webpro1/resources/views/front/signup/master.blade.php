<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('/') }}front/signupdesign/fonts/linearicons/style.css">


    <link rel="stylesheet" href="{{ asset('/') }}front/signupdesign/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

    <!-- DATE-PICKER -->
    <link rel="stylesheet" href="{{ asset('/') }}front/signupdesign/vendor/date-picker/css/datepicker.min.css">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}front/signupdesign/css/style.css">
</head>

<body>



<script src="{{ asset('/') }}front/signupdesign/js/jquery-3.3.1.min.js"></script>

<!-- DATE-PICKER -->
<script src="{{ asset('/') }}front/signupdesign/vendor/date-picker/js/datepicker.js"></script>
<script src="{{ asset('/') }}front/signupdesign/vendor/date-picker/js/datepicker.en.js"></script>

<script src="{{ asset('/') }}front/signupdesign/js/main.js"></script>
</body>
@yield('body')
</html>
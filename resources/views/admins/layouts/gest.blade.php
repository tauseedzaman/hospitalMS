<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Laravel</title>
    <link href="http://127.0.0.1:8000/assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/assets/css/master.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/assets/vendor/chartsjs/Chart.min.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="clinic_version">

    <div class="content">
        <div class="container">
            @yield('admin_gest_content')
        </div>
    </div>

</body>
</html>

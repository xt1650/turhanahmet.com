
<head>
    <title>Ahmet Turhan-Admin</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="turhanahmet.com">
    <meta name="description" content="Ahmet Turhan-Kişisel Web Sayfası">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&amp;family=Rubik:wght@400;500;700&amp;display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/vendor/apexcharts/css/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/vendor/overlay-scrollbar/css/OverlayScrollbars.min.css">

    <!-- Theme CSS -->
    <link id="style-switch" rel="stylesheet" type="text/css" href="{{asset('/')}}assets/css/style.css">
    @yield('css')
</head>

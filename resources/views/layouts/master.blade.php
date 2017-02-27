<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BCSS Championship Manager</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>


</head>
<body class="col-md-10 col-md-offset-1">
<nav class="nav navbar-static-top">

    <div class="nav navbar-header navbar-brand">
        BCSS Championship Manager
    </div>
    <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        @include('layouts.auth')
    </ul>
</nav>
<div class="content">

    <div class="col-md-8 col-md-offset-2">
        @yield('content')
    </div>

</div>

<footer class="navbar-fixed-bottom">
    @include('layouts.footer')
</footer>
</body>
</html>

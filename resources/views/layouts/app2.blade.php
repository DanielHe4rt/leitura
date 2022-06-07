<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-foda">
    <div class="container-fluid justify-content-center">
        <a class="navbar-brand " href="#">
            <img src="{{ asset('images/logo.png') }}" alt="" width="150"  class="d-inline-block align-text-top">
        </a>
    </div>
</nav>

<section class="container">
    @yield('content')
</section>


</body>
</html>

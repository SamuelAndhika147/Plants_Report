<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="/css/layout.css">
    @yield('style')
    @yield('title')
</head>
<body>
    @include('sweetalert::alert')
    <div class="navbar">
        <h2>Plants Repot</h2>
        <h4>By: Samuel</h4>
    </div>
    @yield('content')
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/e6654805a9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>DC Comics @yield('pageTitle')</title>
</head>
<body>
    @include('partials.header')
    @include('partials.jumbo')

    @yield('mainContent')

    @include('partials.footer')
</body>
</html>
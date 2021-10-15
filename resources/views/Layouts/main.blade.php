<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Comics | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('cdns')

</head>

<body>
    @include('includes.blue-line')
    @include('includes.header')
    @include('includes.top-jumbo')

    @yield('content')

    @include('includes.nav-bar-menu')
    @include('includes.bot-jumbo')
    @include('includes.footer')

    <script src="{{ asset('js/app.js') }}"></script>

    @yield('extra-script')
</body>

</html>

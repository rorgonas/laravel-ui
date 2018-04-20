<!doctype html>
<html>
<head>
    @include('base.includes.head')
</head>
<body>
    <div id='vm-app'>
        @include('base.includes.header')
        @yield('content')
    </div>

    <script src='/js/app.js'></script>
</body>
</html>
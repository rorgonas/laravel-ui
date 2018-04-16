<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
    <div id='vm-app'>
        @include('includes.main-header')
        @yield('content')
    </div>

    <script src='/js/app.js'></script>
</body>
</html>
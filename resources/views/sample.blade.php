<!doctype html>
<html>
<head>
    @include('sample.includes.head')
</head>
<body>
    <div id='vm-app'>
        @include('sample.includes.header')
        @yield('content')
        @include('sample.includes.footer')
    </div>

    <script src='/js/app.js'></script>
</body>
</html>
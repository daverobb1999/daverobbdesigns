<!doctype html>
<html>
<head>
    @include('head')
</head>
<body>
<div class="container">

    <header class="row">
        @include('nav')
    </header>

    <div id="main" class="row">

            @yield('content', 'nothing here')

    </div>

    <footer class="row">
        @include('footer')
    </footer>

</div>
</body>
</html>
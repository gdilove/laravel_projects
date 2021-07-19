<!DOCTYPE html>
<html>
@yield('head')
<body>
    @yield('header')
    <div class="container">
        <div class="offset-md-1 col-md-10">
            @yield('content')
            @include('layouts._footer')
        </div>
    </div>
</body>
</html>

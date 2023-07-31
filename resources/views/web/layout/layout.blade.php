<!DOCTYPE html>
<html lang="en">
<head>
    @include('web.layout.head')
    <script>
        var cdn_static_file = "{{config("app.cdn_static_file")}}";
    </script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-3 col-left">
            @include('web/layout/side_nav')
        </div>
        <div class="col-9 p-0 content-wrapper">
            @yield('content')
        </div>
    </div>
</div>
<footer>
    @include('web.layout.footer')
    @stack('scripts')
</footer>
</body>

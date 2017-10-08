<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ wp_title() }}</title>
    @php(wp_head())
</head>
<body @php(body_class())>
<div class="main container">
    @yield('main')
</div>
@php(wp_footer())
</body>
</html>
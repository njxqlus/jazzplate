<!DOCTYPE html>
<html {{ get_language_attributes() }}>
<head>
    @php
        jazzweb()->header()->charset();
        jazzweb()->header()->favicon();
        wp_head();
        jazzweb()->header()->style();
    @endphp
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body @php(body_class())>
@yield('content')
</body>
</html>
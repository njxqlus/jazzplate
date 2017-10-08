<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ wp_title() }}</title>
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/app.css">
    <!-- WP Head -->
    @php(wp_head())
</head>
<body @php(body_class())>
@yield('content')
<!-- Script -->
<script type="text/javascript" src="../assets/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../assets/vendor/popper/popper.min.js"></script>
<script type="text/javascript" src="../assets/vendor/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/app.js"></script>
<!-- WP Footer -->
@php(wp_footer())
</body>
</html>
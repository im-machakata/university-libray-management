<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Isaac">
    <meta name="description" content="Online GZU Library Management System">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/css/bootstrap.min.css?version=5.3.3">
    <link rel="stylesheet" href="/static/css/style.css?version={{ Storage::disk('static')->lastModified('/css/style.css') }}">
    <script src="/static/js/jquery.3.7.1.min.js" defer async></script>
    <title>@yield('title','Library Management System')</title>
</head>

<body>
    @include('layouts/nav')
    @yield('content')
    @include('layouts/footer')
</body>
<script src="/static/js/bootstrap.bundle.min.js?version=5.3.3" defer></script>
<script src="/static/js/app.js?version={{ Storage::disk('static')->lastModified('/js/app.js') }}" defer></script>

</html>
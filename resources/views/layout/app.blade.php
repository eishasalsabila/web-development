<!DOCTYPE html>
<html>
<head>
    <title>Minggu 12 - Buku</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
</head>
<body class="m-3">
    @yield("content")
</body>
</html>
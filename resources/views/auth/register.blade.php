<html>
    <head>
        <title>Register</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body class="m-3">
    <form action="{{ route('auth.store') }}" method="POST">
    @csrf

    <div class="col-sm-8 mt-2">
        <h1 class="h3">Register</h1>
    </div>

    <div class="col-sm-8 mt-2">
        <label for="name"><div class="col-sm-8 mt-2">
            <label for="email">Email address</label>

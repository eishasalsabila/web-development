<html>
    <head>
        <title>Login</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body class="m-3">

    <form action="{{ route('auth.authenticate') }}" method="POST">
        @csrf
        <div class="col-sm-8 mt-2">
            <h1 class="h3">Login</h1>
            @if(Session::has('massage'))
               <p class="alert alert-info">{{ Session::get('massage')}}</p>
            @endif
             
            <div class="col-sm-8 mt-2">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" placeholder="name@email.com">
            </div>

            <div class="col-sm-8 mt-2">
            <label for="password">password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter your password">
            </div>

    </body>

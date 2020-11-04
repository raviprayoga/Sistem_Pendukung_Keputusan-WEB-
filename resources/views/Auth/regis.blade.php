<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/custom_login.css')}}">
</head>
<body>
    <div class="background1">
        <div class="form">
        <p class="paraf1">Sign Up</p>
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <form action="/registerPost" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="text" name="nama" id="nama" placeholder="nama">
            <input type="text" name="nim" id="nim" placeholder="nim">
            <input type="email" name="email" id="email" placeholder="email">
            <input type="password" name="password" id="password" placeholder="password">
            <button type="submit">SignUp</button>
            <p class="message">sudah memiliki akun? <a href="{{route('login')}}">kembali ke login</a></p>
        </form>
        </div>
    </div>
</body>
</html>
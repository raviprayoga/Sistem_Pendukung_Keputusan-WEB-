<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIgnUp</title>
    <link rel="stylesheet" href="{{asset('css/custom_login.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

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
            <input type="text" name="name" id="nama" placeholder="nama">
            <input type="text" name="nim" id="nim" placeholder="nim">
            <input type="email" name="email" id="email" placeholder="email">
            <input type="password" name="password" id="password" placeholder="password">
            <button type="submit">SignUp</button>
            <p class="message">sudah memiliki akun? <a href="/login">kembali ke login</a></p>
        </form>
        </div>
    </div>
</body>
</html>
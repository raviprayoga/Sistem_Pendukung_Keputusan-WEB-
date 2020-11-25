@extends('partials.body')
@section('content')
<head>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    
    <img class="back_home" src="{{asset('assets/images/back_home.jpg')}}" alt="">
    <div class="label">
        @foreach($user as $item)
        <p>{{ auth()->user('nama')}}</p>
        @endforeach
        <p class="home">
            Selamat Datang di Situs Web <br>
            Sistem Pendukung Keputusan Pemilihan Matakuliah Pilihan <br>
            Teknik informatika ITERA
        </p>
        <button type="button" onclick="window.location.href='/Input_Nilai';" class="btn_nilai">Input Nilai</button>
    </div>
</body>
@stop
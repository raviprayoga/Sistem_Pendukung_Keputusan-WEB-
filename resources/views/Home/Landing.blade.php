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
        <p class="home2">
            {{auth()->user()->name}} <br>
        </p>
        <p class="home">
            {{--  {{auth()->user()->name}} <br>  --}}
            {{--  Selamat Datang di Situs Web <br>
            Sistem Pendukung Keputusan Pemilihan Matakuliah Pilihan <br>
            Teknik informatika ITERA  --}}
        </p>
        <button type="button" onclick="window.location.href='/Input_Nilai/{{auth()->user()->name}}/user';" class="btn_nilai">Input Nilai</button>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/TextPlugin.min.js"></script>
    <script>
        gsap.registerPlugin(TextPlugin);
        gsap.to('.home', {duration : 3, delay: 2, text: "Selamat Datang di Situs Web<br>Sistem Pendukung Keputusan Pemilihan Matakuliah Pilihan <br>Teknik informatika ITERA"});
        gsap.from(".home2", {duration: 1.3, delay: 0.5, opacity:0 ,y: -50, ease: "power1.out"});
    </script>
</body>
@stop
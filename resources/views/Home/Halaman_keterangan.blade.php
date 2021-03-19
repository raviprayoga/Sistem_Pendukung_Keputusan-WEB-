@extends('partials.body')
@section('content')
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .back_home{
            z-index: -1;
            top: 0px;
            position: absolute;
            width: 100%;
            background-size: cover;
            min-height: 1220px;
        }
    </style>
</head>
<body>
    <img class="back_home" src="{{asset('assets/images/back_home.jpg')}}" alt="">
    <table class="table table-hover table-bordered " style="width: 90%; margin-left: 5%;margin-top: 3%;">
        <thead class="table-dark">
            <tr>
                <td style="width: 20%; text-align: center">Nama Matakuliah</td>
                <td>SKS</td>
                <td>Semester</td>
                <td style="text-align: center">Silabus</td>
                <td style="text-align: center">Materi Pembelajaran Pokok</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center">{{$matkul->nama_matkul_pilihan}}</td>
                <td>{{$matkul->sks}}</td>
                <td>{{$matkul->semester}}</td>
                <td style="text-align: justify">{{$matkul->silabus}}</td>
                <td style="text-align: justify">{{$matkul->materi_pokok}}</td>
            </tr>
        </tbody>
    </table>
</body>
@stop
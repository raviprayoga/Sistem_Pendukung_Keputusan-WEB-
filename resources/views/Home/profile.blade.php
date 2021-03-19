@extends('partials.body')
@section('content')
<head>
    <style>
        .profile1{
            font-size: 19px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif, Courier, monospace; 
            font-weight: bold;
            margin-left: 10%;
            margin-bottom: 2px;
            color:#00637c;
        }
        .teks{
            margin-top: 2%;
        }
        .back_home1{
            z-index: -1;
            top: 0px;
            position: absolute;
            width: 100%;
            background-size: cover;
            min-height: 1620px;
        }
        .btn_nilai{
            background-color: #00B3CA;
            float: right;
            margin-right: 15%;
            width: 100px;
            height: 40px;
            border: none;
            border-radius: 2px;
            color: #ffffff;
            font-family: Arial;
            font-size: 13px;
            font-weight: 700;
        }
        .btn_nilai:hover{
            background-color: #1b9bff;
        }
        .dataTables_wrapper .dataTables_filter {
            float: right;
            text-align: right;
            visibility: hidden;
            }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">  
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  
</head>
<body>
    <img class="back_home1" src="{{asset('assets/images/back_home.jpg')}}" alt="">
    <div class="teks">
        <p class="profile1">Nama : {{auth()->user()->name}}</p>
        <p class="profile1">NIM  : {{auth()->user()->nim}}</p>
    </div>
    {{--  table  --}}
    <table class="table" style="width: 80%; margin-left: 9.5%; margin-right: 10%">
        <thead>
            <tr>
            <th scope="col">Nama Matakuliah</th>
            <th style="text-align: center;  " scope="col">SKS</th>
            <th style="text-align: center;" scope="col">Nilai Huruf</th>
            <th style="text-align: center;color:#ff9f66" scope="col">Nilai</th>
            <th style="text-align: center;color:" scope="col">GAP</th>
            <th style="text-align: center;color:" scope="col">Nilai Bobot</th>
            </tr>
        </thead>
        <tbody>
            @php
                $vararr = 0;
                $tambahbobot = 0;
                $ambilbobot = 0;
                $jumlahbobot = 0;
            @endphp
            @foreach (auth()->user()->matkul_wajib as $item)
            <span hidden>{{$vararr = $item->pivot->nilai + $vararr}}</span>
            <tr>
                <td>{{$item->nama_matkul_wajib}}</td>
                <td style="text-align: center">{{$item->sks}}</td>
                <td style="text-align: center;">{{$item->pivot->nilai_huruf}}</td>  
                <td style="text-align: center;color:#ff9f66">{{$item->pivot->nilai}}</td>                  
                <td style="text-align: center;">{{$item->pivot->nilai-4}}</td>
                <td style="text-align: center;">{{$item->pivot->bobot}}</td>
            </tr>
            <span hidden> {{$tambahbobot = $item->pivot->bobot + $tambahbobot}}</span>
            @endforeach
        </tbody>
    </table>
    <button type="button" name="rekom" onclick="window.location.href='/{{auth()->user()->name}}/rekomendasi';" class="btn_nilai">Rekomendasi</button>
</body>
@stop
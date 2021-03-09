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
    </style>
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
            <th style="text-align: center;color:#ff9f66" scope="col">Nilai</th>
            <th style="text-align: center;color:" scope="col">GAP</th>
            <th style="text-align: center;color:" scope="col">Nilai Bobot</th>
            </tr>
        </thead>
        <tbody>
            @foreach (auth()->user()->matkul_wajib as $item)
            <tr>
                <td>{{$item->nama_matkul_wajib}}</td>
                <td style="text-align: center">{{$item->sks}}</td>
                <td style="text-align: center;color:#ff9f66">{{$item->pivot->nilai}}</td>
                <td style="text-align: center;">{{$item->pivot->nilai-4}}</td>
                {{--  nilai bobot  --}}
                @if ($item->pivot->nilai-4==0)
                    <td style="text-align: center;">5</td>
                    @elseif ($item->pivot->nilai-4==-0.5)
                    <td style="text-align: center;">4.5</td>
                    @elseif ($item->pivot->nilai-4==-1)
                    <td style="text-align: center;">4</td>
                    @elseif ($item->pivot->nilai-4==-1.5)
                    <td style="text-align: center;">3.5</td>
                    @elseif ($item->pivot->nilai-4==-2)
                    <td style="text-align: center;">3</td>
                    @elseif ($item->pivot->nilai-4==-3)
                    <td style="text-align: center;">2</td>
                    @elseif ($item->pivot->nilai-4==-4)
                    <td style="text-align: center;">1</td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
    <button type="button" onclick="window.location.href='/rekomendasi';" class="btn_nilai">Rekomendasi</button>
</body>
@stop
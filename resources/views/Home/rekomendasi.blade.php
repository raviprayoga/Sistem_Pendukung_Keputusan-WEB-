@extends('partials.body')
@section('content')
<head>
    <style>
        .back_home1{
            z-index: -1;
            top: 0px;
            position: absolute;
            width: 100%;
            background-size: cover;
            min-height: 1220px;
        }
        .teks{
            font-size: 32px;
            font-weight: 200;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif, Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            margin-top: 10px;
        }
        .hide{
            width: 20%;
            margin-left: 40%;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif, 'Arial Narrow', Arial, sans-serif;
        }
        .rekomendasi{
            width: 60%;
            margin-left: 20%;
        }
        .table{
            background-color: #00B3CA;
            color: aliceblue;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
<body>
    <img class="back_home1" src="{{asset('assets/images/back_home.jpg')}}" alt="">
    <div class="teks">
        <p> {{auth()->user()->name}}, berikut adalah matakuliah pilihan program studi yang sesuai dengan kompetensi individu kamu</p>
    </div>
    <div class="rekomendasi">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" style=" text-align: center;">No</th>
                    <th scope="col">Nama Matakuliah</th>
                    <th scope="col" style=" text-align: center;">SKS</th>
                </tr>
                @php
                    $no = 1;    
                @endphp
            </thead>
            <tbody>
                @foreach($matkul_pilihan as $item)
                <tr  class="table-light">
                    <th style="font-weight: 500; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;text-align: center;">{{$no++}}</th>
                    <th style="font-weight: 500; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">{{$item->nama_matkul_pilihan}}</th>
                    <th style="font-weight: 500; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; text-align: center;">{{$item->sks}}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="hide">
        <p>
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Tampilkan semua matakuliah pilihan
            </a>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <table class="table">
                    <thead>
                        <tr class="">
                            <th scope="col">Nama Matakuliah</th>
                            <th scope="col" style=" text-align: center;">SKS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($matkul_pilihan as $item)
                        <tr class="table-light">
                            <th style="font-weight: 500; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">{{$item->nama_matkul_pilihan}}</th>
                            <th style="font-weight: 500; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; text-align: center;">{{$item->sks}}</th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
@stop
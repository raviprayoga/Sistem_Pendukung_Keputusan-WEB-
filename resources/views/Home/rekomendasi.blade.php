@extends('partials.body')
@section('content')
<head>
    <style>
        .tombol{
            margin-top: 10%;
            margin-left: 33%;
            margin-right: 2%;
        }
        .tombol2{
            margin-top: 10%;
        }
        .paginate_button{
            background-color: transparent;
        }
        .page-item.active .page-link {
            background-color: #00B3CA !important;
            color: #fff !important;
            border:none;
        }
        .page-item{
            visibility: hidden !important;
        }
        .page-link {
            color: black !important;
        }
        .dataTables_wrapper .dataTables_filter {
            float: right;
            text-align: right;
            visibility: hidden;
            }
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
            font-weight: 400;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif, Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            margin-top: 5%;
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">  
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
</head>
<body>
    <img class="back_home1" src="{{asset('assets/images/back_home.jpg')}}" alt="">
    
    @php
        $data_matkul_wajib = [$probstat=0 , $oak=0, $mrv=0, $basdat=0, $matdis=0, $logif=0, $asd=0, $tbfo=0, $stigma=0, $so=0, $pbo=0,
        $drpl=0, $imk=0, $web=0, $ai=0, $mppl=0, $jarkom=0, $si=0, $kwu=0, $ppl=0, $grafkom=0, $pam=0, $mbd=0, $embeded=0, $socio=0];
        $data_matkul_pilihan = [ $kj=0, $tgame=0, $sil=0 , $DataMining=0 , $Kriptografi=0, $PervasiveComputing=0, $PengolahanSinyalDigital=0, $InformationRetieval=0, $TeknologiBasisData=0, 
        $RepresentasiPengetahuanDanPenalaran=0, $PengolahanCitraDigital=0, $PembelajaranMesin=0, $PengolahanBahasaAlami=0, $JaringanKomputerLanjut=0, $pwl=0,
        $SistemTeknologiMultimedia=0, $VisualisasiDataDanInformasi=0, $SistemInformasiGeografis=0];
        $cf = 0;
        $sf = 0;
    @endphp
    @foreach (auth()->user()->matkul_wajib as $item)
        @foreach ($matkul as $itempilihan)
            @if ($itempilihan->nama_matkul_pilihan == "Keamanan Jaringan")
                @if ($item->nama_matkul_wajib == "Jaringan Komputer")
                    <span hidden>{{$jarkom = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Sistem Operasi")
                    <span hidden>{{$so = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Organisasi dan Arsitektur Komputer")
                    <span hidden>{{$oak = $item->pivot->bobot}} </span>
                @endif
                <span hidden>{{$cf = ($jarkom)/1}}</span>
                <span hidden>{{$sf = ($so+$oak)/2}}</span>
                <span hidden>{{$kj = $cf*0.6 + $sf*0.4}} </span>
            @endif
            
            @if ($itempilihan->nama_matkul_pilihan == "Teknologi Game")
                @if ($item->nama_matkul_wajib == "Pemrograman Berorientasi Objek")
                <span hidden>{{$pbo = $item->pivot->bobot}} </span> 
                @endif
                @if ($item->nama_matkul_wajib == "Strategi Algoritma")
                    <span hidden>{{$stigma = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Algoritma dan Struktur Data")
                    <span hidden>{{$asd = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Matematika Diskrit")
                    <span hidden>{{$matdis = $item->pivot->bobot}} </span>
                @endif
                <span hidden>{{$cf = ($asd+$pbo)/2}}</span>
                <span hidden>{{$sf = ($stigma+$matdis)/2}}</span>
                <span hidden>{{$tgame = $cf*0.6 + $sf*0.4}} </span>
            @endif

            @if ($itempilihan->nama_matkul_pilihan == "Sistem Informasi Lanjut")
                @if ($item->nama_matkul_wajib == "Sistem Informasi")
                <span hidden>{{$si = $item->pivot->bobot}} </span> 
                @endif
                @if ($item->nama_matkul_wajib == "Basis Data")
                    <span hidden>{{$basdat = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Matematika Diskrit")
                    <span hidden>{{$matdis = $item->pivot->bobot}} </span>
                @endif
                <span hidden>{{$cf = ($si)/1}}</span>
                <span hidden>{{$sf = ($basdat+$matdis)/2}}</span>
                <span hidden>{{$sil = $cf*0.6 + $sf*0.4}} </span>
            @endif

            @if ($itempilihan->nama_matkul_pilihan == "Sistem/Teknologi Multimedia")
                @if ($item->nama_matkul_wajib == "Jaringan Komputer")
                    <span hidden>{{$jarkom = $item->pivot->bobot}} </span> 
                @endif
                @if ($item->nama_matkul_wajib == "Sistem Operasi")
                    <span hidden>{{$so = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Organisasi dan Arsitektur Komputer")
                    <span hidden>{{$oak = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Interaksi Manusia dan Komputer")
                    <span hidden>{{$imk = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Dasar Rekayasa Perangkat Lunak")
                <span hidden>{{$drpl = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Algoritma dan Struktur Data")
                    <span hidden>{{$asd = $item->pivot->bobot}} </span>
                @endif
                <span hidden>{{$cf = ($oak+$si+$imk)/3}}</span>
                <span hidden>{{$sf = ($drpl+$jarkom+$asd)/3}}</span>
                <span hidden>{{$SistemTeknologiMultimedia = $cf*0.6 + $sf*0.4}} </span>
            @endif
            
            @if ($itempilihan->nama_matkul_pilihan == "Pemrograman Web Lanjut")
                @if ($item->nama_matkul_wajib == "Pemrograman Web")
                <span hidden>{{$web = $item->pivot->bobot}} </span> 
                @endif
                @if ($item->nama_matkul_wajib == "Pemrograman Berorientasi Obyek")
                    <span hidden>{{$pbo = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Algoritma dan Struktur Data")
                    <span hidden>{{$asd = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Basis Data")
                    <span hidden>{{$basdat = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Matematika Diskrit")
                    <span hidden>{{$matdis = $item->pivot->bobot}} </span>
                @endif
                <span hidden>{{$cf = ($web+$pbo+$asd+$basdat)/4}}</span>
                <span hidden>{{$sf = ($matdis)/1}}</span>
                <span hidden>{{$pwl = $cf*0.6 + $sf*0.4}} </span>
            @endif

            @if ($itempilihan->nama_matkul_pilihan == "Data Mining")
                @if ($item->nama_matkul_wajib == "Basis Data")
                <span hidden>{{$basdat = $item->pivot->bobot}} </span> 
                @endif
                @if ($item->nama_matkul_wajib == "Intelegensi Buatan")
                    <span hidden>{{$ai = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Matematika Diskrit")
                    <span hidden>{{$matdis = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Probabilitas dan Statiska")
                    <span hidden>{{$probstat = $item->pivot->bobot}} </span>
                @endif
                <span hidden>{{$cf = ($basdat+$ai)/2}}</span>
                <span hidden>{{$sf = ($matdis+$probstat)/2}}</span>
                <span hidden>{{$DataMining = $cf*0.6 + $sf*0.4}} </span>
            @endif

            @if ($itempilihan->nama_matkul_pilihan == "Kriptografi")
                @if ($item->nama_matkul_wajib == "Jaringan Komputer")
                    <span hidden>{{$jarkom = $item->pivot->bobot}} </span> 
                @endif
                @if ($item->nama_matkul_wajib == "Sistem Operasi")
                    <span hidden>{{$si = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Matematika Diskrit")
                    <span hidden>{{$matdis = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Organisasi dan Arsitektur Komputer")
                    <span hidden>{{$oak = $item->pivot->bobot}} </span>
                @endif
                <span hidden>{{$cf = ($jarkom+$matdis)/2}}</span>
                <span hidden>{{$sf = ($so+$oak)/2}}</span>
                <span hidden>{{$Kriptografi = $cf*0.6 + $sf*0.4}} </span>
            @endif
            
            @if ($itempilihan->nama_matkul_pilihan == "Pervasive Computing")
                @if ($item->nama_matkul_wajib == "Embedded System")
                <span hidden>{{$embeded = $item->pivot->bobot}} </span> 
                @endif
                @if ($item->nama_matkul_wajib == "Pemrograman Berorientasi Objek")
                    <span hidden>{{$pbo = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Matematika Diskrit")
                    <span hidden>{{$matdis = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Algoritma dan Struktur Data")
                    <span hidden>{{$asd = $item->pivot->bobot}} </span>
                @endif
                <span hidden>{{$cf = ($embeded+$asd+$pbo)/3}}</span>
                <span hidden>{{$sf = ($matdis)/1}}</span>
                <span hidden>{{$PervasiveComputing = $cf*0.6 + $sf*0.4}} </span>
            @endif

            @if ($itempilihan->nama_matkul_pilihan == "Pengolahan Sinyal Digital")
                @if ($item->nama_matkul_wajib == "Probabilitas dan Statiska")
                <span hidden>{{$probstat = $item->pivot->bobot}} </span> 
                @endif
                @if ($item->nama_matkul_wajib == "Organisasi dan Arsitektur Komputer")
                    <span hidden>{{$oak = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Matematika Diskrit")
                    <span hidden>{{$matdis = $item->pivot->bobot}} </span>
                @endif
                <span hidden>{{$cf = ($oak+$matdis)/2}}</span>
                <span hidden>{{$sf = ($probstat)/1}}</span>
                <span hidden>{{$PengolahanSinyalDigital = $cf*0.6 + $sf*0.4}} </span>
            @endif

            @if ($itempilihan->nama_matkul_pilihan == "Information Retieval")
                @if ($item->nama_matkul_wajib == "Probabilitas dan Statiska")
                    <span hidden>{{$probstat = $item->pivot->bobot}} </span> 
                @endif
                @if ($item->nama_matkul_wajib == "Matematika Diskrit")
                    <span hidden>{{$matdis = $item->pivot->bobot}} </span>
                @endif
                <span hidden>{{$cf = ($probstat)/1}}</span>
                <span hidden>{{$sf = ($matdis)/1}}</span>
                <span hidden>{{$InformationRetieval = $cf*0.6 + $sf*0.4}} </span>
            @endif
            
            @if ($itempilihan->nama_matkul_pilihan == "Teknologi Basis Data")
                @if ($item->nama_matkul_wajib == "Manajemen Basis Data")
                <span hidden>{{$mbd = $item->pivot->bobot}} </span> 
                @endif
                @if ($item->nama_matkul_wajib == "Basis Data")
                    <span hidden>{{$basdat = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Matematika Diskrit")
                    <span hidden>{{$matdis = $item->pivot->bobot}} </span>
                @endif
                <span hidden>{{$cf = ($mbd+$basdat)/2}}</span>
                <span hidden>{{$sf = ($matdis)/1}}</span>
                <span hidden>{{$TeknologiBasisData = $cf*0.6 + $sf*0.4}} </span>
            @endif

            @if ($itempilihan->nama_matkul_pilihan == "Representasi Pengetahuan dan Penalaran")
                @if ($item->nama_matkul_wajib == "Intelegensi Buatan")
                <span hidden>{{$ai = $item->pivot->bobot}} </span> 
                @endif
                @if ($item->nama_matkul_wajib == "Probabilitas dan Statiska")
                    <span hidden>{{$probstat = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Strategi Algoritma")
                    <span hidden>{{$stigma = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Matematika Diskrit")
                    <span hidden>{{$matdis = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Algoritma dan Struktur Data")
                    <span hidden>{{$asd = $item->pivot->bobot}} </span>
                @endif
                <span hidden>{{$cf = ($ai+$probstat+$stigma)/3}}</span>
                <span hidden>{{$sf = ($matdis+$asd)/2}}</span>
                <span hidden>{{$RepresentasiPengetahuanDanPenalaran = $cf*0.6 + $sf*0.4}} </span>
            @endif

            @if ($itempilihan->nama_matkul_pilihan == "Pengolahan Citra Digital")
                @if ($item->nama_matkul_wajib == "Intelegensi Buatan")
                    <span hidden>{{$ai = $item->pivot->bobot}} </span> 
                @endif
                @if ($item->nama_matkul_wajib == "Matriks dan Ruang Vektor")
                    <span hidden>{{$mrv = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Probabilitas dan Statiska")
                    <span hidden>{{$probstat = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Matematika Diskrit")
                    <span hidden>{{$matdis = $item->pivot->bobot}} </span>
                @endif
                <span hidden>{{$cf = ($ai+$mrv)/2}}</span>
                <span hidden>{{$sf = ($probstat+$matdis)/2}}</span>
                <span hidden>{{$PengolahanCitraDigital = $cf*0.6 + $sf*0.4}} </span>
            @endif
            
            @if ($itempilihan->nama_matkul_pilihan == "Pembelajaran Mesin")
                @if ($item->nama_matkul_wajib == "Intelegensi Buatan")
                <span hidden>{{$ai = $item->pivot->bobot}} </span> 
                @endif
                @if ($item->nama_matkul_wajib == "Probabilitas dan Statiska")
                    <span hidden>{{$probstat = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Strategi Algoritma")
                    <span hidden>{{$stigma = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Matematika Diskrit")
                    <span hidden>{{$matdis = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Algoritma dan Struktur Data")
                    <span hidden>{{$asd = $item->pivot->bobot}} </span>
                @endif
                <span hidden>{{$cf = ($asd+$matdis)/2}}</span>
                <span hidden>{{$sf = ($probstat+$stigma+$ai)/3}}</span>
                <span hidden>{{$PembelajaranMesin = $cf*0.6 + $sf*0.4}} </span>
            @endif

            @if ($itempilihan->nama_matkul_pilihan == "Pengolahan Bahasa Alami")
                @if ($item->nama_matkul_wajib == "Intelegensi Buatan")
                <span hidden>{{$ai = $item->pivot->bobot}} </span> 
                @endif
                @if ($item->nama_matkul_wajib == "Organisasi dan Arsitektur Komputer")
                    <span hidden>{{$oak = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Matematika Diskrit")
                    <span hidden>{{$matdis = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Algoritma dan Struktur Data")
                    <span hidden>{{$asd = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Strategi Algoritma")
                    <span hidden>{{$stigma = $item->pivot->bobot}} </span>
                @endif
                <span hidden>{{$cf = ($stigma+$asd)/2}}</span>
                <span hidden>{{$sf = ($matdis+$oak+$ai)/3}}</span>
                <span hidden>{{$PengolahanBahasaAlami = $cf*0.6 + $sf*0.4}} </span>
            @endif

            @if ($itempilihan->nama_matkul_pilihan == "Jaringan Komputer Lanjut")
                @if ($item->nama_matkul_wajib == "Jaringan Komputer")
                    <span hidden>{{$jarkom = $item->pivot->bobot}} </span> 
                @endif
                @if ($item->nama_matkul_wajib == "Organisasi dan Arsitektur Komputer")
                    <span hidden>{{$oak = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Sistem Operasi")
                    <span hidden>{{$so = $item->pivot->bobot}} </span>
                @endif
                <span hidden>{{$cf = ($jarkom+$so)/2}}</span>
                <span hidden>{{$sf = ($oak)/1}}</span>
                <span hidden>{{$JaringanKomputerLanjut = $cf*0.6 + $sf*0.4}} </span>
            @endif
            
            @if ($itempilihan->nama_matkul_pilihan == "Visualisasi Data dan Informasi")
                @if ($item->nama_matkul_wajib == "Interaksi Manusia dan Komputer")
                <span hidden>{{$imk = $item->pivot->bobot}} </span> 
                @endif
                @if ($item->nama_matkul_wajib == "Dasar Rekayasa Perangkat Lunak")
                    <span hidden>{{$drpl = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Algoritma dan Struktur Data")
                    <span hidden>{{$asd = $item->pivot->bobot}} </span>
                @endif
                <span hidden>{{$cf = ($drpl+$imk)/2}}</span>
                <span hidden>{{$sf = ($asd)/1}}</span>
                <span hidden>{{$VisualisasiDataDanInformasi = $cf*0.6 + $sf*0.4}} </span>
            @endif

            @if ($itempilihan->nama_matkul_pilihan == "Sistem Informasi Geografis")
                @if ($item->nama_matkul_wajib == "Sistem Informasi")
                <span hidden>{{$si = $item->pivot->bobot}} </span> 
                @endif
                @if ($item->nama_matkul_wajib == "Basis Data")
                    <span hidden>{{$basdat = $item->pivot->bobot}} </span>
                @endif
                @if ($item->nama_matkul_wajib == "Matematika Diskrit")
                    <span hidden>{{$matdis = $item->pivot->bobot}} </span>
                @endif
                <span hidden>{{$cf = ($basdat+$si)/2}}</span>
                <span hidden>{{$sf = ($matdis)/1}}</span>
                <span hidden>{{$SistemInformasiGeografis = $cf*0.6 + $sf*0.4}} </span>
            @endif
        @endforeach
    @endforeach

    <button class="btn btn-primary tombol" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Tampilkan Rekomendasi Matakuliah
    </button>
    <button class="btn btn-primary tombol2" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
        Tampilkan Seluruh Matakuliah Pilihan
    </button>

    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <div class="teks">
                <p> {{auth()->user()->name}}, berikut adalah matakuliah pilihan program studi yang sesuai dengan kompetensi individu kamu</p>
            </div>
            <table id="example" class="display" style="width:50%; margin-left: 25%;">   
                <thead>
                    <tr class="table table-dark">
                        <th>Nama Matkul Pilihan</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Data Mining</td>
                        <td>{{$DataMining}}</td>
                    </tr>
                    <tr>
                        <td>Kriptografi</td>
                        <td>{{$Kriptografi}}</td>
                    </tr>
                    <tr>
                        <td>Pervasive Computing</td>
                        <td>{{$PervasiveComputing}}</td>
                    </tr>
                    <tr>
                        <td>Teknologi Game</td>
                        <td>{{$tgame}}</td>
                    </tr>
                    <tr>
                        <td>Pengolahan Sinyal Digital</td>
                        <td>{{$PengolahanSinyalDigital}}</td>
                    </tr>
                    <tr>
                        <td>Information Retieval</td>
                        <td>{{$InformationRetieval}}</td>
                    </tr>
                    <tr>
                        <td>Teknologi Basis Data</td>
                        <td>{{$TeknologiBasisData}}</td>
                    </tr>
                    <tr>
                        <td>Representasi Pengetahuan dan Penalaran</td>
                        <td>{{$RepresentasiPengetahuanDanPenalaran}}</td>
                    </tr>
                    <tr>
                        <td>Pengolahan Citra Digital</td>
                        <td>{{$PengolahanCitraDigital}}</td>
                    </tr>
                    <tr>
                        <td>Pembejaran Mesin</td>
                        <td>{{$PembelajaranMesin}}</td>
                    </tr>
                    <tr>
                        <td>Pengolahan Bahasa Alami</td>
                        <td>{{$PengolahanBahasaAlami}}</td>
                    </tr>
                    <tr>
                        <td>Sistem Informasi Lanjut</td>
                        <td>{{$sil}}</td>
                    </tr>
                    <tr>
                        <td>Keamanan Jaringan</td>
                        <td>{{$kj}}</td>
                    </tr>
                    <tr>
                        <td>Jaringan Komputer Lanjut</td>
                        <td>{{$JaringanKomputerLanjut}}</td>
                    </tr>
                    <tr>
                        <td>Pemrograman Web Lanjut</td>
                        <td>{{$pwl}}</td>
                    </tr>
                    <tr>
                        <td>Sistem / Teknologi Multimedia</td>
                        <td>{{$SistemTeknologiMultimedia}}</td>
                    </tr>
                    <tr>
                        <td>Visualisasi Data dan Informasi</td>
                        <td>{{$VisualisasiDataDanInformasi}}</td>
                    </tr>
                    <tr>
                        <td>Sistem Informasi Geografis</td>
                        <td>{{$SistemInformasiGeografis}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="collapse" id="collapseExample1">
        <div class="card card-body">
            @php
                $no = 1;
            @endphp
            <table class="table table-hover" style="width: 40%; margin-left: 30%;">
                <thead>
                  <tr>
                    <th scope="col" style="text-align: center" >No</th>
                    <th scope="col" style="text-align: center">Nama Matakuliah</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($matkul as $itempilihan)
                        <tr class="table-light">
                            <td style="text-align: center">{{$no++}}</td>
                            <td style="text-align: center;"><a href="/{{$itempilihan->id}}/keterangan" style="color: black; text-decoration: none;"> {{$itempilihan->nama_matkul_pilihan}}</a></td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>

    
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable( {
                "order": [[ 1, "desc" ]],
                "lengthChange": false,
                "paging": true,
                "pageLength":10,
                "sPagingType": "simple",
                "info": false,
            } );
        } );
    </script>
</body>
@stop
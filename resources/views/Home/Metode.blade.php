@extends('partials.body')
@section('content')

<link rel="stylesheet" href="{{asset('css/custom_metode.css')}}">
<body>
    <img class="back_home" src="{{asset('assets/images/back_home.jpg')}}" alt="">

    {{--  tahap 1  --}}
    <div class="judul">
        <div class="col-6">
        <label for="" class="jdl">
            Tahap 1 Penentuan Kriteria Penunjang Pemilihan Matakuliah Pilihan
        </label>
        <p class="ket">Dalam melakukan keputusan pemilihan matakuliah pilihan,
            dibutuhkan aspek penunjang, dalam kasus ini yang menjadi aspek penunjang
            adalah matakuliah wajib yang berkaitan dengan matakuliah pilihan.</p>
            <table class="tab">
                <tr>
                    <th style="background-color: #197278; color: #fff">No</th>
                    <th style="background-color: #197278; color: #fff">Keamanan Jaringan</th>
                </tr>
                <tr>
                    <td style="background-color: #ffa630; color: #0c0c0c">1</td>
                    <td style="background-color: #ffa630; color: #0c0c0c">Jaringan Komputer</td>
                </tr> <tr>
                    <td style="background-color: #ffa630; color: #0c0c0c">2</td>
                    <td style="background-color: #ffa630; color: #0c0c0c">Sister Operasi</td>
                </tr>
                <tr>
                    <td style="background-color: #ffa630; color: #0c0c0c">1</td>
                    <td style="background-color: #ffa630; color: #0c0c0c">Matematika Diskrit</td>
                </tr>
            </table>
        </div>
    </div>

    {{--  tahap2  --}}
    <div class="judul">
        <div class="col-6">
        <label for="" class="jdl">
            Tahap 2 Penentuan Core factor dan Secondary factor
        </label>
        <p class="ket">Dalam melakukan keputusan pemilihan matakuliah pilihan, 
            dibutuhkan aspek penunjang, dalam kasus ini yang menjadi aspek penunjang 
            adalah nilai matakuliah wajib yang berkaitan dengan matakuliah pilihan.</p>
            <table class="tab">
                <tr>
                    <th style="background-color: #197278; color: #fff">No</th>
                    <th style="background-color: #197278; color: #fff">Keamanan Jaringan</th>
                    <th style="background-color: #197278; color: #fff">Kelompok Aspek</th>
                </tr>
                <tr>
                    <td style="background-color: #ffa630; color: #0c0c0c">1</td>
                    <td style="background-color: #ffa630; color: #0c0c0c">Jaringan Komputer</td>
                    <td style="background-color: #ffa630; color: #0c0c0c">CF</td>
                </tr> <tr>
                    <td style="background-color: #ffa630; color: #0c0c0c">2</td>
                    <td style="background-color: #ffa630; color: #0c0c0c">Sister Operasi</td>
                    <td style="background-color: #ffa630; color: #0c0c0c">CF</td>
                </tr>
                <tr>
                    <td style="background-color: #ffa630; color: #0c0c0c">1</td>
                    <td style="background-color: #ffa630; color: #0c0c0c">Matematika Diskrit</td>
                    <td style="background-color: #ffa630; color: #0c0c0c">SF</td>
                </tr>
            </table>
        </div>
    </div>

    {{--  tahap 3  --}}
    <div class="judul">
        <div class="col-6">
        <label for="" class="jdl">
            Tahap 3   Penentuan Nilai Gap
        </label>
        <p class="ket">Gap = Nilai Atribut - Nilai Target
            Perhitungan ini mengguakan proses pemetaan Gap Kompetensi yaitu membandingkan kompetensi individu ke dalam kompetensi profile
            Nilai mahasiswa yang dimaksud adalah nilai matakuliah wajib yang menjadi aspek penunjang pemilihan matakuliah pilihan.
        </p>
            <table class="tab">
                <tr>
                    <th style="background-color: #197278; color: #fff">Nilai Mahasiswa</th>
                    <th style="background-color: #197278; color: #fff">Profile Nilai</th>
                    <th style="background-color: #197278; color: #fff">GAP</th>
                </tr>
                <tr>
                    <td style="background-color: #ffa630; color: #0c0c0c">3</td>
                    <td style="background-color: #ffa630; color: #0c0c0c">4</td>
                    <td style="background-color: #ffa630; color: #0c0c0c">-1</td>
                </tr> <tr>
                    <td style="background-color: #ffa630; color: #0c0c0c">4</td>
                    <td style="background-color: #ffa630; color: #0c0c0c">4</td>
                    <td style="background-color: #ffa630; color: #0c0c0c">0</td>
                </tr>
                <tr>
                    <td style="background-color: #ffa630; color: #0c0c0c">2.5</td>
                    <td style="background-color: #ffa630; color: #0c0c0c">4</td>
                    <td style="background-color: #ffa630; color: #0c0c0c">-1.5</td>
                </tr>
            </table>
            <p class="ket">* A=4, AB=3.5, B=3, BC=2.5, C=2, D=1, E=0;</p>
        </div>
    </div>
    {{--  tahap 4  --}}
    <div class="judul">
        <div class="col-6">
        <label for="" class="jdl">
            Tahap 4 Penentuan Bobot Nilai</label>
            <table class="tab">
                <tr>
                    <th style="background-color: #197278; color: #fff">GAP</th>
                    <th style="background-color: #197278; color: #fff">Nilai Bobot</th>
                    <th style="background-color: #197278; color: #fff">Keterangan</th>
                </tr>
                <tr>
                    <td style="background-color: #ffa630; color: #0c0c0c">0</td>
                    <td style="background-color: #ffa630; color: #0c0c0c">5</td>
                    <td style="background-color: #ffa630; color: #0c0c0c">Tidak memiliki selisih, (nilai sesuai dengan yang dibutuhkan)</td>
                </tr> <tr>
                    <td style="background-color: #ffa630; color: #0c0c0c">-0.5</td>
                    <td style="background-color: #ffa630; color: #0c0c0c">4.5</td>
                    <td style="background-color: #ffa630; color: #0c0c0c">Kompetensi individu kekurangan 0,5 selisih</td>
                </tr>
                <tr>
                    <td style="background-color: #ffa630; color: #0c0c0c">-1</td>
                    <td style="background-color: #ffa630; color: #0c0c0c">4</td>
                    <td style="background-color: #ffa630; color: #0c0c0c">Kompetensi individu kekurangan 1 selisih</td>
                </tr>
                <tr>
                    <td style="background-color: #ffa630; color: #0c0c0c">-1.5</td>
                    <td style="background-color: #ffa630; color: #0c0c0c">3.5</td>
                    <td style="background-color: #ffa630; color: #0c0c0c">Kompetensi individu kekurangan 1.5 selisih</td>
                </tr>
                <tr>
                    <td style="background-color: #ffa630; color: #0c0c0c">-2</td>
                    <td style="background-color: #ffa630; color: #0c0c0c">3</td>
                    <td style="background-color: #ffa630; color: #0c0c0c">Kompetensi individu kekurangan 2 selisih</td>
                </tr>
                <tr>
                    <td style="background-color: #ffa630; color: #0c0c0c">-3</td>
                    <td style="background-color: #ffa630; color: #0c0c0c">2</td>
                    <td style="background-color: #ffa630; color: #0c0c0c">Kompetensi individu kekurangan 3 selisih</td>
                </tr><tr>
                    <td style="background-color: #ffa630; color: #0c0c0c">-4</td>
                    <td style="background-color: #ffa630; color: #0c0c0c">1</td>
                    <td style="background-color: #ffa630; color: #0c0c0c">Kompetensi individu kekurangan 4 selisih</td>
                </tr>
            </table>
        </div>
    </div>

    {{--  tahap 5  --}}
     <div class="judul">
        <div class="col-6">
        <label for="" class="jdl">
            Tahap 5    Penghitungan Bobot Nilai
        </label>
        <p class="ket">Proses penghitungan nilai dibagi menjadi 2 kelompok dengan berdasarkan Nilai Core factor dan Secondary factor yang ada.</p>
        <p class="jdl" style="font-style: italic">Penghitungan nilai Core Factor : </p> <img style="margin-top: 10px" src="{{asset('assets/images/ncf.png')}}" alt=""> <br>
        <p class="ket">Dimana NC adalah jumlah nilai bobot aspek penunjang dengan kategori sub aspek merupakan Core factor (CF) </p>
        <p class="jdl" style="font-style: italic">Penghitungan nilai Secondary Factor :</p> <img style="margin-top: 10px" src="{{asset('assets/images/nsf.png')}}" alt="">
        <p class="ket">Dimana NS adalah jumlah nilai bobot aspek penunjang dengan kategori sub aspek merupakan Secondary factor (SF) </p>
        <p class="jdl" style="font-style: italic">Nilai total berdasarkan Core factor dan Secondary factor</p> <img style="margin-top: 10px; margin-bottom: 90px;" src="{{asset('assets/images/total.png')}}" alt="">
        </div>
    </div>

</body>
@stop
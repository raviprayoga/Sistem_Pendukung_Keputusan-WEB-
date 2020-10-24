@extends('partials.body')
@section('content')

<link rel="stylesheet" href="{{asset('css/custom_form.css')}}">
<link rel="stylesheet" href="{{asset('css/custom_home.css')}}">
<body>
    <div class="jdl">
        <label for="" class="judul">INPUT NILAI</label>
    </div>
    <img class="back_home" src="{{asset('assets/images/back_home.jpg')}}" alt="">
    
{{--  table  --}}
<div >
    <table class="tab">
      <tr>
        <th style="background-color: #197278; color: #fff">Nama Matakuliah</th>
        <th style="background-color: #ffa630; width: 70px">Nilai</th>
        <th style="background-color: #197278; color: #fff">Nama Matakuliah</th>
        <th style="background-color: #ffa630; width: 70px;">Nilai</th>
      </tr>
      <tr>
        <td style="font-size: 20px;background-color: #fff;">Pemrograman Web</td>
        <td style="background-color: #fff;"><input type="text" style="width: 70px; border: none; text-align: center; font-size: 20px"></td>
        <td style="font-size: 20px;background-color: #fff;">Manajemen Basis Data</td>
        <td style="background-color: #fff;"><input type="text" style="width: 70px; border: none; text-align: center; font-size: 20px"></td>
      </tr>
      <tr>
        <td style="font-size: 20px;background-color: #fff;">Algoritma dan Struktur Data</td>
        <td style="background-color: #fff;"><input type="text" style="width: 70px; border: none; text-align: center; font-size: 20px"></td>
        <td style="font-size: 20px;background-color: #fff;">Dasar Rekayasa Perangkat Lunak</td>
        <td style="background-color: #fff;"><input type="text" style="width: 70px; border: none; text-align: center; font-size: 20px"></td>
      </tr>
      <tr>
        <td style="font-size: 20px;background-color: #fff;">Pemrograman Web</td>
        <td style="background-color: #fff;"><input type="text" style="width: 70px; border: none; text-align: center; font-size: 20px"></td>
        <td style="font-size: 20px;background-color: #fff;">Manajemen Basis Data</td>
        <td style="background-color: #fff;"><input type="text" style="width: 70px; border: none; text-align: center; font-size: 20px"></td>
      </tr>
    </table>
    <button class="btn_input">Submit</button>
  </div>
  

</body>
@stop
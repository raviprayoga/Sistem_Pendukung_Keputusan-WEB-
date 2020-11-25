@extends('partials.body')
@section('content')

<link rel="stylesheet" href="{{asset('css/custom_form.css')}}">
<link rel="stylesheet" href="{{asset('css/custom_home.css')}}">
<body>
    <div class="jdl">
        <label for="" class="judul">INPUT NILAI</label>
    </div>
    <img class="back_home2" src="{{asset('assets/images/back_home.jpg')}}" alt="">
    
{{--  table  --}}
<div >
    <table class="tab">
      <tr>
        <th style="background-color: #197278; color: #fff; width: 60%">Nama Matakuliah</th>
        <th style="background-color: #ffa630; width: 10%">Nilai</th>
      </tr>
      @foreach($matkul_wajib as $item)
      <tr>
        <td style="font-size: 20px">{{ $item->nama_matkul_wajib }}</td>
        <td ><input type="text" style="width: 130px; border: none; text-align: center; font-size: 20px"></td>
      </tr>
      @endforeach
    </table>
    <button class="btn_input">Submit</button>
  </div>
  

</body>
@stop

@extends('partials.body')
@section('content')
<head>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
    <script type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/custom_form.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom_home.css')}}">
</head>
<body>
  <div>
    <label class="judul">INPUT NILAI</label>
  </div>
  <img class="back_home2" src="{{asset('assets/images/back_home.jpg')}}" alt="">
{{--  table  --}}
  <div >
    <table class="tab">
      <form action="/pengguna/{{auth()->user()->id}}/tambahnilai" method="POST" enctype="multipart/form-data">
        {{ csrf_field()}}
        <div class="panel panel-header">
          <div class="row">
        </div>
          <thead>
            <tr>
              <th style="background-color: #197278; color: #fff; width: 60%" >Nama Matakuliah</th>
              <th style="background-color: #ffa630; width: 10%" >Nilai</th>
              <th hidden style="background-color: #ffa630; width: 10%" >Nilai_Terkonversi</th>
              <th hidden style="background-color: #ffa630; width: 10%" >Bobot Nilai</th>
            </tr>
          </thead>
          <tbody>
            @foreach($matkul_wajib as $item)
            <tr>
              <td>
                <select class="form-control" id="matkul" name="matkul[]">
                  <option value="" selected> Pilih Matakuliah..</option>
                  @foreach ($matkul_wajib as $item) 
                    <option value="{{$item->id}}">{{$item->nama_matkul_wajib}}</option>
                  @endforeach
                </select>
              </td>
              {{ csrf_field() }}
              <td><input class="konversi" type="text" name="nilai_huruf[]" id="nilai_huruf" autocomplete="off"></td>
              <td hidden><input class="konversi" type="text" name="nilai[]" id="nilai"></td>
              <td hidden><input class="konversi" type="text" name="bobot[]" id="bobot"></td>
            </tr>
            @endforeach 
          </tbody>
        <button type="submit" class="btn_input" >Submit</button>
      </form>
    </table>
</div>
</body>
@stop
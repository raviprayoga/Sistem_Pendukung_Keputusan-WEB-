
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
              <th style="background-color: #ffa630; width: 10%" >Nilai_Terkonversi</th>
            </tr>
          </thead>
          <tbody>
            {{-- <tr> --}}
              {{-- <td>
                <select class="form-control" id="matkul" name="matkul">
                  @foreach ($matkul_wajib as $item) 
                    <option value="{{$item->id}}">{{$item->nama_matkul_wajib}}</option>
                  @endforeach
                </select>
              </td>
                <td class="konversi"> <input type="text" name="" id="nilaiawal">  </td>
                <td class="konversi"> <input type="text" name="nilai" id="nilai"> </td> --}}
            {{-- </tr> --}}
            @foreach($matkul_wajib as $item)
            <tr>
              <td>
                <select class="form-control" id="matkul" name="matkul[]">
                  @foreach ($matkul_wajib as $item) 
                    <option value="{{$item->id}}">{{$item->nama_matkul_wajib}}</option>
                  @endforeach
                </select>
              </td>
              <td class="konversi"> <input type="text" name="nilaiawal[]" id="nilaiawal">  </td>
              <td class="konversi"> <input type="text" name="nilai[]" id="nilai"> </td>
            </tr>
            @endforeach
          </tbody>
        <button type="submit" class="btn_input" >Submit</button>
      </form>
    </table>
</div>


{{--  addRow  --}}
{{--  <script type="text/javascript">
  $('.addRow').on('click',function(){
      addRow();
  });
  function addRow(){
      var tr = '<tr>' +
        '<td><select class="form-control" id="matkul" name="matkul[]">@foreach ($matkul_wajib as $item)<option value="{{$item->id}}">{{$item->nama_matkul_wajib}}</option>@endforeach</select></td><td class="konversi"> <input type="text" name="nilaiawal[]" id="nilaiawal"></td><td class="konversi"> <input type="text" name="nilai[]" id="nilai"></td>'
          '</tr>';
          $('tbody').append(tr);
  };
</script>  --}}

{{--  konversi nilai  --}}
<script type="text/javascript">
        $(".konversi").keyup(function(){
            var nilaiawal = $("#nilaiawal").val();
            if(nilaiawal == "A" || nilaiawal == "a"){
                var nilai = 4;
                $("#nilai").attr("value",nilai)
            }else if(nilaiawal == "AB" || nilaiawal == "Ab" || nilaiawal == "ab"){
                var nilai = 3.5;
                $("#nilai").attr("value",nilai)
            }else if(nilaiawal == "B" || nilaiawal == "b"){
                var nilai = 3;
                $("#nilai").attr("value",nilai)
            }else if(nilaiawal == "BC" || nilaiawal == "Bc" || nilaiawal == "bc"){
                var nilai = 2.5;
                $("#nilai").attr("value",nilai)
            }else if(nilaiawal == "C" || nilaiawal == "c"){
                var nilai = 2;
                $("#nilai").attr("value",nilai)
            }else if(nilaiawal == "D" || nilaiawal == "d"){
                var nilai = 1;
                $("#nilai").attr("value",nilai)
            }else if(nilaiawal == "E" || nilaiawal == "e"){
                var nilai = 0;
                $("#nilai").attr("value",nilai)
            }else{
                var nilai = "error"
                $("#nilai").attr("value",nilai)
            }
        });
</script>


</body>
@stop
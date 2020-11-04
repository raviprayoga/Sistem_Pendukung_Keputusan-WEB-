@extends('admin.admin_partials.admin_body')
@section('admin_content')
<head>
    <link rel="stylesheet" href="{{asset('css/custom_admin.css')}}">
    <script src="https://kit.fontawesome.com/01587eb664.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</head>
<h1>matakuliah wajib <button type="button" data-toggle="modal" data-target="#addModal" class="icon_add"><i class="fas fa-plus-square fa-sm"></i></button></h1>

{{--  tabel  --}}
<table class="user_tabel" border="1">
    <tr>
        <th>No.</th>
        <th >Nama Matakuliah</th>
        <th >Kode MK</th>
        <th >SKS</th>
        <th >Semester</th>
        <th>aksi</th>
    </tr>
    @php
        $no = 1;    
    @endphp
    @foreach($matkul_wajib as $item)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $item->nama_matkul_wajib }}</td>
        <td>{{ $item->kode_mk }}</td>
        <td>{{ $item->sks }}</td>
        <td>{{ $item->semester }}</td>
        <td>
            <button class="icon_aksi1"><i class="fas fa-edit fa-3x"></i></button>
            <button class="icon_aksi2"><i class="fas fa-trash-alt fa-3x"></i></button>
        </td>
    </tr>
    @endforeach
</table>


<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Matakuliah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@stop
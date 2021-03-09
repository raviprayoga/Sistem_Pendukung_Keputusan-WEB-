@extends('admin.admin_partials.admin_body')
@section('admin_content')
<head>
  <link rel="stylesheet" href="{{asset('css/custom_admin.css')}}">
  <script src="https://kit.fontawesome.com/01587eb664.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <style>
    .jdl{
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      font-weight: bold;
    }
    .jdl:hover{
      color: #1072c1;
    }
  </style>
</head>
<body style="background-color: 	#f0f6ff;">
  <h1 class="jdl">matakuliah pilihan <button type="button" data-toggle="modal" data-target="#addModal" class="icon_add"><i class="fas fa-plus-square fa-sm"></i></button></h1>
  {{--  table page  --}}
  <table id="dtBasicExample" class="table table-striped table-dark table-sm table-hover" cellspacing="0" width="135%">
    <thead>
      <tr>
        <th class="th-sm">No</th>
        <th class="th-sm">Nama Matakuliah</th>
        <th class="th-sm">Kode Mtakauliah</th>
        <th class="th-sm">SKS</th>
        <th class="th-sm">Semester</th>
        <th class="th-sm">Silabus</th>
        <th class="th-sm">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @php
          $no = 1;    
      @endphp
      @foreach($matkul_pilihan as $item)
      <tr>
        <td>{{ $no++ }}</td>
          <td>{{ $item->nama_matkul_pilihan }}</td>
          <td>{{ $item->kode_mk }}</td>
          <td>{{ $item->sks }}</td>
          <td>{{ $item->semester }}</td>
          <td style="width: 40%; text-align: justify;">{{ $item->silabus }}</td>
          <td>
              <button  data-toggle="modal" data-target="#editModal" class="icon_aksi1"
                data-mynama="{{$item->nama_matkul_pilihan}}" data-mykode="{{$item->kode_mk}}" data-mysks="{{$item->sks}}"  data-mysemester="{{$item->semester}}" data-id="{{$item->id}}" data-mysilabus="{{$item->silabus}}"><i class="fas fa-edit fa-2x"></i></button>
              <button onclick="window.location.href='/upload_matkul_pilihan/hapus_matkul_pilihan/{{ $item->id }}';" class="icon_aksi2" ><i class="fas fa-trash-alt fa-2x"></i></button>
          </td>
      </tr>
    @endforeach
    </tbody>
  </table>

  <!-- Modal Add -->
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
          <form action="/upload_matkul_pilihan/proses_upload_matkul_pilihan" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input class="modal_body" name="kode_mk" type="text" placeholder="Kode Matakuliah"> 
            <input class="modal_body" name="nama_matkul_pilihan" type="text" placeholder="Nama Matakuliah"> 
            <input class="modal_body" name="sks" type="text" placeholder="SKS"> 
            <input class="modal_body" name="semester" type="text" placeholder="Semester"> 
            <input class="modal_body" name="silabus" type="text" placeholder="Silabus"

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" value="Upload" class="btn btn-primary">Save changes</button>
            </div>
        </form>
        </div>
      
      </div>
    </div>
  </div>
  <!-- Modal Edit -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Matakuliah</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/upload_matkul_pilihan/update_matkul_pilihan/{{$item->id}}';" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="id" id="id" value=" ">
            <input class="modal_body" name="kode_mk" type="text" id="kode_mk"> 
            <input class="modal_body" name="nama_matkul_pilihan" type="text" id="nama_matkul_pilihan"> 
            <input class="modal_body" name="sks" type="text" id="sks"> 
            <input class="modal_body" name="semester" type="text" id="semester"> 
            <input class="modal_body" name="silabus" type="text" id="silabus">
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button  type="submit" value="Simpan Data" class="btn btn-primary">Save changes</button>
            </div>
        </form>
        </div>
      </div>
    </div>
  </div>
  {{--  edit data  --}}
  <script>
    $('#editModal').on('show.bs.modal', function(event){
      var button = $(event.relatedTarget)
      var kode_mk = button.data('mykode')
      var nama_matkul_pilihan = button.data('mynama')
      var sks = button.data('mysks')
      var semester = button.data('mysemester')
      var silabus = button.data('mysilabus')
      var id = button.data('id')
    
      var modal =$(this)
      modal.find('.modal-body #kode_mk').val(kode_mk);
      modal.find('.modal-body #nama_matkul_pilihan').val(nama_matkul_pilihan);
      modal.find('.modal-body #sks').val(sks);
      modal.find('.modal-body #semester').val(semester);
      modal.find(' .modal-body #silabus').val(silabus);
      modal.find('.modal-body #id').val(id);
    })
    
  </script>

</body>
{{--  pageination  --}}
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
{{--  disable/enable pageination  --}}
<script type="text/javascript">
  $(document).ready(function () {
    $('#dtBasicExample').DataTable({
      "paging": true,
      "pageLength": 3,
      "sPagingType": "simple_numbers",
      "lengthMenu": [ 3 , 6 , 9, "All" ]
    });
    $('.dataTables_length').addClass('bs-select');
  });
</script>

@stop
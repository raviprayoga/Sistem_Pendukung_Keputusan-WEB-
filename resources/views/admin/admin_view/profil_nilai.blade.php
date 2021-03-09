@extends('admin.admin_partials.admin_body')
@section('admin_content')
<head>
  <link rel="stylesheet" href="{{asset('css/custom_admin.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/01587eb664.js" crossorigin="anonymous"></script>
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
<body>
  <h1 class="jdl">Nilai</h1>
  <p>Nama : {{$users-> name}}</p>
  <p>NIM  : {{$users-> nim}}</p>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Add Nilai
  </button>
  <table id="dtBasicExample"  class="table table-striped table-dark table-hover" cellspacing="0" width="135%" style="margin-top: 20px;">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Matakuliah</th>
        <th>Nilai</th>
        <th>Semester</th>
      </tr>
    </thead>
    <tbody>
      @php
          $no=1;
      @endphp
      @foreach ($users->matkul_wajib as $item)
      <tr>
        <td>{{$no++}}</td>
        <td>{{$item->nama_matkul_wajib}}</td>
        <td>{{$item->pivot->nilai}}</td>
        <td>{{$item->semester}}</td>
        {{--  <td style="text-align: center;">
          <button data-id="{{ $item->id }}" data-toggle="modal" data-target="#editModal" data-mynilai="{{$item->pivot->nilai}}" data-id="{{$item->id}}" data-my_user_id="{{$item->user_id}}" data-my_model_matkul_wajib_id="{{$item->model_matkul_wajib_id}}"
          class="icon_aksi1"><i class="fas fa-edit fa-2x"></i></button>
          <button onclick="window.location.href='/upload_nilai/hapus_nilai/{{ $item->id }}';" class="icon_aksi2" ><i class="fas fa-trash-alt fa-2x"></i></button>
        </td>  --}}
      </tr>
      @endforeach
    </tbody>
  </table>
  {{--  <!-- Modal Edit -->
      <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Nilai</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/upload_nilai/update_nilai/{{$item->id}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="id" id="id" value=" ">
                <input type="hidden" name="user_id" id="user_id" value=" ">
                <input type="hidden" name="model_matkul_wajib_id" id="model_matkul_wajib_id" value=" ">
                <input class="modal_body" id="nilai" name="nilai" type="text" > 
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button  type="submit" value="Simpan Data" class="btn btn-primary">Save changes</button>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>

  <!-- Modal -->  --}}
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Nilai</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/user/{{$users->id}}/add" method="POST" enctype="multipart/form-data">
              {{ csrf_field()}}
              <div class="form-row align-items-center">
                <div class=" modal_body">
                  <select class="form-control" id="matkul" name="matkul">>
                    @foreach ($matkul as $item)
                    <option value="{{$item->id}}">{{$item->nama_matkul_wajib}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <input class="modal_body" id="nilai" name="nilai" type="text" placeholder="nilai" > 
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  {{--  edit data  --}}
  {{--  <script>
    $('#editModal').on('show.bs.modal', function(event){
      var button = $(event.relatedTarget)
      var nilai = button.data('mynilai')
      var id = button.data('id')
      var user_id = button.data('my_user_id')
      var model_matkul_wajib_id = button.data('my_model_matkul_wajib_id')

      var modal =$(this)
      modal.find('.modal-body #nilai').val(nilai);
      modal.find('.modal-body #id').val(id);
      modal.find('.modal-body #user_id').val(user_id);
      modal.find('.modal-body #model_matkul_wajib_id').val(model_matkul_wajib_id);
    })
  </script>  --}}

  {{--  pageination  --}}
  <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
  {{--  disable/enable pageination  --}}
  <script type="text/javascript">
    // Basic example
    $(document).ready(function () {
      $('#dtBasicExample').DataTable({
        "paging": true,
        "pageLength": 5,
        "sPagingType": "full",
        "lengthMenu": [ 5 , 10 , 15 , 20 , 30 ]
      });
      $('.dataTables_length').addClass('bs-select');
    });
  </script>
</body>

@stop
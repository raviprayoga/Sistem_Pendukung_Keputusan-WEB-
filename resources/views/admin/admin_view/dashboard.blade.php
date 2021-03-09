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
<body style="background-color: 	#f5f5f5;">
  <h1 class="jdl">Data User</h1>
  <table id="dtBasicExample"  class="table table-striped table-dark table-hover" cellspacing="0" width="135%">
    <thead>
      <tr>
        <th class="th-sm">No.</th>
        <th class="th-sm">Nama</th>
        <th class="th-sm">NIM</th>
        <th class="th-sm">Email</th>
        <th class="th-sm">Password</th>
        <th class="th-sm" style="text-align: center">Aksi</th>
    </tr>
    </thead>
    <tbody>
    @php
        $no = 1;    
    @endphp
    @foreach($users as $item)
      <tr class="">
        <td>{{ $no++ }}</td>
        <td> <a href="/user/{{$item->id}}/profile" style="color: #ffffff; text-decoration: none; margin-left: -20px"> {{ $item->name }} </a> </td> 
        <td>{{ $item->nim }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->password }}</td>
        <td style="text-align: center;">
            <button data-id="{{ $item->id }}" data-toggle="modal" data-target="#editModal" data-mynama="{{$item->name}}" data-mynim="{{$item->nim}}" data-myemail="{{$item->email}}" data-mypassword="{{$item->password}}" data-id="{{$item->id}}"
            class="icon_aksi1"><i class="fas fa-edit fa-2x"></i></button>
            <button onclick="window.location.href='/upload_user/hapus_user/{{ $item->id }}';" class="icon_aksi2" ><i class="fas fa-trash-alt fa-2x"></i></button>
        </td>
      </tr>
    @endforeach
    </tbody>
      <!-- Modal Edit -->
      <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/upload_user/update_user/{{$item->id}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="id" id="id" value=" ">
                <input class="modal_body" id="nama" name="name" type="text" > 
                <input class="modal_body" id="nim" name="nim" type="text" > 
                <input class="modal_body" id="email" name="email" type="text" > 
                <input class="modal_body" id="password" name="password" type="text" > 

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button  type="submit" value="Simpan Data" class="btn btn-primary">Save changes</button>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
  </table>
  {{--  edit data  --}}
  <script>
    $('#editModal').on('show.bs.modal', function(event){
      var button = $(event.relatedTarget)
      var name = button.data('mynama')
      var nim = button.data('mynim')
      var email = button.data('myemail')
      var password = button.data('mypassword')
      var id = button.data('id')

      var modal =$(this)
      modal.find('.modal-body #nama').val(name);
      modal.find('.modal-body #nim').val(nim);
      modal.find('.modal-body #email').val(email);
      modal.find('.modal-body #password').val(password);
      modal.find('.modal-body #id').val(id);
    })
  </script>

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
        "lengthMenu": [ 5 , 10 , "All" ]
      });
      $('.dataTables_length').addClass('bs-select');
    });
  </script>
</body>
@stop
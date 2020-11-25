@extends('admin.admin_partials.admin_body')
@section('admin_content')
<head>
    <link rel="stylesheet" href="{{asset('css/custom_admin.css')}}">
    <script src="https://kit.fontawesome.com/01587eb664.js" crossorigin="anonymous"></script>
</head>
<h1>Data User</h1>

<table class="user_tabel" border="1">
    <tr>
        <th>No.</th>
        <th >Nama</th>
        <th >NIM</th>
        <th >Email</th>
        <th >Password</th>
        <th>aksi</th>
    </tr>
    @php
        $no = 1;    
    @endphp
    @foreach($users as $item)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->nim }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->password }}</td>
        <td>
            <button data-id="{{ $item->id }}" data-toggle="modal" data-target="#editModal" data-mynama="{{$item->nama}}" data-mynim="{{$item->nim}}" data-myemail="{{$item->email}}" data-mypassword="{{$item->password}}" data-id="{{$item->id}}"
            class="icon_aksi1"><i class="fas fa-edit fa-3x"></i></button>
            <button onclick="window.location.href='/upload_user/hapus_user/{{ $item->id }}';" class="icon_aksi2" ><i class="fas fa-trash-alt fa-3x"></i></button>
        </td>
    </tr>

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
            <form action="/upload_user/update_user/{{$item->id}}" method="POST" enctype="multipart/form-data">
              
              {{ csrf_field() }}
              <input type="hidden" name="id" id="id" value=" ">
              <input class="modal_body" id="nama" name="nama" type="text" > 
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
    @endforeach
</table>


<script>
$('#editModal').on('show.bs.modal', function(event){
  var button = $(event.relatedTarget)
  var nama = button.data('mynama')
  var nim = button.data('mynim')
  var email = button.data('myemail')
  var password = button.data('mypassword')
  var id = button.data('id')

  var modal =$(this)
  modal.find('.modal-body #nama').val(nama);
  modal.find('.modal-body #nim').val(nim);
  modal.find('.modal-body #email').val(email);
  modal.find('.modal-body #password').val(password);
  modal.find('.modal-body #id').val(id);
})

</script>

@stop
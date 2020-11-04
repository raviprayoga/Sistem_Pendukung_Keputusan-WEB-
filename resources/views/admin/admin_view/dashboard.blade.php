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
            <button class="icon_aksi1"><i class="fas fa-edit fa-3x"></i></button>
            <button class="icon_aksi2"><i class="fas fa-trash-alt fa-3x"></i></button>
        </td>
    </tr>
    @endforeach
</table>
@stop
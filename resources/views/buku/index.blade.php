@extends('buku.template')

@section('title','Home')

@section('header-title','Daftar Buku')

@section('content')
  <table class="table table-bordered">
    <tr>
      <th>Judul</th>
      <th>Pengarang</th>
      <th>Aksi</th>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
@endsection

@section('navigation')
<ul class="list-group">
 <li class="list-group-item"><a href = "{{url('/buku/tambah')}}">Tambah</a></li> 
</ul>
@endsection

@section('name-copyright','Ilham')

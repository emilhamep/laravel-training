@extends('buku.template')

@section('title','Home')

@section('header-title','Tambah Buku')

@section('content')
<form class="form-horizontal">
<div class="form-group">
  <label for="inputEmail3" class="col-sm-2 control-label">Pengarang</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="inputEmail3" placeholder="Pengarang">
  </div>
</div>
<div class="form-group">
  <label for="inputEmail3" class="col-sm-2 control-label">Judul</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="inputEmail3" placeholder="Judul">
  </div>
</div>
<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-default">Kirim</button>
  </div>
</div>
</form>
@endsection

@section('navigation')
<ul class="list-group">
 <li class="list-group-item"><a href = "{{url('/buku/tambah')}}">Tambah</a></li> 
</ul>
@endsection

@section('name-copyright','Ilham')

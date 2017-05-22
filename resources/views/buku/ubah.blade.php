@extends('buku.template')

@section('title','Home')

@section('header-title','Ubah Buku')

@section('content')
<?php
  foreach ($buku as $buku_dipilih) {
?>
<form class="form-horizontal" method="post" action="{{url('/buku/ubah_proses')}}">
{{csrf_field()}}
<input type = "hidden" name = "id" value = "<?php echo $buku_dipilih->id;?>"/>
<div class="form-group">
  <label for="inputEmail3" class="col-sm-2 control-label">Pengarang</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="inputEmail3" placeholder="Pengarang" value="<?php echo $buku_dipilih->pengarang;?>" name="pengarang"/>
  </div>
</div>
<div class="form-group">
  <label for="inputEmail3" class="col-sm-2 control-label">Judul</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="inputEmail3" placeholder="Judul" value="<?php echo $buku_dipilih->judul;?>" name="judul"/>
  </div>
</div>
<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-default">Kirim</button>
  </div>
</div>
</form>
<?php
}
?>

@endsection

@section('navigation')
<ul class="list-group">
  <li class="list-group-item"><a href = "{{url('/buku/')}}">Home</a></li>
 <li class="list-group-item"><a href = "{{url('/buku/tambah')}}">Tambah</a></li>

</ul>
@endsection

@section('name-copyright','Ilham')

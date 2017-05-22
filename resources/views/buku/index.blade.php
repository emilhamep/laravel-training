@extends('buku.template')

@section('title','Home')

@section('header-title','Daftar Buku')

@section('content')

  @if (Session::has('pesan'))
    <div class="alert alert-info">{{ Session::get('pesan') }}</div>
  @endif

  <table class="table table-bordered">
    <tr>
      <th>Judul</th>
      <th>Pengarang</th>
      <th>Aksi</th>
    </tr>
    <?php
      foreach ($semuaBuku as $buku) {
      echo "<tr>";
            echo "<td>".$buku->judul."</td>";
            echo "<td>".$buku->pengarang."</td>";
      ?>
            <td><a href="{{url('/buku/ubah/')}}/<?php echo $buku->id;?>">Ubah</a>&nbsp;|&nbsp;<a href="{{url('buku/hapus/')}}/<?php echo $buku->id;?>">Hapus</a></td>
      <?php
      echo "</tr>";
      }
     ?>
  </table>
@endsection

@section('navigation')
<ul class="list-group">
 <li class="list-group-item"><a href = "{{url('/buku/')}}">Home</a></li>
 <li class="list-group-item"><a href = "{{url('/buku/tambah')}}">Tambah</a></li>
</ul>
@endsection

@section('name-copyright','Ilham')

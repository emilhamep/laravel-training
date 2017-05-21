<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CBuku extends Controller
{
    //
    public function tes_controller(){
      return 'Ini dari tes controller';
    }

    public function tes_parameter($judul,$pengarang){
      return $judul.' '.$pengarang;
    }

    public function group($judul){
      return $judul;
    }

    public function index(){
      return view('buku.index');
    }

    public function tambah(){
      return view('buku.tambah');
    }

    public function ubah(){
      return view('buku.ubah');
    }

    public function hapus(){
    //  return view('buku.hapus');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use Redirect;
use Session;

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
      //Ambil data buku di DB
      $mBuku = new Buku;
      $semuaBuku = $mBuku::whereNotNull('judul')->orderBy('id','desc')->get();


      return view('buku.index')->with('semuaBuku',$semuaBuku);
    }

    public function tambah(){

      return view('buku.tambah');
    }

    public function tambah_proses(Request $request){
      $mBuku = new Buku;
      $mBuku->judul = $request['judul'];
      $mBuku->pengarang = $request['pengarang'];

      $mBuku->save();

      Session::flash('pesan', 'Buku dengan judul '.$request['judul'].' berhasil ditambahkan');

      return redirect::to('/buku/');
    }

    public function ubah(){
      return view('buku.ubah');
    }

    public function hapus(){
    //  return view('buku.hapus');
    }
}

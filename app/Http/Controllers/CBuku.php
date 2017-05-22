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

    public function ubah($id_buku){
      //Ambil data buku di DB berdasarkan id
      $mBuku = new Buku;
      $buku = $mBuku::where('id','=',$id_buku)->get();


      return view('buku.ubah')->with('buku',$buku);
    }

    public function ubah_proses(Request $request){
      $mBuku = new Buku;
      //$buku = $mBuku::where('id',$request['id'])->first();
      $buku = $mBuku::find($request['id']);
      $buku->judul = $request['judul'];
      $buku->pengarang = $request['pengarang'];

      $buku->save();

      Session::flash('pesan', 'Buku berhasil diubah');

      return redirect::to('/buku/');
    }

    public function hapus($id_buku){
      $mBuku = new Buku;
      $buku = $mBuku->find($id_buku);
      $buku->delete();

      Session::flash('pesan', 'Buku berhasil dihapus');

      return redirect::to('/buku/');
    }
}

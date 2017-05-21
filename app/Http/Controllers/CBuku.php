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
}

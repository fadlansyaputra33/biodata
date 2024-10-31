<?php

namespace App\Http\Controllers;

use App\Models\Jalur;
use Illuminate\Http\Request;

class JalurController extends Controller
{
       public function index()
       {
        return view('controllerjalur');
       }
       public function MenampilkanDataMode()
       {
              $dataNama = Jalur::$nama;
              $dataSekolah =Jalur::$sekolah;
              $dataKelas = Jalur::$kelas;
              $dataAlamat = Jalur::$alamat;
              $dataHobi = Jalur::$hobi;
              $dataEmail = Jalur::$email;
              $dataBesti = Jalur::$besti;
              return view('modeljalur', compact('dataNama', 'dataSekolah', 'dataKelas', 'dataAlamat', 'dataHobi', 'dataEmail', 'dataBesti'));
       }
       
    
}

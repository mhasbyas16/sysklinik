<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class absensiController extends Controller
{
    public function absensi(){
      //pasien
      $pasien=DB::table('pasien')
      ->select('absensi.*','pasien.id_pasien','daftar.nama')
      ->join('absensi','absensi.id','=','pasien.id_pasien')
      ->join('register_list','absensi.id','=','register_list.id_pasien')
      ->join('daftar','daftar.id_daftar','=','register_list.id_daftar')
      ->get();

      //terapis
      $terapis=DB::table('terapis')
      ->select('absensi.*','terapis.nama')
      ->join('absensi','absensi.id','=','terapis.id_terapis')
      ->get();

      //karyawan
      $karyawan=DB::table('karyawan')
      ->select('absensi.*','karyawan.nama')
      ->join('absensi','absensi.id','=','karyawan.id_karyawan')
      ->get();

      return view('main_menu.absensi',[
        'pasien'=>$pasien,
        'terapis'=>$terapis,
        'karyawan'=>$karyawan
      ]);
    }
}

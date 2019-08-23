<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class datamasterController extends Controller
{
  //pasien
  public function datapasien(){
    $data=DB::table('h_pasien')
    ->join('d_pasien','d_pasien.id_pasien','=','h_pasien.id_pasien')->get();
    return view('data_master.pasien',[
      'data'=>$data
    ]);
  }

//karyawan
  public function karyawan(){
    $data=DB::table('h_pegawai')
    ->join('d_pegawai','d_pegawai.id_pegawai','=','h_pegawai.id_pegawai')
    ->leftJoin('jabatan','jabatan.id_jabatan','=','d_pegawai.id_jabatan')
    ->where('h_pegawai.id_pegawai','like','K%')->get();

    return view('data_master.pegawai',[
      'data'=>$data
    ]);
  }

  //terapis
  public function dataterapis(){
    $data=DB::table('h_pegawai')
    ->join('d_pegawai','d_pegawai.id_pegawai','=','h_pegawai.id_pegawai')
    ->leftJoin('jabatan','jabatan.id_jabatan','=','d_pegawai.id_jabatan')
    ->where('h_pegawai.id_pegawai','like','T%')->get();

    return view('data_master.terapis',[
      'data'=>$data
    ]);
  }

  //Terapi
  public function dataterapi(){
    $data=DB::table('jenis_terapi')->orderBY('id_terapi','asc')->get();

    return view('data_master.terapi',[
      'data'=>$data
    ]);
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Helper\idrandom;
use App\Helper\agama;

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

  public function karyawantambah($kt){
    $random=idrandom::id();
    $date=date('ymd');
    $agama=agama::listagama();
    $j_terapi=DB::table('jenis_terapi')->get();
    $jabatan=DB::table('jabatan')->get();
    if ($kt=='terapis') {
      $id='T'.$date.$random;
    }elseif ($kt=='karyawan') {
      $id='K'.$date.$random;
    }
    return view('data_master.pegawai_data',[
      'id'=>$id,
      'agama'=>$agama,
      'j_terapi'=>$j_terapi,
      'jabatan'=>$jabatan
    ]);
  }

  public function karyawaneditview($id){
    $sql=DB::table('h_pegawai')
    ->join('d_pegawai','h_pegawai.id_pegawai','=','d_pegawai.id_pegawai')
    ->join('jabatan','jabatan.id_jabatan','=','d_pegawai.id_jabatan')
    ->join('jenis_terapi','jenis_terapi.id_terapi','=','d_pegawai.id_terapi')
    ->where('h_pegawai.id_pegawai',$id);
    $agama=agama::listagama();
    $j_terapi=DB::table('jenis_terapi')->get();
    $jabatan=DB::table('jabatan')->get();

    if ($sql->count()==0) {
      return redirect('/karyawan')->with('alert','gagal menemukan data!!');
    }else{
      $data=$sql->first();
      return view('data_master.pegawai_data',[
        'agama'=>$agama,
        'j_terapi'=>$j_terapi,
        'jabatan'=>$jabatan,
        'data'=>$data
      ]);
    }
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

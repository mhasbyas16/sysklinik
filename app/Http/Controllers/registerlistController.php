<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use DB;

class registerlistController extends Controller
{
    public function registerlist(){
      $isi=DB::table('register_list')
      ->select('assessment.*','register_list.status as statusR','register_list.id_registerlist','daftar.nama','daftar.id_daftar')
      ->leftJoin('assessment','register_list.id_asses','=','assessment.id_asses')
      ->join('daftar','daftar.id_daftar','=','register_list.id_daftar')->get();

      //sidebar
      $TV_mainmenu='active';
      $register='active';

      return view ('main_menu.registerlist',[
        'isi'=>$isi,
        'TV_mainmenu'=>$TV_mainmenu,
        'register'=>$register]);
    }

    public function registerlistdata($id){
      $data=DB::table('daftar')
      ->select('daftar.*','register_list.status as statusR')
      ->join('register_list','register_list.id_daftar','=','daftar.id_daftar')
      ->where('daftar.id_daftar',$id)->first();
      //lahir
      $tgl_lahir=explode('-',$data->tgl_lahir);
      $tahun=$tgl_lahir[0];
      $bulan=$tgl_lahir[1];
      $tahun_now=date('Y');
      $bulan_now=date('m');
      if ($bulan_now>=$bulan) {
        $diff=$tahun_now-$tahun;
      }else{
        $diff=$tahun_now-$tahun-1;
      }
      $umur=$diff;

      $kar=DB::table('karyawan')->orderBy('nama','asc')->get();
      $j_terapi=DB::table('jenis_terapi')->orderBY('terapi','asc')->get();

      //sidebar
      $TV_mainmenu='active';
      $register='active';

      return view ('main_menu.registerlist_data',[
        'TV_mainmenu'=>$TV_mainmenu,
        'register'=>$register,
        'data'=>$data,
        'kar'=>$kar,
        'j_terapi'=>$j_terapi,
        'id'=>$id,
        'umur'=>$umur
      ]);
    }

    public function registerlistupdate(request $req){
      //pasien
      $nama_P=$req->nama_P;
      $jk=$req->jk;
      $alamat_P=$req->alamat_P;
      $tempat_lahir=$req->tempat_lahir;
      $tanggal_lahir=$req->tanggal_lahir;
      $umur=$req->umur;
      $notelp_P=$req->notelp_P;
      $tanggal_daftar=$req->tanggal_daftar;
      $Nfoto=$req->Nfoto;
      //Ayah
      $nama_A=$req->nama_A;
      $nik_A=$req->nik_A;
      $agama_A=$req->agama_A;
      $alamat_A=$req->alamat_A;
      $pekerjaan_A=$req->pekerjaan_A;
      $pendTerakhir_A=$req->pendTerakhir_A;
      $noTelp_A=$req->noTelp_A;
      $email_A=$req->email_A;
      //ibu
      $nama_I=$req->nama_I;
      $nik_I=$req->nik_I;
      $agama_I=$req->agama_I;
      $alamat_I=$req->alamat_I;
      $pekerjaan_I=$req->pekerjaan_I;
      $pendTerakhir_I=$req->pendTerakhir_I;
      $noTelp_I=$req->noTelp_I;
      $email_I=$req->email_I;
      //
      $assesor=$req->assesor;
      $J_terapi=$req->J_terapi;
      $tgl_mulai_terapi=$req->tgl_mulai_terapi;
      $tgl_selesai_terapi=$req->tgl_selesai_terapi;
      $status=$req->status;

      $id_daftar=$req->id_daftar;
      $now=date('Y-m-d');
      //id_asses
        $angka=range(0,9);
        shuffle($angka);
        $id=array_rand($angka,3);
        $idstring=implode($id);
        $id_asses=$now.$idstring;


      $data_R=['id_asses'=>$id_asses,'status'=>$status];
      $data_A=[
    'id_asses'=>$id_asses,
    'id_daftar'=>$id_daftar,
    'tgl_asses'=>$now,
    'jenis_asses'=>$J_terapi,
    'id_terapi'=>$J_terapi,
    'assesor'=>$assesor,
    'tgl_mulai_terapi'=>$tgl_mulai_terapi,
    'tgl_selesai_terapi'=>$tgl_selesai_terapi,
    'status'=>$status];
      DB::table('register_list')->where('id_daftar',$id_daftar)->update($data_R);
      DB::table('assessment')->insert($data_A);
        return redirect ('/register-list');
    }
}

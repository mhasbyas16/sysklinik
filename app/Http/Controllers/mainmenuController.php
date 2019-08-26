<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use DB;
use App\Helper\absensi;
use App\Helper\idrandom;

class mainmenuController extends Controller
{
  //absensi
  public function absensi(){
    //pasien
    $pasien=absensi::pasien()->get();
    //terapis
    $terapis=absensi::terapis()->get();
    //karyawan
    $karyawan=absensi::karyawan()->get();

    return view('main_menu.absensi',[
      'pasien'=>$pasien,
      'terapis'=>$terapis,
      'karyawan'=>$karyawan
    ]);
  }

  public function absensifilter(Request $req, $id){
    $min=$req->min;
    $max=$req->max;

    if ($id=='pasien') {
      $pasien=absensi::pasien()->whereBetween('tgl',[$min,$max])->get();
      $terapis=absensi::terapis()->get();
      $karyawan=absensi::karyawan()->get();
    }elseif ($id=='terapis') {
      $pasien=absensi::pasien()->get();
      $terapis=absensi::terapis()->whereBetween('tgl',[$min,$max])->get();
      $karyawan=absensi::karyawan()->get();
    }elseif ($id=='karyawan') {
      $pasien=absensi::pasien()->get();
      $terapis=absensi::terapis()->get();
      $karyawan=absensi::karyawan()->whereBetween('tgl',[$min,$max])->get();
    }

    return view('main_menu.absensi',[
      'pasien'=>$pasien,
      'terapis'=>$terapis,
      'karyawan'=>$karyawan
    ]);
  }

//Register List
  public function registerlist(){
    $isi=DB::table('h_pasien')
    ->select('h_pasien.id_pasien as idpasien','h_pasien.status','d_pasien.nama','assessment.*')
    ->leftJoin('assessment','h_pasien.id_pasien','=','assessment.id_pasien')
    ->join('d_pasien','d_pasien.id_pasien','=','h_pasien.id_pasien')->get();


    return view ('main_menu.registerlist',[
      'isi'=>$isi]);
  }

  public function registerlistfilter(Request $req){
    $min=$req->min;
    $max=$req->max;
    $pilih=$req->pilih;
    $isi=DB::table('h_pasien')
    ->select('h_pasien.id_pasien as idpasien','h_pasien.status','d_pasien.nama','assessment.*')
    ->leftJoin('assessment','h_pasien.id_pasien','=','assessment.id_pasien')
    ->join('d_pasien','d_pasien.id_pasien','=','h_pasien.id_pasien')->whereBetween($pilih,[$min,$max])->get();


    return view ('main_menu.registerlist',[
      'isi'=>$isi]);
  }

  public function registerlistdelete($id){
    DB::table('h_pasien')->where('id_pasien',$id)->delete();

    return redirect ('/register-list')->with('alert','Sukses Menghapus Data');
  }

  public function registerlistdata($id){
    $data=DB::table('d_pasien')
    ->join('h_pasien','h_pasien.id_pasien','=','d_pasien.id_pasien')
    ->where('d_pasien.id_pasien',$id)
    ->orderBY('h_pasien.status','desc')->first();
    $assessment=DB::table('assessment');
    $count=$assessment->where('id_pasien',$id)->count();
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

    $kar=DB::table('d_pegawai')->orderBy('nama','asc')->get();
    $j_terapi=DB::table('jenis_terapi')->orderBY('terapi','asc')->get();
    if ($count==0) {
      $isiA='';
    }else {
      $isiA=$assessment->join('jenis_terapi','jenis_terapi.id_terapi','=','assessment.id_terapi')
      ->where('id_pasien',$id)->first();
    }
    return view ('main_menu.registerlist_data',[
      'data'=>$data,
      'kar'=>$kar,
      'j_terapi'=>$j_terapi,
      'id'=>$id,
      'umur'=>$umur,
      'isiA'=>$isiA,
      'count'=>$count
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
    $agama=$req->agama;
    $keluhan=$req->keluhan;
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

    $id_pasien=$req->id_pasien;
    $now=date('ymd');
    //id_asses
      $random=idrandom::id();
      $id_asses=$now.$random;


    $data_HP=['status'=>$status];
    $data_A=[
      'id_asses'=>$id_asses,
      'tgl_asses'=>$now,
      'id_pasien'=>$id_pasien,
      'id_terapi'=>$J_terapi,
      'assesor'=>$assesor,
      'tgl_mulai_terapi'=>$tgl_mulai_terapi,
      'tgl_selesai_terapi'=>$tgl_selesai_terapi];
    $data_DP=[
      'nama'=>$nama_P,
      'tempat_lahir'=>$tempat_lahir,
      'tgl_lahir'=>$tanggal_lahir,
      'jk'=>$jk,
      'agama'=>$agama,
      'alamat'=>$alamat_P,
      'tlp'=>$notelp_P,
      'keluhan'=>$keluhan,
      'foto'=>$Nfoto,
      'tgl_daftar'=>$tanggal_daftar,
      'nama_ayah'=>$nama_A,
      'nik_ayah'=>$nik_A,
      'agama_ayah'=>$agama_A,
      'alamat_ayah'=>$alamat_A,
      'pend_ayah'=>$pendTerakhir_A,
      'tlp_ayah'=>$noTelp_A,
      'pekerjaan'=>$pekerjaan_A,
      'email_ayah'=>$email_A,
      'nama_ibu'=>$nama_I,
      'nik_ibu'=>$nik_I,
      'agama_ibu'=>$agama_I,
      'alamat_ibu'=>$alamat_I,
      'pend_ibu'=>$pendTerakhir_I,
      'pekerjaan_ibu'=>$pekerjaan_I,
      'tlp_ibu'=>$noTelp_I,
      'email_ibu'=>$email_I,
    ];
    $cariA=DB::table('assessment')->where('id_pasien',$id_pasien)->count();
    if ($cariA==0) {
      DB::table('assessment')->insert($data_A);
    }else{
      DB::table('assessment')->where('id_pasien',$id_pasien)->update($data_A);
    }
    DB::table('h_pasien')->where('id_pasien',$id_pasien)->update($data_HP);
    DB::table('d_pasien')->where('id_pasien',$id_pasien)->update($data_DP);
      return redirect ('/register-list');
  }

  //Jadwal Terapi
  public function jadwalterapi(){
    $sql = DB::table('jadwal')
    ->select('jadwal.*','d_pegawai.nama','d_pasien.nama as namaP')
    ->join('d_pegawai','d_pegawai.id_pegawai','=','jadwal.id_pegawai')
    ->join('d_pasien','d_pasien.id_pasien','=','jadwal.id_pasien');
    //fullcalendar
      $events = [];
      $data=$sql->get();
      if($data->count()) {
          foreach ($data as $value) {
            $color = dechex(rand(0x000000, 0xFFFFFF));
              $events[] = Calendar::event(
                  $value->nama.' - '.$value->namaP,
                  false,
                  $value->tgl.'T'.$value->jam_masuk,
                  $value->tgl.'T'.$value->jam_keluar,
                  null,
                  // Add color and link on event
                [
                    'color' => '#'.$color,
                    'url' => '#',
                ]
              );
          }
      }
      $calendar = Calendar::addEvents($events)
      ->setOptions([ //set fullcalendar options
          'firstDay' => 1
         ]);

         //jadwal tabel hari curl_init
         $data2=$sql->where('jadwal.tgl',date('Y-m-d'))->orderBY('jadwal.jam_masuk','asc')->get();

      return view('main_menu.jadwalterapi', compact('calendar'),[
        'data2'=>$data2
      ]);
  }
}

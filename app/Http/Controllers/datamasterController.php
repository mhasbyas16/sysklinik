<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Helper\idrandom;
use App\Helper\agama;
use File;
use Str;

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
    ->leftJoin('jabatan','jabatan.id_jabatan','=','d_pegawai.id_jabatan')
    ->leftJoin('jenis_terapi','jenis_terapi.id_terapi','=','d_pegawai.id_terapi')
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

  public function pegawaisave(Request $req, $save){
    //data pegawai
    $id=$req->id;
    $pend_akhir=$req->pend_terakhir;
    $nama=$req->nama;
    $jabatan=$req->jabatan;
    $nik=$req->nik;
    $tanggal_masuk=$req->tanggal_masuk;
    $tanggal_lahir=$req->tanggal_lahir;
    $bpjs=$req->bpjs;
    $jk=$req->jk;
    $npwp=$req->npwp;
    $agama=$req->agama;
    $j_terapi=$req->j_terapi;
    $alamat=$req->alamat;
    $no_tlp=$req->no_tlp;
    $hakakses=$req->hakakses;
    //Foto
    $foto=$req->file('foto');
    $size=$foto->getSize();
    $tipe=$foto->getClientOriginalExtension();
    if ($size>=10) {
      return redirect('/karyawan/edit-data'.'/'.$id)->with('alert','file foto tidak boleh melebihi dari 1MB');
    }
    $fotoo=$req->Nfoto;
    $Nfoto=$id;

    if ($save=='add') {
      $pict=$req->file('foto');
      $pict->move(public_path().'/foto/pegawai',$id);
    }elseif ($save=='edit') {
      if ($fotoo==$id) {

      }elseif($fotoo!=$id) {
          $data=DB::table('d_pegawai')->select('foto')->where('id_pegawai',$id)->first();
          File::delete('foto/pegawai/'.$data->foto);
          $pict=$req->file('foto');
          $pict->move(public_path().'/foto/pegawai',$id);
        }
    }

    //Fasilitas
    $gaji=implode(explode(".",$req->gaji));
    $observasi=implode(explode(".",$req->observasi));
    $Asses=implode(explode(".",$req->Asses));
    $konsumsi=implode(explode(".",$req->konsumsi));
    $transport=implode(explode(".",$req->transport));
    $bonus=implode(explode(".",$req->bonus));
    $lembur=implode(explode(".",$req->lembur));
    $password=md5($id);

    $h_pegawai=[
      'id_pegawai'=>$id,
      'password'=>$password,
      'hakakses'=>$hakakses
    ];
    $d_pegawai=[
      'id_pegawai'=>$id,
      'id_jabatan'=>$jabatan,
      'id_terapi'=>$j_terapi,
      'nama'=>$nama,
      'nik'=>$nik,
      'tgl_lahir'=>$tanggal_lahir,
      'jk'=>$jk,
      'agama'=>$agama,
      'alamat'=>$alamat,
      'tlp'=>$no_tlp,
      'pend_akhir'=>$pend_akhir,
      'foto'=>$Nfoto,
      'tgl_masuk'=>$tanggal_masuk,
      'gaji'=>$gaji,
      'observasi'=>$observasi,
      'asses'=>$Asses,
      'konsumsi'=>$konsumsi,
      'bpjs'=>$bpjs,
      'npwp'=>$npwp,
      'transport'=>$transport,
      'bonus'=>$bonus,
      'lembur'=>$lembur
    ];
    if ($save=='add') {
      DB::table('h_pegawai')->insert($h_pegawai);
      DB::table('d_pegawai')->insert($d_pegawai);
      $idp=Str::substr($id,0,1);
      if ($idp=='K') {
        return redirect('/karyawan')->with('alert','Berhasil Menambahkan Data'." ".$nama);
      }else {
        return redirect('/data-terapis')->with('alert','Berhasil Menambahkan Data'." ".$nama);
      }
    }elseif ($save=='edit') {
      DB::table('h_pegawai')->where('id_pegawai',$id)->update($h_pegawai);
      DB::table('d_pegawai')->where('id_pegawai',$id)->update($d_pegawai);
      $idp=Str::substr($id,0,1);
      if ($idp=='K') {
        return redirect('/karyawan')->with('alert','Berhasil Mengubah Data'." ".$nama);
      }else {
        return redirect('/data-terapis')->with('alert','Berhasil Mengubah Data'." ".$nama);
      }
    }
  }

  public function karyawandelete($id){
    $cek=DB::table('h_pegawai')->where('id_pegawai',$id)->count();
    if ($cek==0) {
      $idp=Str::substr($id,0,1);
      if ($idp=='K') {
        return redirect('/karyawan')->with('alertwarn','Data tidak ditemukan');
      }else {
        return redirect('/data-terapis')->with('alertwarn','Data tidak ditemukan');
      }
    }else {
      $data=DB::table('d_pegawai')->select('foto')->where('id_pegawai',$id)->first();
      File::delete('foto/pegawai/'.$data->foto);
      DB::table('h_pegawai')->where('id_pegawai',$id)->delete();
      $idp=Str::substr($id,0,1);
      if ($idp=='K') {
        return redirect('/karyawan')->with('alertwarn','Berhasil Menghapus Data');
      }else {
        return redirect('/data-terapis')->with('alertwarn','Berhasil Menghapus Data');
      }
    }
  }
  //terapis
  public function dataterapis(){
    $data=DB::table('h_pegawai')
    ->join('d_pegawai','d_pegawai.id_pegawai','=','h_pegawai.id_pegawai')
    ->leftJoin('jabatan','jabatan.id_jabatan','=','d_pegawai.id_jabatan')
    ->leftJoin('jenis_terapi','jenis_terapi.id_terapi','=','d_pegawai.id_terapi')
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

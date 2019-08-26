@extends('template.style')
@section('isi')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Master
        <small>Pegawai</small>
      </h1>
      <!--
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-files-o"></i> Main Menu</a></li>
        <li class="active">Assesment</li>
      </ol>
      -->
    </section>

    <!-- Main content -->
    <section class="content">

              <!-- row -->
              <div class="row">
                <div class="col-xs-12">
                  <div class="box box-solid">

                    <!-- begin data alat-->
                    <form class="form-horizontal" method="post" action="{{url('karyawan/')}}/{{Request::is('karyawan/tambah-data/*')?'add':'edit'}}" enctype="multipart/form-data">
                      {{csrf_field()}}
                    <div class="box-body">
                      <div class="row">
                        <div class="col-xs-7 col-md-12 text-left">
                            <div class="form-group">
                              <label class="col-sm-12"><h3>Data Pegawai</h3><hr></label>
                            </div>
                        </div>
                      </div>

                    <div class="row">
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">ID</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" value="{{Request::is('karyawan/tambah-data/*')?$id:$data->id_pegawai}}" name="id" readonly required>
                            </div>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Pendidikan Terakhir</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" value="{{Request::is('karyawan/tambah-data/*')?'':$data->pend_akhir}}" name="pend_terakhir" required>
                            </div>
                          </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Nama</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" value="{{Request::is('karyawan/tambah-data/*')?'':$data->nama}}" name="nama" required>
                            </div>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Jabatan</label>

                            <div class="col-sm-6">
                              <select class="form-control select2" style="width: 100%;" name="jabatan" value=" ">
                                <option value="{{Request::is('karyawan/tambah-data/*')?'':$data->id_jabatan}}" hidden>{{Request::is('karyawan/tambah-data/*')?'-- select One --':$data->jabatan}}</option>
                                @foreach ($jabatan as $isi)
                                <option value="{{$isi->id_jabatan}}">{{$isi->jabatan}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">NIK</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="nik" value="{{Request::is('karyawan/tambah-data/*')?'':$data->nik}}" required>
                            </div>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Tanggal Masuk</label>

                            <div class="col-sm-6">
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" value="{{Request::is('karyawan/tambah-data/*')?'':$data->tgl_masuk}}" id="datedaftar" name="tanggal_masuk">
                              </div>
                              <!-- /.input group -->
                            </div>
                            </div>
                          </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Tanggal lahir</label>

                            <div class="col-sm-6">
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" value="{{Request::is('karyawan/tambah-data/*')?'':$data->tgl_lahir}}" id="datepicker" name="tanggal_lahir">
                              </div>
                            </div>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">No. BPJS</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" pattern="[0-9]+" name="bpjs" value="{{Request::is('karyawan/tambah-data/*')?'':$data->bpjs}}" required>
                            </div>
                          </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Jenis Kelamin</label>

                            <div class="col-sm-6">
                              <select class="form-control select2" style="width: 100%;" name="jk" value=" " required>
                                <option value="{{Request::is('karyawan/tambah-data/*')?'':$data->jk}}" hidden>{{Request::is('karyawan/tambah-data/*')?'-- select One --':$data->jk}}</option>
                                <option value="Laki-laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                              </select>
                            </div>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">NPWP</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="npwp" pattern="[0-9]+" value="{{Request::is('karyawan/tambah-data/*')?'':$data->npwp}}" required>
                            </div>
                          </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Agama</label>

                            <div class="col-sm-6">
                              <select class="form-control select2" style="width: 100%;" name="agama" value=" " required>
                                <option value="{{Request::is('karyawan/tambah-data/*')?'':$data->agama}}" hidden>{{Request::is('karyawan/tambah-data/*')?'-- select One --':$data->agama}}</option>
                                @foreach ($agama as $isi)
                                <option value="{{$isi}}">{{$isi}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Jenis Terapi</label>

                            <div class="col-sm-6">
                              <select class="form-control select2" style="width: 100%;" name="j_terapi" value=" ">
                                <option value="{{Request::is('karyawan/tambah-data/*')?'':$data->id_terapi}}" hidden>{{Request::is('karyawan/tambah-data/*')?'-- select One --':$data->terapi}}</option>
                                @foreach ($j_terapi as $isi)
                                <option value="{{$isi->id_terapi}}">{{$isi->terapi}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Alamat</label>

                            <div class="col-sm-6">
                              <textarea class="form-control" id="alamatA" rows="3" name="alamat">{{Request::is('karyawan/tambah-data/*')?'':$data->alamat}}</textarea>
                            </div>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">No. Telepon</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="no_tlp" pattern="[0-9]+" value="{{Request::is('karyawan/tambah-data/*')?'':$data->tlp}}" required>
                            </div>
                          </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-7 col-md-6 text-center">
                        <div class="form-group">
                          <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Hak Akses</label>

                          <div class="col-sm-6">
                            <select class="form-control select2" style="width: 100%;" name="hakakses" value=" ">
                              <option value="{{Request::is('karyawan/tambah-data/*')?'':'edit'}}" hidden>{{Request::is('karyawan/tambah-data/*')?'-- select One --':$data->hakakses}}</option>
                              <option value="super user">super user</option>
                              <option value="admin">admin</option>
                              <option value="user">user</option>
                            </select>
                          </div>
                        </div>
                    </div>
                  </div>

                    <div class="row">
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Foto</label>

                            <div class="col-sm-6" style="padding-left: 17pt">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default btn-file">
                                            Browse… <input type="file" id="imgInp" value="{{Request::is('karyawan/tambah-data/*')?'':$data->foto}}" name="foto">
                                        </span>
                                    </span>
                                    <input type="text" class="form-control" name="Nfoto" readonly>
                                </div>
                                <img id='img-upload' />
                          </div>
                      </div>
                      <!-- ./col -->
                    </div>
                  </div>

                    <div class="row">
                      <div class="col-xs-7 col-md-12 text-left">
                          <div class="form-group">
                            <label class="col-sm-12"><h3>Fasilitas</h3><hr></label>
                          </div>
                      </div>
                    </div>

                  <div class="row">
                    <div class="col-xs-7 col-md-6 text-center">
                        <div class="form-group">
                          <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Gaji</label>

                          <div class="col-sm-6">
                            <input type="text" class="form-control" pattern="[0-9]+" id="gaji" name="gaji" value="{{Request::is('karyawan/tambah-data/*')?'':$data->gaji}}" required>
                          </div>
                        </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-7 col-md-6 text-center">
                        <div class="form-group">
                          <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Observasi</label>

                          <div class="col-sm-6">
                            <input type="text" class="form-control" name="observasi" pattern="[0-9]+" id='observasi' value="{{Request::is('karyawan/tambah-data/*')?'':$data->observasi}}" required>
                          </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-xs-7 col-md-6 text-center">
                        <div class="form-group">
                          <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Asses</label>

                          <div class="col-sm-6">
                            <input type="text" class="form-control" name="Asses" pattern="[0-9]+" id="asses" value="{{Request::is('karyawan/tambah-data/*')?'':$data->asses}}" required>
                          </div>
                        </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-7 col-md-6 text-center">
                        <div class="form-group">
                          <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Konsumsi</label>

                          <div class="col-sm-6">
                            <input type="text" class="form-control" name="konsumsi" pattern="[0-9]+" id="konsumsi" value="{{Request::is('karyawan/tambah-data/*')?'':$data->konsumsi}}" required>
                          </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-xs-7 col-md-6 text-center">
                        <div class="form-group">
                          <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Transport</label>

                          <div class="col-sm-6">
                            <input type="text" class="form-control" name="transport" pattern="[0-9]+" id="transport" value="{{Request::is('karyawan/tambah-data/*')?'':$data->transport}}" required>
                          </div>
                        </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-7 col-md-6 text-center">
                        <div class="form-group">
                          <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Bonus</label>

                          <div class="col-sm-6">
                            <input type="text" class="form-control" name="bonus" pattern="[0-9]+" id="bonus" value="{{Request::is('karyawan/tambah-data/*')?'':$data->bonus}}" required>
                          </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-xs-7 col-md-6 text-center">
                        <div class="form-group">
                          <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Lembur</label>

                          <div class="col-sm-6">
                            <input type="text" class="form-control" id="lembur" name="lembur" pattern="[0-9]+" value="{{Request::is('karyawan/tambah-data/*')?'':$data->lembur}}" required>
                          </div>
                        </div>
                    </div>
                  </div>

                    <br>
                    <div class="button">
                        <ul style="padding-left: 680pt ">
                          <button class="btn btn-success" href="#">Simpan</button>
                          <a href="{{url('/karyawan')}}" onclick="return confirm('Apakah anda yakin meninggalkan halaman ini?')"><div class="btn btn-danger">Batal</div></a>
                        </ul>
                    </div>
                    <br>
                    <br>
                    </div>
                  </form>
                    <!-- /.box-body -->
                  </div>
                </div>
                <!-- /.col -->
              </div>
              </section>
    <!-- /.content -->

@endsection

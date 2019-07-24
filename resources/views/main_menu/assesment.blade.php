@extends('template.style')
@section('isi')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Assesment
        <small>blabla</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-files-o"></i> Main Menu</a></li>
        <li class="active">Assesment</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- row -->
      <div class="row">
        <div class="col-xs-12">
          <!-- jQuery Knob -->
          <div class="box box-solid">
            <!-- /.box-header -->
            <form class="form-horizontal">
            <div class="box-body">
              <div class="row">
                <div class="col-xs-7 col-md-12 text-left">
                    <div class="form-group">
                      <label class="col-sm-12"><h3>Data Pasien</h3><hr></label>
                    </div>
                </div>
                <!-- ./col -->
              </div>

              <div class="row">
                <div class="col-xs-7 col-md-8 text-center">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Nama</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_P" required>
                      </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-xs-7 col-md-4 text-center">
                    <div class="form-group">
                      <label class="col-sm-5 control-label">Jenis Kelamin</label>

                      <div class="col-sm-7">
                          <select class="form-control select2" style="width: 100%;" name="jk" value=" " required>
                            <option value=" " hidden>-- Select One --</option>
                            <option value="lk">Laki - Laki</option>
                            <option value="pr">Perempuan</option>
                          </select>
                      </div>
                    </div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
              <div class="row">
                <div class="col-xs-7 col-md-8 text-center">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Alamat</label>

                      <div class="col-sm-10">
                          <textarea class="form-control" id="alamatP" rows="3" name="alamat"></textarea>
                      </div>
                    </div>
                </div>
              </div>
              <!-- /.row -->
              <div class="row">
                <div class="col-xs-7 col-md-4 text-center">
                    <div class="form-group">
                      <label class="col-sm-5 control-label">Tempat Lahir</label>

                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="tempat_lahir" required>
                      </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-xs-7 col-md-4 text-center">
                    <div class="form-group">
                        <label class="col-sm-5 control-label">Tanggal Lahir</label>

                        <div class="col-sm-7">
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker" name="tanggal_lahir">
                          </div>
                          <!-- /.input group -->
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-xs-7 col-md-4 text-center">
                    <div class="form-group">
                      <label class="col-sm-5 control-label">Umur</label>

                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="umur" maxlength="3" required>
                      </div>
                    </div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
              <div class="row">
                <div class="col-xs-7 col-md-4 text-center">
                    <div class="form-group">
                      <label class="col-sm-5 control-label">No. Telp</label>

                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="notelp_P" maxlength="15" required>
                      </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-xs-7 col-md-4 text-center">
                    <div class="form-group">
                        <label class="col-sm-5 control-label">Tanggal Daftar</label>

                        <div class="col-sm-7">
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datedaftar" name="tanggal_daftar">
                          </div>
                          <!-- /.input group -->
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-xs-7 col-md-4 text-center">
                    <div class="form-group">
                      <label class="col-sm-5 control-label">Status</label>

                      <div class="col-sm-7">
                          <select class="form-control select2" style="width: 100%;" name="status" value=" " required>
                            <option value=" " hidden>-- Select One --</option>
                            <option value="lk">Laki - Laki</option>
                            <option value="pr">Perempuan</option>
                          </select>
                      </div>
                    </div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
              <div class="row">
                <div class="col-xs-7 col-md-5 text-center">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Foto</label>

                      <div class="col-sm-8">
                          <div class="input-group">
                              <span class="input-group-btn">
                                  <span class="btn btn-default btn-file">
                                      Browse… <input required type="file" id="imgInp" value=" " name="foto">
                                  </span>
                              </span>
                              <input type="text" class="form-control" name="Nfoto" readonly>
                          </div>
                          <img id='img-upload' />
                      </div>
                    </div>
                </div>
                <!-- ./col -->
              </div>
              <!-- end data pasien-->

                    <div class="box-body">
                      <div class="row">
                        <div class="col-xs-7 col-md-12 text-left">
                            <div class="form-group">
                              <label class="col-sm-12"><h3>Data Orangtua - Ayah</h3><hr></label>
                            </div>
                        </div>
                        <!-- ./col -->
                      </div>

                      <div class="row">
                        <div class="col-xs-7 col-md-6 text-center">
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Nama</label>

                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_A" required>
                              </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-xs-7 col-md-6 text-center">
                            <div class="form-group">
                              <label class="col-sm-2 control-label">NIK</label>

                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="nik_A" maxlength="16" required>
                              </div>
                            </div>
                        </div>
                        <!-- ./col -->
                      </div>
                      <!-- /.row -->
                      <div class="row">
                        <div class="col-xs-7 col-md-4 text-center">
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Agama</label>

                              <div class="col-sm-9">
                                  <select class="form-control select2" style="width: 100%;" name="agama_A" value=" " required>
                                    <option value=" " hidden>-- Select One --</option>
                                    <option value="I">Islam</option>
                                    <option value="KP">Kristen Protestan</option>
                                  </select>
                              </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-xs-7 col-md-4 text-center">
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Pend. Terakhir</label>

                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="pendTerakhir_A" required>
                              </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-xs-7 col-md-4 text-center">
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Pekerjaan</label>

                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="pekerjaan_A" required>
                              </div>
                            </div>
                        </div>
                        <!-- ./col -->
                      </div>
                      <div class="row">
                        <div class="col-xs-7 col-md-6 text-center">
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Alamat</label>

                              <div class="col-sm-10">
                                  <textarea class="form-control" id="alamatA" rows="3" name="alamat_A"></textarea>
                                  <input type="checkbox" name="a" value="alamatA" id="cekboxA"/>Alamat sama dengan pasien
                              </div>
                            </div>
                        </div>
                      </div>
                      <!-- /.row -->
                      <div class="row">
                        <div class="col-xs-7 col-md-6 text-center">
                            <div class="form-group">
                              <label class="col-sm-2 control-label">No. Telepon</label>

                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="noTelp_A" maxlength="15" required>
                              </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-xs-7 col-md-6 text-center">
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Email</label>

                              <div class="col-sm-10">
                                <input type="email" class="form-control" name="email_A" maxlength="16" required>
                              </div>
                            </div>
                        </div>
                        <!-- ./col -->
                      </div>
                  </div>
                  <!-- end data ayah-->
                  <div class="box-body">
                    <div class="row">
                      <div class="col-xs-7 col-md-12 text-left">
                          <div class="form-group">
                            <label class="col-sm-12"><h3>Data Orangtua - Ibu</h3><hr></label>
                          </div>
                      </div>
                      <!-- ./col -->
                    </div>

                    <div class="row">
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Nama</label>

                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="nama_I" required>
                            </div>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-2 control-label">NIK</label>

                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="nik_I" maxlength="16" required>
                            </div>
                          </div>
                      </div>
                      <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                      <div class="col-xs-7 col-md-4 text-center">
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Agama</label>

                            <div class="col-sm-9">
                                <select class="form-control select2" style="width: 100%;" name="agama_I" value=" " required>
                                  <option value=" " hidden>-- Select One --</option>
                                  <option value="I">Islam</option>
                                  <option value="KP">Kristen Protestan</option>
                                </select>
                            </div>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-xs-7 col-md-4 text-center">
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Pend. Terakhir</label>

                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="pendTerakhir_I" required>
                            </div>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-xs-7 col-md-4 text-center">
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Pekerjaan</label>

                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="pekerjaan_I" required>
                            </div>
                          </div>
                      </div>
                      <!-- ./col -->
                    </div>
                    <div class="row">
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Alamat</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" id="alamatI" rows="3" name="alamat_I"></textarea>
                                <input type="checkbox" name="a" value="alamatI" id="cekboxI" />Alamat sama dengan pasien
                            </div>
                          </div>
                      </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-2 control-label">No. Telepon</label>

                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="noTelp_I" maxlength="15" required>
                            </div>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>

                            <div class="col-sm-10">
                              <input type="email" class="form-control" name="email_I" maxlength="16" required>
                            </div>
                          </div>
                      </div>
                      <!-- ./col -->
                    </div>
                </div>
                <!-- end data ibu-->



              <!-- /.row -->
              <div class="row">
                <div class="col-xs-7 col-md-4 text-center">
                    <button type="button" class="btn btn-block btn-primary">Primary</button>
                    <button type="button" class="btn btn-block btn-danger">Danger</button>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
            </form>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- row -->
      <div class="row">
        <div class="col-xs-12">
          <!-- jQuery Knob -->
          <div class="box box-solid">
            <div class="box-header">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">jQuery Knob</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
                sdds
            </div>
          </div>
        </div>
    </div>


    </section>
    <!-- /.content -->
  </div>

@endsection

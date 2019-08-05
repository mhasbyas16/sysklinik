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
              <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Rendering engine</th>
              <th>Browser</th>
              <th>Platform(s)</th>
              <th>Engine version</th>
              <th>CSS grade</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>Trident</td>
              <td>Internet
                Explorer 4.0
              </td>
              <td>Win 95+</td>
              <td> 4</td>
              <td>X</td>
            </tr>
            <tr>
              <td>Trident</td>
              <td>Internet
                Explorer 5.0
              </td>
              <td>Win 95+</td>
              <td>5</td>
              <td>C</td>
            </tr>
            <tr>
              <td>Trident</td>
              <td>Internet
                Explorer 5.5
              </td>
              <td>Win 95+</td>
              <td>5.5</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Trident</td>
              <td>Internet
                Explorer 6
              </td>
              <td>Win 98+</td>
              <td>6</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Trident</td>
              <td>Internet Explorer 7</td>
              <td>Win XP SP2+</td>
              <td>7</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Trident</td>
              <td>AOL browser (AOL desktop)</td>
              <td>Win XP</td>
              <td>6</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Firefox 1.0</td>
              <td>Win 98+ / OSX.2+</td>
              <td>1.7</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Firefox 1.5</td>
              <td>Win 98+ / OSX.2+</td>
              <td>1.8</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Firefox 2.0</td>
              <td>Win 98+ / OSX.2+</td>
              <td>1.8</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Firefox 3.0</td>
              <td>Win 2k+ / OSX.3+</td>
              <td>1.9</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Camino 1.0</td>
              <td>OSX.2+</td>
              <td>1.8</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Camino 1.5</td>
              <td>OSX.3+</td>
              <td>1.8</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Netscape 7.2</td>
              <td>Win 95+ / Mac OS 8.6-9.2</td>
              <td>1.7</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Netscape Browser 8</td>
              <td>Win 98SE+</td>
              <td>1.7</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Netscape Navigator 9</td>
              <td>Win 98+ / OSX.2+</td>
              <td>1.8</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Mozilla 1.0</td>
              <td>Win 95+ / OSX.1+</td>
              <td>1</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Mozilla 1.1</td>
              <td>Win 95+ / OSX.1+</td>
              <td>1.1</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Mozilla 1.2</td>
              <td>Win 95+ / OSX.1+</td>
              <td>1.2</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Mozilla 1.3</td>
              <td>Win 95+ / OSX.1+</td>
              <td>1.3</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Mozilla 1.4</td>
              <td>Win 95+ / OSX.1+</td>
              <td>1.4</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Mozilla 1.5</td>
              <td>Win 95+ / OSX.1+</td>
              <td>1.5</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Mozilla 1.6</td>
              <td>Win 95+ / OSX.1+</td>
              <td>1.6</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Mozilla 1.7</td>
              <td>Win 98+ / OSX.1+</td>
              <td>1.7</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Mozilla 1.8</td>
              <td>Win 98+ / OSX.1+</td>
              <td>1.8</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Seamonkey 1.1</td>
              <td>Win 98+ / OSX.2+</td>
              <td>1.8</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Epiphany 2.20</td>
              <td>Gnome</td>
              <td>1.8</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Webkit</td>
              <td>Safari 1.2</td>
              <td>OSX.3</td>
              <td>125.5</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Webkit</td>
              <td>Safari 1.3</td>
              <td>OSX.3</td>
              <td>312.8</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Webkit</td>
              <td>Safari 2.0</td>
              <td>OSX.4+</td>
              <td>419.3</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Webkit</td>
              <td>Safari 3.0</td>
              <td>OSX.4+</td>
              <td>522.1</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Webkit</td>
              <td>OmniWeb 5.5</td>
              <td>OSX.4+</td>
              <td>420</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Webkit</td>
              <td>iPod Touch / iPhone</td>
              <td>iPod</td>
              <td>420.1</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Webkit</td>
              <td>S60</td>
              <td>S60</td>
              <td>413</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Presto</td>
              <td>Opera 7.0</td>
              <td>Win 95+ / OSX.1+</td>
              <td>-</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Presto</td>
              <td>Opera 7.5</td>
              <td>Win 95+ / OSX.2+</td>
              <td>-</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Presto</td>
              <td>Opera 8.0</td>
              <td>Win 95+ / OSX.2+</td>
              <td>-</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Presto</td>
              <td>Opera 8.5</td>
              <td>Win 95+ / OSX.2+</td>
              <td>-</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Presto</td>
              <td>Opera 9.0</td>
              <td>Win 95+ / OSX.3+</td>
              <td>-</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Presto</td>
              <td>Opera 9.2</td>
              <td>Win 88+ / OSX.3+</td>
              <td>-</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Presto</td>
              <td>Opera 9.5</td>
              <td>Win 88+ / OSX.3+</td>
              <td>-</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Presto</td>
              <td>Opera for Wii</td>
              <td>Wii</td>
              <td>-</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Presto</td>
              <td>Nokia N800</td>
              <td>N800</td>
              <td>-</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Presto</td>
              <td>Nintendo DS browser</td>
              <td>Nintendo DS</td>
              <td>8.5</td>
              <td>C/A<sup>1</sup></td>
            </tr>
            <tr>
              <td>KHTML</td>
              <td>Konqureror 3.1</td>
              <td>KDE 3.1</td>
              <td>3.1</td>
              <td>C</td>
            </tr>
            <tr>
              <td>KHTML</td>
              <td>Konqureror 3.3</td>
              <td>KDE 3.3</td>
              <td>3.3</td>
              <td>A</td>
            </tr>
            <tr>
              <td>KHTML</td>
              <td>Konqureror 3.5</td>
              <td>KDE 3.5</td>
              <td>3.5</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Tasman</td>
              <td>Internet Explorer 4.5</td>
              <td>Mac OS 8-9</td>
              <td>-</td>
              <td>X</td>
            </tr>
            <tr>
              <td>Tasman</td>
              <td>Internet Explorer 5.1</td>
              <td>Mac OS 7.6-9</td>
              <td>1</td>
              <td>C</td>
            </tr>
            <tr>
              <td>Tasman</td>
              <td>Internet Explorer 5.2</td>
              <td>Mac OS 8-X</td>
              <td>1</td>
              <td>C</td>
            </tr>
            <tr>
              <td>Misc</td>
              <td>NetFront 3.1</td>
              <td>Embedded devices</td>
              <td>-</td>
              <td>C</td>
            </tr>
            <tr>
              <td>Misc</td>
              <td>NetFront 3.4</td>
              <td>Embedded devices</td>
              <td>-</td>
              <td>A</td>
            </tr>
            <tr>
              <td>Misc</td>
              <td>Dillo 0.8</td>
              <td>Embedded devices</td>
              <td>-</td>
              <td>X</td>
            </tr>
            <tr>
              <td>Misc</td>
              <td>Links</td>
              <td>Text only</td>
              <td>-</td>
              <td>X</td>
            </tr>
            <tr>
              <td>Misc</td>
              <td>Lynx</td>
              <td>Text only</td>
              <td>-</td>
              <td>X</td>
            </tr>
            <tr>
              <td>Misc</td>
              <td>IE Mobile</td>
              <td>Windows Mobile 6</td>
              <td>-</td>
              <td>C</td>
            </tr>
            <tr>
              <td>Misc</td>
              <td>PSP browser</td>
              <td>PSP</td>
              <td>-</td>
              <td>C</td>
            </tr>
            <tr>
              <td>Other browsers</td>
              <td>All others</td>
              <td>-</td>
              <td>-</td>
              <td>U</td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
              <th>Rendering engine</th>
              <th>Browser</th>
              <th>Platform(s)</th>
              <th>Engine version</th>
              <th>CSS grade</th>
            </tr>
            </tfoot>
          </table>
            </div>
          </div>
        </div>
    </div>


    </section>
    <!-- /.content -->
  </div>

@endsection

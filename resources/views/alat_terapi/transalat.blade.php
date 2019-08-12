@extends('template.style')
@section('isi')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
      <h1>
        Alat Terapi
        <small>Transaksi Alat Terapi</small>
      </h1>
      <!--
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-files-o"></i> Main Menu</a></li>
        <li class="active">Assesment</li>
      </ol>
      -->
    </section>

    <!-- Main content -->
    <div class="container">
      <div>
      <br>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
          <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Barang Masuk</a>
        </li>
        <li role="presentation">
          <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Barang Keluar</a>
        </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
          <section class="content">

              <!-- row -->
              <div class="row">
                <div class="col-xs-12">
                  <!-- jQuery Knob -->
                  <div class="box box-solid">

                    <!-- begin data alat-->
                    <form class="form-horizontal">
                    <div class="box-body">
                      <div class="row">
                        <div class="col-xs-7 col-md-12 text-left">
                            <div class="form-group">
                              <label class="col-sm-12"><h3>Input Alat Terapi Masuk</h3><hr></label>
                            </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-xs-7 col-md-8 text-center">
                            <div class="form-group">
                              <label class="col-sm-4 control-label" style="text-align: left; padding-left: 40pt">Tanggal</label>

                              <div class="col-sm-7">
                                <input type="text" class="form-control" name="nama_P" required>
                              </div>
                            </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-xs-7 col-md-8 text-center">
                            <div class="form-group">
                              <label class="col-sm-4 control-label" style="text-align: left; padding-left: 40pt">ID Alat Terapi</label>

                              <div class="col-sm-7">
                                  <input type="text" class="form-control" id="alamatP" name="alamat"></textarea>
                              </div>
                            </div>
                        </div>
                      </div> 

                      <div class="row">
                        <div class="col-xs-7 col-md-8 text-center">
                            <div class="form-group">
                              <label class="col-sm-4 control-label" style="text-align: left; padding-left: 40pt">Nama Alat Terapi</label>

                              <div class="col-sm-7">
                                <input type="text" class="form-control" name="nama_P" required>
                              </div>
                            </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-xs-7 col-md-8 text-center">
                            <div class="form-group">
                              <label class="col-sm-4 control-label" style="text-align: left; padding-left: 40pt">Jumlah</label>

                              <div class="col-sm-7">
                                  <input type="text" class="form-control" id="alamatP" name="alamat"></textarea>
                              </div>
                            </div>
                        </div>
                      </div>             
                      
                      <div class="button">
                        <ul class="left" style="padding-left: 390pt ">
                          <button class="btn btn-success" href="#">Simpan</button>
                          <button class="btn btn-secondary" href="#">Batal</button>
                        </ul>
                      </div>

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
                      <h3 class="box-title">Tabel Record Masuk Alat Terapi</h3>
                    </div>
                    
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="pegawais" class="table table-bordered table-striped">
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
                    <!-- /.box-body -->
                  </div>
                </div>
              </div>
          </section>
        </div>

        <div role="tabpanel" class="tab-pane" id="profile">
          <section class="content">

              <!-- row -->
              <div class="row">
                <div class="col-xs-12">
                  <!-- jQuery Knob -->
                  <div class="box box-solid">

                    <!-- begin data alat-->
                    <form class="form-horizontal">
                    <div class="box-body">
                      <div class="row">
                        <div class="col-xs-7 col-md-12 text-left">
                            <div class="form-group">
                              <label class="col-sm-12"><h3>Input Alat Terapi Keluar</h3><hr></label>
                            </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-xs-7 col-md-8 text-center">
                            <div class="form-group">
                              <label class="col-sm-4 control-label" style="text-align: left; padding-left: 40pt">Tanggal</label>

                              <div class="col-sm-7">
                                <input type="text" class="form-control" name="nama_P" required>
                              </div>
                            </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-xs-7 col-md-8 text-center">
                            <div class="form-group">
                              <label class="col-sm-4 control-label" style="text-align: left; padding-left: 40pt">ID Alat Terapi</label>

                              <div class="col-sm-7">
                                  <input type="text" class="form-control" id="alamatP" name="alamat"></textarea>
                              </div>
                            </div>
                        </div>
                      </div> 

                      <div class="row">
                        <div class="col-xs-7 col-md-8 text-center">
                            <div class="form-group">
                              <label class="col-sm-4 control-label" style="text-align: left; padding-left: 40pt">Nama Alat Terapi</label>

                              <div class="col-sm-7">
                                <input type="text" class="form-control" name="nama_P" required>
                              </div>
                            </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-xs-7 col-md-8 text-center">
                            <div class="form-group">
                              <label class="col-sm-4 control-label" style="text-align: left; padding-left: 40pt">Jumlah</label>

                              <div class="col-sm-7">
                                  <input type="text" class="form-control" id="alamatP" name="alamat"></textarea>
                              </div>
                            </div>
                        </div>
                      </div>             
                      
                      <div class="button">
                        <ul class="left" style="padding-left: 390pt ">
                          <button class="btn btn-success" href="#">Simpan</button>
                          <button class="btn btn-secondary" href="#">Batal</button>
                        </ul>
                      </div>

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
                      <h3 class="box-title">Tabel Record Keluar Alat Terapi</h3>
                    </div>
                    
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="pegawais" class="table table-bordered table-striped">
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
                    <!-- /.box-body -->
                  </div>
                </div>
              </div>
          </section>
        </div>
      </div>
      <!-- End Nav tabs -->

      </div>
    </div>
    <!-- End Main content -->
  </div>
@endsection

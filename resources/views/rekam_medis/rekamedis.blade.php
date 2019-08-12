@extends('template.style')
@section('isi')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Rekam Medis
        <small>Header Rekam Medis</small>
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
                  <!-- jQuery Knob -->
                  <div class="box box-solid">

                    <!-- begin data alat-->
                    <form class="form-horizontal">

                    <div class="box-body">
                      <div class="row">
                        <div class="col-xs-7 col-md-12 text-left">
                            <div class="form-group">
                              <label class="col-sm-12"><h3>Data Rekam Medis</h3><hr></label>
                            </div>
                        </div>
                      </div>

                    <div class="row">
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">No. Rekam Medis</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="nama_P">
                            </div>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Status</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="nama_P">
                            </div>
                          </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">ID Pasien</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="nama_P">
                            </div>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Jenis Kelamin</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="nama_P">
                            </div>
                          </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Nama Pasien</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="nama_P">
                            </div>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Tanggal Lahir</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="nama_P">
                            </div>
                          </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Diagnosa</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="nama_P">
                            </div>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Umur</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="nama_P">
                            </div>
                          </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Jenis Terapi</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="nama_P">
                            </div>
                          </div>
                      </div>
                  
                    </div>

                    <br>
                    <div class="button">
                        <ul style="padding-left: 680pt ">
                          <button class="btn btn-success" href="#">Simpan</button>
                          <button class="btn btn-danger" href="#">Batal</button>
                        </ul>
                    </div>
                    <br>
                    <br>
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
                      <h3 class="box-title">Tabel Rekam Medis</h3>
                    </div>
                    
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="pegawais" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID x</th>
                                <th>x</th>
                                <th>Jenis x</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                <th>ID x</th>
                                <th>x</th>
                                <th>Jenis x</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>

                        <tbody>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                           
                          <td>
                            <a href="{{url('/d_rekamedis')}}"><i class="fas fa-edit" style="color:green;font-size:20px;"></i></a> 
                            &nbsp;&nbsp;&nbsp;
                            <a href="#" onclick="return confirm('Apakah Kamu Yakin Mengahapus Data ID?')">
                              <i class="fas fa-eraser" style="color:red;font-size:20px;"></i>
                            </a>
                          </td>
                          
                          <td></td>
                          
                      </tr>
                     
                  </tbody>
                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                </div>
              </div>
          </section>
    <!-- /.content -->
  </div>

@endsection

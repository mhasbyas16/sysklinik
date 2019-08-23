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
                    <form class="form-horizontal">

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
                              <input type="text" class="form-control" name="nama_P" required>
                            </div>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Pendidikan Terakhir</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="nama_P" required>
                            </div>
                          </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Nama</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="nama_P" required>
                            </div>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Jabatan</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="nama_P" required>
                            </div>
                          </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">NIK</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="nama_P" required>
                            </div>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Tanggal Masuk</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="nama_P" required>
                            </div>
                          </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Tanggal lahir</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="nama_P" required>
                            </div>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">No. BPJS</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="nama_P" required>
                            </div>
                          </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Jenis Kelamin</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="nama_P" required>
                            </div>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">NPWP</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="nama_P" required>
                            </div>
                          </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Agama</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="nama_P" required>
                            </div>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Intensif</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="nama_P" required>
                            </div>
                          </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Alamat</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="nama_P" required>
                            </div>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Transport</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="nama_P" required>
                            </div>
                          </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">No. Telepon</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="nama_P" required>
                            </div>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-xs-7 col-md-6 text-center">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left; padding-left: 20pt">Tunjangan</label>

                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="nama_P" required>
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
                      <h3 class="box-title">Tabel Pegawai</h3>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="pegawais" class="table table-bordered table-striped text-center">
                        <thead>
                        <tr>
                          <th>ID Karyawan</th>
                          <th>Nama</th>
                          <th>Jabatan</th>
                          <th>Alamat</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          @foreach($data as $data)
                          <td>{{$data->id_pegawai}}</td>
                          <td>{{$data->nama}}</td>
                          <td>{{$data->jabatan}}</td>
                          <td>{{$data->alamat}}</td>
                          @endforeach
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>ID Karyawan</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Alamat</th>
                        </tr>
                        </tfoot>
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

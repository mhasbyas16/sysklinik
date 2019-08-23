@extends('template.style')
@section('isi')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Master
        <small>Pasien</small>
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
                              <label class="col-sm-12"><h3>Data Pasien</h3><hr></label>
                            </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-xs-7 col-md-8 text-center">
                            <div class="form-group">
                              <label class="col-sm-4 control-label" style="text-align: left; padding-left: 40pt">ID Pasien</label>

                              <div class="col-sm-7">
                                <input type="text" class="form-control" name="nama_P" required>
                              </div>
                            </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-xs-7 col-md-8 text-center">
                            <div class="form-group">
                              <label class="col-sm-4 control-label" style="text-align: left; padding-left: 40pt">Nama Pasien</label>

                              <div class="col-sm-7">
                                  <input type="text" class="form-control" id="alamatP" name="alamat"></textarea>
                              </div>
                            </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-xs-7 col-md-8 text-center">
                            <div class="form-group">
                              <label class="col-sm-4 control-label" style="text-align: left; padding-left: 40pt">Tanggal Lahir</label>

                              <div class="col-sm-7">
                                <input type="text" class="form-control" name="nama_P" required>
                              </div>
                            </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-xs-7 col-md-8 text-center">
                            <div class="form-group">
                              <label class="col-sm-4 control-label" style="text-align: left; padding-left: 40pt">Umur</label>

                              <div class="col-sm-7">
                                  <input type="text" class="form-control" id="alamatP" name="alamat"></textarea>
                              </div>
                            </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-xs-7 col-md-8 text-center">
                            <div class="form-group">
                              <label class="col-sm-4 control-label" style="text-align: left; padding-left: 40pt">Jenis Kelamin</label>

                              <div class="col-sm-7">
                                  <input type="text" class="form-control" id="alamatP" name="alamat"></textarea>
                              </div>
                            </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-xs-7 col-md-8 text-center">
                            <div class="form-group">
                              <label class="col-sm-4 control-label" style="text-align: left; padding-left: 40pt">Agama</label>

                              <div class="col-sm-7">
                                  <input type="text" class="form-control" id="alamatP" name="alamat"></textarea>
                              </div>
                            </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-xs-7 col-md-8 text-center">
                            <div class="form-group">
                              <label class="col-sm-4 control-label" style="text-align: left; padding-left: 40pt">Alamat</label>

                              <div class="col-sm-7">
                                  <input type="text" class="form-control" id="alamatP" name="alamat"></textarea>
                              </div>
                            </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-xs-7 col-md-8 text-center">
                            <div class="form-group">
                              <label class="col-sm-4 control-label" style="text-align: left; padding-left: 40pt">No. Telepon</label>

                              <div class="col-sm-7">
                                  <input type="text" class="form-control" id="alamatP" name="alamat"></textarea>
                              </div>
                            </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-xs-7 col-md-8 text-center">
                            <div class="form-group">
                              <label class="col-sm-4 control-label" style="text-align: left; padding-left: 40pt">Status</label>

                              <div class="col-sm-7">
                                  <input type="text" class="form-control" id="alamatP" name="alamat"></textarea>
                              </div>
                            </div>
                        </div>
                      </div>

                      <div class="button">
                        <ul class="left" style="padding-left: 390pt ">
                          <button class="btn btn-success" href="#">Simpan</button>
                          <button class="btn btn-danger" href="#">Batal</button>
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
                      <h3 class="box-title">Tabel Pasien</h3>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="pasiens" class="table table-bordered table-striped text-center">
                        <thead>
                        <tr>
                        </tr>
                        <th>ID Pasien</th>
                        <th>Nama</th>
                        <th>Status</th>
                        </thead>
                        <tbody>
                          @foreach($data as $data)
                        <tr>
                          <td>{{$data->id_pasien}}</td>
                          <td>{{$data->nama}}</td>
                          <td>{{$data->status}}</td>
                        </tr>
                          @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>ID Pasien</th>
                          <th>Nama</th>
                          <th>Status</th>
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

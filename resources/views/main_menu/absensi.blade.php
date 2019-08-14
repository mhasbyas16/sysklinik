@extends('template.style')
@section('isi')
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Main Menu
          <small>Absensi</small>
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
            <a href="#pasien" aria-controls="home" role="tab" data-toggle="tab">Pasien</a>
          </li>
          <li role="presentation">
            <a href="#terapis" aria-controls="profile" role="tab" data-toggle="tab">Terapis</a>
          </li>
          <li role="presentation">
            <a href="#karyawan" aria-controls="profile" role="tab" data-toggle="tab">Karyawan</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="pasien">
            <section class="content">
                <div class="row">
                  <div class="col-xs-12">
                    <!-- jQuery Knob -->
                    <div class="box box-solid">
                      <div class="box-header">
                        <i class="fa fa-bar-chart-o"></i>
                        <h3 class="box-title">Tabel Presensi Pasien</h3>
                      </div>

                      <!-- /.box-header -->
                      <div class="box-body">
                        <table border="0" cellspacing="5" cellpadding="5">
                          <tbody><tr>
                            <td>Dari</td>
                            <td>:</td>
                            <td><div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                  <input type="date" class="form-control pull-right min-p" id="min" name="tanggal_daftar">
                                </div>
                            </td>
                            <td>Sampai</td>
                            <td>:</td>
                            <td><div class="input-group date">
                                <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                                </div>
                                <input type="date" class="form-control pull-right max-p" id="max" name="tanggal_daftar">
                            </div>
                          </td>
                          </tr>
                          <tr>
                          </tr>
                        </tbody></table>
                        <table id="example_P" class="display text-center" style="width:100%;" >
                          <thead>
                            <tr>
                              <th>Nama</th>
                              <th>Tanggal</th>
                              <th>Jam Masuk</th>
                              <th>Jam Keluar</th>
                              <th>ID Jadwal</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($pasien as $pasien)
                            <tr>
                              <td style="text-align:left;">{{$pasien->nama}}</td>
                              <td>{{$pasien->tgl}}</td>
                              <td>{{$pasien->jam_masuk}}</td>
                              <td>{{$pasien->jam_keluar}}</td>
                              <td>{{$pasien->id_jadwal}}</td>
                            </tr>
                            @endforeach
                          </tbody>
                          <tfoot>
                            <tr>
                              <th>Nama</th>
                              <th>Tanggal</th>
                              <th>Jam Masuk</th>
                              <th>Jam Keluar</th>
                              <th>ID Jadwal</th>
                            </tr>
                          </tfoot>
                      </div>
                    </table>
                      </div>
                      <!-- /.box-body -->
                    </div>
                  </div>
                </div>
            </section>
          </div>

          <div role="tabpanel" class="tab-pane" id="terapis">
            <section class="content">
                <div class="row">
                  <div class="col-xs-12">
                    <!-- jQuery Knob -->
                    <div class="box box-solid">
                      <div class="box-header">
                        <i class="fa fa-bar-chart-o"></i>
                        <h3 class="box-title">Tabel Presensi Terapis</h3>
                      </div>

                      <!-- /.box-header -->
                      <div class="box-body">
                        <table border="0" cellspacing="5" cellpadding="5">
                          <tbody><tr>
                            <td>Dari</td>
                            <td>:</td>
                            <td><div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                  <input type="date" class="form-control pull-right min-p" id="min" name="tanggal_daftar">
                                </div>
                            </td>
                            <td>Sampai</td>
                            <td>:</td>
                            <td><div class="input-group date">
                                <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                                </div>
                                <input type="date" class="form-control pull-right max-p" id="max" name="tanggal_daftar">
                            </div>
                          </td>
                          </tr>
                          <tr>
                          </tr>
                        </tbody></table>
                        <table id="example_T" class="display text-center" style="width:100%;" >
                          <thead>
                            <tr>
                              <th>Nama</th>
                              <th>Tanggal</th>
                              <th>Jam Masuk</th>
                              <th>Jam Keluar</th>
                              <th>ID Jadwal</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($terapis as $terapis)
                            <tr>
                              <td style="text-align:left;">{{$terapis->nama}}</td>
                              <td>{{$terapis->tgl}}</td>
                              <td>{{$terapis->jam_masuk}}</td>
                              <td>{{$terapis->jam_keluar}}</td>
                              <td>{{$terapis->id_jadwal}}</td>
                            </tr>
                            @endforeach
                          </tbody>
                          <tfoot>
                            <tr>
                              <th>Nama</th>
                              <th>Tanggal</th>
                              <th>Jam Masuk</th>
                              <th>Jam Keluar</th>
                              <th>ID Jadwal</th>
                            </tr>
                          </tfoot>
                      </div>
                    </table>
                      </div>
                      <!-- /.box-body -->
                    </div>
                  </div>
                </div>
            </section>
          </div>

          <div role="tabpanel" class="tab-pane" id="karyawan">
            <section class="content">
                <div class="row">
                  <div class="col-xs-12">
                    <!-- jQuery Knob -->
                    <div class="box box-solid">
                      <div class="box-header">
                        <i class="fa fa-bar-chart-o"></i>
                        <h3 class="box-title">Tabel Presensi Karyawan</h3>
                      </div>

                      <!-- /.box-header -->
                      <div class="box-body">
                        <table border="0" cellspacing="5" cellpadding="5">
                          <tbody><tr>
                            <td>Dari</td>
                            <td>:</td>
                            <td><div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                  <input type="date" class="form-control pull-right min-p" id="min" name="tanggal_daftar">
                                </div>
                            </td>
                            <td>Sampai</td>
                            <td>:</td>
                            <td><div class="input-group date">
                                <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                                </div>
                                <input type="date" class="form-control pull-right max-p" id="max" name="tanggal_daftar">
                            </div>
                          </td>
                          </tr>
                          <tr>
                          </tr>
                        </tbody></table>
                        <table id="example_K" class="display text-center" style="width:100%;" >
                          <thead>
                            <tr>
                              <th>Nama</th>
                              <th>Tanggal</th>
                              <th>Jam Masuk</th>
                              <th>Jam Keluar</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($karyawan as $karyawan)
                            <tr>
                              <td style="text-align:left;">{{$karyawan->nama}}</td>
                              <td>{{$karyawan->tgl}}</td>
                              <td>{{$karyawan->jam_masuk}}</td>
                              <td>{{$karyawan->jam_keluar}}</td>
                            </tr>
                            @endforeach
                          </tbody>
                          <tfoot>
                            <tr>
                              <th>Nama</th>
                              <th>Tanggal</th>
                              <th>Jam Masuk</th>
                              <th>Jam Keluar</th>
                            </tr>
                          </tfoot>
                      </div>
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
      <!-- /.content -->
    </div>

  @endsection

@extends('template.style')
@section('isi')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Main Menu
        <small>Register List</small>
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
`   <!-- row -->
      <div class="row">
        <div class="col-xs-12">
          <!-- jQuery Knob -->
          <div class="box box-solid">
            <div class="box-body">
                <section class="content">
              <div class="row">
                <div class="col-xs-12">
                  <!-- jQuery Knob -->
                  <div class="box box-solid">
                    <div class="box-header">
                      <i class="fa fa-bar-chart-o"></i>
                      <h3 class="box-title">Tabel Register List</h3>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Nama</th>
                      <th>ID Asses</th>
                      <th>ID Regist</th>
                      <th>TGL Asses</th>
                      <th>ID Terapi</th>
                      <th>Assesor</th>
                      <th>TGL Mulai Terapi</th>
                      <th>TGL Selesai Terapi</th>
                      <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($isi as $isi)
                      <tr>
                        <td>{{$isi->nama}}</td>
                        <td>{{$isi->id_asses}}</td>
                        <td>{{$isi->id_registerlist}}</td>
                        <td>{{$isi->tgl_asses}}</td>
                        <td>{{$isi->id_terapi}}</td>
                        <td>{{$isi->assesor}}</td>
                        <td>{{$isi->tgl_mulai_terapi}}</td>
                        <td>{{$isi->tgl_selesai_terapi}}</td>
                        <td><a href="{{url('/register-list')}}/{{$isi->id_daftar}}">{{$isi->statusR}}</a></td>
                      </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>Nama</th>
                      <th>ID Asses</th>
                      <th>ID Regist</th>
                      <th>TGL Asses</th>
                      <th>ID Terapi</th>
                      <th>Assesor</th>
                      <th>TGL Mulai Terapi</th>
                      <th>TGL Selesai Terapi</th>
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
            </div>
          </div>
        </div>
      </div>
@endsection

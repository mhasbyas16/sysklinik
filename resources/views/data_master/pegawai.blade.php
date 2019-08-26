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
                  <!-- jQuery Knob -->
                  <div class="box box-solid">
                    <div class="box-header">
                      <i class="fa fa-bar-chart-o"></i>
                      <h3 class="box-title">Tabel Pegawai</h3>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                      @if(\Session::has('alert'))
                      <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-check"></i> Success!</h4>
                        {{Session::get('alert')}}
                      @endif
                      <table id="pegawais" class="table table-bordered table-striped text-center">
                        <thead>
                        <tr>
                          <th>ID Karyawan</th>
                          <th>Nama</th>
                          <th>Jabatan</th>
                          <th>Alamat</th>
                          <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          @foreach($data as $data)
                          <td>{{$data->id_pegawai}}</td>
                          <td>{{$data->nama}}</td>
                          <td>{{$data->jabatan}}</td>
                          <td>{{$data->alamat}}</td>
                          <td><div class="btn-group">
                              <a href="{{url('/karyawan/edit-data')}}/{{$data->id_pegawai}}">
                                <button type="button" class="btn btn-success">Edit</button></a>
                              <a href="#" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')">
                                <button type="button" class="btn btn-danger">Delete</button></a>
                              <a href="#">
                                <button  type="button" class="btn btn-info" data-toggle="modal" data-target="#{{$data->id_pegawai}}">Info</button></a>
                          </div></td>

                          <!--modals-->
                          <div class="modal fade" id="{{$data->id_pegawai}}">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title">Info karyawan</h4>
                                </div>
                                <div class="modal-body">
                                  FOTO
                                  <pre>
Nama          : {{$data->nama}}
NIK           : {{$data->nik}}
ID Karyawan   : {{$data->id_pegawai}}
Jabatan       : {{$data->jabatan}}
Tanggal Lahir : {{$data->tgl_lahir}}
Jenis Kelamin : {{$data->jk}}
Agama         : {{$data->agama}}
No Telepon    : {{$data->tlp}}
Alamat        : {{$data->alamat}}
Pend Terakhir : {{$data->pend_akhir}}
Tanggal Masuk : {{$data->tgl_masuk}}
                                  </pre>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>

                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          <!-- /.modal -->

                          @endforeach
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>ID Karyawan</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                        </tfoot>
                      </table>
                      <div class="col-xs-3">
                      <a href="{{url('karyawan/tambah-data/karyawan')}}" class="btn btn-block btn-social btn-linkedin">
                        <i class="fa fa-user-plus"></i>Tambah Karyawan
                      </a>
                    </div>
                      <div class="col-xs-3">
                      <a href="{{url('karyawan/tambah-data/terapis')}}" class="btn btn-block btn-social btn-google">
                        <i class="fa fa-user-plus"></i>Tambah Terapis
                      </a>
                    </div>
                    </div>
                    <!-- /.box-body -->
                  </div>
                </div>
              </div>
          </section>
    <!-- /.content -->
  </div>

@endsection

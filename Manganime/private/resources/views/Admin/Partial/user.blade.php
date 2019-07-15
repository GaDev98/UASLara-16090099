@extends('Admin.Layout.master')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tabel
        <small>User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route ('Admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @include('flash')

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Semua Data Tabel</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                @method('PATCH')
                <thead>
                <tr >
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Alamat</th>
                  <th>Tanggal Lahir</th>
                  <th>Status Sekolah</th>
                  <th>Gambar</th>
                  <th style="text-align: center;">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no = 0;?>
                  @foreach($userjumlah as $user)
                  <?php $no++ ;?>
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{$user->nama}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->alamat}}</td>
                        <td>{{$user->tgl_lahir}}</td>
                        <td>{{$user->Status_Sekolah}}</td>
                        <td><img src="{{asset('private/storage/app/public/gambar/'.$user->gambar)}}" width="80"></td>
                        <td>
                        <a href="{{route('HapusUser', $user->id)}}" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                        </tr>
                        @endforeach
                </tbody>
              </table>
                {{ $userjumlah->links() }}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

@stop
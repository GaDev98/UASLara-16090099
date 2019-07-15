@extends('Admin.Layout.master')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tabel
        <small>MangaNime</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route ('Admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Manga</li>
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
                  <th>Judul</th>
                  <th>Genre</th>
                  <th>Tanggal Rilis</th>
                  <th>Status</th>
                  <th>Gambar</th>
                  <th style="text-align: center;" >Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no = 0;?>
                  @foreach($urutanawal as $datas)
                  <?php $no++ ;?>
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{$datas->judul}}</td>
                        <td>{{$datas->genre}}</td>
                        <td>{{$datas->tanggal_rilis}}</td>
                        <td>{{$datas->status}}</td>
                        <td><img src="{{asset('private/storage/app/public/gambar/'.$datas->gambar)}}" width="80"></td>
                        <td><a href="{{route('DataManga.edit', $datas->id)}}" class="btn btn-primary" style="width: 65px;">Edit</a>  
                          <br><br>
                          <a href="{{route('HapusManga', $datas->id)}}" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                        </tr>
                        @endforeach
                </tbody>
              </table>
                {{ $urutanawal->links() }}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@endsection
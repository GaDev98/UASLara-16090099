@extends('Admin.Layout.master')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tabel
        <small>Komentar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route ('Admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Komentar</li>
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
                  <th>Komentar</th>
                  <th>Manga/Komik Yang Dikomentar</th>
                  <th>Tanggal Komentar</th>
                  <th style="text-align: center;">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no = 0;?>
                  @foreach($jumlah as $semua)
                  <?php $no++ ;?>
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{$semua->nama}}</td>
                        <td>{{substr($semua->komentar, 0, 50)}} ....</td>
                        <td>{{$semua->dikomentar}}</td>
                        <td>{{$semua->tgl_komen}}</td>
                        <td>
                        <a href="{{route('HapusKomentar', $semua->id)}}" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                        </tr>
                        @endforeach
                </tbody>
              </table>
                {{ $jumlah->links() }}
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
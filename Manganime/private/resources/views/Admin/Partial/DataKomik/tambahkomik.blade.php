
@extends('Admin.Layout.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Tambah Komik
      </h1>
      <ol class="breadcrumb">
        <li><a href="Manga"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Komik</li>
      </ol>
    </section>

    <!-- Main content -->  
  <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Komik</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('DataKomik.store')}}" enctype="multipart/form-data" method="POST">
              @include('flash')
              {!! csrf_field() !!}
              <div class="box-body">
                <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" class="form-control" name="judul" placeholder="Masukan Judul">
                </div>
                <div class="form-group">
                  <label for="sinopsis">Sinposis</label>
                  <textarea type="text" class="form-control" name="sinopsis" placeholder="Masukan Sinopsis" style="width: 1065px; height: 250px;"></textarea>
                </div>
                <div class="form-group">
                  <label for="buatan">Di Terbitkan Oleh</label>
                  <input type="text" class="form-control" name="buatan" placeholder="Masukan Buatan">
                </div>
                <div class="form-group">
                  <label for="genre">Genre</label>
                  <input type="text" class="form-control" name="genre" placeholder="Masukan Genre">
                </div>
                <div class="form-group">
                  <label for="tanggal_rilis">Tanggal Rilis</label>
                  <input type="date" class="form-control" name="tanggal_rilis" placeholder="Masukan Tanggal Rilis">
                </div>
                <div class="form-group">
                  <label for="pengarang">Pengarang</label>
                  <input type="text" class="form-control" name="pengarang" placeholder="Masukan Pengarang">
                </div>
                <div class="form-group">
                  <label for="skor">Skor</label>
                  <input type="text" class="form-control" name="skor" placeholder="Masukan Skor">
                </div>
                <div class="form-group">
                  <label for="gambar">Masukan Gambar</label>
                  <input type="file" name="gambar">

                  <p class="help-block">Ukuran Gambar 4mb.</p>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button> || 
                <button type="submit" class="btn btn-danger">Batal</button>
              </div>
            </form>
          </div>
  </section>
       <!-- /.content -->
@stop
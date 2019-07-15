@extends('Admin.Layout.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Edit Komik
      </h1>
      <ol class="breadcrumb">
        <li><a href="Manga"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Komik</li>
      </ol>
    </section>

    <!-- Main content -->  
  <section class="content">
      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Komik</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('DataKomik.update', $komik->id)}}" enctype="multipart/form-data" method="POST">
              @include('flash')
              {!! csrf_field() !!}
              @method('PATCH')

              <div class="box-body">
                <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" class="form-control" name="judul" placeholder="Masukan Judul" value="{{$komik->judul}}">
                </div>
                <div class="form-group">
                  <label for="sinopsis">Sinposis</label>
                  <textarea type="text" class="form-control" name="sinopsis" style="width: 1065px; height: 250px;">{{ $komik->sinopsis}}</textarea>
                </div>
                <div class="form-group">
                  <label for="buatan">Di Terbitkan Oleh</label>
                  <input type="text" class="form-control" name="buatan" placeholder="Masukan Buatan" value="{{$komik->buatan}}">
                </div>
                <div class="form-group">
                  <label for="genre">Genre</label>
                  <input type="text" class="form-control" name="genre" placeholder="Masukan Genre" value="{{$komik->genre}}">
                </div>
                <div class="form-group">
                  <label for="tanggal_rilis">Tanggal Rilis</label>
                  <input type="date" class="form-control" name="tanggal_rilis" placeholder="Masukan Tangga Rilis" value="{{$komik->tanggal_rilis}}">
                </div>
                <div class="form-group">
                  <label for="pengarang">Pengarang</label>
                  <input type="text" class="form-control" name="pengarang" placeholder="Masukan Pengarang" value="{{$komik->pengarang}}">
                </div>
                <div class="form-group">
                  <label for="skor">Skor</label>
                  <input type="text" class="form-control" name="skor" placeholder="Masukan Skor" value="{{$komik->skor}}">
                </div>
                <div class="form-group">
                  <label for="gambar">Masukan Gambar</label>
                  <img src="{{asset('private/storage/app/public/gambar/'.$komik->gambar)}}" width="80" id="showgambar">
                  <input type="file" name="gambar" class="form-control" id="inputgambar">

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

@section('js')
<script type="text/javascript">
    
    function readURL(input){
        if (input.files && input.files[0]){
            var reader = new FileReader();

            reader.onload = function (e){
                $('$showgambar').attr('src', e.target.result);
            }

            reader.readAsDataUrl(input.files[0]);
        }
    }

    $("#inputgambar").change(function () {
        readURL(this);
    });
</script>
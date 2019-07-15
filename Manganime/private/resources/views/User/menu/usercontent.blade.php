@extends('User.Template.TemplateAwal')

@section('usercontent')

@include('User.menu.benner')
 <!-- Counter Section -->
<div id="counter-section">
  <div class="container">
  <div class="row">
                <div class="col-md-12 text-center heading_center heading">
                    <h2>Semua <span>Pstingan</span></h2>
                </div>
            </div>
  </div>
  <br><br>
  <div class="container">

      <div class="row number-counters text-center" style="margin-left: 380px;">

          <div class="col-md-3 col-sm-6 col-xs-12" >
              <!-- first count item -->
              <div class="counters-item">
                  <i class="fa fa-film" aria-hidden="true"></i>
                  <!-- Set Your Number here. i,e. data-to="56" -->
                  <strong data-to="{{$jumlahkomik}}">0</strong>
                  <p>Jumlah Komik</p>
                  <div class="border-inner"></div>
              </div>

          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
              <!-- first count item -->
              <div class="counters-item">
                  <i class="fa fa-film" aria-hidden="true"></i>
                  <!-- Set Your Number here. i,e. data-to="56" -->
                  <strong data-to="{{$jumlahmanga}}">0</strong>
                  <p>Jumlah Manga</p>
                  <div class="border-inner"></div>
              </div>

          </div>

      </div>

  </div>
</div>
<!-- /#Counter Section -->
@stop
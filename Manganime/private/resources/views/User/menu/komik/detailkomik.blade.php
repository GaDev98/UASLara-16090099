@extends('User.Template.TemplateAwal')

@section('usercontent')

<!-- Inner Banner -->
    <section class="page-banner parallaxie" style="background-image: url({{asset('public/Template/images/logo/header2.jpg') }} );">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2>Detail Komik</h2>
            <div class="bread-crumb text-right"><a href="index.html">Home:</a> / Detail Komik</div>
          </div>
        </div>
      </div>
    </section>
    <!-- /# Inner Banner --> 

    <!-- Blog -->
    <section id="blog" class="p_t_b">
      <div class="container">
        <div class="row">
          <div class="col-md-9 col-sm-9 col-xs-12">
            <div class="blog_detail">
              <div class="blog_heading">
                <h2>{{$komentar_komik->judul}}</h2>
                <ul>
                  <li><a href="#."><i class="fa fa-user" aria-hidden="true"></i> by :<span> {{$komentar_komik->pengarang}}</span></a></li>
                  <li><a href="#."><i class="fa fa-clock-o" aria-hidden="true"></i> <span>{{ Carbon\Carbon::parse($komentar_komik->created_at)->formatLocalized('%A, %d %B %Y %H:%I:%S')}}</span></a></li>
                  <li><a href="#."><i class="fa fa-comments-o" aria-hidden="true"></i> <span>9 Comments</span></a></li>
                  <li><a href="#."><i class="fa fa-heart-o" aria-hidden="true"></i> like : <span>290</span></a></li>
                </ul>
              </div>
              <div class="blog_image">
                <div id="blog_slider" class="owl-carousel owl-theme">
                  <div class="item">
                    <img alt="image" src="{{asset('private/storage/app/public/gambar/'.$komentar_komik->gambar)}}" style="height: 400px; width: 850px;">
                  </div>
                </div>
              </div>
             
             <div class="bolg_description" >
              <p style="text-align: justify;">{{$komentar_komik->sinopsis}}</p>
              <div class="blog_line"></div>
              <div class="blog_button"><div class="dropdown">
                <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt" aria-hidden="true"></i> Share This
                </button>
                <ul class="dropdown-menu socialicons" aria-labelledby="dLabel">
                  <li><a href="#."><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#."><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#."><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                  <li><a href="#."><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
              
            </div>
            </div>

            @auth
            <form id="list_blog_contact" class="row p_t m_b_50" role="form" action="{{route('KomentarKomik.store')}}" enctype="multipart/form-data" method="POST">
              {!! csrf_field() !!}

                        <div class="col-md-12 heading_center heading text-center">
                          <h2>Tulis Kome<span>ntar Anda</span></h2>
                          <div class="center_title"><span><i class="fa fa-wrench"></i></span> </div>
                        </div>
                 
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="form-group">
                                <input class="form-control" placeholder="id" type="hidden" name="id" value="{{$komentar_komik->id}}">
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="nama" type="hidden" name="nama" value="{{$user->nama}}">
                            </div> 
                            <div class="form-group">
                                <input class="form-control" placeholder="Anime" type="hidden" name="dikomentar" value="{{$komentar_komik->judul}}">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12" >
                        <div class="form-group">
                            <input type="date" class="form-control" name="tgl_komen" placeholder="Masukan Tanggal Rilis">
                        </div>

                      <div class="form-group">
               				<select class="form-control" name="jenis_komentar">
                  				<option>Jenis Komentar</option>
                  				<option value="Manga">Manga</option>
                  				<option value="Komik">Komik</option>
                			</select>
                		</div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="height: 400px;">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Tulis Komentar" style="width: 845px; height: 250px;" name="komentar"></textarea>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Anime" type="hidden" name="gambar" value="{{$user->gambar}}">
                            </div>

                            <button class="cd-btn secondary" type="submit" >Berkomentar</button>
                        </div>          
            </form>
            @else 
              Silahkan Login dulu
            @endauth

          </div> 
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="social_blog text-center">
              <div class="sideblog_heading">
                <h4>follow.me</h4>
              </div>
              <ul class="blogside_links">
                <li><a href="#."><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#."><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#."><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="#."><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#."><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                <li><a href="#."><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>

            <div class="sideblog text-center">
              <div class="sideblog_heading text-left">
                <h3>search now</h3>
              </div>
              <div class="blogside_search">
                <form>
                  <input type="search" placeholder="Search" class="search" name="search">
                  <input type="button" value="Search Now" class="button" name="button">
                </form>
              </div>
            </div>

            <div class="social_blog text-center">
              <div class="sideblog_heading">
                <h4>blog.stats</h4>
              </div>

              <div class="progress">
                <label><i class="fa fa-bar-chart" aria-hidden="true"></i></label>
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                  17 Posts
                </div>
              </div>

              <div class="progress">
                <label><i class="fa fa-comment-o" aria-hidden="true"></i></label>
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                  10903 visits
                </div>
              </div>

              <div class="progress">
                <label><i class="fa fa-play-circle" aria-hidden="true"></i></label>
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%;">
                  49 media
                </div>
              </div>

              <div class="progress">
                <label><i class="fa fa-quote-left" aria-hidden="true"></i></label>
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                  3918 words
                </div>
              </div>

              <div class="progress">
                <label><i class="fa fa-bar-chart" aria-hidden="true"></i></label>
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                  12 comm.
                </div>
              </div>
            </div>

            <div class="sideblog">
              <div class="sideblog_heading">
                <h3>Quick Tags</h3>
              </div>
              <div class="blogside_tag">
                <ul>
                  <li><a href="#.">audio</a></li>
                  <li><a href="#.">map</a></li>
                  <li><a href="#.">container</a></li>
                </ul>
                <ul>
                  <li><a href="#.">container</a></li>
                  <li><a href="#.">map</a></li>
                  <li><a href="#.">audio</a></li>
                </ul>
                <ul>
                  <li><a href="#.">audio</a></li>
                  <li><a href="#.">map</a></li>
                  <li><a href="#.">container</a></li>
                </ul>
              </div>
            </div>

            <div class="sideblog text-center">
              <div class="sideblog_heading text-left">
                <h3>Login now</h3>
              </div>
              <div class="blogside_search">
                <form>
                  <input type="text" value="user name" class="search margin_b_30" name="button">
                  <input type="password" value="password" class="search" name="password">
                  <input type="button" value="Login" class="button" name="button">
                </form>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>
    <!-- /#BLog -->

    @stop
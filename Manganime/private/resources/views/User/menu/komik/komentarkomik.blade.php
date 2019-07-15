@extends('User.Template.TemplateAwal')

@section('usercontent')

<!-- Inner Banner -->
    <section class="page-banner parallaxie" style="background-image: url({{asset('public/Template/images/logo/header4.jpg') }} );">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2>Our Blog</h2>
            <div class="bread-crumb text-right"><a href="index.html">Home:</a> / Our Blog</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Blog -->
    <section id="blog" class="p_t_b blog_listsidebar">

        <div class="container">
        
            <div class="row">
            
                <div class="col-md-9">

                @foreach($komikkomentar as $komik)
            
                  <div class="row m_b_50">
            
                      <div class="blog_list_detail">
            
                        <div class="col-md-4 col-sm-12 col-xs-12">
            
                          <div class="blog_image" >
            
                            <div id="blog_slider">
                              <div class="item" >
                                <img src="{{asset('private/storage/app/public/gambar/'.$komik->gambar)}}" alt="image" style="height: 200px; width: 300px;">
                              </div>
                            </div>
            
                          </div>
                        </div>
            
                        <div class="col-md-8 col-sm-12 col-xs-12">
                              <div class="blog_heading">
                                <h2>{{$komik->nama}}</h2>
                                <ul>
                                  <li><i class="fa fa-caret-square-o-right" aria-hidden="true"><span>Judul : {{$komik->dikomentar}}</span></i></li>
                                  <li><i class="fa fa-clock-o" aria-hidden="true"></i> <span>{{ Carbon\Carbon::parse($komik->created_at)->formatLocalized('%A, %d %B %Y')}}</span></li>
                                  <li>{{ $komen_num }}<i class="fa fa-comments-o" aria-hidden="true"></i> <span>Comments</span></li>
                                </ul>
            
                              <p style="text-align: justify;">{{substr($komik->komentar, 0, 250)}} ...</p>
                        </div>

                      </div>
                      
                    </div>
                  
                  </div>
                  @endforeach
              
                {{ $komikkomentar->links() }}
                      
                </div>
                
                <div class="col-md-3 col-sm-3 col-xs-12">

                  <div class="sideblog">
                    <div class="sideblog_heading text-left">
                      <h3>About.Me</h3>
                    </div>
                    <div class="blogside_detail">
                      <img src="{{asset('private/storage/app/public/gambar/'.$userkko->gambar)}}" alt="image" class="img-responsive">
                      <br>
                      <p><h4>Nama : {{$userkko->nama}}</h4></p>
                      <p><h4>Status Sekolah : {{$userkko->Status_Sekolah}}</h4></p>
                      <p><h4>Email : {{$userkko->email}}</h4></p>
                    </div>
                  </div>

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

                  <div class="sideblog">
                    <div class="sideblog_heading">
                      <h3>popular.posts</h3>
                    </div>
                    @foreach($mangamenu as $manga)
                    <div class="blogside_post p_b_50">
                      <div class="single-effect">
                        <figure class="wpf-blog">
                          <a href="#"><img src="{{asset('private/storage/app/public/gambar/'.$manga->gambar)}}" alt="img"></a>
                          <figcaption class="view-caption">
                            <a href="{{asset('private/storage/app/public/gambar/'.$manga->gambar)}}" class="fancybox centered" data-fancybox="gallery"><span class="fa fa-search"></span></a>
                          </figcaption>
                        </figure>
                      </div>
                      <h4>{{$manga->judul}}</h4>
                      <p style="text-align: justify;">{{substr($manga->sinopsis, 0, 150)}} ...</p>
                      <span class="pull-right">{{$manga->created_at}}</span>
                    </div>
                    @endforeach

                </div>
            
            </div>
          
        </div>
          
    </section>
    <!-- /#BLog -->

   



    @stop
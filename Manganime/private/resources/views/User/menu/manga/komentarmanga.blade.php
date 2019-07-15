@extends('User.Template.TemplateAwal')

@section('usercontent')

<!-- Inner Banner -->
    <section class="page-banner parallaxie" style="background-image: url({{asset('public/Template/images/logo/header3.jpg') }} );">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2>Komentar Publik</h2>
            <div class="bread-crumb text-right"><a href="index.html">Home:</a> / Komentar Publik</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Blog -->
    <section id="blog" class="p_t_b blog_listsidebar">

        <div class="container">
        
            <div class="row">
            
                <div class="col-md-9">

                @foreach($mangakomentar as $manga)
            
                  <div class="row m_b_50">
            
                      <div class="blog_list_detail">
            
                        <div class="col-md-4 col-sm-12 col-xs-12">
            
                          <div class="blog_image" >
            
                            <div id="blog_slider">
                              <div class="item" >
                                <img src="{{asset('private/storage/app/public/gambar/'.$manga->gambar)}}" alt="image" style="height: 180px; width: 300px;">
                              </div>
                            </div>
            
                          </div>
                        </div>
            
                        <div class="col-md-8 col-sm-12 col-xs-12">
                              <div class="blog_heading">
                                <h2>{{$manga->nama}}</h2>
                                <ul>
                                  <li><i class="fa fa-caret-square-o-right" aria-hidden="true"></i> Judul :<span> {{$manga->dikomentar}}</span></li>
                                  <li><i class="fa fa-clock-o" aria-hidden="true"></i> <span>{{ Carbon\Carbon::parse($manga->created_at)->formatLocalized('%A, %d %B %Y ')}}</span></li>
                                  <li><i class="fa fa-comments-o" aria-hidden="true"></i> <span>{{$komen_num_ma}} Comments</span></li>
                                </ul>
            
                              <p style="text-align: justify;">{{substr($manga->komentar, 0, 250)}} ...</p>
                              
                        </div>

                      </div>
                      
                    </div>
                  
                  </div>
                  @endforeach
              
                {{ $mangakomentar->links() }}
                      
                </div>
                
                <div class="col-md-3 col-sm-3 col-xs-12">

                  <div class="sideblog">
                    <div class="sideblog_heading text-left">
                      <h3>About.Me</h3>
                    </div>
                    <div class="blogside_detail">
                      <img src="{{asset('private/storage/app/public/gambar/' .$user->gambar)}}" alt="image" class="img-responsive">
                      <br>
                      <p><h4>Nama : {{$user->nama}}</h4></p>
                      <p><h4>Status Sekolah : {{$user->Status_Sekolah}}</h4></p>
                      <p><h4>Email : {{$user->email}}</h4></p>
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
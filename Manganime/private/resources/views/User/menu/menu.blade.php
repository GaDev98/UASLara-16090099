        <div class="attr-nav">
            <ul>
              <li class="appintment-btn"><a href="{{route('login')}}" class="cd-btn secondary">Login</a></li>
              @auth
              <li class="appintment-btn"><a href="{{route('logout')}}" class="cd-btn secondary">Logout</a></li>
              @endauth
            </ul>
        </div>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="fa fa-bars"></i> </button>
            <a class="navbar-brand" href="Manganime"><img src="public/Template/images/logo/coba3.png" class="logo" alt=""> </a> </div>
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
              <li class="dropdown active"><a href="{{route('Manganime')}}">Home</a></li>
              <li class="dropdown megamenu-fw"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manga</a>
                <ul class="dropdown-menu megamenu-content" role="menu">
                  <li>
                    <div class="row">
                      <div class="col-menu col-md-2">
                        <h5 class="title">Manga</h5>
                        <div class="content">
                          <ul class="menu-col">
                            <li><a href="{{route('SemuaManga') }}">Semua Manga</a></li>
                            <li><a href="{{route ('MangaPopuler')}}">Manga Populer</a></li>
                            <li><a href="{{route('MangaTerbaik')}}">Skor Tertingi</a></li>
                            <li><a href="{{route ('GenreManga') }}">Genre Manga</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-menu col-md-2">
                        <h5 class="title">Komik</h5>
                        <div class="content">
                          <ul class="menu-col">
                            <li><a href="{{route('SemuaKomik')}}">Semua Komik</a></li>
                            <li><a href="{{route('KomikPopuler')}}">Komik Populer</a></li>
                            <li><a href="{{route('SkorTerbaik')}}">Skor Tertingi</a></li>
                            <li><a href="services-details.html">Genre Komik</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-menu col-md-8">
                        <div id="nav_slider" class="owl-carousel">
                          @foreach($mangamenu as $manga)
                          <div class="item" style="height: 260px;">
                            <div class="image"> <img src="{{asset('private/storage/app/public/gambar/'.$manga->gambar)}}" alt="image" alt="image" style="height: 150px; width: 500px;"> </div>
                            <h4><a href="{{route('Detail', $manga->id)}}">{{$manga->judul}}</a></h4>
                            <p>{{substr($manga->sinopsis, 0, 50)}} ... </p>
                          </div>
                          @endforeach

                          @foreach($komikmenu as $komik)
                          <div class="item" style="height: 260px;">
                            <div class="image"> <img src="{{asset('private/storage/app/public/gambar/'.$komik->gambar)}}" alt="image" alt="image" style="height: 150px; width: 500px;"> </div>
                            <h4><a href="{{route('Detail', $komik->id)}}">{{$komik->judul}}</a></h4>
                            <p>{{substr($komik->sinopsis, 0, 50)}} ... </p>
                          </div>
                          @endforeach
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Komentar Publik</a>
                <ul class="dropdown-menu">
                  <li><a href="{{route('SemuaKomentar')}}">Manga</a></li>
                  <li><a href="{{route('SemuaKomentarKomik')}}">Komik</a> </li>
                </ul>
              </li>
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact Us</a>
                <ul class="dropdown-menu">
                  <li><a href="{{route('Profil')}}">Profil</a></li>
                  <li><a href="{{route('Tutorial')}}">Tutorial</a> </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
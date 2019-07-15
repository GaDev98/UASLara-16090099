    <div class="container">
     <!-- Modal -->
      <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- konten modal-->
          <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div ><img src="{{asset('public/Template/images/logo/benner3.jpg')}}" alt="image" style="height: 150px; width: 800px;">
                <h1 class="modal-title" style="text-align: center;">M A N G A N I M E</h1></div>
                
            </div>
            <!-- body modal -->
            <div class="modal-body">
              <p style="color: black;">Selamat datang di Manganime.</p><br>
              <p style="color: black; text-align: justify;" >Silahkan Gunakan Website Ini Dengan Sebaik Mungkin, Hormati Komentar Orang Lain, dan Dilarang Menyebar Kekerasan, dan Komentar yang mengandung HENTAII..!!!</p>
            </div>
            <!-- footer modal -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup Pemberitahuan</button>
            </div>
            </div>
        </div>
      </div>
    </div>

 
 
 <!-- Inner Banner -->
      <div class="container">
        <div class="row">
            <div class="bread-crumb text-right" style="color: white;"> Manga Terbaru</div>
        </div>
      </div>
    <!-- /# Inner Banner --> 

<section id="news-section" class="p_t_b news_3">
        <div class="container">
            <div class="row">
                @foreach($jumlahawal as $data_user)
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="latest_page_box" >
                        <span class="news_date">
                          <i class="fa fa-calendar" aria-hidden="true"></i>{{ Carbon\Carbon::parse($data_user->created_at)->formatLocalized('%A, %d %B %Y %H:%I:%S')}}
                        </span>
                        <div class="news_image">
                            <img alt="image" src="{{asset('private/storage/app/public/gambar/'.$data_user->gambar)}}" style="height: 200px;">
                        </div>
                        <div class="news_padding"  style="height: 350px">
                            <p><span>By</span> {{$data_user->pengarang}}</p>
                            <p class="pull-right"><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> No Comments</a></p>
                            <h3>{{$data_user->judul}}</h3>
                            <p class="m-b-30" style="text-align: justify;">{{substr($data_user->sinopsis, 0, 250)}} ...</p>
                            <a class="cd-btn secondary" href="{{route('Detail', $data_user->id)}}">Read More</a>
                        </div>
                    </div>
                  </div>
                    @endforeach
                </div>
                {{ $jumlahawal->links() }}
              </div>
        </section>

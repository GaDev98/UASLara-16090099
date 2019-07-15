@extends('User.Template.TemplateAwal')

@section('usercontent')

<section id="Services" class="p_t_b">
        <div class="container">
                <div class="col-md-12 text-center heading_center heading">
                    <h2>Semua <span>Manga</span></h2>
                </div>

            <div class="row">
              @foreach($urutanawalmanga as $semua)
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <div class="team-member text-center">
                            <div class="member-thumb"> <img src="{{asset('private/storage/app/public/gambar/'.$semua->gambar)}}" alt="image" class="img-responsive">
                                <div class="overlay2">
                                    <div class="overlay_inner">
                                        <h3>{{$semua->judul}}</h3>
                                        <p style="text-align: justify;">{{substr($semua->sinopsis, 0, 100)}} ...</p>
                                        <a class="btn-icon" href="{{route('Detail', $semua->id)}}"><i class="fa fa-share-square-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="img-bg">{{$semua->genre}}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>
    </section>

    @stop
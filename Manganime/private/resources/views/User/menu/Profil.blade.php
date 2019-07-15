@extends('User.Template.TemplateAwal')

@section('usercontent')

<!-- Inner Banner -->
    <section class="page-banner parallaxie" style="background-image: url('public/Template/images/logo/benner1.png');">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center" >
            <h2 style="color: black;">PROFIL</h2>
          </div>
        </div>
      </div>
    </section>
    <!-- /# Inner Banner --> 
    
    <!-- Contact Us -->
    <section id="contact-us" class="p_b">

        <div class="container">

            <div class="row">

                <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12" >

                    <div class="row p_t_50">

                        <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                            <div class="address-box">
                                <p><i class="fa fa-phone" aria-hidden="true"></i>
                                </p>
                                <h4>Mobile/Phone</h4>
                                <p>+6295 - 3616 - 38606</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                            <div class="address-box">
                                <p><i class="fa fa-envelope" aria-hidden="true"></i>
                                </p>
                                <h4>E-Mail</h4>
                                <p><a href="https://mail.google.com/mail/u/0/?tab=wm#inbox?compose=CllgCJqbQRbQjNSKHPHglCMDKVzKHvPZggpGrFnVVQXXcvtMVwvCHkmFxnHZlcrsNffGBlZfdgB">isekaigame98@gmail.com</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                            <div class="address-box">
                                <p><i class="fa fa-globe" aria-hidden="true"></i>
                                </p>
                                <h4>Website</h4>
                                <p><a href="{{route('Manganime')}}">MangaNime.com</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                            <div class="address-box">
                                <p><i class="fa fa-user" aria-hidden="true"></i>
                                </p>
                                <h4>Developer</h4>
                                <p>M. Nazil Abdul Ghofir</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12 text-center" style="margin-top:50px; margin-left: 400px;">
                            <div class="address-box">
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                                </p>
                                <h4>Address</h4>
                                <p>Jl Delima Rt. 03 Rw 02,
                                    <br>Desa Dampyak, Kec. Kramat, Kab.Tegal</p>
                            </div>
                        </div>

                    </div>

                    <div class="row p_t_50">

                        <div class="col-md-12">

                          <div class="heading_left heading">
                              <h2>Get <span>Directions</span></h2>
                              <div class="center_title"><span><i class="fa fa-wrench"></i></span> </div>
                          </div>

                          <div id="cd-google-map">
                              <div id="google-container"></div>
                              <div id="cd-zoom-in"></div>
                              <div id="cd-zoom-out"></div>
                          </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- /#Contact Us -->

    @stop
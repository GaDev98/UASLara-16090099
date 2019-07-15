@extends('User.Template.TemplateAwal')

@section('usercontent')

<!-- Inner Banner -->
    <section class="page-banner parallaxie">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2>Our Blog</h2>
            <div class="bread-crumb text-right"><a href="index.html">Home:</a> / Our Blog</div>
          </div>
        </div>
      </div>
    </section>
    <!-- /# Inner Banner --> 
    
    <!-- Blog -->
    <section id="blog" class="p_t_b">
      @foreach($Detail_manga as $detail)
      <div class="container">
        <div class="row">
          <div class="col-md-9 col-sm-9 col-xs-12">

            <div class="blog_detail">
              <div class="blog_heading">
                <h2>{{$detail->judul}}</h2>
                <ul>
                  <li><a href="#."><i class="fa fa-user" aria-hidden="true"></i> by :<span> {{$detail->pengarang}}</span></a></li>
                  <li><a href="#."><i class="fa fa-clock-o" aria-hidden="true"></i> <span>{{ Carbon\Carbon::parse($detail->created_at)->formatLocalized('%A, %d %B %Y %H:%I:%S')}}</span></a></li>
                  <li><a href="#."><i class="fa fa-comments-o" aria-hidden="true"></i> <span>9 Comments</span></a></li>
                  <li><a href="#."><i class="fa fa-heart-o" aria-hidden="true"></i> like : <span>290</span></a></li>
                </ul>
              </div>
              <div class="blog_image">
                <div id="blog_slider" class="owl-carousel owl-theme">
                  <div class="item">
                    <img alt="image" src="{{asset('private/storage/app/public/gambar/'.$detail->gambar)}}" width="80">
                  </div>
                </div>
              </div>
             
             <div class="bolg_description" >
              <p style="text-align: justify;">{{$detail->sinopsis}}</p>
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

      


            <form id="list_blog_contact" class="row p_t m_b_50">

                        <div class="col-md-12 heading_center heading text-center">
                          <h2>Leave <span>a Reply</span></h2>
                          <div class="center_title"><span><i class="fa fa-wrench"></i></span> </div>
                        </div>
                 
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Phone" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" type="email">
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Message"></textarea>
                            </div>
                        </div>
                        
                        <div class="list_blog_contact text-center m_b_30">
                            <a href="#." class="cd-btn secondary">Post Comment</a>
                        </div>
                        
            </form>

        <div class="card">
        <div class="card-body">
          <h3 class="heading">User Rating</h3>
          <div class"row">
          <div class="col-md-6">
              <star-rating v-model="rating" :increment="0.5" text-class="custom-text"></star-rating>
              </div>
              <div class="col-md-6"></div>
              <button @click="setRating" class="btn btn-primary">Publish</button>
          </div>
          <h3 class="heading">Reviews</h3>
          <div class="review-rating">
              <div class="left-review">
                  <div class="review-title"></div>
                  <div class="review-star">
                      <star-rating :inline="true" :read-only="true" :show-rating="false" v-model="totalrate" :increment="0.1" :star-size="20" active-color="#000000"></star-rating>
                  </div>
                  <div class="review-people"><i class="fa fa-user"></i>  total</div>
              </div>
              <div class="right-review">
                  <div class="row-bar">
                      <div class="left-bar">5</div>
                      <div class="right-bar">
                          <div class="bar-container">
                              <div class="bar-5" style="width: 0%;"></div>
                          </div>
                      </div>
                  </div>
                  <div class="row-bar">
                      <div class="left-bar">4</div>
                      <div class="right-bar">
                          <div class="bar-container">
                              <div class="bar-4" style="width: 0%;"></div>
                          </div>
                      </div>
                  </div>
                  <div class="row-bar">
                      <div class="left-bar">3</div>
                      <div class="right-bar">
                          <div class="bar-container">
                              <div class="bar-3" style="width: 0%;"></div>
                          </div>
                      </div>
                  </div>
                  <div class="row-bar">
                      <div class="left-bar">2</div>
                      <div class="right-bar">
                          <div class="bar-container">
                              <div class="bar-2" style="width: 0%;"></div>
                          </div>
                      </div>
                  </div>
                  <div class="row-bar">
                      <div class="left-bar">1</div>
                      <div class="right-bar">
                          <div class="bar-container">
                              <div class="bar-1" style="width: 0%;"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>

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
      @endforeach
    </section>
    <!-- /#BLog -->

    @stop

    <style>
/* Star Rating */
* {
    box-sizing: border-box;
}
.fa {
    font-size: 25px;
}
.left-bar {
    float: left;
    width: 5%;
    margin-top:10px;
}
.right-bar {
    margin-top:10px;
    float: left;
    width: 95%;
}
.row-bar:after {
    content: "";
    display: table;
    clear: both;
}
.review-rating:after {
    content: "";
    display: table;
    clear: both;
}
.left-review {
    float: left;
    width: 30%;
    margin-top:10px;
    text-align: center;
}
.right-review {
    float: left;
    width: 70%;
    margin-top:10px;
}
.review-title{
    font-size: 56pt;
}
.review-star{
    margin: 0 0 10px 0;
}
.review-people .fa{
    font-size: 11pt;
}
.bar-container {
    width: 100%;
    background-color: #f1f1f1;
    text-align: center;
    color: white;
}
.bar-5 {height: 18px; background-color: #57bb8a;}
.bar-4 {height: 18px; background-color: #9ace6a;}
.bar-3 {height: 18px; background-color: #ffcf02;}
.bar-2 {height: 18px; background-color: #ff9f02;}
.bar-1 {height: 18px; background-color: #ff6f31;}
.star-rating{
    text-align: center;
    margin:auto;
    width: 45%;
}
.star-rating .fa:hover{
    color: orange;
}
.heading {
    font-size: 25px;
    color: #999;
    border-bottom: 2px solid #eee;
}
@media (max-width: 400px) {
    .left-bar, .right-bar, .left-review, .right-review {
        width: 100%;
    }
}
.custom-text {
    font-weight: bold;
    font-size: 1.9em;
    border: 1px solid #cfcfcf;
    padding-left: 10px;
    padding-right: 10px;
    border-radius: 5px;
    color: #999;
    background: #fff;
}
</style>

<script>
export default{
  data(){
    return {
      products: [],
      product: {
        id:'',
        name:'',
        description:'',
        price:'',
        amount:'',
        image:''
      },
      carts: [],
      cart: {
        id: '',
        name: '',
        price: '',
        amount: ''
      },
      badge: '0',
      quantity: 1,
      totalprice: '0',
      rating: 0
    }
  },
  created(){
    this.viewProduct();
    this.viewOne();
    this.localStorageProduct();
    this.getRating();
  },
  methods: {
    viewProduct(){
      fetch('/api/rating/new',{

      }
      .then(res => res.json())
      .then(res => {
        this.products = res.data;
      })
      .catch(err => console.log(err));
    },
    viewOne(){
      var pathArray = location.pathname.split('/');
      var uid = pathArray[2];
      fetch(`/api/products/${uid}`)
      .then(res => res.json())
      .then(res => {
        this.product.id = res.data.id;
        this.product.name = res.data.name;
        this.product.description = res.data.description;
        this.product.price = res.data.price;
        this.product.amount = res.data.amount;
        this.product.image = res.data.image;
      })
      .catch(err => console.log(err));
    },
    localStorageProduct(){
      if(localStorage.getItem('carts')){
        this.carts = JSON.parse(localStorage.getItem('carts'));
        this.badge = this.carts.length;
        this.totalprice = this.carts.reduce((total, item) => {
            return total + item.amount * item.price;
        }, 0);
      }
    },
    cartProduct(pro){
      this.cart.id = pro.id;
      this.cart.name = pro.name;
      this.cart.price = pro.price;
      this.cart.amount = this.quantity;
      this.carts.push(this.cart);
      this.cart = {};
      this.storeCartProduct();
    },
    removeCartProduct(pro){
      this.carts.splice(pro, 1);
      this.storeCartProduct();
    },
    storeCartProduct(){
      let parsed = JSON.stringify(this.carts);
      localStorage.setItem('carts', parsed);
      this.localStorageProduct();
    },
    viewLink(mylink){
      location.href = '/detail/'+mylink;
    },
    setRating() {
      var pathArray = location.pathname.split('/');
      var uid = pathArray[2];
      fetch('/api/rating/new', {
        method: 'post',
        body: JSON.stringify({ product:uid, user:'5', rating:this.rating }),
        headers: {
          'Content-Type': 'application/json'
        }
      }).then(res => res.json())
      .then(data => {
        swal('Thank you!', 'Terima kasih telah memberi rating', 'success');
      }).catch(err => {
        swal('Failed', 'Anda gagal memberikan pernilaian', 'error');
      });
    },
    getRating(){
      var pathArray = location.pathname.split('/');
      var uid = pathArray[2];
      fetch(`/api/rating/${uid}`)
      .then(res => res.json())
      .then(res => {
        var mydata = res.data;
        this.totaluser = mydata.length;
        var sum = 0;
        for(var i = 0; i < mydata.length; i++){
          sum += parseFloat(mydata[i]['rating']);
        }
        var avg = sum/mydata.length
        this.totalrate = parseFloat(avg.toFixed(1));
        var bar1 = 0;
        var bar2 = 0;
        var bar3 = 0;
        var bar4 = 0;
        var bar5 = 0;
        for(var j = 0; j < mydata.length; j++){
          if(parseInt(mydata[j]['rating']) == '1'){
            bar1 += 1
          }
          if(parseInt(mydata[j]['rating']) == '2'){
            bar2 += 1
          }
          if(parseInt(mydata[j]['rating']) == '3'){
            bar3 += 1
          }
          if(parseInt(mydata[j]['rating']) == '4'){
            bar4 += 1
          }
          if(parseInt(mydata[j]['rating']) == '5'){
            bar5 += 1
          }
        }
        $('.bar-5').css('width', bar5+'%');
        $('.bar-4').css('width', bar4+'%');
        $('.bar-3').css('width', bar3+'%');
        $('.bar-2').css('width', bar2+'%');
        $('.bar-1').css('width', bar1+'%');
      })
      .catch(err => {
        console.log(err);
      });
    },
    showCurrentRating: function(rating) {
      this.currentRating = (rating === 0) ? this.currentSelectedRating : "Click to select " + rating + " stars"
    },
    setCurrentSelectedRating: function(rating) {
      this.currentSelectedRating = "You have Selected: " + rating + " stars";
    }
  }
}
</script>
@extends('frontEnd.master')
@section('title')
    || Home
@endsection
@section('mainBody')
<section id="home-section" class="col-sm-12 text-light">
    <div class="overlay">
        <div class="type-wrap text-center">
            <h1 class="text-light" id="typed3"></h1>
        </div>
        <div class="row">
            <div class="col-sm-10">
                <div class="myCarousel owl-carousel owl-theme">
                    @foreach($allSlider as $slider)
                    <div class="card">
                        <div class="card-header">
                            {{$slider->title}}
                        </div>
                        <div class="card-body" >
                             <img src="{{url($slider->image)}}" style="width:80px; height:80px" class="img-rounded">
                            <p>{{$slider->description}}</p>
                        </div>
                        <div class="card-footer">
                            visite shInfo.com
                        </div>
                    </div>
                   @endforeach
                </div>
            </div>
            <div class="col-sm-2 text_right animated bounceInLeft thumbnail" data-wow-duration="2s">
                <p>
                    Bangladesh was once, notoriously, dismissed as a “basket case” 
                    by the US statesman Henry Kissinger. The low-lying terrain has 
                    always been vulnerable to the sea: in 1970, a storm surge propelled 
                    by a cyclone drove 10 metres of water over its lowlands, claiming an 

                </p>
            </div>
        </div>
        <div class="social_link py-3">
            <h2><i class="fa fa-phone wow  bounceInRight " data-wow-duration="2s"> </i></h2>
            <h2><i class="fab fa-twitter wow animated bounceInRight " data-wow-duration="4s">  </i></h2>
            <h2><i class="fab fa-linkedin wow animated bounceInRight " data-wow-duration="3s">  </i></h2>
            <h2><i class="fab fa-skype wow animated bounceInRight " data-wow-duration="2s"></i></h2></a>
            <h2><i class="fab fa-facebook wow animated bounceInRight " data-wow-duration="5s"></i></h2>
        </div>
    </div>
</section>
<section id="about-section" class="col-sm-12 py-5 wow  bounceInUp " data-wow-duration="2s"">
   @foreach($allInfo as $info)
    <div class="row">
        <div class="col-md-6">
            <img src="{{url($info->file)}}" width="240" height="300">
        </div>
        <div class="col-md-6">
            <table class="table table-hover">
                <tr>
                    <th>Name :</th>
                    <td>{{$info->fname}} {{$info->lname}}</td>
                </tr>
                <tr>
                    <th>E-mail :</th>
                    <td>{{$info->email}}</td>
                </tr>
                <tr>
                    <th>Village :</th>
                    <td>{{$info->village}}</td>
                </tr>
                <tr>
                    <th>Post Code :</th>
                    <td>{{$info->pcode}}</td>
                </tr>
                <tr>
                    <th>District :</th>
                    <td>{{$info->district}}</td>
                </tr>
                <tr>
                    <th>Date of birth :</th>
                    <td>{{$info->birthday}}</td>
                </tr>
                <tr>
                    <th>Designation  :</th>
                    <td>{{$info->designation}}</td>                                                            
                </tr>
                <tr>
                    <th>Objective :</th>
                    <td>{{$info->objective}}</td>                                                                    
                </tr>
            </table>
        </div>
    </div>
   @endforeach
</section>

<!--accademic-section============-->
<section id="accademic"  class=" text-light acc wow  bounceInUp " data-wow-duration="2s"">
    <div class="acskill p-5">
        <div class="container">
            <h2 class="text-center mb-4">ACCADEMIC QUALLIFICATION.</h2>
            <div class="row">
                <div class="col-md-6 p-4">
                    <h3>SSc:</h3>
                    <h4>Baharpur High School.</h4>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, cum.</p>
                    <h3>Diploma In Engineering:</h3>
                    <h4>Shariatpur Polytechnic Institute.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, minus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias,Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias,</p>

                    <h3>BSc In Computer Science:</h3>
                    <h4>Northern University Bangladesh.</h4>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere esse tempore repellendus, temporibus quo possimus quam vero impedit, quia ab quaerat et eum modi iure.</p>
                </div>
                <div class="col-md-6 p-4">
                    <h3>Web Desig and Development:</h3>
                    <h4>US Software Ltd.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius nostrum, quidem non accusamus aliquam voluptate ut rem fugit impedit consequuntur?</p>

                    <h3>Web Desig and Development:</h3>
                    <h4>it-q solutions Ltd.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius nostrum, quidem non accusamus aliquam voluptate ut rem fugit impedit consequuntur?</p>
                </div>
            </div>
            <div class="button">
                <button class="btn btn-info">Download Resume</button>
            </div>
        </div>
    </div>
</section>
<!--Testmonial------>
<section class="wow bounceInUp" data-wow-duration="3s">
    <div class="carousel_bg py-5">
        <div class="container">
            <h2>Testimonials</h2>
            <div class="owl-carousel owl-theme">
                <div class="item-box">
                    <div class="img-box">
                        <div class="item d-inline-block">
                            <img src="{{asset('public/frontEnd/')}}/img/reimage_8.png" alt="">
                        </div>
                        <div class="carousel_title d-inline-block">
                            <h5>sh shumon</h5>
                            <p class="text-muted">Designer</p>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi reprehenderit quam quidem unde dignissimos? Deleniti fuga, facilis similique eos at!</p>
                </div>
                <div class="item-box">
                    <div class="img-box">
                        <div class="item d-inline-block">
                            <img src="{{asset('public/frontEnd/')}}/img/reimage_8.png" alt="">
                        </div>
                        <div class="carousel_title d-inline-block">
                            <h5>sh shumon</h5>
                            <p class="text-muted">Designer</p>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi reprehenderit quam quidem unde dignissimos? Deleniti fuga, facilis similique eos at!</p>
                </div>
                <div class="item-box">
                    <div class="img-box">
                        <div class="item d-inline-block">
                            <img src="{{asset('public/frontEnd/')}}/img/reimage_8.png" alt="">
                        </div>
                        <div class="carousel_title d-inline-block">
                            <h5>sh shumon</h5>
                            <p class="text-muted">Designer</p>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi reprehenderit quam quidem unde dignissimos? Deleniti fuga, facilis similique eos at!</p>
                </div>
                <div class="item-box">
                    <div class="img-box">
                        <div class="item d-inline-block">
                            <img src="{{asset('public/frontEnd/')}}/img/reimage_8.png" alt="">
                        </div>
                        <div class="carousel_title d-inline-block">
                            <h5>sh shumon</h5>
                            <p class="text-muted">Designer</p>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Commodi reprehenderit quam quidem unde dignissimos? Deleniti fuga, facilis similique eos at!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!---Protfolio section----->
<section id="protfolio" class="py-5 wow  bounceInUp " data-wow-duration="2s"">
    <div class="container">
        <div class="col-sm-12">
            <h2 class="text-center display-3">Our Protfolio</h2>
            <div class="btn-group">
                <button class="btn btn-info" data-filter=".html">HTML</button>
                <button class="btn btn-primary" data-filter=".css">CSS</button>
                <button class="btn btn-danger" data-filter=".php">PHP</button>
                <button class="btn btn-warning" data-filter=".boot">Bootstrap</button>
                <button class="btn btn-info" data-filter=".jav">Javascript</button>
            </div>
        </div>
        <div class="row mixup wow  bounceInUp " data-wow-duration="2s"">
            <figure class="mix imghvr-zoom-out html">
                <img src="{{asset('public/frontEnd/')}}/img/images (9).jpg" class="" width="300" height="210">
                <figcaption>
                    <p class="lead mt-5t">Bangladesh National Flag.</p>
                </figcaption>
            </figure>
            <figure class="mix imghvr-zoom-out php">
                <img src="{{asset('public/frontEnd/')}}/img/images (6).jpg" class="" width="300" height="210">
                <figcaption>
                    <p class="lead mt-5">Bangladesh Vision 2018.</p>
                </figcaption>
            </figure>
            <figure class="mix imghvr-zoom-out boot">
                <img src="{{asset('public/frontEnd/')}}/img/images (7).jpg" class="" width="300" height="210">
                <figcaption>
                   <p class="lead mt-5">Bangladesh Map.</p>
                </figcaption>
            </figure>
            <figure class="mix imghvr-zoom-out jav">
                <img src="{{asset('public/frontEnd/')}}/img/images (10).jpg" class="" width="300" height="210">
                <figcaption>
                  <p class="lead mt-5">Bangladesh Womens Soldier.</p>
                </figcaption>
            </figure>
            <figure class="mix imghvr-zoom-out css">
                <img src="{{asset('public/frontEnd/')}}/img/nobg.jpg" class="" width="300" height="210">
                <figcaption>
                    <p class="lead mt-5">Just Amazing Design.</p>
                </figcaption>
            </figure>
            <figure class="mix imghvr-zoom-out boot">
                <img src="{{asset('public/frontEnd/')}}/img/images (4).jpg" class="" width="300" height="210">
                <figcaption>
                    <p class="lead mt-5">Bangladesh Postal Department.</p>
                </figcaption>
            </figure>
            <figure class="mix imghvr-zoom-out php">
                <img src="{{asset('public/frontEnd/')}}/img/images (3).jpg" class="" width="300" height="210">
                <figcaption>
                   <p class="lead mt-5">awesome Monument.</p>
                </figcaption>
            </figure>
            <figure class="mix imghvr-zoom-out jav">
                <img src="{{asset('public/frontEnd/')}}/img/images (2).jpg" class="" width="300" height="210">
                <figcaption>
                    <p class="lead mt-5">Awesome night moment of town.</p>
                </figcaption>
            </figure>
            <figure class="mix imghvr-zoom-out php">
                <img src="{{asset('public/frontEnd/')}}/img/images (5).jpg" class="" width="300" height="210">
                <figcaption>
                    <p class="lead mt-5">Bangladesh ADB.</p>
                </figcaption>
            </figure>
            <figure class="mix imghvr-zoom-out html">
                <img src="{{asset('public/frontEnd/')}}/img/images.jpg" class="" width="300" height="210">
                <figcaption>
                    <p class="lead mt-5">Inside a room.</p>
                </figcaption>
            </figure>
            <figure class="mix imghvr-zoom-out css">
                <img src="{{asset('public/frontEnd/')}}/img/images (11).jpg" class="" width="300" height="210">
                <figcaption>
                    <p class="lead mt-5">Just think of a good.</p>
                </figcaption>
            </figure>
            <figure class="mix imghvr-zoom-out html">
                <img src="{{asset('public/frontEnd/')}}/img/images (1).jpg" class="" width="300" height="210">
                <figcaption>
                    <p class="lead mt-5">End of your destination.</p>
                </figcaption>
            </figure>
        </div>
    </div>
</section>
@endsection
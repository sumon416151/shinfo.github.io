<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/')}}/img/m.png">
        <title>@yield('title')</title>
	<link rel="stylesheet" href="{{asset('public/frontEnd/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontEnd/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontEnd/css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontEnd/css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontEnd/css/imagehover.min.css')}}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('public/frontEnd/css/style.css')}}">
</head>
    @include('frontEnd.includes.menu')
  <!--End Navbar-======-->
  
  <!--Main Body=========--->
  @yield('mainBody')
  <!--End Main Body=========-------->
  <!---Footer============---------->
  @include('frontEnd.includes.footer')
  <!---End Footer==========------------>
  
  <script src="{{asset('public/frontEnd/js/jquery.js')}}"></script>
  <script src="{{asset('public/frontEnd/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('public/frontEnd/js/typed.js')}}"></script>
  <script src="{{asset('public/frontEnd/js/mixitup.min.js')}}"></script>
  <script src="{{asset('public/frontEnd/js/wow.min.js')}}"></script>
  <script src="{{asset('public/frontEnd/js/owl.carousel.min.js')}}"></script>
  <script>

  //mixitup activation code
    var mixer = mixitup('.mixup');
    //wow.js activation code
  </script>
   <script>
     new WOW().init();

  </script>
    <script>
  $('.myCarousel').owlCarousel({
    margin:10,
    loop:true,
    autoplay:true,
    nav:false,
    dots:false,

    responsive:{
      0:{
        items:1
      },
      600:{
        items:1
      },
      1000:{
        items:2
      }
    }
  });
   $('.owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  dots:false,
  autoplay:false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:2
      }
  }
});
  </script>
    <script>
var typed3 = new Typed('#typed3', {
    strings: ['HELLO, I am Sh Shumon||', 'I am a designer||', 'I am a developer||'],
    typeSpeed: 50,
    backSpeed: 50,
    smartBackspace: true, // this is a default
    loop: true
  });
  </script>
  
</body>
</html>
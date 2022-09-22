
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
//Replace the images with the client logos of your customers

<div class="container">
  <section class="customer-logos slider">
    <div class="slide"><img src="{{asset('images/logos/3.png')}}" alt=""></div>
    <div class="slide"><img src="{{asset('images/logos/4.png')}}" alt=""></div>
    <div class="slide"><img src="{{asset('images/logos/2.png')}}" alt=""></div>
    <div class="slide"><img src="{{asset('images/logos/5.png')}}" alt=""></div>
    <div class="slide"><img src="{{asset('images/logos/6.png')}}" alt=""></div>
    <div class="slide"><img src="{{asset('images/logos/7.png')}}" alt=""></div>
    <div class="slide"><img src="{{asset('images/logos/1.webp')}}" alt=""></div>

  </section>
</div>
<script>
    $(document).ready(function(){
  $('.customer-logos').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 4
      }
    }, {
      breakpoint: 520,
      settings: {
        slidesToShow: 3
      }
    }]
  });
});
</script>
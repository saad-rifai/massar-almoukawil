<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="NERYOU">

    <title>Massar Al Moukawil -
        @if(View::hasSection('title'))
        @yield('title')
        @else
        Cartographie de l'écosystème entrepreneurial et mécanismes d'accompagnement de la région TTA
        @endif
    </title>
    <meta name="description" content="@yield('description')
    
    @if(View::hasSection('description'))
    @yield('description')
@else
« MASSAR AL MOKAWIL » est une plateforme inclusive et innovante ouverte gratuitement à tous les
entrepreneurs de la région Tanger – Tétouan – Al Hoceima. Elle compte plusieurs fonctionnalités :
- La cartographie de l’écosystème entrepreneurial : décrivant le circuit complet par lequel passe un entrepreneur.

- Les mécanismes d’accompagnement entrepreneurial : génériques, spécifiques et guides pratiques de situations.

- Un accompagnement sur mesure par plusieurs outils sur les volets : commercial, managérial, formation, réseautage et
digital.

- Une foire aux questions permettant d’ouvrir un espace d’échange entre les entrepreneurs.
@endif
    ">

    <link rel="stylesheet" href="{{asset('style_2.css')}}">
    <link rel="stylesheet" href="{{asset('slide-style.css')}}">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-xVVam1KS4+Qt2OrFa+VdRUoXygyKIuNWUUUBZYv+n27STsJ7oDOHJgfF0bNKLMJF" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-D96FCPRF87"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-D96FCPRF87');
    </script>
    <script>

    </script>
      <meta name="keywords" content="Massar Al Moukawil, massar al mokawil, neryou, desky, Cartographie de l'écosystème entrepreneurial et mécanismes d'accompagnement de la région TTA, dar al moukawil, tamwilcom, Accompagnement sur création
, Accompagnement des strart-up, tanger">

</head>
<div class="rotate-rquest-bg">
    <div class="content-rotate text-center position-absolute top-50 start-50 translate-middle"
        style="max-width: 80%;width: 100%;">
        <div class="logo mb-3">
            <img src="{{asset('images/logo.png')}}" alt="">
        </div>
        <div class="text-rotate">
            <p>pour une meilleure expérience, veuillez faire pivoter votre appareil </p>
        </div>
        <div class="logo mb-3">
            <img src="{{asset('images/rotate-your-screen-animation-_black_.gif')}}" alt="">
        </div>

    </div>
</div>

<div class="loading-page">
    <img class="image_loading" src="{{asset('images/logo.png')}}" alt="Massar Al Moukawil">
</div>

<script>
    $(window).on('load', function(){
    $(".loading-page").css("opacity", "0");
    $(".loading-page").css("display", "none");
});

</script>
<div class="motif-box">
    <img class="motif-accueil-left" src="{{asset('images/Motif.png')}}" alt="">
    <img class="motif-accueil-right" src="{{asset('images/Motif.png')}}" alt="">
</div>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Massar Al Moukawil - @yield('title') </title>
    <meta name="description" content="@yield('description')">

    <link rel="stylesheet" href="{{asset('ar_style.css')}}">
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
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">


    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>
<div class="rotate-rquest-bg">
    <div class="content-rotate text-center position-absolute top-50 start-50 translate-middle" style="max-width: 80%;width: 100%;">
        <div class="logo mb-3">
            <img src="{{asset('images/logo.png')}}" alt="">
        </div>
        <div class="text-rotate">
            <p>للحصول على تجربة أفضل ، يرجى تدوير جهازك </p>
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
<style>
    *{
        font-family: 'Cairo', sans-serif !important;

    }
    .fa, .fas {
    font-family: "Font Awesome 5 Pro" !important;
    font-weight: 900;
}
</style>
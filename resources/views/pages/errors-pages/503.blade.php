@section('title', 'Cette page est en cours de construction')
@include('assets.head')
<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">
        <img src="{{asset('images/icons/503.svg')}}" class="body_icon" alt="503">
        <h1 class="body_icon_title">Cette page est en cours de construction !</h1>
        <p class="body_icon_description">Cette page est en cours de construction , merci de revenir plus tard</p>
        <div class="text-center ">
            <a href="{{asset('/')}}"><button class="btn btn-primary mt-3">retour à l'accueil</button></a>

        </div>
            </div>
        </div>
        <br>

        <hr>
        @include('assets.footer')
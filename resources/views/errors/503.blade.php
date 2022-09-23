@section('title', 'la plateforme est en maintenance')
@include('assets.head')
<body>
    <div class="container-lg">
        <div class="body_card mt-5 mb-5">
            <div class="container-body">
        <img src="{{asset('images/icons/503.svg')}}" class="body_icon" alt="503">
        <h1 class="body_icon_title">Oups, la plateforme est en maintenance</h1>
        <p class="body_icon_description">Nos ingénieurs effectuent la maintenance de la plateforme, merci de revenir bientôt</p>
     
            </div>
        </div>
        <br>

        <hr>
        @include('assets.footer')
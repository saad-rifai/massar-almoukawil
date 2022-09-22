@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>
                        ZAE Fnideq
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Crée en 2022, la Zone d’Activités Economique Intégrée de Fnideq s’inscrit dans le cadre du
                        programme de
                        développement économique de la préfecture de M’diq Fnideq et la province de Tétouan et s’étale
                        sur une superficie
                        totale de 98 Ha avec une 1ère tranche de 10 Ha.

                    </p>
                </div>
                







                <br>
                <br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('/zone-ind-ec/zone-Martil'))}}">
                    <button class="previous_btn">Zone Martil</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/zone-ind-ec/zone-KsarLabjir'))}}">
                        <button class="next_btn">Zone Ksar Labjir</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
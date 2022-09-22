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
                        Organisation Professionnelle des
                        Comptables Agréés


                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Selon le premier article de la loi n° 127.12, le comptable agrée est celui qui fait profession
                        habituelle de tenir,
                        centraliser, ouvrir, arrêter, suivre et redresser les comptabilités des entreprises et
                        organismes qui font appel à des
                        services et auxquels il n’est pas lié par un contrat de travail.


                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <ul>
                        <li>Analyse et organisation des systèmes comptables. </li>
                        <li>Conseils</li>
                        <li>Entreprendre des travaux d’ordre juridique, fiscal, économique, financier et organisationnel
                            se rapportant à la vie des
                            entreprises et organismes.</li>

                    </ul>

                </div>
                

                
                
                <br>
                <br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('/reso-ordre/comptable'))}}">
                    <button class="previous_btn">ORDRE DES EXPERTS 
COMPTABLES</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/reso-ordre/avocat'))}}">
                        <button class="next_btn">Ordre des Avocats de Tanger</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
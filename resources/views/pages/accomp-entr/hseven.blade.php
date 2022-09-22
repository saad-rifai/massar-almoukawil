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
                    HSEVEN

                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    HSeven est le plus grand accélérateur de startups en Afrique. H.Seven est le hub pour les Africains par cœur qui veulent 
changer le monde. H.Seven est une plateforme africaine pour les startups, les entreprises et les investisseurs.

                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <p class="section_normale_text">Quelle que soit l'étape de démarrage, HSEVEN a un programme sur mesure pour la croissance du projet. </p>

                    <ul class="section_normale_list">
                        <li>Rise-Up : un programme d'incubation de 6 mois intensif et axé sur les résultats, conçu pour les entrepreneurs à 
fort potentiel.</li>
                       
                    </ul>
                    <p class="section_normale_text">L’idée Rise-up : (3 mois) Les résultats clés :</p>
                    <ul class="section_normale_list">
                        <li>Valider la preuve de concept</li>
                        <li>Construire un test de prototype avec les utilisateurs </li>
                        <li>Concevoir le modèle commercial. </li>
                       
                    </ul>
                    <p class="section_normale_text">Rise-Up start : (3 mois) Les résultats clés : </p>
                    <ul>
                        <li>Construire une équipe lancer une startup</li>
                        <li>Signer les premiers clients collecter des fonds de démarrage.</li>
                    </ul>
                    <p class="section_normale_text">Perturber l’Afrique : Pendant six mois, guider l’entrepreneur pour faire passer la startup au niveau supérieur. 
Le programme débutera par une phase de croissance intense de 3 mois axée sur la stratégie, les expériences et 
les tactiques de croissance de la startup. Les 3 mois suivants seront cruciaux pour développer des partenariats 
clés avec de grandes entreprises et pour préparer la levée de fonds et la réunion des investisseurs.</p>
                </div>


                <hr class="section_hr">
                <h2 class="blue-section-title">
                    Contact
                </h2>
                <div class="row">
                    <div class="col">
                        <ul class="section_normale_contact_list">
                            <li>
                                <span class="section_normale_contact_list_icon "><i
                                        class="las la-phone position-absolute top-50 start-50 translate-middle"></i></span>
                                <a href="Tel:06 65 19 42 97">Tel :06 65 19 42 97</a>


                            </li>
                            <li><span class="section_normale_contact_list_icon"><i
                                        class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                        Tour Ivoire 3, 6ème Etage, 
Boulevard Sidi Mohamed Ben 
Abdellah - Casablanca, Maroc.


                            </li>
                            <li>
                                <span class="section_normale_contact_list_icon"><i
                                        class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                <a href="mailto:aminehazzaz@gmail.com">
                                aminehazzaz@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="section_hr">
                <div class="text-containet text-center">
                    <a href="http://www.hseven.co/" target="_blanck">
                        <button class="lg-btn-produit"><i class="las la-external-link-alt"></i> Visitez le site
                            Web</button>
                    </a>
                </div>
                <br>
                <br>
            </div>





            <br>
            <br>
        </div>

        <div class="row">
            <div class="col">

                <a href="{{(asset('/accomp-entr/bidaya'))}}">
                    <button class="previous_btn">Bidaya</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/accomp-entr/happyventures'))}}">
                        <button class="next_btn">Happy Ventures</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br>

    <hr>
    @include('assets.footer')
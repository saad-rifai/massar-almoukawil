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
                        TETOUAN PARK
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Ce parc industriel représente un relais important pour le développement économique de la ville
                        de Tétouan. Cette zone
                        est dédiée à l’implantation d’unités industrielles et logistiques visant le marché régional du
                        Nord du Maroc. <br>
                        Superficie : 157 ha <br>
                        Profil : Zone industrielle <br>
                        Activité : Industrie légère et manufacturière, commerce et logistique <br>
                        Démarrage : 2015 <br>
                        Prix de vente : À partir de 800 (Dhs/m²) <br>

                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services 
</h2>
                    <p class="section_normale_text">
                    TetouanPark propose aux investisseurs une offre immobilière variée et flexible qui comprend :
                    </p>
                    <ul class="section_normale_list">
                        <li>Vente de terrains nus ;</li>
                        <li>La location des hangars industriels et plateaux de bureaux.</li>
                    </ul>
                    <p class="section_normale_text">Dans le cadre de son démarche d’accompagnement des investisseurs, un Guichet Unique a été mis en place au sein de 
TETOUANPARK dans le but d’offrir une panoplie de services notamment en ce qui concerne l’assistance à l’obtention 
des permis de construire. Ce Guichet permettra ainsi d’optimiser la durée d’instruction et les délais d’étude des dossiers. 
Le Gestionnaire du Parc Industriel et Logistique est en charge de la commercialisation et de la promotion de cette offre 
immobilière. Il se garde le droit d’adapter le plan de lotissement et la destination des lots aux besoins des investisseurs.</p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                    Démarche
                    </h2>
                    <ul class="section_normale_list">
                        <li>Demande d’installation ;</li>
                        <li>Validation de la demande et délivrance de la décision ;</li>
                        <li>Acquisition du terrain et signature des contrats ;</li>
                        <li>Demande de permis de construire ;</li>
                        <li>Ouverture de chantier et commencement des travaux ;</li>
                        <li>Demande de permis d’exploitation.</li>
                    </ul>
                </div>
                <br>

                <hr class="section_hr">
                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Contact
                            </h2>
                            <div class="row">
                                <div class="col">
                                    <ul class="section_normale_contact_list">
                                        <li>
                                            <span class="section_normale_contact_list_icon ">
                                                
                                                    <i class="las la-building position-absolute top-50 start-50 translate-middle"></i>
                                            </span>
                                            Agence Spéciale 
Tanger Med-TMSA :
Rime Ikhlas <br>
                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon "><i
                                                    class="las la-phone position-absolute top-50 start-50 translate-middle"></i></span>
                                            Tél : 05 39 39 62 80 / 05 39 39 34 07

                                        </li>

                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    Parc Industriel et Logistique 
de Tétouan, TetouanPark Lot 
05, KM 7, Route de Tanger -
Tétouan
                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                            <a href="mailto:r.ikhlas@tangermed.ma">
                                            r.ikhlas@tangermed.ma</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="text-containet text-center">
                    <a href="https://www.tetouanpark.ma/fr/" target="_blanck">
                        <button class="lg-btn-produit"><i class="las la-external-link-alt"></i> Visitez le site
                            Web</button>
                    </a>
                </div>
                        <div class="col">

                        </div>

                    </div>

                </div>




                <br>
                <br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('/zone-ind-ec/tanger-tech'))}}">
                    <button class="previous_btn">Tanger Tech</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/zone-ind-ec/Azit'))}}">
                        <button class="next_btn">Azit</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
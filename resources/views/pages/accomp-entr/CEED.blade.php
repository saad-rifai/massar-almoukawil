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
                    CEED MAROC 
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    CEED a été créé par SEAF, une société d'investissement à impact pour accompagner les entrepreneurs dans la croissance 
de leurs entreprises. CEED a été créé pour relever les défis en faisant appel à des entrepreneurs prospères pour encadrer 
ceux qui cherchent à développer leur entreprise. <br>
CEED a été développé en utilisant un modèle Peer to Peer où les entrepreneurs partageraient leurs expériences, 
aideraient les autres à surmonter les défis et développeraient la confiance dans les autres membres du réseau


                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <p class="section_normale_text">
                    Savoir-faire :
                    </p>
                    <ul class="section_normale_list">
                        <li>Catalyser les groupes</li>
                        <li>Comprendre le stade de croissance des entrepreneurs</li>
                        <li>Tirer parti de l’objectif d’investissement</li>
                    </ul>
                    <p class="section_normale_text">
                        Réseaux :</p>
                    <ul class="section_normale_list">
                        <li>Communauté locale</li>
                        <li>Communauté internationale</li>
                        <li>Connexions</li>
                    </ul>
                    <p class="section_normale_text">
                        Développement des écosystèmes :</p>
                    <ul class="section_normale_list">
                        <li>Promouvoir les valeurs entrepreneuriales</li>
                        <li>Partager les meilleures pratiques </li>
                        <li>Catalyser et rassembler les parties prenantes de l’écosystème</li>
                    </ul>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>
                    <p class="section_normale_text">Si vous voulez rejoindre le CEED, vous devez consulter le lien suivant : <a href="https://ceed-global.org/join-ceed/"> www.ceed-global.org/join-ceed/ <i class="fas fa-external-link"></i> </a></p>
                </div>
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
                                            <span class="section_normale_contact_list_icon "><i
                                                    class="las la-phone position-absolute top-50 start-50 translate-middle"></i></span>
                                                    Tel: <a href="tel:05 22 22 06 45">05 22 22 06 45</a>  /
                                                 <a href="tel:06 61 43 90 24">06 61 43 90 24</a> /
                                                    <a href="tel:06 61 06 67 50">06 61 06 67 50</a> 
                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    Technopark Tanger bureau T214.


                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                            <a href="mailto:info@ceed-morocco.org">
                                            info@ceed-morocco.org</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        <div class="col">

                        </div>

                    </div>

                </div>
                <hr class="section_hr">
                <div class="text-containet text-center">
                    <a href="http://www.ceed-morocco.org/" target="_blanck">
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

        </div>
        <div class="row">
            <div class="col">

            <a href="{{(asset('/accomp-entr/reseau-entr'))}}">
                    <button class="previous_btn">Reseau Entreprendre</button>
                </a>   
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/accomp-entr/LaFactory'))}}">
                        <button class="next_btn">LaFactory</button>
                    </a>
                </div>
            </div>
        </div>
</div>
        <br>
    
        <hr>
        @include('assets.footer')
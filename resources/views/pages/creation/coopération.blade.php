@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Office du Développement de la Coopération</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        L’office du Développement de la Coopération (ODECO) est un organisme public, créé le 18
                        Septembre 1962 sous forme de
                        structure administrative dépendante de la présidence du Conseil de Gouvernement. <br> Avec
                        l’importance accordée par les
                        pouvoirs publics au secteur coopératif, la nécessité de sa restructuration s’est imposée ; doté
                        d’attributions précises orientées
                        principalement vers l’accompagnement des coopératives dans les domaines de la formation,
                        l’information et l’appui
                        juridique.

                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Avantages
                    </h2>
                    <p class="section_normale_text">
                        L’O.D.CO est chargé, selon la loi n° 112-12, de :

                    </p>
                    <ul class="section_normale_list">
                        <li>
                            Approbation des demandes de validation des dénominations ;
                        </li>
                        <li>Tenir le registre central des coopératives ;</li>
                        <li>Accompagner les coopératives et leurs unions dans les domaines de la formation, de
                            l’information et de l’assistance juridique ;</li>

                        <li>Financer des campagnes de vulgarisation et de formation au profit des coopérateurs ;</li>

                        <li>Aider à la réalisation d’œuvres sociales au profit des coopérateurs ;</li>

                        <li> S’assurer que les coopératives et leurs unions sont gérées conformément à la législation en
                            vigueur ;</li>

                        <li>Collecter et diffuser la documentation de l’information relative à la coopération ;</li>

                        <li>Tenir le registre central des coopératives ;</li>
                        <li> Etudier et proposer toutes réformes législatives ou réglementaires et toute mesure à
                            caractères particulier qui
                            concerne la création et le développement des coopératives</li>

                    </ul>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>
                    <p class="section_normale_text">
                        1- Remplir le formulaire de la demande de la dénomination à télécharger sur le site: <a
                            target="_blanck"
                            href="http://www.odco.gov.ma/fr/content/demande-ded%C3%A9nomination">http://www.odco.gov.ma/fr/content/demande-ded%C3%A9nomination</a>
                        <br>
                        2- Signer la demande et la déposer auprès d’une délégation régionale de l’Office de
                        Développement de la Coopération (O.D.C.O).
                    </p>
                </div>

                <hr class="section_hr">

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
                                        <a href="tel:+212 5 39 94 67 85">+212 5 39 94 67 85</a>
                                    </li>
                                    <li>
                                        <span class="section_normale_contact_list_icon"><i
                                                class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                        Avenue Youssef ben
                                        tachfin immeuble al Frayji
                                        C.P:1134
                                    </li>
                                    <li>
                                        <span class="section_normale_contact_list_icon"><i
                                                class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                            href="mailto:tanger@odco.gov.ma"> tanger@odco.gov.ma</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="map-container">

                            <div class="google-maps">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13230.077217741455!2d-6.8501939!3d34.0048788!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x92bd4ce39391fa4c!2sOffice%20Du%20D%C3%A9veloppement%20De%20La%20Coop%C3%A9ration%20(O.D.C.O.)!5e0!3m2!1sen!2sma!4v1661887307900!5m2!1sen!2sma"
                                    width="600" height="450" style="border:0;" allowfullscreen=""
                                    loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>

                </div>

                <hr class="section_hr">

                <div class="text-containet text-center">
                    <a href="http://www.odco.gov.ma/" target="_blanck">
                        <button class="lg-btn-produit"><i class="las la-external-link-alt"></i> Visitez le site
                            Web</button>
                    </a>
                </div>
                <br>
                <br>
            </div>
        </div>
        <div>
            <a href="{{(asset('/c/auto-entrepreneur'))}}">
                <button class="previous_btn">Auto-entrepreneur</button>
            </a>
        </div>
        <hr>
        @include('assets.footer')
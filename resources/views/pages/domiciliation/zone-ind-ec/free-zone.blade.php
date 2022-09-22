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
                        TANGER FREE ZONE
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Lancée en 1999, TFZ est considérée comme le plus important pôle d’activités de la région du Nord
                        du Maroc. Leaders
                        mondiaux sur les secteurs automobile, aéronautique, électronique et textile sont déjà installés.
                        Superficie : 400 ha
                        Profil : Zone franche généraliste
                        Activité : Automobile, aéronautique, textile
                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <p class="section_normale_text">
                        Tanger Free Zone met à la disposition des investisseurs des infrastructures modernes
                        respectueuses de l’environnement
                        et adaptées aux besoins des entreprises : <br>
                    </p>
                    <ul class="section_normale_list">
                        <li> Des routes conçues pour faciliter les manœuvres des poids lourds ;</li>
                        <li>Un éclairage public performant ;</li>
                        <li> Un équipement de la zone en fibre optique.</li>
                    </ul>
                    <p class="section_normale_text">
                        Ainsi qu’une offre immobilière complète et conforme : <br>
                    </p>
                    <ul class="section_normale_list">
                        <li>Achat de terrains nus ;</li>
                        <li>Location de bâtiments prêts à l’emploi.</li>
                    </ul>
                    <p class="section_normale_text">
                        En plus d’autres services : <br>
                    </p>
                    <ul class="section_normale_list">
                        <li>De surveillance 24h/24 et 7j/7, dotés de caméras ;</li>
                        <li>De collecte de déchets ;</li>
                        <li>D’entretien des espaces verts.</li>
                    </ul>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        PROCESSUS D’INSTALLATION
                    </h2>
                    <p>Dans le cadre de la mission de guichet unique que joue la société Tanger Free Zone au profit des
                        investisseurs qui ont
                        choisi de s’installer à la TFZ, une procédure simplifiée est mise en place pour les assister
                        jusqu’à l’aboutissement de
                        leurs projets. <br>
                        Constitution du dossier : <br>
                    </p>
                    <ul class="section_normale_list">
                        <li>Certificat négatif délivré en ligne sur le site officiel de l’OMPIC ;</li>
                        <li>Questionnaire ;</li>
                        <li> Note de présentation du projet ;</li>
                        <li> Frais de dossier</li>
                    </ul>
                    <p><strong>NB</strong> : Les demandes d’autorisation devront être déposées par les investisseurs au
                        bureau de la société TFZ contre
                        récépissé. La société TFZ est tenue de les soumettre après instruction à la Commission Locale de
                        la Zone Franche
                        d’Exportation de Tanger (CLZFET) .Tous les documents pratiques de Tanger Free Zone sont à votre
                        disposition dans
                        le volet téléchargements du site web. <br>
                        Ces démarches peuvent être réalisés via le CRI TTA à travers le CRUI.</p>
                    <ul class="section_normale_list">
                        <li>Inscription de la vente sur les livres fonciers</li>
                        <li>Demande d’autorisation construction</li>
                        <li>Instruction du dossier et délivrance de l’autorisation de Commencement des travaux</li>
                        <li>Travaux de construction</li>
                        <li>Demande d’autorisation d’exploitation</li>
                        <li>Instruction du dossier et délivrance du Certificat de conformité des constructions</li>
                        <li>Démarrage de l’activité</li>
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
                                            <span class="section_normale_contact_list_icon "><i
                                                    class="las la-phone position-absolute top-50 start-50 translate-middle"></i></span>
                                            Tél : 05 39 39 34 05

                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                            TFZ Route de Rabat, Tanger

                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                            <a href="mailto:contacts@tangermed.zones.com">
                                                contact@tangermedzones.com</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="col">

                        </div>

                    </div>

                </div>

                <hr class="section_hr">

                <div class="text-containet text-center">
                    <a href="https://www.tangermed.ma/" target="_blanck">
                        <button class="lg-btn-produit"><i class="las la-external-link-alt"></i> Visitez le site
                            Web</button>
                    </a>
                </div>
                <br>
                <br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('/zone-ind-ec/zone-auto'))}}">
                    <button class="previous_btn">TangerAuto City</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/zone-ind-ec/tanger-tech'))}}">
                        <button class="next_btn">Tanger Tech</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
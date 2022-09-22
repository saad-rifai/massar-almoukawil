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
                        Tanger Med Port authority
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        L’Autorité portuaire de Tanger Med concentre ses missions sur la gestion et le développement des
                        infrastructures, la
                        coordination et l’animation de la communauté portuaire et garantit la fiabilité et la
                        performance des services assurés
                        aux clients de la plateforme portuaire.


                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <ul class="section_normale_list">
                        <li>
                            Multimodalité du transport : Tanger Med est une plateforme logistique intégrée, connectée à
                            un réseau de
                            transport multimodal (liaisons ferroviaires, routières et maritimes) pour le transport des
                            marchandises et des
                            personnes.
                        </li>
                        <li>Stockage : Tanger Med offre la possibilité de stockage et entreposage des marchandises en
                            attente d’export </li>
                        <li>Cold Chain : des zones de stockage à température contrôlée </li>
                        <li>Manutention : elle se fait à travers le chargement et déchargement des unités Fret de
                            conteneurs et de camions
                            TIR vers la zone de stockage.
                        </li>
                        <li>Connectivité</li>

                    </ul>

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
                                            <a href="tel:05 39 33 70 00

">05 39 33 70 00

                                            </a>

                                            </a>
                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon "><i
                                                    class="las la-fax position-absolute top-50 start-50 translate-middle"></i></i></span>
                                            <a href="Fax :05 39 37 17 90">05 39 37 17 90</a>
                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                            Zone Franche de Ksar El
                                            Majaz, Oued R’mel Commune
                                            Anjra, Province Fahs Anjra.
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
                    <a href="https://www.tangermedport.com/fr/" target="_blanck">
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
                <a href="{{(asset('/soutien-ex/atadm'))}}">
                    <button class="previous_btn">ATADM</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/soutien-ex/smaex'))}}">
                        <button class="next_btn">SMAEX</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
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
                        Chambre de Commerce Espagnole
                        Officielle de Tanger
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        La Chambre de Commerce Espagnole Officielle de Tanger (CECIT) est une Association Economique à
                        but non lucratif
                        entre personnes physiques et morales, tant marocaines qu'espagnoles, dont l'objectif est de
                        défendre et de promouvoir
                        les intérêts de l'Espagne à Tanger et dans le reste du Royaume de Maroc.



                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <ul class="section_normale_list">
                        <li>
                            Informations d’affaires</li>
                        <li> Animation commerciale </li>
                        <li>Espace communication</li>
                        <li>Plateforme de formation </li>
                        <li>Réseau de remise </li>
                        <li>Gestion des visas </li>
                        <li>Bourse de l’emploi</li>
                        <li>Opportunités professionnelles</li>

                    </ul>

                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Avantages
                    </h2>

                    <ul class="section_normale_list">
                        <li>
                            Accompagnement
                        </li>
                        <li>La mise en réseau</li>
                        <li>Développement professionnel</li>
                        <li>Communication marketing</li>
                        <li>Promotions et réductions</li>
                    </ul>

                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>
                    <p>Pour rejoindre la chambre de commerce, remplir le formulaire de demande d’inscription.
                        Il y a 3 modes de partenaire :</p>
                    <ul class="section_normale_list">
                        <li>
                            Membre de base (5000Dhs)
                        </li>
                        <li> Membre standard (25000 Dhs) </li>
                        <li>Membre premium (50000 Dhs)
                        </li>
                    </ul>
                    <p>La différence entre chaque mode de partenaire est les caractéristiques qui sont offertes par la
                        chambre de commerce
                        Espagnole Officielle de Tanger.</p>

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
                                            <a href="tel:05 39 93 01 71">05 39 93 01 71</a> /
                                            <a href="tel:05 3993 54 42">05 3993 54 42</a>
                                            
                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    85, Avd. Habib Bourghiba - TANGER
                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                                href="mailto:buzon.oficial@camacoes
tanger.com"> buzon.oficial@camacoes
tanger.com</a>
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
                    <a href="https://cecit.es/" target="_blanck">
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
                <a href="{{(asset('/reso-etro/ahk'))}}">
                    <button class="previous_btn">AHK</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/reso-etro/ccispm'))}}">
                        <button class="next_btn">CCISPM</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
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
                        Instance Marocaine des
                        Entreprises


                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        L’Instance Marocaine des Entreprises a été créé en 2019 par un groupe d’entrepreneurs et
                        professionnels qui
                        appartiennent aux villes de la région de Tanger-Tétouan Al Hoceima dans le but de défendre les
                        intérêts des très petites
                        entreprises et des petites et moyennes entreprises, et leur permettre de suivre le rythme dans
                        le domaine de la gestion et
                        l’organisation des ressources humaines, de faire entendre leur voix et leurs revendications aux
                        autorités responsables.



                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <ul class="section_normale_list">
                        <li>
                            Plaidoyer auprès des secteurs gouvernementaux et des administrations publiques régionales ;
                        </li>
                        <li>Défendre les intérêts des petites et moyennes entreprises ;
                        </li>
                        <li>Organisation d’activités médiatiques ;</li>
                        <li>Améliorer les capacités et les relations réseau ;
                        </li>
                        <li>Réunions d’affaires bilatérales ;
                        </li>
                        <li>Suivre l’évolution économique ;
                        </li>
                        <li>Partager des informations avec les affiliés ;
                        </li>

                    </ul>

                </div>
              
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>
                    <p class="section_normale_text">Contacter un des membres de l’instance marocaine des entreprises.
                    </p>


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
                                            <a href="tel:06 61 09 76 06 /  
05 39 35 00 23

">06 61 09 76 06 /
                                                05 39 35 00 23


                                            </a>
                                        </li>

                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                            Complexe Al majd N° 109
                                            Premier Étage N° 01 - Tanger
                                            Maroc


                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                                href="mailto:Ime.tpme@gmail.com">
                                                Ime.tpme@gmail.com</a>
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
                    <a href="https://www.facebook.com/imde.officiel/?ref=page_internal/" target="_blanck">
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
                <a href="{{(asset('/resotage/minajliki'))}}">
                    <button class="previous_btn">Min Ajliki</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/resotage/cjp'))}}">
                        <button class="next_btn">CJP</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
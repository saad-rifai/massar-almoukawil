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
                       Centre des jeunes dirigeants 
d’Entreprises
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Le CJD, c’est une expérience de transformation de soi en tant que dirigeante et dirigeant qui
                        encourage à oser et
                        ouvrir le champ des possibles. Parce qu’il est urgent, pour toutes et tous et pour la planète,
                        d’avancer
                        différemment

                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <ul class="section_normale_list">
                        <li>
                            Se former pour progresser

                        </li>
                        <li>Expérimenter pour innover </li>
                        <li>Développer pour pérenniser</li>
                        <li>Les rencontres-Débats </li>
                        <li>S’engager pour influencer </li>


                    </ul>

                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Activités
                    </h2>

                    <ul class="section_normale_list">
                        <li>
                            Avec le CJD, on se transforme en tant que dirigeante pour
                            transformer ses parties prenantes.

                        </li>
                        <li>Avec le CJD, on a les moyens d’impacter positivement la
                            vie des femmes, des hommes et de la planète.
                        </li>
                        <li>Avec le CJD, on bâtit ensemble des entreprises
                            responsables, durables et agréables.
                        </li>
                        <li>Ses rencontres-débats sont des rendez-vous mensuels dans
                            lesquelles le CJD accueille une personnalité publique pour
                            discuter des thématiques relatives l'entreprenariat en
                            particulier et la vision économique en générale. </li>
                        <li>Au niveau local comme national, avec le CJD, on agit
                            pour inspirer.
                        </li>


                    </ul>

                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>

                    <p class="section_normale_text">Le CJD organise des activités qui sont des formations parcours,
                        Formations thématiques,
                        Commissions, Congres &Campus et plénières. Pour rejoindre le CJD, veuillez remplir le <a
                           target="_blank" href="https://cjd.ma/rejoindre-cjd/">formulaire <i class="fas fa-external-link-alt"></i></a>
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
                                            <a href="tel:06 61 42 16 88"> 06 61 42 16 88</a>
                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                            Technopark Tanger

                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                                href="mailto:hlaaroussi@reseau-entreprendre.org">
                                                Tanger@cjd.ma</a>
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
                    <a href="https://cjd.ma/sections/tanger/" target="_blanck">
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
                <a href="{{(asset('/resotage/auto'))}}">
                    <button class="previous_btn">Réseau entreprendre</button>
                </a>
            </div>
            <div class="col">


                <div class="next-btn-box">
                    <a href="{{(asset('/resotage/cd'))}}">
                        <button class="next_btn">CD</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
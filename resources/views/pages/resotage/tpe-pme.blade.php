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
                        Confédération Marocaine de TPE-PME
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        La Confédération Marocaine des Très Petites Entreprise & Petites et Moyennes Entreprise a été
                        créée en avril 2011.
                        Elle est la continuité et le développement normal d’un mouvement des Jeunes Entrepreneurs qui a
                        démarré en 1992
                        avec la création des Associations des Jeunes Promoteurs et Entrepreneurs dans toutes les régions
                        et villes du Maroc.



                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <p class="section_normale_text">Défendre, soutenir, encourager et favoriser le développement des
                        TPE-PME dans tout le Maroc.</p>
                    <ul class="section_normale_list">
                        <li>
                            <strong>Accompagner :</strong> 70 à 85 % des nouvelles entreprises survivent grâce à un
                            accompagnement alors que celles
                            qui choisissent de se développer sans encadrement connaissent un taux de survie de 50%.
                        </li>
                        <li><strong>Défendre :</strong> Participer aux instances de réflexion des partenaires
                            institutionnels sur les questions de
                            déplacement, d’aménagement et d’environnement, et y porter la voix des entreprises.
                        </li>
                        <li><strong>Développer :</strong> Donner un second souffle à l’entreprise par un développement
                            concret de l’activité.
                        </li>


                    </ul>

                </div>
               
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>
                    <p class="section_normale_text">La CM-TPME est ouverte à toutes les entreprises qui satisfont les
                        critères et conditions d’admission tels que fixés par
                        les statuts et par le règlement intérieur de la confédération. Pour plus d’informations sur les
                        statuts et le règlement, La
                        pré-inscription se fait sur le lien suivant : <a target="_blank"
                            href="http://www.tpe-pme.org/index.php/adhesion/">www.tpe-pme.org/index.php/adhesion</a>
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
                                            <a href="tel:06 21 51 59 38
">06 21 51 59 38

                                            </a>
                                        </li>

                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                            Casablanca


                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                                href="mailto:cmtpme@gmail.com">
                                                cmtpme@gmail.com</a>
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
                    <a href="http://www.tpe-pme.org/index.php/" target="_blanck">
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
                <a href="{{(asset('/resotage/ame'))}}">
                    <button class="previous_btn">AME</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/resotage/afem'))}}">
                        <button class="next_btn">AFEM</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
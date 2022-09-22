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
                        Centre Marocain de Médiation Bancaire

                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Il est constitué sous la forme d’une association à but non lucratif. Le Centre gère le
                        dispositif de médiation bancaire
                        destiné au règlement à l’amiable des différends nés ou pouvant naître entre les Établissements
                        de crédit et leurs
                        Clients. Il s’agit d’un dispositif de médiation institutionnelle conventionnelle ou judiciaire
                        au profit des personnes
                        physiques ou morales.


                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <ul class="section_normale_list">
                        <li>
                            Accompagner dans la recherche d’une solution à leur conflit.

                        </li>
                        <li>Conserver le plein contrôle du déroulement.
                        </li>
                        <li>Rapprocher les points de vue des parties et leur proposer des solutions fiables, et ce dans
                            un cadre privé et
                            confidentiel.</li>
                        <li>Maintenir des liens plus cordiaux entre les parties.</li>


                    </ul>

                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>

                    <p>Si vous voulez demander de la médiation, vous pouvez
                        consulter le lien : <a target="_blank"
                            href="https://cmmb.ma/demande-de-mediation/">www.cmmb.ma/demande-de-mediation</a> </p>
                    <p>Pour la Médiation Bancaire – Entreprise, vous pouvez
                        remplir le formulaire : <a target="_blank"
                            href="https://cmmb.ma/wp-content/uploads/2019/03/Demande-de-Mediation-FR-P.pdf/">www.cmmb.ma/wp-content/uploads </a>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Les étapes de saisine du médiateur
                    </h2>

                    <ul class="section_normale_list">
                        <li>
                            Dépôt du dossier ;

                        </li>
                        <li>Dépôt du dossier ;
                        </li>
                        <li>Information des établissements de crédit
                            possibilité de revoir leur position ;
                        </li>
                        <li>Travail de médiation : Rapprochement de point
                            de vue ;
                        </li>
                        <li>Conclusion : proposition des solutions par le
                            médiateur ;
                        </li>
                        <li>Clôture de la médiation</li>

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
                                            <a href="tel:05 22 27 21 69">05 22 27 21 69

                                            </a>

                                            </a>
                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon "><i
                                                    class="las la-fax position-absolute top-50 start-50 translate-middle"></i></i></span>
                                            <a href="Fax :05 22 26 24 28
">05 22 26 24 28
                                            </a>
                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                            Angle Avenue Hassan II et rue
                                            Ahmed Touki, 20080
                                            Casablanca
                                            (À la Succursale de Bank Al
                                            Maghrib)


                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                                href="mailto:cmmb@cmmb.ma">mcmmb@cmmb.ma</a>
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
                    <a href="https://cmmb.ma/" target="_blanck">
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
                <a href="{{(asset('/aide-diff/tamwilcom'))}}">
                    <button class="previous_btn"> Tamwilcom </button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/aide-diff/avocat'))}}">
                        <button class="next_btn">L’ordre des Avocats du
                            Maroc
                            Les avocat</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
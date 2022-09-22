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
                        Chambre de Commerce Britannique au
                        Maroc
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        La Chambre Britannique de Commerce au Maroc est une association de droit marocain à but non
                        lucratif regroupant
                        des entreprises adhérentes opérant dans tous les secteurs d’activités. Bénéficiant depuis plus
                        de 90 ans d’une réputation
                        d’excellence et d’expertise dans le marché marocain.
                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <ul class="section_normale_list">
                        <p>Accompagner les entreprises marocaines de manière concrète et efficace dans le développement
                            de leurs
                            activités à travers une offre de services complète qui s’articule autour de 4 thématiques :
                        </p>
                        <li>
                            <strong> Information et orientation :</strong> BritCham permet les entreprises marocaines
                            d’accéder à de multiples supports
                            d’information pour les aider à mieux comprendre et anticiper l’évolution des marchés
                        </li>
                        <li><strong> Prospection et développement :</strong> Des prestations qui visent à apporter un
                            appui sur mesure pour la recherche
                            de partenaires et/ou de clients potentiels et de les rencontrer via un programme optimisé de
                            rendez-vous.
                        </li>
                        <li><strong>Évènements et réseautage :</strong> Inviter les adhérents en exclusivité à
                            l’ensemble des activités et événements de
                            la BritCham. L’occasion d’entretenir leur réseau à travers des moments d’échanges et de
                            rencontres
                            privilégiés.
                        </li>
                        <li><strong>Services pratiques et privilèges : </strong> Faire profiter nos membres d’une
                            panoplie de services sur-mesure.
                        </li>

                    </ul>

                </div>


                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>
                    <p>Pour adhérer à la Chambre de Commerce Britannique au
                        Maroc, Renseigner le bulletin d’adhésion et fournir la
                        documentation demandée.
                        Pour plus d’informations, consulter le lien : <a target="_blank"
                            href="http://www.britcham.ma/why-join-us/">www.britcham.ma/why-join-us</a>
                    </p>

                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                    Pieces à fournir 
                    </h2>
                   <ul>
                    <li>Une copie du registre du commerce</li>
                    <li>1 photo d’identité du représentant de la société en 
charge des relations avec la chambre</li>
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
                                            <a href="tel:05 22 44 88 60">05 22 44 88 60</a>


                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    65, Avenue Hassan Seghir, 
Casablanca 
                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                                href="mailto:contact@britcham.ma"> contact@britcham.ma</a>
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
                    <a href="http://www.britcham.ma/" target="_blanck">
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
                <a href="{{(asset('/reso-etro/ccimi'))}}">
                    <button class="previous_btn">CCIMI</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/reso-etro/cci'))}}">
                        <button class="next_btn">CCI</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
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
                        Association Marocaine pour la
                        recherche-Développement


                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        L’Association Marocaine pour la Recherche Développement (R&D Maroc) s’assigne la mission
                        générale d’initier,
                        promouvoir et dynamiser l’innovation et la R & D dans les entreprises marocaines du secteur
                        productif.


                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <p class="section_normale_text">R&D Maroc offre une large gamme de services aux porteurs de projets
                        innovants, startups nouvellement créées, TPME,
                        PME et Grande Entreprises, dont principalement : </p>

                    <ul class="section_normale_list">
                        <li>L'Organisation des séminaires en inter et en intra Entreprise sur les techniques et outils
                            de gestion de l'innovation.
                        </li>
                        <li>L'Accompagnement des startups/porteurs de projets de création de startup pour la phase
                            pré-amorçage et
                            amorçage.</li>
                        <li>L'Appui financier pour les porteurs de projets de création de startups et Startups
                            nouvellement créées à travers le
                            Produit «INNOV IDEA » du Fonds INNOV INVEST </li>
                        <li> Assistance au dépôt de brevet pour les inventeurs et entreprises innovantes</li>
                        <li> L'Accompagnement au transfert de technologie et mise en relation.</li>
                        <li>Coordination et gestion financière des projets nationaux et internationaux d'innovation et
                            de la R&D.</li>
                        <li>Mise en relation avec l'écosystème de l'innovation</li>

                    </ul>

                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>

                    <p class="section_normale_text">Si vous voulez rejoindre l’association, vous pouvez remplir ce <a target="_blank" href="https://d.docs.live.net/93e2c9f0bb5c70a7/Documents/bulletin-adhesion%20(1).docx">formulaire <i class="fas fa-external-link"></i></a>:
                        et l’envoyer à l’adresse mail : <a
                            href="mailtp:f.ettalbi@rdmaroc.com">f.ettalbi@rdmaroc.com</a> </p>

                </div>

                <hr class="section_hr">
                <h2 class="blue-section-title">
                    Contact
                </h2>
                <div class="row">
                    <div class="col">
                        <ul class="section_normale_contact_list">
                            <li>
                                <span class="section_normale_contact_list_icon "><i
                                        class="las la-phone position-absolute top-50 start-50 translate-middle"></i></span>
                                <a href="Tel:05 22 22 54 53">Tel :05 22 22 54 53</a> 
                               


                            </li>
                            <li><span class="section_normale_contact_list_icon"><i
                                        class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                        Place Du Seize Novembre, 
Imm. Habous N 51 A, 
Casablanca 20100



                            </li>
                            <li>
                                <span class="section_normale_contact_list_icon"><i
                                        class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                <a href="mailto:f.ettalbi@rdmaroc.com">
                                f.ettalbi@rdmaroc.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="section_hr">
                <div class="text-containet text-center">
                    <a href="https://www.rdmaroc.com/" target="_blanck">
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

        <div class="row">
            <div class="col">

                <a href="{{(asset('/accomp-entr/cise'))}}">
                    <button class="previous_btn">CISE</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/accomp-entr/fintech'))}}">
                        <button class="next_btn">AMC</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br>

    <hr>
    @include('assets.footer')
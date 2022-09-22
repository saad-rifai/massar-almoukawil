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
                        OFFICE DE FORMATION
                        PROFESSIONNELLE ET DE
                        PROMOTION DU TRAVAIL


                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        En tant qu'acteur de la formation professionnelle doté d'une expérience éprouvée, l'OFPPT
                        accompagne l’entreprise dans
                        l’évolution ainsi que dans l'atteinte des différents objectifs. L’ambition étant de permettre
                        d'acquérir un niveau de
                        compétitivité accru, en capitalisant sur le capital humain.
                        Considérés comme étant la première richesse, les salariés deviennent mieux préparés à aider
                        votre organisation, à
                        atteindre les objectifs dans les meilleures conditions.
                        Le large éventail de formations proposé par l’OFPPT est conçu pour permettre d’adapter le niveau
                        du capital humain,
                        aux changements structurels et aux évolutions technologiques et économiques, de révéler les
                        talents, et de mettre à
                        niveau le capital humain

                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <p class="section_normale_text">La gamme de services complète s'étend de la formation jusqu'au
                        recrutement, en passant par le conseil. <br>
                        <strong>Ingénierie de la formation</strong> <br> Cette prestation de conseil en ingénierie de
                        formation suit 3 étapes: <br> Cette prestation de conseil en ingénierie de formation suit 3
                        étapes: <br>
                        Définition des orientations et des enjeux stratégiques de l’entreprise ; Identification des
                        emplois sensibles.
                        <br> Livrable : Document de cadrage de l’intervention <br>
                        Diagnostic et axes de formation : <br>
                        Identification des problématiques et des déficits en compétences, liés aux orientations
                        stratégiques, aux
                        dysfonctionnements, et aux besoins individuels ; Identification des mesures d’accompagnement.
                        <br>
                        <br> Livrable : Résultats du diagnostic et axes de formation.
                        Traduction des besoins sous forme d’actions de formation ; Elaboration des fiches des actions de
                        formation
                        retenues ; <br>
                        Définition des effectifs concernés par chaque action de formation, sa durée, le prestataire
                        éventuel, et les coûts
                        estimatifs ; Planification de la réalisation des actions de formation. <br>
                        <br> Livrable : Rapport final comprenant le cadrage, les résultats du diagnostic et le plan de
                        formation.
                        <strong>Formation intra-entreprise</strong> <br>
                        Permettre à votre entreprise de procéder au redéploiement, à la reconversion et à la promotion
                        de son personnel
                        Répondre aux besoins en formation sur mesure au profit des ressources humaines de l’entreprise
                        <strong>Conseil en recrutement</strong> <br>
                        L’OFPPT propose une assistance en recrutement dont le but est d’aider, dans le cadre de la
                        stratégie de développement
                        de l’entreprise, à optimiser la gestion des ressources humaines et ce, à travers l’évaluation
                        des potentialités et capacités
                        des candidats à recruter.
                    </p>

              


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
                                <a href="Tel: 05 39 34 01 34">Tel: 05 39 34 01 34</a>

                            </li>
                            <li>
                                <span class="section_normale_contact_list_icon "><i
                                        class="las la-fax position-absolute top-50 start-50 translate-middle"></i></i></span>
                              Fax : 05 39 94 26 60

                            </li>
                            <li><span class="section_normale_contact_list_icon"><i
                                        class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                Rue du Liban, Place
                                Mozart BP : 1272 - 90
                                000 Tanger



                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="section_hr">
                </div>
                <div class="text-containet text-center">
                    <a href="http://www.ofppt.ma/" target="_blanck">
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
                <a href="{{(asset('/accomp-rh/anapec'))}}">
                    <button class="previous_btn">ANAPEC</button>
                </a>
            </div>
            <div class="col">
            <div class="next-btn-box">

                <a href="{{(asset('/accomp-rh/career'))}}">
                    <button class="next_btn">CAREER CENTER</button>
                </a>
            </div>
            </div>
        
        </div>
    </div>
    <br>

    <hr>
    @include('assets.footer')
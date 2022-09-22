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
                        IMPACT LAB
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        IMPACT Lab se positionne en tant que partenaire innovation privilégié pour accompagner la
                        croissance des startups et
                        des institutions privées et publiques dans les principaux hubs d'Afrique et pour réussir des
                        projets et solutions
                        concrètes, porteurs de ces nouveaux modèles.

                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <ul class="section_normale_list">
                        <li>PARTENAIRE DES STARTUPS :</li>
                    </ul>
                    <p class="section_normale_text">Un accompagnement opérationnel sur-mesure pour accélérer la mise en
                        œuvre des projets, de leur croissance et
                        financement. <br>
                        Proposition de programmes d’accélération qui peuvent transformer les projets innovants en
                        startups à fort potentiel et
                        booster leur développement. <br>
                    </p>
                    <ul class="section_normale_list">
                        <li>PARTENAIRE DES ENTREPRISES :</li>
                    </ul>
                    <p class="section_normale_text">Accompagnement et conseil pour structurer la démarche d'innovation
                        et accélérer les projets innovants.
                        Proposition de programmes dans le conseil en innovation, formation et outillage, accélération de
                        projets de
                        transformation et innovation ouverte.</p>
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
                                                   <a href="Tel :05 22 52 60 18">Tel :05 22 52 60 18</a>


                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    2, Rue Pierre et Marie Curie - Casablanca

                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                            <a href="mailto:ola.b@impactlab.africa">
                                            ola.b@impactlab.africa</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                <hr class="section_hr">
                <div class="text-containet text-center">
                    <a href="http://www.impactlab.africa/" target="_blanck">
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

                <a href="{{(asset('/accomp-entr/ClusterSolaire'))}}">
                    <button class="previous_btn">Cluster Solaire</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/accomp-entr/startup-maroc'))}}">
                        <button class="next_btn">StartUp Maroc</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br>

    <hr>
    @include('assets.footer')
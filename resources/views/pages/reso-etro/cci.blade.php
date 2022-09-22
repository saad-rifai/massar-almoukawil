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
                        Chambre de Commerce Italienne au Maroc
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        La Chambre de Commerce Italienne au Maroc est présente à Casablanca depuis deux cent ans. Son
                        statut fut approuvé
                        par l’Assemblé Générale Constitutive du 16 juillet 1916. <br>
                        Son but était d’encourager les rapports commerciaux et industriels entre l’Italie et le Maroc
                        ainsi que d’en favoriser le
                        développement ; d’intervenir dans l’étude de toutes questions législatives, commerciales et
                        industrielles intéressant les
                        deux pays ; de porter à l’attention des entreprises italiennes toute information concernant les
                        échanges commerciaux
                        avec le Maroc ; de faciliter la circulation d’informations sur la main-d’œuvre italienne ; et,
                        enfin, de représenter et
                        encourager en toute occasion les intérêts commerciaux de l’Italie.
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
                            Service d’information
                        </li>
                        <li>Formation et Stages
                        </li>
                        <li>Promotion des entreprises et rencontres d’affaires
                        </li>
                        <li>Accompagnement des entreprises : services de soutien et de renseignement aux opérateurs
                            économiques
                        </li>

                    </ul>

                </div>


                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>
                    <p>Accompagnement des entreprises : services de soutien et de renseignement aux opérateurs
                        économiques <a target="_blank"
                            href="https://ccimaroc.com/wp-content/uploads/2021/09/ADHESION.pdf/">www.ccimaroc.com</a>
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
                                            <a href="tel:05 22 27 82 17">05 22 27 82 17</a> /
                                            <a href="tel:05 22 26 56 53">05 22 26 56 53</a> /
                                            <a href="tel:05 22 26 46 51">05 22 26 46 51</a>

                                        </li>
                                        <li>
                                                                <span class="section_normale_contact_list_icon "><i
                                                                            class="las la-fax position-absolute top-50 start-50 translate-middle"></i></i></span>
                                                                    <a href="Fax : 05 22 27 86 27">05 22 27 86 27</a>
                                                                </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    59, Rue Moussa Ibnou Noussair 
– Casablanca
                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                                href="mailto:info@ccimaroc.com"> info@ccimaroc.com</a>
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
                    <a href="http://ccimaroc.com/fr/" target="_blanck">
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
                <a href="{{(asset('/reso-etro/britain'))}}">
                    <button class="previous_btn">Chambre de Commerce Britannique</button>
                </a>
            </div>
            
        </div>
        <hr>
        @include('assets.footer')
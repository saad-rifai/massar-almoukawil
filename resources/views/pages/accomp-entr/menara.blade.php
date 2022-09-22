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
                        Cluster Menara
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Le Cluster Menara est une association marocaine spécialisée dans les industries agroalimentaires
                        et cosmétiques du luxe.
                        Il est constitué de plusieurs types d’acteurs socioéconomiques régionaux et nationaux (PME,
                        Institution, Centres de
                        recherche, Universités, Startups). Ce groupement d’entrepreneurs fait émerger des opportunités
                        et contribue à la
                        croissance de l’économie nationale. Son but principal est d’accompagner les startups, TPE et PME
                        marocaines, en misant
                        sur l’innovation, la croissance, et la visibilité des secteurs agroalimentaires et cosmétiques à
                        l’échelle internationale.

                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <ul class="section_normale_list">
                        <li>L’incubation au service d’investissements
                            durables : Un service d’incubation est offert aux
                            entreprises membres pour leurs opportunités permettre
                            de réussir leur lancement.</li>
                        <li>Des formations pour le développement du secteur
                            privé : L’association organise des sessions de
                            formations destinées à ses équipes et ses membres.</li>
                        <li>La veille & les études au service de l’innovation : Il
                            propose un service de veille et d’études sectorielles
                            pour identifier les nouvelles d’affaires, élaborer et
                            mettre en œuvre des projets répondant aux standards de
                            qualité et accompagner les projets innovants.</li>
                        <li>Aaccompagnement personnalisé à travers Les
                            membres du réseau qui également bénéficier de
                            contacts clés.
                        </li>
                    </ul>

                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                    Avantages
                    </h2>

                    <ul class="section_normale_list">
                        <li>Pour développer votre réseau.</li>
                        <li>Pour une meilleure visibilité</li>
                        <li>Pour trouver de nouveaux débouchés </li>
                        <li>Pour améliorer votre technologie </li>
                        <li>Pour recevoir de l’aide dans vos projets</li>
                        <li>Pour développer votre expertise </li>
                    </ul>
                    <div class="text-containet">
                    <h2 class="blue-section-title">
                    Démarches
                    </h2>

                    <p class="section_normale_text">Si vous voulez intégrer l’association, vous pouvez consulter le lien suivant : <a target="_blank" href="https://clustermenara.com/membres/pourquoi-adherer/">www.lustermenara.com/membres/pourquoi-adherer</a> </p>
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
                                <a href="Tel :05 24 05 51 75">Tel :05 24 05 51 75</a>


                            </li>
                            <li><span class="section_normale_contact_list_icon"><i
                                        class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                        Avenue Allal el Fassi 
Immeuble Habous Entrée 6, 
N° 13 40000 Marrakech

                            </li>
                            <li>
                                <span class="section_normale_contact_list_icon"><i
                                        class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                <a href="mailto:kaoutar@clustermenara.com">
                                kaoutar@clustermenara.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="section_hr">
                <div class="text-containet text-center">
                    <a href="http://www.clustermenara.com/" target="_blanck">
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
        </div>
        <div class="row">
            <div class="col">

                <a href="{{(asset('/accomp-entr/CE3M'))}}">
                    <button class="previous_btn">CE3M</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/accomp-entr/enactus'))}}">
                        <button class="next_btn">Enactus</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br>

    <hr>
    @include('assets.footer')
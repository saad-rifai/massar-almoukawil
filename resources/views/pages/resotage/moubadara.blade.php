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
                        Fondation Moubadara pour les jeunes
                        et l’entreprenariat

                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        LA FONDATION MOUBADARA est une association marocaine indépendante et autonome engagée sur le
                        terrain
                        depuis plus de 25 ans pour rapprocher les entrepreneurs, les décideurs et les territoires.
                        L'action de la Fondation
                        Moubadara est menée en partenariat avec les secteurs publics, mixtes et privés pour accompagner
                        les porteurs de
                        projets, les promoteurs et les jeunes entrepreneurs marocains, étrangers résidant au Maroc ou
                        marocains résidents à
                        l'étranger dans la réalisation, le conseil et l'accompagnement de leurs projets d'entrepreneur.


                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <ul class="section_normale_list">
                        <li>Créer un environnement entrepreneurial favorable</li>
                        <li>Promouvoir la TPE/PME et la culture entrepreneurial</li>
                        <li>Promouvoir l'entrepreneuriat social et solidaire</li>
                        <li>Orienter et encadrer l'action des jeunes porteurs de projets</li>
                        <li>Renforcer le lien entre les décideurs de différents secteurs</li>
                        <li>Rapprocher l'offre et la demande en matière d'échange B to B</li>
                        <li>Promouvoir le Maroc en tant que terre d'investissement</li>
                        <li>Encourager la création et la construction de pépinières d'entreprises et de zones
                            d'activités</li>

                    </ul>
                    <p class="section_normale_text">Pour réaliser ces services, la fondation utilise plusieurs
                        programmes comme : Insertion économique des jeunes,
                        programme Nawat …</p>

                </div>
               
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>
                    <p class="section_normale_text">Pour integrer la fondation vous pouvez renseigner le lien suivant : <a target="_blank" href="http://www.fmje.ma/register">www.fmje.ma/register</a></p>
                    <p>Pour utiliser ses services, il existe des conditions d’utilisation que chaque utilisateur doit les respecter 
vous pouvez les savoir plus : <a target="_blank" href="http://www.fmje.ma/programs/terms-of-service.html">www.fmje.ma/programs/terms-of-service.html</a> </p>
<p>Elle a une politique de confidentialité qui décrit ses politiques et procédures sur la collecte, l'utilisation et la 
divulgation de vos informations lorsque vous utilisez le service et vous informe de vos droits à la confidentialité et de 
la manière dont la loi vous protège. Si vous voulez renseigner plus d’information, vous pouvez consulter le lien 
suivant : <a target="_blank" href="http://www.fmje.ma/programs/privacy-policy.html">www.fmje.ma/programs/privacy-policy.html</a> </p>


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
                                            <a href="tel:05 22 98 15 32
">05 22 98 15 32

                                            </a>
                                        </li>

                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    Rue des Aphodeles 
Casablanca


                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                                href="mailto:fmje.moubadara@gmail.com">
                                                fmje.moubadara@gmail.com</a>
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
                    <a href="http://www.fmje.ma/" target="_blanck">
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
                <a href="{{(asset('/resotage/aida'))}}">
                    <button class="previous_btn">AIDA</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/resotage/minajliki'))}}">
                        <button class="next_btn">Min Ajliki</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
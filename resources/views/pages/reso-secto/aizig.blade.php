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
                    L’association des investisseurs de la 
zone industrielle de GZENAYA

                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        L’association de la zone industrielle de Gzenaya, et depuis sa mise à niveau et sa
                        restructuration en 2007, s’inscrit
                        pleinement dans la dynamique. Investi et animé par cet esprit volontariste de développement, le
                        bureau de
                        l’association est fortement engagé dans ce processus, et entend déployer tous les efforts et
                        énergies nécessaires pour un
                        meilleur avenir de cette zone.



                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <p class="section_normale_text">Prendre en charge la gestion et le gardiennage de la zone.
                        Représenter les adhérents et être leur voie auprès des autorités et différentes administrations.
                        Veiller au maintien des installations communes de la zone. </p>

                </div>
                
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>
                    <p class="section_normale_text">Tout acquéreur dans la zone est considéré comme membre d’office de
                        l’association.
                        Chaque industriel est tenu de s’acquitter des frais de gestion déterminés par cette association.
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
                                            <a href="tel:05 39 39 39 38
">05 39 39 39 38

                                            </a>
                                        </li>

                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    Zone Industrielle de Gzenaya
Lot n° 503, B.P. 417 – Tanger, Maroc.


                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                                href="mailto:contact@aizig.ma">
                                                contact@aizig.ma</a>
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
                    <a href="http://aizig.ma/" target="_blanck">
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
                <a href="{{(asset('/reso-secto/amith'))}}">
                    <button class="previous_btn">AMITH</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/reso-secto/azit'))}}">
                        <button class="next_btn">AZIT</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
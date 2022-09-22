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
                        Zone Industrielle de Gzenaya
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        La Zone Industrielle de Gzenaya, située à la commune urbaine Gzenaya Boukhalef, province de
                        Tanger, réalisée en trois
                        tranches, sur une superficie totale de 129.2 hectares 97 a 97 ca, objet des titres fonciers N°
                        1849, N° 1367, N° 839, N°
                        10184 et N° 215. <br>
                        L’aménagement de cette zone s’inscrit dans la cadre de référence du Dahir N° 1-92-7 du 17 juin
                        1992, portant
                        promulgation de la loi N° 25-90 relative aux lotissements, groupe d’habitations et
                        morcellements. <br>
                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <ul class="section_normale_list">
                        <li>Des routes conçues pour faciliter les manœuvres des poids lourds.</li>
                        <li>Un éclairage public.</li>
                        <li>Surveillance.</li>
                        <li>Collecte de déchets.</li>
                        <li>Entretien des espaces verts.</li>
                    </ul>
                </div>

                <br>

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
                                            Tél.: 0539 39 39 38

                                        </li>
                                        <li> <span class="section_normale_contact_list_icon "><i
                                                    class="las la-fax position-absolute top-50 start-50 translate-middle"></i></span>
                                            Fax.: 0539 39 32 49
                                        </li>

                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                            Zone Industrielle de
                                            Gzenaya
                                            Lot n° 503, B.P. 417
                                            – Tanger, Maroc.

                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                            <a href="mailto:contact@aizig.ma">
                                                contact@aizig.ma</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="text-containet text-center">
                            <hr class="section_hr">

                            <a href="http://aizig.ma/" target="_blanck">
                                <button class="lg-btn-produit"><i class="las la-external-link-alt"></i> Visitez le site
                                    Web</button>
                            </a>
                        </div>
                        <div class="col">

                        </div>

                    </div>

                </div>




                <br>
                <br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('/zone-ind-ec/Azit'))}}">
                    <button class="previous_btn">Azit</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/zone-ind-ec/Al-Omrane'))}}">
                        <button class="next_btn">Al-Omrane</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
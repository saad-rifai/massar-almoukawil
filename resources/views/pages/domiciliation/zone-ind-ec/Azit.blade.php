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
                    Zone industrielle de Tanger
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    La Zone Industrielle (appelée aussi Zone de Moghogha) crée en 1975 avec une superficie totale de 138 ha, se situe sur 
la Route de Tétouan, initialement aménagée avec 118 Lots, les morcellements successifs et une petite extension ont porté 
à ce jour le nombre de lots à 146.
                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <p class="section_normale_text">
                    Amélioration des infrastructures de la zone en impliquant les membres.
Nettoyage de la zone et réparation des chaussées. <br>
l’accompagnement des entreprises industrielles dans leurs objectifs.
                    </p>
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
                                            Tél : +212 39 35 06 28 / +212 39 95 75 09 / +212 39 35 19 62

                                        </li>
                 
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    125, Allée principale, Zone 
Industrielle, route de Tetouan –
Tanger, Maroc.
                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                            <a href="mailto:azit@azit.ma">
                                            azit@azit.ma</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="text-containet text-center">
                        <hr class="section_hr">

                    <a href="http://www.azit.ma/" target="_blanck">
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
            <a href="{{(asset('/zone-ind-ec/tetouan-park'))}}">
                    <button class="previous_btn">Tetouan Park</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/zone-ind-ec/Aizig'))}}">
                        <button class="next_btn">Aizig</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
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
                        Chambre de Commerce et d’Industrie Maroc
                        Israël
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        L’Association a pour objet de promouvoir les relations économiques et entrepreneuriales entre le
                        Maroc et Israël.
                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <ul class="section_normale_list">
                        <li>
                            Créer et animer des cercles d’échanges et d’informations, à travers la mise en place d’une
                            plateforme digitale.</li>
                        <li> Organiser des conférences, des forums thématiques par secteur et des (web) séminaires par
                            des participations
                            croisées ;
                        </li>
                        <li>Favoriser les rencontres professionnelles et les mises en relation.
                        </li>
                        <li>Développer les échanges, les axes de coopération, les transferts de savoir-faire, dans tous
                            secteurs d’activité.
                        </li>
                        <li>Assurer des missions commerciales, des voyages d’affaires et des visites d’entreprises dans
                            les deux pays.
                        </li>
                        <li>Contribuer à l’implantation et au développement des entreprises dans chacun des deux pays.
                        </li>


                    </ul>

                </div>
               

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>
                    <p>Pour devenir un membre, Remplir le formulaire sur le lien : <a
                           target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSfhzNRgIfXatTmimUdMegrtIQdki0Yr_5ZJbvdXI132N1WpbA/viewform">www.docs.google.com</a>
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
                                            <a href="tel:05 20 37 65 63">05 20 37 65 63</a> 
                                           

                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    Siège social de la Chambre : 
Sofitel Tour Blanche Rue Sidi 
Belyout, Casablanca Maro
                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                                href="mailto:https://www.ccimi.ma/contact.php"> buzon.oficial@camacoes
                                                tanger.com</a>
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
                    <a href="https://www.ccimi.ma/index.php/" target="_blanck">
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
                <a href="{{(asset('/reso-etro/ccblm'))}}">
                    <button class="previous_btn">CCBLM</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/reso-etro/britain'))}}">
                        <button class="next_btn">Chambre de Commerce Britannique</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
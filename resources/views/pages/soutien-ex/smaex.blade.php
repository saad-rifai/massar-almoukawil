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
                        Société Marocaine d’Assurance à
                        l’Exportation

                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        La Société Marocaine d’Assurance à l’Exportation est une société d’économie mixte créée par
                        Dahir. La SMAEX est
                        un acteur principal de la sécurité des marchés à l’exportation ayant pour objet la gestion du
                        système d’assurance à
                        l’exportation.


                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <p>La SMAEX propose pour ce faire deux types de services :</p>
                    <ul class="section_normale_list">
                        <li>
                            L’assurance-Crédit de marché : concerne la protection
                            de L’exportateur contre les risques de non-paiement
                            de ses créances commerciales
                        </li>

                    </ul>
                    <p>L’assurance export publique : Elle englobe :</p>
                    <ul>
                        <li>La garantie des risques politiques, catastrophiques
                            et de non transfert ;
                        </li>
                        <li>La couverture des risques commerciaux
                            extraordinaires ;
                        </li>
                        <li>Partage des risques afférents à toute action
                            commerciale à l’étranger à travers l’assurance foire
                            et l’assurance prospection.</li>
                    </ul>

                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>
                    <p class="section_normale_text">
                        L’inscription se fait sur le lien: <a target="_blank"
                            href="https://www.smaex.com/inscription.php">www.smaex.com/inscription.php</a>
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
                                            <a href="tel:05 22 98 20 00">05 22 98 20 00

                                            </a>

                                            </a>
                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon "><i
                                                    class="las la-fax position-absolute top-50 start-50 translate-middle"></i></i></span>
                                            <a href="Fax : 05 22 25 20 70"> 05 22 25 20 70</a>
                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                            24, Rue Ali Abderrazak -
                                            Casablanca 20 100.

                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                                href="mailto:smaex@smaex.com">smaex@smaex.com</a>
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
                    <a href="http://www.smaex.com/" target="_blanck">
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
                <a href="{{(asset('/soutien-ex/tangermed'))}}">
                    <button class="previous_btn">TangerMed</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/soutien-ex/office'))}}">
                        <button class="next_btn">Office Des Changes </button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
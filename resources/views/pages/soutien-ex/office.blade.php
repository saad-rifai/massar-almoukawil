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
                    Office Des Changes 
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    La Société Marocaine d’Assurance à l’Exportation est une société d’économie mixte créée par Dahir. La SMAEX est 
un acteur principal de la sécurité des marchés à l’exportation ayant pour objet la gestion du système d’assurance à 
l’exportation.


                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <ul class="section_normale_list">
                        <li>
                        Elaborer la réglementation des changes
                        </li>
                        <li>S’assurer du respect de la réglementation des changes en vigueur</li>
                        <li>Octroyer les agréments de change manuel
 </li>
                        <li>Etablir les statistiques des échanges extérieurs
                        </li>
                        <li>Assumer pleinement son rôle de service public, facilitateur et accompagnateur de ses usagers en menant une 
démarche qualité reposant sur la qualité d’accueil et de prise en charge, le respect des délais, l’équité de 
traitement et l’implication de l’ensemble du personnel ;
</li>
<li> Veiller au respect des dispositions de la loi n° 43-05 relative à la lutte contre le blanchiment de capitaux par 
les entités soumises à son contrôle et assujetties auxdites dispositions ;</li>
<li>Dispenser des formations en matière de réglementation des changes au profit des intermédiaires agrées, des 
associations professionnelles, etc.</li>
<li>Réaliser et publier des études en exploitant les données statistiques des échanges extérieurs ;</li>
<li>Echanger les données avec les autres administrations pour partager les informations et les connaissances et 
assurer un traitement cohérent des questions et dossiers communs.</li>
<li>Fournir des E-services comme SMART qui permet de demander de l’autorisation et déclaration EX-MRE..., 
application mobile « OC CONNECT », Plateforme des enquêtes statistiques, Base de Données du Commerce 
Extérieur, Demandes d’information dans le cadre de la loi 31.13, Documentation utile et Foire aux questions. </li>
                        
                    </ul>

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
                                            <a href="tel:05 37 26 63 63


">05 37 26 63 63


                                            </a>

                                            </a>
                                        </li>
                                        
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    4, Rue Chatila, Quartier 
Palmiers Casablanca.
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
                    <a href="https://www.oc.gov.ma/fr/" target="_blanck">
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
                <a href="{{(asset('/soutien-ex/smaex'))}}">
                    <button class="previous_btn">SMAEX</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/soutien-ex/pcc'))}}">
                        <button class="next_btn">PCC</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
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
                        Chambre de Commerce, d’Industrie et
                        des Service du Portugal au Maroc
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        La Chambre de Commerce, d’Industrie et des Services du Portugal au Maroc (CCISPM) a pour mission
                        de générer et de
                        développer des partenariats économiques entre les entreprises portugaises et marocaines, en
                        contribuant au
                        rapprochement des entreprises du Portugal et du Maroc et en agissant comme un organe
                        représentant les intérêts
                        commerciaux luso-marocains auprès des différentes associations, administrations et instances
                        politiques des deux pays



                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <ul class="section_normale_list">
                        <li>Conseil aux entreprises</li>
                        <li>Opportunités d’affaires </li>
                        <li>Soutien logistique</li>
                        <li>Networking et promotion</li>
                        <li>Communication et information</li>
                        <li>Service VIP-VISA</li>
                        <li>Des réductions de prix significatives dans les
                            services des partenaires CCISPM</li>
                        <li>Accès à l’espace du business center de la
                            CCIPSM pour les réunions avec les clients et/ou
                            les fournisseurs</li>
                        <li>Carte de membre CCISPM</li>
                    </ul>

                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Avantages
                    </h2>

                    <ul class="section_normale_list">
                        <li>Networking et savoir-faire de la CCISPM par
                            l’accès à un réseau de contacts d’entreprises
                            marocaines et portugaises ;
                        </li>
                        <li>Contact privilégié avec des organismes
                            institutionnels marocains et portugais ;
                        </li>
                        <li>Invitation à des événements exclusifs organisés par
                            la CCISPM (déjeuners, débats, conférences
                            thématiques, tournoi de golf Coupe du Portugal,
                            entre autres) ;
                        </li>
                        <li>Mise à jour d’informations économiques et
                            commerciales entre le Maroc et le Portugal par des
                            newsletters et d’autres canaux de communication ;</li>
                        <li>Accès à l’espace Business Center CCISPM, où
                            vous pourrez rencontrer des clients et/ou des
                            fournisseurs ;
                        </li>
                        <li>Rabais auprès des partenaires de la CCISPM
                            (hôtels, sociétés de location de voitures,
                            restaurants, etc.) ;
                        </li>
                    </ul>

                </div>
                <div class="sample_table mb-5">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Démarches</th>
                                <th scope="col">Frais</th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> Pour devenir membre de la Chambre de Commerce, <br>
                                    d’Industrie et des Services du Portugal au Maroc il suffit <br>
                                    de sélectionner l’option ci-dessous qui s’applique le mieux <br>
                                    à votre cas et de remplir le formulaire d’adhésion.
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Entreprises et Associations :
                                </td>

                                <td>5000 DH/an</td>
                            </tr>
                            <tr>
                                <td>Entreprises et Associations non-résidentes.</td>
                                <td>500€* / an</td>
                            </tr>
                            <tr>
                                <td>Personne individuelle</td>
                                <td>2000 DH/an</td>
                            </tr>
                        </tbody>
                    </table>
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
                                            <a href="tel:06 14 15 15 15">06 14 15 15 15</a> 
                                            

                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    Maroc 48, Boulevard de Paris, 2ème 
étage, 20130 Casablanca, Maroc
                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                                href="mailto:ccispm@ccispm.com"> ccispm@ccispm.com</a>
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
                    <a href="ccispm@ccispm.com/" target="_blanck">
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
                <a href="{{(asset('/reso-etro/camara'))}}">
                    <button class="previous_btn">camara</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/reso-etro/ccblm'))}}">
                        <button class="next_btn">CCBLM</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
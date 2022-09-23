@section('title', 'Dar Al Moukawil')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Dar Al Moukawil</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Depuis Juin 2016, Attijariwafa bank renforce sa stratégie d’accompagnement des petites entreprises à travers la mise en place de
la plate-forme <a href="https://www.daralmoukawil.com/" target="_blank" rel="noopener noreferrer">https://www.daralmoukawil.com/</a> , ainsi que l’ouverture des centres Dar Al Moukawil dans les différentes régions
du pays au cours des années 2017 et 2018. Ces centres ont pour vocation et principale mission d’accompagner les porteurs de
projets et petites entreprises dans leurs activités.
                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <ul>
                        <li>Dar AL Moukawil dispose un guide d&rsquo;&eacute;valuation des id&eacute;es. Vous pouvez le consulter via le lien suivant :<br /><a href="https://backend.daralmoukawil.com/sites/default/files/guide_devaluation_de_son_idee1.pdf" target="_blank" rel="noopener">https://backend.daralmoukawil.com/sites/default/files/guide_devaluation_de_son_idee1.pdf</a>:</li>
                        <li>Donner des m&eacute;thodes pour aider les entrepreneurs &agrave; trouver l&rsquo;id&eacute;e du projet.</li>
                        <li>Proposer des questions pour formaliser l&rsquo;id&eacute;e du projet.</li>
                        <li>Proposer un processus pour prot&eacute;ger l&rsquo;id&eacute;e du projet</li>
                        </ul>
                </div>
               
                <hr class="section_hr">
                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Contact
                            </h2>
                          
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Tel</th>
                                        <th>Adresse</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="tel:05 38 80 07 88">05 38 80 07 88</a></td>
                                        <td>
                                            Angle boulevard Pasteur et rue Moulay
                                             Abdellah, Tanger 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="tel:05 39 98 52 74">05 39 98 52 74</a></td>
                                        <td>
                                            90 Avenue Mohamed V, AL HOCEIMA
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            Agence TANGER TARIK IBN ZIAD 
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                

                    </div>

                </div>
                <hr class="section_hr">
                <div class="text-containet text-center">
                    <a href="https://www.daralmoukawil.com/fr/" target="_blanck">
                        <button class="lg-btn-produit"><i class="las la-external-link-alt"></i> Visitez le site
                            Web</button>
                    </a>
                </div>
                <br>
                <br>
            </div>
        </div>
        <br>
        <div class="row ">
            <div class="col">
                <a href="{{(asset('idee/mic'))}}">
                    <button class="previous_btn">Banque de projets industriels</button>
                </a>
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a href="{{(asset('idee/fondation-cr-ation-d-entreprises'))}}">
                        <button class="next_btn">Fondation création d’entreprises</button>
                    </a>
                </div>
            </div>
        </div>
   
        <hr>
        @include('assets.footer')
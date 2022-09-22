@section('title', 'TATWIR STARTUP')
@section('description', " Offre intégrée d’accompagnement, de bout en bout, des projets de startups.")

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>TATWIR STARTUP</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Objet
                    </h2>
                    <p class="section_normale_text">
                        Offre intégrée d’accompagnement, de bout en bout, des projets de startups.
                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Description
                    </h2>
                    <p class="section_normale_text">
                        Le Programme TATWIR Startups vise à développer des projets innovants, industriels et de services
                        à forte valeur ajoutée portés par des startups à travers une offre intégrée d’accompagnement, de
                        bout en bout, des projets de startups allant de l’idée jusqu’à l’industrialisation en passant
                        par les différentes phases d’incubation.
                    </p>
                </div>
                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Cible
                            </h2>
                            <p>
                            <ul>
                                <li>Porteurs de projets.</li>
                                <li>Startups</li>
                            </ul>

                            </p>

                        </div>

                        <div class="col">
                            <h2 class="blue-section-title">
                                Projets cibles
                            </h2>
                            <p>
                                Projets industriels innovants ou de services à forte valeur ajoutée liés à l’industrie.

                            </p>

                        </div>

                    </div>
                    <div class="col">
                        <h2 class="blue-section-title">
                            Critères d’éligibilité
                        </h2>
                        <p class="section_normale_text">
                        <ul>
                            <li>porteur de projet de startup d&eacute;montrant une forte motivation entrepreneuriale
                                ayant une id&eacute;e de projets valorisable par la cr&eacute;ation d&rsquo;entreprise.
                            </li>
                            <li>startups ayant un fort potentiel de croissance.</li>
                        </ul>
                        </p>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title"> Plafond de financement </h2>
                            <p>
                            <ul>
                                <li>Une prise en charge totale des phases de pr&eacute;-incubation et
                                    d&rsquo;incubation.</li>
                                <li>Appui additionnel de 50% au projet de cr&eacute;ativit&eacute;, design et
                                    d&eacute;veloppement de produit industriel avec un plafond de 1,5 MDH TTC.</li>
                                <li>Soutien financier 30% plafonn&eacute; &agrave; 2 Mdh TTC/projet sous forme
                                    d&rsquo;appui &agrave; l&rsquo;investissement des projets de startups industrielles
                                    s&eacute;lectionn&eacute;es.</li>
                            </ul>
                            </p>
                        </div>

                        <div class="col">
                            <h2 class="blue-section-title">Modalités de remboursement </h2>
                            <p class="section_normale_text">
                                Il s’agit d’une subvention de l’Etat, aucun remboursement n’est demandé.
                            </p>
                        </div>
                    </div>
                    <br>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">Conditions de garanties </h2>
                            <p class="section_normale_text">
                                Aucune garantie n’est demandée.
                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">Coût du financement / de l’opération</h2>
                            <p class="section_normale_text">
                                Subvention


                            </p>
                        </div>



                    </div>
                    <div class="col">
                        <h2 class="blue-section-title">Documents nécessaires </h2>
                        <p class="section_normale_text">
                        <p>Formulaire de candidature en ligne&nbsp;:</p>
                        <p><a href="https://marocpme.gov.ma/tatwir-startup/" target="_blank">TATWIR&ndash;Startup -
                                MarocPME</a></p>


                        </p>
                    </div>
                    <br>

                    <h2 class="blue-section-title">
                        Contact
                    </h2>
                    <ul class="section_normale_contact_list">
                        <li>
                            <span class="section_normale_contact_list_icon "><i
                                    class="las la-phone position-absolute top-50 start-50 translate-middle"></i></span>
                            <a href="Tel :0802 00 00 05">08 02 00 00 05 </a>

                        </li>
                        <li>
                            <span class="section_normale_contact_list_icon"><i
                                class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a href="mailto:marocpme@marocpme.gov.ma">marocpme@marocpme.gov.ma</a>
                            </li>

                        <li><span class="section_normale_contact_list_icon"><i
                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>3,
                            Av. Annakhil, 457 Lot 11, Parcelle N°3, Hay Riad, Rabat
                        </li>

                    </ul>

                </div>
                <br>
                <hr class="section_hr">

                <div class="text-containet text-center">
                    <a href="https://www.marocpme.gov.ma" target="_blanck">
                        <button class="lg-btn-produit"><i class="las la-external-link-alt"></i> Visitez le site
                            Web</button>
                    </a>
                </div>
                <br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('financement/les-organismes-publics/tatwir-croissance-verte'))}}">
                    <button class="previous_btn">TATWIR CROISSANCE VERTE</button>
                </a>
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a href="{{(asset('/financement/les-organismes-publics/nawat-pr-investissement'))}}">
                        <button class="next_btn">NAWAT Préinvestissement</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
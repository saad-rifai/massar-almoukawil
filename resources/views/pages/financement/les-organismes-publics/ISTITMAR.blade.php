@section('title', 'ISTITMAR')
@section('description', " Appui à l’investissement des TPME industrielles")

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>ISTITMAR</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Objet
                    </h2>
                    <p class="section_normale_text">
                        Appui à l’investissement des TPME industrielles
                    
                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Description
                    </h2>
                    <p class="section_normale_text">
                        Le programme ISTITMAR porte sur l’appui à l’investissement des TPME industrielles, pouvant aller jusqu’à 30% du programme d’investissement. Les projets réalisés au niveau des provinces et préfectures situées en dehors de l’axe atlantique Tanger-Casablanca peuvent bénéficier d’un appui additionnel de 5%.
                    </p>
                </div>
                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Cible
                            </h2>
                            <p>
                        TPME existantes ou en amorçage ayant un projet de développement à fort impact.

                            </p>

                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Critères d’éligibilité
                            </h2>
                            <p class="section_normale_text">
                                <ul>
                                    <li>PME ayant un chiffre d&rsquo;affaires annuel entre 10 MDH et 200 MDH.</li>
                                    <li>TPE ayant un chiffre d&rsquo;affaires annuel inf&eacute;rieur ou &eacute;gal &agrave; 10 MDH.</li>
                                    <li>Op&eacute;rant dans l&rsquo;industrie.</li>
                                    <li>Remplissant les conditions de transparence ( inscription au Registre de commerce, r&eacute;gularit&eacute; de la situation vis-&agrave;-vis de l&rsquo;administration fiscale et de la CNSS).</li>
                                    </ul>
                            </p>
                        </div>

                    </div>
            
                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title"> Plafond de financement </h2>
                            <p>
                                <p>Maroc PME contribue au projet d&rsquo;investissement de l&rsquo;entreprise &agrave; travers une prime de&nbsp;:</p>
                                <ul>
                                <li>20% du montant total de l&rsquo;investissement avec un plafond de 10 MDH pour la PME.</li>
                                <li>30% du montant total de l'investissement avec un plafond de 2 MDH pour la TPE.</li>
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
                                Aucune garantie n’est demandée : signature d’un contrat de croissance.
                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">Coût du financement / de l’opération</h2>
                            <p class="section_normale_text">
                                Prise en charge totale du coût de l’accompagnement.


                            </p>
                        </div>



                    </div>
                    <div class="col">
                        <h2 class="blue-section-title">Documents nécessaires </h2>
                        <p class="section_normale_text">
                            <p>Formulaire de candidature en ligne&nbsp;:</p>
                            <p><a href="https://marocpme.gov.ma/istitmar/istitmar-pme/" target="_blank" >ISTITMAR PME - MarocPME</a></p>
                            <p><a href="https://marocpme.gov.ma/istitmar/istitmar-tpe/" target="_blank">ISTITMAR TPE - MarocPME</a></p>

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
                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>marocpme@marocpme.gov.ma</a>
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
                <a href="{{(asset('financement/les-organismes-publics/nawat-pr-investissement'))}}">
                    <button class="previous_btn">NAWAT Préinvestissement</button>
                </a>
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a href="{{(asset('/financement/les-organismes-publics/mouwakaba-conseil-et-expertise-technique'))}}">
                        <button class="next_btn">MOUWAKABA CET </button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
@section('title', 'NAWAT Préinvestissement')
@section('description', " une offre d’accompagnement destinée aux très petites entreprises, porteurs de projets et auto-entrepreneurs. Les actions d’accompagnement «NAWAT» sont réalisées par des experts et des conseillers techniques.")

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>NAWAT Préinvestissement</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Objet
                    </h2>
                    <p class="section_normale_text">
                        une offre d’accompagnement destinée aux très petites entreprises, porteurs de projets et auto-entrepreneurs. Les actions d’accompagnement «NAWAT» sont réalisées par des experts et des conseillers techniques.                   
                     </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Description
                    </h2>
                    <p class="section_normale_text">
                        <p>Le programme &laquo;&nbsp;<strong>Nawat&nbsp;</strong>&raquo; vise &agrave; accompagner les porteurs de projets, les AE et les TPE dans le d&eacute;veloppement et la mise en &oelig;uvre de leur vision entrepreneuriale autour de deux phases&nbsp;:</p>
                        <ul>
                        <li><strong>Phase de pr&eacute;-cr&eacute;ation</strong>: Un accompagnement visant la sensibilisation, l&rsquo;accompagnement entrepreneurial et l&rsquo;appui &agrave; la formalisation des cibles (renforcement des comp&eacute;tences entrepreneuriales et manag&eacute;riales, conseil sur la forme juridique la plus adapt&eacute;e au projet, &eacute;tude de march&eacute; cibl&eacute;, montage financier, etc.).</li>
                        <li><strong>Phase de post-cr&eacute;ation&nbsp;: </strong>Un accompagnement des AE et des TPE ayant r&eacute;ussi &agrave; r&eacute;aliser leurs investissements en vue de renforcer leurs comp&eacute;tences.</li>
                        </ul>
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
                                    <li>Porteurs de projets</li>
                                    <li>Auto-entrepreneur</li>
                                    <li>TPE</li>
                                    </ul>

                            </p>

                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Critères d’éligibilité
                            </h2>
                            <p class="section_normale_text">
                                Porteurs de projets, AE et TPE que ce soit en amorçage ou en développement de leurs activités.
                            </p>
                        </div>

                    </div>
            
                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title"> Plafond de financement </h2>
                            <p>
                                Maroc PME prend en charge le coût total des actions d’accompagnement.
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
                                Prise en charge totale du coût de l’accompagnement.


                            </p>
                        </div>



                    </div>
                    <div class="col">
                        <h2 class="blue-section-title">Documents nécessaires </h2>
                        <p class="section_normale_text">
                            <p>Formulaire de candidature en ligne&nbsp;:</p>
                            <p><a href="https://candidatures.marocpme.gov.ma/" target="_blank">https://candidatures.marocpme.gov.ma/</a></p>
                            

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
                <a href="{{(asset('financement/les-organismes-publics/tatwir-startup'))}}">
                    <button class="previous_btn">TATWIR STARTUP</button>
                </a>
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a href="{{(asset('/financement/les-organismes-publics/ISTITMAR'))}}">
                        <button class="next_btn">ISTITMAR </button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
@section('title', 'BP GREEN INVEST')
@section('description', " Financement des investissement liés à l’économie verte visant à réduire l’empreinte carbone et à améliorer la compétitivité des entreprises tant celles opérant sur le marché local que celles dont la production est orientée à l’export.  ")

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>BP GREEN INVEST</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Objet
                    </h2>
                    <p class="section_normale_text">
                        Financement des investissement liés à l’économie verte visant à réduire l’empreinte carbone et à améliorer la compétitivité des entreprises tant celles opérant sur le marché local que celles dont la production est orientée à l’export.  
                    </p>
                </div>

                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Cible
                            </h2>
                            <p>
                                TPME et ETI de tous les secteurs d’activité hors promotion immobilière dont le chiffre d’Affaires ne dépasse pas 500 millions de DH.
 
                            </p>

                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Critères d’éligibilité
                            </h2>
                            <p class="section_normale_text">
                                <p>Les investissements &eacute;ligibles sont &eacute;nergies renouvelables, efficacit&eacute; &eacute;nerg&eacute;tique, Economie des ressources et valorisation des d&eacute;chets.&nbsp;</p>
                                <p><strong>Utilisation conjointe avec d&rsquo;autres produits&nbsp;:</strong></p>
                                <p>Possibilit&eacute; de cumul avec d&rsquo;autres m&eacute;canismes (Tatwir Croissance Verte de Maroc PME et Green Invest de Tamwilcom pour b&eacute;n&eacute;ficier des avantages offerts (cout de sortie, subvention&hellip;) ou d&rsquo;adosser ce cr&eacute;dit a la ligne GVC pour b&eacute;n&eacute;ficier de l&rsquo;assistance Technique et la subvention.</p>
                             </p>
                        </div>

                    </div>
                    <br>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title"> Modalités de remboursement </h2>
                            <p>
                                Crédits d’investissement allant jusqu’à 12 ans avec un différé de remboursement jusqu'à 4 ans. 
                                
                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title"> Coût de financement  </h2>
                            <p>
                                Possibilité de choix entre taux fixe et taux variable avec possibilité de changement une seule fois sur la durée du prêt. Gratuite des frais de dossier
                                
                            </p>
                        </div>

          
                    </div>

                    <br>
                    <div class="col">
                        <h2 class="blue-section-title"> Plafond de financement </h2>
                        <p>
                            Quotité pouvant atteindre 90% pour les projets d’extension et 80 % pour les nouvelles créations 
                            
                        </p>
                    </div>
                    <br>
                    <div class="col">
                        <h2 class="blue-section-title"> Assistance technique   </h2>
                        <p>
                            Sensibilisation et formation technique a travers le CLUSTER SOLAIRE dans le cadre de la convention de partenariat BCP-CLUSTER SOLAIRE 
                            Evaluation de l’éligibilité des dossiers par les experts de l’AMEE dans le cadre de la convention de partenariat BCP-AMEE
                            
                          
                        </p>
                    </div>
                    <div class="col">
                        <h2 class="blue-section-title">Conseil et prise en charge    </h2>
                        <p>
                            Force de vente experte en matière de financement des investissements de l’économie verte (conseil, montage et optimisation)
                        </p>
                    </div>
      

                    <h2 class="blue-section-title">
                        Contact
                    </h2>
                    <div class="row">
                        <div class="col">
                            <ul class="section_normale_contact_list">



                                <li><span class="section_normale_contact_list_icon">
                                    <i class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                    <a href="mailto:mghezala@cpm.co.ma"> mghezala@cpm.co.ma   </a> / <a href="mailto:ddhaloomal@cpm.co.ma">ddhaloomal@cpm.co.ma   </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <br>
                </div>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('/financement/le-financement-de-l-conomie-verte/ISTIDAMA'))}}">
                    <button class="previous_btn">ISTIDAMA</button>
                </a>
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a
                        href="{{(asset('/financement/le-financement-de-l-conomie-verte/plan-green'))}}">
                        <button class="next_btn">PLAN GREEN </button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
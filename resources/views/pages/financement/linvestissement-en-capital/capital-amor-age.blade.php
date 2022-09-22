@section('title', 'Capital Amorçage')
@section('description', "Le capital-Amorçage a pour objectif de financer les premiers besoins de trésorerie de l'entreprise.")

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Capital Amorçage</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Objet
                    </h2>
                    <p class="section_normale_text">
                        Le capital-Amorçage a pour objectif de financer les premiers besoins de trésorerie de l'entreprise.

                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Description
                    </h2>
                    <p class="section_normale_text">
                        C’est un investissement en fonds propres, minoritaire et temporaire finançant les dépenses préalables à la création d'une entreprise (recherche-développement, études de faisabilité, études de marchés, brevets, réalisation de maquette ou de prototype…)
                    </p>
                </div>
                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Cible
                            </h2>
                            <p class="section_normale_text">
                                Les jeunes entreprises innovantes (JEI)
                                Coopératives, Agriculteurs, Personnes morales, GIE, 
                                

                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Critères d’éligibilité
                            </h2>
                            <p class="section_normale_text">
                                Présentation d’un projet d’investissement de création ou de développement viable.  <br>
                                Ne pas être en situation contentieuse avec un autre organisme financier.
                                
                            </p>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title"> Plafond de financement </h2>
                            <p class="section_normale_text">
                                Le montant d’investissement est déterminé en fonction des dépenses à engager dans le cadre du projet et des possibilités de remboursements dégagées par la rentabilité prévisionnelle. 
                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Modalités de remboursement </h2>
                            <p class="section_normale_text">
                                A la sortie.  
                            
                            </p>
                        </div>
                    </div>
                    <br>
                    <div class="col">
                        <h2 class="blue-section-title">Durée du financement </h2>
                        <p class="section_normale_text">
                            La durée réelle varie en fonction du rythme d’acquisitions, de la conjoncture économique et des capacités de l’équipe de gestion en matière de sorties. Elle est jugée entre 1 an et 5 ans. 
                        
                        </p>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">Conditions de garanties </h2>
                            <p class="section_normale_text">
                                Aucune garantie exigée ni du promoteur ni de l’entreprise elle-même, La seule garantie la rentabilité constatée lors de l’évaluation du projet.


                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">Coût du financement / de l’opération</h2>
                            <p class="section_normale_text">
                                Dilution de Capital.
                            </p>
                        </div>
                    </div>
                    <br>
                    <h2 class="blue-section-title"> Documents nécessaires </h2>
                    <p class="section_normale_text">
                        <ul>
                            <li>L&rsquo;engagement de confidentialit&eacute;</li>
                            <li>La lettre d&rsquo;intention</li>
                            <li>Le protocole d&rsquo;investissement</li>
                            <li>La convention de garantie active et passive</li>
                            <li>Le pacte d&rsquo;actionnaire</li>
                            <li>Dossier juridique de constitution + PV modificatifs le cas &eacute;ch&eacute;ant.</li>
                            <li>Liasses fiscales des trois derniers exercices et une situation provisoire le cas &eacute;ch&eacute;ant.</li>
                            <li>Business plan</li>
                            </ul>
                    </p>
                </div>
                <br>


                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Contact
                            </h2>
                            <p class="section_normale_text"> <a href="{{asset('contacts/les-investisseurs-en-capital')}}">voir liste des
                                    contacts <i class="fas fa-external-link"></i></a>
                            </p>

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
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a href="{{(asset('/financement/linvestissement-en-capital/capital-risque'))}}">
                        <button class="next_btn">Capital Risque</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
@section('title', 'Capital Risque')
@section('description', "le capital-risque permet aux entreprises de bénéficier de fonds à un stade de développement où il est souvent difficile d'obtenir des prêts à moyen et long terme. ")

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Capital Risque</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Objet
                    </h2>
                    <p class="section_normale_text">
                        le capital-risque permet aux entreprises de bénéficier de fonds à un stade de développement où il est souvent difficile d'obtenir des prêts à moyen et long terme.

                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Description
                    </h2>
                    <p class="section_normale_text">
                        Le capital-risque est un financement un financement en fonds propres ou quasi fonds propres dans des entreprises en création ou en phase de démarrage de l’activité. Le principal risque pour les investisseurs est de ne jamais trouver acquéreur pour revendre leurs actions si l'entreprise ne se développe pas, ou de tout perdre si la société est dissoute. Néanmoins, les gains dont ils peuvent bénéficier sont susceptibles de dépasser leurs espérances si l'entreprise connaît le succès escompté.
  

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
                                Coopératives, Agriculteurs, Personnes morales, Personnes Physiques, GIE, 
                                
                                

                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Critères d’éligibilité
                            </h2>
                            <p class="section_normale_text">
                                Les jeunes entreprises innovantes (JEI) <br>
                                Coopératives, Agriculteurs, Personnes morales, Personnes Physiques, GIE, 
                                
                                
                            </p>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title"> Plafond de financement </h2>
                            <p class="section_normale_text">
                                Le montant d’investissement est déterminé en fonction des dépenses à engager dans le cadre du démarrage de l’activité de l’entreprise.
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
                                Aucune garantie n’est exigée ni du promoteur ni de l’entreprise elle-même. La seule garantie la rentabilité constatée lors de l’évaluation du projet.
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
                <a href="{{(asset('/financement/linvestissement-en-capital/capital-amor-age'))}}">
                    <button class="previous_btn">Capital Amorçage</button>
            </a>
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a href="{{(asset('/financement/linvestissement-en-capital/capital-d-veloppement'))}}">
                        <button class="next_btn">Capital Développement </button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
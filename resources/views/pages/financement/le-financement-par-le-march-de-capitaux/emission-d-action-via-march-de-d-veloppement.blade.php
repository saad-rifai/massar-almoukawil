
@section('title', 'Emission D’action via Marché de développement')
@section('description', "L’introduction en Bourse pour une Entreprise par émission d’actions vous permet de lever des capitaux sur le marché et donc de financer votre développement.")

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Emission D’action via Marché de développement </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Objet
                    </h2>
                    <p class="section_normale_text">
                        L’introduction en Bourse pour une Entreprise par émission d’actions vous permet de lever des capitaux sur le marché et donc de financer votre développement.
                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Description
                    </h2>
                    <p class="section_normale_text">
                        Ce Mode de financement définie la capacité de lever des capitaux sur le marché au fur et à mesure de vos besoins, à des conditions de marché souvent avantageuses. Cette solution est accessible aux entreprises de taille moyenne.
                    </p>
                </div>
                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Cible
                            </h2>
                            <p class="section_normale_text">
                                Personnes morales, 
                                
                                

                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Critères d’éligibilité
                            </h2>
                            <p class="section_normale_text">
                                Présentation d’un projet d’investissement de développement viable.    
                            </p>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title"> Plafond de financement </h2>
                            <p class="section_normale_text">
                                Correspond au Montant minimum à émettre 
                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Modalités de remboursement </h2>
                            <p class="section_normale_text">
                                A date de souscription d’un ordre de vente par le détenteur  
                            </p>
                        </div>
                    </div>
                    <br>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">Conditions de garanties </h2>
                            <p class="section_normale_text">
                                Aucune garantie n’est demandée 
                            
                            </p>
                        </div>
                       
                    </div>
                    <br>
                    <div class="col">
                        <h2 class="blue-section-title">Conditions d’admission  </h2>
                        <p class="section_normale_text">
                            <ul>
                                <li>Capitaux propres minimum&nbsp;: Pas de limite Fixe</li>
                                <li>Chiffre d&rsquo;affaire minimum&nbsp;: Pas de limite Fixe</li>
                                <li>Nombre d&rsquo;exercice certifi&eacute;&nbsp;: 2</li>
                                <li>Compte consolid&eacute;&nbsp;: facultatif</li>
                                <li>Nombre Minimum de titre &agrave; &eacute;mettre&nbsp;: 100&nbsp;000 Actions</li>
                                <li>Montant Minimum &agrave; &eacute;mettre&nbsp;: 25 MDH</li>
                                <li>Convention d&rsquo;animation&nbsp;: 1 Ann&eacute;e</li>
                                </ul>
                        </p>
                    </div>
                    <br>
      
                    <br>
                    <h2 class="blue-section-title"> Documents nécessaires </h2>
                    <p class="section_normale_text">
                        <ul>
                            <li>Un rapport d&rsquo;&eacute;valuation de l&rsquo;entreprise</li>
                            <li>Dossier juridique de constitution + PV modificatifs le cas &eacute;ch&eacute;ant.</li>
                            <li>Liasses fiscales des trois derniers exercices et une situation provisoire le cas &eacute;ch&eacute;ant.</li>
                            <li>Business plan</li>
                            <li>Note d&rsquo;information</li>
                            <li>Pr&eacute;parer une compagnie d&rsquo;information</li>
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

            
                    <br>
                </div>

                <br>
                <br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('/financement/le-financement-par-le-march-de-capitaux/emission-d-actions-via-appel-publique-l-pargne'))}}">
                    <button class="previous_btn">Emission D’actions via appel publique à l’épargne</button>
            </a>
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a href="{{(asset('/financement/le-financement-par-le-march-de-capitaux/emission-d-action-via-march-alternatif'))}}">
                        <button class="next_btn">Emission D’action via Marché Alternatif </button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
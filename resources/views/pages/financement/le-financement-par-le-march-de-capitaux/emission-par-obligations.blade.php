
@section('title', 'Emission par Obligations')
@section('description', "Le financement par émission d’obligation permet à une Entreprise de diversifier ses sources de financement et d’avoir accès au fond supplémentaire en s’adressant à une multitude d’investisseurs.")

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Emission par Obligations</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Objet
                    </h2>
                    <p class="section_normale_text">
                        Le financement par émission d’obligation permet à une Entreprise de diversifier ses sources de financement et d’avoir accès au fond supplémentaire en s’adressant à une multitude d’investisseurs.
                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Description
                    </h2>
                    <p class="section_normale_text">
                        Les obligations sont des titres négociables permettant à l'entreprise d'obtenir des fonds pendant une durée déterminée et entraînant l'obligation de payer un intérêt (coupon) et de rembourser le principal selon des modalités de l’émission (à l’échéance ou par amortissement). Il y a lieu de noter qu’il existe deux types de risques : Risque de défaut et le Risque de taux.                    
                    </p>
                </div>
                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Cible
                            </h2>
                            <p class="section_normale_text">
                                Personnes morales
                                
                                

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
                                <p>Ils sont de trois&nbsp;:</p>
                                <ul>
                                <li>Le remboursement in fine</li>
                                <li>Le remboursement constant du capital</li>
                                <li>Le remboursement progressif du capital</li>
                                </ul>                            
                            </p>
                        </div>
                    </div>
                    <br>
                    <div class="col">
                        <h2 class="blue-section-title">Durée  </h2>
                        <p class="section_normale_text">
                            C’est le temps compris entre la date de jouissance, date à laquelle les intérêts commencent à courir, et le dernier flux en capital.
                        
                        </p>
                    </div>
                    <br>
                    <div class="row">

                        <div class="col">
                            <h2 class="blue-section-title">Coût du financement </h2>
                            <p class="section_normale_text">
                                Entre 2,5 et 5 % en dehors des frais bancaires et autres intermédiaires                             
                            </p>
                        </div>
                       
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
                                <li>Capitaux propres minimum&nbsp;: 100 MDH</li>
                                <li>Montant Minimum par tranche : 20 MDH</li>
                                <li>Nombre d&rsquo;exercice certifi&eacute;&nbsp;: 1</li>
                                <li>Compte consolid&eacute;&nbsp;: Oui, si l&rsquo;E/SE dispose de filiale</li>
                                <li>Maturit&eacute; minimale des titres&nbsp;: 2 ans</li>
                                </ul>
                    </div>
                    <br>
      
                    <br>
                    <h2 class="blue-section-title"> Documents nécessaires </h2>
                    <p class="section_normale_text">
                        <ul>
                            <li>Dossier juridique de constitution + PV modificatifs le cas &eacute;ch&eacute;ant.</li>
                            <li>Liasses fiscales des trois derniers exercices et une situation provisoire le cas &eacute;ch&eacute;ant.</li>
                            <li>Business Plan</li>
                            <li>Rapport du CAC</li>
                            <li>Inventaire des actifs</li>
                            <li>Contrat de liquidit&eacute;, selon l&rsquo;exigence</li>
                            <li>Contrat d&rsquo;apport de liquidit&eacute;, selon l&rsquo;exigence</li>
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
                <a href="{{(asset('/financement/le-financement-par-le-march-de-capitaux/emission-d-action-via-march-alternatif'))}}">
                    <button class="previous_btn">Emission D’action via Marché Alternatif</button>
            </a>
            </div>
            <div class="col">
                

            </div>
        </div>
        <hr>
        @include('assets.footer')
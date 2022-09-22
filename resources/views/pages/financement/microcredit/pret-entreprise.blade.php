@section('title', 'Prêt Entreprise ')
@section('description', " Prêt destiné au financement de l’acquisition d’un véhicule nécessaire à l’exercice des
activités
professionnelles. ")

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Prêt Entreprise </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Objet
                    </h2>
                    <p class="section_normale_text">
                    Prêt destiné au financement du besoin en fonds de roulement et des investissements. 
                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Description
                    </h2>
                    <p class="section_normale_text">
                        Le produit permettant de répondre aux besoins exprimés par des clients qui souhaitent financer leurs
                        investissements et couvrir leurs besoins d'exploitation. 
                    </p>
                </div>
                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Cible
                            </h2>
                            <p class="section_normale_text">
                                Tout client (Nouveau ou Renouvelant) ayant des
                                besoins de financement compris entre 50 000 Dh et
                                150 000 DH et répondant aux conditions d'éligibilité
                                définies : <br>
                                <ul>
                                    <li>Micro entrepreneur</li>
                                    <li>TPE (Personne physique et morale)</li>
                                </ul>
                             

                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Critères d’éligibilité
                            </h2>
                            <p class="section_normale_text">
                                - Etre âgé entre 18 ans et 70 ans <br>
                                - Disposer d'une activité génératrice de revenus <br>
                                - Disposer d’un compte bancaire <br>
                                - Disposer d’un minimum de formalisme : <br>
                                - Être inscrit dans le registre de commerce; <br>
                                - Disposer du statut d’auto-entrepreneur ;<br>
                                - Être assujetti à la taxe professionnelle ;<br>
                                - Être inscrit dans des registres professionnels gérés par des
                                  instances gouvernementales ou des instances indépendantes
                                  reconnues par les autorités ;<br>
                                - Disposer d’une autorisation d’exercer ou d’un agrément
                                professionnel octroyé par une autorité gouvernementale ou
                                locale reconnue.
                            </p>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title"> Plafond de financement </h2>
                            <p class="section_normale_text">
                                150 000 Dhs
                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Modalités de remboursement </h2>
                            <p class="section_normale_text">
                                De 1 an à 7 ans amortissable 

                            </p>
                        </div>
                    </div>
                    <br>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">Conditions de garanties </h2>
                            <p class="section_normale_text">
                                Liste des garanties demandées pour bénéficier du produit <br>
                                <ul>
                                    <li>Caution Solidaire (Personne morale)</li>
                                    <li>Nantissement de fond de commerce (Personne physique et morale)</li>
                                </ul>

                 

                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">Coût du financement / de l’opération</h2>
                            <p class="section_normale_text">
                                - Taux d'intérêt : Entre 9,5% et 14% <br>
                                - Frais de dossier : Entre 900 Dhs et 2000 Dhs <br>
                                - Assistance : Célibataire 6,5 Dhs / Marié : 10 Dhs par mois (Personne physique) <br>
                                - Fond de sinistre : 0,8 % du montant du prêt <br>
                                - Commission d'engagement : 1,5 % du capital financé 
                            </p>
                        </div>
                    </div>
                    <br>
                    <h2 class="blue-section-title"> Documents nécessaires </h2>
                    <p class="section_normale_text">
                        <ul>
                            <li>Copie de la carte d’identité nationale</li>
                            <li>Justificatif d’adresse original (Quittance Eau/Electricité ou le certificat de résidence)</li>
                            <li>Attestation de RIB ou spécimen de chèque</li>
                            <li> Identifiant du certificat des impôts éventuellement = Attestation d'Inscription à la taxe Professionnelle</li>
                            <li>Justificatif de formalisme</li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                         
                         
                         
                        
                         
                         Dossier juridique (Statuts pour les clients qui en disposent)
                         Justificatifs de revenus : Relevés bancaires et/ ou tout autre justificatif de revenus supplémentaires
                         Justificatifs de revenus supplémentaires (Tout autre justificatif de revenus supplémentaires / Exemples : contrat de
                        bail, location d’un agrément/terrain/appartement/ acte de donation de succession familiale/Pension de retraite/
                        Compte d’épargne)
                         Etats financiers : Etats financiers des deux dernières années cachetés et signés (pour les clients qui en disposent)
                         Pièce justificative de la garantie présentée 

                    </p>
                </div>
                <br>


                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Contact
                            </h2>
                            <p class="section_normale_text"> <a href="{{asset('contacts/microfinance')}}">voir liste des
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
                <div class="col">   
                    <a href="{{(asset('/financement/microcredit/pret-voiture'))}}">
                        <button class="previous_btn">Prêt voiture</button>
                </a></div>
            </div>
            <div class="col">
   

            </div>
        </div>
        <hr>
        @include('assets.footer')
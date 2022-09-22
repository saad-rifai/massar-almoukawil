@section('title', 'Prêt voiture')
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
                    <h1>Prêt voiture</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Objet
                    </h2>
                    <p class="section_normale_text">
                        Prêt destiné au financement de l’acquisition d’un véhicule nécessaire à l’exercice des activités
                        professionnelles.
                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Description
                    </h2>
                    <p class="section_normale_text">
                        destiné aux entreprises et professionnels qui souhaitent financer l'acquisition d'un véhicule
                        pour
                        l'exercice de leurs activités professionnelles.
                    </p>
                </div>
                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Cible
                            </h2>
                            <p class="section_normale_text">
                                Tout client dont le besoin
                                de financement est compris
                                entre 10 000DH et 150
                                000DH, souhaitant acquérir
                                un véhicule neuf et
                                répondant aux conditions
                                d'éligibilité définies.
                                (Personne physique ou
                                personne morale)

                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Critères d’éligibilité
                            </h2>
                            <p class="section_normale_text">
                                - Être âgé entre 18 ans et 70 ans <br>
                                Conditions minimales requises permettant l'accès au
                                financement via ce produit <br>
                                - Etre âgé entre 18 ans et 70 ans <br>
                                - Disposer d'une activité génératrice de revenus <br>
                                - Disposer d’un compte bancaire <br>
                                - Disposer d’un minimum de formalisme : <br>
                                - Être inscrit dans le registre de commerce <br>
                                - Disposer du statut d’auto-entrepreneur <br>
                                - Être assujetti à la taxe professionnelle <br>
                                - Être inscrit dans des registres professionnels gérés par des instances
                                gouvernementales ou des instances indépendantes reconnues par les autorités <br>
                                - Disposer d’une autorisation d’exercer ou d’un agrément professionnel octroyé par une
                                autorité gouvernementale ou locale reconnue.
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
                                De 6 mois à 5 ans amortissable
                            </p>
                        </div>
                    </div>
                    <br>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">Conditions de garanties </h2>
                            <p class="section_normale_text">
                            <ul>
                                <li>Carte grise barrée</li>
                                <li>Acte de délégation d'assurance vol et incendie</li>
                                <li>Caution solidaire (Personne morale)</li>
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
                        Liste des documents à fournir pour formuler une demande exhaustive pour bénéficier de
                        ce produit <br>
                    <ul>
                        <li>Justificatif de formalisme</li>
                        <li>Copie de la carte d’identité nationale</li>
                        <li>Justificatif d’adresse original (Quittance Eau/Electricité ou le certificat de résidence)
                        </li>
                        <li>Attestation de RIB ou spécimen de chèque</li>
                        <li>Facture pro forma du concessionnaire</li>
                        <li>Dossier juridique (Statuts pour les clients qui en disposent)</li>
                        <li>Identifiant du certificat des impôts éventuellement = Attestation d'Inscription à la taxe
                            Professionnelle</li>
                        <li>Justificatifs de revenus : Relevés bancaires et/ ou tout autre justificatif de revenus
                            supplémentaires</li>
                        <li>Justificatifs de revenus supplémentaires (Tout autre justificatif de revenus supplémentaires
                            / Exemples : contrat de
                            bail, location d’un agrément/terrain/appartement/ acte de donation de succession
                            familiale/Pension de retraite/
                            Compte d’épargne)</li>
                        <li>Etats financiers : Etats financiers des deux dernières années cachetés et signés (pour les
                            clients qui en disposent)</li>
                        <li>Pièce justificative de la garantie présentée</li>
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
                <a href="{{(asset('/financement/microcredit/pret-tpe'))}}">
                    <button class="previous_btn">Prêt TPE</button>
            </a></div>
            <div class="col">
    
                <div class="next-btn-box">
                    <a href="{{(asset('/financement/microcredit/pret-entreprise'))}}">
                        <button class="next_btn">Prêt Entreprise</button>
                    </a>
                </div>
            </div>
         </div>
        <hr>
        @include('assets.footer')
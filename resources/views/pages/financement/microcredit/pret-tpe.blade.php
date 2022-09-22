@section('title', 'Prêt TPE')
@section('description', " Le produit permet de répondre aux attentes des clients en leur proposant des conditions
d'éligibilité et
des garanties allégées. Ce produit fait partie de la nouvelle gamme de produits destinées aux Très Petites Entreprises
(TPE). ")

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Prêt TPE</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Objet
                    </h2>
                    <p class="section_normale_text">
                        Prêt destiné au financement du besoin en fonds de roulement et au financement des
                        investissements de
                        l’entreprise.

                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Description
                    </h2>
                    <p class="section_normale_text">
                        Le produit permet de répondre aux attentes des clients en leur proposant des conditions
                        d'éligibilité et
                        des garanties allégées. Ce produit fait partie de la nouvelle gamme de produits destinées aux
                        Très Petites Entreprises
                        (TPE).
                    </p>
                </div>
                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Cible
                            </h2>
                            <p class="section_normale_text">
                                Tout client (Nouveau
                                ou Renouvelant) dont le
                                besoin de financement est
                                compris entre 10 000 DH et
                                50 000 DH et répondant
                                aux conditions d'éligibilité
                                définies. <br> (Personne
                                physique)

                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Critères d’éligibilité
                            </h2>
                            <p class="section_normale_text">
                                - Être âgé entre 18 ans et 70 ans <br>
                                - Disposer d'une activité génératrice de revenu <br>
                                - Disposer d’un minimum de formalisme : <br>
                                -Être inscrit dans le registre de commerce; <br>
                                -Disposer du statut d’auto-entrepreneur ; <br>
                                -Être assujetti à la taxe professionnelle ; <br>
                                -Être inscrit dans des registres professionnels gérés par des instances gouvernementales
                                ou des instances indépendantes reconnues par les autorités ; <br>
                                -Disposer d’une autorisation d’exercer ou d’un agrément professionnel octroyé par une
                                autorité gouvernementale ou locale reconnue.
                            </p>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title"> Plafond de financement </h2>
                            <p class="section_normale_text">
                                50 000 Dhs
                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Modalités de remboursement </h2>
                            <p class="section_normale_text">
                                De 1 an à 5 ans amortissable
                            </p>
                        </div>
                    </div>
                    <br>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">Conditions de garanties </h2>
                            <p class="section_normale_text">
                                Signature personnelle


                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">Coût du financement / de l’opération</h2>
                            <p class="section_normale_text">
                                - Taux d'intérêt : Entre 16% et 20,5% <br>
                                - Frais d'accompagnement : Entre 1,75% et 3% <br>
                                - Frais de dossier : 150 Dhs <br>
                                - Assistance : Célibataire 6,5 Dhs / Marié : 10 Dhs par mois <br>
                                - Fond de sinistre : 0,8 % du montant du prêt <br>
                                - Commission d'engagement : 1,5 % du capital financé
                            </p>
                        </div>
                    </div>
                    <br>
                    <h2 class="blue-section-title"> Documents nécessaires </h2>
                    <p class="section_normale_text">
                        - Copie de la carte d’identité nationale <br>
                        - Justificatif d’adresse original (Quittance Eau/Electricité ou le certificat de résidence) <br>
                        - Justificatif de formalisme <br>
                        - Justificatifs de revenus <br>
                        - Justificatifs de revenus supplémentaires (Tout autre justificatif de revenus supplémentaires /
                        Exemples : contrat de
                        bail, location d’un agrément/terrain/appartement/ acte de donation de succession
                        familiale/Pension de retraite/
                        Compte d’épargne) <br>
                        - Pièce justificative de la garantie présentée
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
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a href="{{(asset('/financement/microcredit/pret-voiture'))}}">
                        <button class="next_btn">Prêt voiture</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
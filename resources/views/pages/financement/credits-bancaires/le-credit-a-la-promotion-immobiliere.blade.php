@section('title', 'Le crédit à la promotion immobilière')
@section('description', ' Financer des projets de promotion immobilière. ')

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Le crédit à la promotion immobilière</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Objet
                    </h2>
                    <p class="section_normale_text">
                        Financer des projets de promotion immobilière.
                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Description
                    </h2>
                    <p class="section_normale_text">
                        Il peut être l’objet de : <br>
                    <ul>
                        <li>L’acquisition d’un terrain nu.</li>
                        <li>Lotissement de terrain en vue de la commercialisation.</li>
                        <li>Construction d’immeubles / villas / résidences en vue de la commercialisation.</li>
                    </ul>


                    </p>
                </div>
                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Cible
                            </h2>
                            <p class="section_normale_text">
                                Promoteurs immobiliers


                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Critères d’éligibilité
                            </h2>
                            <p class="section_normale_text">
                                Présentation d’un projet de promotion immobilière
                                viable. <br>
                                Ne pas être en situation contentieuse avec un autre
                                organisme financier.

                            </p>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title"> Plafond de financement </h2>
                            <p class="section_normale_text">
                                Le montant de crédit est déterminé en fonction des dépenses à engager dans le cadre du
                                projet et des possibilités
                                de remboursements dégagées par la rentabilité prévisionnelle.

                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Modalités de remboursement </h2>
                            <p class="section_normale_text">
                                Les remboursements se font via un échéancier et/ou via un pourcentage sur le produit des
                                ventes contre
                                délivrance de main levée sur les titres fonciers parcellaires.



                            </p>
                        </div>
                    </div>
                    <br>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">Conditions de garanties </h2>
                            <p class="section_normale_text">
                                Hypothèque sur bien immobilier à financer. <br>
                                Délégation d’assurance tout risque chantier. <br>
                                Autres garanties librement négociables entre la banque et l’entreprise



                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">Coût du financement / de l’opération</h2>
                            <p class="section_normale_text">
                                Taux d’intérêt calculé sur le capital restant dû qui est librement négociable entre la
                                banque et l’entreprise.
                                A noter que les taux d’intérêts dépendent également de la notation attribuée à
                                l’entreprise par la banque.


                            </p>
                        </div>
                    </div>
                    <br>
                    <h2 class="blue-section-title"> Documents nécessaires </h2>
                    <p class="section_normale_text">

                        Dossier juridique de constitution + PV modificatifs le cas échéant. <br>
                    <ul>
                        <li>Business plan contenant une description détaillées du projet et des prévisions futures.</li>
                        <li>Situation des projets déjà réalisés.</li>
                        <li>Compromis de vente si bien à acquérir.</li>
                        <li>Devis des constructions et aménagements + autorisations de construire + jeu de plans
                            approuvés.</li>
                    </ul>
                    <br>
                    Pour les affaires existantes fournir en plus les documents suivants :
                    <br>
                    <ul>
                        <li> Contrat de loyer + dernière quittance de loyer / Certificat de propriété des locaux
                            d’exploitation existants.</li>
                        <li>Liasses fiscales des trois derniers exercices et une situation provisoire le cas échéant.
                        </li>
                        <li> Relevés bancaires + Situation des engagements auprès des autres partenaires financiers.
                        </li>

                    </ul>


                    </p>

                    <h2 class="blue-section-title">
                        Contact
                    </h2>
                    <p class="section_normale_text"> <a href="{{asset('contacts/banques-classiques')}}">voir liste des
                            contacts <i class="fas fa-external-link"></i></a>
                    </p>

                </div>
                <br>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('financement/credits-bancaires/le-credit-de-fonctionnement-amortissable'))}}">
                    <button class="previous_btn">crédit de fonctionnement amortissable</button>
                </a>
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a href="{{(asset('financement/credits-bancaires/le-credit-de-consolidation'))}}">
                        <button class="next_btn">crédit de consolidation</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
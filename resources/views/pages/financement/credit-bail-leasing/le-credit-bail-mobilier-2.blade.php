@section('title', ' le crédit-bail mobilier')
@section('description', '   le crédit-bail immobilier est un moyen d’acquérir ou de faire construire tout bien immobilier à usage
professionnel selon un contrat de bail de longue durée')

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>le crédit-bail immobilier</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Objet
                    </h2>
                    <p class="section_normale_text">
                        - Lease back Mobilier <br>
                        - Lease back Immobilier
                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Description
                    </h2>
                    <p class="section_normale_text">
                        Le bailleur (L’organisme de crédit-bail) acquiert auprès de vous un bien dont vous êtes déjà propriétaire et vous le
                        met à disposition en location dans le cadre d’un contrat leasing moyennant des loyers, avec une option d’achat en
                        fin de contrat (la valeur résiduelle).
                    </p>
                </div>
                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Cible
                            </h2>
                            <p class="section_normale_text">
                                Professions libérales, TPE, PME,
                                Coopératives, Agriculteurs,
                                Personnes physiques, Personnes
                                morales, GIE. <br>
                                - Actif immobilier construit
                                ou à construire <br>
                                - Actif mobilier 
  
                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Critères d’éligibilité
                            </h2>
                            <p class="section_normale_text">
                                La clientèle ciblée doit satisfaire certaines conditions : <br><br>
                                - Société structurée.  <br>
                                - Situation financière saine. <br>
                                - Bonne moralité des dirigeants. <br>
                                - Historique favorable avec les organismes financiers. <br>
                                - Bonne capacité de remboursement par rapport au financement
                                sollicité. <br>
                                L’actif à financer : Matériel neuf en général, d’origine locale ou
                                importée  <br>
                                Biens immeubles anciens ou neufs, à usage strictement
                                professionnel
                                

                            </p>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title"> Plafond de financement </h2>
                            <p class="section_normale_text">
                                Quotité de financement : jusqu’à 100% du montant de l’expertise, elle est déterminée en fonction du
                                montant d’investissement, de la capacité de remboursement, de la rentabilité prévisionnelle, du secteur
                                d’activité et de l’expérience et l’historique des gérants

                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Modalités de remboursement </h2>
                            <p class="section_normale_text">
                                - De 3 à 5 ans pour le CBM <br>
                                - De 10 à 12 ans maximum pour le CBI
                            </p>
                        </div>
                    </div>
                    <br>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">Conditions de garanties </h2>
                            <p class="section_normale_text">
                                - Propriété des locaux à acquérir et délégation d’assurance y afférente. <br>
                                - Autres garanties librement négociables entre le loueur et l’entreprise.
                                

                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">Coût du financement / de l’opération</h2>
                            <p class="section_normale_text">
                                Prime de gain faite sur l’opération représentant la différence entre le total des loyers cumulés et la valeur
                                résiduelle par rapport au prix de financement.
                                
                            </p>
                        </div>
                    </div>
                    <br>
                    <h2 class="blue-section-title"> Documents nécessaires </h2>
                    <p class="section_normale_text">
                        Expertise du bien par un cabinet agrée 
                        <br>
                        (En plus des autres éléments cités sur les fiche CBM/CBI)

                    </p>

                    <h2 class="blue-section-title">
                        Contact
                    </h2>
                    <p class="section_normale_text"> <a href="{{asset('contacts/microfinance')}}">voir liste des
                            contacts <i class="fas fa-external-link"></i></a>
                    </p>

                </div>
                <br>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('financement/credit-bail-leasing/le-credit-bail-mobilier'))}}">
                    <button class="previous_btn">le crédit-bail immobilier</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('financement/credit-bail-leasing/le-credit-bail-mobilier/le-lease-back/'))}}">
                        <button class="next_btn">le LEASE BACK</button></a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
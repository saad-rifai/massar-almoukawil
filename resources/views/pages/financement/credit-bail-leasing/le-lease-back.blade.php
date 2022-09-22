@section('title', ' le LEASE BACK')
@section('description', '  Le bailleur (L’organisme de crédit-bail) acquiert auprès de vous un bien dont vous êtes déjà propriétaire et vous le
met à disposition en location dans le cadre d’un contrat leasing moyennant des loyers, avec une option d’achat en
fin de contrat (la valeur résiduelle).')

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>le LEASE BACK</h1>
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
                                <ul>
                                    <li> <strong>Actif immobilier construit</strong> </li>
                                    <li> <strong>ou à construire</strong> </li>
                                    <li> <strong>Actif mobilier </strong> </li>
                                </ul>
                         
  
                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Critères d’éligibilité
                            </h2>
                            <p class="section_normale_text">
                                La clientèle ciblée doit satisfaire certaines conditions : <br>
                                <ul>
                                    <li>Société structurée. </li>
                                    <li>Situation financière saine.</li>
                                    <li>Bonne moralité des dirigeants.</li>
                                    <li>Historique favorable avec les organismes financiers.</li>
                                    <li>Bonne capacité de remboursement par rapport au financement.</li>
                                  
                                </ul>
                                sollicité <br>
                                <ul>
                                    <li>L’actif à financer : Matériel neuf en général, d’origine locale ou
                                        importée</li>
                                        <li>Biens immeubles anciens ou neufs, à usage strictement
                                            professionnel
                                            </li>
                                </ul>
                               
                  
                   

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
                                <ul>
                                    <li>De 3 à 5 ans pour le CBM</li>
                                    <li>De 10 à 12 ans maximum pour le CBI</li>
                                </ul>
                          
                                

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
                                    <li>Propriété des locaux à acquérir et délégation d’assurance y afférente.</li>
                                    <li>Autres garanties librement négociables entre le loueur et l’entreprise.</li>
                                </ul>
                                 
                                 
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
                        Expertise du bien par un cabinet agrée <br>
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
                <a href="{{(asset('financement/credit-bail-leasing/le-credit-bail-mobilier/2'))}}">
                    <button class="previous_btn">le crédit-bail immobilier</button>
                </a>
            </div>
            <div class="col">


            </div>
        </div>
        <hr>
        @include('assets.footer')
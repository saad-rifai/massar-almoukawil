@section('title', 'Le crédit d’investissement moyen / long terme')
@section('description', ' Le bailleur (L’organisme de crédit-bail) acquiert auprès de vous un bien dont vous êtes déjà
propriétaire et vous le
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
                    <h1>Le crédit d’investissement moyen / long terme</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Objet
                    </h2>
                    <p class="section_normale_text">
                        Crédit qui vise la création ou le développement d’une entreprise de production et/ou
                        commercialisation de biens ou
                        de services.

                    </p>
                </div>

                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Cible
                            </h2>
                            <p class="section_normale_text">
                                Professions libérales, Coopératives,
                                Agriculteurs, Personnes physiques,
                                Personnes morales, GIE


                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Critères d’éligibilité
                            </h2>
                            <p class="section_normale_text">
                                Présentation d’un projet d’investissement de création ou de
                                développement viable. Ne pas être en situation contentieuse avec un
                                autre organisme financier.



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

                            <ul>
                                <li>Moyen terme : jusqu’à 7 ans avec un différé pouvant aller jusqu’à 2 ans.</li>
                                <li>Long terme : jusqu’à 15 ans avec un différé qui peut aller jusqu’à 4 ans.</li>
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
                                Hypothèque sur bien immobilier à financer. <br>
                                Nantissement sur fonds de commerce à financer et délégation d’assurance y afférente.
                                <br>
                                Subrogation dans les privilèges du vendeur pour matériel roulant à financer et
                                délégation d’assurance y afférente. <br>
                                Nantissement de matériel pour les équipements à financer et délégation d’assurance y
                                afférente. <br>
                                Autres garanties librement négociables entre la banque et l’entreprise. <br>
                                Type de crédit pouvant être garanti par la SNGFE dans le cadre des PRODUITS DAMANE
                                EXPRESS, ILAYKI ou
                                DAMANE AISTITMAR avec des quotités de garantie allant de 60 à 80% du montant du crédit
                                dans la limite de
                                15 MDhs.

                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">Coût du financement / de l’opération</h2>
                            <p class="section_normale_text">
                                Taux d’intérêt calculé sur le capital restant dû qui est librement négociable entre la
                                banque et l’entreprise. <br>
                                A noter que les taux d’intérêts dépendent également de la notation attribuée à
                                l’entreprise par la banque.
                            </p>
                        </div>
                    </div>
                    <br>
                    <h2 class="blue-section-title"> Documents nécessaires </h2>
                    <p class="section_normale_text">
                    <ul>
                        <li>Business plan contenant une description détaillées du projet et des prévisions futures.</li>
                        <li>CV + Copie des diplômes et références professionnelles.</li>
                        <li>Promesse de bail / Compromis de vente si bien à acquérir.</li>
                        <li>Promesses de partenariat.</li>
                        <li>Devis des constructions ou aménagements + autorisations de construire + jeu de plans
                            approuvés.</li>
                        <li>Factures pro-formats des équipements, mobilier et matériel roulant à acquérir.</li>
                    </ul>
                    <br>
                    Pour les affaires existantes fournir en plus les documents suivants :
                    <br>
                    <ul>
                        <li>Dossier juridique de constitution + PV modificatifs le cas échéant.</li>
                        <li>Contrat de loyer + dernière quittance de loyer / Certificat de propriété des locaux
                            d’exploitation existants.</li>
                        <li>Liasses fiscales des trois derniers exercices et une situation provisoire le cas échéant.
                        </li>
                        <li>Etat des stocks / Situation des marchés détenus.</li>
                        <li>Relevés bancaires + Situation des engagements auprès des autres partenaires financiers.</li>
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
                
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a href="{{(asset('financement/credits-bancaires/le-credit-de-fonctionnement-amortissable'))}}">
                        <button class="next_btn">crédit de fonctionnement amortissable</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
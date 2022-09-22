@section('title', 'INTELAK')
@section('description', " Programme de financement couvrant les besoins d’investissement et de fonctionnement à des
conditions
préférentielles, destiné aux entreprises, personnes physiques ou morales, de droit marocain, remplissant les
conditions d’éligibilité.
")

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>INTELAK</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Objet
                    </h2>
                    <p class="section_normale_text">
                        Programme de financement couvrant les besoins d’investissement et de fonctionnement à des
                        conditions
                        préférentielles, destiné aux entreprises, personnes physiques ou morales, de droit marocain,
                        remplissant les
                        conditions d’éligibilité.


                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Description
                    </h2>
                    <p class="section_normale_text">
                        Financement des dépenses d’investissement relatives aux projets de création et d’extension
                        (acquisition de
                        local, de matériel et d’outillage professionnel ou agricole, fixe ou roulant, à l’état neuf ou
                        d’occasion, fonds de
                        commerce, pas de porte, brevets, constructions, etc…) 90% du coût du programme d’investissement
                        portant sur le
                        matériel neuf; et 50% sur le matériel d’occasion.
                    </p>
                </div>
                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Cible
                            </h2>
                            <p class="section_normale_text">
                                Le programme cible les
                                Auto-entrepreneurs, les
                                Petites Entreprises, les
                                Commerçants, les Artisans,
                                les Coopératives et les
                                Professions libérales pour
                                leur première installation.
                                Tous les secteurs d'activité <br>
                                à l'exclusion de la promotion
                                immobilière et de la pêche
                                hauturière.

                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Critères d’éligibilité
                            </h2>
                            <p class="section_normale_text">
                            <ul>
                                <li>Être de droit marocain quelque soit sa forme juridique (personne physique ou
                                    morale)</li>
                                <li>Avoir pour objet ou activité la production de biens et/ou de services</li>
                                <li>Être créées depuis 5 ans maximum à la date de la présentation de la demande de
                                    prêt. Cette condition ne s’applique pas aux entreprises exportatrices vers
                                    l’Afrique</li>
                                <li>Avoir un chiffre d’affaires inférieur ou égal à 10 MDH (HT) : réalisé au titre du
                                    dernier exercice clos pour les entreprises en activité ou à réaliser au titre de
                                    l’exercice en cours / à venir pour les entreprises en création.
                                    Sont éligibles aussi bien les entreprises ayant réalisées au moins 20% de leur
                                    chiffre d’affaires à l’export vers l’Afrique au titre du dernier exercice clos que
                                    celles
                                    ayant décrochées des contrats/commandes à l’export vers l’Afrique représentant au
                                    moins 10% de leur chiffre d’affaires prévisionnel au titre de l’exercice en cours/à
                                    venir

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
                                Les crédits à court terme accordés aux primo-accédants (entreprises accédant pour la
                                première fois à des crédits
                                court terme)[1] ainsi que les crédits à moyen et long terme ne dépassant pas 1,2 MDH.
                                <br>
                                () Cette exclusion ne s’applique pas aux entreprises exportatrices vers l’Afrique.
                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Modalités de remboursement </h2>
                            <p class="section_normale_text">
                                Jusqu’à 7 ans avec un différé pouvant atteindre 2 ans.

                            </p>
                        </div>
                    </div>
                    <br>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">Conditions de garanties </h2>
                            <p class="section_normale_text">
                                Les garanties à retenir sont celles liées exclusivement au projet financé. <br>
                                Aucune garantie d’ordre personnel n’est exigée. <br>
                                Crédit bénéficiant de la garantie de la CCG DAMANE INTELAK de 80% du montant du crédit.

                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">Coût du financement / de l’opération</h2>
                            <p class="section_normale_text">
                                2% HT l’année calculé sur le capital restant dû.

                            </p>
                        </div>
                    </div>
                    <br>
                    <h2 class="blue-section-title"> Documents nécessaires </h2>
                    <p class="section_normale_text">
                        Business plan complet du projet à financer + les documents juridiques de la société.
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
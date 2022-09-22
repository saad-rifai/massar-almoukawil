@section('title', 'PLAN GREEN')
@section('description', " Accompagner les programmes d’investissement en lien avec le développement durable visant
l’amélioration de l’efficacité énergétique des entreprises, leur décarbonation et la protection de l’environnement ")

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>PLAN GREEN</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Objet
                    </h2>
                    <p class="section_normale_text">
                        Accompagner les programmes d’investissement en lien avec le développement durable visant
                        l’amélioration de l’efficacité énergétique des entreprises, leur décarbonation et la protection
                        de l’environnement
                    </p>
                </div>

                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Cible
                            </h2>
                            <p>
                                TPME, GE de tous les secteurs.

                            </p>

                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Critères d’éligibilité
                            </h2>
                            <p class="section_normale_text">
                                Les investissements éligibles sont les énergies renouvelables, l’efficacité énergétique,
                                la dépollution et la gestion des déchets.
                            </p>
                        </div>

                    </div>
                    <br>

                    <table class="table">
                        <tbody>
                            <tr>
                                <th colspan="2" class="text-center td-bg-deffirent">Crédit MACHARII GREEN</th>

                            </tr>
                            <tr>
                                <th>Modalités de remboursement </th>
                                <td>Jusqu’à 12 ans dont un différé en principal de 3 ans maximum.  </td>
                            </tr>
                            <tr>
                                <th>Coût de financement </th>
                                <td>Choix entre un taux fixe et un taux variable, avec la possibilité de passer de l’un a l’autre une fois durant la durée du prêt. 
                                    Pour les entreprises opérant dans l’industrie, taux préférentiels et 50% de réduction sur les frais d’étude de dossier.</td>
                            </tr>
                            <tr>
                                <th>Plafond de financement </th>
                                <td>Financement jusqu’à 80 % du programme d’investissement lié à une extension ou à une modernisation.  <br>
                                    Financement jusqu’à 70 % du programme d’investissement lie à une création Quotité pouvant atteindre 90% pour les
                                    </td>
                            </tr>
                            <tr>
                                <th>Conseil et Assistance </th>
                                <td>Expertise d’une équipe spécialisée dans les montages de projets d’investissement pour assister dans la concrétisation des projets. </td>
                            </tr>

                            <tr>
                                <th colspan="2" class="text-center td-bg-deffirent">Crédit LEASING GREEN</th>

                            </tr>
                            <tr>
                                <th>Modalités de remboursement </th>
                                <td>jusqu’à 5 ans pour lr leasing mobilier et 10 ans pour le leasing immobilier. </td>
                            </tr>
                            <tr>
                                <th>Coût de financement </th>
                                <td>A négocier avec WAFABAIL <br>
                                    Déductibilité des loyers de la base imposable et possibilité de récupération de la TVA sur le montant des loyers et option d’achat à l’expiration. 
                                   <br> Pour les entreprises opérant dans l’industrie, exonération des frais de dossier dans le cadre du « Leasing Green »
                                    </td>
                            </tr>
                            <tr>
                                <th>Plafond de financement </th>
                                <td>Jusqu’à 100% de l’investissement 
                                    </td>
                            </tr>
              
                        </tbody>
                    </table>

                    <h2 class="blue-section-title">
                        Contact
                    </h2>
                    <div class="row">
                        <div class="col">
                            <ul class="section_normale_contact_list">



                                <li><span class="section_normale_contact_list_icon">
                                        <i
                                            class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                    <a href="mailto:m.guedira@attijariwafa.com">m.guedira@attijariwafa.com </a> 
                                </li>

                            </ul>
                        </div>
                    </div>
                    <br>
                </div>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('/financement/le-financement-de-l-conomie-verte/bp-green-invest'))}}">
                    <button class="previous_btn">BP GREEN INVEST</button>
                </a>
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a href="{{(asset('/financement/le-financement-de-l-conomie-verte/saquii-saquii-solaire-saquii-optimise'))}}">
                        <button class="next_btn">SAQUII  </button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
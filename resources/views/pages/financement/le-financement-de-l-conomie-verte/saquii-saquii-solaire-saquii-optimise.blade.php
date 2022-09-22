@section('title', 'SAQUII, SAQUII SOLAIRE, SAQUII OPTIMISE ')
@section('description', " Financement de projets d’optimisation des ressources hydrique et soutien à l’énergie solaire
portés par des individus, groupement, société opérant dans l’agriculture. ")

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>SAQUII, SAQUII SOLAIRE, SAQUII OPTIMISE </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Objet
                    </h2>
                    <p class="section_normale_text">
                        Financement de projets d’optimisation des ressources hydrique et soutien à l’énergie solaire
                        portés par des individus, groupement, société opérant dans l’agriculture.
                    </p>
                </div>

                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Cible
                            </h2>
                            <p>
                                Individus, groupements, sociétés de toute taille opérant dans le secteur de
                                l’agriculture.

                            </p>

                        </div>


                    </div>
                    <br>

                    <table class="table">
                        <tbody>
                            <tr>
                                <th colspan="2" class="text-center td-bg-deffirent">SAQUII </th>

                            </tr>
                            <tr>
                                <th>Objet </th>
                                <td>Optimisation de l’utilisation des ressources hydriques. </td>
                            </tr>
                            <tr>
                                <th>Les critères d’éligibilité </th>
                                <td>CSystème d’irrigation localisée ou de reconversion d’un système d’irrigation
                                    gravitaire en système d’irrigation localisée.</td>
                            </tr>
                            <tr>
                                <th>Offre de financement </th>
                                <td><strong>Quotité</strong> : Jusqu’à 100% du programme d’investissement <br>
                                    <strong>Durée</strong> : Jusqu’à 10 ans, avec un différé maximum de 4 ans
                                    Remboursements flexibles <br>
                                    Offres de préfinancement des aides financières des aides financières de l’Etat/ ou
                                    d’avances sur subvention du FDA

                                </td>
                            </tr>



                            <tr>
                                <th colspan="2" class="text-center td-bg-deffirent">SAQUII SOLAIRE </th>

                            </tr>
                            <tr>
                                <th>Objet </th>
                                <td>Reduction de la facture énergétique et production d’énergies renouvelables pour
                                    l’irrigation localisée. </td>
                            </tr>
                            <tr>
                                <th>Les critères d’éligibilité </th>
                                <td>Investissement dans les systèmes de pompage solaires pour irrigation localisée.
                                </td>
                            </tr>
                            <tr>
                                <th>Offre de financement </th>
                                <td>
                                    <strong>Quotité</strong> : Jusqu’à 85% du besoin d’investissement <br>
                                    <strong>Durée</strong> : Jusqu’à 10 ans, avec un différé maximum de 1 an <br>
                                    Remboursements flexibles <br>
                                    Cofinancement Tamwilcom (Green Invest) <br>
                                    Garanties Tamwilcom (Daman Express / Damane Istitmar )


                                </td>
                            </tr>


                            <tr>
                                <th colspan="2" class="text-center td-bg-deffirent">SAQUII OPTIMISE </th>

                            </tr>
                            <tr>
                                <th>Objet </th>
                                <td>
                                    Optimisation de l’utilisation des ressources hydriques dans l’irrigation localisée.    
                                </td>
                            </tr>
                            <tr>
                                <th>Les critères d’éligibilité </th>
                                <td>
                                    Installation d’une station météorologique pour rationaliser l’apport d’eau en irrigation localisée. 
                                </td>
                            </tr>
                            <tr>
                                <th>Offre de financement </th>
                                <td>
                                    <strong>Quotité</strong> : Jusqu’à 85% du besoin d’investissement <br>
                                    <strong>Durée</strong> : Jusqu’à 10 ans, avec un différé maximum de 1 an <br>
                                    Remboursements flexibles <br>
                                    Cofinancement Tamwilcom (Green Invest) <br>
                                    Garanties Tamwilcom (Daman Express / Damane Istitmar )


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
                                    <a href="mailto:dkhli@creditagricole.ma ">dkhli@creditagricole.ma  </a>
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
                <a href="{{(asset('/financement/le-financement-de-l-conomie-verte/plan-green'))}}">
                    <button class="previous_btn">PLAN GREEN</button>
                </a>
            </div>
            <div class="col">
                <div class="next-btn-box">
               
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
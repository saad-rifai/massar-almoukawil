@section('title', ' Entreprise individuelle (personne physique)
Ou société ?')


@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1> Entreprise individuelle (personne physique) Ou société ?</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        1. Entreprise individuelle (personne physique)
                    </h2>
               
                      <p><strong>Définition:</strong> entreprise exploitée par une personne physique seule, en son nom personnel, dans le but d’exercer une profession libérale ou une activité économique à petite échelle. Elle <strong>n’est pas considérée comme une société</strong>, juridiquement vos patrimoines professionnel et personnel sont confondus. Sur le plan fiscal, le chef de l’entreprise est imposé directement au titre de l’impôt sur le revenu (IR) selon le <a href="https://www.casainvest.ma/fr/j-investis/kit-de-linvestisseur/fiscalite/impot-sur-le-revenu-ir">barème <i class="fas fa-external-link"></i></a> <a href="https://www.casainvest.ma/fr/j-investis/kit-de-linvestisseur/fiscalite/impot-sur-le-revenu-ir">en vigueur <i class="fas fa-external-link"></i></a></p>
                      <p><strong>Avantages:</strong></p>
                      <ul>
                        <li>Pas d’apport minimum obligatoire</li>
                        <li>Simplicité de création</li>
                        <li>Simplicité de fonctionnement</li>
                        <li>Faible coût</li>
                        <li>Souplesse et liberté d’action pour le chef d’entreprise</li>
                        <li>Possibilité d’embaucher des salariés</li>
                      </ul>
                      <p><strong>Inconvénients:</strong></p>
                      <ul>
                        <li>Pas de personnalité morale ni de capital social</li>
                        <li>Pas d’autonomie du patrimoine : ni capital social</li>
                        <li>Pas d’associés</li>
                        <li>Risque de confusion avec le patrimoine du chef d’entreprise</li>
                        <li>Responsabilité illimitée aux dettes sociales</li>
                        <li>Absence de fonds propres</li>
                        <li>Fragilité liée à la taille modeste</li>
                        <li>Capacité de développement limitée</li>
                      </ul>

                      <h2 class="blue-section-title">
                        2. La société
                    </h2>
                
                      <p>Créer sa société donne naissance à <strong>une nouvelle personne morale</strong> dotée de la personnalité juridique distincte de vous, avec plusieurs traits caractéristiques :</p>
                      <ul>
                        <li><strong>Nom propre :</strong> une dénomination ou raison sociale</li>
                        <li><strong>Domicile :</strong> un siège social</li>
                        <li><strong>Apports :</strong> son patrimoine propre initial ou capital social</li>
                      </ul>
                   
                     
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>
                                  <p><strong>Bon à savoir</strong>: <strong>La création d’une société nécessite un accompagnement personnalisé pour s’assurer d’une bonne préparation en amont, tout particulièrement pour les projets complexes nécessitant une étude du régime fiscal, juridique, social et de change applicable.</strong></p>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                     
                  
                </div>

            
                <br>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <!--a href="{{(asset('financement/credits-bancaires/les-avances-sur-facture-ou-Factoring'))}}">
                    <button class="previous_btn">avances sur facture</button>
                </a-->
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a href="{{(asset('preparer-sa-creation/Quelles-sont-les-etapes-cles-pour-creer-sa-societe'))}}">
                        <button class="next_btn">Suivante</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
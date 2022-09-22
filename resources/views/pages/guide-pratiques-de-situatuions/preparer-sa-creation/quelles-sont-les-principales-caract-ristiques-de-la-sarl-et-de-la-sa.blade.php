@section('title', ' Quelles sont les principales caractéristiques de la sarl et de la sa ? ')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Quelles sont les principales caractéristiques de la sarl et de la sa  ? </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">

                    <table class="table">
                      <thead>
                        <tr>
                            <td>
                              
                            </td>
                            <th>
                              
                             SARL
                            </td>
                            <th>
                              
                           SA
                            </th>
                          </tr>
                      </thead>
                      
                          <tbody>
                          <tr>
                            <td>
                              
                              <p><strong>Associés</strong></p>
                            </td>
                            <td>
                              
                              <p>1 (Sarl à associé unique) jusqu’à 50</p>
                            </td>
                            <td>
                              
                              <p>5 minimum</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              
                              <p><strong>Capital social</strong></p>
                            </td>
                            <td>
                              
                              <p>Pas de capital minimum requis</p>
                            </td>
                            <td>
                              
                              <p>300 000 Dh (minimum) ou 3.000.000 000 Dh (en cas d’offre publique)</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              
                              <p><strong>Parts sociales</strong></p>
                            </td>
                            <td>
                              
                              <p>Non négociabilité</p>
                            </td>
                            <td>
                              
                              <p>Négociable (action)</p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <br>
                      <br>
                      <table class="table">
                        <thead>
                            <tr>
                                <td>
                                  
                                </td>
                                <td>
                                  
                                 SAR
                                </td>
                                <td>
                                  
                                  SA
                                </td>
                              </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <td>
                              
                              <p><strong>Responsabilité</strong></p>
                            </td>
                            <td>
                              
                              <p>Limitée à l’apport des actionnaires</p>
                            </td>
                            <td>
                              
                              <p>Limitée à l’apport des actionnaires</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              
                              <p><strong>Commissaire aux comptes</strong></p>
                            </td>
                            <td>
                              
                              <p>Si le chiffre d’affaires (HT) dépasse 50 M Dh</p>
                            </td>
                            <td>
                              
                              <p>Obligation de nommer un Commissaire aux comptes</p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <br>
                      <br>
                      <p>* Adaptée aux petites et moyennes entreprises</p>
                      <p>**Il existe deux formes de SA : avec conseil d’administration (3 membres au moins et 12 au plus) ; ou avec directoire en charge du fonctionnement et conseil de surveillance en charge de la gestion du directoire pour le compte des actionnaires.</p>
                 
                </div>


                <br>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('preparer-sa-creation/quels-sont-les-diff-rents-statuts-existants'))}}">
                    <button class="previous_btn">Précédente</button>
                </a>
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a
                        href="{{(asset('preparer-sa-creation/quelles-sont-les-principales-caract-ristiques-de-la-sca-de-la-snc-et-scs'))}}">
                        <button class="next_btn">Suivante</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
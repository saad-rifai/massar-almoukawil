@section('title', ' Quelles sont les principales caractéristiques de la sca, de la snc et scs  ?')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Quelles sont les principales caractéristiques de la sca, de la snc et scs ? </h1>
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
                                  
                              SCA – Société en Commandite par Actions
                                </th>
                                <th>
                                  
                                 SNC – Société en Nom Collectif
                                </th>
                                <th>
                                  
                                  SCS – Société en Commandite Simple (peu répandue)
                                </th>
                              </tr>
                        </thead>
                        <tbody>
     
                          <tr>
                            <td>
                              
                              
                              
                              <p><strong>Associés</strong></p>
                            </td>
                            <td>
                              
                              <p>Minimum 1 associé</p>
                              <p>commandité et 3 associés commanditaires</p>
                            </td>
                            <td>
                              
                              
                              
                              <p>1 minimum</p>
                            </td>
                            <td>
                              
                              <p>Minimum 1 associé commandité et 1 associé commanditaire</p>
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
                              
                              <p>Pas de capital minimum requis</p>
                            </td>
                            <td>
                              
                              <p>Pas de capital minimum requis</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              
                              
                              <p><strong>Parts sociales</strong></p>
                            </td>
                            <td>
                              
                              
                              <p>Actions</p>
                            </td>
                            <td>
                              
                              <p>Nominatives, cessibles avec le consentement de tous les associés</p>
                            </td>
                            <td>
                              
                              
                              <p>Apports en numéraire ou en nature</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              
                              
                              
                              
                              <p><strong>Responsabilité</strong></p>
                            </td>
                            <td>
                              
                              <p>Pour les associés commandités : Indéfinie et solidaire de dettes sociales</p>
                              <p>Pour les associés commanditaires (actionnaires) : limitée à leur apport</p>
                            </td>
                            <td>
                              
                              
                              
                              
                              <p>Indéfinie et solidaire de dettes sociales</p>
                            </td>
                            <td>
                              
                              <p>Pour les associés commandités : Indéfinie et solidaire de dettes sociales</p>
                              <p>Pour les associés commanditaires : limitée à leur apport</p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <br>
                      <br>
                      <p>Plus d’informations sur Casainvest.ma : <a href="https://www.casainvest.ma/fr/je-cr%C3%A9e/choix-du-statut-juridique">Choix du statut juridique</a></p>
                </div>


                <br>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('preparer-sa-creation/quelles-sont-les-principales-caract-ristiques-de-la-sarl-et-de-la-sa'))}}">
                    <button class="previous_btn">Précédente</button>
                </a>
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a
                        href="{{(asset('preparer-sa-creation/dans-quels-cas-opter-pour-le-r-gime-d-auto-entrepreneur'))}}">
                        <button class="next_btn">Suivante</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
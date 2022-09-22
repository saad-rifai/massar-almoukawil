@section('title', ' Quels sont les différents statuts existants  ?')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Quels sont les différents statuts existants  ? </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">

                    <p>La différence entre les sociétés de personnes et les sociétés de capitaux tient à l’importance et à la nature du rôle joué par les associés. On peut séparer les sociétés en <strong>trois grandes catégories</strong> :</p>
                    <ul>
                      <li><strong>Les sociétés de personnes</strong> : Société en nom collectif (<strong>SNC</strong>), société en commandite simple (<strong>SCS</strong>) et société en participation.</li>
                      <li>Sociétés constituées entre associés ayant une forte relation, parce que leurs intérêts sont fortement liés ou parce qu’ils collaborent effectivement et personnellement à la poursuite du but social.</li>
                      <li>Les cessions de parts sociales sont généralement soumises à accord préalable des autres associés.</li>
                      <li><strong>Les sociétés de capitaux</strong> : Société à responsabilité limitée (<strong>SARL</strong>), société anonyme (<strong>SA</strong>), société anonyme simplifiée (<strong>SAS</strong>) et société en commandite par actions (<strong>SCA</strong>).</li>
                      <li>Sociétés constituées sur la base des capitaux apportés par les associés (apport en numéraire ou en nature). Les titres de propriété représentant ces capitaux sont appelés actions et sont plus facilement transmissibles que dans une société de personnes.</li>
                      <li>La SARL est considérée comme une forme mixte, car elle accorde de l’importance à la personne des associés et aux capitaux.</li>
                      <li><strong>La succursale :</strong> possibilité pour les sociétés étrangères qui souhaitent exercer une activité au Maroc.</li>
                    </ul>
                    <p>&nbsp;</p>
                    <table class="table">
                      <tbody>
                        <tr>
                          <td>
                            <p><strong>Bon à savoir</strong> : <strong>En pratique au Maroc les formes juridiques les plus communes sont la Société à Responsabilité Limitée (SARL) et la Société Anonyme (SA). La SARL est la forme la plus répandue, avec plus de 97% des entreprises créées entre 2010 et 2014 selon l’OMPIC.</strong></p>
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
                <a href="{{(asset('preparer-sa-creation/quels-sont-les-crit-res-importants-pour-choisir-sa-structure-juridique-'))}}">
                    <button class="previous_btn">Précédente</button>
                </a>
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a
                        href="{{(asset('preparer-sa-creation/quelles-sont-les-principales-caract-ristiques-de-la-sarl-et-de-la-sa'))}}">
                        <button class="next_btn">Suivante</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
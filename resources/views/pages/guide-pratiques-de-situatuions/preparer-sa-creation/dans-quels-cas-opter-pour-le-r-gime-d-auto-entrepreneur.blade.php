@section('title', ' Dans quels cas opter pour le régime d’auto- entrepreneur ?')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Dans quels cas opter pour le régime d’auto- entrepreneur ? </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">

                    <p>Le statut d’auto-entrepreneur permet de débuter une activité rapidement et facilement, sans besoin de créer une société commerciale. Parmi ses nombreux avantages figurent :</p>
                    <ul>
                      <li><strong>Fiscalité réduite</strong> : 1% du chiffre d’affaires pour les activités industrielles, commerciales et artisanales et 2% pour les</li>
                      <li><strong>Non-assujettissement à la TVA</strong></li>
                    </ul>
                    <p>Pour plus d’informations se rendre sur le site dédié : <a target="blank" href="http://ae.gov.ma/">Auto Entrepreneur <i class="fas fa-external-link"></i> </a> et accéder à la <a target="blank" href="http://ae.gov.ma/faq-2/">FAQ. <i class="fas fa-external-link"></i> </a> <a target="blank" href="https://intaliq.ma/blog/devenir-auto-entrepreneur-au-maroc-quel-statut-et-quels-avantages">Devenir auto-entrepreneur au Maroc ? Quel statut et quels avantages ? <i class="fas fa-external-link"></i> </a></p>
               
                </div>


                <br>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a
                    href="{{(asset('preparer-sa-creation/quelles-sont-les-principales-caract-ristiques-de-la-sca-de-la-snc-et-scs'))}}">
                    <button class="previous_btn">Précédente</button>
                 </a>
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a
                        href="{{(asset('preparer-sa-creation/conseils-pratiques-et-points-de-vigilance'))}}">
                        <button class="next_btn">Suivante</button>
                      </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
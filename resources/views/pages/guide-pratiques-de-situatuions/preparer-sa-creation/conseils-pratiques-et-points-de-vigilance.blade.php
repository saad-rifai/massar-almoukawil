@section('title', ' Conseils pratiques et points de vigilance')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Conseils pratiques et points de vigilance </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">

                    <p>Ci-après vous trouverez les principaux conseils à suivre pendant votre démarche de création de société ainsi que des points de vigilance :</p>
                    <br>
                    
                    <ul>
                      <li><strong>Se faire accompagner</strong> : faites-vous accompagner pour la rédaction de vos statuts ou a minima demandez à un expert une relecture de vos statuts.</li>
                      <li><strong>Définition de l’objet social</strong> : Privilégiez un objet social le plus large possible qui vous permettra d’exploiter de nouvelles idées.</li>
                      <li><strong>Domiciliation</strong> : vous pouvez domicilier votre société soit à travers un contrat de bail, soit à travers un centre de domiciliation (qui fournit une adresse moyennant un loyer). Dans ce dernier cas soyez vigilant lors de la signature de votre contrat de domiciliation.</li>
                      <li><strong>Le pacte d’associés</strong> : Pour anticiper toute divergence entre associés, il est conseillé de rédiger un pacte d’actionnaires incluant notamment les modalités de vente des parts ou la procédure d’exclusion d’un associé.</li>
                      <li><strong>Transfert de revenus à l’étranger</strong> : Si vous êtes un investisseur étranger et que vous souhaitez bénéficier du libre transfert de vos revenus générés par vos investissements, vous devrez alors obligatoirement procéder au versement du capital social initial en devises.</li>
                    </ul>       
                </div>


                <br>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a
                    href="{{(asset('preparer-sa-creation/dans-quels-cas-opter-pour-le-r-gime-d-auto-entrepreneur'))}}">
                    <button class="previous_btn">Précédente</button>
                 </a>
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a
                        href="{{(asset('preparer-sa-creation/pour-quelles-questions-dois-je-faire-appel-un-conseil-juridique'))}}">
                        <button class="next_btn">Suivante</button>
                      </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
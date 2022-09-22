@section('title', ' Pour quelles questions dois-je faire appel à un conseil juridique ?')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Pour quelles questions dois-je faire appel à un conseil juridique ? </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">

                    <p>En tant qu’entrepreneur, un grand nombre de vos projets, démarches, transactions sont soumis à une <strong>législation stricte</strong>. Par ailleurs, l’exercice de votre activité peut vous amener à produire une documentation légale précise.</p>
                    <p>Vous pouvez vous renseigner via les textes de lois ou des documentations web afin d’obtenir des informations sur la légalité de vos activités et de vos documents. Cependant, nous vous conseillons <strong>de faire appel à un expert juridique concernant les questions suivantes</strong> :</p>
                    <ul>
                      <li>La définition de vos <strong>statuts</strong> et la protection de votre <strong>propriété intellectuelle</strong></li>
                      <li>La rédaction de vos <strong>contrats légaux</strong> : contrats de bail, de licence, de travail, de franchise, de sous- traitance, de partenariat, de location</li>
                      <li>Le règlement des <strong>contentieux</strong> : conflits avec les employés, mésententes entre les partenaires d’affaires</li>
                      <li>L’optimisation de la structure de votre entreprise en matière de <strong>fiscalité</strong> et de <strong>financement</strong></li>
                      <li>La gestion des <strong>grandes opérations</strong> : reprise d’une activité, transmission ou fermeture de votre entreprise</li>
                    </ul>
                    <p><strong>A qui m’adresser ?</strong></p>
                    <p>Certains <strong>comptables agréés</strong> peuvent proposer des services de conseil et d’accompagnement juridique. Renseignez-vous auprès de votre comptable sur ses services et son champ de compétences.</p>
                    <p>Vous pouvez également faire appel aux services d’un <strong>avocat</strong>. Il existe une multitude d’avocats travaillant à leur compte qui pourront vous conseiller sur vos questions juridiques et vous assister dans des opérations de petite ampleur (rédaction de vos conditions générales de vente, de vos contrats). Enfin, vous pouvez faire appel à des <strong>cabinets d’avocats</strong> de grande taille qui pourront vous fournir une expertise plus précise et vous accompagner sur des problématiques plus complexes. Les avocats sont souvent facturés à l’heure de consultation et les montants varient très fortement d’un cabinet à l’autre.</p>
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
              

            </div>
        </div>
        <hr>
        @include('assets.footer')
@section('title', 'Quelles stratégies de référencement de mon site web?')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">
                <br>
                <br>
                <div class="section-title-br">
                    <h1>Quelles stratégies de référencement de mon site web?</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <p>Le r&eacute;f&eacute;rencement de votre site est un facteur vital pour votre entreprise : cela d&eacute;termine son positionnement et sa visibilit&eacute; sur Internet. On distingue deux principales strat&eacute;gies de r&eacute;f&eacute;rencement :</p>
                    <p><strong>Le r&eacute;f&eacute;rencement payant </strong>: mise en place des liens sponsoris&eacute;s dans les r&eacute;sultats de moteur de recherche, via une r&eacute;gie de publicit&eacute; sp&eacute;cifique. Les plateformes de r&eacute;f&eacute;rencement payants sont r&eacute;mun&eacute;r&eacute;es en fonction du nombre de clics sur votre lien, selon un syst&egrave;me d&rsquo;ench&egrave;res : plus le Co&ucirc;t Par Clic (CPC) que vous &ecirc;tes pr&ecirc;ts &agrave; mettre pour un mot cl&eacute; est &eacute;lev&eacute;, plus vous avez de chance de voir votre site effectivement r&eacute;f&eacute;renc&eacute;. Pour Google par exemple, la plateforme d&rsquo;achat de liens sponsoris&eacute;s s&rsquo;appelle Google AdWords.</p>
                    <p><strong>Le r&eacute;f&eacute;rencement naturel (ou organique) </strong>: ensemble des techniques qui permettent d&rsquo;appara&icirc;tre en bonne position dans les moteurs de recherche sans utiliser de liens sponsoris&eacute;s. L&rsquo;approche traditionnelle du SEO englobe le SEO on-page et le SEO off-page :</p>
                    <p><em>SEO on-page</em></p>
                    <p></p>
                    <ul>
                    <li>Mise en place strat&eacute;gique de mots-cl&eacute;s sur votre site web, dans les titres de vos pages, de vos sections et de vos paragraphes, dans vos meta-descriptions, et dans tous les autres &eacute;l&eacute;ments visibles</li>
                    <li>Plus technique pour am&eacute;liorer la structure du site, la vitesse de chargement d&rsquo;une page ou encore le tarif auquel Google peut indexer votre site.</li>
                    </ul>
                    <p><em>SEO off-page</em></p>
                    <p></p>
                    <ul>
                    <li>Techniques d&rsquo;optimisation visant &agrave; am&eacute;liorer l&rsquo;autorit&eacute; globale de votre site web, largement d&eacute;termin&eacute;e par le type de sites qui proposent des liens redirigeant vers le v&ocirc;tre</li>
                    <li>L&rsquo;objectif est d&rsquo;obtenir des liens entrants sur des sites pertinents qui font r&eacute;f&eacute;rence dans leur secteur</li>
                    <li>A noter que selon Google, pr&egrave;s de 80 % de son algorithme de recherche est bas&eacute; sur des facteurs d&rsquo;optimisation technique off-pages</li>
                    </ul>

                </div>
                <br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('optimiser-sa-strategie-marketing/comment-optimiser-mon-site-web-ou-le-seo'))}}">
                    <button class="previous_btn">Précédente</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('optimiser-sa-strategie-marketing/cinq-conseils-d-optimisation-pour-les-moteurs-de-recherches-seo'))}}">
                        <button class="next_btn">Suivante</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
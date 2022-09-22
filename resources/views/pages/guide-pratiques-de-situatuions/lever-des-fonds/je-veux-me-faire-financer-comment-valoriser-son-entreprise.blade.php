@section('title', 'Je veux me faire financer : comment valoriser son entreprise ?')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">
                <br>
                <br>
                <div class="section-title-br">
                    <h1>Je veux me faire financer : comment valoriser son entreprise ?</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">

                    <p>Pourquoi valoriser votre entreprise ? Dans une optique de lev&eacute;e de fonds, il est essentiel de savoir combien votre entreprise vaut, surtout si vous avez recours &agrave; un fonds d&rsquo;investissement pour financer votre projet car ce dernier pourrait prendre des parts dans votre capital.</p>
                    <p>La valorisation d&rsquo;une start-up ou d&rsquo;une TPE n&rsquo;est pas simple <strong>car elle requiert des donn&eacute;es financi&egrave;res qui sont peu nombreuses du fait que les entreprises comparables sont difficiles &agrave; trouver. </strong>N&eacute;anmoins, certaines m&eacute;thodes existent et peuvent vous aider &agrave; trouver la bonne valorisation, et notamment la m&eacute;thode des DCF et la m&eacute;thode des comparables.</p>
                    <p>Avant de se lancer dans une valorisation, le plus important est de consid&eacute;rer les attentes de l&rsquo;investisseur potentiel. De mani&egrave;re g&eacute;n&eacute;rale, tout investisseur cherche &agrave; rentrer au bon prix, au prix du march&eacute;. Les investisseurs &ldquo;love-money&rdquo; (proches, amis) n&rsquo;auront pas les m&ecirc;mes attentes qu&rsquo;un fond de capital risque, qui lui-m&ecirc;me n&rsquo;aura pas les m&ecirc;mes attentes qu&rsquo;un fond de d&eacute;veloppement ou de dette. D&rsquo;un fonds &agrave; l&rsquo;autre, la valeur peut aussi varier selon des &eacute;l&eacute;ments endog&egrave;nes tels que sa connaissance du secteur, la nature de ses autres participations etc.</p>
                    <p>Trois erreurs &agrave; &eacute;viter absolument dans votre exercice de valorisation :</p>
                    <ol>
                    <li><strong>Une valorisation trop optimiste </strong>: un business plan pr&eacute;sentant une sur&eacute;valuation du CA ou une sous- &eacute;valuation des charges. Tout d&eacute;calage appara&icirc;tra t&ocirc;t ou tard et vous devrez vous en expliquer aupr&egrave;s de vos investisseurs : car vous avez adh&eacute;r&eacute; !</li>
                    <li><strong>Se baser uniquement sur les chiffres </strong>: plus le projet est en phase pr&eacute;coce (<strong>early-stage</strong>), plus la valeur se trouve dans l&rsquo;&eacute;quipe qui porte le projet.</li>
                    <li><strong>Ou alors uniquement sur les chiffres financiers </strong>: certains projets peuvent avoir un business model non rentable pendant une longue p&eacute;riode et &ecirc;tre de vraies p&eacute;pites pass&eacute; un d&eacute;lai de R&amp;D, de captation d&rsquo;utilisateurs,</li>
                    </ol>
                    <p>Les deux m&eacute;thodes les plus connues pour valoriser votre entreprise sont :</p>
                    <ul>
                    <li>La m&eacute;thode des DCF (ou Discounted Cash Flows)</li>
                    </ul>
                    <p>Elle consiste principalement &agrave; <strong>d&eacute;terminer les revenus que rapportera une entreprise </strong>(flux de tr&eacute;sorerie futurs) et &agrave; les actualiser pour indiquer la valeur d&rsquo;une entreprise &agrave; une date &ldquo;t&rdquo; donn&eacute;e. Pour une start-up ou un TPE, l&rsquo;avantage du DCF est qu&rsquo;il reposera sur un business plan taill&eacute; sur mesure. Les inconv&eacute;nients sont multiples et reposent essentiellement sur la fiabilit&eacute; d&rsquo;un business plan dont les agr&eacute;gats (CA, nombre d&rsquo;utilisateurs, volume de trafic, etc.) sont le fruit d&rsquo;hypoth&egrave;ses g&eacute;n&eacute;ralement optimistes, et qui ne se concr&eacute;tisent pas toujours.</p>
                    <p>Cette m&eacute;thode, qui est bas&eacute;e sur la production de cash-flow, n&rsquo;est pas adapt&eacute;e pour certains projets qui n&rsquo;ont pas vocation &agrave; g&eacute;n&eacute;rer du cash &agrave; court-moyen terme.</p>
                    <ul>
                    <li>La m&eacute;thode des comparables</li>
                    </ul>
                    <p>La m&eacute;thode des comparables consiste &agrave; regarder <strong>combien a &eacute;t&eacute; valoris&eacute;e une entreprise ou un panel d&rsquo;entreprises similaires </strong>dans le cadre d&rsquo;une transaction/lev&eacute;e de fonds. Cette m&eacute;thode a le grand avantage de proposer une valeur de march&eacute;. A contrario pour une start-up il y a peu de chance qu&rsquo;un projet similaire ait d&eacute;j&agrave; fait l&rsquo;objet d&rsquo;une valorisation valid&eacute;e par lev&eacute;e/transaction.</p>
                    <p>Quoi qu&rsquo;il en soit, si vous &ecirc;tes dans cette configuration, la m&eacute;thode et le prix de valorisation act&eacute; par le march&eacute; vous servira de rep&egrave;re. Dans tous les cas, il ne faut pas oublier que la valeur n&rsquo;est pas le prix. L&rsquo;&eacute;valuation n&rsquo;est pas une science exacte, c&rsquo;est une science &ldquo;molle&rdquo;. Un &eacute;valuateur n&rsquo;est, sauf exception, jamais ind&eacute;pendant et son travail (ses hypoth&egrave;ses) peut &ecirc;tre diff&eacute;rent suivant le c&ocirc;t&eacute; o&ugrave; il se situe.</p>
                </div>
                <br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('lever-des-fonds/le-financement-travers-un-fonds-d-investissement-ou-leverage-buy-out-lbo'))}}">
                    <button class="previous_btn">Précédente</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
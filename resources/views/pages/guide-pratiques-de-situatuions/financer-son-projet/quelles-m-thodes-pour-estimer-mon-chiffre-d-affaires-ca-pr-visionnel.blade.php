@section('title', ' Quelles méthodes pour estimer mon chiffre d’affaires (ca) prévisionnel ?')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Quelles méthodes pour estimer mon chiffre d’affaires (ca) prévisionnel ?</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <p><strong>Plusieurs m&eacute;thodes </strong>existent pour &eacute;tablir vos pr&eacute;visions de chiffre d&rsquo;affaires. N&rsquo;h&eacute;sitez pas &agrave; demander conseil &agrave; un organisme d&rsquo;accompagnement sp&eacute;cialis&eacute;, &agrave; des professionnels du conseil ou de votre secteur, afin de v&eacute;rifier vos hypoth&egrave;ses et vos projections.</p>
                    <ul>
                    <li>La <strong>m&eacute;thode des r&eacute;f&eacute;rentiels </strong>: comme son nom l&rsquo;indique, il s&rsquo;agit de rechercher des donn&eacute;es et des informations sur vos concurrents (ex : consulter les bilans) et votre secteur (ex : consulter des statistiques professionnelles), et dans un second temps d&rsquo;estimer votre CA pr&eacute;visionnel en fonction de l&rsquo;environnement &eacute;conomique, du positionnement de gamme de vos produits/services, et de votre future client&egrave;le.</li>
                    </ul>
                    <ul>
                    <li>La <strong>m&eacute;thode des intentions d&rsquo;achat </strong>: si lors de votre &eacute;tude de march&eacute; vous avez interrog&eacute; vos futurs consommateurs sur leurs intentions ou habitudes d&rsquo;achats, vous disposerez d&rsquo;informations suffisamment pr&eacute;cises (fr&eacute;quences d&rsquo;achat, quantit&eacute;s, perception sur le prix, etc.) pour estimer votre CA potentiel. Soyez toutefois vigilants dans l&rsquo;interpr&eacute;tation de ces donn&eacute;es qui restent des intentions et pas des</li>
                    </ul>
                    <ul>
                    <li>La <strong>m&eacute;thode des &ldquo;objectifs et des parts de march&eacute;&rdquo; </strong>: vous commencerez par chiffrer le potentiel de votre march&eacute; en ayant d&eacute;termin&eacute; o&ugrave; se trouvent vos clients potentiels, puis de rep&eacute;rer la</li>
                    </ul>
                    <p>concurrence. Ensuite vous estimerez la part de march&eacute; que vous pourrez prendre &agrave; vos concurrents directs et indirects, mais aussi votre client&egrave;le potentielle non servie par le march&eacute;.</p>
                    <ul>
                    <li>La <strong>m&eacute;thode du test grandeur nature </strong>: avant de vous lancer vous pouvez d&eacute;cider de commencer par tester votre id&eacute;e et votre projet, par exemple au sein d&rsquo;un incubateur d&rsquo;entreprises, d&rsquo;un organisme d&rsquo;accompagnement, ou via le <a href="http://ae.gov.ma/">statut d&rsquo;auto-entrepreneur. </a>Vous testerez ainsi votre march&eacute; en ma&icirc;trisant vos risques, et par la suite &ecirc;tre capable d&rsquo;estimer votre CA pr&eacute;visionnel sur la base de donn&eacute;es r&eacute;elles : contrats sign&eacute;s / bons de commandes, projets de partenariats, etc.</li>
                    </ul>
                    <br>
                    
                </div>


                <br>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('financer-son-projet/comment-r-aliser-un-pr-visionnel-financier'))}}">
                    <button class="previous_btn">Précédente</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a 
                        href="{{(asset('financer-son-projet/pourquoi-recourir-la-m-thode-du-lean-startup'))}}">
                        <button class="next_btn">Suivante</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
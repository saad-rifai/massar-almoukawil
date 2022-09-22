@section('title', 'Quels indicateurs suivre et intégrer à votre reporting de marketing digital ?')
@include('assets.head')
<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">
                <br>
                <br>
                <div class="section-title-br">
                    <h1>Quels indicateurs suivre et intégrer à votre reporting de marketing digital ?</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <p>Pour que vos modifications aient un impact plus important, vous devez identifier et d&eacute;finir les indicateurs les plus pertinents, puis d&rsquo;en assurer le suivi.</p>
                    <p>&nbsp;</p>
                    <ul>
                    <li><strong>Les performances du site web</strong>. Les composants de votre site web, comme le SEO, l&rsquo;optimisation pour les mobiles et le temps de chargement d&rsquo;une page sont-ils performants ? Vous pouvez le v&eacute;rifier par exemple gr&acirc;ce &agrave; l&rsquo;outil gratuit de HubSpot, <a href="https://website.grader.com/" target="_blank" rel="noopener">Website Grader.</a></li>
                    <li><strong>Le trafic. </strong>Dans l&rsquo;ensemble, combien de personnes visitent votre site web ? Cherchez &agrave; savoir quel m&eacute;dia entra&icirc;ne le plus de visites et lequel en g&eacute;n&egrave;re le moins. Basez-vous sur ces informations pour optimiser vos campagnes et augmenter le nombre de visites sur votre</li>
                    <li><strong>Les leads. </strong>Combien de ces visites se convertissent en leads et en clients potentiels ? Ce chiffre doit &ecirc;tre en constante augmentation pour vous assurer un revenu stable.</li>
                    <li><strong>Les clients</strong>. Vous devriez toujours d&eacute;dier vos campagnes et vos canaux &agrave; l&rsquo;acquisition de clients. Combien de transactions avez-vous conclues ce mois-ci ? Comment &eacute;valuez-vous ce r&eacute;sultat par rapport &agrave; celui du mois pr&eacute;c&eacute;dent ? Cette comparaison est indispensable &agrave; toute organisation Elle vous permet, en outre, d&rsquo;&eacute;tablir le ROI de vos efforts aupr&egrave;s de vos responsables.</li>
                    <li><strong>Le co&ucirc;t d&rsquo;acquisition client (CAC). </strong>Quelle somme investissez-vous pour attirer un nouveau client ? Si vous vous reposez principalement sur une approche traditionnelle du marketing, comme les salons professionnels ou le publipostage, votre co&ucirc;t d&rsquo;acquisition client est probablement &eacute;lev&eacute;.</li>
                    <li><strong>Les nouvelles visites et les visites r&eacute;p&eacute;t&eacute;es. </strong>En r&egrave;gle g&eacute;n&eacute;rale, combien de visiteurs reviennent sur votre site et combien le d&eacute;couvrent pour la premi&egrave;re fois ? Ces deux types de visites sont b&eacute;n&eacute;fiques pour votre site. La premi&egrave;re parce qu&rsquo;elle indique que de nouveaux visiteurs le d&eacute;couvrent via diff&eacute;rents canaux, et la seconde parce qu&rsquo;elle atteste de votre capacit&eacute; &agrave; inciter les visiteurs &agrave; revenir sur votre site.</li>
                    <li><strong>Les performances par canal</strong>. Quels canaux ou sources g&eacute;n&egrave;rent le plus de trafic ? Concentrez- vous par exemple sur les r&eacute;sultats &agrave; long terme et non sur les tendances &agrave; court terme obtenues &agrave; la suite d&rsquo; une parution dans la presse &eacute;crite.</li>
                    </ul>

                </div>
                <br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('optimiser-sa-strategie-marketing/comment-mesurer-l-efficacit-de-votre-strat-gie-de-marketing-digital'))}}">
                    <button class="previous_btn">Précédente</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('optimiser-sa-strategie-marketing/quels-sont-les-outils-marketing-disponibles-pour-m-aider-lancer-mon-activit'))}}">
                        <button class="next_btn">Suivante</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
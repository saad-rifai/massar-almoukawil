@section('title', ' Pourquoi recourir à la méthode du “lean startup” ?')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Pourquoi recourir à la méthode du “lean startup” ?</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <p>Popularis&eacute;e par Eric Ries dans son livre &ldquo;The Lean Startup&rdquo;<em>(2011)</em>,
                        cette m&eacute;thode agile vise &agrave; <strong>tester votre produit/service sur le
                            march&eacute; </strong>par le biais d&rsquo;un pilote, un prototype ou une
                        pr&eacute;sentation (y compris pour les entreprises qui ne sont pas des startups).</p>
                    <p>En minimisant votre investissement de d&eacute;part, l&rsquo;objectif est de valider votre
                        produit/service en d&eacute;montrant l&rsquo;int&eacute;r&ecirc;t pour le client.</p>
                    <p>Cette m&eacute;thode suit une d&eacute;marche it&eacute;rative en trois phases appel&eacute;es
                        &ldquo;Build, Measure, Learn&rdquo; ou <strong>Construire, Mesurer, Apprendre </strong>:</p>
                    <ol>
                        <li>Mettre au point un <strong>produit minimum viable </strong>(minimum viable product &ndash;
                            MVP), autrement dit une version b&ecirc;ta la plus simple et fonctionnelle du
                            produit/service</li>
                        <li><strong>Tester votre MVP </strong>et recueillir un maximum d&rsquo;avis et de donn&eacute;es
                            d&rsquo;utilisateurs</li>
                        <li><strong>Analyser les donn&eacute;es </strong>pour optimiser, lancer ou r&eacute;orienter
                            votre produit/service</li>
                    </ol>
                    <br>
                    <p><strong>Bon &agrave; savoir </strong>: <em>Les outils du Lean Startup sont utilis&eacute;s par
                            des entreprises c&eacute;l&egrave;bres pour chaque &eacute;volution de leur produit/service
                            (ex : Google, Youtube) afin de trouver l&rsquo;ad&eacute;quation parfaite entre le produit
                            et le march&eacute;.</em></p>
                    <p><em>&nbsp;</em></p>
                    <p><em>Pour approfondir : </em><a href="https://www.lean-startup.net/"><em>Lean
                                Startup</em><em>.</em></a></p>
                </div>


                <br>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('financer-son-projet/quelles-m-thodes-pour-estimer-mon-chiffre-d-affaires-ca-pr-visionnel'))}}">
                    <button class="previous_btn">Précédente</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('financer-son-projet/comment-r-ussir-pr-senter-ou-pitcher-son-projet'))}}">
                        <button class="next_btn">Suivante</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
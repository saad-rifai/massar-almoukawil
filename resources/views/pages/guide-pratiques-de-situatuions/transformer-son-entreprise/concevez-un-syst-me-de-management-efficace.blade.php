@section('title', 'Concevez un système de management efficace')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">
                <br>
                <br>
                <div class="section-title-br">
                    <h1>Concevez un système de management efficace</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <p>Vous devrez &eacute;laborer votre syst&egrave;me de management afin de <strong>tirer le meilleur des hommes et des femmes qui collaborent avec vous. </strong>Le plus souvent, la raison pour laquelle les collaborateurs quittent une organisation est li&eacute;e au style avec lequel ils sont g&eacute;r&eacute;s. Ainsi, il est important de conna&icirc;tre les facteurs constitutifs du management, &agrave; savoir :</p>
                    <ul>
                    <li><strong>Votre style de management </strong>: est-il centralis&eacute;, plut&ocirc;t participatif, ou &agrave; l&rsquo;inverse paternaliste etc&hellip; il faudra faire un choix judicieux. Votre style d&eacute;terminera la productivit&eacute; de vos &eacute;quipes et la culture de votre</li>
                    <li><strong>R&eacute;tribution : </strong>ce point est essentiel et pourtant souvent n&eacute;glig&eacute;. Choisissez comment r&eacute;compenser la performance de vos collaborateurs, cela les am&egrave;nera &agrave; plus de productivit&eacute; : r&eacute;mun&eacute;ration, primes, participation aux r&eacute;sultats &hellip; tout est permis ! L&rsquo;essentiel est d&rsquo;y lier la performance et ses</li>
                    <li><strong>Animation : </strong>&eacute;volution de carri&egrave;re, incentives&hellip; trouvez les meilleurs moyens pour mobiliser vos collaborateurs et favoriser la performance de votre &eacute;quipe. N&rsquo;oubliez pas que l&rsquo;&eacute;panouissement personnel est un formidable moteur.</li>
                    <li><strong>Suivi : </strong>Rien de plus frustrant que des collaborateurs ne sachant pas si leur travail est bon. Il est primordial de savoir comment organiser le feedback. Les r&eacute;unions hebdomadaires, mensuelles ou encore quotidiennes (huddles) sont ainsi &agrave; privil&eacute;gier.</li>
                    </ul>
                </div>
                <br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('transformer-son-entreprise/comment-r-organiser-une-petite-entreprise'))}}">
                    <button class="previous_btn">Précédente</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('transformer-son-entreprise/d-ployez-un-syst-me-d-information-en-phase-avec-votre-organisation'))}}">
                        <button class="next_btn">Suivante</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
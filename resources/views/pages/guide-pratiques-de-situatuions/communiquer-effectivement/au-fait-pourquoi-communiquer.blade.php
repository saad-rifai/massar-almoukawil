@section('title', 'Au fait, pourquoi communiquer ?')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">
                <br>
                <br>
                <div class="section-title-br">
                    <h1>Au fait, pourquoi communiquer ?</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">

                    <p>Cette question peut para&icirc;tre banale mais il existe en r&eacute;alit&eacute; un grand nombre
                        de d&eacute;finitions de la communication. Qu&rsquo;elle fasse r&eacute;f&eacute;rence &agrave;
                        <strong>la gestion de l&rsquo;image ou de la r&eacute;putation</strong>, dans un monde
                        satur&eacute; par l&rsquo;information, communiquer aujourd&rsquo;hui ressemble plus &agrave;
                        <strong>un art</strong>. Il s&rsquo;agit de</p>
                    <p>savoir communiquer le sens, au bon moment, et dans le bon format.</p>
                    <p></p>
                    <p>Les techniques de communication &eacute;voluent rapidement afin de r&eacute;ussir &agrave;
                        <strong>capter une attention toujours plus r&eacute;duite</strong>. Parmi les tendances
                        structurantes actuelles on peut en citer trois :</p>
                    <ul>
                        <li><strong>La technologie : </strong>communiquer gr&acirc;ce au num&eacute;rique est
                            aujourd&rsquo;hui une &eacute;tape oblig&eacute;e, et &agrave; l&rsquo;avenir des
                            innovations comme l&rsquo;intelligence artificielle, le Big data et la r&eacute;alit&eacute;
                            virtuelle impacteront encore davantage la vie de toute les entreprises</li>
                        <li><strong>Les r&eacute;seaux sociaux </strong>: toutes les plateformes dites
                            conversationnelles (TikTok, Snap, Instagram, Facebook, LinkedIn, Twitter) proposent
                            constamment de nouvelles fonctionnalit&eacute;s et voient leurs algorithmes &eacute;voluer.
                            Tenez-vous &agrave; la page ou faites-vous accompagner par des sp&eacute;cialistes !</li>
                    </ul>
                    <ul>
                        <li><strong>Marketing de contenu </strong>: &eacute;l&eacute;ment central pour avoir une
                            pr&eacute;sence digitale coh&eacute;rente, via des podcasts, vid&eacute;os, Votre
                            strat&eacute;gie num&eacute;rique doit faire partie de votre strat&eacute;gie globale.</li>
                    </ul>
                    <p>La communication n&rsquo;est pas un domaine fig&eacute;, elle &eacute;volue en permanence.
                        <strong>Vous devrez &ecirc;tre attentif &agrave; ses nouveaut&eacute;s ainsi qu&rsquo;aux
                            tendances de votre secteur </strong>afin d&rsquo;adapter votre style et vos approches.</p>
                    <p><strong>Quant au digital, on le retrouvera en toile de fond de toutes vos actions de
                            communication</strong>.</p>
                </div>
                <br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
    
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a
                        href="{{(asset('communiquer-effectivement/que-dois-je-savoir-avant-de-lancer-ma-communication'))}}">
                        <button class="next_btn">Suivante</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
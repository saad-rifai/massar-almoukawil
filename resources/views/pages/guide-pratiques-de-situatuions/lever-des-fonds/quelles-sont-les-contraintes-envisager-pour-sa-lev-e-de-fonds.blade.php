@section('title', 'Quelles sont les contraintes à envisager pour sa levée de fonds ')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">
                <br>
                <br>
                <div class="section-title-br">
                    <h1>Quelles sont les contraintes à envisager pour sa levée de fonds ?</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <p>La premi&egrave;re id&eacute;e est d&rsquo;<strong>adapter le pr&ecirc;t &agrave; ses propres contraintes</strong>. Quelle que soit votre activit&eacute;, il faut adapter la gestion de votre entreprise en fonction de vos projets ou a contrario vos projets en fonction de vos contraintes. Par exemple, lorsque vous &ecirc;tes un entrepreneur, vous devez estimer les impacts d&rsquo;un projet qui n&eacute;cessiterait un financement significatif.</p>
                    <p>&nbsp;</p>
                    <p>Si vous faites en parall&egrave;le un investissement immobilier personnel, il s&rsquo;agit peut-&ecirc;tre l&agrave; d&rsquo;une contrainte trop forte pour mettre en place un projet avec un financement significatif, dans lequel on contraindrait votre soci&eacute;t&eacute; &agrave; limiter le versement de dividendes.</p>
                    <p>De m&ecirc;me, si vous avez fait entrer un fonds d&rsquo;investissement &agrave; votre capital, ou si vous avez d&eacute;j&agrave; donn&eacute; un fonds de commerce en garantie, vous devez en tenir compte pour d&eacute;terminer principalement ce que votre soci&eacute;t&eacute; peut g&eacute;n&eacute;rer comme flux de tr&eacute;sorerie pour rembourser une dette, ou peut donner comme s&ucirc;ret&eacute;s en garantie &agrave; votre banquier.</p>
                    <p>Les contraintes internes et externes d&eacute;terminent ainsi fortement le prix du financement. Apr&egrave;s avoir r&eacute;alis&eacute; le BP de la lev&eacute;e de fonds, vous devriez avoir mis en exergue les <strong>contraintes inh&eacute;rentes &agrave; votre entreprise</strong>, mais &eacute;galement les contraintes li&eacute;es &agrave; votre environnement externe. Le prix du financement d&eacute;coule principalement de cet ensemble de caract&eacute;ristiques.</p>
                </div>
                <br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('lever-des-fonds/comment-valuer-son-besoin-en-financement'))}}">
                    <button class="previous_btn">Précédente</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a
                        href="{{(asset('lever-des-fonds/quels-sont-les-facteurs-cl-s-de-succ-s-pour-obtenir-son-financement'))}}">
                        <button class="next_btn">Suivante</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
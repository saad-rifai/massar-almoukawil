@section('title', ' Comment trouver son idée d’entreprise?')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Comment trouver son idée d’entreprise?</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <p>Si vous pouvez trouver l&rsquo;id&eacute;e, votre cr&eacute;ation d&rsquo;entreprise suivra. Pensez d&rsquo;abord &agrave; faire un <strong>bilan de comp&eacute;tences</strong>, car il est plus facile de cr&eacute;er une entreprise dans un domaine ou un secteur que l&rsquo;on ma&icirc;trise. Vous vous assurerez de la coh&eacute;rence entre votre personnalit&eacute;, vos motivations, votre savoir-faire et vos ressources personnelles. En cas de doute, vous penserez &agrave; adapter votre projet, suivre des formations, trouver des partenaires. Dans tous les cas, <strong>pensez &agrave; valoriser vos talents, votre exp&eacute;rience et votre carnet d&rsquo;adresses.</strong></p>
                    <p></p>
                    <p>De nombreuses techniques et outils existent pour <strong>g&eacute;n&eacute;rer de nouvelles id&eacute;es</strong>, que vous soyez seul ou en groupe, en train de chercher &agrave; comprendre un probl&egrave;me &agrave; r&eacute;soudre, &agrave; g&eacute;n&eacute;rer et s&eacute;lectionner des id&eacute;es, ou &agrave; planifier vos activit&eacute;s.</p>
                    <p>Pour trouver votre prochaine id&eacute;e d&rsquo;entreprise ou de nouveau produit/service, voici quelques mani&egrave;res de proc&eacute;der :</p>
                    <ol>
                    <li>Identifiez <strong>ce qui vous donne satisfaction </strong>et faites en sorte de le mon&eacute;tiser et de le transformer en</li>
                    <li>Identifiez <strong>ce qui vous frustre </strong>et r&eacute;fl&eacute;chissez &agrave; comment r&eacute;soudre ce probl&egrave;me.</li>
                    <li>Pensez aux <strong>d&eacute;fis d&rsquo;avenir </strong>du monde et &agrave; comment pouvez-vous commencer &agrave; les r&eacute;soudre d&egrave;s</li>
                    <li><strong>N&rsquo;attendez pas l&rsquo;id&eacute;e du si&egrave;cle </strong>pour commencer et essayer, quitte &agrave; &eacute;chouer plusieurs fois avant de r&eacute;ussir.</li>
                    <li>Sortez de votre routine et <strong>allez dans le monde &agrave; la d&eacute;couverte </strong>de nouvelles id&eacute;es et de nouvelles exp&eacute;riences</li>
                    </ol>
                    <p>Notre guide de l&rsquo;&eacute;cosyst&egrave;me r&eacute;pertorie tous les acteurs au Maroc qui accompagnent les porteurs d&rsquo;id&eacute;es &agrave; d&eacute;velopper et structurer leur projet.</p>

                </div>


                <br>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('trouver-et-valuer-son-id-e-d-entreprise/pourquoi-et-comment-r-aliser-votre-tude-de-march'))}}">
                    <button class="previous_btn">Précédente</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('trouver-et-valuer-son-id-e-d-entreprise/comment-d-finir-votre-business-model'))}}">
                        <button class="next_btn">Suivante</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
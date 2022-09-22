@section('title', ' Comment définir votre business model ?')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Comment définir votre business model ?</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <p>Synonyme de mod&egrave;le &eacute;conomique ou de mod&egrave;le d&rsquo;affaires, le <strong>business model traduit le concept et d&eacute;crit l&rsquo;id&eacute;e </strong>qui permet &agrave; votre entreprise de <strong>se d&eacute;marquer </strong>de la concurrence et comment elle envisage</p>
                    <p>de gagner de l&rsquo;argent.</p>
                    <p>Autrement dit, votre business model est le c&oelig;ur de votre entreprise puisqu&rsquo;il synth&eacute;tise la <strong>valeur ajout&eacute;e de votre produit/service</strong>, &agrave; quels clients il s&rsquo;adresse, comment et pour quel b&eacute;n&eacute;fice. Cette d&eacute;finition doit r&eacute;pondre &agrave; deux questions cl&eacute;s :</p>
                    <ol>
                    <li>Quel(s) v&eacute;ritable(s) besoin(s) client(s) votre offre adresse-t-elle ?</li>
                    <li>Comment vous d&eacute;marquez-vous de la concurrence, par l&rsquo;innovation, par un nouvel usage, par les moyens mis en &oelig;uvre ou &agrave; via votre strat&eacute;gie commerciale ?</li>
                    </ol>
                    <p>Pour r&eacute;ussir &agrave; d&eacute;tailler votre business model, nous vous conseillons de r&eacute;diger vos r&eacute;ponses aux questions suivantes :</p>
                    <ul>
                    <li>Quel produit/service je propose ?</li>
                    <li>Quels avantages mon produit/service pr&eacute;sente-t-il par rapport &agrave; la concurrence ?</li>
                    <li>Qui sont mes clients et comment vais-je les toucher ?</li>
                    <li>Quels moyens je mettrai en &oelig;uvre pour cr&eacute;er mon produit/service ?</li>
                    <li>Quelles sont les principales d&eacute;penses et recettes g&eacute;n&eacute;r&eacute;es par mon activit&eacute; ?</li>
                    </ul>
                    <p>L&rsquo;utilit&eacute; principale du business model est de rendre votre offre claire &agrave; la fois pour vous-m&ecirc;mes et pour vos partenaires. Il offre une vue globale et une lecture concise de votre proposition de valeur en un clin d&rsquo;&oelig;il.</p>
                    <p>Dans le monde num&eacute;rique, on peut citer quelques types de business models &agrave; titre d&rsquo;exemple :</p>
                    <ul>
                    <li>Principe de l&rsquo;abonnement : par exemple en s&rsquo;abonnant &agrave; des logiciels en ligne plut&ocirc;t que de les installer sur les serveurs de l&rsquo;entreprise (mod&egrave;le Software SaaS)</li>
                    <li>Peer to peer : pr&eacute;l&egrave;vement d&rsquo;une commission sur une mise en relation ;</li>
                    <li>Freemium : prestation gratuite offerte associ&eacute; &agrave; un acc&egrave;s payant pour des contenus plus riches</li>
                    <li>Partage de revenu : partage des revenus avec les ayants droit (exemple: plateformes de streaming)</li>
                    <li>Tout gratuit : prestation gratuite, seule la publicit&eacute; g&eacute;n&egrave;re des revenus</li>
                    <li>Affiliation : pr&eacute;l&egrave;vement d&rsquo;une commission par clic sur une banni&egrave;re</li>
                    </ul>
                    <p>Vous pouvez opter pour le &ldquo;<strong>Business Model Canvas</strong>&rdquo; qui permet de visualiser votre mod&egrave;le &eacute;conomique en une seule page, d&eacute;finir vos besoins et pr&eacute;voir la marche &agrave; suivre (mod&egrave;le interactif disponible sur BpiFrance : Business Model Canvas).</p>
                </div>


                <br>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('trouver-et-valuer-son-id-e-d-entreprise/comment-trouver-son-id-e-d-entreprise'))}}">
                    <button class="previous_btn">Précédente</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('trouver-et-valuer-son-id-e-d-entreprise/comment-construire-votre-business-plan'))}}">
                        <button class="next_btn">Suivante</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
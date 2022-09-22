@section('title', 'Comment réaliser un site de e-commerce ou une boutique en ligne ?')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">
                <br>
                <br>
                <div class="section-title-br">
                    <h1>Comment réaliser un site de e-commerce ou une boutique en ligne ?</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <p><strong>Pour r&eacute;aliser un site de e-commerce ou une boutique en ligne</strong>: il existe des solutions, logiciels ou services particuli&egrave;rement adapt&eacute;s, tels que :</p>
                    <p>WooCommerce</p>
                    <ul>
                    <li>En t&ecirc;te au niveau mondial avec 29% de parts de march&eacute;</li>
                    <li>Extension de WordPress (pas un CMS &agrave; part enti&egrave;re)</li>
                    <li>Vous devrez choisir un h&eacute;bergeur web, y installer le CMS et le plugin (&agrave; moins que votre h&eacute;bergeur s&rsquo;en charge)</li>
                    <li>N&eacute;cessite une intervention technique mais simple &agrave; prendre en mains</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p>Shopify</p>
                    <ul>
                    <li>23% de parts de march&eacute; au niveau mondial</li>
                    <li>SaaS ou &ldquo;service web&rdquo;</li>
                    <li>Adapt&eacute; au grand public, aucune formation n&eacute;cessaire</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p>Prestashop</p>
                    <ul>
                    <li>Leader sur le march&eacute; francophone</li>
                    <li>CMS qui n&eacute;cessite d&rsquo;&ecirc;tre accompagn&eacute; par un sp&eacute;cialiste</li>
                    <li>N&eacute;cessite une intervention technique &agrave; moins que votre h&eacute;bergeur s&rsquo;en charge</li>
                    <li>Complexit&eacute; de prise en mains</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p><strong>Co&ucirc;t </strong>: selon que vous passez par un h&eacute;bergeur, vous pouvez cr&eacute;er votre site e-commerce sur WooCommerce pour un faible montant, sinon vous devrez faire appel &agrave; un webdesigner qui pourrait vous facturer &agrave; partir plus de 20.000 Dh en fonction du service offert.</p>
                    <p>Ce budget pourrait &ecirc;tre sup&eacute;rieur pour la mise en place compl&egrave;te d&rsquo;un site e-commerce s&eacute;rieux par un expert Prestashop.</p>
                    <p>Quant &agrave; Shopify, il existe des formules d&rsquo;abonnement mensuel &agrave; partir de 29$ mais qui peuvent grimper jusqu&rsquo;&agrave; 299$/mois.</p>
                </div>
                <br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('optimiser-sa-strategie-marketing/comment-concevoir-mon-site-web'))}}">
                    <button class="previous_btn">Précédente</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('optimiser-sa-strategie-marketing/comment-optimiser-mon-site-web-ou-le-seo'))}}">
                        <button class="next_btn">Suivante</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
@section('title', 'Comment réorganiser une petite entreprise?')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">
                <br>
                <br>
                <div class="section-title-br">
                    <h1>Comment réorganiser une petite entreprise?</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <p><strong>Tout part de la vision. </strong>De la vision, va alors d&eacute;couler la strat&eacute;gie de votre entreprise, et votre organisation doit &ecirc;tre coh&eacute;rente avec vos aspirations. Si vos moyens sont limit&eacute;s, vous devez adopter une ligne directrice pour une allocation pertinente de vos ressources. Si vous voulez &ecirc;tre tr&egrave;s fort techniquement, privil&eacute;giez des profils et une culture technique. Si la relation client est votre priorit&eacute;, soyez attentif &agrave; structurer un service client performant.</p>
                    <p>Une fois votre vision et strat&eacute;gie &eacute;labor&eacute;e, il faut &agrave; pr&eacute;sent <strong>structurer votre PME</strong>. Pour structurer votre entreprise vous devrez notamment :</p>
                    <h3>I. Concevoir un organigramme :</h3>
                    <p>Fixez les niveaux hi&eacute;rarchiques ainsi que les diff&eacute;rents services, en essayant de garder en t&ecirc;te l&rsquo;agilit&eacute; de votre organisation. C&rsquo;est une force pour une petite entreprise<a href="https://www.manager-go.com/marketing/avantage-concurrentiel.htm" target="_blank" rel="noopener">, un v&eacute;ritable avantage concurrentiel </a>: ne le compromettez pas en mettant en place une structure lourde et peu r&eacute;active.</p>
                    <h5>II. D&eacute;finir les qualifications et comp&eacute;tences pour chaque fonction :</h5>
                    <p>Formalisez <a href="https://www.manager-go.com/ressources-humaines/dossiers-methodes/rediger-une-fiche-de-poste" target="_blank" rel="noopener">les d&eacute;finitions de poste, </a>tous les collaborateurs en ont besoin ! Pour rester agile, privil&eacute;giez un haut niveau de comp&eacute;tences plut&ocirc;t qu&rsquo;un mode de fonctionnement fortement bas&eacute; sur les proc&eacute;dures. Vos collaborateurs seront plus autonomes, plus cr&eacute;atifs face &agrave; la vari&eacute;t&eacute; des situations rencontr&eacute;es dans leur m&eacute;tier.</p>
                    <h3>III.Fixer les r&egrave;gles de fonctionnement :</h3>
                    <p>Les relations entre les services, etc. Encore une fois, attention de ne pas tomber dans l&rsquo;organisation bureaucratique en chargeant trop votre organisation de proc&eacute;dures.</p>
                    <h3>IV. Mettez, par la suite, un syst&egrave;me de d&eacute;cision pertinent :</h3>
                    <p>D&eacute;finissez qui d&eacute;cide de quoi, et les pr&eacute;rogatives de chacun, des services et des fonctions. Une entreprise orient&eacute;e client favorise par exemple le pouvoir de d&eacute;cision au personnel qui est au plus pr&egrave;s des clients.</p>
                </div>
                <br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('transformer-son-entreprise/pourquoi-transformer-son-entreprise'))}}">
                    <button class="previous_btn">Précédente</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('transformer-son-entreprise/concevez-un-syst-me-de-management-efficace'))}}">
                        <button class="next_btn">Suivante</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
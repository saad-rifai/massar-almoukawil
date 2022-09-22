@section('title', 'Pourquoi transformer son entreprise?')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">
                <br>
                <br>
                <div class="section-title-br">
                    <h1>Pourquoi transformer son entreprise?</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <p>Votre entreprise grandit et vous entrez dans une phase d&eacute;licate o&ugrave; vous ne pouvez plus tout prendre en main. Faire grandir une entit&eacute;, c&rsquo;est aussi <strong>s&rsquo;assurer d&rsquo;&ecirc;tre en phase avec son march&eacute;, d&rsquo;avoir les bonnes ressources au bon moment, le bon produit, etc</strong>.</p>
                    <p>La solution ? Doter votre entreprise d&rsquo;une <strong>organisation adapt&eacute;e </strong>pour faire face &agrave; l&rsquo;&eacute;volution que vous vivez. G&eacute;rer tout seul, sans prendre en compte les mutations et transformations futures de votre entreprise et de votre march&eacute; est risqu&eacute;, et :</p>
                    <ul>
                    <li>Vous, tout seul, n&rsquo;avez plus le temps mat&eacute;riel de tout prendre en charge</li>
                    <li>Vous ne d&eacute;tenez plus toutes les informations</li>
                    <li>Vous ne ma&icirc;trisez plus toutes les comp&eacute;tences</li>
                    </ul>
                    <p>Tous les chefs d&rsquo;entreprises ayant d&eacute;marr&eacute; seuls ou avec une &eacute;quipe restreinte connaissent cette phase cl&eacute; dans la vie d&rsquo;une PME. Tous franchissent alors le pas &agrave; un moment o&ugrave; &agrave; un autre pour <strong>aller vers plus de croissance et de renouveau</strong>.</p>
                 
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
                    <a href="{{(asset('transformer-son-entreprise/comment-r-organiser-une-petite-entreprise'))}}">
                        <button class="next_btn">Suivante</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
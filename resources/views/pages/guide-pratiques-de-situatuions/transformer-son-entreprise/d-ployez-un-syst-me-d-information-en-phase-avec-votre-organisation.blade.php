@section('title', 'Déployez un système d’information en phase avec votre organisation')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">
                <br>
                <br>
                <div class="section-title-br">
                    <h1>Déployez un système d’information en phase avec votre organisation</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <p><strong>Non, le syst&egrave;me d&rsquo;information n&rsquo;est pas l&rsquo;apanage des entreprises les plus riches ! </strong>Vous devrez lister les informations dont chaque collaborateur a besoin pour exercer son m&eacute;tier, identifier ce qui doit &ecirc;tre partag&eacute; ou pas, et entre qui<a href="https://www.manager-go.com/finance/tableau-de-bord.htm" target="_blank" rel="noopener">. Mettez &agrave; disposition un tableau de bord op&eacute;rationnel </a>pour que chacun puisse suivre ses objectifs et le r&eacute;aliser.</p>
<p>Par la suite, diff&eacute;rentes solutions existent pour g&eacute;rer votre syst&egrave;me d&rsquo;information, payantes et gratuites, et plus ou moins &eacute;labor&eacute;es en fonction de l&rsquo;utilit&eacute;. Pour les packages classiques de gestion de la messagerie et des outils collaboratifs, les plus connus sont Microsoft Office, Google suite, etc.</p>
              </div>
                <br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('transformer-son-entreprise/concevez-un-syst-me-de-management-efficace'))}}">
                    <button class="previous_btn">Précédente</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('transformer-son-entreprise/comment-op-rer-une-transformation-digitale'))}}">
                        <button class="next_btn">Suivante</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>
                        La factory by screendy
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        La Startup Station, entreprend ces propres projets, et co-entreprend avec des startups, des entreprises, des ONG, des institutions
                        publiques ou privées, les projets innovants de demain. En 4 ans, la Factory a construit une proposition de valeur solide dans le
                        domaine du déploiement de projets numériques mobilisant l’Open Innovation et les technologies de demain.

                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <ul>
                        <li><strong>Start-up :</strong> accompagnement pour faire &eacute;voluer la startup via plusieurs programmes tels que l&rsquo;id&eacute;ation, la pr&eacute;-incubation, l&rsquo;incubation, permettant l&rsquo;acc&eacute;l&eacute;ration et le scale-up.</li>
                        <li><strong>Entreprises :</strong> aider les entreprises &agrave; trouver leurs prochaines grandes id&eacute;es. Partir de la d&eacute;finition d&rsquo;une vision, acculturer les &eacute;quipes, &eacute;laborer une feuille de route et collaborer avec des startups; dans l&rsquo;objectif du d&eacute;ploiement de solutions innovantes.</li>
                        <li><strong>Investisseurs : </strong> permetre d&rsquo;acc&eacute;der &agrave; un hub de startups innovantes pour trouver vos partenaires cl&eacute;s.</li>
                        <li><strong>Pour tous :</strong> se former et former les collaborateurs aux m&eacute;tiers de demain : Acculturation, Formation, Intrapreneuriat...</li>
                        </ul>

                </div>

                <hr class="section_hr">
                <h2 class="blue-section-title">
                                Contact
                            </h2>
                <div class="sample_table mb-5">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nom</th>
                                <th scope="col">Tel</th>
                                <th scope="col">Adresse</th>
                                <th scope="col">E-mail</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                  
Mehdi  <br> Omar

                                </td>
                                <td>06 74 78 12 58 <br> 06 61 23 44 56 </td>
                                <td>8ème étage, TechnoPark, Casablanca.</td>
                                <td> <a href="mailto:mehdi@screendy.com">  mehdi@screendy.com</a>
                                    </td>

                            </tr>
                           

                        </tbody>
                    </table>
                </div>
                <hr class="section_hr">
                <div class="text-containet text-center">
                    <a href="http://www.lafactory.co/" target="_blanck">
                        <button class="lg-btn-produit"><i class="las la-external-link-alt"></i> Visitez le site
                            Web</button>
                    </a>
                </div>
                <br>
                <br>
            </div>





            <br>
            <br>
        </div>
        <div class="row">
            <div class="col">

                <a href="{{(asset('/accomp-entr/CEED'))}}">
                    <button class="previous_btn">CEED</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/accomp-entr/ClusterSolaire'))}}">
                        <button class="next_btn">Cluster Solaire</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br>

    <hr>
    @include('assets.footer')
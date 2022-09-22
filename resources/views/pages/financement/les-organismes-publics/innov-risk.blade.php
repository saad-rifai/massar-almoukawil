@section('title', 'INNOV RISK')
@section('description', " Fournir le cash supplémentaire à une strat-up innovante pour financer les besoins de trésorerie, des compléments d’investissements ou des frais de commercialisation de leurs produits.")

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>INNOV RISK</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Objet 
                    </h2>
                    <p class="section_normale_text">
                        Fournir le cash supplémentaire à une strat-up innovante pour financer les besoins de trésorerie, des compléments d’investissements ou des frais de commercialisation de leurs produits.
                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Description 
                    </h2>
                    <p class="section_normale_text">
                        <p>Sont finan&ccedil;ables par l&rsquo;avance remboursable au titre d&rsquo;un projet innovant, les d&eacute;penses li&eacute;es notamment aux &eacute;l&eacute;ments suivants :</p>
                        <ul>
                        <li>Prototypage et de tests dans le cadre du d&eacute;veloppement/affinement de produits</li>
                        <li>Mise en place des installations de production</li>
                        <li>Marketing et commercialisation</li>
                        <li>Besoin en fonds de roulement&hellip;</li>
                        </ul>
                    </p>
                </div>
                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Cible
                            </h2>
                            <p>
                                
                                Entreprises en phase de création/démarrage ayant réussi une levée de fonds auprès d’investisseurs (fonds de capital risque, investisseurs providentiels…) et ayant un besoin de cash supplémentaire pour financer leurs besoins de trésorerie, des compléments d’investissements ou des frais de commercialisation de leurs produits.
                            </p>
                     
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Critères d’éligibilité
                            </h2>
                            <p class="section_normale_text">
                                Non
                            </p>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title"> Plafond de financement </h2>
                            <p>Entreprises en phase de création/démarrage ayant réussi une levée de fonds auprès d’investisseurs (fonds de capital risque, investisseurs providentiels…) et ayant un besoin de cash supplémentaire pour financer leurs besoins de trésorerie, des compléments d’investissements ou des frais de commercialisation de leurs produits.</p>
                        </div>
                                                
                        <div class="col">
                            <h2 class="blue-section-title">Modalités de remboursement </h2>
                            <p class="section_normale_text">
                                <ul>
                                    <li>P&eacute;riode de diff&eacute;r&eacute; d&rsquo;un an &agrave; partir de la r&eacute;alisation et exploitation du projet</li>
                                    <li>Remboursement sur une dur&eacute;e de 5 ans</li>
                                    </ul>                           

                            </p>
                        </div>
                    </div>
                    <br>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">Conditions de garanties </h2>
                            <p class="section_normale_text">
                                Le financement est conditionné par la conclusion d’une convention d’accompagnement entre la cible éligible et la structure labélisée.
                                                       
                    </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">Coût du financement / de l’opération</h2>
                            <p class="section_normale_text">
                                Néant
                                

                            </p>
                        </div>
                 

   
                    </div>
                    
                    <br>
                    
                    <h2 class="blue-section-title">
                        Contact
                    </h2>
                    <p class="section_normale_text"> <a href="{{asset('/contacts/organismes-public')}}">voir liste des
                            contacts <i class="fas fa-external-link"></i></a>

                          
                    </p>

                </div>
                <br>
                <hr class="section_hr">

                <div class="text-containet text-center">
                    <a href="https://ccg.ma/fr/votre-projet/innov-start" target="_blanck">
                        <button class="lg-btn-produit"><i class="las la-external-link-alt"></i> Visitez le site Web</button>
                    </a>
                </div>
                <br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('financement/les-organismes-publics/innov-start'))}}">
                    <button class="previous_btn">innov start</button>
                </a>
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a href="{{(asset('/financement/les-organismes-publics/innov-dev'))}}">
                        <button class="next_btn">INNOV DEV</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
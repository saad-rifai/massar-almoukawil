@section('title', 'INNOV DEV')
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
                    <h1>INNOV DEV</h1>
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
                        <p>Sont finan&ccedil;ables par le pr&ecirc;t participatif dans le cadre d&rsquo;un projet innovant, les d&eacute;penses immat&eacute;rielles et/ou mat&eacute;rielles li&eacute;es notamment aux &eacute;l&eacute;ments suivants :</p>
                        <ul>
                        <li>Mise en place des installations de production ;</li>
                        <li>Marketing et commercialisation ;</li>
                        <li>Prospection de nouveaux march&eacute;s, notamment &agrave; l&rsquo;export ;</li>
                        <li>D&eacute;veloppement de nouvelles variantes de produits ;</li>
                        </ul>
                        <p>Besoin en fonds de roulement.</p>
                    </p>
                </div>
                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Cible
                            </h2>
                            <p>
                                PME de droit marocain en phase de croissance ayant réussi une levée de fonds auprès d’investisseurs (fonds de capital-investissement, investisseurs providentiels...) et ayant besoin de fonds pour financer notamment leurs besoins d’investissement et/ou d’exploitation.
                                
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
                            <p>
                                <p>Le financement est octroy&eacute; sous forme de pr&ecirc;t participatif suivant les conditions suivantes :</p>
<ul>
<li>Montant du pr&ecirc;t : 3.000.000 DH maximum sans pour autant d&eacute;passer 50% des apports des investisseurs externes (fonds de capital risque, investisseurs providentiels&hellip;).</li>
<li>&nbsp;</li>
</ul>
<p>Le plafond global d&rsquo;engagement est de 4.000.000 DH sur une m&ecirc;me entreprise, tous concours confondus au titre de la composante 2 avances et pr&ecirc;ts) du "FII".</p>
                            </p>
                        </div>
                                                
                        <div class="col">
                            <h2 class="blue-section-title">Modalités de remboursement </h2>
                            <p class="section_normale_text">
                                Remboursement : sur une durée maximale de 8 ans avec 2 ans de différé.                   

                            </p>
                        </div>
                    </div>
                    <br>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">Conditions de garanties </h2>
                            <p class="section_normale_text">
                                Non
                                                       
                    </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">Coût du financement / de l’opération</h2>
                            <p class="section_normale_text">
                                Non
                                

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
                    <a href="https://ccg.ma/fr/votre-projet/innov-dev" target="_blanck">
                        <button class="lg-btn-produit"><i class="las la-external-link-alt"></i> Visitez le site Web</button>
                    </a>
                </div>
                <br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('financement/les-organismes-publics/innov-risk'))}}">
                    <button class="previous_btn">innov risk</button>
                </a>
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a href="{{(asset('/financement/les-organismes-publics/tatwir-croissance-verte'))}}">
                        <button class="next_btn">TATWIR CROISSANCE VERTE</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
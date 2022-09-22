@section('title', 'INNOV START')
@section('description', " ")

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>INNOV START</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Description 
                    </h2>
                    <p class="section_normale_text">
                        <p>Sont finan&ccedil;ables par le pr&ecirc;t d&rsquo;honneur au titre d&rsquo;un projet innovant, les d&eacute;penses li&eacute;es notamment aux &eacute;l&eacute;ments suivants :</p>
                        <ul>
                        <li>Prototypage et de tests</li>
                        <li>Location/mise &agrave; disposition de facilit&eacute;s techniques, de laboratoires, de serveurs&hellip;</li>
                        <li>Sondage et &eacute;tude de march&eacute;</li>
                        </ul>
                        <p>Elaboration de la strat&eacute;gie et du business mod&egrave;le/business plan&hellip;</p>   
                    </p>
                </div>

                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Cible
                            </h2>
                            <p>
                                
                                Porteur de projet ou entreprise nouvellement créée, dont la candidature a été validée par une structure labellisée par la SNGFE et souhaitant démontrer le potentiel et la faisabilité de son projet basé sur une idée innovante (nouveau produit, nouveau process, mise en exploitation de brevets acquis et non commercialisés initialement, adaptation d’une technologie innovante au marché marocain…).                             
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
                            <p>Le financement est octroy&eacute; sous forme de pr&ecirc;t d&rsquo;honneur (pr&ecirc;t sans suret&eacute;s et sans int&eacute;r&ecirc;ts) plafonn&eacute; &agrave;&nbsp;:</p>
                            <ul>
                            <li>250.000 DH par porteur de projet</li>
                            <li>500.000 DH en cas de projet pr&eacute;sent&eacute; par deux candidats ou plus</li>
                            </ul>
                            <p>Le financement est conditionn&eacute; par la conclusion d&rsquo;une convention d&rsquo;accompagnement entre la cible &eacute;ligible et la structure lab&eacute;lis&eacute;e.</p>
                        </div>
                                                
                        <div class="col">
                            <h2 class="blue-section-title">Modalités de remboursement </h2>
                            <p class="section_normale_text">
                                <ul>
                                    <li>P&eacute;riode de diff&eacute;r&eacute; de 2 ans &agrave; partir de la r&eacute;alisation et exploitation du projet</li>
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
                    <p class="section_normale_text"> <a href="{{asset('contacts/organismes-public')}}">voir liste des
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
                <a href="{{(asset('financement/les-organismes-publics/innov-idea'))}}">
                    <button class="previous_btn">innov idea</button>
                </a>
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a href="{{(asset('/financement/les-organismes-publics/innov-risk'))}}">
                        <button class="next_btn">INNOV RISK</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
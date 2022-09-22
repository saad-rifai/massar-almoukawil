@section('title', 'Pogramme FORSA')
@section('description', '
Sous la conduite éclairée de Sa Majesté le Roi Mohammed VI, Que Dieu l’Assiste, le Maroc
construit une
stratégie globale de développement socio-économique et de progrès humain.
Le gouvernement a donc inscrit parmi ses priorités l’encouragement à l’entrepreneuriat à travers
plusieurs
dispositifs dont le Programme FORSA.')

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Programme FORSA</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Objet
                    </h2>
                    <p class="section_normale_text">accompagner 10 000 projets en 2022, en alliant le financement et
                        l’accompagnement.</p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Description
                    </h2>
                    <p class="section_normale_text">
                        Sous la conduite éclairée de Sa Majesté le Roi Mohammed VI, Que Dieu l’Assiste, le Maroc
                        construit une
                        stratégie globale de développement socio-économique et de progrès humain.
                        Le gouvernement a donc inscrit parmi ses priorités l’encouragement à l’entrepreneuriat à travers
                        plusieurs
                        dispositifs dont le Programme FORSA.
                        Ce programme ambitieux vise à accompagner 10 000 projets en 2022, en alliant le financement et
                        l’accompagnement.
                        Le programme FORSA s’adresse à tous, sans conditions de préqualifications particulières.
                        Opportunité de développer son projet, pour les porteurs d’idées ainsi que pour les jeunes
                        entrepreneurs.
                        « Formation, Incubation et financement».
                    </p>
                </div>
                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Cible
                            </h2>
                            <p class="section_normale_text">
                                Le programme FORSA s’adresse à tous, sans
                                conditions de préqualifications particulières.
                                Le programme cible l’accompagnement et le
                                financement de 10.000 porteurs de projets en 2022
                                incluant l’ensemble des secteurs de l’économie, en
                                respectant les principes d’équité régionale et de
                                genre.
                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Critères d’éligibilité
                            </h2>
                            <p class="section_normale_text">
                                Le programme FORSA est un programme
                                ambitieux et novateur qui s’adresse à tous les
                                résidents au Maroc et MRE de 18 ans et plus,
                                qu’ils soient porteurs d’idées ou de projets
                                d’entrepreneuriat, auto-entrepreneurs, ou
                                fondateurs d’entreprise ayant moins de 3 ans.


                            </p>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title"> Plafond de financement </h2>
                            <p class="section_normale_text">
                                Le financement consiste en un prêt d’honneur (0% d’intérêt), qui pourra aller jusqu’à
                                <strong>100.000 DH</strong>, dont <strong>10.000 DH</strong> en subvention.
                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Modalités de remboursement </h2>
                            <p class="section_normale_text">
                                La durée maximale de remboursement du prêt est de 10 ans avec un différé de 2 ans.


                            </p>
                        </div>
                    </div>
                    <br>
                    <h2 class="blue-section-title"> Documents nécessaires </h2>
                    <p class="section_normale_text">
                        − Aucun document n’est demandé lors de l’inscription sur la plateforme. Il faut s’assurer de
                        l’exactitude
                        des informations renseignées. Dans un stade plus avancé du processus de sélection /
                        accompagnement,
                        des documents vont être demandés par les experts (Ex de documents : Carte d’identité nationale,
                        documents administratifs de la structure (si applicable), etc.) <br>
                        − Il suffit de remplir le formulaire d’inscription sur le site : <a
                            href="https://www.forsa.ma">www.forsa.ma</a> <br>
                        − Tous les projets retenus à l’issue de l’étape de sélection suivront une formation en
                        e-learning. Les projets <br>
                        les plus prometteurs ou innovants suivront le programme d’incubation). <br> Quel que soit le
                        parcours, le
                        porteur du projet sera accompagné lors de la préparation de son dossier de financement.
                    </p>
                </div>
                <br>


                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Contact
                            </h2>
                            <div class="row">
                                <div class="col">
                                    <ul class="section_normale_contact_list">
                                        <li>
                                            <span class="section_normale_contact_list_icon "><i
                                                    class="las la-phone position-absolute top-50 start-50 translate-middle"></i></span>
                                            <a href="tel:+5544">+5544</a>
                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-link position-absolute top-50 start-50 translate-middle"></i></span>
                                            <a href=" http://www.forsa.ma/"> www.forsa.ma</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col">

                        </div>

                    </div>

                </div>
                <hr class="section_hr">
                <div class="text-containet text-center">
                    <a href="http://www.forsa.ma/" target="_blanck">
                        <button class="lg-btn-produit"><i class="las la-external-link-alt"></i> Visitez le site
                            Web</button>
                    </a>
                </div>
                <br>
                <br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">   
                <a href="{{(asset('/financement/credit-commecial/indh'))}}">
                    <button class="previous_btn">INDH</button>
            </a></div>
            <div class="col">
    
               
            </div>
         </div>
        <hr>
        @include('assets.footer')
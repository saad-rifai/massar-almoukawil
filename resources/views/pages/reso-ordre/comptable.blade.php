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
                    ORDRE DES EXPERTS 
COMPTABLES

                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    La profession d'expert-comptable est regroupée au sein de l'Ordre des Experts-Comptables ; institution dotée de la 
personnalité morale et régie par la loi no 15/89. C’est une base de données de l'ensemble des experts-comptables en 
exercice sur le territoire Marocain.

                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <ul>
                        <li>La profession d'expert-comptable est regroupée au sein de l'Ordre des Experts-Comptables ; institution dotée de la 
personnalité morale et régie par la loi no 15/89. C’est une base de données de l'ensemble des experts-comptables en 
exercice sur le territoire Marocain.</li>
<li>Admettre dans la profession les experts-comptables selon les normes et les conditions prévues par la loi précitée.</li>
<li>Edicter tout règlement nécessaire à l’accomplissement de sa mission et établir le code des devoirs professionnels 
rendu applicable par le gouvernement. </li>
<li>Assurer, en outre, la défense des intérêts matériels et moraux de la profession d’expert-comptable, éventuellement 
devant les juridictions.</li>
<li>Organiser et gérer œuvres de coopération, de mutualité et d’assurance de ses membres ainsi que les œuvres de retraite. </li>
<li>Représenter la profession d’expert-comptable auprès de l’administration a qui il donne son avis sur toutes les 
questions dont elle le saisit, et auprès des organisations ou organismes internationaux poursuivant des buts analogues 
à ceux qui lui sont assignes par la loi. </li>
                    </ul>

                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>
                    <p class="section_normale_text">
                        L’inscription au tableau de L’Ordre national des médecins dentistes du Maroc est de droit pour
                        les médecins dentistes
                        de nationalité marocaine désireux d’exercer leur profession, à titre privé, remplissant les
                        conditions de l’article 4 de la
                        Loi n° 07-05 relative à L’Ordre national des médecins dentistes.
                    </p>
                </div>

                <hr class="section_hr">
                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Contact
                            </h2>
                            <div class="row">
                                <div class="col">
                                    <ul class="section_normale_contact_list">
                                        
                                        
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    Angle rue Figuig et rue Berton, résidence
les 4 temps, n°bloc c, 4ème étage, Tanger.

                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                            <a href="mailto:https://onmd.ma/contact"> onmd.ma/contact</a> 
                                            
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
                    <a href="https://www.oecmaroc.com/" target="_blanck">
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
                <a href="{{(asset('/reso-ordre/onvm'))}}">
                    <button class="previous_btn">ONVM</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/reso-ordre/opca'))}}">
                        <button class="next_btn">OPCA</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
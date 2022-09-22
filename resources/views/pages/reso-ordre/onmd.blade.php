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
                        ORDRE NATIONAL DES MEDECINS
                        DENTISTES DU MAROC
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        L’Ordre national des médecins dentistes du Maroc regroupe obligatoirement tous les médecins
                        dentistes exerçant leur
                        profession à titre privé au Maroc. Il est doté de la personnalité morale.
                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <p class="section_normale_text">Il édicte tout règlement nécessaire à l'accomplissement de sa
                        mission et établit le code de déontologie des médecins
                        dentistes rendu applicable par voie réglementaire. <br>
                        Il représente la profession de médecin dentiste auprès de l'administration. <br>
                        Il donne son avis sur les projets de lois et règlements concernant la profession ou son exercice
                        ainsi que sur toutes les
                        questions qui lui sont soumises par l'administration et lui fait toute proposition s'y
                        rapportant.
                        Il examine les problèmes qui se rapportent à la profession. Il assure la gestion de ses biens et
                        défend les intérêts
                        moraux et matériels de la profession. <br>
                        Il est consulté par l'administration sur les demandes d'autorisation d'exercice de la profession
                        de médecin dentiste
                        présentées par des étrangers. <br>
                        Il contribue, en coordination avec les établissements d'enseignement supérieur et les
                        associations scientifiques
                        concernées, à l'organisation des actions de formation continue en faveur des médecins dentistes.
                        Il crée et organise toute œuvre de prévoyance et d'assistance sociale au profit de ses membres.
                        Il propose et encourage, en coordination avec les autorités compétentes, toute action visant la
                        promotion de la
                        médecine dentaire et la lutte contre l'exercice illégal de la profession. <br>
                        Il apporte son concours, à la demande du gouvernement, à l'élaboration et à l'exécution de la
                        politique de santé bucco-dentaire. <br>
                        Toute ingérence dans les domaines religieux et politiques lui est interdite. </p>



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
                                        <li>
                                            <span class="section_normale_contact_list_icon "><i
                                                    class="las la-phone position-absolute top-50 start-50 translate-middle"></i></span>
                                            <a href="tel:05 37 68 67 40">05 37 68 67 40


                                            </a>

                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon "><i
                                                    class="las la-fax position-absolute top-50 start-50 translate-middle"></i></i></span>
                                            <a href="Fax : 05 37 68 19 63">05 37 68 19 63</a>
                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    44, rue Aguelmane Sidi Ali 
Agdal 10090 Rabat

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
                    <a href="https://onmd.ma/" target="_blanck">
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
                <a href="{{(asset('/reso-ordre/onigt'))}}">
                    <button class="previous_btn">ONIGT</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/reso-ordre/onvm'))}}">
                        <button class="next_btn">ONVM</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
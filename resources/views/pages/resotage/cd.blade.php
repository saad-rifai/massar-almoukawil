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
                    Club des Dirigeants
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        C’est un hub d’affaires et d’influences, d’envergure national et international, qui regroupe les
                        chefs d’entreprises et les
                        dirigeants ayant le plein pouvoir de tous les secteurs confondus pour développer leurs réseaux
                        d’affaires d’une manière
                        qualitative, sécurisée, efficace et responsable.

                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <p class="section_normale_text">La mission du CLUB est surtout pour servir la communauté CDD,
                        l’écosystème entrepreneurial et l’économie
                        nationale en étant :


                    </p>
                    <ul class="section_normale_list">
                        <li>
                            Créateur d’opportunités
                        </li>
                        <li>Connecteur des leaders</li>
                        <li>Constructeur d’un développement durable.</li>

                    </ul>

                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                    Démarches
                    </h2>
                    <p class="section_normale_text">L’inscription en ligne sur le site. 


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
                                            <a href="tel:0666-392919
"> 0666-392919
</a>
                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    Rue Al Kindy, résidence 
Santa Clara II, bureau N6, 
1er étage.
Tanger 90000

                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                                href="mailto:its.workshop.plus@gmail.com">
                                                its.workshop.plus@gmail.com</a>
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
                    <a href="https://www.cdd.ma/" target="_blanck">
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
                <a href="{{(asset('/resotage/cjd'))}}">
                    <button class="previous_btn">CJD</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/resotage/bni'))}}">
                        <button class="next_btn">BNI</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
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
                        L’association Marocaine des
                        entrepreneurs

                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Une association Marocaine a été créée à Tanger en décembre 2019 à l’initiative d’un groupe
                        d’entrepreneurs de la
                        région du Nord (Tanger – Tétouan – Al Hoceima ) et dont l’objectif et de soutenir les jeunes
                        entrepreneurs et les aider
                        à surmonter les obstacles et les contraintes de l’environnement des affaires.



                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <ul class="section_normale_list">
                        <li>
                            Contribuer à l’amélioration du climat des affaires et à la promotion de l’esprit
                            d’entreprise </li>
                        <li>Accompagner les entrepreneurs dans les aspects formation, encadrement et qualification </li>
                        <li>Permettre aux entrepreneurs et aux professionnels de suivre toutes les nouveautés dans le
                            domaine de
                            l’entrepreneuriat </li>
                        <li>Participer et contribuer au développement économique et social</li>
                        <li>Tisser des relations entre les membres de l’association d’une part et entre tous les acteurs
                            dans le système
                            entrepreneurial en particulier les incubateurs et les investisseurs</li>
                        <li>Tisser des relations entre les membres de l’association d’une part et entre tous les acteurs
                            dans le système
                            entrepreneurial en particulier les incubateurs et les investisseurs</li>
                        <li>Organiser des débats, séminaires et conférences pour développer les capacités et la
                            communication avec les
                            institutions économiques</li>
                        <li>Soutenir et faire des recherches et études dans les différents secteurs professionnels et
                            scientifiques qui ont
                            pour objectif le développement durable </li>

                    </ul>

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
                                            <a href="tel:0668565681 /
0666565983


                                            </a>
                                        </li>
                                       
                                        <li><span class=" section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                Ave du Liban, Résidence Lina,
                                                ppartement 27, 1er étage,


                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                                href="mailto:Contact@mentorship
center.ma">
                                                Contact@mentorship
                                                center.ma</a>
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
                    <a href="https://mentorshipcenter.ma/le-centre/" target="_blanck">
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
                <a href="{{(asset('/resotage/cjp'))}}">
                    <button class="previous_btn">CJP</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/resotage/tpe-pme'))}}">
                        <button class="next_btn">Confédération TPE-PME</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
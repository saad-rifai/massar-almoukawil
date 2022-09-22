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
                        Future Gate de la Faculté
                        Polydisciplinaire à Larache
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Le FUTURE GATE est un centre qui vise la promotion de l’entrepreneuriat estudiantin et la
                        préparation des étudiants
                        au marché du travail. L’objectif est de renforcer les capacités des étudiants et des lauréats,
                        de la faculté
                        Polydisciplinaire à Larache, en matière d’auto emploi, d’emploi salarié et de Softs Skills, afin
                        de faciliter leurs
                        insertions professionnelles dans le marché du travail.
                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <p class="section_normale_text">- A travers une panoplie de prestations, le FUTURE GATE vise à aider
                        chaque étudiante et étudiant à élaborer son projet
                        professionnel, connaitre et valoriser ses compétences et acquérir d’autres compétences lui
                        permettant de réussir son
                        insertion professionnelle. Il offre un centre bien équipé pour incuber les porteurs de projets.
                        <br>
                        - Future Gate de la Faculté Polydisciplinaire à Larache est une réelle opportunité pour faire du
                        networking et tisser des
                        liens de business avec ses partenaires : ANAPEC, DAR Al Moukawil, Larache Mobadara, CGEM TTA et
                        Groupe
                        Bidaya. <br>
                        - « Machrou3i » programme proposé dans le cadre de cet incubateur est riche en mécanismes
                        d’accompagnement :
                        Incubation, conseils, formation, mentorat, accès au réseau, et appui au financement pour vous
                        aider à démarrer et
                        développer votre propre projet. <br>



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
                                            Tél : 05 39 52 39 60 / 63 / Fax : 05 39 52 39 61

                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                            Avenue Omar Ben
                                            Abdelaziz, B.P 745, 92004,
                                            Larache.

                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                            <a href="mailto:Myfpl@uae.ac.ma"> Myfpl@uae.ac.ma</a> /
                                            <a href="mailto:supportfpl@uae.ac.ma"> supportfpl@uae.ac.ma</a>
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
                    <a href="http://www.fpl.ac.ma/" target="_blanck">
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
                <a href="{{(asset('/dom/let'))}}">
                    <button class="previous_btn">let</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/dom/alpha-coworking'))}}">
                        <button class="next_btn">alpha coworking</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
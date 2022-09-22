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
                        ENACTUS
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Enactus est une ONG internationale, créée en 2003, qui œuvre dans le domaine de l’entrepreneuriat social estudiantin et le développement durable. Enactus développe des partenariats entre le monde des affaires et celui de l‘enseignement supérieur afin de
                        préparer les étudiants à contribuer substantiellement au développement de leur pays en tant que futurs leaders entrepreneurs,
                        éthiques et socialement responsables. La création d’Enactus au Maroc s’est faite en 2003 à l’initiative de M. Adnane Raiss.


                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <p class="section_normale_text">Le programme d’Enactus Morocco s’articule autour de formations,
                        séminaires, compétitions et un programme complet
                        d’accompagnement de près des étudiants Enactus. Cet accompagnement s’inscrit dans le processus
                        de mise en place de
                        projets innovants, répondant aux principales problématiques de la communauté.
                    </p>

                    <ul class="section_normale_list">
                        <li>Inspiration & Sensibilisation</li>
                        <li>Formation et Accompagnement</li>
                        <li>Développement de projets</li>
                        <li>Competitions Enactus: Idea challenge- Action challenge- Impact challenge- World cup Enactus.
                        </li>
                    </ul>

                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>

                    <p>Si vous êtes un étudiant et vous voulez bénéficier de ce programme, vous pouvez consulter le lien
                        suivant pour savoir
                        les conditions nécessaires et remplir le formulaire : <a target="_blank"
                            href="https://www.enactus-morocco.org/etudiants/">www.enactus-morocco.org/etudiants</a> </p>
                </div>

                <hr class="section_hr">
                <h2 class="blue-section-title">
                    Contact
                </h2>
                <div class="row">
                    <div class="col">
                        <ul class="section_normale_contact_list">
                            <li>
                                <span class="section_normale_contact_list_icon "><i
                                        class="las la-phone position-absolute top-50 start-50 translate-middle"></i></span>
                                <a href="Tel :+212 537 738 717">Tel :+212 537 738 717</a>


                            </li>
                            <li><span class="section_normale_contact_list_icon"><i
                                        class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                N R701, Technopark -10.Rue Ghandi,
                                Hassan Rabat – Maroc


                            </li>
                            <li>
                                <span class="section_normale_contact_list_icon"><i
                                        class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                <a href="mailto:melghaib@yahoo.fr">
                                    melghaib@yahoo.fr</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="section_hr">
                <div class="text-containet text-center">
                    <a href="http://www.enactus-morocco.org/" target="_blanck">
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

            <a href="{{(asset('/accomp-entr/menara'))}}">
                <button class="previous_btn">Cluster Menara</button>
            </a>
        </div>
        <div class="col">

            <div class="next-btn-box">
                <a href="{{(asset('/accomp-entr/endeavor'))}}">
                    <button class="next_btn">Endeavor</button>
                </a>
            </div>
        </div>
    </div>
    </div>
    <br>

    <hr>
    @include('assets.footer')
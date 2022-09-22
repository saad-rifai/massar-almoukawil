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
                        Espace Bidaya
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Espace Bidaya est un incubateur Social Green Tech implanté à Casablanca et détient un statut
                        associatif. L’incubateur est
                        membre d’Impact Network qui est le premier consortium mondial d’une nouvelle économie, inclusive
                        et durable.

                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <p class="section_normale_text">Espace Bidaya met à la disposition des jeunes entrepreneurs, au
                        Maroc son expertise en matière
                        d’accompagnement ainsi que son réseau international dans le but de soutenir l’innovation et la
                        création d’emplois
                        locaux durables. <br>
                        Espace Bidaya se donne pour mission l’amélioration du niveau de développement humain au Maroc
                        par
                        l’empowerment d’individus porteurs de changement et par la valorisation de leurs initiatives à
                        travers la
                        promotion de l’entrepreneuriat. <br>
                        Espace Bidaya propose de développer les compétences des entrepreneurs et leur donner accès à un
                        écosystème
                        favorable. A travers un programme d’accompagnement basé sur six axes : <br>
                    </p>

                    <ul class="section_normale_list">
                        <li>Un suivi individualisé : une fois toutes les 2 semaines, les chargées d’accompagnement
                            rencontrent les
                            entrepreneurs pour discuter avec eux des blocages, des avancées et effectuer de possibles
                            mises en relations</li>
                        <li>Des formations avec des experts sur des thématiques utiles pour les entrepreneurs selon les
                            avancées de leur
                            projet. Différents sujets sont traités selon les besoins : marketing, finance, volet
                            juridique, business plan…</li>

                    </ul>
                    <p class="section_normale_text">L’incubateur organise 1 à 3 formations par mois.</p>
                    <ul>
                        <li>Mise à disposition de l’espace de coworking, mise à disposition du matériel (ordinateurs,
                            rétroprojecteur)</li>
                        <li>Mise en relation avec des partenaires associatifs, institutionnels, entrepreneuriaux</li>
                        <li>Organisation d’événements (projection de films, conférences, débats, tables rondes, ateliers
                            de travail)</li>
                        <li>Accès au réseau international Impact Network présent dans 20 pays, avec 22 incubateurs.</li>
                        <li>Cet écosystème est constitué d’une part, d’infrastructures physiques à travers une activité
                            de coworking ;
                            d’autre part, de réseaux de partenaires, de mentors, de formateurs, à travers une activité
                            d’incubation et de
                            mobilisation des acteurs de l’entrepreneuriat et de l’innovation au Maroc.</li>
                    </ul>
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
                                <a href="Tel :05 22 25 13 61">Tel :05 22 25 13 61</a>


                            </li>
                            <li><span class="section_normale_contact_list_icon"><i
                                        class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                        33 Bis rue le Titien Casablanca


                            </li>
                            <li>
                                <span class="section_normale_contact_list_icon"><i
                                        class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                <a href="mailto:sarah.diouri@bidaya.io">
                                sarah.diouri@bidaya.io</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="section_hr">
                <div class="text-containet text-center">
                    <a href="http://www.bidaya.io/" target="_blanck">
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

                <a href="{{(asset('/accomp-entr/endeavor'))}}">
                    <button class="previous_btn">Endeavor</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/accomp-entr/hseven'))}}">
                        <button class="next_btn">HSeven</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br>

    <hr>
    @include('assets.footer')
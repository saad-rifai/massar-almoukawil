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
                        HAPPY VENTURES


                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Happy Ventures est membre de l’écosystème africain de l’innovation et travaille au développement
                        d’un cadre
                        d’accélération de l’innovation virtuelle pour les startups au Moyen-Orient et en Afrique.

                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <p class="section_normale_text">Quelle que soit l'étape de démarrage, HSEVEN a un programme sur
                        mesure pour la croissance du projet. </p>

                    <ul class="section_normale_list">
                        <li>Augmentation : Veiller sur les nouvelles possibilités technologiques, leur temps de
                            maturation prévu et ce qu'il
                            faut pour s'y préparer.</li>
                        <li>Collaboration : Veiller à tirer parti des forces du projet et à trouver la bonne combinaison
                            pour maximiser le
                            potentiel dans les plus brefs délais.</li>
                        <li>Accélération : Examiner l’organisation, les processus et la couverture fonctionnelle.
                            Proposition de le
                            décomposer et de le reconstruire à nouveau sur de nouvelles bases technologiques. </li>

                    </ul>

                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>

                    <p class="section_normale_text">Si vous voulez bénéficier de ces services, vous pouvez accéder à ce
                        lien : <a target="_blank"
                            href="https://www.happyventures.ma/s/login/">www.happyventures.ma/s/login</a> </p>

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
                                <a href="Tel:05 22 22 06 45">Tel :05 22 22 06 45</a>


                            </li>
                            <li><span class="section_normale_contact_list_icon"><i
                                        class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                Tour Ivoire 3, 6ème Etage,
                                Boulevard Sidi Mohamed Ben
                                Abdellah - Casablanca, Maroc.


                            </li>
                            <li>
                                <span class="section_normale_contact_list_icon"><i
                                        class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                <a href="mailto:contact@happyventures.ma">
                                    contact@happyventures.ma</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="section_hr">
                <div class="text-containet text-center">
                    <a href="https://www.happyventures.ma/s/login/" target="_blanck">
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

                <a href="{{(asset('/accomp-entr/hseven'))}}">
                    <button class="previous_btn">HSeven</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/accomp-entr/cfcim'))}}">
                        <button class="next_btn">Kluster CFCIM</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br>

    <hr>
    @include('assets.footer')
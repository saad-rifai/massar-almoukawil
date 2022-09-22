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
                        Incubateur Privé Badir
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Mediterranean Center of Consulting and Mentorship situé en plein centre-ville de Tanger (Place
                        Nejma) et très facilement
                        accessible à l'honneur de vous annoncer le lancement d'un INCUBATEUR PRIVE BADIR. Cet incubateur
                        est dédié aux
                        porteurs de projets, startups, Entrepreneurs et Investisseurs.
                    </p>
                </div>

                <br>
                <div class="sample_table mb-5">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Services</th>
                                <th scope="col">Tarifs</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <ul class="">
                                        <li>Un accompagnement 100% individualisé des
                                            porteurs de projets, Startups, Entrepreneurs, en
                                            mettant à leur service :</li>
                                        <li>Un Espace COWORKING : Open Spaces, Salle de
                                            réunion ...</li>
                                        <li>Des experts -Métiers pour développer votre Business
                                            Model, élaborer votre Business plan, vous conseiller
                                            sur tous les aspects juridiques des sociétés </li>
                                        <li>Des formations sur mesure</li>
                                        <li>Un réseau de partenaires privés et publics (Mentors,
                                            Institutions, Importateurs, Exportateurs,
                                            Fournisseurs...</li>
                                    </ul>
                                </td>
                                <td>Prix à partir de 1500 Dhs</td>

                            </tr>


                        </tbody>
                    </table>
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
                                            06 68 56 56 81 / 06 75 37 91 52

                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                            Résidence Lina, rue Liban 1 er
                                            étage n 27 Tanger Maroc
                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                            <a href="mailto:Contact@mentorshipcenter.ma">
                                                Contact@mentorshipcenter.ma</a>
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
                    <a href="https://mentorshipcenter.ma/" target="_blanck">
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
                <a href="{{(asset('/dom/alpha-coworking'))}}">
                    <button class="previous_btn">alpha coworking</button>
                </a>
            </div>
            <div class="col">

            </div>
        </div>
        <hr>
        @include('assets.footer')
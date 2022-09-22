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
                        Alpha coworking
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Alpha coworking est un espace de travail dédié pour les entrepreneurs, les innovateurs et les
                        organisations à impact social.
                        Basés en plein centre-ville de Fahs-Anjra, il offre des bureaux privés, un espace de coworking,
                        et des salles de réunion et des
                        installations de soutien aux entrepreneurs et entreprises de toute taille dans un espace
                        magnifiquement conçu.
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
                                        <li>Salle de réunion grande max 24 personnes 40m²</li>
                                        <li>Salle de réunion moyenne max 12 personnes 20m²</li>
                                        <li>Deux petites salles de réunion max 8 personnes 18m² </li>
                                    </ul>
                                </td>
                                <td>Entre 250-500 par 4 heures</td>

                            </tr>
                            <tr>
                                <td>Un espace de travail clé en main avec accès à des services personnalisés
                                    Les bureaux comprennent : <br>
                                    <ul class="">
                                        <li>Mobilier haut de gamme.</li>
                                        <li>Raccordement internet haut débit – fibre optique (Ethernet + Wifi).</li>
                                        <li>Air conditionné.</li>
                                        <li>Une ligne de téléphone fixe dédiée.</li>
                                        <li>Accès à une imprimante, un scanner et une photocopieuse</li>
                                    </ul>
                                </td>
                                <td>à partir de 100 DH/4Heures</td>

                            </tr>
                            <tr>
                                <td><strong>Open Space</strong> <br>
                                    4 m² de surface <br>
                                    WIFI fibre optique <br>
                                </td>
                                <td>30 DHS pour toute la journée</td>

                            </tr>
                            <tr>
                                <td>Cafeteria</td>
                                <td>Gratuite</td>

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
                                            05 39 94 08 85 / 06 66 04 27 49

                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                            41, Rue Senhaja
                                            Boulevard Moulay
                                            Youssef Tanger

                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                            <a href="mailto:alphacoworkingtanger@gmail.com">
                                                alphacoworkingtanger@gmail.com</a>
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
                    <a href="https://www.facebook.com/Alpha-coworking-109194091511649/" target="_blanck">
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
                <a href="{{(asset('/dom/fpl'))}}">
                    <button class="previous_btn">fpl</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/dom/badir'))}}">
                        <button class="next_btn">badir</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
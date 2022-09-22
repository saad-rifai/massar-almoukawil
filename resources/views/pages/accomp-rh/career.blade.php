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
                        Career Center


                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Les Career Centers de Tanger ont pour objectif de renforcer l’employabilité des jeunes, en
                        accompagnant chaque étudiant
                        vers la construction d’une carrière professionnelle réussie. Les Career Centers sont un espace
                        d’échange, où l’on retrouve
                        différents acteurs du marché du travail. On y trouve à la fois des étudiants, mais également des
                        employeurs, des
                        entreprises, ou encore des Alumnis. <br>
                        Les Career Centers proposent différents services rendus possibles grâce à une équipe déterminée,
                        dont des conseillers
                        d’orientation toujours prêts à rencontrer, et à conseiller les étudiants, tout cela dans le but
                        d’aider les jeunes à trouver la
                        voie professionnelle qui leur corresponde.


                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <p class="section_normale_text">Les Career Centers proposent différents services :</p>
                    <ul>
                        <li>Mise en relation avec des demandeurs d’emploi, qui ont bien préparé pour commencer le
                            travail.
                        </li>
                        <li>Service d’auto-diagnostique,</li>
                        <li>Service d’orientation avec des informations sur les secteurs, et les métiers,
                        </li>
                        <li>Service de préparation à l’emploi, </li>
                        <li>Ateliers de formation pour former et préparer les jeunes au monde du travail. </li>
                    </ul>


                    <hr class="section_hr">
                    <h2 class="blue-section-title">
                        Contact
                    </h2>
                    <div class="sample_table mb-5">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">EMAIL</th>
                                    <th scope="col">ADRESSE</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>

                                        <a href="mailto:contact.uae@careercenter.ma">
                                            contact.uae@careercenter.ma</a>

                                    </td>
                                    <td>
                                        Ecole Nationale des Sciences
                                        Appliquées (ENSA) de Tanger,
                                        Ancienne Route de l’Aéroport, Km
                                        10, Ziaten Tanger Boukhalef 90000
                                        Tanger
                                    </td>

                                </tr>
                                <tr>
                                    <td>

                                        <a href="mailto:zbenzian@careercenter.ma">
                                            zbenzian@careercenter.ma</a>

                                    </td>
                                    <td>
                                        nstitut Spécialisé dans les Métiers
                                        de l’Offshoring et les Nouvelles
                                        Technologies de l'information et de
                                        la Communication (ISMONTIC)
                                        Route de Rabat, Tanger
                                    </td>

                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Institut Spécialisé dans les Métiers
                                        de l’Offshoring (ISMO) Tétouan
                                        Shore,Rondpoint Colainord, Fem
                                        Laaliq Tétouan</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr class="section_hr">
                </div>
                <div class="text-containet text-center">
                    <a href="http://www.careercenter.ma/" target="_blanck">
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
                <a href="{{(asset('/accomp-rh/ofppt'))}}">
                    <button class="previous_btn">OFPPT</button>
                </a>
            </div>
            <div class="col">
                <div class="next-btn-box">

                    <a href="{{(asset('/accomp-rh/saadi'))}}">
                        <button class="next_btn">UAE</button>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <br>

    <hr>
    @include('assets.footer')
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
                        L’ordre des Avocats du
                        Maroc
                        Les avocats d’affaires
                        (Intervention lors des difficultés)


                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Un avocat est un véritable partenaire qui peut vous conseiller dans les procédures judiciaires
                        et défendre les intérêts de
                        l'entreprise à toutes les étapes de son existence. Qu'il s'agisse de négocier ou de rédiger des
                        contrats commerciaux, de
                        lever des capitaux, d'embaucher et de licencier des agents, ou lors d'opérations stratégiques,
                        il vous conseillera et vous
                        assistera en cas de besoin.


                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <ul>
                        <li>L’expérience étendue des avocats dans le domaine des procédures amiables.</li>
                        <li>Une pratique forte dans le domaine des procédures judiciaires notamment de difficultés
                            d’entreprises.
                        </li>
                        <li>Une pratique de premier rang dans le contentieux et les faillites.</li>
                    </ul>

                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>
                    <p class="section_normale_text">
                        Pour recruter un avocat d’affaire qui peut vous aider à résoudre les difficultés de votre
                        entreprise, vous pouvez
                        consulter le site web officiel du Barreau de Tanger et choisir le ou la liste des avocats qui
                        existent dans la phase « aide
                        à la création ».
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
                                            <a href="tel:05 39 32 53 31
">05 39 32 53 31


                                            </a>

                                            </a>
                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon "><i
                                                    class="las la-fax position-absolute top-50 start-50 translate-middle"></i></i></span>
                                            <a href="Fax : 05 39 32 53 33"> 05 39 32 53 33</a>
                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                            17 Rue Abou Bakr Razi Administratif,
                                            Tanger, Maroc

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
                    <a href="http://www.barreautanger.org/" target="_blanck">
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
                <a href="{{(asset('/aide-diff/livre-v'))}}">
                    <button class="previous_btn">Code de Commerce </button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/aide-diff/invest-tta'))}}">
                        <button class="next_btn">Le Centre Régional
                            d'Investissement TTA</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
    </div>
    </div>
    <hr>
    @include('assets.footer')
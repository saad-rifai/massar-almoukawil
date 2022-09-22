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
                        Business Network International
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        BNI est une organisation mondiale de réseautage et de recommandation, sa culture repose sur la
                        philosophie Qui
                        Donne Reçoit. Le premier groupe BNI Maroc a vu le jour et intègre le réseau BNI monde. Il a pour
                        objectif d’aider les
                        entreprises à croître et à augmenter leur chiffre d’affaires.


                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <p class="section_normale_text">Offre aux membres la possibilité d’établir et d’entretenir des
                        relations durables et de transmettre des recommandations
                        d’affaires de qualité pour connecter le maximum de professionnels, d’entrepreneurs et
                        professions libérales, les aider à
                        développer leur chiffre d'affaires. <br>
                        Trois façons de Découvrir l’Expérience BNI :


                    </p>
                    <ul class="section_normale_list">
                        <li>
                            <strong>BNI en Présentiel</strong> : Réunions hebdomadaires en Présentiel
                        </li>
                        <li><strong>BNI Online :</strong> Rencontres hebdomadaires via le dispositif BNI ONLINE, Un
                            moyen pratique de se rencontrer.</li>
                        <li><strong>BNI Hybride :</strong> Le meilleur des deux. Se rencontrer en présentiel la première
                            semaine du mois et le reste en ligne.</li>

                    </ul>

                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>
                    <ul>
                        <li>La visite d'un groupe est la première étape pour trouver vos nouveaux partenaires et sphères
                            professionnelles</li>
                        <li>Lors de votre visite, demander à devenir membre auprès du comité d’accueil du Groupe. Ce
                            processus
                            implique de remplir une demande de candidature avec les références et passer un entretien
                            avec le
                            comité.
                        </li>
                        <li>Les <a target="_blank" href="https://bnimorocco.com/fr/whybni">formulaire <i
                                    class="fas fa-external-link-alt"></i></a> de demande de candidatures sont
                            disponibles en ligne</li>
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
                                            <a href="tel:05 32 44 21 52">05 32 44 21 52
                                            </a>
                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon "><i
                                                    class="las la-fax position-absolute top-50 start-50 translate-middle"></i></i></span>
                                            <a href="Fax :  : 05 32 44 21 52">Fax : : 05 32 44 21 52</a>

                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                            Adresse :
                                            Rue lalla Aicha
                                            Résidence al Imane
                                            deuxième étage,
                                            appartement 10
                                            Fès


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
                    <a href="https://www.bni.com/" target="_blanck">
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
                <a href="{{(asset('/resotage/cd'))}}">
                    <button class="previous_btn">CD</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/resotage/aida'))}}">
                        <button class="next_btn">AIDA</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
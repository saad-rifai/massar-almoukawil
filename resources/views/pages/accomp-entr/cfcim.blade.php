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
                    Kluster CFCIM


                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    C’est un programme d'accompagnement de startups. Il a pour l’objectif de contribuer à booster l’écosystème des startups 
et de l’entrepreneuriat au Maroc, aider les jeunes porteurs de projets à avoir accès au réseau CFCIM et mettre à 
disposition un espace dédié aux startups dans les locaux de la CFCIM.


                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <p class="section_normale_text">Quelle que soit l'étape de démarrage, HSEVEN a un programme sur
                        mesure pour la croissance du projet. </p>

                    <ul class="section_normale_list">
                        <li>Mentors et experts : Disponibles et bénévoles pour un accompagnement personnalisé et des mises en relation 
(clients potentiels, entreprises, investisseurs)</li>
                        <li>Kluster Entrepreneurship University : Cycle de formation pour acquérir les compétences nécessaires pour 
mener à bien un projet entrepreneurial</li>
                        <li>Espace de coworking : Accès offert aux startups (bureau, connexion internet, infra globale) </li>
                        <li> Adhésion à la CFCIM : Adhésion offerte pour une période de 2 années</li>
                        <li> Marketing et Communication : Mise en avant systématique de nos finalistes lors de nos communiqués et 
évènements</li>
<li>Financement : Présentation des finalistes au club fermé des Business Angels de la CFCIM</li>

                    </ul>

                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>

                    <p class="section_normale_text">Si vous voulez rejoindre le Kluster CFCIM, vous pouvez consulter le lien suivant : <a target="_blank"
                            href="https://www.cfcim.org/kluster/">www.cfcim.org/kluster</a> </p>

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
                                        <a href="Tel:07 66 33 24 18">Tel:07 66 33 24 18</a> / 
                                        <a href="Tel:05 20 00 08 01"> 05 20 00 08 01</a>


                            </li>
                            <li><span class="section_normale_contact_list_icon"><i
                                        class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                        15 avenue Mers Sultan, 
Casablanca



                            </li>
                            <li>
                                <span class="section_normale_contact_list_icon"><i
                                        class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                <a href="mailto:cfaugeras@cfcim.org">
                                cfaugeras@cfcim.org</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="section_hr">
                <div class="text-containet text-center">
                    <a href="https://www.cfcim.org/kluster/" target="_blanck">
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

                <a href="{{(asset('/accomp-entr/happyventures'))}}">
                    <button class="previous_btn">Happy Ventures</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/accomp-entr/cise'))}}">
                        <button class="next_btn">CISE</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br>

    <hr>
    @include('assets.footer')
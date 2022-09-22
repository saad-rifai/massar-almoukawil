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
                        Fédération Nationale
                        des Syndicats des
                        Pharmaciens du Maroc
                        (F.n.s.p.m.)
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        L'ordre des pharmaciens remplit un double rôle scientifique et disciplinaire. Il a pour mission
                        d'inciter et de
                        coordonner la participation de ses membres au développement des sciences pharmaceutiques, de
                        veiller au respect, par
                        tous ses membres, des lois et règlements qui régissent la profession ainsi que des devoirs
                        professionnels et des règles
                        édictées par le code de déontologie préparé par le Conseil national de l'ordre prévu à l'article
                        4, et rendu applicable par
                        décret et de sauvegarder les traditions d'honneur et de probité de la profession.
                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <ul>
                        <li>La défense de la qualité du diplôme de pharmacien</li>
                        <li>La défense de la qualité du diplôme de pharmacien</li>
                        <li>La défense du monopole pharmaceutique</li>
                        <li>L'information, l'éducation et la communication au plan de la santé à l'intention de la
                            population…etc.</li>
                    </ul>
                    <p>La FNSPM constitue par ailleurs un relais essentiel dans toute stratégie de politique
                        professionnelle, grâce à son
                        organisation décentralisée, lui permettant d'être à l'écoute des désidératas des pharmaciens et
                        pouvoir ainsi faire
                        l'évaluation nécessaire pour savoir traduire les aspirations des pharmaciens auprès des
                        instances concernées.
                        Mais pour que ce rôle soit plus efficient, il y a lieu d'instaurer une culture syndicale rénovée
                        et de professionnaliser du
                        fonctionnement de la Fédération afin de lui garantir la vitalité dans la pérennité. <br>
                        Il s'agit de redynamiser les échanges entre la FNSPM et les autres organismes professionnels de
                        pharmaciens dans le
                        respect mutuel des prérogatives de chacun pour unes action solidaire dont la finalité est
                        l'amélioration des conditions
                        d'exercice du pharmacien dans un environnement économique, juridique et éthique adéquat.
                    </p>


                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                    Démarches
                    </h2>
                    <p class="section_normale_text">
                    Pour s’inscrire, renseigner le formulaire sur le lien : <a target="_blank" href="https://pharmacie.ma/client/auth/signup">www.pharmacie.ma/client/auth/signup</a>
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
                                                                    <a href="tel:05 37 71 32 36">05 37 71 32 36


                                                                    </a>
                                                             
                                                                </li>
                                                                <li>
                                                                <span class="section_normale_contact_list_icon "><i
                                                                            class="las la-fax position-absolute top-50 start-50 translate-middle"></i></i></span>
                                                                    <a href="Fax : 05 37 71 33 51">05 37 71 33 51</a>
                                                                </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    Maison du pharmacien, Secteur 10 n°6 
RP Hay Riad BP 1374 Rabat

                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                            
                                            <a href="mailto:info@pharmacies.ma"> info@pharmacies.ma</a>
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
                    <a href="https://pharmacie.ma/" target="_blanck">
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
                <a href="{{(asset('/reso-ordre/medecin'))}}">
                    <button class="previous_btn">Ordre National des Médecins</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/reso-ordre/onigt'))}}">
                        <button class="next_btn">ONIGT</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
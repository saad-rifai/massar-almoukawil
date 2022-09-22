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
                        Centre des Jeunes Professionnels

                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        CJP est une association à but non lucratif, dont le but est de présenter sur le marché un
                        nouveau concept d’orientation
                        et insertion professionnelle. En effet, l’association est active sur le marché de l’emploi,
                        orientation professionnelle,
                        programme de préparation pour l’emploi, life skills, entrepreneuriat, et s’est entourée de vrais
                        experts et
                        professionnels



                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <ul class="section_normale_list">
                        <li>
                            Développer le niveau professionnel et personnel des jeunes : à travers les activités de
                            développement
                            personnel et professionnel organisées et animées par des experts.</li>
                        <li>Favoriser l’auto-emploi : Accompagner les jeunes porteurs d’idées de projets, pour trouver
                            les moyens
                            techniques et financières nécessaires pour les concrétiser.</li>
                        <li>Participer à l’insertion professionnelle : Une orientation professionnelle efficace,
                            développement des soft-skills des jeunes, et une adéquation formation-emploi</li>
                        <li>Force de proposition politique : Défendre les intérêts des jeunes en proposant des
                            recommandations aux
                            acteurs politiques intéressés.</li>

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
                                            <a href="tel:06 61 55 36 11

">06 61 55 36 11


                                            </a>
                                        </li>


                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                                href="mailto:cjp.direction@gmail.com">
                                                cjp.direction@gmail.com</a>
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
                    <a href="https://www.facebook.com/cip.direction/" target="_blanck">
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
                <a href="{{(asset('/resotage/ime'))}}">
                    <button class="previous_btn">IME</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/resotage/ame'))}}">
                        <button class="next_btn">AME</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
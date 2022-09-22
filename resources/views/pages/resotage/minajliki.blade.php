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
                        Min Ajliki

                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Le programme Min Ajliki est un programme belgo-marocain de soutien à l’entreprenariat féminin au
                        Maroc qui est en
                        phase pilote de 2013 à 2016 sur trois régions (Grand Casablanca, Meknès-Tafilalte et
                        Tanger-Tétouan). Il est financé
                        par la Coopération belge et Développement et mis en œuvre avec des partenaires marocains.



                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <p class="section_normale_text">Min Ajliki offre, gratuitement, aux femmes :</p>
                    <ul class="section_normale_list">
                        <li>
                            Des séances de sensibilisation à l’entreprenariat</li>
                        <li>Des ateliers de formation sur l’entreprenariat</li>
                        <li>Un centre de formation à Casablanca</li>
                        <li>Un accompagnement par des conseillers en création d’entreprises</li>
                        <li>Des incubateurs d’entreprises à Casablanca, Tanger et Meknès
                        </li>

                    </ul>

                </div>
                
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>
                    <p class="section_normale_text">Toute femme entrepreneuse potentille ou en activité peut bénéficier
                        de la sensibilisation de la formation et de
                        l’accompagnement. Pour s’inscrire à ce programme, vous pouvez renseigner le formulaire sur le
                        lien suivant : <a target="_blank"
                            href="http://minajliki.com/loffre-minajliki/">www.minajliki.com/loffre-minajliki</a> </p>


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


                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                            Boulevard Andalousie, Imm
                                            Anatolia 5° Etage N°16,
                                            Tanger 90000, Morocco


                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                                href="mailto:minajliki@apefe.org">
                                                minajliki@apefe.org</a>
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
                    <a href="http://minajliki.com/" target="_blanck">
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
                <a href="{{(asset('/resotage/moubadara'))}}">
                    <button class="previous_btn">Moubadara</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/resotage/ime'))}}">
                        <button class="next_btn">IME</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
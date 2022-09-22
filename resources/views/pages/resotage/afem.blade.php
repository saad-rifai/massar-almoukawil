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
                        Association des Femmes Chefs
                        d’entreprises du Maroc
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Une association indépendante de femmes chefs d’entreprises du Maroc qui partagent une vision et
                        des intérêts
                        communs. Elle a été fondée en Septembre 2000 et représente les femmes chefs d’entreprises aux
                        différentes
                        institutions à caractère économique tout en servant d’organe de liaison entre les pouvoirs
                        publics et autres institutions.



                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <p class="section_normale_text">L’association a élaborée un programme aux femmes qui désirent
                        entreprendre, créer, redessiner l’avenir de leur
                        entreprise. Les services de ce programme sont :</p>
                    <ul class="section_normale_list">
                        <li>
                            Hébergement provisoire en co-working.</li>
                        <li>Un espace d’assistance</li>
                        <li>Un soutien sur mesure.
                        </li>
                        <p class="section_normale_text">L’AFEM propose aussi un programme du E-learning pour aller plus
                            loin, apprendre et grandir.
                            Elle organise aussi des évènements sur des sujets d’actualité pour les femmes chefs
                            d’entreprises. </p>

                    </ul>

                </div>
                
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>
                   <p>Pour devenir un membre AFEM, il y a deux types des membres :</p> 
                   <p>L'admission au sein de l'association en qualité de <strong>membre actif</strong> est ouverte à toute femme chef d'entreprise au Maroc 
satisfaisant aux critères et aux conditions d'admission relevant des statuts de l’association. Vous pouvez telelcharger le 
dossier d’inscription a partir de ce lien : <a target="_blank" href="https://www.afem.org.ma/_files/ugd/b0ca03_7788d764bd974ef9b21bdcc31d62f2e4.pdf">www.afem.org.ma</a> </p> 
<p class="section_normale_text">L'admission au sein de l'association en qualité de <strong>membre sympathisant</strong> est ouverte à toute femme ou homme au 
Maroc satisfaisant aux critères et aux conditions d'admission relevant des statuts de l’association. Vous pouvez 
telelcharger le dossier d’inscription a partir de ce lien : <a target="_blank" href="https://www.afem.org.ma/_files/ugd/b0ca03_7788d764bd974ef9b21bdcc31d62f2e4.pdf">www.afem.org.ma</p>

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
                                            <a href="tel:06 59 64 15 45
">06 59 64 15 45

                                            </a>
                                        </li>

                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                            Route de Rababt; ENCG Tanger
                                            90000 Tanger Boukhalef,


                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                                href="mailto:afemnordtta@gmail.com">
                                                afemnordtta@gmail.com</a>
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
                    <a href="https://www.afem.org.ma/" target="_blanck">
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
                <a href="{{(asset('/resotage/tpe-pme'))}}">
                    <button class="previous_btn">Confédération TPE-PME</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/resotage/cgem'))}}">
                        <button class="next_btn">CGEM</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
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
                        ORDRE NATIONAL DES
                        ARCHITECTES


                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Le Conseil de l’Ordre des Architectes est institué par la loi 16/89 relative à l’exercice de la
                        profession et à l’institution
                        de l’Ordre National des architectes. L’Ordre National des Architectes a pour mission d’assurer
                        la sauvegarde des
                        principes et traditions de moralité, de dignité, de probité qui font l’honneur de la profession
                        d’architecte et de veiller au
                        respect par ses membres des lois, règlements et usages qui régissent la profession. L’Ordre des
                        architectes exerce ses
                        attributions par l’intermédiaire d’un Conseil National et des Conseils Régionaux.

                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <ul class="section_normale_list">
                        <li>Il veille sous la responsabilité de son président au maintien de la discipline intérieure
                            de l’ordre, à l’exécution des lois
                            et règlements qui régissent la profession, au respect de l’honneur et de la probité de la
                            profession</li>
                        <li> Il institue les commissions de discipline concernant les architectes qui auront manqué aux
                            devoirs de leur profession
                            ou aux obligations édictées par le code de devoirs professionnels ou par le règlement
                            intérieur,</li>
                        <li> Il veille à l’application des décisions du conseil national,</li>
                        <li> Il examine les problèmes qui se rapportent à la profession et peut en saisir le conseil
                            national de l’ordre</li>
                        <li>Il assure, dans un ressort, la gestion des biens qui lui sont affectés par l’ordre,
                        </li>
                        <li>Il perçoit les cotisations des membres et recueille les fonds nécessaires aux oeuvres
                            sociales et aux actions du conseil
                            de l’ordre.</li>
                    </ul>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>
                    <p> L'inscription de tout architecte ou société d'architectes au tableau de l'ordre des architectes
                        est une obligation. <br> Elle se fait auprès du Conseil Régional, dont dépend la domiciliation
                        de l'architecte ou de la société des architectes,
                        par le dépôt d'un dossier comprenant :
                    </p>
                    <ul class="section_normale_list">
                        <li>Une copie certifiée conforme du diplôme</li>
                        <li> Une copie certifiée conforme d'une pièce d'identité</li>
                        <li> Une copie certifiée conforme de la décision administrative, délivrée par le Secrétariat
                            Général du Gouvernement,
                            d'autorisation d'exercer</li>
                        <li> Les frais d'inscription sous forme de virement bancaire libellé au nom du Conseil National,
                            et fixés par lui. Le droit
                            d'inscription n'est pas renouvelable en cas de transfert d'un demandeur d'une région à une
                            autre du pays.</li>
                        <li>Un exemplaire des statuts, dans le cas d'une société d'architectes, accompagné des
                            inscriptions à l'ordre des différents
                            membres de la société.
                        </li>
                    </ul>
                    <p class="section_normale_text">Après son inscription au tableau de l'ordre national des
                        architectes, un architecte est tenu de prononcer devant le
                        Conseil National, et sur convocation de son président le serment.</p>
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
                                            <a href="tel:05 39 34 03 55">05 39 34 03 55


                                            </a>
                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                            Rue AL YAMANE, Résidence “4
                                            Temps”, Immeuble C, 6 ème étage,
                                            N°144, Tanger, 90000


                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                                href="mailto:tangercroat@gmail.com">
                                                tangercroat@gmail.com</a>
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
                    <a href="https://croatanger.org/" target="_blanck">
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

            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/reso-ordre/medecin'))}}">
                        <button class="next_btn">Ordre National des Médecins</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
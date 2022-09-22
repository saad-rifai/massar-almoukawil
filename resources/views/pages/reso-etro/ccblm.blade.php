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
                    Chambre de Commerce Belgo-Luxembourgeoise au Maroc
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    La Chambre de Commerce Belgo-Luxembourgeoise au Maroc (CCBLM) est une association à but non lucratif qui 
œuvre pour le développement et la promotion des relations économiques et commerciales entre la Belgique, le Grand-duché de Luxembourg et le Maroc



                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <ul class="section_normale_list">
                        <li>
                       <strong> Évènement et Réseautage :</strong> développer votre réseau professionnel via des actions de Networking favorisant 
les B2B</li>
                        <li><strong>Opportunités d’affaires : </strong> Accéder aux publications d’opportunités d’affaires ainsi qu’aux appels d’offres 
nationaux et internationaux. </li>
                        <li><strong>Accompagnement et Expertise :</strong> profiter d’une expertise et d’un conseil sur mesure des consultants via le 
pôle d’experts de la CCBLM</li>
                        <li><strong>Voyage d’Affaires :</strong> Participer aux voyages d’affaires pour donner un élan à votre business à des tarifs 
préférentiels</li>
                        <li><strong>Demande de VISA :</strong> Bénéficier de l’aide de la CCBLM pour la prise de rendez-vous et la constitution de vos 
dossiers de visa d’affaires.
 </li>
                        <li><strong>Salons et Foires :</strong> participer à des salons et des foires sous plusieurs thèmes dans divers secteurs au niveau 
national et international</li>

                    </ul>

                </div>
                

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>
                    <p>
                        Pour devenir un membre, remplir le formulaire disponible sur le lien suivant : <a href="https://ccblm.ma/devenirmembre/" target="_blank" rel="noopener noreferrer">https://ccblm.ma/devenirmembre/ </a>. S’attendre ensuite à recevoir un courriel (à l’adresse fournie) dans les 48 heures. Une fois que la
                        CCBLM aura reçu le paiement d’adhésion, une confirmation par un dernier courriel sera envoyée. Dès lors,
                        l’accès sera ouvert à tous les services offerts aux membres.
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
                                            <a href="tel:05 22 20 00 61">05 22 20 00 61</a> 
                                            
                                            
                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    124, AV. Moulay Hassan 1er, 
20070 – Casablanca
                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                                href="mailto:contact@ccblm.ma">contact@ccblm.ma</a>
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
                    <a href="https://ccblm.ma/" target="_blanck">
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
                <a href="{{(asset('/reso-etro/ccispm'))}}">
                    <button class="previous_btn">CCISPM</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/reso-etro/ccimi'))}}">
                        <button class="next_btn">CCIMI</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
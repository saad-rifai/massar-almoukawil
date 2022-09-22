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
                        Chambre Allemande de Commerce et
                        d’Industrie au Maroc
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        La Chambre Allemande de Commerce et d'Industrie au Maroc (AHK Maroc) est le partenaire compétent
                        pour les
                        relations économiques germano-marocaines. L'AHK Maroc est la principale adresse de proximité,
                        qualifiée pour
                        répondre et conseiller toutes les parties prenantes sur les questions liées au marché allemand
                        ou marocain.


                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <ul class="section_normale_list">
                        <li>
                            Business Développent
                        </li>
                        <li> Service Foires et Salons </li>
                        <li>Service Visa d’Affaire </li>
                        <li>Boostez votre visibilité grâce à l’AHK</li>
                        <li>Service emploi</li>
                        <li>Service de traduction</li>
                        <li>Formation professionnelle </li>
                        <li>Le Programme Migration et Emploi</li>
                        <li>Senior Experten Service</li>
                    </ul>

                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Avantages
                    </h2>

                    <ul class="section_normale_list">
                        <li>
                            Une longueur d’avance en matière d’information.
                        </li>
                        <li> Un réseau de contacts</li>
                        <li>Un service professionnel a des conditions
                            favorables.
                        </li>
                        <li>Opportunités commerciales supplémentaires
                        </li>
                    </ul>

                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>

                    <p>Pour devenir un membre de la
                        Chambre Allemande, remplir le
                        dossier d’adhésion disponible sur le
                        lien : <a
                           target="_blank" href="https://marokko.ahk.de/fr/adhesion/demande-dadhesion">www.marokko.ahk.de/fr/adhesion/demande-dadhesion</a>
                    </p>

                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Frais
                    </h2>
                    <p>Montants de la cotisation annuelle :</p>
                    <ul class="section_normale_list">
                        <li>
                            300€/ 3000 MAD (Commerce,
                            Services, et Organisations)

                        </li>
                        <li> 600,00 € / 6000,00 MAD
                            (Industrie, Hôtels, Banques,
                            Assurances, Transport...)
                        </li>
                    </ul>
                    <p>Vous pouvez régler le montant de la
                        cotisation en espèces, par chèque
                        bancaire et par virement bancaire.</p>

                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                    Pièce à fournir
                    </h2>

                    <ul class="section_normale_list">
                        <li>
                        Copie du certificat de 
l’identifiant commun de 
l’entreprise.
                        </li>
                        <li>Copie de l’attestation de 
RIB de l’entreprise.
</li>
                        <li>Copie du dernier bilan 
fiscal.
                        </li>
                        
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
                                            <a href="tel:05 22 42 94 00 / 
01

">05 22 42 94 00 / 
01

                                                </a>

                                            </a>
                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    Lot. El Manar, Villa 18
Rue Ahmed Ben Taher El Menjra
Quartier El Hank 20160 Casablanca
                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                                href="mailto:info@marokko.ahk.de"> info@marokko.ahk.de</a>
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
                    <a href="https://marokko.ahk.de/fr/" target="_blanck">
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
                <a href="{{(asset('/reso-etro/cfcim'))}}">
                    <button class="previous_btn">CFCIM</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/reso-etro/camara'))}}">
                        <button class="next_btn">Camara</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>la Société Marocaine d'Ingénierie Touristique « SMIT »</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">La Société Marocaine d’Ingénierie Touristique – SMIT est une
                        institution publique créée en Décembre 2007 dans le but
                        de mettre en œuvre la stratégie de développement du produit touristique au Maroc. <br><br>
                        Dans un contexte international de plus en plus concurrentiel entre destinations touristiques où
                        la différenciation est de
                        plus en plus rude, l’attractivité est devenue l’un des enjeux majeurs du développement. La SMIT
                        place l’attractivité au
                        cœur de ses préoccupations avec pour ambition de valoriser au mieux les atouts de chaque
                        territoire touristique pour en
                        faire un véritable pôle de compétitivité.</p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <p class="section_normale_text">Proposer aux entrepreneurs une panoplie d’opportunités
                        d’investissement qu’offre la
                        transformation de la ressource touristique disponible et la structuration des écosystèmes
                        touristiques des destinations.
                        Offre proposée : Information détaillée (fiches descriptives, photos sur les lieux, circuits) sur
                        :</p>
                    <ul class="section_normale_list">
                        <li>
                            Les projets sujets d’opportunités regroupés par Région, filière, produit, montant
                            d’investissement
                        </li>
                        <li>Les fiches projets détaillées des opportunités</li>
                        <li>Les appels à projet</li>
                    </ul>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>
                    <p class="section_normale_text">
                        Inscription en ligne sur : <a
                            href="https://plateforme.smit.gov.ma/moovapps/easysite/workplace">https://plateforme.smit.gov.ma/moovapps/easysite/workplace</a>

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
                                            +212 5 39 94 26 40 / +212 5 39 94 65 05
                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                            24, Rue Lafayette, 90 000, Tanger
                                        </li>
                                  
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="map-container">

                                <div class="google-maps">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6473.889866612079!2d-5.809551!3d35.776729!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0c7f55dc58fded%3A0x78ce99679c1f0ce0!2sImmeuble%20Oprah%2C%20Rue%20Lafayette%2C%20Tanger%2C%20Maroc!5e0!3m2!1sfr!2sfr!4v1661813111950!5m2!1sfr!2sfr"
                                        width="600" height="450" style="border:0;" allowfullscreen=""
                                        loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <hr class="section_hr">
                <div class="text-containet text-center">
                    <a href="https://smit.gov.ma/" target="_blanck">
                        <button class="lg-btn-produit"><i class="las la-external-link-alt"></i> Visitez le site
                            Web</button>
                    </a>
                </div>
                <br>
                <br>
            </div>
        </div>
        <br>
        <div class="next-btn-box">
            <a href="{{(asset('idee/mic'))}}">
                <button class="next_btn">MIC</button>
            </a>
        </div>
        <hr>
        @include('assets.footer')
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
                    L’association de la zone industrielle 
de Tanger « AZIT »

                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    Association de la zone industrielle de Tanger (Moghogha). Créee en 1990, se fondant en particulier sur articles 960, 981 
du code des obligations et contrats et par analogie avec la législation en matière de copropriété immobilière, l’association 
confère les plus larges pouvoirs à un conseil d’administration en vue de veiller à la participation de tous les industriels 
disposant de lots à la zone industrielle, et à assumer les obligations que leur communauté implique, en vue de gérer au 
mieux les infrastructures communes de la zone industrielle.


                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
<ul class="section_normale_list">
    <li>Améliorer les infrastructures de la zone en mobilisant l’aide des pouvoir publics et en impliquant les membres.</li>
    <li>Nettoyage de la zone et réparation des chaussées.</li>
    <li>l’accompagnement des entreprises industrielles dans leurs objectifs sur le plan humain et technique.</li>
    <li>L’organisation d’activités de formation et de sensibilisation, d’accompagnement à la mise à niveau.</li>
    <li>La représentation des industriels de l’AZIT dans ses différentes démarches avec l’autorité, les élus, 
l’administration ainsi que les organisations publiques et privées.
</li>
    <li>Location de Salle de réunion pour 25 personnes et salle de conférence pour 80 personnes.</li>
    <li>Annuaire des entreprises de la zone classés par secteurs d’activités sur le site web</li>
    
</ul>

                </div>
                
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>
                    <p class="section_normale_text">TDans le site web de l’association, elle existe une rubrique allouer pour le recrutement de l’AZIT. Où vous pouvez 
retrouver des offres en cours et déposer votre CV. Si vous voulez savoir plus, vous pouvez consulter le lien : <a target="_blank" href="http://www.azit.ma/espace-recrutement/">www.azit.ma/espace-recrutement</a>
                    </p>
<p class="section_normale_text">Et aussi vous pouvez remplir un formulaire de recrutement. Si vous voulez consulter le lien : <a target="_blank" href="http://www.azit.ma/formulaire-de-recrutement/">www.azit.ma/formulaire-de-recrutement</a> </p>

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
                                            <a href="tel:05 39 35 06 28 /
05 39 95 75 09
">05 39 35 06 28 /
05 39 95 75 09 

                                            </a>
                                        </li>

                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    125, Allée principale, Zone Industrielle, 
route de Tetouan – Tanger, Maroc.



                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                                href="mailto:azit@azit.ma">
                                                azit@azit.ma</a>
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
                    <a href="http://www.azit.ma/" target="_blanck">
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
                <a href="{{(asset('/reso-secto/aizig'))}}">
                    <button class="previous_btn">AIZIG</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/reso-secto/artisanat'))}}">
                        <button class="next_btn">Chambre Artisanat</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
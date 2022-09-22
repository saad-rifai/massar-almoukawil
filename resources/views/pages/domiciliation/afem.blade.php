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
                    Association des Femmes chefs 
d’Entreprises du Maroc (AFEM), Min 
Ajliki
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    L’ AFEM est une association indépendante de femmes chefs d’entreprises du Maroc qui partagent une vision et des 
intérêts communs. Elle a été fondée en Septembre 2000 et représente les femmes chefs d’entreprises aux différentes 
institutions à caractère économique tout en servant d’organe de liaison entre les pouvoirs publics et autres institutions.

                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <p class="section_normale_text">L’AFEM offre aux entrepreneurs un hébergement provisoire en coworking, elle adapte son siège en un espace ouvert à 
ses membres via des solutions adaptées à leur besoin ponctuel.
                        </p>
                    <ul class="section_normale_list">
                        <li>
                        Mise à disposition de bureaux 
                        </li>
                        <li> Pass permettant l’accès aux bureaux </li>
                        <li>Mise à disposition des salles de réunion avec réservation</li>
                        <li>Téléphonie</li>
                        <li>Connexion wifi haut débit</li>
                        <li>Business Office: imprimante, fax, photocopieuse</li>
                        <li>Espace cafétéria</li>
</ul>
<p class="section_normal_list">En outre, AFEM propose un soutien sur mesure :</p>

<ul  class="section_normale_list">
                    <li>Un séminaire mensuel ouvert à toutes (gratuit pour les membres – payant pour les non membres)</li>
                    <li>Un RDV conseil en face à face de 15mn chaque mercredi matin avec les consultants experts (sur réservation)
</li>
<li>Un plan de suivi adapté à la réalité de la FCE lui permettant de recevoir 4 rencontres en face à face avec un 
consultant expert et 2 pass lui donnant accès aux séminaires (sur étude de dossier).
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
                                                    05 26 26 26 15 
                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                        Route de l’aviation, Ecole 
nationale de commerce et de 
gestion
                                        </li>
                                        <li>
                                        <span class="section_normale_contact_list_icon"><i
                                                class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                            href="mailto:info@afem.org.ma"> info@afem.org.ma</a>
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
    
                <div class="next-btn-box">
                    <a href="{{(asset('/dom/let'))}}">
                        <button class="next_btn">L'incubateur d'entreprises de Tétouan</button>
                    </a>
                </div>
            </div>
         </div>
        <hr>
        @include('assets.footer')
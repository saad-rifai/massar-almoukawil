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
                    Chambre Des Pêches Maritimes de la 
Méditerranée


                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    Les chambres de Pêches Maritimes ont pour objet le recueil des avis et harmonisation des points de vue, définir des 
positions communes pour les défendre auprès des pouvoirs publics en consultations et concertations entre les 
membres.


                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <p class="section_normale_text">Coordination</p>
<ul class="section_normale_list">
    <li>conseil et assistance aux investisseurs,
</li>
    <li>avis consultatif pour arbitrage et règlement de différents </li>
    <li>expertise</li>
</ul>
<p class="section_normale_text">Animation</p>
<ul class="section_normale_list">
    <li>colloques et séminaires</li>
    <li>stage et formation continues</li>
    <li>études et enquêtes</li>
    <li>études et enquêtes</li>
</ul>
<p class="section_normale_text">Gestion</p>
<ul class="section_normale_list">
    <li>établissement ayant des activités de pêches ou d’aquaculture</li>
    <li>établissement d’intérêt général.</li>
    
</ul>
<p class="section_normale_text">Conseil et arbitrage :</p>
<ul class="section_normale_list">
    <li>Recherche scientifique</li>
    <li>formation</li>
    <li>Réglementation et aménagement des pêcheries</li>
    <li>Valorisation et développent</li>
    <li>Promotion du commerce et de la consommation</li>
    <li>Emploi et social. </li>
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
                                       

                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    47 Rue Imam Al Kastalani Villa
n° 9 Quartier Hayani, Tanger
Boite postale 2325 Emsellah, 
Tanger



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
                    <a href="https://www.facebook.com/www.cpmm.ma/" target="_blanck">
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
                <a href="{{(asset('/reso-secto/artisanat'))}}">
                    <button class="previous_btn">Chambre Artisanat</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/reso-secto/agri'))}}">
                        <button class="next_btn">Chambre d’agriculture</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
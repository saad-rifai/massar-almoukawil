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
                    Zone d’Activités Economique d’Aït Kamra 
d’Al Hoceima
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    La Zone d’Activités Economique d’Aït Kamra est une zone d’activités intégrée, centrée sur les ressources naturelles et 
humaines de la région. Elle a pour vocation d’accueillir les activités de proximité et d’accompagner la dynamique 
régionale. <br>
La zone d’activité se trouve à 20 minutes de la ville d’Al Hoceima, dans la province d’Al Hoceima, qui présente de 
nombreux atouts (développements de chantiers structurants, potentialités économiques, etc.). Elle bénéficie d’une 
proximité avec 2 aéroports et 3 ports. <br>
Elle est organisée par MEDZ, qui est leader national dans l’aménagement et la gestion de parcs d’activités dans 
l’industrie et l’offshoring . <br>
Mise en service : 2012 <br>
Superficie aménagé : 27 Ha. <br>
Emplois créés : 500  <br>

                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services 
</h2>
                    <p class="section_normale_text">
                    Parcs industriels intégrés proposant des terrains industriels équipés
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
                                            Tél : 05 37 57 66 78

                                        </li>

                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    Zone d'Activités Economiques 
(ZAE) Ait Kamra
                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                            <a href="mailto:showroom@medz.ma">
                                            showroom@medz.ma</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="text-containet text-center">
                    <a href="https://www.medz.ma/projet/zone-dactivites-economiques-da%c3%aft-kamra/" target="_blanck">
                        <button class="lg-btn-produit"><i class="las la-external-link-alt"></i> Visitez le site
                            Web</button>
                    </a>
                </div>
                        <div class="col">

                        </div>

                    </div>

                </div>




                <br>
                <br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('/zone-ind-ec/Al-Omrane'))}}">
                    <button class="previous_btn">Al Omrane</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/zone-ind-ec/Imzouren'))}}">
                        <button class="next_btn">Zone Imzouren</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
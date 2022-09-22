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
                    Zone industrielle Al Majd
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    La Zone industrielle Al Majd est opérationnelle depuis sa création en 1994 dont la Superficie totale de 23 ha, elle 
accueille différents secteurs d’activités : textile, habillement et autres. <br>
La zone industrielle Al Majd est désormais habilitée à contribuer à la dynamisation de la vie économique dans la jeune 
province du Fahs Béni Makada après achèvement des équipements principaux et l'implantation d'un grand nombre des 
sociétés industrielles. <br>
                    </p>
                </div>


                <br>

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
                                            Tél : 06 61 15 51 22

                                        </li>
                 
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    Zone industrielle Al Majd, Aouama, Tanger

                                        </li>
                                        
                                    </ul>

                                </div>
                            </div>
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
            <a href="{{(asset('/zone-ind-ec/Aizig'))}}">
                    <button class="previous_btn">Aizig</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/zone-ind-ec/Medz'))}}">
                        <button class="next_btn">Medz</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
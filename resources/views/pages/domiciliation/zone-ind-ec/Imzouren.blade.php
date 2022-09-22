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
                    Zone industrielle d'Imzouren
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    Dans le cadre de la mise à disposition d’infrastructures industrielles dans la province d’Al Hociema, une zone industrielle 
a été créée à Imzouren en 1998 avec une superficie totale de 5.5 Ha

                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                    Avantages
</h2>
                    <p class="section_normale_text">
                    La Zone industrielle d'Imzouren se situe à :
                    </p>
                    <ul class="section_normale_list">
                        <li>02 km de la route nationale 2 ;</li>
                        <li>07 km de l’aéroport ;</li>
                        <li>04 km du centre d’Imzouren ;</li>
                        <li>à 20 km d’Al Hoceima ;</li>
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
                                            Tél : <a href="tel:0539 98 20 18">0539 98 20 18</a>

                                        </li>

                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    Rue N°13, Centre 
32252, Imzouren Al 
Hoceima

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
                <a href="{{(asset('/zone-ind-ec/Medz'))}}">
                    <button class="previous_btn">Medz</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/zone-ind-ec/Hostal-Larache'))}}">
                        <button class="next_btn">Hostal de Larache</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
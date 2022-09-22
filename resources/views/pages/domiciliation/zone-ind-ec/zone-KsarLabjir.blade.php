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
                    Zone d’Activité Economique de Ksar 
labjir / Province de Ksar Lakbir
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    Cette zone économique, dont la maîtrise d’ouvrage est assurée par l’APDN, sera érigée sur une superficie de plus de 20 
hectares dans la commune de Ksar Bjir, située à proximité de la ville de Ksar El Kébir.
Ce projet ambitionne d’accueillir les activités industrielles non polluantes, les activités commerciales, les activités de 
services associées aux activités industrielles et commerciales, et les installations administratives et sociales de base.
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
                                    
                                        
                 
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    Ksar Bjir prêt de la ville de 
Ksar El Kébir

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
            <a href="{{(asset('/zone-ind-ec/ZAE'))}}">
                    <button class="previous_btn">ZAE</button>
                </a>
            </div>
            <div class="col">

                
            </div>
        </div>
        <hr>
        @include('assets.footer')
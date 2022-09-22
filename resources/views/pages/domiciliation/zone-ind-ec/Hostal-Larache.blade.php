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
                    Zone Industrielle HOSTAL de 
LARACHE
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    La zone industrielle de Larache HOSTAL initiée en 1989 sur un terrain domanial d’une superficie approximative de 27 
hectares, dans le but de satisfaire le nombre croissant de demandes formulées par les investisseurs nationaux et étrangers 
désirant s’installer dans la province.


                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                    Services 
</h2>
                    <p class="section_normale_text">
                    La zone industrielle de Larache HOSTAL propose aux investisseurs une offre immobilière comprenant :
                    </p>
                    <ul class="section_normale_list">
                        <li>Proposition de terrain s industriels</li>
                        <li>Activités d’hébergement temporaires.</li>
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
                                                    Larache


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
                <a href="{{(asset('/zone-ind-ec/Imzouren'))}}">
                    <button class="previous_btn">Imzouren</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/zone-ind-ec/zone-Assilah'))}}">
                        <button class="next_btn">Zone d'Assilah</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
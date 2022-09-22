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
                    New Real Estate Agency
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    NREA Agence immobilière qui propose des biens immobiliers à l’achat, la vente, et à la location à Tanger et au Maroc.
Elle dispose d'un immeuble dédié aux entreprises offrant différentes tailles de bureaux prêts à l’emploi. 

                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <p class="section_normale_text">NREA vous offre des locaux professionnel, un vaste choix de biens commerciaux en vente et en location à Tanger :
Bureaux <br>
Magasins, <br>
Usines, <br>
Locaux commerciaux <br>

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
                                                    05 39 94 28 43 / 06 61 06 82 44
                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                        Rue Carnot, Immeuble N° 
23 – 8ème étage N° 2 (A coté 
de ATENTO) 90000 –
Tanger
                                        </li>
                                        <li>
                                        <span class="section_normale_contact_list_icon"><i
                                                class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                            href="mailto:info@nreainvest.com"> info@nreainvest.com</a>
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
                    <a href="http://www.nreainvest.com/" target="_blanck">
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
                    <a href="{{(asset('/hotel-dentreprise/regus'))}}">
                        <button class="next_btn">regus</button>
                    </a>
                </div>
            </div>
         </div>
        <hr>
        @include('assets.footer')
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
                    Le Club OEA du Maroc
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    Le Club des Opérateurs Economiques Agréés (OEA), est une association professionnelle qui regroupe différents 
opérateurs économiques agréés de la Supply Chain du Maroc.

                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
<ul class="section_normale_list">
    <li>Représenter les opérateurs économiques agréés de la Supply Chain au Maroc, au niveau national et international et 
auprès les différentes instances publiques ou privées.
</li>
    <li>Participer au développement et la mise à niveau des opérateurs du commerce extérieur de la Supply Chain et la défense 
de leurs intérêts</li>
    <li>Organisation des rencontres et séminaires sur les sujets ayant trait à la Supply Chain Internationale ;</li>
    <li>Contribuer aux différents programmes de formation pour rehausser la mise à niveau des opérateurs économiques 
agréés de la Supply Chain.</li>
  
</ul>

                </div>
                
                <div class="text-containet">
                    <h2 class="blue-section-title">
                    Membres Eligibles
                    </h2>
                    <p class="section_normale_text">Les entreprises qui sont éligibles à l’adhésion au Club des Operateurs Economiques
(OEA) sont les opérateurs ayant le statut OEA qu’ils soient :
</p>
<ul>
    <li>MEAD</li>
    <li>Prestataires logistiques ;
</li>
    <li>Industriels</li>
    <li>Importateurs/Exportateurs ;</li>
    <li>Grossistes/Distributeurs ;</li>
    <li>Operateur du Commerce extérieur</li>
    
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
                                            <a href="tel:06 61 13 91 56

">06 61 13 91 56


                                            </a>
                                        </li>

                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    7 Bd, Hariri, Appt N°10, BP 
2030, Tanger, 



                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                                href="mailto:club.oea.maroc@gmail.com">
                                                club.oea.maroc@gmail.com</a>
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
                    <a href="https://www.facebook.com/Club-des-Op%C3%A9rateurs-%C3%89conomiques-Agr%C3%A9%C3%A9s-du-Maroc-111462911415968/" target="_blanck">
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
                <a href="{{(asset('/reso-secto/amtri'))}}">
                    <button class="previous_btn">AMTRI</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/reso-secto/cime'))}}">
                        <button class="next_btn">CIME</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
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
                    Agence Marocaine de Développement des 
Investissements et des Exportations 

                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    L’agence marocaine de développement des investissements et des exportations est le fruit de la fusion de trois structures 
publiques qui sont alors sous la tutelle du ministère du Commerce et de l'industrie : le Centre marocain de promotion 
des exportations (CMPE) ; l'Agence marocaine de développement des investissements (AMDI) ; et l'Office des foires et 
des expositions de Casablanca (OFEC). L’AMDIE joue un rôle moteur dans la promotion sectorielle de l’offre 
marocaine, et renforce la compétitivité sur l’ensemble du territoire. L’AMDIE se veut un outil efficace de promotion de 
l’investissement et de l’exportation et parvient à développer des espaces d’exposition destines à promouvoir 
l’investissement et l’exportation. 


                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    
                    <ul class="section_normale_list">
                        <li>
                        Promouvoir les exportations :
                        </li>
                        <li>Prospection de nouveaux clients internationaux </li>
                        <li>Mise en réseau des exportateurs marocains avec des entrepreneurs étrangers et des acteurs institutionnels sur les 
marches cibles.</li>
<li>Internationalisation des investisseurs marocains</li>

<li>Solutions de financement et de couverture des exportations </li>
<li>Données sur les marchés étrangers prometteurs </li>
<li>Parc international des expositions :</li>
<li>Mettre des espaces d’exposition à la disposition des organisateurs nationaux et étrangers </li>
<li>Organisation d’événements d’investissement et d’exportation </li>
<li>Apporter notre expertise aux exposants des salons nationaux et internationaux</li>
                    
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
                                            <a href="tel:05 37 22 64 00">05 37 22 64 00

                                            </a>

                                            </a>
                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon "><i
                                                    class="las la-fax position-absolute top-50 start-50 translate-middle"></i></i></span>
                                            <a href="Fax :05 37 67 34 17"> 05 37 67 34 17</a>
                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    Avenue Attine, Centre Mahaj
Riad, Bâtiment N5 &N7, Hay 
Riad Rabat- Maroc

                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                                href="mailto:morocconow@amdie.gov.ma">morocconow@amdie.gov.ma</a>
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
                    <a href="https://www.morocconow.com/" target="_blanck">
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
                <a href="{{(asset('/soutien-ex/pcc'))}}">
                    <button class="previous_btn">PCC</button>
                </a>
            </div>
            <div class="col">

               
            </div>
        </div>
        <hr>
        @include('assets.footer')
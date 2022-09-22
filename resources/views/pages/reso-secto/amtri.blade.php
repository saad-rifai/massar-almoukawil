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
                    Association marocaine des transports 
routiers intercontinentaux 

                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    L’association regroupe les Transporteurs opérants dans le secteur des Transports routiers internationaux de 
marchandises dans les régions du nord et autres du Royaume du Maroc 


                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <p class="section_normale_text">L'AMTRI a pour objet de représenter, conseiller, assister et défendre les intérêts professionnels des transporteurs 
marocains, aussi bien au niveau régional, national qu'international, et d'étudier les moyens et les mesures 
d'encouragement susceptibles de renforcer la flotte marocaine.
L’association se propose de résoudre tous les problèmes d'ordre économique, social, juridique et technique liés à son 
activité. 
L’association représente la profession auprès :
</p>
<ul class="section_normale_list">
    <li> Des Pouvoirs Publics marocains.</li>
    <li>Des Corps Consulaires étrangers de la région.</li>
    <li>Des Associations internationales de transport.</li>
    
    
</ul>

                </div>
                
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>
                    <p class="section_normale_text">TDans le site web de l’association, elle existe une rubrique allouer pour le recrutement de l’AZIT. Où vous pouvez 
retrouver des offres en cours et déposer votre CV. Si vous voulez savoir plus, vous pouvez consulter le lien : <a target="_blank" href="http://www.azit.ma/espace-recrutement/">www.azit.ma/espace-recrutement</a>
                    </p>
<p class="section_normale_text">Et aussi vous pouvez remplir un formulaire de recrutement. Si vous voulez consulter le lien : <a target="_blank" href="http://www.azit.ma/formulaire-de-recrutement/">www.azit.ma/formulaire-de-recrutement</a> </p>

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
                                            <a href="tel:06 61 46 95 23">06 61 46 95 23 /</a>
                                            <a href="tel:05 39 34 07 06">05 39 34 07 06 /</a>
                                            <a href="tel:05 39 32 17 16
">05 39 32 17 16
</a>
                                        </li>

                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    Rue Ibn Taymiya, résidence Ibn 
Abderrazek
2ème étage, Appt.3
Tanger 90000



                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                                href="mailto:contact@amtrimaroc.com">
                                                contact@amtrimaroc.com</a>
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
                    <a href="http://www.amtrimaroc.com/page/homepage/" target="_blanck">
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
                <a href="{{(asset('/reso-secto/ccis'))}}">
                    <button class="previous_btn">CCIS</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/reso-secto/oea'))}}">
                        <button class="next_btn">OEA</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
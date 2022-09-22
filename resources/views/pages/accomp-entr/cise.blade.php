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
                    Centre marocain pour l’innovation 
et l’entrepreneuriat social


                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    Le Centre marocain pour l’innovation et l’entrepreneuriat social est une organisation à but non lucratif dédiée à la 
recherche de solutions entrepreneuriales et innovantes à chaque défi social au Maroc. Il a été fondé en 2012 par un groupe 
de 17 personnes passionnées par le changement social au Maroc. Soutenir les entrepreneurs sociaux avec des idées pouvant
apporter des avantages au Maroc et à la communauté mondiale dans son ensemble


                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <p class="section_normale_text"><strong>MCISE</strong>, étant une structure labellisée par TAMWILCOM, contribue à la sélection des projets éligibles, et à leur 
accompagnement durant toutes les phases de financement. <br><br>
<strong>Le programme QIMAM</strong>, en partenariat avec le CRI de Casablanca-Settat, est un programme d'accompagnement de 6 
mois pour 100 PME de la région, avec pour objectif d'accélérer leur croissance afin de renforcer leur développement et 
leur compétitivité sur le marché. <br><br>
<strong>Guelmim Oued Noun</strong> : Ce programme, lancé en partenariat avec le Conseil Régional de Guelmim Oued Noun, vise à 
inciter les collectivités de la région de Guelmim Oued Noun à investir dans le domaine de l'entrepreneuriat social, au 
niveau de Guelmim, Tan Tan, Sidi Ifni et Assa Zag, dans le but de favoriser le développement de la région tout en créant 
de la valeur ajoutée pour la communauté d'Ouednouni. <br><br>
<strong>TAMURI</strong> : Le renforcement du secteur associatif local (TAMURI), mis en œuvre par le MCISE, fait partie du « 
Programme d'appui à la participation citoyenne » lancé par l'Union européenne, et déployé pendant 3 ans. L'objectif est 
de promouvoir le rôle de la société civile et la participation citoyenne dans 5 régions du Maroc (Casablanca-Settat ; 
Oriental ; Souss-Massa ; Tanger - Tétouan - Al Hoceima ; BéniMellal-Khénifra) pour renforcer la gouvernance locale. <br> </p>

                    
                </div>

                <hr class="section_hr">
                <h2 class="blue-section-title">
                    Contact
                </h2>
                <div class="row">
                    <div class="col">
                        <ul class="section_normale_contact_list">
                           
                            <li><span class="section_normale_contact_list_icon"><i
                                        class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                        5, 1er étage, Imm 10 Rue 
Mohamed El Jazouli, Hassan, 
Rabat.


                            </li>
                            <li>
                                <span class="section_normale_contact_list_icon"><i
                                        class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                <a href="mailto:a.addioui@mcise.org">
                                a.addioui@mcise.org</a>
                                <a href="mailto:contact@mcise.org">
                                contact@mcise.org</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="section_hr">
                <div class="text-containet text-center">
                    <a href="https://mcise.org/" target="_blanck">
                        <button class="lg-btn-produit"><i class="las la-external-link-alt"></i> Visitez le site
                            Web</button>
                    </a>
                </div>
                <br>
                <br>
            </div>





            <br>
            <br>
        </div>

        <div class="row">
            <div class="col">

                <a href="{{(asset('/accomp-entr/cfcim'))}}">
                    <button class="previous_btn">Kluster CFCIM</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/accomp-entr/RD'))}}">
                        <button class="next_btn">R&D</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br>

    <hr>
    @include('assets.footer')
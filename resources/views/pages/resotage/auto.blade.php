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
                    Réseau entreprendre Maroc
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    Il accompagne tout créateur, repreneur et chef d’entreprise qui souhaite contribuer à la création d’emplois sur son 
territoire, développer son activité ainsi que participer à l’éclosion d’un écosystème local fort. Le réseau transmet aux 
créateurs, repreneurs, startupers, entrepreneurs sociaux, jeunes, issus des quartiers sensibles, le savoir-faire de chefs 
d’entreprise expérimentés et en activité, au travers d’échanges constructifs et inspirants, de pairs à pairs.

                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <p class="section_normale_text">Réseau Entreprendre Maroc est une association marocaine de chefs d’entreprise expérimentés qui mettent leurs 
compétences au service des entrepreneurs. L’association a vu le jour en 2006 a l’initiative de chefs d’entreprise 
engagés dans l’accompagnement entrepreneurial, convaincus que pour créer des emplois, il faut créer des 
employeurs. <br>
Réseau Entreprendre accompagne et aide à réussir la création ou reprise d’entreprise. Il dispose de trois parcours 
d’accompagnement :

                        </p>
                    <ul class="section_normale_list">
                        <li>
                        Parcours start : pour révéler et renforcer less talents de chef d’entreprise.

                        </li>
                        <li>Parcours booster : pour concrétiser et réussir le développement. </li>
                        <li>Parcours ambition : pour accélérer et pérenniser la croissance de l’entreprise.</li>
                       
</ul>
<p class="section_normal_list">Il propose aussi des programmes spécifiques :</p>

<ul  class="section_normale_list">
                    <li>INNOV : Qui propose aux candidats une offre spécifiquement adaptée aux projets innovants</li>
                    <li>WOM Energy : qui démontre que Réseau Entreprendre est un réseau mixte de chefs d’entreprise hommes et 
femmes
</li>
<li>Impact : Un parcours d’accompagnement augmenté ouvert à tous les entrepreneurs à impact positif dans la 
multiplicité de leurs pratiques et statuts
</li>
                       
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
                                                    <a href="tel:06 68 03 93 64"> 06 68 03 93 64</a>
                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                        Technopark Tanger, 
Bureau 114

                                        </li>
                                        <li>
                                        <span class="section_normale_contact_list_icon"><i
                                                class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                            href="mailto:hlaaroussi@reseau-entreprendre.org"> hlaaroussi@reseau-entreprendre.org</a>
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
                    <a href="https://www.reseau-entreprendre.org/maroc/" target="_blanck">
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
                    <a href="{{(asset('/resotage/cjd'))}}">
                        <button class="next_btn">CJD</button>
                    </a>
                </div>
            </div>
         </div>
        <hr>
        @include('assets.footer')
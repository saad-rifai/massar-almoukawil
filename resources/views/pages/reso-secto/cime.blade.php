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
                    Le Club des investisseurs marocain de 
l’étranger CIME

                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    Le Club des investisseurs marocains de l’étranger CIME est une association à but non lucratif, et non politique dont le 
principal objectif est d’assister les investisseurs marocains résidents à l’étranger et leurs éventuels partenaires étrangers 
dans leurs démarches, en vue d’investir au Maroc. <br>
L’action du Club part également de ces investisseurs vers leurs régions d’origine et vers des créneaux intéressants afin 
de contribuer à la réalisation de leurs projets, dans de bonnes conditions.

                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
<ul class="section_normale_list">
    <li>Accompagner régulièrement les Investisseurs Marocains Résidents à l’Etranger MRE ainsi que leurs éventuels 
partenaires (Etranger ou /et Marocains).

</li>
    <li>Leur apporter une assistance multiforme et efficace devant mener à l’aboutissement normal de leurs démarches, 
et à la bonne réalisation de leurs projets d’Investissement</li>
    <li>Avec l’assistance du CIME, votre projet d’Investissement se transformera concrètement en réalité.</li>
    <li>Partout dans le monde, dans chaque pays, les représentants du CIME sont à la disposition et à l’écoute des
entrepreneurs MRE.</li>
  
</ul>

                </div>
                
               
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
                                            <a href="tel:06 33 80 78 28


">06 33 80 78 28 /


                                            </a>
                                            <a href="tel:06 61 20 06 33


">06 61 20 06 33


                                            </a>
                                        </li>

                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    7, Bis rue Naseh Eddine Maarif 
Casablanca, Maroc 



                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                                href="mailto:info.cime@gmail.com">
                                                info.cime@gmail.com</a>
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
                    <a href="https://cime.ma/" target="_blanck">
                        <button class="lg-btn-produit"><i class="las la-external-link-alt"></i> Visitez le site
                            Web</button>
                    </a>
                </div>
                <br>
                <br>
            </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('/reso-secto/oea'))}}">
                    <button class="previous_btn">OEA</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/reso-secto/amai'))}}">
                        <button class="next_btn">AMAI</button>
                    </a>
                </div>
            </div>
        </div>
        </div>

        <hr>
        @include('assets.footer')
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
                        Réseau entreprendre
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Réseau Entreprendre Maroc est une association marocaine de chefs d’entreprise expérimentés qui
                        mettent leurs
                        compétences au service des entrepreneurs. L’association a vu le jour en 2006 a l’initiative de
                        chefs d’entreprise
                        engagés dans l’accompagnement entrepreneurial, convaincus que pour créer des emplois, il faut
                        créer des employeurs.


                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <p class="section_normale_text">
                        Réseau Entreprendre vous accompagne et vous aide à réussir votre création ou reprise
                        d’entreprise.
                        Il y a trois parcours d’accompagnement ciblés :
                    </p>
                    <ul class="section_normale_list">
                        <li>Parcours start : Révélez et renforcez vos talents de chef d’entreprise.</li>
                        <li>Parcours booster : Concrétisez et réussissez votre développement.</li>
                        <li>Parcours ambition : Accélérez et pérennisez la croissance de votre entreprise.</li>
                    </ul>
                    <p>Il propose aussi des programmes spécifiques :</p>
                    <ul class="section_normale_list">
                        <li>INNOV : Qui propose aux candidats une offre spécifiquement adaptée aux projets innovants
                        </li>
                        <li>WOM Energy : qui démontre que Réseau Entreprendre est un réseau mixte de chefs d’entreprise
                            hommes ET
                            femmes.</li>
                        <li>Impact : Un parcours d’accompagnement augmenté ouvert à tous les entrepreneurs à impact
                            positif dans la
                            multiplicité de leurs pratiques et statuts.</li>
                    </ul>

                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>
                    <ul>
                        <li>Un premier contact avec des chefs d&rsquo;entreprise de votre r&eacute;gion.&nbsp;</li>
                        <li>Pr&eacute;sentation du projet au comit&eacute; d&rsquo;engagement.&nbsp;</li>
                        <li>Des RDV mensuels avec un accompagnateur pour prendre la pleine mesure de votre leadership.&nbsp;</li>
                        <li>Participation &eacute;galement aux Clubs des Laur&eacute;ats qui permettent aux nouveaux chefs d&rsquo;entreprise de s&rsquo;entraider et s&rsquo;enrichir mutuellement en toute convivialit&eacute;.</li>
                        <li>l&rsquo;occasion de pr&eacute;senter l&rsquo;entreprise, lors de la f&ecirc;te des laur&eacute;ats.&nbsp;</li>
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
                                                    Tel: <a href="tel:06 68 03 93 64">06 68 03 93 64</a> 
                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    Technopark Tanger, 
Bureau 114

                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                            <a href="mailto:hlaaroussi@reseau-entreprendre.org">
                                            hlaaroussi@reseau-entreprendre.org</a>
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





                <br>
                <br>
            </div>
            <div class="row">
                <div class="col">

            
                </div>
                <div class="col">

                    <div class="next-btn-box">
                        <a href="{{(asset('/accomp-entr/CEED'))}}">
                            <button class="next_btn">CEED</button>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        </div>
        <br>
      
        <hr>
        @include('assets.footer')
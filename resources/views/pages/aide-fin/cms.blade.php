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
                    Centre Mohammed VI de Soutien à la Microfinance Solidaire (CMS)
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    Depuis sa création, la Fondation Mohammed V pour la Solidarité a placé le développement durable au cœur de sa 
stratégie. Ainsi, plusieurs actions visant l’insertion des démunis dans le circuit économique ont été menées. Parmi celles-ci, le microcrédit s’est révélé comme un outil efficace de lutte contre l’exclusion et la pauvreté.
Pour permettre à une frange plus large de la population cible d’accéder au microcrédit, la Fondation a décidé de soutenir 
les acteurs du secteur pour qu’ils puissent développer leur activité et, in fine, offrir des horizons d’espoir et de dignité à 
de nombreux bénéficiaires. <br>
C’est ainsi que, conformément aux Hautes Instructions Royales, et en concertation avec les acteurs du microcrédit au 
Maroc, la Fondation a créé le Centre Mohammed VI de Soutien à la Microfinance Solidaire (CMS) qui a été inauguré 
le 8 novembre 2007 par Sa Majesté le Roi.

                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <p class="section_normale_text">Le Centre Mohammed VI de Soutien à la Microfinance Solidaire déploie ses actions à travers trois axes majeurs : <br> <strong>Formation des agents des associations de microcrédit qui</strong> vise à développer et à conceptualiser les pratiques du 
microcrédit et à transférer le savoir-faire acquis des acteurs du microcrédit de par leur expérience sur le terrain. <br> <strong>Observatoire de la Microfinance</strong> <br> <strong>Promotion de la Micro-entreprise et appui à la commercialisation</strong> qui a pour principaux objectifs de :
  </p>
  <ul>
    <li>Permettre aux micro-entrepreneurs de développer les capacités managériales et les qualifications 
professionnelles nécessaires pour une meilleure commercialisation de leurs produits grâce à des formations 
dédiées (exemple : Education Financière).
</li>
<li>Doter les bénéficiaires de moyens logistiques leur permettant de faire connaître leurs produits.
</li>
<li>Etre l’interface des bénéficiaires avec les réseaux du commerce solidaire.</li>
<li>Etre l’interface des bénéficiaires avec les réseaux du commerce solidaire.</li>
<li>Organiser des foires itinérantes d’exposition et de commercialisation dans les différentes régions du Maroc.</li>
  </ul>
                    
                   
                    
                   
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
                                                    Tel: 
                                                 <a href="tel:0661-648283 ">0661-648283 </a> 
                                                   
                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    9 Hay ennasr, Rue 26 ،
Tanger


                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                            <a href="mailto:contact@cmsms.org.ma">
                                            contact@cmsms.org.ma</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        <div class="col">

                        </div>

                    </div>

                </div>
                <hr class="section_hr">
                <div class="text-containet text-center">
                    <a href="http://www.cm6-microfinance.ma/fr/" target="_blanck">
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
            </div>
       
       </div>
            <div class="row">
            <div class="col">

            <a href="{{(asset('/aide-fin/bam'))}}">
                    <button class="previous_btn">BAM</button>
                </a>   
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/aide-fin/tamwilcom'))}}">
                        <button class="next_btn">Tamwilcom</button>
                    </a>
                </div>
            </div>
        </div>

        <br>
    
        <hr>
        @include('assets.footer')
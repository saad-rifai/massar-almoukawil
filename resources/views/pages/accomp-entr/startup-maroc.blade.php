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
                    Startup Maroc 
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    StartUp Maroc est un accélérateur de startups labellisé par TAMWILCOM dans le cadre du Fond Innov Invest qui a 
pour mission de contribuer activement à l'émergence d’entrepreneurs et startups à fort potentiel qui sont en mesure de 
façonner le Maroc, l’Afrique et le Monde.


                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <p class="section_normale_text">Cet accompagnateur propose un programme nommé StartUp Maroc Booster : un programme complet qui s’étale sur 4 
à 10 mois, conçu pour responsabiliser les startups autour de 3 piliers majeurs : Financement, Accélération/Mentorat et 
exposition internationale <br>
                    </p>
                    <ul class="section_normale_list">
                        <li>FINANCEMENT : Distribution de subventions « Innov IDEA » jusqu'à 200.000 DH par startup et de prêts « 
Innov Start jusqu'à 500.000 DH</li>
<li>ACCÉLÉRATION/MENTORAT : un programme rigoureux et complet de création d'entreprise pour guider 
l’entrepreneur dans la validation des idées, le développement de la clientèle, la constitution d'une équipe, la 
préparation au financement, etc.</li>
<li>EXPOSITION INTERNATIONALE : exposition aux investisseurs, aux médias et aux opportunités 
commerciales par le biais de pitchs, de réseaux et de relations directes. Accès à des programmes 
d'accélération, de mentorat, de visibilité et d'opportunités d'affaires et d'investissement international.</li>
                    </ul>
        
                </div>

                <hr class="section_hr">
                <h2 class="blue-section-title">
                    Contact
                </h2>
                <div class="row">
                                <div class="col">
                                    <ul class="section_normale_contact_list">
                                        <li>
                                            <span class="section_normale_contact_list_icon "><i
                                                    class="las la-phone position-absolute top-50 start-50 translate-middle"></i></span>
                                                   <a href="Tel:05 37 20 53 07">Tel: 05 37 20 53 07</a>


                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    N°07, Rue Jabal Toubkal, 
Apt 08, Etg 03, Agdal, Rabat

                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                            <a href="mailto:zineb.rharrasse@startu
pmaroc.org">
zineb.rharrasse@startu
pmaroc.org</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                <hr class="section_hr">
                <div class="text-containet text-center">
                    <a href="http://www.startupmaroc.org/" target="_blanck">
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

                <a href="{{(asset('/accomp-entr/ImpactLab'))}}">
                    <button class="previous_btn">Impact Lab</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/accomp-entr/CE3M'))}}">
                        <button class="next_btn">CE3M</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br>

    <hr>
    @include('assets.footer')
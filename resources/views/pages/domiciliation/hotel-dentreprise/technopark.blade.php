@section('title', 'Technopark')
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
                    Technopark
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        C’est en 2001 que le Technopark a été lancé grâce la vision clairvoyante de Sa Majesté le Roi Mohammed VI pour booster le 
                        secteur des nouvelles technologies de l’information, en dotant les porteurs de projets innovants de la plateforme idoine pour lancer 
                        leurs startups.  <br>
                         
                        Aujourd’hui, le Technopark est un catalyseur national et régional pour le développement de l’entrepreneuriat digital, innovant et 
                        inclusif. En deux décennies, il a su se positionner en tant qu’acteur incontournable dans l’accompagnement et l’accélération des 
                        startups et devenir la vitrine technologique du Maroc. 
                    </p>
                </div>

                <br>
                <div class="sample_table mb-5">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Services</th>
                                            <th scope="col">Tarifs</th>
                   
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>
                                            <p>En 2015, une nouvelle opportunit&eacute; s&rsquo;est pr&eacute;sent&eacute;e au Technopark pour consolider sa strat&eacute;gie de duplication r&eacute;gionale sur la ville du d&eacute;troit. <strong>Le Technopark Tanger</strong> est devenu un v&eacute;ritable levier pour cr&eacute;er une dynamique entrepreneuriale dans la r&eacute;gion du nord. Son positionnement, la qualit&eacute; de son infrastructure et ses services d&rsquo;accompagnement constituent autant d&rsquo;atouts pour la communaut&eacute; des start-ups de la r&eacute;gion du nord.</p>
                                            <p>Gr&acirc;ce &agrave; son fort r&eacute;seau au niveau national qu&rsquo;&agrave; l&rsquo;international, le Technopark Tanger propose un accompagnement personnalis&eacute; et adapt&eacute; aux startups de la r&eacute;gion&nbsp;: &nbsp;</p>
                                            <ul>
                                            <li>L&rsquo;acc&egrave;s au financement</li>
                                            <li>L&rsquo;acc&egrave;s &agrave; la formation</li>
                                            <li>L&rsquo;acc&egrave;s &agrave; l&rsquo;innovation</li>
                                            <li>L&rsquo;acc&egrave;s aux comp&eacute;tences</li>
                                            <li>L&rsquo;acc&egrave;s au march&eacute;</li>
                                            </ul>
                                            <p>Le Technopark Tanger propose &eacute;galement les services suivants :&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                            <ul>
                                            <li>Locaux pr&ecirc;ts &agrave; l&rsquo;emploi</li>
                                            <li>Espace co-working</li>
                                            <li>Une salle de conf&eacute;rence de 183 si&egrave;ges.</li>
                                            <li>Services de proximit&eacute;</li>
                                            <li>Services &agrave; la communaut&eacute;</li>
                                            </ul>

                                        </td>
                                        <td>
                                            <p>50 DH / m&sup2; pour les entreprises cr&eacute;&eacute;es depuis moins de 2 ans pour des bureaux entre 13 m2 &agrave; 26 m2</p>
                                            <p>100 DH le m&sup2; pour les entreprises de plus de 2 ans et pour des bureaux qui d&eacute;passent les 26 m2&nbsp;;</p>
                                            <p>1.200 DH TTC pendant un mois pour le co-working space.</p>
                                        </td>
                                        </tr>
                                  
                                  
                                    </tbody>
                                </table>
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
                                                    <a href="tel:+212 539 324 550">+212 539 324 550</a>

                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                        Immeuble Pavillon 
International - Bd 
Mohamed V. Tanger

                                        </li>
                                        <li>
                                        <span class="section_normale_contact_list_icon"><i
                                                class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                                <a href="mailto:Tanger@technopark.ma"> Tanger@technopark.ma</a> 
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
                    <a href="http://www.technopark.ma/" target="_blanck">
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
                <a href="{{(asset('/hotel-dentreprise/regus'))}}">
                    <button class="previous_btn">regus</button>
            </a></div>
            <div class="col">
                <div class="next-btn-box">
                    <a href="{{(asset('/hotel-dentreprise/TETOUAN-SHORE'))}}">
                        <button class="next_btn">TETOUAN-SHORE</button>
                    </a>
                </div>
                
            </div>
         </div>
        <hr>
        @include('assets.footer')
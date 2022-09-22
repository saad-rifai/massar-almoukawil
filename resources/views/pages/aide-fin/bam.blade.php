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
                    Bank Al-Maghrib


                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    Bank Al-Maghrib est la banque centrale du Maroc. Elle se compose de diverses directions dont Dar As-Sikkah. Elle a 
été créée par Dahir nᵒ 1-59-233 du 23 hija 1378, publié au bulletin officiel nᵒ 2436 du 03/07/1959. <br>
Outre le privilège de l’émission de la monnaie fiduciaire et de la supervision du système bancaire, la Banque a pour 
mission de définir et de mettre en œuvre la politique monétaire avec pour objectif fondamental la stabilité des prix. Bank 
Al-Maghrib veille également au bon fonctionnement et à la sécurité des systèmes et moyens de paiement. Elle détermine, 
par ailleurs, les rapports entre le dirham et les devises, dans un cadre de régime de change et de parité du dirham. Par 
ailleurs, elle détient et gère les réserves de change. Parallèlement à ces missions fondamentales, la Banque est le 
conseiller financier du Gouvernement et l’agent du Trésor pour ses opérations bancaires au Maroc et à l’étranger

                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <p class="section_normale_text">Bank Al-Maghrib publie régulièrement des rapports et statistiques relatifs à la politique monétaires mais également des 
études sectorielles pouvant être utilisés par les entreprises notamment : <br>
                    </p>
                    <ul class="section_normale_contact_list">
                        <li>Le bulletin trimestriel (statistique).</li>
                        <li>L’indice des prix des actifs immobiliers, sur une base trimestrielle.</li>
                        <li>L’enquête mensuelle de conjoncture dans le secteur industriel.</li>
                        <li>La revue mensuelle de la conjoncture économique, monétaire et financière.</li>
                        <li>Les indicateurs économiques et financiers hebdomadaires.</li>
                    </ul>
<p class="section_normale_text">
La banque centrale propose également des services rendus au public relatifs aux éléments suivants :
</p>
<ul  class="section_normale_contact_list">
    <li>Le droit au compte</li>
    <li>La centralisation des incidents de paiement chèques.</li>
    <li>La centralisation des effets de commerce impayés. </li>
    <li>La centralisation des risques crédit. </li>
    <li>La centralisation des comptes bancaires.</li>
    
</ul>
<p class="section_normale_text">BAM a lancé également en avril 2021 le service de centralisation des chèques irréguliers en partenariat avec 
CHECKINFO permettant aux entreprises de se prémunir au départ contre des risques de paiement client. 
Aussi, BAM peut dans certains cas recevoir les réclamations des entreprises concernant leur relation avec les banques 
notamment dans le cadre du programme PIAFE.</p>
              
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
                                <a href="Tel : 080 200 11 11">Tel :080 200 11 11</a>

                            </li>
                            <li>
                                    <span class="section_normale_contact_list_icon"><i
                                            class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                    <a href="mailto:accueil@bkam.ma">
                                    accueil@bkam.ma</a>
                                </li>
                            
                            <li><span class="section_normale_contact_list_icon"><i
                                        class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                        78, Bd Mohammed V BP 403, tanger
                            </li>
                            <li><span class="section_normale_contact_list_icon"><i
                                        class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                        Quartier de l’aviation (Près de la Wilaya) BP 32 Tetouan
                            </li>
                            <li><span class="section_normale_contact_list_icon"><i
                                        class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                        10, Av Mohammed V BP 18, Larache Bd Hassan II – BP 11 Al Hoseima
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="section_hr">
                </div>
                <div class="text-containet text-center">
                    <a href="https://www.bkam.ma/" target="_blanck">
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

                <a href="{{(asset('/aide-fin/cms'))}}">
                    <button class="next_btn">CMS</button>
                </a>
            </div>
            </div>
        
        </div>
    </div>
    <br>

    <hr>
    @include('assets.footer')
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
                    FinTech


                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    Selon l’OICV (Organisation Internationale des Commissions de Valeurs), le terme Financial Technologies ou «Fintech» 
est utilisé pour décrire une variété de modèles métiers innovants et de technologies émergentes qui ont le potentiel de 
transformer le secteur des services financiers. <br>
Pour accompagner les acteurs du domaine de la « FinTech » dans leurs projets et favoriser le développement des 
nouvelles technologies qui contribuent à la transformation numérique du secteur financier, L’Autorité Marocaine du 
Marché des Capitaux (AMMC) a créé sur son site web un portail spécial « FinTech ». <br>
Par l’intermédiaire de ce portail, les entreprises marocaines de technologie financière peuvent entrer en contact avec 
l’AMMC en vue d’un échange d’informations. 

                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <p class="section_normale_text">Ce portail permettra à l’ensemble des parties prenantes pouvant être concernées par le secteur de la Fintech, d’échanger 
avec l’Autorité sur leurs projets ainsi que sur le cadre légal et réglementaire qui leur est applicable.
Accompagner les acteurs du secteur dans leurs projets et favoriser les nouvelles technologies qui contribuent à la 
transformation du secteur financier.</p>


                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>

                    <p class="section_normale_text">Vous êtes porteur de projet ou société en activité et vous souhaitez échanger avec l’Autorité pour apprendre davantage 
sur le sujet de la finance numérique et des Fintech, les différentes équipes de l’AMMC vous accompagnent et répondent 
à vos questions sur le sujet. Prenez contact avec nous via ce formulaire : <a target="_blank"
                            href="https://www.ammc.ma/fr/form/fintech/">www.ammc.ma/fr/form/fintech</a> </p>

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
                                        <a href="Tel:05 37 68 89 00">Tel :05 37 68 89 00</a>  
                              
                            </li>
                            <li>
                                <span class="section_normale_contact_list_icon "><i
                                         class="las la-fax position-absolute top-50 start-50 translate-middle"></i></i></span>
                                   Fax : 05 37 68 89 46
                              
                            </li>
                            <li><span class="section_normale_contact_list_icon"><i
                                        class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                        Avenue Annakhil, Hay Riad -
Rabat, Maroc



                            </li>
                            <li>
                                <span class="section_normale_contact_list_icon"><i
                                        class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                <a href="mailto:contacts@ammc.ma">
                                contacts@ammc.ma</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="section_hr">
                <div class="text-containet text-center">
                    <a href="http://www.ammc.ma/" target="_blanck">
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

                <a href="{{(asset('/accomp-entr/RD'))}}">
                    <button class="previous_btn">R&D</button>
                </a>
            </div>
            <div class="col">

                
            </div>
        </div>
    </div>
    <br>

    <hr>
    @include('assets.footer')
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
                        Association Internationale de Développement et des
                        Affaires

                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        L’association internationale de développement et des affaires est à but non lucratif. Elle n’a
                        aucune vocation politique
                        ou religieuse. Un réseau d’opportunités de business et d’affaires qui a pour mission principale
                        de connecter les
                        membres et les entrepreneurs nationaux et internationaux afin de développer leurs réseaux
                        d’affaires et de business
                        d’une manière qualitative, sécurisée et efficace à travers les rencontres régulières et des
                        évènements organisés par
                        AIDA.



                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    
                    <ul class="section_normale_list">
                        <li>
                            La formation</li>
                        <li>L’accompagnement</li>
                        <li>La certification de ses adhérents</li>
                        <li>Protéger et défendre l’intérêt des membres par
                            le suivie et la réalisation de ses
                            recommandations.</li>

                    </ul>

                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                    Avantages
                    </h2>
                    <p class="section_normale_text">Offre aux membres la possibilité d’établir et d’entretenir des
                        relations durables et de transmettre des recommandations
                        d’affaires de qualité pour connecter le maximum de professionnels, d’entrepreneurs et
                        professions libérales, les aider à
                        développer leur chiffre d'affaires. <br>
                        Trois façons de Découvrir l’Expérience BNI :


                    </p>
                    <ul class="section_normale_list">
                        <li>Pouvoir compter sur une organisation qui défend 
les intérêts de votre activité auprès de Grandes 
entités publiques, privés et Associatives.
</li>
                        <li>Pouvoir compter sur la notoriété et la crédibilité de 
notre organisation afin de bénéficier des 
informations utiles auprès des Membres pour la 
bonne prise de décision.
</li>
                        <li>Bénéficiez à des formations Professionnelles 
adaptés à vos besoins, et Participer à des 
événements, des séminaires, des colloques vous 
permettant de développer et d’acquérir de 
nouvelles compétences et rencontrer des personnes 
d’influence.
</li>
                        <li>Être informé des changements législatifs et 
économiques importants</li>
<li>Bénéficiez des recommandations des membres du 
réseau</li>
<li>Intégrer notre réseau de recommandation pour faire 
de votre activité une référence sur le marché 
national et international</li>
<li>S’impliquer pour améliorer le tissu socio-économique national.</li>
<li>Visibilité commerciale de votre activité sur notre 
site Internet.
</li>

                    </ul>

                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>
                    <p class="section_normale_text">Les Membres AIDA veillent directement et indirectement sur les intérêts de l’association, tant au niveau du secteur 
privé que public. Un comité valide toute demande d’adhésion, une Cotisation minimale est obligatoire.
Pour devenir un membre, vous pouvez consulter le lien : <a target="_blank" href="https://aida.org.ma/devenez-membre/">www.aida.org.ma/devenez-membre</a> </p>


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
                                            <a href="tel:06 71 70 72 73
">06 71 70 72 73

                                            </a>
                                        </li>
                                       
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    Boulevard Andalousie, Imm 
Anatolia 5° Etage N°16, 
Tanger 90000, Morocco


                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                                href="mailto:a.imane@aida.org.ma">
                                                a.imane@aida.org.ma</a>
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
                    <a href="https://aida.org.ma/" target="_blanck">
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
                <a href="{{(asset('/resotage/bni'))}}">
                    <button class="previous_btn">BNI</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/resotage/moubadara'))}}">
                        <button class="next_btn">Moubadara</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
@section('title', 'Financement de l’INDH')
@section('description', 'Un programme constitué de 3 axes :
- Appui à l’Entrepreneuriat ;
- Appui à l’économie sociale et solidaire ;
- Aide à l’employabilité')

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Financement de l’INDH</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Objet
                    </h2>
                    <p class="section_normale_text">Inclusion économique des jeunes</p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Description
                    </h2>
                    <p class="section_normale_text">
                        Un programme constitué de 3 axes : <br>
                        - Appui à l’Entrepreneuriat ; <br>
                        - Appui à l’économie sociale et solidaire ; <br>
                        - Aide à l’employabilité
                    </p>
                </div>
                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Cible
                            </h2>
                            <p class="section_normale_text">
                               <strong> Axe 1</strong> : coopérative, IGE, SARL, Autoentrepreneur. (L’objectif étant de renforcer les
                                chaines de valeur actuelles). <br>
                                <strong>Axe 2</strong> : Les jeunes sans statuts ayant entre
                                18ans et 35ans – société de moins d’un 1 an. <br>
                               <strong> Axe 3</strong> : Prioritairement les jeunes non-diplômés
                                qui bénéficient de formation en vue de leur
                                insertion dans le marché de l’emploie.
                                
                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Critères d’éligibilité
                            </h2>
                            <p class="section_normale_text">
                               <strong> Axe 1</strong> : Être Agés entre 18 ans et 35 ans, n’avoir jamais bénéficié
                                d’un Financement INDH, Non-salariés (Public/Privés), avoir une
                                idée de projet fiable, avoir une adresse de résidence au niveau
                                de la région. <br>
                                <strong>Axe 2</strong> : Condition de l’axe 1 + être une coopérative, IGE, Sarl de
                                moins d’un 1 an ou auto-entrepreneur, la société doit être
                                composée d’au moins de 30% de femmes ou de 20% de jeunes
                                de moins de 35 ans. <br>
                                <strong>Axe 3</strong> : ne pas avoir d’expérience préalable. 


                            </p>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title"> Plafond de financement </h2>
                            <p class="section_normale_text">
                                <strong>Axe 1 </strong>: 100 000 dh <br>
                                <strong>Axe 2</strong> : 300 000 dh <br>
                                <strong>Axe 3</strong> : coût de la formation selon le prestataire</p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Modalités de remboursement </h2>
                            <p class="section_normale_text">
                                Néant (fond perdu)
                            </p>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                       
                        <div class="col">
                            <h2 class="blue-section-title">
                                Conditions de garanties </h2>
                            <p class="section_normale_text">
                                Avoir une idée fiable
                                Contribuer à hauteur de 40% du fond accordé (20% en numéraire et 20% en nature)
                            </p>
                        </div>
                    </div>
                    <br>
                    <h2 class="blue-section-title">
                        Coût du financement / de l’opération </h2>
                    <p class="section_normale_text">
                        Néant
                    </p>
                    <br>
                    <h2 class="blue-section-title"> Documents nécessaires </h2>
                    <p class="section_normale_text">
                       - CIN
                    </p>

                    <br>
                    <h2 class="blue-section-title"> Informations supplémentaires</h2>
                    <p class="section_normale_text">
                        Ce programme s’inscrit dans le cadre de la 3éme phase de l’INDH (2019-2023)
                    </p>
                </div>
                <br>


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
                                            <a href="tel:+212 5 39 32 23 01">+212 5 39 32 23 01</a>
                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                            Préfecture Tanger-Assilah, Division de l’Action Sociale
                                        </li>

                                        <li>
                                            <span class="section_normale_contact_list_icon ">
                                                <i class="las la-envelope position-absolute top-50 start-50 translate-middle"></i>
                                            </span>
                                            <a href="mailto:P3.indh@gmail.com">P3.indh@gmail.com</a>
                                        </li>
                                        

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col">

                        </div>

                    </div>

                </div>
  
                <br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">   
                <a href="{{(asset('/financement/credit-commecial/entraide-nationale'))}}">
                    <button class="previous_btn">Entraide Nationale</button>
            </a></div>
            <div class="col">
    
               
                <div class="next-btn-box">
                    <a href="{{(asset('/financement/credit-commecial/forsa'))}}">
                        <button class="next_btn">FORSA</button>
                    </a>
                </div>
            </div>
         </div>
        <hr>
        @include('assets.footer')
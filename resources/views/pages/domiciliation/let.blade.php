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
                    L'incubateur d'entreprises de Tétouan
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    L’incubateur d'entreprises de Tétouan a été créé, le 16 juin 2015 à la Faculté des Sciences de Tétouan, afin 
d'accompagner les jeunes entrepreneurs et les porteurs de projets. Cette initiative, qui est le fruit d'un partenariat entre 
la Chambre de commerce, d'industrie et des services de la région Tanger-Tétouan AL Hoceima, l'Agence pour le 
développement des provinces du Nord, l'Université Abdelmalek Esaâdi, et l'Agence nationale de promotion de 
l'emploi et des compétences (ANAPEC), qui vise à encourager les initiatives réussies et le sens de créativité et 
d'innovation, promouvoir l'auto-emploi, soutenir la recherche scientifique et accompagner les porteurs de projets. 
                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <p class="section_normale_text">L’incubateur met à la disposition des étudiants, lauréats et Enseignants-Chercheurs des dispositifs d'accompagnement 
pour la concrétisation de leur idée entrepreneuriale :
                        </p>
                    <ul class="section_normale_list">
                        <li> Un espace pour concrétiser leurs idées ;
                        </li>
                        <li>Des formations organisées pour réussir leurs projets.
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
                                                    (+212) 5 39 99 64 32 / (+212) 5 39 99 45 00
                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                        Avenue de Sebta, Mhannech 
II 93002 - Tétouan 
                                        </li>
                                        <li>
                                        <span class="section_normale_contact_list_icon"><i
                                                class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                            href="mailto:fs.tetouan.contact@gmail.com"> fs.tetouan.contact@gmail.com</a>
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
                    <a href="http://www.fst.ac.ma/site/actualites/r%C3%A9ouverture-des-inscriptions-dans-lincubateur-d%E2%80%99entreprises-de-t%C3%A9touan/" target="_blanck">
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
                <a href="{{(asset('/dom/afem'))}}">
                    <button class="previous_btn">afem</button>
            </a></div>
            <div class="col">
    
                <div class="next-btn-box">
                    <a href="{{(asset('/dom/fpl'))}}">
                        <button class="next_btn">fpl</button>
                    </a>
                </div>
            </div>
         </div>
        <hr>
        @include('assets.footer')
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
                    Ordre des Avocats de Tanger

                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    Doté de la personnalité morale et fédérant les membres de la profession, l’ensemble des avocats du Royaume.
Le Barreau de Tanger est donc l’un des organismes les plus anciens et les plus prestigieux du Maroc, et d’ici deux ans, 
il achèvera sa neuvième décennie, et au cours de cette date, il a accumulé un riche héritage de coutumes et de traditions 
grâce à des femmes et des hommes qui ont écrit des pages lumineuses et dignes de la transcendance de la profession et 
de la sainteté de sa mission avec leurs attitudes, leurs luttes et leurs pensées.

                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <ul>
                        <li>Fédèrer tous les membres de la profession, l’ensemble des avocats du Royaume.</li>
<li>Fait des formations aux avocats pour toutes les nouvelles lois.</li>
<li>Organise des colloques avec des thèmes différents.</li>
<li>Affiche toutes les actualités dans le site web officiel du barreau pour diffuser l’information à tous les avocats.</li>

                    </ul>

                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>
                    <p class="section_normale_text">
                    Afin d’accepter l’inscription d’un avocat au Barreau de Tanger selon le Dahir du 16/02/1924 et à la loi sur la 
profession du 21/12/1949, il faut :
                    </p>
                    <ul>
                        <li>L’affiliation du candidat à l’un des signataires de la Convention d’Algésiras du 07/04/1906</li>
                        <li>La disponibilité de l’éligibilité et des autres conditions requises pour exercer la profession d’avocat dans son 
pays d’origine et exercer la profession dans son pays dans un délai d’au moins trois ans ou passer un an dans 
le bureau de l’un des avocats enregistrés au Barreau de Tanger en cas d’augmentation ou de présence de 
résidence dans la région internationale et l’obligation d’exercer la profession à l’étranger ou dans le bureau de 
l’un des avocats enregistrés au Barreau de Tanger a été supprimée sous Dahir 22/07/1953 et ce système a 
continué jusqu’à la délivrance de Dahir 8/6/1959 réglementant la profession juridique après l’indépendance 
du Maroc avec l’unification de ses règles sur l’ensemble du territoire national, le nouveau système unifié a été 
modifié par le décret royal du 19/12/1968 et par Dahir 08/11/1979 puis par Dahir 10/09/1993 tel que modifié 
et complété par Dahir 14/10/1996 et enfin par Dahir 20/10/2008.</li>
                       
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
                                                                    <a href="tel:0539 32 53 31">0539 32 53 31


                                                                    </a>
                                                             
                                                                </li>
                                                                <li>
                                                                <span class="section_normale_contact_list_icon "><i
                                                                            class="las la-fax position-absolute top-50 start-50 translate-middle"></i></i></span>
                                                                    <a href="Fax : 05 39 32 53 33">05 39 32 53 33</a>
                                                                </li>
                                        
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    17 Rue Abou Bakr Razi quartier 
administratif, Tanger.


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
                    <a href="http://www.barreautanger.org/" target="_blanck">
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
                <a href="{{(asset('/reso-ordre/opca'))}}">
                    <button class="previous_btn">OPCA</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/reso-ordre/notaire'))}}">
                        <button class="next_btn">CNON</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
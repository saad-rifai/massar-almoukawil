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
                        Endeavor Morocco
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Endeavor Morocco est un bureau affilié d’Endeavor Global, qui est une organisation
                        internationale d’entrepreneurs, pour
                        les entrepreneurs créée en 1997. <br>
                        Sa raison d’être est la stimulation de l’Entrepreneuriat à Fort Impact. <br>
                        Son ambition est de catalyser les meilleurs entrepreneurs à fort impact marocains pour atteindre
                        leur plein potentiel. Son
                        objectif à moyen-terme est d’accompagner ces entrepreneurs aux changements d’échelle.


                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <p class="section_normale_text">Le programme d’Enactus Morocco s’articule autour de formations,
                        séminaires, compétitions et un programme complet
                        d’accompagnement de près des étudiants Enactus. Cet accompagnement s’inscrit dans le processus
                        de mise en place de
                        projets innovants, répondant aux principales problématiques de la communauté.
                    </p>

                    <ul class="section_normale_list">
                        <li>Entrepreneur First : Endeavour Entrepreneurs les placent au centre de tout ce qu’ils font et
                            leurs assurent toujours
                            un soutien</li>
                        <li>Go Big : il voit la folie comme un compliment, le risque comme une opportunité et l'impact
                            comme illimité.
                        </li>
                        <li>Pay It Forward : il multiplie son impact en responsabilisant la prochaine génération de
                            fondateurs.
                        </li>
                        <li>Network of Trust : il est une communauté fondée sur le respect mutuel et protège toujours
                            les intérêts des
                            fondateurs</li>
                        <li>One Endeavor : il est sans frontières - unifiés par sa croyance dans le pouvoir de
                            l'entrepreneuriat et de
                            l'innovation technologique.</li>
                        <li>Always Agile : il est dynamique et flexible, il s’adapte à la dynamique changeante du marché
                            et aux nouveaux
                            points de données.</li>
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
                                <a href="Tel:05 22 36 82 82">Tel :05 22 36 82 82</a>


                            </li>
                            <li><span class="section_normale_contact_list_icon"><i
                                        class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                        Rue Bab Al Irfane Résidence 
Okad 12, Apt N° 6, ETG 
2Casablanca


                            </li>
                            <li>
                                <span class="section_normale_contact_list_icon"><i
                                        class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                <a href="mailto:teammorocco@endeavor.org">
teammorocco@endeavor.
org</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="section_hr">
                <div class="text-containet text-center">
                    <a href="http://www.endeavor.org/" target="_blanck">
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

                <a href="{{(asset('/accomp-entr/enactus'))}}">
                    <button class="previous_btn">Enactus</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/accomp-entr/bidaya'))}}">
                        <button class="next_btn">Bidaya</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br>

    <hr>
    @include('assets.footer')
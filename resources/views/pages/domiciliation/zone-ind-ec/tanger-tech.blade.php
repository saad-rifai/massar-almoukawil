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
                        Tanger Tech
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Le projet de la Cité Mohammed VI Tanger Tech avait été présenté pour la première fois, à Tanger
                        en mars 2017, il a été
                        lancé le 25 juillet 2022, avec la signature d’une convention cadre pour la concrétisation du
                        projet. <br>
                        Situé dans les communes de Laaouma et de Sebt Azzinate dans la région Tanger-Tétouan-Al Hoceima,
                        ce projet qui
                        s’étend sur une superficie globale de 2167 ha, comprendra une zone d’accélération industrielle
                        (ZAI) d’une superficie
                        globale de 947 ha. <br>
                        Le projet englobe également une “Smart City” avec une superficie globale de 1.220 Ha. Cette
                        future ville intelligente
                        comprendra des zones de services, des ensembles résidentiels, touristiques et de loisirs, ainsi
                        que l’ensemble des
                        infrastructures publiques nécessaires au bon fonctionnement de la cité. <br>
                    </p>
                </div>


                <br>

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
                                            <span class="section_normale_contact_list_icon ">
                                                <i class="las la-industry position-absolute top-50 start-50 translate-middle"></i>
                                                
                                                </span>
                                                Société d'Aménagement 
Tanger-Tech (SATT) <br>
                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon "><i
                                                    class="las la-phone position-absolute top-50 start-50 translate-middle"></i></span>
                                            Tél : 05 39 39 34 06

                                        </li>
                 
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    Tanger tech, Ain Dalia
                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                            <a href="mailto:n.guenned@tangermed.ma">
                                            n.guenned@tangermed.ma</a>
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
                <br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
            <a href="{{(asset('/zone-ind-ec/free-zone'))}}">
                    <button class="previous_btn">Tanger Free Zone</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/zone-ind-ec/tetouan-park'))}}">
                        <button class="next_btn">Tetouan park</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
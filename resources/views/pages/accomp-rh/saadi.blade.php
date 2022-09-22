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
                    Université Abdelmalek Essaadi



                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        L’Université Abdelmalek Essaâdi (UAE) est appelée à jouer pleinement son rôle, d’institution
                        citoyenne, de locomotive
                        de développement socioéconomique et culturel à l’échelle de la région Tanger-Tétouan-Al Hoceima.
                        Ce défi ne peut
                        avoir lieu qu’avec une offre de formation compétitive et une recherche performante pour
                        accompagner la dynamique
                        socioéconomique de la région Tanger-Tétouan-Al Hoceima lancée par Sa Majesté le Roi Mohammed VI.
                        <br>
                        <br>
                        Actuellement, et en plus de la présidence, considérée comme une institution centrale au service
                        des autres établissements,
                        l’UAE comprend 16 établissements universitaires : 10 facultés (FS-Tétouan, FLSH-Tétouan,
                        FSJES-Tétouan, FST-Tanger, FSJES-Tanger, FP-Larache, FST- Al Hoceima, la Faculté de Médecine et
                        Pharmacie à Tanger, la Faculté
                        d’Oussoul Dine- Tétouan, FPKsar El Kébir) et 6 écoles (ENCG-Tanger, ENSA-Tanger, ENSA-Tétouan,
                        ENSA-Al
                        Hoceima, ESRFT-Tanger et ENS-Tétouan). De nouveaux établissements verront le jour prochainement
                        avec 5 autres
                        facultés (FEG-Tétouan, FEG-Tanger, FP-Al Hoceima, FP-Chefchaouen et FP-Ouezzane) et 2 écoles
                        (l’EST à Tétouan
                        et l’ENCG à Al Hoceima).


                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <p class="section_normale_text">La possibilité de consulter la banque de données des CV des lauréats
                        sur Internet, ainsi que la recherche et la sélection
                        des profils ciblés. <br>
                        La publication des annonces d’offre de travail sur le site. <br>
                        Proposer un contact avec un responsable chargé de la détermination des besoins en recrutement.
                    </p>



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
                                    <a href="tel:05 39 97 93 16">Tél: 05 39 97 93 16</a>


                                </li>
                                <li> <span class="section_normale_contact_list_icon "><i
                                            class="las la-fax position-absolute top-50 start-50 translate-middle"></i></span>
                                    Fax.: 05 39 97 91 51
                                </li>

                                <li><span class="section_normale_contact_list_icon"><i
                                            class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                    Quartier M'haneche II,
                                    avenue 9 Avril, B.P. 2117
                                    Tétouan

                                </li>
                                <li>
                                    <span class="section_normale_contact_list_icon"><i
                                            class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                    <a href="mailto:presidence@uae.ac.ma">
                                        presidence@uae.ac.ma</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <hr class="section_hr">
                </div>
                <div class="text-containet text-center">
                    <a href="http://www.uae.ma/" target="_blanck">
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
                <a href="{{(asset('/accomp-rh/career'))}}">
                    <button class="previous_btn">Career Center</button>
                </a>
            </div>
            <div class="col">
                <div class="next-btn-box">

                    <a href="{{(asset('/accomp-rh/cnss'))}}">
                        <button class="next_btn">CNSS</button>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <br>

    <hr>
    @include('assets.footer')
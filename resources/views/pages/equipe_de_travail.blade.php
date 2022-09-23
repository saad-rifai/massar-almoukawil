@section('title', "Equipe de travail")

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Equipe de travail</h1>
                </div>
                <div class="row justify-content-md-center row-cols-4">
                    <div class="col">
                        <div class="box_user"  data-aos="fade-up" data-aos-duration="3000">
                            <div class="box_user_image">
                                <img src="{{asset('images/equipe/nourdin.jpeg')}}" alt="Noureddine ELOUAJIH">
                            </div>
                            <div class="box_user_name">
                                <h4><strong>Noureddine ELOUAJIH </strong><br>
                                    Président de la commission
                                    TPE et Start-ups de la CGEM TTA
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_user" data-aos="fade-up" data-aos-duration="3000">
                            <div class="box_user_image">
                                <img src="{{asset('images/equipe/hanae.jpg')}}" alt="Hanae BOURAKADI">
                            </div>
                            <div class="box_user_name">
                                <h4><strong>Hanae BOURAKADI</strong> <br>
                                    Directrice de la CGEM
                                     région TTA
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_user" data-aos="fade-up" data-aos-duration="3000">
                            <div class="box_user_image">
                                <img src="{{asset('images/equipe/amine.jpg')}}" alt="Mohamed Amine ANAGAM">
                            </div>
                            <div class="box_user_name">
                                <h4><strong>Mohamed Amine ANAGAM</strong> <br>
                                    Responsable du CA TANGER
                                    TAMWILCOM
                                </h4>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col">
                        <div class="box_user" data-aos="fade-up" data-aos-duration="3000">
                            <div class="box_user_image">
                                <img src="{{asset('images/equipe/issam-belfhil.jpeg')}}" alt="Issam BELFHIL">
                            </div>
                            <div class="box_user_name">
                                <h4><strong>Issam BELFHIL</strong> <br>
                                    Directeur Technopark Tanger
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="box_user" data-aos="fade-up" data-aos-duration="3000">
                            <div class="box_user_image">
                                <img src="{{asset('images/equipe/adil-miftah.jpg')}}" alt="Adil MIFTAH">
                            </div>
                            <div class="box_user_name">
                                <h4><strong>Adil MIFTAH </strong><br>
                                    Accompagnateur TPE
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_user" data-aos="fade-up" data-aos-duration="3000">
                            <div class="box_user_image">
                                <img src="{{asset('images/equipe/majda.jpeg')}}" alt="Majda KTIRI<">
                            </div>
                            <div class="box_user_name">
                                <h4><strong>Majda KTIRI</strong> <br>
                                    Master Coach
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_user" data-aos="fade-up" data-aos-duration="3000">
                            <div class="box_user_image">
                                <img src="{{asset('images/equipe/Abdelhamid BENDAOUED.jpg')}}" alt="Abdelhamid BENDAOUED">
                            </div>
                            <div class="box_user_name">
                                <h4><strong>Abdelhamid BENDAOUED</strong> <br>
                                    Responsable DAR MOKAWIL
                                    Pasteur 
                                    TANGER
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_user" data-aos="fade-up" data-aos-duration="3000">
                            <div class="box_user_image">
                                <img src="{{asset('images/equipe/Hatim BENTRIA.jpeg')}}" alt="Hatim BENTRIA">
                            </div>
                            <div class="box_user_name">
                                <h4><strong>Hatim BENTRIA</strong> <br>
                                    Responsable DAR MOKAWIL
                                    DRISSIA TANGER
                                </h4>
                            </div>
                        </div>
                    </div>



    





                    <div class="col" data-aos="fade-up" data-aos-duration="3000">
                        <div class="box_user">
                            <div class="box_user_image">
                                <img src="{{asset('images/equipe/Fatima Zahrae STITOU.jpg')}}" alt="">
                            </div>
                            <div class="box_user_name">
                                <h4><strong>Fatima Zahrae STITOU</strong> <br>
                                    Master accompagnement des
                                    entreprises
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="col" data-aos="fade-up" data-aos-duration="3000">
                        <div class="box_user">
                            <div class="box_user_image">
                                <img src="{{asset('images/equipe/Asmae ELMEKKI.jpg')}}" alt="">
                            </div>
                            <div class="box_user_name">
                                <h4><strong>Asmae ELMEKKI </strong><br>
                                    4ème année gestion financière &
                                    comptable ENCGT
                                </h4>
                            </div>
                        </div>
                    </div>


                </div>
                <br>
                <br>
                <div class="section-title-br">
                    <h1>Développé par</h1>
                </div>

                <div class="list-logos equipe_page" data-aos="fade-up" data-aos-duration="3000">
                    <div class="logo-img-b">
                        <img src="{{asset('images/partners/CGEM.png')}}" alt="">
                    </div>
                    <div class="logo-img-b">
                        <img src="{{asset('images/partners/TAMWILCOM.png')}}" alt="">
                    </div>
                    <div class="logo-img-b">
                        <img src="{{asset('images/partners/DARMOUKAWIL.png')}}" alt="">
                    </div>
                    <div class="logo-img-b">
                        <img src="{{asset('images/partners/NERYOU.png')}}" alt="">
                    </div>
                    <div class="logo-img-b">
                        <img src="{{asset('images/partners/TECHNOPARK.png')}}" alt="">
                    </div>
                </div>
                <br>
                <br>



                <div class="section-title-br">
                    <h1>Sponsorisé Par</h1>
                </div>

                <div class="list-logos equipe_page" data-aos="fade-up" data-aos-duration="3000">
                    <div class="logo-img-b"><img src="{{asset('images/logos/logo_mfe.png')}}" alt=""></div>

                </div>


                <br>
                <br>
            </div>
        </div>
        <br>
        <hr>
        @include('assets.footer')
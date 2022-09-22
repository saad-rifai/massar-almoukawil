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
                        Inspection du Travail

                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        La loi 611-1 du Code du Travail stipule que les inspecteurs du travail sont chargés à
                        l'application des dispositions du
                        Code du Travail, des lois et règlements, ect. Mission qui s’étend au contrôle du règlement
                        intérieur.

                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <p class="section_normale_text">CL'inspection du travail fournit des informations et des conseils
                        aux employeurs et aux salariés sur les dispositions légales
                        applicables à leur situation. <br>
                        Dès lors que les salariés sont déclarés à la CNSS, des documents et formulaires doivent être
                        déposés au bureau
                        l’inspection du travail le plus proche.</p>


                </div>

                <hr class="section_hr">
                <h2 class="blue-section-title">
                    Contact
                </h2>
                <div class="row">
                    <div class="col">
                        <ul class="section_normale_contact_list">




                            <li><span class="section_normale_contact_list_icon"><i
                                        class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                Rue Ibn Al Haytam،,
                                Tanger 90060



                            </li>


                        </ul>
                    </div>
                </div>


                <br>
                <br>
            </div>





            <br>
            <br>
        </div>

        <div class="row">
            <div class="col">

                <a href="{{(asset('/accomp-rh/cnss'))}}">
                    <button class="previous_btn">CNSS</button>
                </a>
            </div>
            <div class="col">
            <div class="next-btn-box">
                    <a href="{{(asset('/accomp-rh/recrutement'))}}">
                        <button class="next_btn">Cabinet de Recrutement</button>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <br>

    <hr>
    @include('assets.footer')
@section('title', 'Financement 
Création/post création
')
@section('description', "Financement 
Assistance technique 
Aide à préparation de projets 
")

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Financement 
                        Création/post création
                        </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Objet
                    </h2>
                    <p class="section_normale_text">
                        Financement  <br>
                        Assistance technique  <br>
                        Aide à préparation de projets 
                        
                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Description
                    </h2>
                    <p class="section_normale_text">
                        <ul>
                            <li>Financement de projets et pr&ecirc;ts aux entreprises pour leur propre compte pour une dur&eacute;e qui varie entre 7 et 12 ans</li>
                            <li>Prises de participation selon des conditions de financements au-del&agrave; de 5 Millions de Dollars, dans la limite de 20% du capital de la soci&eacute;t&eacute;.</li>
                            <li>Pr&ecirc;ts syndiqu&eacute;s.</li>
                            </ul>
                        </p>
                </div>
                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Cible
                            </h2>
                            <p>
                                PME / ETI
                            </p>

                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Critères d’éligibilité
                            </h2>
                            <p class="section_normale_text">
                                <ul>
                                    <li>Projet r&eacute;alis&eacute; dans un pays membre de l&rsquo;IFC</li>
                                    <li>Projet r&eacute;alis&eacute; par le secteur priv&eacute;</li>
                                    <li>Projet viable techniquement, commercialement et financi&egrave;rement</li>
                                    <li>Projet ayant de bonnes perspectives de rentabilit&eacute; et de retomb&eacute;es positives pour l&rsquo;&eacute;conomie locale.</li>
                                    </ul>

                            </p>
                        </div>

                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title"> Plafond de financement </h2>
                            <p>
                                Traitement cas par cas.

                            </p>
                        </div>

                        <div class="col">
                            <h2 class="blue-section-title">Modalités de remboursement </h2>
                            <p class="section_normale_text">
                                Au cas par cas.

                            </p>
                        </div>
                    </div>
                    <br>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">Conditions de garanties </h2>
                            <p class="section_normale_text">
                                Au cas par cas.

                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">Coût du financement / de l’opération</h2>
                            <p class="section_normale_text">
                                Au cas par cas.

                            </p>
                        </div>



                    </div>
                    <div class="col">
                        <h2 class="blue-section-title">Documents nécessaires </h2>
                        <p class="section_normale_text">
                            Prendre contact avec l’organisme.
                        </p>
                    </div>
                    <br>


        
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
                                                    class="las la-user position-absolute top-50 start-50 translate-middle"></i></span>
                                                    Mme Ghita HANANE
                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon "><i
                                                    class="las la-phone position-absolute top-50 start-50 translate-middle"></i></span>
                                            <a href="tel:06 62 63 76 25 ">06 62 63 76 25 </a>
                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-link position-absolute top-50 start-50 translate-middle"></i></span>
                                            <a href=" http://www.ifc.org"> www.ifc.org</a>
                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                            class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                    <a href="mailto:ghannane@ifc.org"> ghannane@ifc.org</a>
                                </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col">

                        </div>

                    </div>
                </div>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('/financement/les-organismes-internationaux/consultance-locale'))}}">
                    <button class="previous_btn">Consultance Locale</button>
                </a>
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a href="{{(asset('/financement/les-organismes-internationaux/fonds-d-amor-age-digital-africa'))}}">
                        <button class="next_btn">Fonds d’amorçage Digital Africa</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
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
                        Association des Transitaires Agrées en
                        Douane au Maroc
                    </h1>
                </div>
                <br>
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
                                            <span class="section_normale_contact_list_icon "><i
                                                    class="las la-phone position-absolute top-50 start-50 translate-middle"></i></span>
                                            <a href="tel:05 22 54 21 50

">05 22 54 21 50

                                            </a>

                                            </a>
                                        </li>
                                        <li> 
                                            <span class="section_normale_contact_list_icon"><i class="lab la-facebook position-absolute top-50 start-50 translate-middle"></i></span><a
                                                href="https://www.facebook.com/Association.Tr
ansitaires.ATADM/"> Association.Tr
ansitaires.ATADM</a>
                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    38 bd Emile Zola 1°ét. n°2 
Belvedere Casablanca
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
                    <a href="https://atadm.org/" target="_blanck">
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
                <a href="{{(asset('/soutien-ex/asmex'))}}">
                    <button class="previous_btn">ASMEX</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/soutien-ex/tangermed'))}}">
                        <button class="next_btn">TangerMed</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
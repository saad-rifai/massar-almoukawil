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
                        Association Marocaine des
                        Agences Immobilières (AMAI)


                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        l'Association Marocaine des Agences Immobilières (AMAI) vise à structurer la profession et à
                        surmonter les nombreuses
                        contraintes juridiques auquel l’immobilier doit faire face. <br>
                        En effet, l’AMAI a pour vocation de défendre les intérêts des professionnels de l'immobilier et
                        des clients, de développer
                        le professionnalisme du secteur immobilier et de sécuriser les projets immobiliers.

                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <p class="section_normale_text">Défendre les intérêts des professionnels de l'immobilier et des
                        clients, de développer le professionnalisme du secteur
                        immobilier et de sécuriser les projets immobiliers. <br>
                        l’AMAI a mis en place des procédures internes pour mieux cerner l’activité, améliorer le
                        management et donc améliorer
                        les résultats :
                    </p>
                    <ul class="section_normale_list">
                        <li> Le principe du mandat : cette procédure vise à contractualiser les opérations entre l’agent
                            immobilier et son client. Le
                            mandat formalise la désignation du bien, le prix souhaité ainsi que le niveau de
                            rémunération de l’intermédiaire. </li>
                        <li>Un barème de commissions : dans le but d’uniformiser les modes de tarification. Ceci
                            permettra d’apporter plus de
                            lisibilité au niveau du secteur car actuellement les prix varient d’un professionnel à
                            l’autre.</li>
                        <li>La charte déontologique : permet au client d’adresser directement ses réclamations, au
                            bureau de l’AMAI et rend
                            obligatoire leur traitements</li>


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
                                        

                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                            47 Rue Othmane Ibn Affane, Immeuble B2 3eme etage, Anfa Casablanca, Maroc


                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                                href="mailto:contact@amai.ma">
                                                contact@amai.ma</a>
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
                    <a href="https://www.facebook.com/FMAI.Maroc/" target="_blanck">
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
                <a href="{{(asset('/reso-secto/cime'))}}">
                    <button class="previous_btn">CIME</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/reso-secto/alat'))}}">
                        <button class="next_btn">ALAT</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
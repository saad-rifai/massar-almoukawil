@section('title', 'Innov Idea')
@section('description', '
Sous la conduite éclairée de Sa Majesté le Roi Mohammed VI, Que Dieu l’Assiste, le Maroc
construit une
stratégie globale de développement socio-économique et de progrès humain.
Le gouvernement a donc inscrit parmi ses priorités l’encouragement à l’entrepreneuriat à travers
plusieurs
dispositifs dont le Programme FORSA.')

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Innov Idea</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Objet
                    </h2>
                    <p class="section_normale_text">
                        Innov Idea Appui pour la faisabilité de l'innovation. 

                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Description
                    </h2>
                    <p class="section_normale_text">
                        Le produit Innov Idea fait partie du programme Innov Invest porté par la CCG en partenariat avec
                        plusieurs structures d’accompagnement. Il se présente sous forme de subvention qui sert à encourager
                        les entreprises de droit marocain à créer des solutions, des services ou des produits innovants et à fort
                        impact. Cette aide financière permet aux entrepreneurs de préparer des projets innovants et de faire de
                        la recherche et développement par : Des études de faisabilité de l'innovation, l'intégration de
                        compétences, le prototypage…
                    </p>
                </div>
                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Cible
                            </h2>
                            <p class="section_normale_text">
                                -Jeune porteur de projet ou créateur d’une
                                nouvelle entreprise 
                                
                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Critères d’éligibilité
                            </h2>
                            <p class="section_normale_text">
                                - Idée innovante  <br>
                                - Société de droit marocain  <br>
                                - Idée à fort impact  <br>
                                - Entreprise établie dans la région du nord (CEED Grow)  <br>
                                - Entrepreneur démontrant un besoin clair d’accompagnement.
                            </p>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title"> Plafond de financement </h2>
                            <p class="section_normale_text">
                                - 100 000 par personne. <br>
                                - Maximum de 200 000 dhs si deux personnes ou plus. 
                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Modalités de remboursement </h2>
                            <p class="section_normale_text">
                                N / A
                            </p>
                        </div>
                    </div>
                    <br>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">Conditions de garanties </h2>
                            <p class="section_normale_text">
                                N / A

                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">Coût du financement / de l’opération</h2>
                            <p class="section_normale_text">
                                N / A
                            </p>
                        </div>
                    </div>
                    <br>
                    <h2 class="blue-section-title"> Documents nécessaires </h2>
                    <p class="section_normale_text">
                        - Contrat d’accompagnement  <br>
                        - CIN des fondateurs  <br>
                        - Registre de Commerce  <br>
                        - Statuts  <br>
                        - Certificat ICE  <br>
                        - RIB Bancaire  <br>
                        - Présentation du projet  <br>
                        - Fichier détaillant l’état de déblocage de la subvention.
                    </p>
                </div>
                <br>


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
                                                <i class="las la-phone position-absolute top-50 start-50 translate-middle"></i>
                                            </span>
                                            
                                            <a href="tel:06 61 06 67 50">06 61 06 67 50</a>
                                            
                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    Bureau 114, Technopark Tanger

                                        </li>
                                            <li>
                                            <span class="section_normale_contact_list_icon"><i class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                        <a href="mail:skada@ceed-morocco.org">skada@ceed-morocco.org</a>
                                        </li>

                                        <li>
                                            <span class="section_normale_contact_list_icon"><i class="las la-link position-absolute top-50 start-50 translate-middle"></i></span>
                                        <a href="https://ceed-global.org/">www.ceed-global.org</a>
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
                    <a href="http://www.forsa.ma/" target="_blanck">
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
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a href="{{(asset('/financement/prets-dhonneur/reseau-entreprendre'))}}">
                        <button class="next_btn">Start by Réseau Entreprendre</button>
                    </a>
                </div>
               
            </div>
         </div>
        <hr>
        @include('assets.footer')
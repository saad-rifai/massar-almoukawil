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
                    CLUSTER ÉLECTRONIQUE, 
MICROÉLECTRONIQUE ET 
MÉCATRONIQUE DU MAROC
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    Le CE3M anime et structure dans le Maroc un espace majeur d’innovation et de compétences spécialisées dans 
l’Électronique, la Microélectronique et Mécatronique. Il participe à la création et la production de produits et services 
capables de s’imposer au niveau national et international, et répondent aux besoins d’innovation des PME et des grands 
donneurs d’ordre Marocains et étrangers.


                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <p class="section_normale_text">L’offre de service du cluster aux start-ups et porteurs de projets, à travers nos équipes et réseau d’experts, coachs, 
mentors, se décline en 3 points :
                    </p>
                    <ul class="section_normale_list">
                        <li>Soutien à l’innovation, par L’identification des technologies nécessaires à sa réalisation, Aide au montage du 
dossier de candidature, notamment pour soumission dans des appels à projets, Assistance à la gestion du projet,</li>
<li>Soutien au financement, à travers l'Aide Financière Innov IDEA et Prêt d’honneur « Innov Start » pour les 
Startups innovantes en phase de pré-amorçage. Recherche du financement adapté en fonction de la nature du 
projet et son état d'avancement. </li>
<li>ESoutien au développement commercial, organisation de la participation sur des salons de référence nationaux 
et internationaux. Il accompagne depuis 2018 une dizaine de projets matures au CES VEGAS, qui est le lieu de 
rendez-vous incontournable pour les acteurs mondiaux des technologies grand public, permettant ainsi aux 
porteurs de projets de lancer leurs innovations sur une plateforme internationale, établir des relations avec des 
investisseurs les plus influents et développer des partenariats avec des startups, PME et les plus grandes 
entreprises du monde.</li>
<li>Networking, et Rencontres avec des donneurs d'ordres nationaux, c’est le grand soutien qu’il peut apporter aux 
start-ups et porteurs de projets, c’est la commande, la commande d’un grand groupe, qui donne de la visibilité 
des perspectives aux porteurs de projets</li>
                    </ul>
                   
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                    Démarches
                    </h2>

                    <p class="section_normale_text">Si vous êtes un porteur du projet et vous voulez postuler, vous pouvez consulter le lien suivant : <a target="_blank" href="https://ce3m.ma/index.php/fr/appel-a-projet">www.ce3m.ma/index.php/fr/appel-a-projet</a>
                    </p>
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
                                                   <a href="Tel:05 23 31 28 06">Tel :05 23 31 28 06</a>


                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    N°3, rue Ibnou Essali 1er étage 
BELVEDER - Casablanca

                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                            <a href="mailto:bouyaakoub@ce3m.ma">
                                            bouyaakoub@ce3m.ma</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                <hr class="section_hr">
                <div class="text-containet text-center">
                    <a href="http://www.ce3m.ma/" target="_blanck">
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

                <a href="{{(asset('/accomp-entr/startup-maroc'))}}">
                    <button class="previous_btn">StartUp Maroc</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/accomp-entr/menara'))}}">
                        <button class="next_btn">Cluster Menara</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br>

    <hr>
    @include('assets.footer')
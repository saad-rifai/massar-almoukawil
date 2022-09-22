@section('title', 'Fondation création d’entreprises')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Fondation création d’entreprises</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Créée en 1991 par le Groupe Banque Populaire, la Fondation Création d’Entreprises (FCE), est une association à but non lucratif
                        régie par le Dahir du 15 novembre 1958, reconnue d’utilité publique par le décret du 27 juin 2001.
                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <ul>
                        <li>Appuyer les porteurs d&rsquo;id&eacute;es et de projets dans diff&eacute;rentes r&eacute;gions du Maroc.</li>
                        <li>Soutenir les diff&eacute;rents programmes nationaux pour la cr&eacute;ation d&rsquo;entreprises et l&rsquo;aide &agrave; l&rsquo;auto-emploi (Les programmes de<br />PACEIM I, PACEIM II et ACEDIM, le programme Diamed pilot&eacute; par l&rsquo;union Europ&eacute;enne, le programme Maghreb entrepreneur<br />pilot&eacute; par le minist&egrave;re Marocain de l&rsquo;immigration.</li>
                        <li>Organiser une s&eacute;rie de s&eacute;minaires de formation aussi bien entrepreneuriale que manag&eacute;riale.</li>
                        <li>Organiser des Appels &agrave; Projets dans plusieurs r&eacute;gions du pays en mettant &agrave; leur disposition un dispositif d&rsquo;accompagnement<br />en pr&eacute;-cr&eacute;ation, durant toute la phase de cr&eacute;ation et en post-cr&eacute;ation pour assurer la p&eacute;rennit&eacute; de leurs entreprises.</li>
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
                                        <li>
                                            <span class="section_normale_contact_list_icon "><i
                                                    class="las la-phone position-absolute top-50 start-50 translate-middle"></i></span>
                                            <a href="tel:05 39 32 95 00">05 39 32 95 00</a> /
                                            <a href="tel:05 39 94 33 28">05 39 94 33 28</a>
                                             
                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                           <a href="mailto:fondationbpce@iam.net.ma">fondationbpce@iam.net.ma</a> 
                                            
                                        </li>
                              
                                        <li><span class="section_normale_contact_list_icon"><i class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                            76, bd Mohammed V, Tanger, Maroc 
                                            
                                        </li>
                                   
                                    </ul>
                                </div>
                            </div>
                        </div>
                

                    </div>

                </div>
                <hr class="section_hr">
                <div class="text-containet text-center">
                    <a href="https://www.groupebcp.com/fr" target="_blanck">
                        <button class="lg-btn-produit"><i class="las la-external-link-alt"></i> Visitez le site
                            Web</button>
                    </a>
                </div>
                <br>
                <br>
            </div>
        </div>
        <br>
        <div class="row ">
            <div class="col">
                <a href="{{(asset('idee/dar-al-moukawil'))}}">
                    <button class="previous_btn">Dar Al Moukawil</button>
                </a>
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a href="{{(asset('idee/anapec'))}}">
                        <button class="next_btn">Anapec</button>
                    </a>
                </div>
            </div>
        </div>
   
        <hr>
        @include('assets.footer')
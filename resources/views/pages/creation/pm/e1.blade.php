@include('assets.head')


<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Etape n°1 :
                        <br>
                        Office Marocain de la
Propriété Industrielle et
Commerciale (obligatoire)
                   
                        
                        </h1>
       
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        L’OMPIC est un établissement public doté de la personnalité morale et de l’autonomie financière. Il est placé sous la
                        tutelle du Ministère de l’Industrie, du Commerce, de l’Investissement et de l’Economie Numérique.
                        Le premier document à obtenir avant même toutes les démarches administratives est le certificat négatif, c’est un
                        document obligatoire. Ce document atteste que le nom commercial que vous avez choisi pour l’immatriculation au
                        registre du commerce n’a pas été déjà utilisé par quelqu’un d’autre. 
        
                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <ul class="section_normale_list">
                        <li>
                            Délivrer le certificat négatif. 
                        </li>
                        <li>La protection de la propriété industrielle (marques, brevets d’invention, dessins et modèles industriels).</li>
                        <li>
                            La diffusion d’information juridique (Extraits de registre de propriété industrielle et commerciale, copies officielles,
                            publication et gazette officielles, copies d’actes), d’information technique (Etat de la technique issu des brevets
                            d’invention) et d’information commerciale (Créations d’entreprises, informations financières issues des bilans,…)
                            
                        </li>
                      
                    </ul>
                </div>
                <div class="text-containet">
          
                    <div class="sample_table mb-5">
                        <table class="table table_model_2">
                            <thead>
                                <tr>
                                    <th >Certificat négatif (facultatif)</th>
                                    <th >Frais</th>
                                    <th >Documents à fournir</th>
                                </tr>
                            </thead>
                            <tbody>
                              

                                <tr>
                                    <td style="width: 60%">
                                       <p >
                                        1. Faire une demande soit en ligne sur le site officiel de
l’OMPIC, soit directement au niveau de l’Office à
Casablanca ou dans l’une des antennes régionales
présentes dans les principales villes du Maroc. 
                                        <br>
                                        2. Lors du dépôt, le demandeur doit remplir un formulaire, à
                                        télécharger et à renseigner en ligne et attendre 24 heures pour
                                        délivrer le certificat négatif.
                                        <br>
                                        NB : Si l’OMPIC rejette tous les noms proposés par le
                                        demandeur, celui-ci a la possibilité de faire à nouveau une
                                        demande gratuitement dans un délai de 15 jours à compter de la
                                        date du rejet. Une fois ce délai passé, il devra reconstituer à
                                        nouveau tout le dossier et s'acquitter des frais une nouvelle fois
                                       </p>

                                    </td>
                                    <td>230 DHS</td>
                                    <td><a href="https://nc.directentreprise.ma/inscription/nouveau-demandeur" target="_blank">Formulaire à remplir <i class="fas fa-external-link"></i></a> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr class="section_hr">
                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Contact
                            </h2>
                            <div class="sample_table mb-5">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Ville</th>
                                            <th scope="col">Tél</th>
                                            <th scope="col">E-mail</th>
                                            <th scope="col">Adresse </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tanger</td>
                                            <td>Tél : 05 39 94 60 26
                                                <br>
                                                Fax : 05 39 94 29 54</td>
                                            <td><a href="mailto:s_ligne.list@ompic.ma">s_ligne.list@ompic.ma</a></td>
                                            <td>Angle rue El Harir Rue Ibn
                                                Taymimya, </td>
                                        </tr>
                                        <tr>
                                            <td>Al Hoceima</td>
                                            <td>Tél : 05 39 98 26 48
                                                <br>
                                                Fax : 05 39 98 29 28 </td>
                                            <td><a href="mailto:s_ligne.list@ompic.ma">s_ligne.list@ompic.ma</a></td>
                                            <td>Avenue d'Al Andalous</td>
                                        </tr>
                                        <tr>
                                            <td>Tétouan</td>
                                            <td> Tél : 05 39 96 45 40
                                                <br>
                                                Fax : 05 39 96 67 89
                                                </td>
                                            <td><a href="mailto:s_ligne.list@ompic.ma">s_ligne.list@ompic.ma</a></td>
                                            <td>33, Bd. Mohamed V</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
  

                    </div>

                </div>
                <hr class="section_hr">

                <div class="text-containet text-center">
                    <a href="http://www.ompic.ma/fr" target="_blanck">
                        <button class="lg-btn-produit"><i class="las la-external-link-alt"></i> Visitez le site Web</button>
                    </a>
                </div>
                <br>
                <br>
            </div>
        </div>
       
        <div class="next-btn-box">
            <a href="{{(asset('/c/pm/e2'))}}">
                <button class="next_btn">Etape n°2</button>
            </a>
        </div>
        <hr>
        @include('assets.footer')
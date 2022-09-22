@include('assets.head')


<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Etape n°8 : <br>Journal d’annonces légales
                        Bulletin Officiel
                    </h1>

                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Le bulletin officiel comprend 6 éditions : une édition générale, en langue arabe, dans laquelle
                        sont insérés les lois, les
                        règlements ainsi que toutes autres décisions ou documents dont la publication au bulletin
                        officiel est requise par les lois
                        et règlements en vigueur, une édition des conventions internationales en langues arabe et
                        française, une édition des
                        annonces légales, judiciaires et administratives en langue arabe et une édition des annonces
                        relatives à l’immatriculation
                        foncière en langue arabe ainsi qu’une édition de traduction officielle qui parait en langue
                        française et contient la
                        traduction officielle des lois et règlements.

                    </p>
                </div>


                <div class="text-containet">

                    <div class="sample_table mb-5">
                        <table class="table table_model_2">
                            <thead>
                                <tr>
                                    <th>Publication au journal d’annonces légales et au
                                        Bulletin Officiel
                                    </th>
                                    <th>Frais</th>
                                    <th>Pièces à fournir</th>
                                </tr>
                            </thead>
                            <tbody>


                                <tr>
                                    <td style="width: 60%">
                                        - Toute nouvelle création de société doit
                                        impérativement paraître sur un journal d’annonce
                                        légal et le bulletin officiel national.
                                        Le dépositaire sera notifié sur la date de parution de
                                        son annonce et pourra soit aller le récupérer à
                                        l'imprimerie officielle ou le télécharger en ligne sur le
                                        site du Secrétariat Général du Gouvernement :
                                        <a href="www.sgg.gov.ma">www.sgg.gov.ma <i class="fas fa-external-link"></i></a>
                                        Pour obtenir le Bulletin Officiel, il faut compter entre
                                        2 à 15 jours.
                                        - Le portail électronique de publication des annonces
                                        légales au Bulletin Officiel (BO) est accessible à
                                        l'ensemble des annonceurs qui peuvent déposer à
                                        distance leurs annonces légales, de les payer et d'en
                                        suivre l'acheminement jusqu'à leur insertion de
                                        manière sécurisée. Pour s’inscrire 
                                        
                                        <a href="https://www.annonceslegales.gov.ma/?page=demande"> s’inscrire <i class="fas fa-external-link"></i></a>

                                        ur.CreationCompte

                                    </td>
                                    <td>
                                        JAL : Selon le journal choisi
                                        <br>
                                         B.O : 400 dhs + 18 dhs/copie



                                    </td>
                                    <td>
                                        <a href="https://docs.google.com/document/d/1DWk8cPzPHLU2yMa4Fm1inO3LXZ10vniI/edit?usp=sharing&ouid=108897296177950968301&rtpof=true&sd=true"> Demande d’insertion au BO  <i class="fas fa-external-link"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            
                <hr class="section_hr">

                <div class="text-containet text-center">
                    <a href="http://www.sgg.gov.ma/" target="_blanck">
                        <button class="lg-btn-produit"><i class="las la-external-link-alt"></i> Visitez le site
                            Web</button>
                    </a>
                </div>
                <br>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="{{(asset('/c/pm/e7'))}}">
                    <button class="previous_btn">Etape n°7</button>
                </a>
            </div>

        </div>

        <hr>
        @include('assets.footer')
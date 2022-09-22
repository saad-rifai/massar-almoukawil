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
                        Chambre Française de Commerce et
                        d’Industrie du Maroc
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        La CFCIM est une association privée, de droit marocain, qui a pour mission de promouvoir les
                        relations économiques entre
                        la France et le Maroc, favoriser l’implantation et le développement des entreprises dans le
                        Royaume, développer le
                        potentiel international des entreprises marocaines et accompagner les entreprises dans le
                        développement des compétences
                        de leurs collaborateurs par le biais de la formation.
                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <ul class="section_normale_list">
                        <li>Vie associative dense : Forums adhérents, réunions d'information, 8 Commissions et 1 Comité
                        </li>
                        <li>Assistance au dépôt des demandes de visa d’affaires et touristiques</li>
                        <li>Services Privilèges
                        </li>
                        <li>Accès à CFCIM Business – Espace Adhérents en ligne
                            .</li>
                        <li>La revue Conjoncture : le mensuel des décideurs</li>
                        <li>Conjoncture express : la newsletter hebdomadaire d’information</li>
                        <li>News Adhérents : votre communiqué de presse institutionnel relayé sur le site
                            conjoncture.info</li>
                        <li>Regards d’experts : votre article expert relayé sur Conjoncture</li>
                        <li> Réponse à demande d’informations économiques, juridiques, fiscales, douanières,
                            réglementaires, etc</li>
                        <li>Fiches marchées</li>
                        <li>Aide au recrutement</li>

                    </ul>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>
                    <p>Pour adhérer à la CFCIM, il suffit de renseigner le bulletin d’adhésion et de fournir la
                        documentation demandée disponible
                        sur la 4ème page du bulletin d’adhésion accessible sur le lien <a target="_blank"
                            href="https://www.cfcim.org/wp-content/uploads/2021/01/CFCIM-Bull-adhesion-Maroc-2021-modifiable.pdf">www.cfcim.org</a>
                    </p> <br>
                    Pour plus d’information sur le bulletin de renouvellement d’adhésion Maroc, consulter le lien: <a
                        target="_blank"
                        href="https://www.cfcim.org/wp-content/uploads/2021/01/CFCIM-Bull-Renouvl-adhesion-Maroc-2021-modifiable.pdf">www.cfcim.org</a>


                    <div class="sample_table mb-5">

                    </div>
                </div>
                <br>

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
                                            <th scope="col">Tel</th>
                                            <th scope="col">E-mail :</th>
                                            <th scope="col">Adresse :</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> Tanger :
                                                Délégué régional :
                                                Benoit Vaillant <br>
                                                06 61 92 42 22
                                            </td>
                                            <td>Délégué régional : <a
                                                    href="mailto:bvaillant@cfcim.org">bvaillant@cfcim.org</a> </td>
                                            <td> Résidence New Center Saada B, 2ème
                                                étage, 40 et 41, à l'angle des avenues
                                                Mohammed VI et Milton Tanger. </td>

                                        </tr>
                                        <tr>
                                            <td>Délégué Régional
                                                suppléant :
                                                Olivier GATTEL <br>
                                                06 13 11 46 61
                                            </td>

                                            <td>Délégué Régional
                                                suppléant : <a href="mailto:ogattel@cfcim.org">ogattel@cfcim.org</a>
                                            </td>
                                            <td> Résidence New Center Saada B, 2ème
                                                étage, 40 et 41, à l'angle des avenues
                                                Mohammed VI et Milton Tanger. </td>

                                        </tr>





                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <hr class="section_hr">
                        <div class="text-containet text-center">
                            <a target="_blank" href="https://www.cfcim.org/" target="_blanck">
                                <button class="lg-btn-produit"><i class="las la-external-link-alt"></i> Visitez le
                                    site
                                    Web</button>
                            </a>
                        </div>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">

            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/reso-etro/ahk'))}}">
                        <button class="next_btn">AHK</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
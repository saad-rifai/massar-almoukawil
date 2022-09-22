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
                        TANGER AUTOMOTIVE CITY
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Tanger Automotive City (TAC) est une zone d’accélération industrielle, érigée en zone franche
                        sur la Plateforme
                        Industrielle Intégrée (P2I) Automobile de Jouamâa. Elle a été aménagée en 2013 par l’Agence
                        Spéciale Tanger Med
                        (TMSA), sur une superficie initiale de 260 ha (TAC1) pour atteindre aujourd’hui 517 ha (350 ha
                        net) après le
                        lancement en 2019 de l’extension (TAC2). Elle fait partie du pôle industriel de Tanger Med Zone.
                        Sa gestion est
                        assurée par l’Agence Spéciale Tanger Med (TMSA) .
                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <p class="section_normale_text">
                        L’entreprise TAC se donne pour missions principales de fournir : <br>
                        <strong>Un environnement d’installation idéale (HardWare) :</strong> <br>
                    </p>
                    <ul class="section_normale_list">
                        <li> Location de terrains nus,</li>
                        <li>Achat de terrains nus,</li>
                        <li> Location de bâtiments prêts à l’emploi.</li>
                        <li>Voies de circulation Réseaux d’eau, d’électricité, d’assainissement et de
                            télécommunications,</li>
                        <li>Eclairage de la voirie</li>
                        <li>Structures et constructions nécessaires à l’exécution des services de gestion, y compris les
                            clôtures, les murs et les
                            allées de la région</li>
                    </ul>
                    <p> <strong>Un accompagnement dédié (SoftWare) :</strong> </p>
                    <ul class="section_normale_list">
                        <li>Guichet unique pour accompagner les investisseurs dans l’ensemble de leurs démarches
                            (autorisations, permis de
                            construire, facility management…) et leurs permettre ainsi de gagner du temps et de rester
                            focaliser sur leur activité.</li>
                        <li>Le contrôle et le suivi des structures, des installations ainsi que les activités et
                            mouvements des biens, marchandises
                            et personnes au sein de la zone.</li>
                        <li>Gate access.</li>
                    </ul>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        PROCESSUS D’INSTALLATION
                    </h2>
                    <p>
                        <strong>Signature du contrat de location :
                        </strong> <br>
                    </p>
                    <ul class="section_normale_list">
                        <li> Demande d’autorisation d’Exploitation</li>
                        <li>Instruction du dossier et délivrance du Permis d’exploitation</li>
                        <li> Démarrage de l’activité</li>
                    </ul>
                    <p> <strong>Signature du contrat de vente du lot :</strong> </p>
                    <ul class="section_normale_list">
                        <li>Inscription de la vente sur les livres fonciers</li>
                        <li>Demande d’autorisation construction</li>
                        <li>Instruction du dossier et délivrance de l’autorisation de Commencement des travaux</li>
                        <li>Travaux de construction</li>
                        <li>Demande d’autorisation d’exploitation</li>
                        <li>Instruction du dossier et délivrance du Certificat de conformité des constructions</li>
                        <li>Démarrage de l’activité</li>
                    </ul>
                </div>
                <br>
                <h2 class="blue-section-title">
                    Contact
                </h2>
                <div class="sample_table mb-5">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Tel</th>
                                <th scope="col">Email</th>
                                <th scope="col">Adresse</th>
                                <th scope="col">Web</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>TAC</td>
                                <td>0539 39 62 14</td>
                                <td><a href="mailto:contacts@tangermedzones.com">
                                        contacts@tangermedzones.com</a></td>
                                <td>Zone franche
                                    d'exportation de Tanger
                                    Automotive City, ilot
                                    186, commune Anjra -
                                    Tanger </td>
                                <td>

                                <a href="https://www.tac.ma/" target="_blank">www.tac.ma</a>
                                </td>

                            </tr>
                            <tr>
                                <td>Agence 
Spéciale Tanger 
Med (TMSA)</td>
                                <td>05 39 34 92 50</td>
                                <td><a href="mailto:a.benayad@tangermed.ma">
                                a.benayad@tangermed.ma</a></td>
                                <td>Zone franche
                                    d'exportation de Tanger
                                    Automotive City, ilot
                                    186, commune Anjra -
                                    Tanger </td>
                                <td>

                                <a href="https://www.tangermedzones.com/" target="_blank">www.tangermedzones.com</a>
                                </td>

                            </tr>
                        </tbody>
                    </table>
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
                    <a href="{{(asset('/zone-ind-ec/free-zone'))}}">
                        <button class="next_btn">tanger free zone</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
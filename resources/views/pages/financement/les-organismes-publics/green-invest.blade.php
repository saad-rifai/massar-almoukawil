@section('title', 'Green INVEST')
@section('description', 'Acquisition des biens matériels et/ou immatériels ainsi que des installations techniques et des constructions à condition
que les constructions ne dépassent pas 20% du coût global du projet. Les projets doivent rentrer dans l’une des
catégories suivantes et respecter les critères y associés tels que décrits ci-dessous  ')

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Green INVEST</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Objet
                    </h2>
                    <p class="section_normale_text">
                        Acquisition des biens matériels et/ou immatériels ainsi que des installations techniques et des
                        constructions à condition que les constructions ne dépassent pas 20% du coût global du projet.
                        Les projets doivent rentrer dans l’une des catégories suivantes et respecter les critères y
                        associés tels que décrits ci-dessous : <br>
                        <br>
                    <table class="table">

                        <tbody>
                            <tr>
                                <th>
                                    <p>Cat&eacute;gorie de projets</p>
                                </th>
                                <td>
                                    <p>Description et conditions requises</p>
                                </td>
                                <td>
                                    <p>Consid&eacute;rations sp&eacute;ciales</p>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <p>Energie renouvelable</p>
                                </th>
                                <td>
                                    <p>Production d&rsquo;&eacute;nergie (&eacute;lectricit&eacute;, chaleur et/ou force
                                        motrice&hellip;) &agrave; partir de sources renouvelables ou propres,</p>
                                    <p>Production d&rsquo;&eacute;quipements destin&eacute;s &agrave; la production
                                        d&rsquo;&eacute;nergie &agrave; partir de sources propres.</p>
                                </td>
                                <td>
                                    <p>Les sources jug&eacute;es propres ou renouvelables incluent, outre le solaire,
                                        l&rsquo;&eacute;olien et l&rsquo;hydraulique, des carburants moins polluants
                                        (biomasse, biogaz et hydrog&egrave;ne&hellip;)</p>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <p>Efficacit&eacute; &eacute;nerg&eacute;tique</p>
                                </th>
                                <td>
                                    <p>Acquisition d&rsquo;installations et d&rsquo;&eacute;quipements destin&eacute;s
                                        &agrave; la r&eacute;duction de la consommation de l&rsquo;&eacute;nergie et des
                                        carburants,</p>
                                    <p>Installations de traitement pour recycler la chaleur issue des processus de
                                        l&rsquo;activit&eacute;,</p>
                                    <p>Installations d&rsquo;isolation thermique,</p>
                                    <p>Remplacement des &eacute;quipements (machines et v&eacute;hicules) par
                                        d&rsquo;autres fonctionnant avec des sources d&rsquo;&eacute;nergie
                                        renouvelables.&nbsp;</p>
                                </td>
                                <td>
                                    <p>Recours obligatoire &agrave; une expertise technique &agrave; la satisfaction de
                                        la Banque et de la CCG,</p>
                                    <p>Seuil minimum de r&eacute;duction de la consommation de 20% par rapport &agrave;
                                        la situation de d&eacute;part (consommation au titre du dernier exercice clos).
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <p>D&eacute;pollution et &eacute;conomie des ressources</p>
                                </th>
                                <td>
                                    <p>Installations de traitement pour r&eacute;duire les &eacute;missions polluantes
                                        avant leur rejet (traitement pr&eacute;ventif),</p>
                                    <p>Installations et &eacute;quipements permettant d&rsquo;&eacute;liminer ou traiter
                                        les d&eacute;chets et les &eacute;missions polluantes en aval des processus et
                                        des activit&eacute;s,</p>
                                    <p>Acquisition d&rsquo;installations et d&rsquo;&eacute;quipements directement
                                        li&eacute;s &agrave; l&rsquo;&eacute;conomie de l&rsquo;eau ou &agrave; son
                                        recyclage (d&eacute;salinisation de l&rsquo;eau de mer, filtrage&hellip;).</p>
                                </td>
                                <td>
                                    <p>Recours obligatoire &agrave; une expertise technique &agrave; la satisfaction de
                                        la Banque et de la CCG,</p>
                                    <p>Seuil minimum de r&eacute;duction des &eacute;missions et/ou de recyclage des
                                        ressources de 20% par rapport &agrave; la situation de d&eacute;part.</p>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <p>Valorisation des d&eacute;chets</p>
                                </th>
                                <td>
                                    <p>Collecte et recyclage des d&eacute;chets,</p>
                                    <p>Valorisation des d&eacute;chets &agrave; travers la production de
                                        d&eacute;riv&eacute;s (mat&eacute;riaux de construction, combustibles,
                                        extraction de biogaz &agrave; partir des d&eacute;chets organiques dans les
                                        d&eacute;charges&hellip;).</p>
                                </td>
                                <td>
                                    <p>Recours obligatoire &agrave; une expertise technique &agrave; la satisfaction de
                                        la Banque et de la CCG,</p>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <p>Fabrication d&rsquo;&eacute;quipements li&eacute;s aux projets &eacute;ligibles
                                    </p>
                                </th>
                                <td>
                                    <p>Fabrication/assemblage local d&rsquo;&eacute;quipements, de consommables, de
                                        pi&egrave;ces et de parts des &eacute;quipements directement li&eacute;s
                                        &agrave; l&rsquo;&eacute;nergie renouvelable, &agrave; l&rsquo;efficacit&eacute;
                                        &eacute;nerg&eacute;tique, &agrave; la d&eacute;pollution/&eacute;conomie des
                                        ressources et &agrave; la valorisation des d&eacute;chets (panneaux solaires,
                                        &eacute;oliennes, chaudi&egrave;res &agrave; biomasse, filtres, moteurs,
                                        variateurs, compteurs, solutions chimiques&hellip;).</p>
                                </td>
                                <td>
                                    <p>Les &eacute;quipements doivent porter sur des utilisations
                                        &laquo;&nbsp;c&oelig;ur de m&eacute;tier&nbsp;&raquo; et non sur des
                                        utilisations g&eacute;n&eacute;rales comme les structures m&eacute;talliques ou
                                        le g&eacute;nie civil par exemple.</p>
                                </td>
                            </tr>
                        </tbody>

                        </td>
                        </tr>
                        </tbody>
                    </table>
                    </p>
                </div>

                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Cible
                            </h2>
                            <p>
                                Tous les secteurs productifs à l’exclusion
                                de la promotion immobilière et de la pêche
                                hauturière

                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Critères d’éligibilité
                            </h2>
                            <p class="section_normale_text">
                                Entreprises de droit marocain ne se trouvant pas en situation de
                                redressement ou de liquidation judiciaire et répondant aux critères
                                décrits ci-dessous

                            </p>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title"> Plafond de financement </h2>
                            <p>Les programmes d&rsquo;investissement seront financ&eacute;s par les fonds propres et/ou
                                l&rsquo;autofinancement et par le cr&eacute;dit conjoint, constitu&eacute; de la part du
                                GREEN INVEST et de celle de la banque et ce, dans les proportions ci-apr&egrave;s :</p>
                            <ul>
                                <li>Fonds propres et/ou autofinancement&nbsp;: 20% au minimum (les dons, subventions,
                                    primes d&rsquo;investissement et prix des concours sont assimil&eacute;s &agrave;
                                    des fonds propres) ;</li>
                                <li>Part de GREEN INVEST&nbsp;: 40% au maximum avec un plafond de 10 MDH </li>
                                <li>Part de la banque&nbsp;: le reliquat, sans que cette part ne soit inf&eacute;rieure
                                    &agrave; la part du GEEN INVEST.</li>
                            </ul>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">Modalités de remboursement </h2>
                            <p class="section_normale_text">
                                12 ans au maximum dont un différé en principal n’excédant pas 4 ans.


                            </p>
                        </div>
                    </div>
                    <br>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">Conditions de garanties </h2>
                            <p class="section_normale_text">
                                Les garanties prévues par la banque sont prises Pari-passu entre la SNGFE et la banque
                                intervenante.
                                Le crédit bancaire accordé éventuellement parallèlement au crédit GREEN INVEST peut être
                                garanti par la SNGFE dans
                                le cadre du produit DAMANE ISTITMAR avec une quotité de garantie de 60% du montant du
                                crédit s’il s’agit d’un
                                développement et 70% du montant du crédit s’il s’agit d’une création dans la limite de
                                15 MDhs.



                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">Coût du financement / de l’opération</h2>
                            <p class="section_normale_text">
                                Taux d’intérêt pour la part du GREEN INVEST : 2,5 % l'an hors TVA, applicable au montant
                                total du crédit. <br>
                                Taux d’intérêt librement négociable entre la banque et l’entreprise calculé sur
                                l’encours du crédit bancaire. <br>
                                A noter que les taux d’intérêts dépendent également de la notation attribuée à
                                l’entreprise par la banque. <br>

                            </p>
                        </div>
                    </div>
                    <br>
                    <h2 class="blue-section-title"> Documents nécessaires </h2>
                    <p class="section_normale_text">

                    <ul>
                        <li>Dossier juridique de constitution + PV modificatifs le cas &eacute;ch&eacute;ant.</li>
                        <li>Contrats de loyer + derni&egrave;res quittances / Certificats de propri&eacute;t&eacute;s
                            des locaux d&rsquo;exploitation existants.</li>
                        <li>Liasses fiscales des trois derniers exercices + une situation provisoire le cas
                            &eacute;ch&eacute;ant.</li>
                        <li>Relev&eacute;s bancaires + Situation des engagements aupr&egrave;s des autres partenaires
                            financiers.</li>
                        <li>Un business plan reprenant le d&eacute;tail du projet &agrave; financer.</li>
                    </ul>

                    </p>
                    <br>
                    <br>
                    <h2 class="blue-section-title">
                        Contact
                    </h2>
                    <p class="section_normale_text"> <a href="{{asset('contacts/banques-classiques')}}">voir liste des
                            contacts <i class="fas fa-external-link"></i></a>
                    </p>

                </div>
                <br>
                <hr class="section_hr">

                <div class="text-containet text-center">
                    <a href="https://ccg.ma/fr/votre-projet/green-invest" target="_blanck">
                        <button class="lg-btn-produit"><i class="las la-external-link-alt"></i> Visitez le site Web</button>
                    </a>
                </div>
                <br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('financement/credits-participatives/mdm-invest'))}}">
                    <button class="previous_btn">MDM INVEST</button>
                </a>
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a href="{{(asset('/financement/les-organismes-publics/RENOVOTEL'))}}">
                        <button class="next_btn">RENOVOTEL</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
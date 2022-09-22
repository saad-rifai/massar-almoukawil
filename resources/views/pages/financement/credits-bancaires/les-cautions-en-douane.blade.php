@section('title', 'Les cautions en douane')
@section('description', 'C’est un engagement ferme que prend la banque pour honorer un ou plusieurs effets tirés sur un
client de la
banque.')

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Les cautions en douane</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Objet
                    </h2>
                    <p class="section_normale_text">
                        <strong>Les cautions en douane en garantie de facilité de paiement :</strong> <br>
                        Ces cautions sont délivrées par la banque pour le compte de sa clientèle en faveur de
                        l’administration de douane afin
                        de différer le paiement des droits et taxes douaniers. <br>
                        <strong>Les obligations cautionnées :</strong> <br>
                        Elles permettent à l’importateur de différer le règlement des droits et taxes en douane dont il
                        est redevable dans une
                        durée arrêtée par l’administration de la douane.

                        <br>
                        <br>
                        <strong>Besoin théorique : Achats à l’import x taux de douane cumulé x 120 jours / 360
                            jours</strong>

                        <br><br>
                        <strong>Le crédit d’enlèvement :</strong>
                        Il s’agit d’une facilité de paiement accordée par la douane aux redevables des droits et taxes
                        en autorisant l’enlèvement
                        des marchandises de la douane avant liquidation et paiement des droits.
                        Ce type de crédit ne comporte pas d’échéance, il est valable jusqu’à dénonciation par l’une des
                        parties

                        <br>
                        <br>
                        <strong>
                            Besoin théorique : 25% du besoin en obligation cautionnée (si O.C. est de 120j)
                        </strong>

                        <br>
                        <br>
                        <strong>Les cautions en douane en garantie de la suspension des droits et taxes :</strong>
                        Ce sont des cautions versées à la douane dans le cadre des régimes suspensifs (transit,
                        importation et exportation
                        temporaire,…). <br>
                        <strong>Les cautions d’entrepôt de douane :</strong>
                        Ils permettent à l’importateur d’entreposer des marchandises pour une durée déterminée dans des
                        établissements
                        soumis au contrôle de la douane. <br>
                        <strong>Les cautions pour admission temporaire :</strong>
                        La CAT est appliquée à des marchandises importées destiner à être transformées avant d’être
                        réexportées. <br>
                        Besoin théorique : Achats en T x T.D.D. x délai de rotation des A.T
                        NB : le délai d’apurement des A.T. dépend du cycle de production de la société <br>
                        <strong>Les cautions pour importation temporaire :</strong> <br>
                        La CIT permet à l’administration des douanes d’autoriser les résidents et les non-résidents
                        d’introduire sur le Maroc
                        des objets à usage personnel. <br>

                        <strong>Les cautions pour Trafic de perfectionnement à l’exportation :</strong> <br>
                        Elles permettent l’exportation provisoire des marchandises marocaines pour subir une
                        transformation à l’étranger. <br>

                        <strong>Les cautions pour exportation temporaire :</strong>
                        Elles permettent la sortie hors le territoire marocain des objets à usage personnel. <br>
                        <strong>Les cautions de transit :</strong>
                        Elles permettent à l’importateur de transporter sa marchandise d’un bureau de douane à un autre.

                    </p>
                </div>

                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Cible
                            </h2>
                            <p class="section_normale_text">
                                Professions libérales, Coopératives, Agriculteurs, Personnes
                                physiques, Personnes morales, GIE,

                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Critères d’éligibilité
                            </h2>
                            <p class="section_normale_text">
                                Ne pas être en situation contentieuse avec un autre
                                organisme financier. <br>
                                Justifier d’une opération d’importation.
                            </p>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title"> Plafond de financement </h2>
                            <p class="section_normale_text">
                                Le montant ne doit pas dépasser l’autorisation dont bénéficie l’entreprise en cette catégorie de crédit.


                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">Modalités de remboursement </h2>
                            <p class="section_normale_text">
                                La durée ne peut dépasser ni 360j ni la date d’échéance de l’autorisation.

                            </p>
                        </div>
                    </div>
                    <br>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">Conditions de garanties </h2>
                            <p class="section_normale_text">
                                Nantissement sur fonds de commerce et délégation d’assurance y afférente. <br>

                                Autres garanties librement négociables entre la banque et l’entreprise.<br>
                                Type de crédit pouvant être garanti par la SNGFE dans le cadre des produits : <br>
                            <ul>
                                <li>
                                    DAMANE EXPRESS si le crédit ne dépasse pas 1 000 000 DH avec une quotité de garantie
                                    de 70%.
                                </li>
                                <li>DAMANE ATTASYIR si le crédit dépasse 1 000 000 DH avec une quotité de garantie de
                                    60% du montant du crédit
                                    dans la limite de 15 MDhs. </li>
                            </ul>


                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">Coût du financement / de l’opération</h2>
                            <p class="section_normale_text">
                                Taux d’intérêt librement négociable entre la banque et l’entreprise, calculé sur la base des montants utilisés et les
                                jours de débit. <br>
                                A noter que les taux d’intérêts dépendent également de la notation attribuée à l’entreprise par la banque

                            </p>
                        </div>
                    </div>
                    <br>
                    <h2 class="blue-section-title"> Documents nécessaires </h2>
                    <p class="section_normale_text">

                    <ul>
                        <li>Dossier juridique de constitution + PV modificatifs le cas échéant.</li>
                        <li>Contrats de loyer + dernières quittances / Certificats de propriétés des locaux
                            d’exploitation existants.</li>
                        <li>Liasses fiscales des trois derniers exercices + une situation provisoire le cas échéant.
                        </li>
                        <li>Relevés bancaires + Situation des engagements auprès des autres partenaires financiers.</li>
                        <li>Un plan de trésorerie prévisionnel pour les 3 prochains exercices</li>
                        <li>Justification de la confirmation du marché en faveur de l’entreprise bénéficaire.</li>
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

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('financement/credits-bancaires/le-refinancement-import-en-devises'))}}">
                    <button class="previous_btn">Le refinancement import en devises</button>
                </a>
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a href="{{(asset('financement/credits-bancaires/le-pr-financement-export-en-dirhams'))}}">
                        <button class="next_btn">Le préfinancement export en dirhams</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
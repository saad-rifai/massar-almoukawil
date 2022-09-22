@section('title', ' Les crédits documentaires')
@section('description', 'C’est un document délivré par la banque en faveur d’un transporteur de marchandises importées. Le montant figurant
sur la lettre correspond à la valeur de la marchandise, ainsi que les effets de cette lettre cessent après un an.')

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Les crédits documentaires</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Objet
                    </h2>
                    <p class="section_normale_text">
                        Ce sont des crédits dont la banque est tenue d’effectuer un paiement soit à son ordre, à l’ordre d’un bénéficiaire ou
                        accepter un effet tiré sur lui, soit aussi, donner l’ordre à une autre banque d’effectuer ce paiement. Le crédit
                        documentaire peut être fait en 3 formules :
                        
                    </p>
                    <p class="section_normale_text">▪ Le cr&eacute;dit r&eacute;vocable<br />Il peut &ecirc;tre r&eacute;sili&eacute; par la banque &eacute;mettrice sans aucun avertissement pr&eacute;alable du b&eacute;n&eacute;ficiaire.<br />▪ Le cr&eacute;dit irr&eacute;vocable<br />Il ne peut &ecirc;tre annul&eacute; sans l&rsquo;accord de la banque &eacute;mettrice, la banque confirmante et le b&eacute;n&eacute;ficiaire.<br />▪ Le cr&eacute;dit confirm&eacute;<br />C&rsquo;est un engagement ferme entre la banque &eacute;mettrice (&agrave; sa demande) et la banque confirmante.</p>
                </div>

                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Cible
                            </h2>
                            <p class="section_normale_text">
                                Professions libérales, Coopératives,
                                Agriculteurs, Personnes physiques,
                                Personnes morales, GIE, 
                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Critères d’éligibilité
                            </h2>
                            <p class="section_normale_text">
                                Ne pas être en situation contentieuse avec un autre organisme
                                financier. <br>
                                Justifier d’une opération d’importation.
                            </p>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title"> Plafond de financement </h2>
                            <p class="section_normale_text">
                                En fonction du cycle d’importation de l’entreprise et de ces besoins.
                                <br>
                                <strong>Besoin théorique : Achats étrangers réglés par Credoc x Nombre de jours / 360</strong>


                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">Modalités de remboursement </h2>
                            <p class="section_normale_text">La durée est d’une année renouvelable.</p>
                        </div>
                    </div>
                    <br>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">Conditions de garanties </h2>
                            <p class="section_normale_text">
                                Nantissement des marchés à financer <br>
                                Nantissement sur fonds de commerce et délégation d’assurance y afférente. <br>
                                Autres garanties librement négociables entre la banque et l’entreprise.<br>
                                Type de crédit pouvant être garanti par la SNGFE dans le cadre des produits : <br>
                                <ul>
                                    <li>
                                        DAMANE EXPRESS si le crédit ne dépasse pas 1 000 000 DH avec une quotité de garantie de 70%. 
                                    </li>
                                    <li>DAMANE ATTASYIR si le crédit dépasse 1 000 000 DH avec une quotité de garantie de 60% du montant du crédit
                                        dans la limite de 15 MDhs. </li>
                                </ul>
                           
                                
                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">Coût du financement / de l’opération</h2>
                            <p class="section_normale_text">
                                Taux d’intérêt librement négociable entre la banque et l’entreprise, calculé sur la base des montants utilisés et les
                                jours de débit. <br>
                                A noter que les taux d’intérêts dépendent également de la notation attribuée à l’entreprise par la banque.         
                                
                            </p>
                        </div>
                    </div>
                    <br>
                    <h2 class="blue-section-title"> Documents nécessaires </h2>
                    <p class="section_normale_text">

                    <ul>
                        <li>Dossier juridique de constitution + PV modificatifs le cas échéant.</li>
                        <li>Contrats de loyer + dernières quittances / Certificats de propriétés des locaux d’exploitation existants.</li>
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
                <a href="{{(asset('financement/credits-bancaires/la-lettre-de-garantie'))}}">
                    <button class="previous_btn">La lettre de garantie</button>
                </a>
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a href="{{(asset('financement/credits-bancaires/les-avals-trangers-en-devises'))}}">
                        <button class="next_btn">Les avals étrangers en devises</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
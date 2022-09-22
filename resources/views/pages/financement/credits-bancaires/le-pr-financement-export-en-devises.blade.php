@section('title', 'Le préfinancement export en devises')
@section('description', 'C’est un crédit accordé par un correspondant étranger de la banque à une entreprise exportatrice pour permettre le financement
partiel des charges relatives à la préparation des commandes pour le compte du clients étrangers.')

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Le préfinancement export en devises</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Objet
                    </h2>
                    <p class="section_normale_text">
                        C’est un crédit accordé par un correspondant étranger de la banque à une entreprise exportatrice pour permettre le financement
                        partiel des charges relatives à la préparation des commandes pour le compte du clients étrangers.
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
                                physiques, Personnes morales, GIE.
                                

                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Critères d’éligibilité
                            </h2>
  
                          <ul>
                            <li>Ne pas être en situation contentieuse avec un autre organisme financier.</li>
                            <li>Être soumissionnaire d’un marché public nantissable.</li>
                          </ul>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title"> Plafond de financement </h2>
                            <p class="section_normale_text">
                                En fonction du cycle et du volume d’exportation et de l’entreprise. <br>
                                Besoin théorique : Chiffre d’affaires à l’export x 10%
                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">Modalités de remboursement </h2>
                            <p class="section_normale_text">
                                La durée ne peut dépasser ni 360j ni la date d’échéance de
                                l’autorisation.

                            </p>
                        </div>
                    </div>
                    <br>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">Conditions de garanties </h2>
                            <ul>
                                <li>Nantissement sur fonds de commerce et d&eacute;l&eacute;gation d&rsquo;assurance y aff&eacute;rente.</li>
                                <li>Autres garanties librement n&eacute;gociables entre la banque et<br />l&rsquo;entreprise.</li>
                                </ul>
                                <p><br />Type de cr&eacute;dit pouvant &ecirc;tre garanti par la SNGFE dans le<br />cadre des produits :</p>
                                <ul>
                                <li>DAMANE EXPRESS si le cr&eacute;dit ne d&eacute;passe pas 1 MDhs<br />avec une quotit&eacute; de garantie de 70%.</li>
                                <li>DAMANE ATTASYIR si le cr&eacute;dit d&eacute;passe 1 MDhs avec une<br />quotit&eacute; de garantie de 60% du montant du cr&eacute;dit dans la<br />limite de 15 MDhs.</li>
                                </ul>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">Coût du financement / de l’opération</h2>
                            <ul>
                                <li>Taux d’intérêt librement négociable entre la banque et l’entreprise, calculé sur la base des montants utilisés et les
                                    jours de débit.</li>
                                <li>A noter que les taux d’intérêts dépendent également de la
                                    notation attribuée à l’entreprise par la banque.</li>
                            </ul>
                        </div>
                    </div>
                    <br>
                    <h2 class="blue-section-title"> Documents nécessaires </h2>
                    <p class="section_normale_text">

                        <ul>
                            <li>Dossier juridique de constitution + PV modificatifs le cas<br />&eacute;ch&eacute;ant.</li>
                            <li>Contrat de loyer + derni&egrave;re quittance de loyer / Certificat<br />de propri&eacute;t&eacute; des locaux d&rsquo;exploitation existants.</li>
                            <li>Liasses fiscales des trois derniers exercices + une situation<br />provisoire le cas &eacute;ch&eacute;ant.</li>
                            <li>Relev&eacute;s bancaires + Situation des engagements aupr&egrave;s<br />des autres partenaires financiers.</li>
                            <li>Un plan de tr&eacute;sorerie pr&eacute;visionnel pour les 3 prochains<br />exercices.</li>
                            <li>Justification de la confirmation du march&eacute; en faveur de<br />l&rsquo;entreprise b&eacute;n&eacute;ficaire.</li>
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
                <a href="{{(asset('financement/credits-bancaires/le-pr-financement-export-en-dirhams'))}}">
                    <button class="previous_btn">Le préfinancement export en dirhams</button>
                </a>
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a href="{{(asset('financement/credits-bancaires/les-avances-sur-cr-ances-n-es-sur-l-tranger'))}}">
                        <button class="next_btn">Les avances sur créances (étranger)</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
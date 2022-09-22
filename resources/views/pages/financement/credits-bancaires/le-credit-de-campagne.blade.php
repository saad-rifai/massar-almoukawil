@section('title', ' Le crédit de campagne')
@section('description', 'C’est une avance accordée à la clientèle pour le financement des dépenses cycliques qui sont engagées dans la production et/
ou le stockage des produits dans l’attente de leur commercialisation.')

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Le crédit de campagne</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Objet
                    </h2>
                    <p class="section_normale_text">
                        C’est une avance accordée à la clientèle pour le financement des dépenses cycliques qui sont engagées dans la production et/
                        ou le stockage des produits dans l’attente de leur commercialisation.

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
                            <p class="section_normale_text">
                                Ne pas être en situation contentieuse avec un autre organisme
                                financier.

                            </p>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title"> Plafond de financement </h2>
                            <p class="section_normale_text">
                                Le plafond de crédit ne doit pas dépasser 50% à 60% des
                                besoins de trésorerie prévisionnels

                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Modalités de remboursement </h2>
                            <p class="section_normale_text">
                                La durée de crédit correspond à celle de la campagne sans
                                toutefois dépasser 12 mois.


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
                                <li>Autres garanties librement n&eacute;gociables entre la banque et l&rsquo;entreprise.</li>
                            </ul>
                            
                            <p>Type de cr&eacute;dit pouvant &ecirc;tre garanti par la SNGFE dans le cadre des produits :</p>
                            
                            <ul>
                                <li>DAMANE EXPRESS si le cr&eacute;dit ne d&eacute;passe pas 1 MDhs avec une quotit&eacute; de garantie de 70%.</li>
                                <li>DAMANE ATTASYIR si le cr&eacute;dit d&eacute;passe 1 MDhs avec une quotit&eacute; de garantie de 60% du montant du cr&eacute;dit dans la limite de 15 MDhs.</li>
                            </ul>
                            
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">Coût du financement / de l’opération</h2>
                            <ul>
                                <li>Taux d&rsquo;int&eacute;r&ecirc;t librement n&eacute;gociable entre la banque et l&rsquo;entreprise, calcul&eacute; sur la base des montants utilis&eacute;s et les jours de d&eacute;bit.</li>
                                <li>A noter que les taux d&rsquo;int&eacute;r&ecirc;ts d&eacute;pendent &eacute;galement de la notation attribu&eacute;e &agrave; l&rsquo;entreprise par la banque.</li>
                            </ul>
                            
                        </div>
                    </div>
                    <br>
                    <h2 class="blue-section-title"> Documents nécessaires </h2>
                    <p class="section_normale_text">

                        <ul>
                            <li>Dossier juridique de constitution + PV modificatifs le cas &eacute;ch&eacute;ant.</li>
                            <li>Contrat de loyer + derni&egrave;re quittance de loyer / Certificat de propri&eacute;t&eacute; des locaux d&rsquo;exploitation existants.</li>
                            <li>Liasses fiscales des trois derniers exercices + une situation provisoire le cas &eacute;ch&eacute;ant.</li>
                            <li>Relev&eacute;s bancaires + Situation des engagements aupr&egrave;s des autres partenaires financiers.</li>
                            <li>Un plan de tr&eacute;sorerie pr&eacute;visionnel pour les 3 prochains exercices.</li>
                        </ul>
                        
                   

                    </p>

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
                <a href="{{(asset('financement/credits-bancaires/les-avances-sur-facture-ou-Factoring'))}}">
                    <button class="previous_btn">avances sur facture</button>
                </a>
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a href="{{(asset('financement/credits-bancaires/le-credit-spot'))}}">
                        <button class="next_btn">crédit spot</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
@include('assets.head')


<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Auto-Entrepreneur</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">Peut agir en tant qu’entrepreneur toute personne physique exerçant,
                        à titre individuel, une activité industrielle,
                        commerciale ou artisanale, ou prestataire de service, dont le chiffre d’affaires annuel (CA)
                        encaissé ne dépasse pas les
                        montants suivants :
                    <ul class="section_normale_list">
                        <li>
                            500.000 Dh pour les activités commerciales, industrielles et artisanales
                        </li>
                        <li>200.000 Dh pour les prestations de services.</li>
                    </ul>
                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Avantages
                    </h2>
                    <p class="section_normale_text">
                        <strong>Procédure de création/radiation simplifiée : </strong> Toutes les démarches
                        administratives en quelques minutes. <br>
                        <strong>Interlocuteur unique :</strong> Le réseau des agences des banques partenaires de Poste
                        Maroc est à votre disposition. <br>

                        <strong>Possibilité d’exercice de l’activité à domicile :</strong> Plus besoin d’avoir un local
                        professionnel pour créer votre entreprise. <br>
                        Fiscalité réduite : 0,5% du CA pour les activités industrielle, commerciale et artisanale 1%
                        pour les prestations de
                        services.
                        <br>
                        <strong>Pas de chiffre d’affaires, pas d’impôt sur le revenu :</strong> Si vous ne réalisez pas
                        de chiffre d’affaires pendant l’année
                        d’inscription, vous n’aurez pas à payer l’impôt sur le revenu (avec obligation de déclaration).
                        <br>
                        <strong>Possibilité de facturation :</strong> Vous pouvez désormais facturer vos prestations à
                        vos clients. <br>
                        <strong>Dispense de tenue de comptabilité : </strong> Plus besoin de présenter votre bilan
                        comptable à l’administration fiscale.
                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>
                    <p class="section_normale_text">

                        1- Préinscription sur le Registre National de l’Auto-Entrepreneur : <a
                            href="https://rn.ae.gov.ma/registration"> https://rn.ae.gov.ma/registration </a>, remplir le
                        formulaire d'inscription, l'imprimer et le signer.

                        <br>
                        <br>
                        2- Inscription auprès l’une des agences bancaires des réseaux partenaires suivants, muni
                        d'une copie de la CIN pour les Marocains et d'une copie de la carte de séjour pour les
                        étrangers, du formulaire de préinscription et d'une photo.
                        <br>
                        <br>

                        3- Obtention de la carte de l'auto-entrepreneur


                    <div class="list-logos">
                        <div class="logo-img-b">
                            <img src="{{asset('images/logos/3/attijariwafabank.png')}}" alt="">
                        </div>
                        <div class="logo-img-b">
                            <img src="{{asset('images/logos/3/Al_Barik_Bank_logo.png')}}" alt="">
                        </div>
                        <div class="logo-img-b">
                            <img src="{{asset('images/logos/3/bmce.png')}}" alt="">
                        </div>
                        <div class="logo-img-b">
                            <img src="{{asset('images/logos/3/bp.png')}}" alt="">
                        </div>

                    </div>
                    </p>
                </div>
                <hr class="section_hr">

                <div class="text-containet text-center">
                    <a href="https://ae.gov.ma/" target="_blanck">
                        <button class="lg-btn-produit"><i class="las la-external-link-alt"></i> Visitez le site
                            Web</button>
                    </a>
                </div>
                <br>
                <br>
            </div>
        </div>
       
        <div class="next-btn-box">
            <a href="{{(asset('/c/coopération'))}}">
                <button class="next_btn">Coopération</button>
            </a>
        </div>
        <hr>
        @include('assets.footer')
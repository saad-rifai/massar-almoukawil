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
                        Regus
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Regus est une société multinationale présente à Tanger. Elle propose aux promoteurs des
                        prestations pour prêter des
                        bureaux et des espaces de travail.
                    </p>
                </div>

                <br>
                <div class="sample_table mb-5">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Services</th>
                                <th scope="col">Tarifs</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> REGUS met à votre disposition une panoplie d'offres de service : <br>
                                    Bureau : vous pouvez développer votre entreprise dans des bureaux privatifs avec
                                    tous
                                    les services inclus, pour vous et votre équipe. Du mobilier au Wi-Fi haut débit,
                                    tout
                                    est pris en charge dans leurs espaces de travail. <br>
                                </td>
                                <td>A partir de 1.650 DH par personne
                                    et par mois.</td>

                            </tr>
                            <tr>
                                <td>Coworking : des environnements de coworking sont pensés pour la collaboration.
                                    Vous pouvez choisissez votre centre idéal parmi des milliers dans le monde pour
                                    travailler au sein d'une communauté dynamique de professionnels qui vous
                                    ressemblent.

                                </td>
                                <td>A partir de 1.350 DH par personne
                                    et par mois.</td>

                            </tr>
                            <tr>
                                <td>Bureau virtuel : Établissez rapidement votre présence partout dans le monde, avec
                                    une
                                    domiciliation d'entreprise et un numéro de téléphone ou un lieu pour travailler
                                    lorsque
                                    vous en avez besoin. Les centres se trouvent dans toutes les grandes villes du
                                    monde,
                                    pour vous permettre de représenter votre entreprise de manière professionnelle où
                                    que
                                    vous soyez.
                                </td>
                                <td>A partir De 650 DH Par mois.</td>

                            </tr>
                            <tr>
                                <td>Salles de réunion : ils disposent de salles de réunion dans toutes les grandes
                                    villes du
                                    monde, pour vous permettre de recevoir où que vous soyez. L'espace dont vous avez
                                    besoin pour éblouir vos clients, organiser des ateliers mémorables ou énoncer un
                                    discours prenant.
                                </td>
                                <td>A partir De 150 DH par heure</td>

                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                    Démarche
                    </h2>
                    <p class="section_normale_text">
                    Contrat de prestation
                    </p>
                </div>
                <hr class="section_hr">
                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Contact
                            </h2>
                            <div class="row">
                                <div class="col">
                                    <ul class="section_normale_contact_list">
                                        <li>
                                            <span class="section_normale_contact_list_icon "><i
                                                    class="las la-phone position-absolute top-50 start-50 translate-middle"></i></span>
                                                    05 20 50 56 75

                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    Ibn Batouta Mall, Av. Youssef Ibn 
Tachfine, Tanger

                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col">

                        </div>

                    </div>

                </div>
                <hr class="section_hr">
                <div class="text-containet text-center">
                    <a href="https://www.regus.com/fr-fr/" target="_blanck">
                        <button class="lg-btn-produit"><i class="las la-external-link-alt"></i> Visitez le site
                            Web</button>
                    </a>
                </div>
                <br>
                <br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('/hotel-dentreprise/nrea'))}}">
                    <button class="previous_btn">nrea</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/hotel-dentreprise/technopark'))}}">
                        <button class="next_btn">technopark</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
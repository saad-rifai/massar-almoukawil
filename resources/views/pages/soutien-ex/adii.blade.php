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
                        L'Administration des Douanes et
                        Impôts Indirects ou ADII
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        L'Administration des Douanes et Impôts Indirects ou ADII, également connue sous le nom de Douane
                        marocaine, est
                        une administration fiscale marocaine sous la tutelle du Ministère de l'Économie et des Finances.
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <ul class="section_normale_list">
                        <li><strong>Dédouanement en ligne avec BADR :</strong> Un portail en ligne dédié aux entreprises
                            pour faciliter et dématérialiser
                            le dédouanement de leurs produits. <a
                                href="https://badr.douane.gov.ma/Acceuil.html">www.badr.douane.gov.ma/Acceuil.html</a>
                        </li>

                    </ul>
                    <p><strong>Dédouanement de marchandises avec ADIL :</strong> Vous comptez effectuer une opération
                        d'importation à caractère
                        commercial et désirez, dans un premier temps, connaître la fiscalité douanière et la
                        réglementation particulière
                        applicables à l'importation des produits qui vous intéressent ?
                        Le Tarif intégré économique de la Douane marocaine « ADIL » (Assistance au Dédouanement des
                        Marchandises à l'Importation en Ligne) vous livre toutes les informations qui vous seront utiles
                        et qui portent
                        notamment sur :</p>
                    <ul>
                        <li>Le régime fiscal et réglementaire applicable à la marchandise que vous souhaitez importer
                            (droits et taxes
                            douaniers exigibles à l'importation dans le cadre du régime de droit commun ou des régimes
                            conventionnels, autres
                            taxes perçues pour le compte d'autres Administrations, les documents à produire ainsi que
                            les normes à respecter
                            conformément aux réglementations particulières) ;</li>
                        <li>Les avantages tarifaires accordés pour cette même marchandise dans le cadre des accords et
                            conventions
                            tarifaires et commerciaux conclus par le Maroc ainsi que certaines conditions d'octroi des
                            régimes préférentiels. <a href="https://www.douane.gov.ma/adil/">www.douane.gov.ma/adil/</a>
                        </li>
                    </ul>
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
                                            <td> Direction Régionale de
                                                Tanger-Tétouan-Al-Hoceïma <br>
                                                Tél :
                                                05 39 34 04 57 /
                                                05 39 34 04 58
                                            </td>
                                            <td><a href="mailto:a.zehhaf@douane.gov.ma">a.zehhaf@douane.gov.ma</a> </td>
                                            <td> Rue Kindi. Tanger </td>

                                        </tr>
                                        <tr>
                                            <td>Direction des Douanes du
                                                Port de Tanger-Méditerranée <br>
                                                Tel : 05 39 33 58 33 /
                                                05 39 93 11 89 <br>
                                                Fax : 05 39 93 11 90
                                            </td>

                                            <td><a href="mailto:m.bouchaara@douane.gov.ma">m.bouchaara@douane.gov.ma</a>
                                            </td>
                                            <td> Direction des Douanes du Port
                                                de Tanger Méditerranée, Ksar
                                                El Majaz, Oued Rmel
                                            </td>

                                        </tr>





                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <hr class="section_hr">
                        <div class="text-containet text-center">
                            <a target="_blank" href="http://www.douane.gov.ma/" target="_blanck">
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
                <a href="{{(asset('/soutien-ex/portnet'))}}">
                    <button class="previous_btn">PortNet</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/soutien-ex/asmex'))}}">
                        <button class="next_btn">ASMEX</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
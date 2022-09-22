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
                        L'Ordre des Experts-Comptables
                        (Rôle sur les difficultés d’entreprises)


                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Toute entreprise peut, un jour, être confrontée à des difficultés financières sérieuses. Quelle
                        que soit la situation de
                        l’entreprise, elle se doit d’être accompagnée et soutenue dans ces moments.
                        Les experts-comptables se sont spécialisés dans l’accompagnement de leurs clients se trouvant
                        parfois en butte à de
                        nouvelles données économiques et à des trésoreries dangereusement dégradées.


                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>

                    <p>Dans ce cadre, les experts comptables peuvent aider les entreprises sur plusieurs volets :
                        <br><strong>Anticiper et donner confiance :</strong> <br>
                        Le premier rôle de l’expert-comptable se traduit par l’anticipation des difficultés. La mise
                        sous surveillance régulière
                        des indicateurs économiques sociaux, comptables et financiers permet une détection rapide des
                        signaux d’alerte et la mise
                        en place de mesures correctives. <br>
                        À titre préventif, de nombreuses procédures peuvent être activées afin de trouver un accord
                        amiable entre l’entreprise et
                        ses principaux créanciers notamment la conciliation et la médiation.
                    </p>
                    <p><strong>Des procédures pour faire face aux difficultés financières de l’entreprise avec un
                            accompagnement spécifique :</strong> <br>
                        Lorsque l’entreprise est déjà face aux difficultés financières, trois procédures peuvent
                        s’ouvrir afin d’apurer le passif :
                        la sauvegarde, le redressement judiciaire et la liquidation judiciaire.</p>
                    <ul>
                        <li>L’objectif de la sauvegarde est d’éviter la cessation de paiements. L’expert-comptable
                            réorganise l’entreprise en
                            difficultés pour une poursuite de l’activité économique, le maintien de l’emploi et
                            l’apurement du passif. L’export
                            comptable accompagne ainsi l’entreprise dans les mesures de restructuration, l’élaboration
                            d’un business plan de
                            retournement, le contrôle budgétaire et de trésorerie, la vérification des créances, et la
                            gestion des relations avec
                            les différents acteurs de la procédure judiciaire.
                        </li>
                        <li>Le redressement et la liquidation judiciaire n’interviennent que pour les entreprises en
                            état de cessation de
                            paiement. A ce stade, l‘export comptable accompagne l’entreprise dans l’établissement et
                            négociation d’un plan
                            de redressement ainsi que son suivi.</li>
                    </ul>
                    <p><strong>Face aux difficultés : des opportunités.</strong><br> L’action de l’expert-comptable
                        s’étend également aux reprises d’entreprises notamment par la création du plan de reprise,
                        étude et vérification de la faisabilité technique et financière du projet, conseils et analyses
                        des plans de réorganisation,
                        validation des prévisions</p>
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
                                            <a href="tel:05 39 34 29 29
">05 39 34 29 29


                                            </a>

                                            </a>
                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon "><i
                                                    class="las la-fax position-absolute top-50 start-50 translate-middle"></i></i></span>
                                            <a href="Fax :05 37 67 34 17"> 05 37 67 34 17</a>
                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                            Angle boulevard Mohamed 5
                                            et Victor Hugo plateau 35, 6
                                            -ème étage Tanger.

                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span><a
                                                href="mailto:contact@tamwilcom.ma">contact@tamwilcom.ma</a>
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
                    <a href="https://www.tamwilcom.ma/fr/" target="_blanck">
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
                <a href="{{(asset('/aide-diff/invest-tta'))}}">
                    <button class="previous_btn">Le Centre Régional 
d'Investissement TTA </button>
                </a>
            </div>
            <div class="col">

                
            </div>
        </div>
        <hr>
    </div>
    </div>
    <hr>
    @include('assets.footer')
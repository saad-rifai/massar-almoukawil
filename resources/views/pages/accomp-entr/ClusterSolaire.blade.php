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
                        CLUSTER SOLAIRE
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Le Cluster Solaire lancé en Avril 2014, est une association novatrice et ambitieuse regroupant
                        les acteurs nationaux du
                        secteur solaire. Il vient renforcer les actions menées dans le cadre du plan solaire marocain et
                        vise à approfondir les
                        synergies entre les acteurs du secteur dans le but de favoriser l'émergence d'une filière
                        industrielle solaire compétitive
                        au Maroc


                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <p class="section_normale_text">
                        La mise en place de la plateforme Moroccan Green
                        Business Network (MGBN) dont l’objectif est de créer des
                        synergies par la mise en relation des entreprises vertes, de
                        renforcer les capacités industrielles et d’améliorer la
                        compétitivité de l’offre marocaine. La plateforme propose
                        diverses fonctionnalités aux utilisateurs dont :
                    </p>
                    <ul class="section_normale_list">
                        <li>L’accès à un annuaire des entreprises du secteur</li>
                        <li>Un espace d'échange instantané favorisant la mise en relation entre les différents acteurs
                            du secteur.</li>
                        <li>L’accès aux opportunités d’affaires ; Accès aux appels d’offres nationaux, consultation des
                            projets collaboratifs…</li>
                        <li>Une veille de marché ; La consultation en continu des actualités sur les membres du
                            Cluster/MCIC et le secteur dans sa globalité.</li>
                    </ul>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Avantages
                    </h2>
                    <p class="section_normale_text">
                        Profiter des opportunités d'émulation et des synergies
                        offertes par le Cluster en prenant part au partage du savoir-faire et des compétences par
                        exemple :
                    </p>
                    <ul class="section_normale_list">
                        <li>La force d’un réseau unique et de ses partenaires,
                            au service de l’innovation</li>
                        <li>Une gamme de services parfaitement adaptée.</li>
                        <li>Une vitrine technologique.</li>
                        <li>Concrétisation d'opportunités d'affaires</li>
                    </ul>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>
                    <p class="section_normale_text">
                        Si vous voulez intégrer cette association, vous pouvez consulter le lien et remplir les
                        informations nécessaires : <a target="_blank"
                            href="https://www.clustersolaire.ma/fr/devenir-membre">www.clustersolaire.ma/fr/devenir-membre</a>
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
                                            Tel: <a href="tel:05 22 58 53 51">05 22 58 53 51</a>
                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                            Immeuble Zenith 1, 4éme étage
                                            et Rez de Chaussée, Sidi
                                            Maarouf, Casablanca


                                        </li>
                                        <li>
                                            <span class="section_normale_contact_list_icon"><i
                                                    class="las la-envelope position-absolute top-50 start-50 translate-middle"></i></span>
                                            <a href="mailto:soukaina.clustersolaire@gmail.com">
                                                soukaina.clustersolaire@gmail.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col">

                            </div>

                        </div>

                    </div>
                    <hr class="section_hr">
                    <div class="text-containet text-center">
                        <a href="http://www.clustersolaire.ma/" target="_blanck">
                            <button class="lg-btn-produit"><i class="las la-external-link-alt"></i> Visitez le site
                                Web</button>
                        </a>
                    </div>
                    <br>
                    <br>
                </div>





                <br>
                <br>
            </div>
</div>
<div class="row">
                <div class="col">

                    <a href="{{(asset('/accomp-entr/LaFactory'))}}">
                        <button class="previous_btn">LaFactory</button>
                    </a>
                </div>
                <div class="col">

                    <div class="next-btn-box">
                        <a href="{{(asset('/accomp-entr/ImpactLab'))}}">
                            <button class="next_btn">Impact Lab</button>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <br>

        <hr>
        @include('assets.footer')
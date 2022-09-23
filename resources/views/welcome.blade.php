@section('title', "Cartographie de l'écosystème entrepreneurial et mécanismes d'accompagnement de la région TTA")
@section('description', '« MASSAR AL MOKAWIL » est une plateforme inclusive et innovante ouverte gratuitement à tous les
entrepreneurs de la région Tanger – Tétouan – Al Hoceima. Elle compte plusieurs fonctionnalités :
- La cartographie de l’écosystème entrepreneurial : décrivant le circuit complet par lequel passe un entrepreneur.

- Les mécanismes d’accompagnement entrepreneurial : génériques, spécifiques et guides pratiques de situations.

- Un accompagnement sur mesure par plusieurs outils sur les volets : commercial, managérial, formation, réseautage et
digital.

- Une foire aux questions permettant d’ouvrir un espace d’échange entre les entrepreneurs.')
@include('assets.head')
<style>
    .container,
    .container-lg,
    .container-md,
    .container-sm,
    .container-xl,
    .container-xxl {
        max-width: 3000px !important;
    }
</style>

<body id="boddy">
    <div class="container-lg">

        @include('assets.navbar')
        <div class="row body_row mt-3 justify-content-center">
            <div class="col col-3 position-relative mx35vh">
                <div id="menu_li">
                    <div class="card_bg_white full_raduis col_card_1">
                        <div class="card_title_box">
                            <h1 class="card_title">
                                Guides pratiques de situations
                            </h1>
                        </div>
                        <div class="card_body menu_li">
                            <ul class="side-bar-links">

                                <li><a href="#">Trouver et évaluer son idée</a>

                                    <ul class="side_menu_hover_container_menu_li">

                                        <li>
                                            <a
                                                href="{{asset('trouver-et-valuer-son-id-e-d-entreprise/pourquoi-et-comment-r-aliser-votre-tude-de-march')}}">
                                                Pourquoi et comment réaliser votre étude de marché ?
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('trouver-et-valuer-son-id-e-d-entreprise/comment-trouver-son-id-e-d-entreprise')}}">
                                                Comment trouver son idée d’entreprise?

                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('trouver-et-valuer-son-id-e-d-entreprise/comment-d-finir-votre-business-model')}}">
                                                Comment définir votre business model ?

                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('trouver-et-valuer-son-id-e-d-entreprise/comment-construire-votre-business-plan')}}">
                                                Comment construire votre business plan ?

                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('trouver-et-valuer-son-id-e-d-entreprise/quels-conseils-pour-r-ussir-son-business-plan')}}">
                                                Quels conseils pour réussir son business plan ?
                                            </a>
                                        </li>


                                    </ul>
                                </li>
                                <li><a href="#">Financer son projet </a>
                                    <ul class="side_menu_hover_container_menu_li">
                                        <li>
                                            <a
                                                href="{{asset('financer-son-projet/pourquoi-laborer-des-pr-visions-financi-res')}}">Pourquoi
                                                élaborer des prévisions financières ?</a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('financer-son-projet/comment-r-aliser-un-pr-visionnel-financier')}}">Comment
                                                réaliser un prévisionnel financier ?</a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('financer-son-projet/quelles-m-thodes-pour-estimer-mon-chiffre-d-affaires-ca-pr-visionnel')}}">Quelles
                                                méthodes pour estimer mon chiffre d’affaires (ca) prévisionnel ?</a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('financer-son-projet/pourquoi-recourir-la-m-thode-du-lean-startup')}}">Pourquoi
                                                recourir à la méthode du “lean startup” ?</a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('financer-son-projet/comment-r-ussir-pr-senter-ou-pitcher-son-projet')}}">Comment
                                                réussir à présenter ou “pitcher” son projet ?</a>
                                        </li>
                                    </ul>
                                </li>

                                <li><a href="#">Protéger son idée</a>
                                    <ul class="side_menu_hover_container_menu_li">
                                        <li>
                                            <a
                                                href="{{asset('protger-son-idee-d-entreprise/pourquoi-et-comment-protger-son-idee')}}">Pourquoi
                                                et comment protéger son idée ?</a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('protger-son-idee-d-entreprise/comment-d-poser-un-nom-commercial')}}">Comment
                                                déposer un nom commercial ?</a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('protger-son-idee-d-entreprise/quels-sont-les-diff-rents-titres-de-propri-t-industrielle')}}">Quels
                                                sont les différents titres de propriété industrielle ?</a>
                                        </li>

                                    </ul>
                                </li>

                                <li>
                                    <a href="#">Préparer sa création</a>
                                    <ul class="side_menu_hover_container_menu_li">
                                        <li>
                                            <a
                                                href="{{asset('preparer-sa-creation/Entreprise-individuelle-personne physique-ou-societe')}}">Entreprise
                                                individuelle (personne physique) ou société ?</a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('preparer-sa-creation/Quelles-sont-les-etapes-cles-pour-creer-sa-societe')}}">Les
                                                étapes clés pour créer sa société</a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('preparer-sa-creation/quels-sont-les-crit-res-importants-pour-choisir-sa-structure-juridique-')}}">Les
                                                critères importants pour choisir sa structure juridique</a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('preparer-sa-creation/quels-sont-les-diff-rents-statuts-existants')}}">Les
                                                différents statuts existants</a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('preparer-sa-creation/quelles-sont-les-principales-caract-ristiques-de-la-sarl-et-de-la-sa')}}">Les
                                                principales caractéristiques de la sarl et de la sa</a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('preparer-sa-creation/quelles-sont-les-principales-caract-ristiques-de-la-sca-de-la-snc-et-scs')}}">Les
                                                principales Caractéristiques de la sca, de la snc et scs</a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('preparer-sa-creation/dans-quels-cas-opter-pour-le-r-gime-d-auto-entrepreneur')}}">Dans
                                                quels cas opter pour le régime d’autoentrepreneur</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{asset('preparer-sa-creation/conseils-pratiques-et-points-de-vigilance')}}">Conseils
                                                pratiques et points de vigilance</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{asset('preparer-sa-creation/pour-quelles-questions-dois-je-faire-appel-un-conseil-juridique')}}">Pour
                                                quelles questions dois-je faire appel à Un conseil
                                                juridique </a>
                                        </li>
                                    </ul>

                                </li>
                                <li><a href="#">Communiquer effectivement</a>
                                    <ul class="side_menu_hover_container_menu_li">

                                        <li>
                                            <a
                                                href="{{asset('communiquer-effectivement/au-fait-pourquoi-communiquer')}}">
                                                Au fait, pourquoi communiquer ?
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('communiquer-effectivement/que-dois-je-savoir-avant-de-lancer-ma-communication')}}">
                                                Que dois-je savoir avant de lancer ma communication ?
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('communiquer-effectivement/quels-sont-les-principaux-canaux-de-communication-et-marketing')}}">
                                                Quels sont les principaux canaux de communication et marketing ?

                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('communiquer-effectivement/4-b2b-et-b2c-quelles-diff-rences-en-termes-de-marketing')}}">
                                                B2b et b2c, quelles différences en termes de marketing ?

                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('communiquer-effectivement/comment-r-aliser-une-campagne-publicitaire-dans-les-m-dias-et-qui-s-adresse')}}">
                                                Comment réaliser une campagne publicitaire dans les médias et à qui
                                                s’adresser ?

                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('communiquer-effectivement/comment-se-d-roule-une-campagne-m-dias')}}">
                                                Comment se déroule une campagne médias ?

                                            </a>
                                        </li>
                                    </ul>

                                </li>
                                <li><a href="#"> stratégie de marketing</a>
                                    <ul class="side_menu_hover_container_menu_li">

                                        <li>
                                            <a
                                                href="{{asset('optimiser-sa-strategie-marketing/pourquoi-le-marketing-digital-est-essentiel-et-incontournable')}}">
                                                Pourquoi le marketing digital est essentiel et incontournable ?</a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('optimiser-sa-strategie-marketing/comment-acheter-un-nom-de-domaine')}}">Comment
                                                acheter un nom de domaine ?
                                            </a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{asset('optimiser-sa-strategie-marketing/comment-concevoir-mon-site-web')}}">Comment
                                                concevoir mon site web ?
                                            </a>
                                        </li>


                                        <li>
                                            <a
                                                href="{{asset('optimiser-sa-strategie-marketing/comment-r-aliser-un-site-de-e-commerce-ou-une-boutique-en-ligne')}}">Comment
                                                réaliser un site de e-commerce ou une boutique en ligne ?
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('optimiser-sa-strategie-marketing/comment-optimiser-mon-site-web-ou-le-seo')}}">Comment
                                                optimiser mon site web ou le seo ?
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('optimiser-sa-strategie-marketing/quelles-strat-gies-de-r-f-rencement-de-mon-site-web')}}">Quelles
                                                stratégies de référencement de mon site web?
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('optimiser-sa-strategie-marketing/cinq-conseils-d-optimisation-pour-les-moteurs-de-recherches-seo')}}">Cinq
                                                conseils d’optimisation pour les moteurs de recherches seo

                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('optimiser-sa-strategie-marketing/comment-mesurer-l-efficacit-de-votre-strat-gie-de-marketing-digital')}}">Comment
                                                mesurer l’efficacité de votre stratégie de marketing digital ?


                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('optimiser-sa-strategie-marketing/quels-indicateurs-suivre-et-int-grer-votre-reporting-de-marketing-digital')}}">Quels
                                                indicateurs suivre et intégrer à votre reporting de marketing digital ?
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('optimiser-sa-strategie-marketing/quels-sont-les-outils-marketing-disponibles-pour-m-aider-lancer-mon-activit')}}">Quels
                                                sont les outils marketing disponibles pour m’aider à lancer mon activité
                                                ?

                                            </a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{asset('optimiser-sa-strategie-marketing/comment-mettre-en-place-un-syst-me-de-paiement-en-ligne')}}">Comment
                                                mettre en place un système de paiement en ligne ?
                                            </a>
                                        </li>
                                    </ul>

                                </li>


                                <li><a href="#"> Gouverner et piloter son activité</a>
                                    <ul class="side_menu_hover_container_menu_li">

                                        <li>
                                            <a
                                                href="{{asset('gouverner-et-piloter-son-entreprise/etablir-un-plan-d-action-commercial')}}">Etablir
                                                un plan d’action commercial
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('gouverner-et-piloter-son-entreprise/etablir-une-gouvernance-efficace-et-agile')}}">
                                                Etablir une gouvernance efficace et agile

                                            </a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{asset('gouverner-et-piloter-son-entreprise/louer-ou-acheter-son-local-commercial')}}">
                                                ELouer ou acheter son local commercial

                                            </a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{asset('gouverner-et-piloter-son-entreprise/piloter-son-activite')}}">
                                                Piloter son activite

                                            </a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{asset('gouverner-et-piloter-son-entreprise/planifier-le-volet-comptable-et-fiscal')}}">
                                                Planifier le volet comptable et fiscal


                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li><a href="#">Gérer RH</a>
                                    <ul class="side_menu_hover_container_menu_li">

                                        <li>
                                            <a
                                                href="{{asset('g-rer-ses-ressources-humaines/calculer-et-g-rer-les-salaires')}}">
                                                Calculer et gérer les salaires
                                            </a>
                                        </li>


                                        <li>
                                            <a
                                                href="{{asset('g-rer-ses-ressources-humaines/etablir-un-contrat-de-travail')}}">
                                                Etablir un contrat de travail
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('g-rer-ses-ressources-humaines/motiver-et-garder-ses-talents')}}">
                                                Motiver et garder ses talents
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('g-rer-ses-ressources-humaines/quel-r-gime-de-retraite-choisir')}}">
                                                Quel régime de retraite choisir
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('g-rer-ses-ressources-humaines/quelle-assurance-pour-mes-salaris')}}">
                                                Quelle assurance pour mes salariés ?
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{asset('g-rer-ses-ressources-humaines/recruter-ses-talents')}}">
                                                Recruter ses talents
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('g-rer-ses-ressources-humaines/se-s-parer-de-ses-collaborateurs')}}">
                                                Se séparer de ses collaborateurs
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li><a href="#">Gérer logistique et fournisseurs</a>
                                    <ul class="side_menu_hover_container_menu_li">

                                        <li>
                                            <a
                                                href="{{asset('g-rer-sa-logistique-et-ses-fournisseurs/comment-devenir-exportateur-commerce-ext-rieur')}}">
                                                Comment devenir exportateur (commerce extérieur)
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('g-rer-sa-logistique-et-ses-fournisseurs/identifier-et-g-rer-ses-fournisseurs')}}">
                                                Identifier et gérer ses fournisseurs
                                            </a>
                                        </li>



                                    </ul>
                                </li>
                                <li><a href="#">Lever des fonds</a>

                                    <ul class="side_menu_hover_container_menu_li">

                                        <li>
                                            <a
                                                href="{{asset('lever-des-fonds/comment-valuer-son-besoin-en-financement')}}">
                                                Comment évaluer son besoin en financement ?
                                            </a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{asset('lever-des-fonds/quelles-sont-les-contraintes-envisager-pour-sa-lev-e-de-fonds')}}">
                                                Quelles sont les contraintes à envisager pour sa levée de fonds ?
                                            </a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{asset('lever-des-fonds/quels-sont-les-facteurs-cl-s-de-succ-s-pour-obtenir-son-financement')}}">
                                                Quels sont les facteurs clés de succès pour obtenir son financement ?
                                            </a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{asset('lever-des-fonds/le-financement-travers-un-fonds-d-investissement-ou-leverage-buy-out-lbo')}}">
                                                Le financement à travers un fonds d’investissement ou leverage buy out
                                                (lbo)
                                            </a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{asset('lever-des-fonds/je-veux-me-faire-financer-comment-valoriser-son-entreprise')}}">
                                                Je veux me faire financer : comment valoriser son entreprise ?

                                            </a>
                                        </li>



                                    </ul>
                                </li>
                                <li><a href="#">Transformer son entreprise</a>

                                    <ul class="side_menu_hover_container_menu_li">

                                        <li>
                                            <a
                                                href="{{asset('transformer-son-entreprise/pourquoi-transformer-son-entreprise')}}">
                                                Pourquoi transformer son entreprise?
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('transformer-son-entreprise/comment-r-organiser-une-petite-entreprise')}}">
                                                Comment réorganiser une petite entreprise?
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('transformer-son-entreprise/concevez-un-syst-me-de-management-efficace')}}">
                                                Concevez un système de management efficace
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('transformer-son-entreprise/d-ployez-un-syst-me-d-information-en-phase-avec-votre-organisation')}}">
                                                Déployez un système d’information en phase avec votre organisation
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{asset('transformer-son-entreprise/comment-op-rer-une-transformation-digitale')}}">
                                                Comment opérer une transformation digitale ?

                                            </a>
                                        </li>


                                    </ul>
                                </li>
                                <li><a href="https://intaliq.ma/?ref=massar_almoukawil_tta" target="_blank">Info issues
                                        de Intaliq by CGEM </a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="card_bg_white full_raduis mt-3 col_card_2">
                    <div class="card_title_box">
                        <h1 class="card_title">
                            Accompagnements spécifiques
                        </h1>

                    </div>
                    <div class="card_body">
                        <ul class="side-bar-links">

                            <li> <a href="503">Accompagnement commercial </a></li>


                            <li> <a href="503">Accompagnements managerial</a></li>


                            <li><a href="503">Accompagnements / intégration</a></li>


                            <li><a href="503">Accompagnements / formation</a></li>


                            <li><a href="#">Accompagnements digital</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col col-6 ">
                <div class="web-cartographie">
                    <img src="{{asset('images/13_mkl.png')}}" alt="">
                </div>
            </div>
            <div class="col col-3 mx35vh">
                <div class="card_bg_white full_raduis">
                    <div class="card_title_box">
                        <h1 class="card_title">
                            Accompagnement génériques
                        </h1>
                    </div>
                    <div class="body_card_right">
                        <ul class="side-bar-links-2">
                            <a href="#idee" data-bs-toggle="modal" data-bs-target="#idee">
                                <li>Banques de projets</li>
                            </a>
                            <a href="#exampleModal" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <li>Création</li>
                            </a>
                            <a href="#asc" data-bs-toggle="modal" data-bs-target="#asc">
                                <li>Accompagnement sur création</li>
                            </a>
                            <a href="#domiciliation" data-bs-toggle="modal" data-bs-target="#domiciliation">
                                <li>Hebérgement </li>
                            </a>
                            <a href="#acds" data-bs-toggle="modal" data-bs-target="#acds">
                                <li>Accompagnement des strart-up</li>
                            </a>
                            <a href="#arh" data-bs-toggle="modal" data-bs-target="#arh">
                                <li>Accompagnement sur RH</li>
                            </a>
                            <a href="#Financement" data-bs-toggle="modal" data-bs-target="#Financement">
                                <li>Financement</li>
                            </a>
                            <a href="#aide_financement" data-bs-toggle="modal" data-bs-target="#aide_financement">
                                <li>Aide au financement</li>
                            </a>
                            <a href="{{asset('/risques/fmsar')}}">
                                <li>Assurance / risques</li>
                            </a>
                            <a href="#Reseautage_Global" data-bs-toggle="modal" data-bs-target="#Reseautage_Global">
                                <li>Réseautage global</li>
                            </a>
                            <a href="#Reseautage_Sectoriel" data-bs-toggle="modal"
                                data-bs-target="#Reseautage_Sectoriel">
                                <li>Réseautage sectoriel</li>
                            </a>
                            <a href="#Reseautage_ordres" data-bs-toggle="modal" data-bs-target="#Reseautage_ordres">
                                <li>Réseautage Ordres</li>
                            </a>
                            <a href="#Réseautages_etrangers" data-bs-toggle="modal"
                                data-bs-target="#Réseautages_etrangers">
                                <li>Réseautage étrangers</li>
                            </a>

                            <a href="#Soutien_alexport" data-bs-toggle="modal" data-bs-target="#Soutien_alexport">
                                <li>Soutien à l'export</li>
                            </a>
                            <a href="#Aides_lors_des_difficultés" data-bs-toggle="modal"
                                data-bs-target="#Aides_lors_des_difficultés">
                                <li> Médiation / assistance</li>
                            </a>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="row footer_row mt-3 justify-content-center">
            <div class="col col-3 mx35vh">
                <div class="card_bg_white full_raduis footer_bg position-relative">
                    <a href="503" class="btn_footer">
                        <span class=" position-absolute top-50 start-50 translate-middle">
                            <i class="fas fa-comments"></i> Echanges
                        </span>
                    </a>
                </div>
            </div>
            <div class="col col-6">
                <div class="card_bg_white full_raduis footer_bg">
                    <div class="row align-items-center h-100">
                        <div class="col container">
                            <div class="card-small-title">
                                <span>Autre platform d'accompagnemt</span>
                            </div>
                            <div class="customer-logos slider">
                                <div class="logo-simple slide">
                                    <a href="https://orangecorners.com" target="_blank">
                                        <img src="{{asset('images/logos/1.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="logo-simple slide">
                                    <a href="https://marocpme.gov.ma/nawat-tpe/plateforme-nawat/" target="_blank">

                                        <img src="{{asset('images/logos/2.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="logo-simple slide">
                                    <a href="https://intaliq.ma/" target="_blank">

                                        <img src="{{asset('images/logos/3.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="logo-simple slide">
                                    <a href="https://daralmoukawil.com" target="_blank">

                                        <img src="{{asset('images/logos/4.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="logo-simple slide">
                                    <a href="https://www.emergingbusinessfactory.com/" target="_blank">

                                        <img src="{{asset('images/logos/5.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="logo-simple slide">
                                    <a href="https://mreinvest.marocainsdumonde.gov.ma/" target="_blank">
                                        <img src="{{asset('images/logos/2/mns2.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="logo-simple slide">
                                    <a href="https://founders.ma/" target="_blank">

                                        <img src="{{asset('images/logos/6.png')}}" alt="">
                                    </a>
                                </div>

                                <div class="logo-simple slide">
                                    <a href="https://1000fikra.ma" target="_blank">

                                        <img src="{{asset('images/logos/8.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="logo-simple slide">
                                    <a href="https://we-fi.org/" target="_blank">

                                        <img src="{{asset('images/logos/9.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="logo-simple slide">
                                    <a href="https://www.casainvest.ma/fr/je-cr%C3%A9e/programme-qimam" target="_blank">
                                        <img src="{{asset('images/logos/10.png')}}" alt="">
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-3 mx35vh">
                <div class="card_bg_white full_raduis footer_bg">
                    <div class="row align-items-center h-100">
                        <div class="col container">
                            <div class="card-small-title">
                                <span id="slider_title">Platform développé par</span>
                            </div>
                            <div class="customer-logos-3 slider">
                                <div id="" class="customer-logos-2 slider slide_1">
                                    <div class="logo-simple slide">
                                        <img src="{{asset('images/partners/CGEM.png')}}" alt="">
                                    </div>
                                    <div class="logo-simple slide">
                                        <img src="{{asset('images/partners/TAMWILCOM.png')}}" alt="">
                                    </div>
                                    <div class="logo-simple slide">
                                        <img src="{{asset('images/partners/DARMOUKAWIL.png')}}" alt="">
                                    </div>
                                    <div class="logo-simple slide">
                                        <img src="{{asset('images/partners/NERYOU.png')}}" alt="">
                                    </div>
                                    <div class="logo-simple slide">
                                        <img src="{{asset('images/partners/TECHNOPARK.png')}}" alt="">
                                    </div>

                                </div>
                                <div id="slide_2" class="customer-logos-2  slide_2">
                                    <div class="logo-simple ">
                                        <a href="https://www.forcemploi.ma/" target="_blank" rel="noopener noreferrer">
                                            <img src="{{asset('images/logos/logo_mfe.png')}}" alt=""></a>
                                    </div>


                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('assets.modal')
</body>
<script>
    /*
 $(document).ready( function () {
    
    function rotateScreen () {
 
 
     if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 
        var viewportmeta = document.querySelector('meta[name="viewport"]');
    if (viewportmeta) {
        viewportmeta.content = 'width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0';
        document.body.addEventListener('gesturestart', function () {
            viewportmeta.content = 'width=device-width, minimum-scale=0.25, maximum-scale=1.6';
        }, false);
    }
    if(document.querySelector("#boddy").requestFullscreen) {
                document.querySelector("#boddy").requestFullscreen();
            }else if(document.querySelector("#boddy").webkitRequestFullScreen) {
                document.querySelector("#boddy").webkitRequestFullScreen();
            }
 
         screen.orientation.lock("landscape-primary")
             .then(function() {
                console.log('landscape-primary');

             })
             .catch(function(error) {
                alert(error);

             });
     }
 
 
 
 };
 $("#fullscreen02").on('click', function() {
     rotateScreen();
 });


 });
 */


const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
$(document).ready(function(){
/*    $(".menu_li").mouseenter(function(){

    $(".side_menu_hover_container").show();

 }) || $('#side_menu_hover_container').mouseenter(
    function(){

$(".side_menu_hover_container").show();

});

$(".side_menu_hover_container").mouseleave( function(){

    $(".side_menu_hover_container").fadeOut("slow");

 } );
 $('body').on('touchstart', function(e){ 
    $(".side_menu_hover_container']").fadeOut("slow");        
});*/
 /*$('.side_menu_hover_container').on('mouseleave touchend', function(){
    var s_id = $(this).attr('id');
    $('.side_menu_hover_container').fadeOut("slow");
});*/


$('.customer-logos-3')
   .on('afterChange', function(event, slick, currentSlide, nextSlide){
   
    if($(".slick-active").hasClass("slide_2")){
        $("#slider_title").html('Sponsorisé par');

    }else if($(".slick-active").hasClass("slide_1")){
        $("#slider_title").html('Platform développé par');

    }
    
  });
  $('.customer-logos').slick({
    slidesToShow: 7,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    arrows: false,
    dots: false,
    

    pauseOnHover: false,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 5
      }
    }, {
      breakpoint: 520,
      settings: {
        slidesToShow: 3
      }
    }]
  });
});

$(document).ready(function(){
  $('.customer-logos-2').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    arrows: false,
    dots: false,


    pauseOnHover: false,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 3
      }
    }, {
      breakpoint: 520,
      settings: {
        slidesToShow: 3
      }
    }]



  });
});
/*$('.customer-logos-2').on('afterChange', function(e, s, currentSlideIndex) {
  let previousSlideIndex = currentSlideIndex - 1;  
  console.log(previousSlideIndex);
  var bar_title = ["Platform développé par", "Sponsorisé par"];
  var index_page = 0;

  console.log(bar_title[index_page]);
  if(previousSlideIndex == 3){
    $("#slider_title").html(bar_title[index_page]);
    if(index_page == 0){
        var index_page = 1;
  }else{
    var index_page = 0;
  }
  }
});*/
/*$(document).ready(function() {
    sponsortitle();
   function sponsortitle(){
        setTimeout(function() {
    $("#slider_title").html('Sponsorisé par');
    developer_title();

  }, 7500);
    }

    function developer_title(){
    setTimeout(function() {
    $("#slider_title").html('Platform développé par');
    sponsortitle();
  }, 7500);
  }

  
});*/
$(document).ready(function(){
  $('.customer-logos-3').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 7000,
    arrows: false,
    dots: false,
    

    pauseOnHover: false,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 1
      }
    }, {
      breakpoint: 520,
      settings: {
        slidesToShow: 1
      }
    }]
  });
});




</script>

</html>
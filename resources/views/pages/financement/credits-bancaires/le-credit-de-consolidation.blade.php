@section('title', 'Le crédit de consolidation')
@section('description', ' C’est un crédit permettant de couvrir des besoins de fonctionnement et a rembourser par le moyen terme via des
échéances de crédit amortissable.')

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Le crédit de fonctionnement amortissable</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Objet
                    </h2>
                    <p class="section_normale_text">
                        Le rééchelonnement des engagements portés sur une entreprise qui vit des difficultés passagères ou
                        momentanées.

                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Description
                    </h2>
                    <p class="section_normale_text">
                        Permet à une entreprise de reprofiler ces engagements de dette auprès d’une institution bancaire pour les adapter
                        à une situation de difficulté momentanée et permettre la continuité de l’activité dans des conditions de trésorerie
                        adéquates.

                    </p>
                </div>
                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Cible
                            </h2>
                            <p class="section_normale_text">
                                Professions libérales, Coopératives, Agriculteurs,
                                Personnes physiques, Personnes morales, GIE, 
                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Critères d’éligibilité
                            </h2>
                            <p class="section_normale_text">
                                Justifier d’une situation de difficulté d’entreprise
                                passagère ou momentanée. <br>
                                Ne pas être en situation contentieuse avec un autre
                                organisme financier.

                            </p>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title"> Plafond de financement </h2>
                            <p class="section_normale_text">
                                Le montant de crédit est déterminé en fonction des encours de crédit à consolider et des possibilités de
                                remboursements dégagées par la rentabilité prévisionnelle

                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Modalités de remboursement </h2>
                            <p class="section_normale_text">
                                Jusqu’à 10 ans avec un différé négociable avec la banque.


                            </p>
                        </div>
                    </div>
                    <br>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">Conditions de garanties </h2>
                            <p class="section_normale_text">
                                Protocole d’accord prévoyant le maintien des garanties détenues au titre de engagements initiaux.
                                Autres garanties librement négociables entre la banque et l’entreprise. <br>
                                <br>
                                Type de crédit pouvant être garanti par la SNGFE dans le cadre du produit DAMANE ISTITMAR avec un quotité de
                                garantie de 50% du montant du crédit dans la limite de 15 MDhs.
                          
                                

                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">Coût du financement / de l’opération</h2>
                            <p class="section_normale_text">
                                Taux d’intérêt calculé sur le capital restant dû qui est librement négociable entre la banque et l’entreprise.
                                A noter que les taux d’intérêts dépendent également de la notation attribuée à l’entreprise par la banque.
                                
                            </p>
                        </div>
                    </div>
                    <br>
                    <h2 class="blue-section-title"> Documents nécessaires </h2>
                    <p class="section_normale_text">

                    <ul>
                      <li>Dossier juridique de constitution + PV modificatifs le cas échéant.</li>
                      <li> Contrat de loyer + dernière quittance de loyer / Certificat de propriété des locaux d’exploitation existants.</li>
                      <li>Liasses fiscales des trois derniers exercices et une situation provisoire le cas échéant.</li>
                      <li>Etat des stocks / Situation des marchés détenus</li>
                      <li>Relevés bancaires + Situation des engagements auprès des autres partenaires financiers.</li>
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
                <a href="{{(asset('financement/credits-bancaires/le-credit-a-la-promotion-immobiliere'))}}">
                    <button class="previous_btn">crédit à la promotion immobilière</button>
                </a>
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a href="{{(asset('financement/credits-bancaires/FACILITE-DE-CAISSE'))}}">
                        <button class="next_btn">Facilité de Caisse</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
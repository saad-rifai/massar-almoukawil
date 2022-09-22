@section('title', 'Le crédit de fonctionnement amortissablee')
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
                        Destiné à faire face à des dépenses spécifiques ou celles liées au fonctionnement général de l’entreprise.


                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Description
                    </h2>
                    <p class="section_normale_text">
                        C’est un crédit permettant de couvrir des besoins de fonctionnement et a rembourser par le moyen terme via des
                        échéances de crédit amortissable.

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
                                Justification d’un besoin spécifique lié à l’exploitation.
                                Ne pas être en situation contentieuse avec un autre
                                organisme financier


                            </p>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title"> Plafond de financement </h2>
                            <p class="section_normale_text">
                                Le montant de crédit est fixé en fonction des dépenses et des possibilités de remboursements de l’entreprise.


                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Modalités de remboursement </h2>
                            <p class="section_normale_text">
                                Le remboursement peut se faire en moyen terme jusqu’à 5 ans.


                            </p>
                        </div>
                    </div>
                    <br>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">Conditions de garanties </h2>
                            <p class="section_normale_text">
                                Nantissement sur fonds de commerce et délégation d’assurance y afférente. <br>
                                Autres garanties librement négociables entre la banque et l’entreprise. <br> <br>
                                Type de crédit pouvant être garanti par la SNGFE dans le cadre des produits : <br>
                                <ul>
                                    <li>DAMANE EXPRESS si le crédit ne dépasse pas 1 000 000 DH avec une quotité de garantie de 70%</li>
                                    <li>
                                        DAMANE ATTASYIR si le crédit dépasse 1 000 000 DH avec une quotité de garantie de 50% du montant du crédit
                                dans la limite de 15 MDhs. 
                                    </li>
                                </ul>
                          
                                

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
                <a href="{{(asset('financement/credits-bancaires/le-credit-dinvestissement-moyen-long-terme/'))}}">
                    <button class="previous_btn">crédit d’investissement</button>
                </a>
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a href="{{(asset('financement/credits-bancaires/le-credit-a-la-promotion-immobiliere'))}}">
                        <button class="next_btn">crédit à la promotion immobilière</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
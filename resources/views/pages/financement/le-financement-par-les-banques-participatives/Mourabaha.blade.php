@section('title', 'Mourabaha')
@section('description', 'C’est une formule de financement participatif qui a pour objet l’acquisition d’un bien neuf ou ancien (Immobilier,
véhicule, équipement…). ')

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>MOURABAHA</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Objet
                    </h2>
                    <p class="section_normale_text">
                        C’est une formule de financement participatif qui a pour objet l’acquisition d’un bien neuf ou ancien (Immobilier,
                        véhicule, équipement…). 
                        
                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Description
                    </h2>
                    <p class="section_normale_text">
                        La Murabaha est un contrat par lequel la banque acquiert, à la demande du client, un bien, en vue de le lui
                        revendre moyennant une marge bénéficiaire convenue et fixée d’avance. Le règlement par le client se fait par des
                        mensualités constantes sur une durée fixée d’avance.
                        La Murabaha est régie par la nouvelle loi bancaire 103-12 et les circulaires d'application BAM y afférentes, ainsi
                        qu'aux avis de conformité du CSO.
                    </p>
                </div>
                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Cible
                            </h2>
                            <p class="section_normale_text">
                                + Fonctionnaires et salariés (Secteur privé & public) <br>
                                + Les personnes physiques marocaines ou étrangères <br>
                                résidentes au Maroc, exerçant une activité
                                commerciale, professionnelle
                                ou libérale- Les personnes physiques marocaines
                                résidentes à l’étranger (MRE) exerçant une activité
                                commerciale, professionnelle ou libérale ; <br>
                                + Les personnes morales dont le siège social est basé au
                                Maroc
                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Critères d’éligibilité
                            </h2>
                            <p class="section_normale_text">
                                <strong>
                                    Particuliers et professionnels :
                                </strong>
                                <br>
                                <ul>
                                    <li>Age minimum de 18 ans</li>
                                    <li>Conditions relatives au compte : domiciliation du revenu</li>
                                    <li>Ancienneté d'activité minimum 12 mois</li>
                                    <li>Pas d’incident de paiement (chèque, litige bancaire, etc.)</li>
                                </ul>
          
                                <strong>Personnes morales :</strong> 
                                <br>
                                <ul>
                                    <li>Structure financière équilibrée ;</li>
                                    <li>Pas d’incident de paiement (chèque, litige bancaire,
                                        etc.)</li>
                                </ul>
                            
                                
                            </p>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title"> Plafond de financement </h2>
                            <p class="section_normale_text">
                                Pas de plafond

                                


                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">Modalités de remboursement </h2>
                            <p class="section_normale_text">
                                C’est au cas par cas
  

                            </p>
                        </div>
                    </div>
                    <br>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">Conditions de garanties </h2>
                            <p class="section_normale_text">
                                C’est au cas par cas

                           
                                
                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">Coût du financement / de l’opération</h2>
                            <p class="section_normale_text">
                                La marge est déterminée en fonction de plusieurs paramètres : Segment du client, durée, Quotité de financement 
        
                                
                            </p>
                        </div>
                    </div>
                    <br>
                    <h2 class="blue-section-title"> Documents nécessaires </h2>
                    <p class="section_normale_text">
                        <strong>Professionnels:</strong>
                        <br>
                        <ul>
                            <li>Déclaration sur l’honneur faisant ressortir le revenu net du client</li>
                            <li>Modèle 7 du registre de commerce récent</li>
                            <li>Taxe professionnelle</li>
                            <li>Carte professionnelle</li>
                            <li>Avis d’imposition</li>
                            <li>Contrat de gérance ou statut</li>
                            <li>Autorisation d’exercer</li>
                            <li>Etats financiers pour les personnes morales</li>
                            <li>12 derniers relevés bancaires pour les nouveaux clients</li>
                            <li>Engagement de domiciliation des revenus </li>
                        </ul>
            
                    </p>
                    <br>
                    <br>
                    <h2 class="blue-section-title">
                        Contact
                    </h2>
                   <table class="table">
                    <tbody>
                        <tr>
                            <th>Umnia bank TETOUAN</th>
                            <td>M.CHAMCHOUM IMAD</td>
                            <td> <a href="tel:06 69 74 83 73">06 69 74 83 73</a> </td>
                   
                        </tr>

                        <tr>
                            <th>Umnia bank TANGER</th>
                            <td>M.BENOMAR REDOUAN </td>
                            <td> <a href="tel: 06 69 74 93 20"> 06 69 74 93 20</a> </td>
                   
                        </tr>
                    </tbody>
                   </table>

                </div>
                <br>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
           
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a href="{{(asset('financement/credits-participatives/tamwil-chamal'))}}">
                        <button class="next_btn">Tamwil chamal</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
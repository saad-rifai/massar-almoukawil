@section('title', 'Tamwil chamal')
@section('description', 'Destiné à offrir des cofinancements, avec les banques/fenêtres participatives, en faveur des petites entreprises
opérant dans la région Tanger-Tétouan-Al Hoceima ')

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
                        Destiné à offrir des cofinancements, avec les banques/fenêtres participatives, en faveur des petites entreprises
                        opérant dans la région Tanger-Tétouan-Al Hoceima
                        
                    </p>
                </div>

                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Cible
                            </h2>
                            <p class="section_normale_text">
                                Investissements matériels (immeubles,
                                équipements ...) et immatériels (Fonds
                                de commerce, propriété commerciale,
                                brevets ...) dont le coût global
                                n'excède pas 400.000 DH ; <br>
                                - Acquisition de marchandises. 
                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Critères d’éligibilité
                            </h2>
                            <p class="section_normale_text">
                                personnes physiques ou morales, exerçant des activités légales et
                                conformes aux principes de la charia au niveau de tous les secteurs
                                d’activité à l’exclusion de la promotion immobilière et de la pêche
                                hauturière et remplissant les critères suivants : <br> <br>
                                <ul>
                                    <li>De droit marocain quel que soit leur forme juridique</li>
                                    <li>Exerçant des activités de production de biens et/ou de services</li>
                                    <li>Exerçant leur activité dans la région Tanger-Tétouan-Al Hoceima</li>
                                </ul>
                         
                                
                            </p>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title"> Plafond de financement </h2>
                            <p class="section_normale_text">
                                Coût global : 400.000 DH au maximum. Le cofinancement est accordé dans les proportions suivantes: <br>
                                <ul>
                                    <li>Fonds propres : 10% au maximum</li>
                                    <li>Part du Fonds : 50%</li>
                                    <li>Part de la banque/fenêtre participative : Le reliquat du financement.</li>
                                </ul>
                           
                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">Modalités de remboursement </h2>
                            <p class="section_normale_text">
                                12 ans au maximum, y compris le différé ; 
  

                            </p>
                        </div>
                    </div>
                    <br>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">Conditions de garanties </h2>
                            <p class="section_normale_text">
                                Les financements sont couverts par les sûretés d’usage, notamment : <br>
                                <ul>
                                    <li>Les hypothèques</li>
                                    <li>Les nantissements : Fonds de commerce, marchandises,… </li>
                                    <li>Les cautions personnelles. <br>Les sûretés sont souscrites en pari-passu entre la Fenêtre SANAD TAMWIL et la banque/fenêtre participative.</li>
                                </ul>
                              <br>
                                
                                La part de la banque/fenêtre participative dans le financement conjoint peut être garantie dans le cadre des
                                produits de garantie participatifs en faveur des entreprises. 
                           
                                
                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">Coût du financement / de l’opération</h2>
                            <p class="section_normale_text">
                                La Marge bénéficiaire sur la partie TAMWIL CHAMAL est de 2% (HT), pour les projets implantés en zone urbaine, sur
                                la base d’un tableau d’amortissement dégressif ; <br>
                                1.75% (HT), pour les projets implantés en zone rurale, sur la base d’un tableau d’amortissement dégressif        
                                
                            </p>
                        </div>
                    </div>
                    <br>
                    <h2 class="blue-section-title"> Documents nécessaires </h2>
                    <p class="section_normale_text">
                    

                        <ul>
                            <li>Dossier juridique de constitution + PV modificatifs le cas échéant.</li>
                            <li>Contrats de loyer + dernières quittances / Certificats de propriétés des locaux d’exploitation existants.</li>
                            <li>Liasses fiscales des trois derniers exercices + une situation provisoire le cas échéant.</li>
                            <li>Relevés bancaires + Situation des engagements auprès des autres partenaires financiers.</li>
                            <li>Un plan de trésorerie prévisionnel pour les 3 prochains exercices.</li>
                            <li>Justification d’opérations d’exportation auprès de clients étrangers.</li>
                         
                        </ul>
            
                    </p>
                    <br>
                    <br>
                    <h2 class="blue-section-title">
                        Contact
                    </h2>
                    <p class="section_normale_text"> <a href="{{asset('contacts/banques-participatives')}}">voir liste des
                        contacts <i class="fas fa-external-link"></i></a>
                </p>

                </div>
                <br>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('financement/credits-participatives/Mourabaha'))}}">
                    <button class="previous_btn">Mourabaha</button>
                </a>
            </div>
            <div class="col">
     

            </div>
        </div>
        <hr>
        @include('assets.footer')
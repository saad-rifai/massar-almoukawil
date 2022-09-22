@include('assets.head')


<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Etape n°2 :
                        <br>
                        Inscription à la taxe professionnelle                        
                        </h1>
    
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        La Direction Générale des Impôts fait partie du Ministère de l’Economie et des Finances. Sa principale mission consiste à
                        assurer les recettes fiscales.
        
                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <ul class="section_normale_list">
                        <li>Asseoir et recouvrer les impôts d’État</li>
                        <li>S’assurer du respect de la loi fiscale et lutter contre la fraude fiscale.</li>
                        <li>
                            Fournir au gouvernement une expertise fiscale notamment dans le cadre de l’élaboration des lois des finances et de la
                            négociation des conventions de non double imposition avec les états étrangers.
                            
                        </li>
                      
                    </ul>
                </div>
                <div class="text-containet">
          
                    <div class="sample_table mb-5">
                        <table class="table table_model_2">
                            <thead>
                                <tr>
                                    <th >Inscription à la taxe professionnelle</th>
                                    <th >Frais</th>
                                    <th >Documents à fournir</th>
                                </tr>
                            </thead>
                            <tbody>
                              

                                <tr>
                                    <td style="width: 60%">
                                       <p >
                                        C'est l'inscription de la société auprès
                                        de l’administration des impôts.
                                        <br>
                                        Cette étape de la création permet à
                                        l’entreprise d'obtenir son identifiant à
                                        la taxe professionnelle.
                                       </p>

                                    </td>
                                    <td>Néant</td>
                                    <td>
                                        <ul>
                                            <li>  Copie du contrat de bail légalisé et enregistré / copie du reçu
                                                de loyer légalisé par le propriétaire / copie du titre de propriété
                                                (Immeuble, droit au bail ou fonds de commerce) / copie de l’acte
                                                de domiciliation légalisé ;</li>
                                                <br>
                                                <li>Copie de la CNI ou de la carte de séjour ;</li><br>
                                                <li>Copie de l’autorisation nécessaire à l’exercice de l’activité (si
                                                    l’activité est réglementée)</li>
                                        </ul>
                                         </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
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
                                            <th scope="col">Ville</th>
                                            <th scope="col">Tél</th>
                                            <th scope="col">E-mail</th>
                                            <th scope="col">Adresse </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tanger</td>
                                            <td>
                                                Tel : 05 39 94 09 80
                                                <br>
                                                Tél. : 05 39 94 27 80 / 05 39 94 02 85
                                                <br>
                                                Fax : 05 39 94 27 80
                                            </td>
                                            <td><a href="mailto:b.lazrak@tax.gov.ma">b.lazrak@tax.gov.ma</a></td>
                                            <td>Rue Abi Jarir Tabari, Tanger.</td>
                                        </tr>
                                        <tr>
                                            <td>Tétouan</td>
                                            <td>Tel : 05 39 96 44 10
                                                <br>
                                                Tél : 05 39 96 68 14
                                                 </td>
                                                 <td><a href="mailto:i.zerhouni@tax.gov.ma">i.zerhouni@tax.gov.ma</a></td>
                                                 <td>Av. Hassan II, BP 69, Tétouan.</td>
                                                </tr>
                                        <tr>
                                            <td>Larache</td>
                                            <td>Tel : 05399-12858 </td>
                                            <td></td>
                                            <td>100 bd Mohamed V Larache.</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
  

                    </div>

                </div>
                <hr class="section_hr">

                <div class="text-containet text-center">
                    <a href="https://www.tax.gov.ma/" target="_blanck">
                        <button class="lg-btn-produit"><i class="las la-external-link-alt"></i> Visitez le site Web</button>
                    </a>
                </div>
                <br>
                <br>
            </div>
        </div>
       
        <div class="row">
            <div class="col">   
                <a href="{{(asset('/c/pp/e1'))}}">
                    <button class="previous_btn">Etape n°1</button>
            </a></div>
            <div class="col">
    
                <div class="next-btn-box">
                    <a href="{{(asset('/c/pp/e3'))}}">
                        <button class="next_btn">Etape n°3</button>
                    </a>
                </div>
            </div>
         </div>
        <hr>
        @include('assets.footer')
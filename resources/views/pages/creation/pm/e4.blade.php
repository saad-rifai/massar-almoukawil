@include('assets.head')


<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Etape n°4 : <br>Formalités d’enregistrement des
                        actes de création
                        </h1>
    
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        La formalité d’enregistrement a pour effet de faire acquérir date certaine aux conventions sous seing privé et d’assurer
                        la conservation des actes. <br> Il donne lieu à la perception d’un impôt dit "droit d’enregistrement" (1% du capital avec un
                        minimum de 1000 Dirhams). <br>
                        Le dépôt des statuts est Assurée par le Secrétariat greffier du tribunal de première instance du ressort duquel dépend la
                        société (toutes les sociétés sont concernées). <br> Le délai est de 30 jours (à partir de la date de création de l’entreprise).
        
                    </p>
                </div>

                <div class="text-containet">
          
                    <div class="sample_table mb-5">
                        <table class="table table_model_2">
                            <thead>
                                <tr>
                                    <th >Démarches</th>
                                    <th >Frais</th>
                                    <th >Documents à fournir</th>
                                </tr>
                            </thead>
                            <tbody>
                              

                                <tr>
                                    <td style="width: 60%">
                                       <p >
                                        Les dossiers de création sont traités au
                                        niveau de la direction générale des
                                        impôts. <br>
                                        L’enregistrement des actes doit se faire
                                        dans le mois de leur établissement pour
                                        éviter toute majoration.
                                       </p>

                                    </td>
                                    <td>
                                      <ul>
                                        <li>1 % du capital, avec un minimum de 1000 dh plus timbre de 20 dh par feuille pour les statuts de la société.</li>
                                        <li>200 dh pour chaque PV s’il y a lieu.</li>
                                        <li>200 dh pour le contrat de bail.</li>
                                      </ul>
                                        

                                    </td>
                                    <td>
                                        <ul>
                                            <li>  Les statuts
                                                </li>
                                                <br>
                                                <li>Le contrat de bail ou l’acte
                                                    d’acquisition,</li><br>
                                                <li>Les procès-verbaux de désignation
                                                    du gérant ou de nomination du
                                                    président, commissaires aux comptes,
                                                    administrateurs</li><br>
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
                    <a href="https://www.cnss.ma/" target="_blanck">
                        <button class="lg-btn-produit"><i class="las la-external-link-alt"></i> Visitez le site Web</button>
                    </a>
                </div>
                <br>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col">   
                <a href="{{(asset('/c/pm/e3'))}}">
                    <button class="previous_btn">Etape n°3</button>
            </a></div>
            <div class="col">
    
                <div class="next-btn-box">
                    <a href="{{(asset('/c/pm/e5'))}}">
                        <button class="next_btn">Etape n°5</button>
                    </a>
                </div>
            </div>
         </div>

        <hr>
        @include('assets.footer')
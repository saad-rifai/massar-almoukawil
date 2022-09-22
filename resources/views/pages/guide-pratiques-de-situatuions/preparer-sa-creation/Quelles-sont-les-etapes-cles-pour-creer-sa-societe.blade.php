@section('title', ' Quelles sont les étapes clés pour créer sa société ')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1> Quelles sont les étapes clés pour créer sa société </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
          
               
                          <p>La nature des démarches de création d’entreprise et l’ordre dans lequel on doit procéder peuvent varier selon le statut de la société. Ci-après le <strong>parcours type</strong> pour la création d’une SARL.</p>
                          <p>A noter que les délais de création peuvent varier de 1 à 3 semaines, pour un coût moyen d’environ 2000 Dh.</p>
                          <p><strong>Etablissement du certificat négatif</strong> : demande du certificat négatif et de l’ICE via le site Ompic. Il faut compter minimum 2 jours entre la demande et son établissement (sous réserve de la disponibilité du nom commercial choisi)</p>
                          <p><strong>Choix du domicile social de la société</strong> : signature du contrat de domiciliation ou d’un contrat de bail <br> <strong>Etablissement des statuts et dépôt du dossier complet au CRI</strong> : dossier comprenant le certificat négatifs, statuts, formulaires uniques, pièce d’identité</p>
                          <p>Prévoir à ce stade une période d’une dizaine de jours (en moyenne)</p>&nbsp;
                          <p><strong>Retrait des documents :</strong></p>
                      
                        <li>Inscription à la Taxe Professionnelle (<strong>TP</strong>)</li>
                        <li>Attribution de l’identifiant fiscal et de l’identifiant commun des entreprises (<strong>ICE</strong>)</li>
                        <li>Inscription au registre du commerce (<strong>RC</strong>)</li>
                        <li>Attestation d’affiliation à la <strong>CNSS</strong></li>
                  
                    
                        <li>
            
                          <strong>Publication de l’avis de création</strong> : à publier dans un journal d’annonces légales et au Bulletin Officiel (BO) <br>
                        </li>
                        <li>
                            <strong>Ouverture d’un compte bancaire au nom de la société </strong>
                        </li>
                          <br>
                           Pour en savoir plus
                          Si vous souhaitez plus de détails sur les démarches de création d’entreprise, vous trouverez sur internet de nombreux guides et tutoriels, notamment :
                    <br>
                          <a href="http://www.service-public.ma/">www.service-public.ma/</a> : site web officiel qui fournit le détail des procédures par type d’entreprise
                     <br>
                          <a href="http://www.casainvest.ma/">www.casainvest.ma</a> : CRI de Casablanca – Settat qui propose notamment un parcours du créateur d’entreprise, des explications sur les démarches et une FAQ
                      
                    <br>
                    <br>
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <p><strong>Bon à savoir : Votre conseil juridique (expert comptable, comptable agrée, notaire avocat), reste le plus à même de réaliser ces démarches. La réalisation des démarches administratives est souvent facturée en sus des coûts de création d’entreprise. Selon le conseiller juridique choisi, cela peut vous coûter jusqu’à 15 000 dhs.</strong></p>
                            </td>
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
                <a href="{{(asset('preparer-sa-creation/Entreprise-individuelle-personne%20physique-ou-societe'))}}">
                    <button class="previous_btn">Précédente</button>
                </a>
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a href="{{(asset('preparer-sa-creation/quels-sont-les-crit-res-importants-pour-choisir-sa-structure-juridique-'))}}">
                        <button class="next_btn">Suivante</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
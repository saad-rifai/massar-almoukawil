@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">
                <br>
                <br>
                <div class="section-title-br">
                    <h1>Personne Morale

                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Une personne morale est une entité qui dispose de la personnalité juridique.


                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Caractéristiques
                    </h2>
                    <p class="section_normale_text">
                        Une personne morale détient un patrimoine propre et
                        indépendant. <br>
                        Une personne morale possède la capacité de s’engager par
                        contrat. <br>
                        Une personne morale a une responsabilité pénale propre. <br>
                        Une personne morale est une personne juridique avec : <br>
                        <ul class="section_normale_list">
                            <li>Un nom (dénomination sociale),</li>
                            <li>Un domicile (siège social),</li>
                            <li> Un patrimoine,</li>
                            <li>Une nationalité</li>
                        </ul>
                        
                        
                    </p>
             
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Avantages
                    </h2>
                    <p class="section_normale_text">
                        Le passage en société est à l’origine en premier lieu de
                        l’obtention de l’autonomie patrimoniale. <br>
                        Limiter la responsabilité du chef d’entreprise au montant de
                        ses apports. <br>
                        La personnalité morale permet de séparer nettement
                        patrimoine professionnel et patrimoine non professionnel
                        
                        
                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarche
                    </h2>
                    <p class="section_normale_text">
                        Etape n°1 : Certificat négatif Office Marocain de la Propriété Industrielle et Commerciale (obligatoire). <br>
                        Etape n°2 : Etablissement des statuts. <br>
                        Etape n°3 : Blocage du montant du capital libéré. <br>
                        Etape n°4 : Formalités d’enregistrement des actes de création. <br>
                        Etape n°5 : Inscription à la taxe professionnelle. <br>
                        Etape n°6 : L’immatriculation au Registre du Commerce. <br>
                        Etape n°7 : L’affiliation à la Caisse Nationale de Sécurité Sociale. <br>
                        Etape n°8 : Journal d’annonces légales Bulletin Officiel.

                    </p>
                </div>

          
                <br>
        
            </div>
        </div>
   
        <div class="next-btn-box">
            <a href="{{(asset('/c/pp/e1'))}}">
                <button class="next_btn">Etape n°1</button>
            </a>
        </div>
        <hr>
        @include('assets.footer')
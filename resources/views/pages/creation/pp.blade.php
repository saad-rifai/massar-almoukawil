@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">
                <br>
                <br>
                <div class="section-title-br">
                    <h1>Personne Physique
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        L’entreprise-personne physique est définie comme étant une entreprise exploitée par un entrepreneur dont l’objet est
                        d’exercer une profession libérale ou activité économique. Dans ce cas, c'est l'entrepreneur qui possède la personnalité
                        juridique de l'entreprise et non l'entreprise elle-même.

                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Caractéristiques
                    </h2>
                    <p class="section_normale_text">
                        La personne physique n’est pas juridiquement différenciée
                        de l’entrepreneur : <br>  les deux forment qu’une seule et même
                        entité juridique. <br>
                        Aucune séparation n'est faite entre le patrimoine de
                        l'entreprise et celui de l'associé
                        La responsabilité de l’entrepreneur est illimitée.
                        
                    </p>
             
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Avantages
                    </h2>
                    <p class="section_normale_text">
                        Pas de mise de fonds minimale obligatoire ; <br>
                        Le statut de personne physique présente l’avantage de
                        faciliter la prise de décision au sein de votre entreprise. <br>
                        Vous êtes le seul décisionnaire, contrairement aux autres
                        statuts dans lesquels vous n’êtes souvent pas le seul associé, 
                        ce qui implique un consensus à chaque étape du
                        développement de l’activité ; <br>
                        Simplicité de création ; <br>
                        Simplicité de fonctionnement et faible coût.
                        
                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarche
                    </h2>
                    <p class="section_normale_text">
                        Etape n°1 : Obtention du certificat négatif auprès de l’Office Marocain de la Propriété Industrielle
                        et Commerciale (optionnelle si on opte pour le choix d’un nom commercial)
                        <br>
                        Etape n°2 : Inscription à la taxe professionnelle
                        <br>
                        Etape n°3 : Immatriculation au Registre du Commerce
                        <br>
                        Etape n°4 : Affiliation à la Caisse Nationale de Sécurité Sociale

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
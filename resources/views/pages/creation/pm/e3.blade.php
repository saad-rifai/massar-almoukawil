@include('assets.head')


<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Etape n°3 :
                        <br>Blocage du montant du capital libéré
                        </h1>
    
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Le blocage du capital s'effectue auprès de la banque qui fournit au client une attestation bancaire prouvant qu’il
                        dispose des fonds nécessaires et obligatoires exigés par la loi.
                        Pour la SARL : suppression de la formalité de blocage pour les sociétés dont le capital ne dépasse pas 100.000
                        Dirhams. Pour le reste, le montant diffère en fonction de la forme juridique de l’entreprise choisie.
                        Les banques pouvant recevoir le capital social des entreprises sont les suivantes :
        
                    </p>
                </div>

                <div class="list-logos">
                    <div class="logo-img-b">
                        <img src="{{asset('images/logos/3/attijariwafabank.png')}}" alt="">
                    </div>
                    <div class="logo-img-b">
                        <img src="{{asset('images/logos/3/Al_Barik_Bank_logo.png')}}" alt="">
                    </div>
                    <div class="logo-img-b">
                        <img src="{{asset('images/logos/3/bmce.png')}}" alt="">
                    </div>
                    <div class="logo-img-b">
                        <img src="{{asset('images/logos/3/bp.png')}}" alt="">
                    </div>
                    <div class="logo-img-b">
                        <img src="{{asset('images/logos/3/bmci.jpg')}}" alt="">
                    </div>
                    <div class="logo-img-b">
                        <img src="{{asset('images/logos/3/arab-bank.jpg')}}" alt="">
                    </div>
                </div>
                <div class="list-logos">
                    <div class="logo-img-b">
                        <img src="{{asset('images/logos/3/cih-bank.jpg')}}" alt="">
                    </div>
                    <div class="logo-img-b">
                        <img src="{{asset('images/logos/3/credit-du-Maroc.jpg')}}" alt="">
                    </div>
                    <div class="logo-img-b">
                        <img src="{{asset('images/logos/3/credit-ag.png')}}" alt="">
                    </div>
                    <div class="logo-img-b">
                        <img src="{{asset('images/logos/3/sg.jpg')}}" alt="">
                    </div>
                    <div class="logo-img-b">
                        <img src="{{asset('images/logos/3/by.png')}}" alt="">
                    </div>
                    <div class="logo-img-b">
                        <img src="{{asset('images/logos/3/Bank-Assafa-1.png')}}" alt="">
                    </div>
                </div>
                <br>
            </div>
        </div>
       
        <div class="row">
            <div class="col">   
                <a href="{{(asset('/c/pm/e2'))}}">
                    <button class="previous_btn">Etape n°2</button>
            </a></div>
            <div class="col">
    
                <div class="next-btn-box">
                    <a href="{{(asset('/c/pm/e4'))}}">
                        <button class="next_btn">Etape n°4</button>
                    </a>
                </div>
            </div>
         </div>
        <hr>
        @include('assets.footer')
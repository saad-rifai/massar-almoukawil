@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>
                    Zone d’activités économiques 
d’Assilah
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    La zone d’activités économiques Intégrée d’Assilah est située à la Commune Urbaine d’Assilah à 46 Km de la route 
nationale Tanger-Rabat et s’étale sur une superficie totale de 62 Ha avec une 1ère tranche de 16,5 Ha. Le projet vise les 
activités industrielles, artisanales et commerciales à forte valeur ajoutée. <br>
La Zone s’étale dans sa première tranche sur une superficie de 10 hectares avec la construction de 44 lots de superficies 
variant entre 700 et 5000 m².


                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                    Services 
</h2>
                    <p class="section_normale_text">
                    La zone d’activités économiques d’Assilah a mise en place un écosystèmes performants qui ont pour vocation de 
favoriser l’intégration des chaînes de valeurs et la consolidation des liens entre les grandes entreprises et les PME.
                    </p>
                    
                
                </div>
                

            




                <br>
                <br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('/zone-ind-ec/Hostal-Larache'))}}">
                    <button class="previous_btn">Hostal Larache</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/zone-ind-ec/zone-Martil'))}}">
                        <button class="next_btn">Zone Martil</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
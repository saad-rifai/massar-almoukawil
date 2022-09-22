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
                    Zone industrielle de Tétouan, route de 
Martil
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    La Zone industrielle de Tétouan, route de Martil, a été créée en 1981, elle se situe à 7 Km de la route reliant les villes de 
Martil et de Tétouan. Cette zone s’étend sur une superficie de 48 Ha et dispose de 178 lots. <br>
Des travaux de réhabilitation de cette zone, d’un coût de 26,8 millions de dirhams, ont été entamés depuis l’année 2008, 
afin de renforcer les structures d’accueil abritant les unités industrielles, et remédier au sous-équipement qu’elle connaît. <br>
Ces travaux consisteront en l’aménagement de la voirie et trottoirs, en l’éclairage public, la construction de caniveaux 
des eaux pluviales, et la construction d’équipements communs.


                    </p>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                    Services 
</h2>
                    <p class="section_normale_text">
                    Elle se spécialise dans les secteurs d’activités suivants : 
                    </p>
                    <ul class="section_normale_list">
                        <li>Aéronautique.</li>
                        <li>Agroalimentaire.</li>
                        <li>Automobile.</li>
                        <li>Chimie - Parachimie.</li>
                        <li>Cuir.</li>
                        <li>Electronique.</li>
                        <li>Energies Renouvelables.</li>
                        <li>Mécanique et Métallurgique.</li>
                        <li>Offshoring.</li>
                        <li>Pharmaceutique.</li>
                        <li>Textile.</li>
                    </ul>
                
                </div>
                

            




                <br>
                <br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('/zone-ind-ec/zone-Assilah'))}}">
                    <button class="previous_btn">Zone Assilah</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/zone-ind-ec/ZAE'))}}">
                        <button class="next_btn">ZAE</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
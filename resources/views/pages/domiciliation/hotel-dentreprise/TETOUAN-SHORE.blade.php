@section('title', 'Tetouan shore')
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
                        Tetouan shore
                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Une zone d’outsourcing et de services démarré en 2013, avec une superficie totale de 20 ha , consacrée aux activités : Offshoring, BPO, ITO, CRME. <br>
                        Zone dédiée aux métiers de l’offshoring, est érigée à Tétouan et offre des espaces bureaux pour des métiers comme l’ITO (Information Technology Outsourcing), le BPO (Business Processing Outsourcing) et le KPO (Knowledge Process Outsourcing)
                    </p>
                </div>

          <br>
          <div class="text-containet">
            <h2 class="blue-section-title">
                Services
            </h2>
            <p class="section_normale_text">
                <p>Tetouan Shore propose aux soci&eacute;t&eacute;s marocaines et internationales des :</p>
                <ul>
                <li>Espaces de bureaux cl&eacute;s en mains pr&ecirc;ts &agrave; l&rsquo;emploi.</li>
                <li>Services privil&eacute;gi&eacute;s de transports.</li>
                <li>Business center.</li>
                <li>Centres commerciaux&hellip;</li>
                </ul>
                <p><br />Le tout &agrave; l&rsquo;int&eacute;rieur d&rsquo;une zone g&eacute;ographique b&eacute;n&eacute;ficiant d&rsquo;incitations fiscales.</p>
                        </p>
        </div>
                <hr class="section_hr">
                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Contact
                            </h2>
                            <div class="row">
                                <div class="col">
                                    <ul class="section_normale_contact_list">
                                        <li>
                                            <span class="section_normale_contact_list_icon "><i
                                                    class="las la-phone position-absolute top-50 start-50 translate-middle"></i></span>
                                            <a href="tel:05393-96200">05393-96200</a>

                                        </li>
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    Parc TetouanShore commune de Martil,
                                                    Tetouan

                                        </li>
                                     
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col">

                        </div>

                    </div>

                </div>
        
                <br>
                <br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('/hotel-dentreprise/technopark'))}}">
                    <button class="previous_btn">regus</button>
                </a>
            </div>
            <div class="col">


            </div>
        </div>
        <hr>
        @include('assets.footer')
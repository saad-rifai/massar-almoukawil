@section('title', ' Pourquoi et comment protéger son idée ?')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Pourquoi et comment protéger son idée ? </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <p>Que vous soyez au stade de lancement ou de développement de votre entreprise, le droit des
                        marques et de la propriété intellectuelle permet la protection d’une invention, marque, création
                        littéraire ou artistique, dessin ou modèle, et <strong>rendra votre entreprise plus
                            attrayante</strong> pour les futurs investisseurs en empêchant vos concurrents de voler
                        votre idée.</p>

                    <p>Le droit des marques et de la propriété intellectuelle vous permet de protéger vos créations
                        originales, de vous <strong>assurer de leur monopole d’exploitation</strong>, et de
                        <strong>sécuriser vos revenus futurs</strong> via des contrats de licence ou la cession d’un
                        droit de propriété intellectuelle.</p>

                    <p>Vous devrez <strong>commencer par évaluer votre idée</strong> :</p>
                    <ul>

                        <li>Mon idée est-elle <strong>originale</strong> ? quel est son <strong>degré
                                d’innovation</strong> ? Comment se distingue-t-elle par rapport aux produits similaires
                            sur le marché ?</li>
                        <li>A quel <strong>stade de développement</strong> est-elle ? Doit-elle faire l’objet d’études
                            ou peut-elle être mise en œuvre telle quelle ?</li>
                        <li>Quel est son <strong>potentiel</strong> économique ? Quelle est sa <strong>valeur
                                ajoutée</strong> ?</li>
                        <li>Qui pourrait avoir l’utilité de prendre mon idée ? <strong>de quoi je dois me
                                protéger</strong> ?</li>

                    </ul>

                    <p>En répondant à cette première série de questions, vous serez en mesure de déterminer le type de
                        protection adéquate et les moyens que vous allouerez pour protéger votre idée, <strong>avec
                            l’aide d’un spécialiste de la propriété intellectuelle.</strong></p>
                </div>


                <br>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
         
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('protger-son-idee-d-entreprise/comment-d-poser-un-nom-commercial'))}}">
                        <button class="next_btn">Suivante</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
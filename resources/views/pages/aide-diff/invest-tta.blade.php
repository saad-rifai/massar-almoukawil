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
                        Le Centre Régional
                        d'Investissement de la Région de
                        Tanger-Tétouan-Al Hoceima
                        (Volet conciliation et aide
                        /difficultés)

                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                        Le Centre Régional d'Investissement de la Région de Tanger-Tétouan-Al Hoceima, est un
                        établissement public doté de
                        la personnalité morale. Il a pour vocation la facilitation et l’accompagnent des investisseurs
                        dans la région.
                        • Le CRI peut également fournir aux entreprises le conseil et l’aide nécessaires pour surmonter
                        les obstacles et difficultés
                        éventuelles durant l’exercice de leurs activités notamment via le service de la conciliation.
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <p>Veiller &agrave; la bonne application du processus de conciliation / M&eacute;diation / Arbitrage en cas de litige, de garantir le traitement des<br />r&eacute;clamations des investisseurs ; tout en respectant les valeurs de confidentialit&eacute;, qualit&eacute;, efficacit&eacute;, r&eacute;activit&eacute;, impartialit&eacute;, &Eacute;quit&eacute;.<br />Le CRI est ainsi habilit&eacute; dans le cadre de ces missions a :</p>
                    <ul>
                    <li><br />R&eacute;ceptionner et instruire des demandes de conciliation.</li>
                    <li><br />Contribuer &agrave; la conduite du rapprochement des points de vue entre investisseurs et administrations ou organismes publics.</li>
                    <li><br />Traiter les dol&eacute;ances, analyser leurs causes et pr&eacute;coniser des solutions &eacute;quitables.</li>
                    <li><br />Animer les r&eacute;unions de conciliation et suivre les &eacute;changes entre parties prenantes.</li>
                    <li><br />Assurer une m&eacute;diation entre parties prenantes.</li>
                    <li><br />R&eacute;ceptionner et instruire les r&eacute;clamations des investisseurs.</li>
                    <li><br />Suivre tous les litiges des investisseurs avec les administrations et organismes publics.</li>
                    </ul>
                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarche
                    </h2>
                    <p>Tout investisseur qui a un diff&eacute;rend avec une administration ou un organisme public peut b&eacute;n&eacute;ficier des services de l&rsquo;ombudsman du CRI. Il est saisi par l&rsquo;investisseur par Mail ou courrier mentionnant la d&eacute;nomination sociale, le sie&egrave;ge social, le num&eacute;ro d&rsquo;immatriculation au registre du commerce et l&rsquo;adresse de l&rsquo;investisseur, l&rsquo;&eacute;tat civil du repr&eacute;sentant l&eacute;gal des parties, l&rsquo;objet sommaire du litige ainsi que tout document justifiant le litige.&nbsp;</p>
                    <p>Des r&eacute;clamations peuvent &eacute;galement &ecirc;tre soumises au CRI via une plate-forme d&eacute;di&eacute;e accessible via le lien : <a href="http://requete.investangier.com/index.php?page=citoyen.AccueilCitoyen" target="_blank" rel="noopener noreferrer"> http://requete.investangier.com/index.php?page=citoyen.AccueilCitoyen</a> &nbsp;</p>

                </div>
               
               
                
                <br>



                <hr class="section_hr">
                <div class="sample_table mb-5">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Tel</th>
                                            <th scope="col">E-mail :</th>
                                            <th scope="col">Adresse :</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> <strong>Tanger :</strong> <br>
                                                Tél :
                                                +212 539 34 23 0 /
+212 539 94 33 14
                                            </td>
                                            <td><a href="mailto:info@investangier.
com">info@investangier.
com</a> </td>
                                            <td> Av. Omar Ibn Al Khattab, 
Tanger 90060
</td>

                                        </tr>
                                        <tr>
                                            <td><strong>Tétouan : <br>
</strong> +212 53999 79 81 /
+212 539 99 29 19
                                            </td>

                                            <td><a href="mailto:info@investangier.
com">info@investangier.
com</a> </td>
                                            <td> 360B Avenue des F.A.R.
Tétouan
                                            </td>

                                        </tr>
                                        <tr>
                                            <td><strong>Al 
Hoceima :</strong> <br>+21253998 39 83 /
+212 539 98 39 88</td>
<td><a href="mailto:info@investangier.
com">info@investangier.
com</a> </td>
<td>Quartier Calabonita B.P 258, 
Al Hoceima
</td>
                                        </tr>





                                    </tbody>
                                </table>
                            </div>
                <hr class="section_hr">
                <div class="text-containet text-center">
                    <a target="_blank" href="https://investangier.com/" target="_blanck">
                        <button class="lg-btn-produit"><i class="las la-external-link-alt"></i> Visitez le
                            site
                            Web</button>
                    </a>
                </div>
                <br>
                <br>
            </div>
        </div>

        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('/aide-diff/avocat'))}}">
                    <button class="previous_btn">L’ordre des Avocats </button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('/aide-diff/comptable'))}}">
                        <button class="next_btn">L'Ordre des Experts-Comptables</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
    </div>
    </div>
    @include('assets.footer')
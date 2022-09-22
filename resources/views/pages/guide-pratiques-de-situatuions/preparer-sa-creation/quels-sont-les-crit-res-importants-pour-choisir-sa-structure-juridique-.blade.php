@section('title', ' Quels sont les critères importants pour choisir sa structure juridique ')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Quels sont les critères importants pour choisir sa structure juridique </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">

                    <p>Le choix du régime juridique adapté à votre projet et à votre situation personnelle est une étape
                        clé de la création. Ce choix a une incidence sur toute la vie de l’entreprise et doit donc être
                        mûrement réfléchi.</p>
                    <p>Votre choix doit être aiguillé par plusieurs critères :</p>
                    <ul>
                        <li><strong>Capital et besoins financiers</strong></li>
                    </ul>
                    <p>Après avoir défini vos besoins financiers dans votre business plan et établi votre prévisionnel
                        financier , vous serez en mesure de <strong>déterminer le montant du capital de départ</strong>
                        que vous pourrez injecter dans votre société. Si vos besoins dépassent vos ressources
                        personnelles, vous serez amené à accueillir des investisseurs au capital.</p>
                    <p><a href="https://intaliq.ma/guide/trouver-et-evaluer-son-idee-dentreprise">Trouver et évaluer son
                            idée</a> <a href="https://intaliq.ma/guide/financer-son-projet-dentreprise">Financer son
                            projet d’entreprise</a></p>
                    <p>&nbsp;</p>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <p><strong>Bon à savoir : Ne confondez pas le montant du “capital minimum” imposé à
                                            la création de certaines sociétés et les besoins financiers réels de
                                            l’entreprise. Toutefois il est certain qu’un capital conséquent sera
                                            recommandé, parfois même requis pour certains marchés.</strong></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <ul>
                        <li><strong>Volonté de s’associer</strong></li>
                    </ul>
                    <p>Si vous décidez de prendre des associés, pour diverses raisons (patrimoniale, économique, fiscale
                        ou sociale), il est important de <strong>prévoir un pacte d’associés</strong> qui viendra
                        consacrer l “affectio societatis” (défini comme la volonté commune entre plusieurs personnes
                        physiques ou morales de s’associer) et qui viendra définir en particulier les pouvoirs et
                        responsabilités de chacun.</p>
                    <p>A noter que le dirigeant agit toujours “au nom et pour le compte” de la société, par conséquent
                        un certain formalisme est nécessaire notamment pour obtenir l’autorisation des associés pour des
                        actes importants touchant la vie de l’entreprise.</p>
                    <p>Selon les types de sociétés, il vous faudra inclure un nombre minimal d’associés (voir
                        ci-dessous).</p>
                    <ul>
                        <li><strong>Gestion du risque personnel</strong></li>
                    </ul>
                    <p>Le choix de la structure juridique a des <strong>implications sur votre patrimoine
                            personnel</strong>. De manière générale, on distingue deux cas de figure :</p>
                    <ul>
                        <li><strong>Responsabilité limitée</strong></li>
                    </ul>
                    <p>Votre responsabilité est limitée à votre apport initial. En cas de dépôt de bilan, les seuls
                        fonds que vous perdez sont ceux que vous avez mis dans le capital de votre entreprise.</p>
                    <ul>
                        <li><strong>Responsabilité indéfinie et solidaire des dettes sociales</strong></li>
                    </ul>
                    <p>&nbsp;</p>
                    <p>Vous êtes personnellement responsable de l’endettement de l’entreprise. Vos biens propres
                        pourront être engagés en cas de dépôt de bilan.</p>
                    <p>Dans tous les cas, le ou les dirigeants (de droit ou de fait) sont garants de la bonne gestion de
                        l’entreprise vis-à-vis des associés et des tiers.</p>
                    <ul>
                        <li><strong>Mode de gouvernance :</strong></li>
                    </ul>
                    <p>Le statut juridique peut impacter le mode de gouvernance de l’entreprise : l’organisation des
                        structures dirigeantes peut être imposée par la loi selon les cas. Par exemple, une Société
                        Anonyme (S.A.) doit obligatoirement disposer soit d’un Conseil d’administration (avec à sa tête
                        un Président du Conseil) soit d’un Directoire avec un Conseil de Surveillance.</p>
                    <ul>
                        <li><strong>Nature de l’activité</strong></li>
                    </ul>
                    <p>Certaines activités peuvent imposer le choix d’une structure juridique particulière, dans ce cas
                        il est préférable de demander conseil auprès des organismes professionnels concernés ou de votre
                        expert comptables.</p>
                </div>


                <br>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('preparer-sa-creation/Quelles-sont-les-etapes-cles-pour-creer-sa-societe'))}}">
                    <button class="previous_btn">Précédente</button>
                </a>
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a
                        href="{{(asset('preparer-sa-creation/quels-sont-les-diff-rents-statuts-existants'))}}">
                        <button class="next_btn">Suivante</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
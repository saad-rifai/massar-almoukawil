@section('title', 'Calculer et gérer les salaires')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">
                <br>
                <br>
                <div class="section-title-br">
                    <h1>Calculer et gérer les salaires</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">


                    <h5>1. COMMENT &Eacute;TABLIR LES BONS NIVEAUX DE SALAIRES?</h5>
                    <p>Au moment de fixer le niveau de salaire, il est utile de se poser un certain nombre de questions.
                        Globalement, la fixation du salaire d&eacute;pend simplement de <strong>la loi de l&rsquo;offre
                            et de la demande </strong>: il vous faut trouver un <strong>&eacute;quilibre </strong>entre
                        le salaire que vous pouvez vous permettre de proposer (avantages compris) et les conditions
                        g&eacute;n&eacute;ralement demand&eacute;es sur le march&eacute; pour le poste concern&eacute;.
                    </p>
                    <p>Vous trouverez ci-dessous une liste non-exhaustive de <strong>pistes de r&eacute;flexion
                        </strong>pour vous aider &agrave; &eacute;tablir la grille salariale de votre entreprise :</p>
                    <ul>
                        <li>Quels sont les salaires offerts &agrave; vos employ&eacute;s occupant le m&ecirc;me emploi
                            ou des emplois &eacute;quivalents ? (avec des connaissances/comp&eacute;tences similaires,
                            la m&ecirc;me formation et la m&ecirc;me exp&eacute;rience) ;</li>
                        <li>Combien offre-t-on sur le march&eacute; pour un emploi &eacute;quivalent ?</li>
                        <li>S&rsquo;assurer de comparer des emplois avec le m&ecirc;me niveau de responsabilit&eacute;s
                            et de t&acirc;ches (ne pas se baser uniquement sur le titre)</li>
                        <li>Votre comparaison est-elle locale, r&eacute;gionale, nationale, avec des entreprises de
                            m&ecirc;me taille et du m&ecirc;me secteur d&rsquo;activit&eacute;s ?</li>
                        <li>Avez-vous beaucoup de candidats potentiels pour ce poste (y a-t-il plus de demandes que
                            d&rsquo;offres) ? Ou au contraire est-ce un poste difficile &agrave; pourvoir ?</li>
                        <li>Le candidat d&eacute;tient-il des comp&eacute;tences / connaissances indispensables pour
                            votre entreprise ?</li>
                        <li>Quel est le dernier niveau de salaire du candidat que je souhaite embaucher ?</li>
                    </ul>
                    <p>&nbsp;</p>
                    <h5>2. COMMENT CALCULER LES SALAIRES DE MES COLLABORATEURS ?</h5>
                    <p>L&rsquo;Imp&ocirc;t sur le Revenu est calcul&eacute; sur la base du Salaire Net Imposable (SNI)
                        annuel. Pour calculer le SNI, il faut op&eacute;rer plusieurs d&eacute;ductions du Salaire
                        Global (SG) de l&rsquo;employ&eacute;. Les diff&eacute;rentes &eacute;tapes du calcul de
                        l&rsquo;IR et de la r&eacute;mun&eacute;ration nette d&rsquo;Imp&ocirc;ts de
                        l&rsquo;employ&eacute; sont d&eacute;crites ici-bas (calcul du Salaire Net Imposable &ndash;
                        SNI) :</p>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <p><strong>It&eacute;rations du calcul</strong></p>
                                </td>
                                <td>
                                    <p><strong>El&eacute;ments compris dans le calcul</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Salaire Global (SG)</p>
                                </td>
                                <td>
                                    <p>L&rsquo;ensemble des r&eacute;mun&eacute;rations per&ccedil;ues par le
                                        salari&eacute; &agrave; savoir :</p>
                                    <p>le salaire de base,</p>
                                    <p>les diff&eacute;rentes primes (prime d&rsquo;anciennet&eacute;, prime de
                                        productivit&eacute;, prime de risque&hellip;),</p>
                                    <p>les diff&eacute;rentes indemnit&eacute;s (indemnit&eacute; de
                                        responsabilit&eacute;, de d&eacute;placement, d&rsquo;habillement, de
                                        logement&hellip;),</p>
                                    <p>les allocations familiales,</p>
                                    <p>les diff&eacute;rents avantages (en nature et en esp&egrave;ces).</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <p><strong>It&eacute;rations du calcul</strong></p>
                                </td>
                                <td>
                                    <p><strong>El&eacute;ments compris dans le calcul</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>&ndash; El&eacute;ments exon&eacute;r&eacute;s</p>
                                </td>
                                <td>
                                    <p>Allocations familiales (&agrave; raison de 200 Dh pour les trois premiers
                                        enfants, 36 Dh pour les trois suivants), Indemnit&eacute;s de
                                        d&eacute;placements justifi&eacute;s</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>= Salaire Brut Imposable (SBI)</p>
                                </td>
                                <td>
                                    <p>SBI = SG &ndash; El&eacute;ments exon&eacute;r&eacute;s</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>&ndash; Les Frais Professionnels (FP)</p>
                                </td>
                                <td>
                                    <p>F.P = [SBI &ndash; Avantages (indemnit&eacute; de logement)] x un Taux qui varie
                                        de 20% &agrave; 40% selon la profession exerc&eacute;e par le salari&eacute;
                                        (g&eacute;n&eacute;ralement 20%).</p>
                                    <p>Les frais professionnels sont plafonn&eacute;s &agrave; 30.000 Dh/an. (2500Dh/
                                        mois)</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>&ndash; Les cotisations CNSS</p>
                                </td>
                                <td>
                                    <p>Cot. CNSS = SBI * 4,29% (plafond de 3.088,8 Dh/an)</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>&ndash; Les cotisations retraite compl&eacute;mentaire</p>
                                </td>
                                <td>
                                    <p>Plafonn&eacute;es &agrave; 6% du SBI</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>&ndash; Les cotisations AMO</p>
                                </td>
                                <td>
                                    <p>2% de SBI pour le secteur priv&eacute;, 2,5% de SBI pour le secteur public.</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>&ndash; Les int&eacute;r&ecirc;ts r&eacute;mun&eacute;rant l&rsquo;emprunt
                                        contract&eacute; pour construire ou acqu&eacute;rir son logement affect&eacute;
                                        &agrave; son habitation principale</p>
                                </td>
                                <td>
                                    <p>S&rsquo;il s&rsquo;agit d&rsquo;un logement &eacute;conomique dont le prix ne
                                        d&eacute;passe pas 250.000 Dh : on d&eacute;duit toute la traite bancaire, aussi
                                        bien les int&eacute;r&ecirc;ts que l&rsquo;amortissement du principal.</p>
                                    <p>S&rsquo;il s&rsquo;agit d&rsquo;un logement non &eacute;conomique on
                                        d&eacute;duit seulement les int&eacute;r&ecirc;ts dans la limite de 10% du SBI.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><strong>= Salaire Net Imposable (SNI)</strong></p>
                                </td>
                                <td>
                                    <p><strong>SNI = SBI &ndash; les d&eacute;ductions pr&eacute;c&eacute;demment
                                            d&eacute;crites</strong></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <h5>3. COMMENT FIXER LA R&Eacute;MUN&Eacute;RATION DU DIRIGEANT&nbsp;<strong>?</strong></h5>
                    <p>De nombreux dirigeants qui sont associ&eacute;s de leur entreprise se posent la question de la
                        forme que doit prendre leur salaire : celle d&rsquo;une <strong>r&eacute;mun&eacute;ration
                            mensuelle </strong>au m&ecirc;me titre qu&rsquo;un salari&eacute; ou celle</p>
                    <p>de <strong>dividendes </strong>issus des b&eacute;n&eacute;fices nets de l&rsquo;entreprise ?</p>
                    <p>La r&eacute;ponse d&eacute;pend largement de la situation de l&rsquo;entreprise, de la situation
                        personnelle du dirigeant et de ses objectifs. Il n&rsquo;existe donc <strong>pas de
                            r&eacute;ponse toute faite</strong>. Voici toutefois quelques <strong>pistes de</strong></p>
                    <p><strong>r&eacute;flexion </strong>pour aider &agrave; arbitrer entre la
                        r&eacute;mun&eacute;ration, les dividendes ou &agrave; la fois la r&eacute;mun&eacute;ration et
                        les dividendes.</p>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>&nbsp;</td>
                                <td colspan="2">
                                    <p><strong>Impact pour le Dirigeant</strong></p>
                                </td>
                                <td colspan="2">
                                    <p><strong>Impact pour l&rsquo;Entreprise</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <p><strong>Avantages</strong></p>
                                </td>
                                <td>
                                    <p><strong>Inconv&eacute;nients</strong></p>
                                </td>
                                <td>
                                    <p><strong>Avantages</strong></p>
                                </td>
                                <td>
                                    <p><strong>Inconv&eacute;nients</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><strong>La r&eacute;mun&eacute;ratio n</strong></p>
                                </td>
                                <td>
                                    <p>Couverture sociale</p>
                                    <p>Garantie de recevoir un paiement mensuel (m&ecirc;me si l&rsquo;entreprise ne
                                        fait pas de b&eacute;n&eacute;fices)</p>
                                    <p>Avantages tels que retraite, assurances&hellip;e tc.</p>
                                </td>
                                <td>&nbsp;</td>
                                <td>
                                    <p>D&eacute;ductions fiscales tir&eacute;es de la r&eacute;mun&eacute;ration et des
                                        avantages li&eacute;s : diminue le montant &agrave; payer au titre de l&rsquo;IS
                                    </p>
                                </td>
                                <td>
                                    <p>Impact de la r&eacute;mun&eacute;ration sur les r&eacute;sultats de
                                        l&rsquo;entreprise (r&eacute;mun&eacute;ration = charge suppl&eacute;mentaire)
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <p><strong>Avantages</strong></p>
                                </td>
                                <td>
                                    <p><strong>Inconv&eacute;nients</strong></p>
                                </td>
                                <td>
                                    <p><strong>Avantages</strong></p>
                                </td>
                                <td>
                                    <p><strong>Inconv&eacute;nients</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><strong>Les dividendes</strong></p>
                                </td>
                                <td>
                                    <p>Taux d&rsquo;imposition plus avantageux par rapport &agrave; la
                                        r&eacute;mun&eacute;ration (en g&eacute;n&eacute;ral 15%)</p>
                                    <p>Retenue fiscale lib&eacute;ratoire de l&rsquo;imp&ocirc;t sur le revenu</p>
                                </td>
                                <td>
                                    <p>D&eacute;pendance vis- &agrave;-vis des r&eacute;sultats de l&rsquo;entreprise :
                                        il n&rsquo;y a dividendes que si l&rsquo;entreprise fait des
                                        b&eacute;n&eacute;fices</p>
                                    <p>Temps : obligation d&rsquo;attendre l&rsquo;approbation des comptes de
                                        l&rsquo;exercice avant de recevoir les dividendes</p>
                                </td>
                                <td>
                                    <p>All&egrave;gement des charges de l&rsquo;entreprise, donc am&eacute;lioration des
                                        r&eacute;sultats</p>
                                </td>
                                <td>&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>Dans la pratique, de nombreux dirigeants optent pour un <strong>mix entre
                            r&eacute;mun&eacute;ration et dividendes </strong>afin de b&eacute;n&eacute;ficier en partie
                        des avantages de chaque cat&eacute;gorie. Ce mix d&eacute;pend de chaque individu et situation.
                        Dans cette optique, il est &agrave; noter qu&rsquo;une r&eacute;mun&eacute;ration de
                        l&rsquo;ordre de 6 000 DHS net permet g&eacute;n&eacute;ralement de b&eacute;n&eacute;ficier
                        enti&egrave;rement des avantages de la CNSS.</p>
                    <p>Deux cas de figure peuvent s&rsquo;appliquer selon le statut du dirigeant en ce qui concerne son
                        niveau de r&eacute;mun&eacute;ration :</p>
                    <ul>
                        <li>Le dirigeant a un <strong>statut de salari&eacute; </strong>: la r&eacute;mun&eacute;ration
                            est fix&eacute;e par contrat, comme pour tout salari&eacute;</li>
                        <li>Le dirigeant a un <strong>mandat social de g&eacute;rant </strong>: la
                            r&eacute;mun&eacute;ration est fixer par un PV de l&rsquo;assembl&eacute;e</li>
                    </ul>
                    <p>&nbsp;</p>
                    <h5>4. COMMENT &Eacute;TABLIR UNE FICHE DE PAIE ?</h5>
                    <p>L&rsquo;&eacute;dition d&rsquo;un bulletin de paie doit r&eacute;pondre &agrave; un certain
                        nombre de <strong>r&egrave;gles l&eacute;gales </strong>et correspondre &agrave; un certain
                        <strong>formalisme pr&eacute;&eacute;tabli</strong>. En cas de non-respect de ces r&egrave;gles,
                        vous vous exposez &agrave; des risques l&eacute;gaux de la part de l&rsquo;administration ou de
                        vos salari&eacute;s.</p>
                    <p><strong>Bon &agrave; savoir </strong>: <strong>Si votre entreprise ne dispose pas de service
                            d&eacute;di&eacute; &agrave; la gestion de la paie, c&rsquo;est en g&eacute;n&eacute;ral
                            votre fiduciaire/comptable qui &eacute;tablit les fiches de paie</strong>.</p>
                    <p>N&eacute;anmoins, voici quelques informations fondamentales &agrave; avoir en t&ecirc;te pour
                        challenger l&rsquo;&eacute;dition du bulletin de paie par votre fiduciaire/comptable :</p>
                    <p>Mentions obligatoires</p>
                    <ul>
                        <li><strong>Identification de l&rsquo;employeur </strong>(nom, adresse, num&eacute;ro de
                            s&eacute;curit&eacute; sociale, n&deg; registre de commerce et identifiant fiscal)</li>
                        <li><strong>Identification du salari&eacute; </strong>(matricule, nom + pr&eacute;nom, fonction
                            occup&eacute;e, date d&rsquo;entr&eacute;e, salaire de base, n&deg; s&eacute;curit&eacute;
                            sociale)</li>
                        <li><strong>Dur&eacute;e de travail effectu&eacute;e </strong>: nombre de jours de
                            travaill&eacute;s, nombre d&rsquo;heures travaill&eacute;es (avec une distinction entre
                            heures normales et heures suppl&eacute;mentaires) et cong&eacute;s pay&eacute;s</li>
                        <li><strong>&Eacute;l&eacute;ments constitutifs de la r&eacute;mun&eacute;ration brute
                            </strong>: les salaires de base (horaire / mensuel), les &eacute;l&eacute;ments obligatoires
                            (exemple : prime d&rsquo;anciennet&eacute;, cong&eacute;s pay&eacute;s) et les
                            &eacute;l&eacute;ments accessoires du salaire (exemple : prime de panier, prime de
                            transport&hellip;)</li>
                        <li><strong>Le d&eacute;tail des cotisations sociales </strong>: des pr&eacute;l&egrave;vements
                            sociaux (CNSS, AMO, IPE, Retraite, Mutuelle&hellip;)</li>
                        <li><strong>Le d&eacute;tail des pr&eacute;l&egrave;vements fiscaux montant </strong>(IR &ndash;
                            Imp&ocirc;t sur le revenu, CSS &ndash; Contribution sociale de solidarit&eacute;&hellip;)
                        </li>
                        <li>Le net &agrave; payer au salari&eacute; et son mode de paiement</li>
                        <li><strong>La p&eacute;riode de paie Rappels juridiques</strong></li>
                        <li>SMIG horaire en 2021 : 14,81 dhs / heure (soit 2828,71 dhs / mois) Valable pour tout le
                            secteur Priv&eacute; hors Agriculture</li>
                        <li>Dur&eacute;e l&eacute;gale de travail : 44 heures / semaine</li>
                        <li>Repos obligatoire : 1 jour / semaine</li>
                        <li>Les heures suppl&eacute;mentaires sont major&eacute;es de 25% &agrave; 100% par rapport aux
                            heures normales selon le jour de la semaine et l&rsquo;horaire</li>
                    </ul>
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
                    <a href="{{(asset('g-rer-ses-ressources-humaines/etablir-un-contrat-de-travail'))}}">
                        <button class="next_btn">Suivante</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
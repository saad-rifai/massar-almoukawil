@section('title', 'Quel régime de retraite choisir')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">
                <br>
                <br>
                <div class="section-title-br">
                    <h1>Quel régime de retraite choisir</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">

                    <h5>1. QUEL SYST&Egrave;ME DE RETRAITE CHOISIR POUR MES SALARI&Eacute;S ?</h5>
                    <p>La CNSS garantit &agrave; vos salari&eacute;s une <strong>retraite de base </strong>qui d&eacute;pend de son anciennet&eacute; et de son salaire. N&eacute;anmoins, le montant de cette pension est plafonn&eacute; &agrave; 4200 dhs/mois (montant per&ccedil;u par les salari&eacute;s ayant un salaire sup&eacute;rieur &agrave; 6000 dhs/mois en fin de carri&egrave;re et ayant cotis&eacute; pendant plus de 20 ans). Cette retraite de base s&rsquo;av&egrave;re <strong>souvent insuffisante.</strong></p>
                    <p>Beaucoup d&rsquo;entreprises choisissent donc de compl&eacute;ter la retraite de leurs salari&eacute;s par <strong>un syst&egrave;me compl&eacute;mentaire</strong>. Vous avez, pour cela, 3 possibilit&eacute;s :</p>
                    <ul>
                    <li>Passer par la CIMR (retraite par r&eacute;partition) ;</li>
                    <li>Passer par une compagnie d&rsquo;assurance priv&eacute;e (retraite par capitalisation) ;</li>
                    <li>Cumuler les deux premi&egrave;res</li>
                    </ul>
                    <h5>2. COMMENT FONCTIONNE LA CIMR ?</h5>
                    <p><strong>La Caisse Interprofessionnelle Marocaine des Retraites (CIMR) </strong>est une caisse de retraite qui g&egrave;re les pensions sur le mode de la retraite par r&eacute;partition.</p>
                    <p>Comment calculer le montant de la cotisation ? La cotisation &agrave; la CIMR se compose de deux parts :</p>
                    <ul>
                    <li><strong>Une part salariale </strong>qui est pr&eacute;lev&eacute;e &agrave; la source, c&rsquo;est-&agrave;-dire directement sur le salaire brut de votre employ&eacute; ;</li>
                    <li><strong>Une part patronale </strong>: qui est &agrave; votre charge.</li>
                    </ul>
                    <p>Vous trouverez ci-contre l&rsquo;ensemble des couples part patronale/part salariale possibles pour d&eacute;finir le taux de cotisation de votre salari&eacute; &agrave; la CIMR :</p>
                    <p>Pourcentage de la partie de salaire sup&eacute;rieure au plafond vers&eacute; en contribution</p>
                    <p>&nbsp;</p>
                    <table class="table">
                    <tbody>
                    <tr>
                    <td>
                    <p><strong><em>Part salariale</em></strong></p>
                    </td>
                    <td>
                    <p><strong><em>Part patronale</em></strong></p>
                    </td>
                    </tr>
                    <tr>
                    <td>
                    <p>&nbsp;</p>
                    <p>3%</p>
                    </td>
                    <td>
                    <p>&nbsp;</p>
                    <p>3,9%</p>
                    </td>
                    </tr>
                    <tr>
                    <td>
                    <p>&nbsp;</p>
                    <p>3,75%</p>
                    </td>
                    <td>
                    <p>&nbsp;</p>
                    <p>4,88%</p>
                    </td>
                    </tr>
                    <tr>
                    <td>
                    <p>&nbsp;</p>
                    <p>4,50%</p>
                    </td>
                    <td>
                    <p>&nbsp;</p>
                    <p>5,85%</p>
                    </td>
                    </tr>
                    <tr>
                    <td>
                    <p>&nbsp;</p>
                    <p>5,25%%</p>
                    </td>
                    <td>
                    <p>&nbsp;</p>
                    <p>6,83%</p>
                    </td>
                    </tr>
                    <tr>
                    <td>
                    <p>&nbsp;</p>
                    <p>6%</p>
                    </td>
                    <td>
                    <p>&nbsp;</p>
                    <p>7,8%</p>
                    </td>
                    </tr>
                    </tbody>
                    </table>
                    <p>Avec la CIMR, les faibles revenus ont la garantie de percevoir une retraite comparable &agrave; ce qu&rsquo;ils per&ccedil;oivent &agrave; la fin de leur carri&egrave;re, ce qui n&rsquo;est pas le cas pour les hauts revenus. Vous trouverez ci-contre un tableau indiquant le montant de la pension de vos salari&eacute;s en fonction du salaire brut per&ccedil;u en fin de carri&egrave;re.</p>
                    <p>Le tableau ci-dessous consid&egrave;re le cas d&rsquo;un salari&eacute; pr&eacute;sentant les caract&eacute;ristiques suivantes: d&eacute;part en retraite &agrave; 60 ans, dur&eacute;e de cotisation de 30 ans, cotisation &agrave; un taux de 6% (attention : ce taux n&rsquo;est pas toujours repr&eacute;sentatif, en particulier pour les petits salaires)</p>
                    <p><strong>Simulation du montant de la retraite CIMR</strong></p>
                    <table class="table">
                    <tbody>
                    <tr>
                    <td>
                    <p>&nbsp;</p>
                    <p><strong><em>Dernier salaire mensuel brut avant la retraite (en</em></strong></p>
                    </td>
                    <td>
                    <p>&nbsp;</p>
                    <p><strong><em>Retraite mensuelle estim&eacute;e</em></strong></p>
                    </td>
                    </tr>
                    </tbody>
                    </table>
                    <table class="table">
                    <tbody>
                    <tr>
                    <td>
                    <p>&nbsp;</p>
                    <p><strong><em>DH/mois)</em></strong></p>
                    </td>
                    <td>
                    <p>&nbsp;</p>
                    <p><strong><em>En DH/ mois</em></strong></p>
                    </td>
                    <td>
                    <p>&nbsp;</p>
                    <p><strong><em>En % du salaire brut</em></strong></p>
                    </td>
                    </tr>
                    <tr>
                    <td>
                    <p>&nbsp;</p>
                    <p>3000</p>
                    </td>
                    <td>
                    <p>&nbsp;</p>
                    <p>3540</p>
                    </td>
                    <td>
                    <p>&nbsp;</p>
                    <p>118%</p>
                    </td>
                    </tr>
                    <tr>
                    <td>
                    <p>&nbsp;</p>
                    <p>7000</p>
                    </td>
                    <td>
                    <p>&nbsp;</p>
                    <p>7210</p>
                    </td>
                    <td>
                    <p>&nbsp;</p>
                    <p>103%</p>
                    </td>
                    </tr>
                    <tr>
                    <td>
                    <p>&nbsp;</p>
                    <p>15000</p>
                    </td>
                    <td>
                    <p>&nbsp;</p>
                    <p>11050</p>
                    </td>
                    <td>
                    <p>&nbsp;</p>
                    <p>74%</p>
                    </td>
                    </tr>
                    <tr>
                    <td>
                    <p>&nbsp;</p>
                    <p>30000</p>
                    </td>
                    <td>
                    <p>&nbsp;</p>
                    <p>18250</p>
                    </td>
                    <td>
                    <p>&nbsp;</p>
                    <p>61%</p>
                    </td>
                    </tr>
                    </tbody>
                    </table>
                    <p>&nbsp;</p>
                    <h5>3. QUELS SONT LES POINTS DE VIGILANCE &Agrave; OBSERVER AVEC LA CIMR ?</h5>
                    <p>Il faudra faire attention, <strong>car quitter la CIMR entra&icirc;ne des p&eacute;nalit&eacute;s </strong>:</p>
                    <ul>
                    <li>Du point de vue de l&rsquo;entreprise, il faut payer une amende &eacute;quivalente &agrave; 5 ans de cotisation ;</li>
                    <li>Du point de vue du salari&eacute;, la part patronale est</li>
                    </ul>
                    <p>Vous pouvez &eacute;galement souscrire une assurance priv&eacute;e en plus ou &agrave; la place de la CIMR pour la retraite de vos salari&eacute;s. Ces assurances fonctionnent sur le mode de la capitalisation. Autrement dit, dans ce cas, la cotisation est investie dans des placements financiers et le salari&eacute; re&ccedil;oit les fruits de ce placement lors de son d&eacute;part en retraite. La rente per&ccedil;ue d&eacute;pendra du montant qu&rsquo;il aura choisi de cotiser et de la dur&eacute;e de cotisation.</p>
                    <p>Illustration</p>
                    <p>Si vous cotisez 1500 dhs pendant 30 ans &agrave; un taux de rendement de 5%, vous percevrez lors de votre retraite une rente mensuelle de 8337 dhs/mois (source : simulateur Wafa Assurance).</p>
                    <p>Il y a deux types de contrats propos&eacute;s :</p>
                    <ul>
                    <li>Des contrats entreprises : le contrat est souscrit par l&rsquo;entreprise pour l&rsquo;ensemble de ses salari&eacute;s</li>
                    <li>Des contrats individuels : le salari&eacute; souscrit pour lui-m&ecirc;me</li>
                    </ul>
                    <p><strong>Bon &agrave; savoir </strong>: Retrouvez les r&eacute;ponses &agrave; toutes vos questions sur la CIMR sur leur site : <a href="https://www.cimr.ma/aide-faq/" target="_blank" rel="noopener">CIMR, Caisse</a> <a href="https://www.cimr.ma/aide-faq/" target="_blank" rel="noopener">interprofessionnelle marocaine de retraite, Aide &amp; FAQ</a></p>
                </div>
                <br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('g-rer-ses-ressources-humaines/motiver-et-garder-ses-talents'))}}">
                    <button class="previous_btn">Précédente</button>
                </a>
            </div>
            <div class="col">

                <div class="next-btn-box">
                    <a href="{{(asset('g-rer-ses-ressources-humaines/quelle-assurance-pour-mes-salaris'))}}">
                        <button class="next_btn">Suivante</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
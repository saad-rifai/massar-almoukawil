@section('title', ' Pourquoi élaborer des prévisions financières ?')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')
        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>Pourquoi élaborer des prévisions financières ?</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">

                    <p>Une fois d&eacute;fini votre business model, vous devrez v&eacute;rifier la faisabilit&eacute;
                        financi&egrave;re de votre projet. Votre pr&eacute;visionnel financier vous permettra de
                        d&eacute;terminer <strong>vos objectifs de chiffre d&rsquo;affaires </strong>compte tenu des
                        moyens que vous mettrez en &oelig;uvre. Il est important de pouvoir traduire cela en chiffres et
                        s&rsquo;assurer ainsi de la <strong>viabilit&eacute; </strong>et de la
                        <strong>rentabilit&eacute; </strong>de votre projet. Cette &eacute;tape est d&rsquo;autant plus
                        cruciale si vous comptez faire appel &agrave; des financements ext&eacute;rieurs.</p>
                    <p>Gr&acirc;ce &agrave; votre &eacute;tude de march&eacute;, vous aurez d&eacute;j&agrave;
                        r&eacute;colt&eacute; des informations utiles pour alimenter ces pr&eacute;visions. La
                        <strong>d&eacute;marche est it&eacute;rative</strong>, au fur et &agrave; mesure de votre
                        r&eacute;flexion pour aller &eacute;valuer d&rsquo;une part vos diff&eacute;rentes options et
                        leurs implications en termes financiers, et d&rsquo;autre part vos possibilit&eacute;s de
                        ressources et de financement.</p>
                    <p>Afin de convaincre vos futurs partenaires commerciaux et financiers, notamment les banques, vous
                        devrez &eacute;tablir ces pr&eacute;visions qui figurent par ailleurs dans votre business plan.
                        Elles vous permettront d&rsquo;estimer le revenu net que vous pourrez percevoir selon vos
                        diff&eacute;rentes hypoth&egrave;ses de rentabilit&eacute;.</p>
                    <p>Votre pr&eacute;visionnel financier doit vous permettre <strong>d&rsquo;anticiper les
                            &eacute;carts de tr&eacute;sorerie </strong>que vous risquez de rencontrer et
                        d&rsquo;envisager rapidement les meilleurs moyens de financement : apports personnels, emprunts
                        bancaires, ouverture du capital, etc.</p>
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
                    <a 
                        href="{{(asset('financer-son-projet/comment-r-aliser-un-pr-visionnel-financier'))}}">
                        <button class="next_btn">Suivante</button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @include('assets.footer')
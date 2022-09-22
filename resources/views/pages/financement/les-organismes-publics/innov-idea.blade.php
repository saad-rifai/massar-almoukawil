@section('title', 'INNOV IDEA')
@section('description', "  Sont finançables par la subvention, les dépenses couvrant forfaitairement les divers frais liés au projet innovant et engagés par la cible éligible (frais liés à la souscription d’une assurance, frais de déplacements, frais de communication, d’abonnement à des bases de données…).
Sont également finançables toutes autres dépenses nécessaires à l’accompagnement de la cible éligible (frais de location, assistance, formation…) auprès d’une structure labéllisée par la SNGFE.
")

@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body">

                <br>
                <br>
                <div class="section-title-br">
                    <h1>INNOV IDEA</h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Description 
                    </h2>
                    <p class="section_normale_text">
                        Sont finançables par la subvention, les dépenses couvrant forfaitairement les divers frais liés au projet innovant et engagés par la cible éligible (frais liés à la souscription d’une assurance, frais de déplacements, frais de communication, d’abonnement à des bases de données…).
                        Sont également finançables toutes autres dépenses nécessaires à l’accompagnement de la cible éligible (frais de location, assistance, formation…) auprès d’une structure labéllisée par la SNGFE.
                        
                    </p>
                </div>

                <div class="text-containet">
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">
                                Cible
                            </h2>
                            <p>
                                
                                Porteur de projet ou entreprise nouvellement créée, dont la candidature a été validée par une structure labellisée par la SNGFE et souhaitant démontrer le potentiel et la faisabilité de son projet basé sur une idée innovante (nouveau produit, nouveau process, mise en exploitation de brevets acquis et non commercialisés initialement, adaptation d’une technologie innovante au marché marocain…). 
                            </p>
                     
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">
                                Critères d’éligibilité
                            </h2>
                            <p class="section_normale_text">
                                Non
                            </p>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title"> Plafond de financement </h2>
                            <p>
                                Le financement est octroyé sous forme d’une subvention plafonnée à : <br> <br>
- 100.000 DH par porteur de projet. <br>
- 200.000 DH en cas d’entreprise constituée par deux ou plusieurs associés.

                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">Modalités de remboursement </h2>
                            <p class="section_normale_text">
                                Jusqu’à 12 ans dont un différé pouvant atteindre 5 ans.
                                

                            </p>
                        </div>
                    </div>
                    <br>

                    <br>
                    <div class="row">
                        <div class="col">
                            <h2 class="blue-section-title">Conditions de garanties </h2>
                            <p class="section_normale_text">
                                Le financement est conditionné par la conclusion d’une convention d’accompagnement entre la cible éligible et la structure labélisée.

                            </p>
                        </div>
                        <div class="col">
                            <h2 class="blue-section-title">Coût du financement / de l’opération</h2>
                            <p class="section_normale_text">
                                Néant
                                

                            </p>
                        </div>
                 

   
                    </div>
                    
                    <br>
                    
                    <h2 class="blue-section-title">
                        Contact
                    </h2>
                    <p class="section_normale_text"> <a href="{{asset('contacts/organismes-public')}}">voir liste des
                            contacts <i class="fas fa-external-link"></i></a>

                          
                    </p>

                </div>
                <br>
                <hr class="section_hr">

                <div class="text-containet text-center">
                    <a href="https://ccg.ma/fr/votre-projet/innov-idea" target="_blanck">
                        <button class="lg-btn-produit"><i class="las la-external-link-alt"></i> Visitez le site Web</button>
                    </a>
                </div>
                <br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a href="{{(asset('financement/les-organismes-publics/ligne-franaise'))}}">
                    <button class="previous_btn">ligne franaise</button>
                </a>
            </div>
            <div class="col">
                <div class="next-btn-box">
                    <a href="{{(asset('/financement/les-organismes-publics/innov-start'))}}">
                        <button class="next_btn">INNOV START</button>
                    </a>
                </div>

            </div>
        </div>
        <hr>
        @include('assets.footer')
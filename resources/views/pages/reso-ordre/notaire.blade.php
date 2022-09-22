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
                    Conseil National de l’Ordre des 
Notaires du Maroc

                    </h1>
                </div>
                <br>
                <br>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Présentation
                    </h2>
                    <p class="section_normale_text">
                    Le Conseil national des notaires est le seul organe habilité à s’exprimer au nom de la profession notariale ; il la représente 
auprès de l’administration et donne son avis sur les questions qui lui sont soumises par l’administration relatives à 
l’exercice en général de la profession. Le Conseil national des notaires crée par la suite un conseil régional des notaires 
qui est créé dans le ressort d’une ou plusieurs cours d’appel lorsque le nombre de notaires exerçant dans ledit ressort est 
au moins égal à trente (30). Si le nombre des notaires est inférieur à 30, ils seront rattachés au conseil régional le plus 
proche.
                    </p>
                </div>

                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Services
                    </h2>
                    <ul>
                        <li>Veiller à l’exécution des décisions du Conseil national ;</li>
<li>Examiner les problèmes à caractère régional entravant la profession et les soumettre, le cas échéant, à l’examen 
du Conseil national ;</li>
<li>Encadrer et représenter la profession à l’échelle régionale ;</li>
<li>Mener des opérations de contrôle des études notariales.</li>

                    </ul>

                </div>
                <div class="text-containet">
                    <h2 class="blue-section-title">
                        Démarches
                    </h2>
                    <p class="section_normale_text">
                    Tout candidat à la profession de notaire doit remplir les conditions suivantes :
                    </p>
                    <ul>
                        <li>être marocain, sous réserve des incapacités spéciales prévues par le code de la nationalité marocaine ;</li>
                        <li>être âgé de 23 années grégoriennes révolues, à condition de ne pas dépasser 45 ans, à l'exception des catégories 
citées à l'article 8 ci-dessous ;</li>
<li>être titulaire d'une licence en droit délivrée par une faculté de droit marocaine ou d'un diplôme reconnu équivalent ;
</li>
<li>jouir de ses droits civiques et civils, être de bonne moralité et avoir de bonnes moeurs ;
</li>
<li>jouir de l'aptitude requise pour exercer la profession de notaire attestée par un certificat médical délivré par les 
services de la santé relevant du secteur public ;</li>
<li>n'avoir pas été condamné pour un crime ou un délit, à l'exception des délits involontaires, même en cas de 
réhabilitation ;
</li>
<li>ne pas faire l'objet, dans le cadre de la fonction publique ou des professions libérales, d'une sanction définitive, 
disciplinaire ou administrative de destitution, de radiation, de révocation, de mise à la retraite ou de retrait de 
l'agrément ou de l'autorisation ;</li>
<li>ne pas faire l'objet, dans le cadre de la fonction publique ou des professions libérales, d'une sanction définitive, 
disciplinaire ou administrative de destitution, de radiation, de révocation, de mise à la retraite ou de retrait de 
l'agrément ou de l'autorisation ;</li>
<li>ne pas faire l'objet, dans le cadre de la fonction publique ou des professions libérales, d'une sanction définitive, 
disciplinaire ou administrative de destitution, de radiation, de révocation, de mise à la retraite ou de retrait de 
l'agrément ou de l'autorisation ;</li>
<li>ne pas faire l'objet, dans le cadre de la fonction publique ou des professions libérales, d'une sanction définitive, 
disciplinaire ou administrative de destitution, de radiation, de révocation, de mise à la retraite ou de retrait de 
l'agrément ou de l'autorisation ;</li>
                       
                    </ul>
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
                                                                    <a href="tel:05 37 56 44 60/61 ">05 37 56 44 60/61


                                                                    </a>
                                                             
                                                                </li>
                                                                
                                        
                                        <li><span class="section_normale_contact_list_icon"><i
                                                    class="las la-map-marker position-absolute top-50 start-50 translate-middle"></i></span>
                                                    40, Av Al Melia Hay Ryad, Rabat


                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col">

                        </div>

                    </div>

                </div>
                <hr class="section_hr">
                <div class="text-containet text-center">
                    <a href="https://www.facebook.com/NotairesduMaroc/" target="_blanck">
                        <button class="lg-btn-produit"><i class="las la-external-link-alt"></i> Visitez le site
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
                <a href="{{(asset('/reso-ordre/avocat'))}}">
                    <button class="previous_btn">Ordre des Avocats de Tanger </button>
                </a>
            </div>
            <div class="col">

            </div>
        </div>
        <hr>
        @include('assets.footer')
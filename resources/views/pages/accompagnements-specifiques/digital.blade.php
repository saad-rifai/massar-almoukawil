@section('title', 'Accompagnement digital')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <div class="container-body ">
                <h3 class="title-form">Formulaire de la partie accompagnament digital</h3>
                <div class="container1">
                    <form>
                        <fieldset>
                            <div class="full_name">
                                <div class="box">
                                    <label class=" blue-section-title">Nom :</label>
                                    <input type="text" class="form-input w-100" placeholder="Nom"/>
                                </div>
                                <div  class="box">
                                    <label class="blue-section-title">Prénom :</label>
                                    <input type="text" class="form-input w-100" placeholder="Prénom"/>
                                </div>
                            </div>
                            <div class="box">
                                <label class=" blue-section-title">Nom de société / Projet :</label>
                                <input type="text" class="form-input w-100" placeholder="Nom de société / Projet"/>
                            </div>                          
                            <div  class="box">
                                <label class="blue-section-title">Secteur d'activité :</label>
                                <select class="select-input">
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div  class="box">
                                <label class="blue-section-title">Type Juridique :</label>
                                <select class="select-input">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div  class="box">
                                <label class="blue-section-title">Nombre d'employés :</label>
                                <input type="number" class="form-input" placeholder="Nombre d'employés"/>
                            </div>
                            <div  class="box">
                                <label class="blue-section-title">Adresse :</label>
                                <input type="text" class="form-input" placeholder="Adresse" />
                            </div>
                            <div  class="box">
                                <label class="blue-section-title">Ville :</label>
                                <input type="text" class="form-input" placeholder="Ville"/>
                            </div>
                            <div  class="box">
                                <label class="blue-section-title">Montant du chiffre d'affaires annuel :</label>
                                <input type="number" placeholder="Montant du chiffre d'affaires annuel" class="form-input"/>
                            </div>
                            <div  class="box">
                                <label class="blue-section-title">Description du besion specifque :</label>
                                <textarea class="form-textarea" placeholder="Description du besion specifque"></textarea>
                            </div>
                            <div  class="box_btn">
                                <input type="submit" value="valider" class="btn_valider"/>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <br>
            </div>
        </div>
        <br>

        <hr>
        @include('assets.footer')
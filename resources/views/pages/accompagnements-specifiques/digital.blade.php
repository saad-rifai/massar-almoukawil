@section('title', 'Accompagnement digital')
@include('assets.head')

<body>
    <div class="container-lg">
        @include('assets.navbar')

        <div class="body_card mt-5 mb-5">
            <br>
            <br>
            <div class="container-body ">
                <div class="section-title-br mb-5">
                    <h1>
                        Formulaire de la partie accompagnament digital


                    </h1>
                </div>
                <div class="container1">

                    <form class="form-container">
                        <div class="row row-cols-1 mx-auto justify-content-center">
                            <div class="col-sm mb-3 ">
                                <label class=" form-label">Nom :</label>
                                    <input type="text" class="form-control " placeholder="Nom" autofocus/>
                            </div>
                            <div class="col-sm mb-3 ">
                                <label class="form-label">Prénom :</label>
                                <input type="text" class="form-control" placeholder="Prénom"/>
                            </div>
                            <div class="col mb-3">
                                <label class=" form-label">Nom de société / Projet :</label>
                                <input type="text" class="form-control " placeholder="Nom de société / Projet"/>
                            </div>
                            <div class="col-sm mb-3">
                                <label class="form-label">Secteur d'activité :</label>
                                <select class="form-select">
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="col-sm mb-3">
                                <label class="form-label">Type Juridique :</label>
                                <select class="form-select">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="col mb-3">
                                <label class="form-label">Nombre d'employés :</label>
                                <input type="number" class="form-control" placeholder="Nombre d'employés"/>
                            </div>
                            <div class="col mb-3">

                                <label class="form-label">Adresse :</label>
                                <input type="text" class="form-control" placeholder="Adresse" />
                            </div>
                            <div class="col mb-3">
                                <label class="form-label">Ville :</label>
                                <input type="text" class="form-control" placeholder="Ville"/>

                            </div>
                            <div class="col mb-3">
                                <label class="form-label">Montant du chiffre d'affaires annuel :</label>
                                <input type="number" placeholder="Montant du chiffre d'affaires annuel" class="form-control"/>

                            </div>
                            <div class="col mb-3">
                                <label class="form-label">Description du besion specifque :</label>
                                <textarea class="form-control" rows="3" placeholder="Description du besion specifque"></textarea>

                            </div>
                            <div class="col mb-3 mt-4 text-right">
                                <button type="submit" value="" class="btn_valider">envoyer</button>
                            </div>
                        </div>
                
                    </form>
                </div>
                <br>
            </div>
        </div>
        <br>

        <hr>
        @include('assets.footer')
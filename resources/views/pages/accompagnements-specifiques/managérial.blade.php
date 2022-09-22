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
                    <h1>Conexion</h1>
                </div>
                <form class="form-login">
                    <label for="inputEmail" class="form-label">Adresse Email:</label>
                    <input type="email" id="inputEmail"class="form-control mb-2"placeholder="Adresse Email"required autofocus>
                    <label for="inputPassword" class="form-label">Mot de passe:</label>
                    <input type="password" id="inputPassword" class="form-control mb-2" placeholder="Mot de passe" required >
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <div class="col mb-2 mt-4 text-right box-btn">
                        <button type="submit" value="" class="btn_valider">Conexion</button>
                    </div>
                </form>
               
                <br>
            </div>
        </div>
        <br>

        <hr>
        @include('assets.footer')
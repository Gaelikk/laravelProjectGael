@extends('modal')
@section('content')
    <div class="container d-flex justify-content-center mt-5">
        <div class="col-6 bg-light border rounded">
            <div class="row p-2">
                <h2 class="text-center my-2">Nou Usuari</h2>
                <form method="post" action="{{url("/users/createSend")}}">
                    @csrf
                    <div class="form-group">
                        <label>Nom</label>
                        <input class="form-control" id="usernameName" name="name" type="text">
                        <h6 class="text-danger"></h6>
                    </div>
                    <div class="form-group">
                        <label>Cognom</label>
                        <input class="form-control" id="usernameSurname" name="surname" type="text">
                        <h6 class="text-danger"></h6>
                    </div>
                    <div class="form-group">
                        <label>Mail</label>
                        <input class="form-control" id="usernameEmail" name="email" type="text">
                        <h6 class="text-danger"></h6>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" id="usernameRegister" name="username" type="text">
                        <h6 class="text-danger"></h6>
                    </div>
                    <div class="form-group">
                        <label>Contrasenya</label>
                        <input class="form-control" id="passwordRegister" name="password" type="text">
                        <h6 class="text-danger"></h6>
                    </div>
                    <button class="btn btn-primary" type="submit">Registar</button>
                    <span><a class="btn btn-danger" href={{url('/users')}} type="button">Cancelar</a></span>
                </form>
            </div>
        </div>
    </div>
@endsection

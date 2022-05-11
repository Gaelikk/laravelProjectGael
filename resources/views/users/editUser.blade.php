@extends('modal')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container d-flex justify-content-center mt-5">
        <div class="col-5 bg-light border rounded">
            <div class="row p-3">
                <h2 class="text-center my-2">Edita Usuari</h2>
                <form method="post" action="{{url("/users/editSend/$user->id")}}">
                    @csrf
                    <div class="form-group">
                        <h5>Nom</h5>
                        <input class="form-control" id="gameName" name="name" type="text" value="{{$user->name}}"><br>
                    </div>
                    <div class="form-group">
                        <h5>Cognom</h5>
                        <input class="form-control" id="usernameSurname" name="surname" type="text"
                               value="{{$user->surname}}"><br>
                    </div>
                    <div class="form-group">
                        <h5>Email</h5>
                        <input class="form-control" type="email" id="usernameEmail" name="email"
                               value="{{$user->email}}"
                               placeholder="EMAIL"><br>
                    </div>
                    <div class="form-group">
                        <h5>Username</h5>
                        <input class="form-control" type="text" id="usernameRegister" name="username"
                               value="{{$user->username}}"><br>
                    </div>
                    <div class="form-group">
                        <h5>Contrasenya</h5>
                        <input class="form-control" type="password" id="passwordRegister" name="password"
                               value="{{$user->password}}" placeholder="PASSWORD"><br><br>
                    </div>
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <span><a class="btn btn-danger" href={{url('/userList')}} type="button">Cancelar</a></span>
                </form>
            </div>
        </div>
@endsection

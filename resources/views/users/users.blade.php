@extends('modal')
@section('content')
    <div class="container">
    <h1 class="text-center my-5">Llista d'usuaris</h1>
        <table class="table table-dark table-bordered">
            <tr class="thead-dark">
                <th>Nom i Cognom</th>
                <th>Email</th>
                <th>Nom d'usuari</th>
                <th>Contrasenya</th>
                <th><a class="btn btn-success float-lg-end" href={{url('/users/newUser')}}>Crear Usuari</a></th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}} {{$user->surname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->password}}</td>
                    <td>
                        <a class="btn btn-primary mr-2">Edita</a>
                        <a class="btn btn-danger mr-2">Elimina</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

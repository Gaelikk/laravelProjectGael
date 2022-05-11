@extends('modal')
@section('content')
<div class="container">
    <h1 class="text-center my-5">Llista d'usuaris</h1>
    <table class="table table-dark table-bordered">
        <tr class="thead-dark">
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Email</th>
            <th scope="col">Username</th>
            <th>Opcions<a class="btn btn-success float-lg-end" href="/users/create">Crear Usuari</a></th>
        </tr>
        @foreach($users as $user)
            <tr>
                <th>{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->surname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->username}}</td>
                <td><a class="btn btn-primary editBoto" href="/users/edit/{{$user->id}}">Edita</a>
                    <a class="btn btn-danger borrarBoto" href="/users/delete/{{$user->id}}">Elimina</a>
            </tr>
        @endforeach
    </table>
</div>
@endsection

@extends('modal')
@section('content')
    <h1 class="text-center my-5">Llista d'usuaris</h1>
    <table class="table table-dark table-bordered">
        <tr class="thead-dark">
            <th>Nom/Cognom</th>
            <th>Organització</th>
            <th>Email</th>
            <th>Telèfon</th>
            <th>País</th>
            <th></th>
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
@endsection

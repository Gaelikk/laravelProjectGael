@extends('modal')
@section('content')
    <div class="container">
        <h1 class="text-center my-5">Llista de jocs</h1>
        <table class="table table-dark table-bordered">
            <tr class="thead-dark">
                <th>ID</th>
                <th>Nom</th>
                <th>Organització</th>
                <th>Opcions<a class="btn btn-success float-lg-end" href="/games/create">Crear Joc</a></th>
            </tr>
            @foreach($games as $game)
                <tr>
                    <td>{{$game->id}}</td>
                    <td>{{$game->name}}</td>
                    <td>{{$game->organization}}</td>
                    <td>
                        <a class="btn btn-primary mr-2" href="/games/edit/{{$game->id}}">Edita</a>
                        <a class="btn btn-danger mr-2" href="/games/delete/{{$game->id}}">Elimina</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

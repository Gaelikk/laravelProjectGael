@extends('modal')
@section('content')
    <div class="container">
        @isset($game)
            {{$game->$name}}
        @endisset
        @empty($game)
            Not Found
        @endempty
        <h1 class="text-center my-5">Vista de Jocs</h1>
        <table class="table table-dark table-bordered">
            <tr class="thead-dark">
                <th>Nom</th>
                <th>Organització</th>
                <th>Email</th>
                <th>Telèfon</th>
                <th>País</th>
                <th><a class="btn btn-success" href={{url('/newGame')}}>Crear Joc</a></th>
            </tr>
            @foreach($games as $game)
                <tr>
                    <td>{{$game->name}}</td>
                    <td>
                        <a class="btn btn-primary mr-2" href="/games/{{$game->id}}">Edita</a>
                        <a class="btn btn-danger mr-2" href="/games/{{$game->id}}">Elimina</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

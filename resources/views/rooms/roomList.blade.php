@extends('modal')
@section('content')
    <div class="container">
        <h1 class="text-center my-5">Llista d'habitacions</h1>
        <table class="table table-dark table-bordered">
            <tr class="thead-dark">
                <th>ID</th>
                <th>Nom</th>
                <th>Joc</th>
                <th>Organització</th>
                <th>Opcions<a class="btn btn-success float-lg-end" href="/rooms/create">Crear Habitació</a></th>
            </tr>
            @foreach($rooms as $room)
                <tr>
                    <td>{{$room->id}}</td>
                    <td>{{$room->name}}</td>
                    <td>{{$room->game}}</td>
                    <td>{{$room->organization}}</td>
                    <td><a class="btn btn-primary editBoto" href="/rooms/edit/{{$room->id}}">Edita</a>
                    <a class="btn btn-danger borrarBoto" href="/rooms/delete/{{$room->id}}">Elimina</a>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

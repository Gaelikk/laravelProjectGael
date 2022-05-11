@extends('modal')
@section('content')
    <div class="container">
        <h1 class="text-center my-5">Llista d'habitacions</h1>
        <table class="table table-dark table-bordered">
            <tr class="thead-dark">
                <th>Nom</th>
                <th>Organització</th>
                <th>Email</th>
                <th>Telèfon</th>
                <th>País</th>
                <th><a class="btn btn-success float-lg-end" href={{url('rooms/newRoom')}}>Crear Habitació</a></th>
            </tr>
            @foreach($rooms as $room)
                <tr>
                    <td>{{$room->name}}</td>
                    <td>
                        <a class="btn btn-primary mr-2" href="/games/{{$room->id}}">Edita</a>
                        <a class="btn btn-danger mr-2" href="/games/{{$room->id}}">Elimina</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

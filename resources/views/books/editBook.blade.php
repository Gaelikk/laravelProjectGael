<div class="">
    <form method="post" action="{{url("/books/editSend/$book->id")}}">
        @csrf
        <input class="" type="text" id="name" name="name" value="{{$book->name}}" placeholder="NAME"><br>
        <input class="" type="email" id="email" name="email" value="{{$book->email}}" placeholder="EMAIL"><br>
        <input class="" type="text" id="numerotlf" name="numerotlf" value="{{$book->numerotlf}}"
               placeholder="NUMEROTLF"><br>
        <input class="" type="text" id="reservaPais" name="pais" value="{{$book->pais}}"
               placeholder="PAIS"><br>
        <select name="username" class="" placeholder="USERNAME">
            <option selected="selected" disabled>USERNAME</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}" @if($user->name) selected @endif>{{ $user->name }}</option>
            @endforeach
        </select>
        <select name="room" class="" placeholder="room">
            <option selected="selected" disabled>HABITACIÓ</option>
            @foreach($rooms as $room)
                <option value="{{ $room->id }}" @if($room->name) selected @endif>{{ $room->name }}</option>
            @endforeach
        </select>
        <input class="" style="margin-top: 5px" type="submit" value="GUARDAR">
    </form>
</div>
@extends('modal')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container d-flex justify-content-center mt-5">
        <div class="col-5 bg-light border rounded">
            <div class="row p-3">
                <h2 class="text-center my-2">Edita Joc</h2>
                <form method="post" action="{{url("/games/editSend/$game->id")}}">
                    @csrf
                    <h5>Nom</h5>
                    <input class="form-control" type="text" id="gameName" name="name" value="{{$game->name}}"
                           placeholder="NAME"><br>
                    <h5>Organització</h5>
                    <input class="form-control" type="text" id="gameOrganization" name="organization"
                           value="{{$game->organization}}" placeholder="organization"><br>
                    <h5>Posa la url de la imatge</h5>
                    <input class="form-control" type="text" id="gameOrganization" name="image"
                           value="{{$game->image}}" placeholder="image"><br>
                    <span><input class="btn btn-primary" type="submit" value="Guardar"></span>
                    <span><a class="btn btn-danger" href={{url('/gameList')}} type="button">Cancelar</a></span>
                </form>
            </div>
        </div>
    </div>
@endsection

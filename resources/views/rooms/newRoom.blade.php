@extends('modal')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container d-flex justify-content-center mt-5">
        <div class="col-5 bg-light border rounded">
            <div class="row p-3">
                <h2 class="text-center my-2">Nova habitació</h2>
                <form method="post" action="{{url("/rooms/createSend")}}">
                    @csrf
                    <h5>Nom</h5>
                    <input class="form-control" type="text" id="name" name="name" placeholder="Nom"><br>
                    <h5>Organització</h5>
                    <input class="form-control" type="text" id="organization" name="organization"
                           placeholder="Organització"><br>
                    <h5>Posa la url de la imatge</h5>
                    <input class="form-control" type="text" id="image" name="image"
                           value="https://i.blogs.es/8fea66/escape-room-2-cartel/1366_2000.jpeg"><br>
                    <select name="game" class="">
                        <option selected="selected" disabled>game</option>
                        @foreach($games as $game)
                            <option value="{{ $game->id }}" @if($game->name) selected @endif>{{ $game->name }}</option>
                        @endforeach
                    </select>
                    <span><input class="btn btn-primary" type="submit" value="Guardar"></span>
                    <span><a class="btn btn-danger" href={{url('/roomList')}} type="button">Cancelar</a></span>
                </form>
            </div>
        </div>
@endsection

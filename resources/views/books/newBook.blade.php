@extends('modal')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container d-flex justify-content-center mt-5">
        <div class="col-5 bg-light border rounded">
            <div class="row p-3">
                <h2 class="text-center my-2">Nova Reserva</h2>
                <form method="post" action="{{url("/books/newBookSend")}}">
                    @csrf
                    <h5>Nom</h5>
                    <input class="form-control" type="text" id="name" name="name" placeholder="Nom"><br>
                    <h5>Email</h5>
                    <input class="form-control" type="email" id="email" name="email" placeholder="Email"><br>
                    <h5>Número de telèfon</h5>
                    <input class="form-control" type="number" id="numerotlf" name="numerotlf"
                           placeholder="Número tlf"><br>
                    <h5>País</h5>
                    <input class="form-control" type="text" id="pais" name="pais" placeholder="Pais"><br>
                    <select name="username" class="">
                        <option selected="selected" disabled>USERNAME</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}" @if($user->name) selected @endif>{{ $user->name }}</option>
                        @endforeach
                    </select>
                    <select name="room" class="">
                        <option selected="selected" disabled>HABITACIÓ</option>
                        @foreach($rooms as $room)
                            <option value="{{ $room->id }}" @if($room->name) selected @endif>{{ $room->name }}</option>
                        @endforeach
                    </select>
                    <br><br>
                    <span><input class="btn btn-primary" type="submit" value="Guardar"></span>
                    <span><a class="btn btn-danger" href={{url('/gameList')}} type="button">Cancelar</a></span>
                </form>
            </div>
        </div>
    </div>
@endsection


@extends('modal')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container d-flex justify-content-center mt-5">
        <div class="col-5 bg-light border rounded">
            <div class="row p-3">
                <h2 class="text-center my-2">Edita Joc</h2>
                <form method="post" action="{{url("/games/editSend/$game->id")}}">
                    @csrf
                    <div class="form-group">
                        <h5>Nom</h5>
                        <input class="form-control" id="gameName" name="name" type="text" value="{{$game->name}}">
                        <h6 class="text-danger"></h6>
                    </div>
                    <div class="form-group">
                        <h5>Organization</h5>
                        <input class="form-control" id="gameOrganization" name="organization" placeholder="organization"
                               type="text" value="{{$game->organization}}">
                        <h6 class="text-danger"></h6>
                    </div>
                    <div class="form-group">
                        <h5>Posa la url de la imatge</h5>
                        <input class="form-control" type="text" id="gameOrganization" name="image"
                               value="{{$game->image}}"
                               placeholder="image"><br>
                        <h6 class="text-danger"></h6>
                    </div>
                    <input type="hidden">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <span><a class="btn btn-danger" href={{url('/gameList')}} type="button">Cancelar</a></span>
                </form>
            </div>
        </div>
    </div>
@endsection

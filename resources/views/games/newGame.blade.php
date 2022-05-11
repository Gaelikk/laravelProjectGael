@extends('modal')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container d-flex justify-content-center mt-5">
        <div class="col-5 bg-light border rounded">
            <div class="row p-3">
                <h2 class="text-center my-2">Nou Joc</h2>
                <form method="post" action="{{url("/games/createNew")}}">
                    @csrf
                    <h5>Nom</h5>
                    <input class="form-control" type="text" id="name" name="name" placeholder="Nom"><br>
                    <h5>Organització</h5>
                    <input class="form-control" type="text" id="organization" name="organization"
                           placeholder="Organització"><br>
                    <h5>Posa la url de la imatge</h5>
                    <input class="form-control" type="text" id="image" name="image"
                           value="https://static2.abc.es/media/espana/2019/04/19/escape-room-kNzB--620x349@abc.jpg"><br>
                    <span><input class="btn btn-primary" type="submit" value="Guardar"></span>
                    <span><a class="btn btn-danger" href={{url('/gameList')}} type="button">Cancelar</a></span>
                </form>
            </div>
        </div>
    </div>
@endsection

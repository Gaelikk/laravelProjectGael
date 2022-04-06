@extends('modal')
@section('titol')
    Nou Joc
@endsection
@section('content')
    <div class="container d-flex justify-content-center mt-5">
        <div class="col-6 bg-light border rounded">
            <div class="row p-2">
                <h2 class="text-center my-2">Nova Habitació</h2>
                <form class="w-100">
                    <div class="form-group">
                        <label for="numMP">Número</label>
                        <input class="form-control" type="number">
                        <h6 class="text-danger"></h6>
                    </div>
                    <div class="form-group">
                        <label for="nameMP">Nom</label>
                        <input class="form-control" type="text">
                        <h6 class="text-danger"></h6>
                    </div>
                    <input name="idPlan" type="hidden">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <span><a class="btn btn-danger" href={{url('/games/games')}} type="button">Cancelar</a></span>
                </form>
            </div>
        </div>
    </div>
@endsection
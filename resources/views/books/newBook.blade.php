@extends('modal')
@section('titol')
    Nou Joc
@endsection
@section('content')
    <div class="container d-flex justify-content-center mt-5">
        <div class="col-6 bg-light border rounded">
            <div class="row p-2">
                <h2 class="text-center my-2">Nou Joc</h2>
            <!--<form class="w-100">
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
                    <input dPlan" type="hidden">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <span><a class="btn btn-danger" href={{url('/games/games')}} type="button">Cancelar</a></span>
                </form>-->
                <a class="" href="/books">Llista Reserves</a>
                <div class="" style="height: 700px">
                    <div class="">
                        <p>Crear Reserva</p>
                    </div>
                    <div class="formLoginRegister">
                        <form method="post" action="{{url("/books/newBook")}}">
                            @csrf
                            <input type="text" placeholder="Nom"><br>
                            <input type="email" placeholder="Email"><br>
                            <input type="text" placeholder="Número de telèfon"><br>
                            <input type="text" placeholder="Pais"><br>
                            <input type="text" placeholder="Nom d'usuari"><br>
                            <input type="text" placeholder="Habitació"><br>
                            <input style="margin-top: 5px" type="submit" value="save">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

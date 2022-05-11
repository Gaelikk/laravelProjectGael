@extends('modal')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container d-flex justify-content-center mt-5">
        <div class="col-6 bg-light border rounded">
            <h1 class="text-center my-4">Panell de control de la conta</h1>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <form method="post" action="{{url("/users/editSend/$user->id")}}">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label>Nom Usuari</label>
                                <input class="form-control form-control" id="gameName" name="name"/>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label>Cognom Usuari</label>
                                <input class="form-control form-control" placeholder="Cognom"/>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label>Nom Usuari</label>
                            <input class="form-control form-control" placeholder="Nom Usuari"/>
                        </div>
                        <div class="mb-4">
                            <label>Contrasenya</label>
                            <input class="form-control form-control" placeholder="Contrasenya"/>
                        </div>
                        <div class="mb-4">
                            <label>Correu electrònic</label>
                            <input class="form-control form-control" placeholder="Correu electrònic"/>
                        </div>
                        <button type="submit" class="btn btn-danger">Cancelar</button>
                        <button type="submit" class="btn btn-success">Guardar canvis</button>
                        <br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

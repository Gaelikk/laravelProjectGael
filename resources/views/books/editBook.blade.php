@extends('welcome')
@section('titol')
    Editar Reserva
@endsection
@section('content')
    <h1 class="text-center my-5">Edició Reserva</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Editar Reserva</div>
                <div class="formLoginRegister">
                    <form method="post" action="{{url("/books/editBook/$book->id")}}">
                        @csrf
                        <input class="inputName" type="text" id="name" name="name" value="{{$book->name}}"
                               placeholder="Nom"><br>
                        <input class="inputEmail" type="email" id="email" name="email" value="{{$book->email}}"
                               placeholder="Email"><br>
                        <input class="inputPhoneNumber" type="text" id="phoneNumber" name="phoneNuPber"
                               value="{{$book->phoneNumber}}" placeholder="Número de telèfon"><br>
                        <input class="inputCountry" type="text" id="country" name="country" value=C{{$book->country}}"
                               placeholder="Pais"><br>
                        <input class="inputUsername" type="text" id="username" name="username"
                               value="{{$book->username}}" placeholder="Nom d'usuari"><br>
                        <input class="inputRoom" type="text" id="bookRoom" name="room" value="{{$book->room}}"
                               placeholder="Habitació"><br>
                        <input class="botoFormGran" style="margin-top: 5px" type="submit" value="save">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('modal')
@section('content')
    <div class="container">
        <h1 class="text-center my-5">Vista de Reserves</h1>
        <table class="table table-dark table-bordered">
            <tr class="thead-dark">
                <th>ID Reserva</th>
                <th>Nom Usuari</th>
                <th>Número tlf.</th>
                <th>Habitació</th>
                <th>Opcions</th>
                <th><a class="btn btn-success float-lg-end" href={{url('/books/newBook')}}>Crear Reserva</a></th>
            </tr>
            @foreach($books as $book)
                <tr>
                    <th scope="row">{{$book->id}}</th>
                    <td>{{$book->name}}</td>
                    <td>{{$book->email}}</td>
                    <td>{{$book->phoneNumber}}</td>
                    <td>{{$book->country}}</td>
                    <td>{{$book->username}}</td>
                    <td>{{$book->room}}</td>
                    <td><a class="btn btn-primary" href="/books/edit/{{$book->id}}">Editar</a></td>
                    <td><a class="btn btn-danger" href="/books/delete/{{$book->id}}">Borrar</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

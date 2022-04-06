@extends('modal')
@section('content')
    <div class="container">
        <h1 class="text-center my-5">Vista de Jocs</h1>

        <table class="table">
            <thead>
            <tr class="bg-danger text-black">
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">NúmeroTlf</th>
                <th scope="col">País</th>
                <th scope="col">Username</th>
                <th scope="col">Habitació</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                <th><a href={{url('/books/newBook')}}>Crear Reserva</a></th>
            </tr>
            </thead>
            <tbody>
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
            </tbody>
        </table>
    </div>
@endsection

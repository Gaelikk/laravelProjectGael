@extends('modal')
@section('content')
    <div class="container">
        <h1 class="text-center my-5">Llista de Ressenyes</h1>
        <table class="table table-dark table-bordered">
            <thead>
            <tr class="bg-danger text-black">
                <th scope="col">ID</th>
                <th scope="col">Reserva</th>
                <th scope="col">comment</th>
                <th scope="col">Username</th>
                <th scope="col">Opcions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($reviews as $review)
                <tr>
                    <td scope="row">{{$review->id}}</td>
                    <td>{{$review->reserva}}</td>
                    <td>{{$review->comment}}</td>
                    <td>{{$review->username}}</td>
                    <td>
                        <a class="btn btn-primary mr-2" href="/review/edit/{{$game->id}}">Edita</a>
                        <a class="btn btn-danger mr-2" href="/review/delete/{{$game->id}}">Elimina</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection

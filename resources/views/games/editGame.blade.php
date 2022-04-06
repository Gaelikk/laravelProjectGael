@extends('welcome')
@section('titol')
    Editar Joc
@endsection
@section('content')
    <h1 class="text-center my-5">Edició Joc</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header"><p>Editar Joc</p>
                    <div class="formLoginRegister">
                        <form method="post" action="{{url("/games/editGame/$game->id")}}">
                            @csrf
                            <input type="text" value="{{$game->name}}" placeholder="Nom"><br>
                            <input type="text" value="{{$game->organitzation}}" placeholder="Organització"><br>
                            <input style="margin-top: 15px" type="submit" value="save">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

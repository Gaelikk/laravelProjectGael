@extends('welcome')
@section('titol')
    Editar Joc
@endsection
@section('content')
    <h1 class="text-center my-5">Edició Joc</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Editar Joc</div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach($errors->all() as $error)
                                    <li class="list-group-item">
                                        {{$error}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="/games/{{$game->id}}/update-game" method="POST">
                        @csrf
                        <div class="form-group mb-1">
                            <input type="text" class="form-control" name="name" id="name"
                                   value="{{old('name', $game->name)}}"
                                   placeholder="Name"><input>
                        </div>
                        <div class="form-group mb-1">
                            <textarea name="description" id="description" cols="5" rows="5" class="control-form"
                                      placeholder="Descripció">{{old('description', $game->description)}}</textarea>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-success" type="submit">
                                Actualitzar Joc
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

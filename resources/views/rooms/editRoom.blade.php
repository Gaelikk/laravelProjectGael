<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit room</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/editcreate.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<a class="" href="/roomList">Llista</a>
<div class="" style="height: 440px">
    <div class="">
        <p>edit room</p>
    </div>
    <div class="">
        <form method="post" action="{{url("/rooms/editSend/$room->id")}}">
            @csrf
            <input class="" type="text" id="roomName" name="name" value="{{$room->name}}"
                   placeholder="NAME"><br>
            <input class="" type="text" id="roomImage" name="image" value="{{$room->image}}"
                   placeholder="IMAGE"><br>
            <select name="game" class="">
                <option selected="{{$room->game}}" disabled>game</option>
                @foreach($games as $game)
                    <option value="{{ $game->id }}" @if($game->name) selected @endif>{{ $game->name }}</option>
                @endforeach
            </select>
            <input class="" style="margin-top: 5px" type="submit" value="GUARDAR">
        </form>
    </div>
</div>
</body>
</html>

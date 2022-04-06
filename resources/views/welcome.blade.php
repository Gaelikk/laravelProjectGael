@extends('modal')
@section('content')
    <div class="container">
        <h1 class="text-center my-5">Benvingut als Jocs d'escapeRoom</h1>
        <div class="row row-cols-1 row-cols-md-12 g-4">
            <div class="col">
                <div class="card">
                    <img alt="" class="card-img-top" src="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <a href="{{url('/books/books')}}" class="btn btn-primary">Reserva</a>
                        <a href="#" class="btn btn-warning">Valoracions</a>
                        <a href="#" class="btn btn-primary">Link</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img alt="" class="card-img-top" src="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <a href="{{url('/books/books')}}" class="btn btn-primary">Reserva</a>
                        <a href="#" class="btn btn-warning">Valoracions</a>
                        <a href="#" class="btn btn-primary">Link</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img alt="" class="card-img-top" src="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <a href="{{url('/books/books')}}" class="btn btn-primary">Reserva</a>
                        <a href="#" class="btn btn-warning">Valoracions</a>
                        <a href="#" class="btn btn-primary">Link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

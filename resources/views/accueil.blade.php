@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($posts as $post)
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Images">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->titre}}</h5>
                            <p class="card-text">{{$post->contenu}}</p>
                            <a href="#" class="btn btn-primary">Lire Plus</a>
                        </div>
                    </div>
                    <br>
                @endforeach
            </div>
        </div>
    </div>
@endsection

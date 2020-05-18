@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-9">
                @foreach ($posts as $post)
                    <div class="card">
                        <img class="card-img-top" style="height:500px" src="{{asset('images/' . $post->id . '.jpg')}}" alt="Images">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->titre}}</h5>
                            <p id="contenuText" class="card-text">{!! nl2br(e($post->contenu)) !!}</p>
                            <a href="#" class="btn btn-primary">Lire Plus</a>
                        </div>
                    </div>
                    <br>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

<meta name="csrf-token" content="{{ csrf_token() }}" />
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Liste des postes</div>
                    <div class="card-body">

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titre</th>
                                <th scope="col">Contenu</th>
                                <th scope="col">Date Création</th>
                                <th scope="col">Date Modification</th>
                                <th scope="col">Modifier</th>
                                <th scope="col">Supprimer</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <th scope="row">{{$post->id}}</th>
                                    <td>{{$post->titre}}</td>
                                    <td>{{$post->contenu}}</td>
                                    <td>{{$post->created_at}}</td>
                                    <td>{{$post->updated_at}}</td>
                                    <td><button type="button" class="btn btn-primary" onclick="location.href='{{ url('post/edit/' . $post->id ) }}';">Modifier</button></td>
                                    <td><button type="button" class="btn btn-danger" onclick="location.href='{{ url('post/delete/' . $post->id ) }}';">Supprimer</button></td>
                                    <td></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

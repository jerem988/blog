@extends('layouts.app')

<meta name="csrf-token" content="{{ csrf_token() }}" />
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Créér un nouveau Poste</div>
                    {{ Form::open(array('url' => 'post/valid/'. $post->id, 'files' => true)) }}

                    <div class="col-md-12">
                        {!!Form::label('titreLabel', 'Titre'); !!}
                        {!! Form::text('titre', $post->titre, ['class' => 'form-control']); !!}
                    </div>

                    <div class="col-md-12">
                        {!! Form::label('contenuLabel', 'Contenu'); !!}
                        {!! Form::textarea('contenu', $post->contenu, ['class' => 'form-control']); !!}
                    </div>
                    <br/>

                    <div class="col-md-12">
                        {!! Form::label('imageLabel', 'Choisir un image'); !!}
                        {!! Form::file('image', ['class' => 'form-control']); !!}
                    </div>
                    <br/>

                    <div class="col-md-12">
                        <div class="row justify-content-center">
                            {{ Form::submit('Valider', ['class' => 'btn btn-primary']) }}
                        </div>
                    </div>


                    {{ Form::close() }}

                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

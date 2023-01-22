@extends('layouts.default', ['title' => 'Liste des posts'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>
                Post: {{ $post->title }}
            </h1>

            <p>
                {{ $post->description }}
            </p>
        
            <a class="btn btn-danger" href="{{ route('posts.index') }}">retour</a>
            
        </div>
    </div>
</div>
@endsection
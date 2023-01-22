@extends('layouts.default', ['title' => 'Liste des posts'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>
                Liste des posts
            </h1>
        
            <a class="btn btn-primary" href="{{ route('posts.create') }}">Ajouter</a>
            
        </div>

        <div class="col-md-12 mt-5">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row"></th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            <td>
                                <a href="{{ route('posts.show', $post) }}" class="btn btn-info"> détails </a>
                                <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary"> Modifier </a>
                                <a href="{{ route('posts.destroy', $post) }}" class="btn btn-danger"
                                onclick="event.preventDefault(); document.getElementById('delete-{{ $post->id }}').submit()"> Supprimer </a>
                                <form id="delete-{{ $post->id }}" action="{{ route('posts.destroy', $post) }}" style="display: none" method="POST">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                        
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
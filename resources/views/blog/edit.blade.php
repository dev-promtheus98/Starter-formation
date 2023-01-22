@extends('layouts.default', ['title' => 'Ajouter un post'])

@section('content')
<div class="container">
    <div class="row">

        @if ($errors->any())
            <div class="alert bg-danger alert-dismissible ">
                <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                <ul class="pl-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="col-md-12">
            <form action="{{ route('posts.update', $post) }}" method="POST">

                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Titre</label>
                    <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea name="description" class="form-control" cols="30" rows="10">{{ $post->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Valider</button>
            </form>
        </div>
    </div>
</div>
@endsection
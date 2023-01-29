@extends('layouts.dashboard', ['title' => 'Liste des posts'])



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <a class="btn btn-danger" href="{{ route('posts.index') }}">retour</a>

            <h1>
                Post: {{ $post->title }}
            </h1>

            <p>
                {{ $post->description }}
            </p>
    
            
        </div>

        <div class="col-md-12">
            <h1>Commentaire(s)</h1>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Commentaires</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Ajouter commentaire</button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="p-2">
                        @if (count($post->comments) > 0)
                
                            @foreach ($post->comments as $comment)
                                <div>
                                    <p>{{ $comment->contenu }}</p>
                                </div>
                            @endforeach
                        @else
                            <div class="alert alert-info" role="alert">
                                Aucun commentaire disponible
                            </div>
                        @endif
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row p-2">

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
                            <form action="{{ route('comments.store', $post) }}" method="POST">
                
                                @csrf
                                @method('POST')
                                
                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                
                                <div class="form-group mb-2">
                                    <label for="exampleInputPassword1">Contenu</label>
                                    <textarea name="contenu" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Valider</button>
                            </form>
                        </div>
                    </div>
                </div>
              </div>
            
        </div>

    </div>
</div>
@endsection
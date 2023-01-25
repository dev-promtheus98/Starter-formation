@extends('layouts.dashboard', ['title' => 'Ajouter un post'])

@section('page-header')
<!-- Page header -->
<div class="page-header page-header-light page-header-static shadow">
    <div class="page-header-content d-lg-flex">
        <div class="d-flex">
            <h4 class="page-title mb-0">
                Ajouter un post
            </h4>

            <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
            </a>
        </div>
    </div>

    <div class="page-header-content d-lg-flex border-top">
        <div class="d-flex">
            <div class="breadcrumb py-2">
                <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                <a href="#" class="breadcrumb-item">Accueil</a>
                <a href="#" class="breadcrumb-item">Blog</a>
                <a href="{{ route('posts.index') }}" class="breadcrumb-item">Posts</a>
                <span class="breadcrumb-item active">ajouter un post</span>
            </div>

            <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
            </a>
        </div>
    </div>
</div>
<!-- /page header -->
@endsection

@section('content')
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

        <div class="card">

            <div class="card-body">
                <form action="{{ route('posts.store') }}" method="POST">

                    @csrf
                    @method('POST')
                    
                    <div class="form-group mb-2">
                        <label for="exampleInputEmail1">Titre</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    
                    <div class="form-group mb-2">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Valider</button>
                </form>
            </div>
        </div>
        
    </div>
</div>
@endsection
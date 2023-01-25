@extends('layouts.dashboard', ['title' => 'Liste des posts'])

@section('page-header')
<!-- Page header -->
<div class="page-header page-header-light page-header-static shadow">
    <div class="page-header-content d-lg-flex">
        <div class="d-flex">
            <h4 class="page-title mb-0">
                Liste des posts
            </h4>

            <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
            </a>
        </div>

        <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header">
            <div class="hstack gap-3 mb-3 mb-lg-0">
                <a href="{{ route('posts.create') }}" class="btn btn-primary">
                    <i class="icon-file-plus me-2"></i>
                    Ajouter
                </a>
            </div>
        </div>
    </div>

    <div class="page-header-content d-lg-flex border-top">
        <div class="d-flex">
            <div class="breadcrumb py-2">
                <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                <a href="#" class="breadcrumb-item">Accueil</a>
                <a href="#" class="breadcrumb-item">Blog</a>
                <span class="breadcrumb-item active">Posts</span>
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
<!-- Basic table -->
<div class="card">
    <div class="card-header">
        <h5 class="mb-0">Lists des posts</h5>
    </div>

    <table class="table datatable-basic">
        <thead>
            <tr>
                <th>#</th>
                <th>Titre</th>
                <th>Description</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->description }}</td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{ route('posts.show', $post) }}" class="dropdown-item">
                                        <i class="ph-file-pdf me-2"></i>
                                        Détails
                                    </a>
                                    <a href="{{ route('posts.edit', $post) }}" class="dropdown-item">
                                        <i class="ph-file-xls me-2"></i>
                                        Modifier
                                    </a>
                                    <a href="{{ route('posts.destroy', $post) }}" onclick="event.preventDefault(); document.getElementById('delete-{{ $post->id }}').submit()" class="dropdown-item">
                                        <i class="ph-file-doc me-2"></i>
                                        Supprimer
                                    </a>
                                    <form id="delete-{{ $post->id }}" action="{{ route('posts.destroy', $post) }}" style="display: none" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                
            @endforeach
            
            
        </tbody>
    </table>

</div>
<!-- /basic table -->
@endsection
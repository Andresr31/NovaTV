@extends('layouts.app')
@section('title', 'NovaTV - Ver Pelicula')

@section('content')
<div class="row">
    <div class="col-md-10 offset-md-1">
        <h1> <i class="fa fa-search"></i> Ver Pelicula</h1>
        <hr>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('home') }}">
                        <i class="fa fa-clipboard-list"></i>  
                        Escritorio
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('movies.index') }}">
                        <i class="fas fa-list-alt"></i> 
                        Módulo Peliculas
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <i class="fa fa-search"></i> 
                    Ver Pelicula
                </li>
            </ol>
        </nav>
        <form>
            @csrf
            <div class="mb-3">
                <label for="name" class="">Nombre </label>

                <div class="">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $movie->name }}" disabled>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="4" disabled>{{ $movie->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="quality" class="">Calidad</label>
                <input id="quality" type="text" class="form-control @error('quality') is-invalid @enderror" name="quality" value="{{ $movie->quality }}" disabled>
            </div>
            <div class="mb-3">
                <label for="release_year" class="">Fecha de lanzamiento</label>

                <div class="">
                    <input id="release_year" type="text" class="form-control @error('release_year') is-invalid @enderror" name="release_year" value="{{ $movie->release_year }}" disabled>
                </div>
            </div>
            <div class="mb-3">
                <label for="language" class="">Idioma </label>

                <div class="">
                    <input id="language" type="text" class="form-control @error('language') is-invalid @enderror" name="language" value="{{ $movie->language }}" disabled>
                </div>
            </div>

            <div class="form-group mb-3">
                <label for="image" class="form-label">Portada</label>
                <div class="text-center my-3">
                    <img src="{{ asset($movie->image) }}" class="img-thumbnail" id="preview" width="200px">
                </div>
                   
            </div>
            <div class="mb-3">
                <label for="video_link" class="">Link del video </label>

                <div class="">
                    <a href="{{$movie->video_link}}" target="_blank" rel="noopener noreferrer">Ver Pelicula</a>
                </div>
            </div>

            <div class="mb-3">
                <label for="download_link" class="">Link de descarga </label>

                <div class="">
                    <a href="{{$movie->download_link}}" target="_blank" rel="noopener noreferrer">Descargar Pelicula</a>
                </div>
            </div>
            <div class="mb-3">
                <label for="user_id" class="">Usuario</label>
                <div class="">
                    <input id="user_id" type="text" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ $movie->user->fullname }}" disabled>
                </div>
            </div>
            <div class="mb-3">
                <label for="category_id" class="">Categoría</label>
                <div class="">
                    <input id="category_id" type="text" class="form-control @error('category_id') is-invalid @enderror" name="category_id" value="{{ $movie->category->name }}" disabled>
                </div>
            </div>

            <div class="mb-3">
                <label for="reproduction_number" class="">Número de Reproducciones</label>
                <div class="">
                    <input id="reproduction_number" type="text" class="form-control @error('reproduction_number') is-invalid @enderror" name="reproduction_number" value="{{ $movie->reproduction_number }}" disabled>
                </div>
            </div>

            <div class="mb-3">
                <label for="created_at" class="">Fecha de creación</label>
                <div class="">
                    <input id="created_at" type="text" class="form-control @error('created_at') is-invalid @enderror" name="created_at" value="{{ $movie->created_at }}" disabled>
                </div>
            </div>
            
            <div class="d-grid gap-2 mb-3">
              
                <a href="{{route('movies.index')}}" class="btn btn-primary btn-block text-uppercase">Volver <i class="fa fa-left"></i></a>
              
            </div>
            
        </form>
    </div>
</div> 
@endsection

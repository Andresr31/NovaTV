@extends('layouts.app')
@section('title', 'NovaTV - Editar Categoría')

@section('content')
<div class="row">
    <div class="col-md-10 offset-md-1">
        <h1> <i class="fa fa-plus"></i> Editar Categoría</h1>
        <hr>
        <form method="POST" action="{{route('categories.update',$category->id)}}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="">Nombre </label>

                <div class="">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $category->name }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="4">{{ $category->description }}</textarea>
              </div>
            
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Editar <i class="fa fa-save"></i></button>
              </div>
            
          </form>
    </div>
  </div> 
@endsection

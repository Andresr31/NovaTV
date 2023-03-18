@extends('layouts.app')
@section('title', 'NovaTV - Crear Categoría')

@section('content')
<div class="row">
    <div class="col-md-10 offset-md-1">
        <h1> <i class="fa fa-plus"></i> Agregar Categoría</h1>
        <hr>
        <form method="POST" action="{{route('categories.store')}}">
            @csrf
            <div class="mb-3">
                <label for="name" class="">Nombre </label>

                <div class="">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="4">{{ old('description') }}</textarea>
              </div>
            
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Agregar <i class="fa fa-save"></i></button>
              </div>
            
          </form>
    </div>
  </div> 
@endsection

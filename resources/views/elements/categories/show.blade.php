@extends('layouts.app')
@section('title', 'NovaTV - Ver Categoría')

@section('content')
<div class="row">
    <div class="col-md-10 offset-md-1">
        <h1> <i class="fa fa-plus"></i> Ver Categoría</h1>
        <hr>
        <form >
            @csrf
            <div class="mb-3">
                <label for="name" class="">Nombre </label>

                <div class="">
                    <input id="name" type="text" class="form-control" name="name" value="{{ $category->name }}"  autocomplete="name" disabled>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea name="description" class="form-control " cols="30" rows="4" disabled>{{ $category->description }}</textarea>
              </div>
            
              <div class="col-12">
                <a href="{{route('categories.index')}}" class="btn btn-primary btn-block text-uppercase">Volver <i class="fa fa-left"></i></a>
              </div>
            
          </form>
    </div>
  </div> 
@endsection

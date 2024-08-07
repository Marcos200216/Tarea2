@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="card shadow-sm border-0 rounded-lg">
        <div class="card-header bg-secondary text-white rounded-top">
            <h3 class="mb-3">Editar Película</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('movies.update', $movie->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="title" class="form-label">Título:</label>
                    <input type="text" class="form-control form-control-sm" id="title" name="title" value="{{ $movie->title }}" placeholder="Ingrese el título de la película">
                </div>
                <div class="form-group mb-3">
                    <label for="description" class="form-label">Descripción:</label>
                    <textarea class="form-control form-control-sm" id="description" name="description" rows="3" placeholder="Ingrese la descripción de la película">{{ $movie->description }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="category_id" class="form-label">Categoría:</label>
                    <select class="form-control form-control-sm" id="category_id" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $movie->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-sm btn-light mt-2">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

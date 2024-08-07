@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm border-0 rounded-lg">
        <div class="card-header bg-secondary text-white rounded-top">
            <h1 class="mb-0">Detalles de la Película</h1>
        </div>
        <div class="card-body">
            <h2 class="text-secondary">{{ $movie->title }}</h2>
            <p class="mt-4"><strong>Descripción:</strong> {{ $movie->description }}</p>
            <p><strong>Categoría:</strong> {{ $movie->category->name }}</p>
            <div class="mt-4">
                <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-warning btn-lg me-2">Editar</a>
                <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-lg me-2">Eliminar</button>
                </form>
                <a href="{{ route('movies.index') }}" class="btn btn-secondary btn-lg">Volver a la lista</a>
            </div>
        </div>
    </div>
</div>
@endsection

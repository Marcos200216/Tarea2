@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm border-0 rounded-lg">
        <div class="card-header bg-secondary text-white rounded-top">
            <h3 class="mb-0">Detalles de la Categoría</h3>
        </div>
        <div class="card-body">
            <h1 class="text-secondary">{{ $category->name }}</h1>
            <div class="mt-4">
                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-lg">Editar</a>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-lg">Eliminar</button>
                </form>
                <a href="{{ route('categories.index') }}" class="btn btn-secondary btn-lg">Volver a la lista</a>
            </div>
        </div>
    </div>
</div>
@endsection

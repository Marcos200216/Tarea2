@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm border-0 rounded-lg">
        <div class="card-header bg-secondary text-white rounded-top">
            <h3 class="mb-0">Editar Categoría</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-4">
                    <label for="name" class="form-label">Nombre:</label>
                    <input type="text" class="form-control form-control-lg" id="name" name="name" value="{{ $category->name }}" placeholder="Ingrese el nombre de la categoría">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-lg btn-secondary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

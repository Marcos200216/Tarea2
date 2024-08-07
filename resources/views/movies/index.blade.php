@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="card shadow-sm border-0 rounded-lg">
        <div class="card-header bg-secondary text-white rounded-top d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Películas</h3>
            <a href="{{ route('movies.create') }}" class="btn btn-sm btn-light">Añadir Película</a>
        </div>
        <div class="card-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success mt-2">
                    {{ $message }}
                </div>
            @endif
            <table class="table table-hover table-sm">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Título</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Categoría</th>
                        <th scope="col" class="text-center">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($movies as $movie)
                    <tr>
                        <td>{{ $movie->title }}</td>
                        <td>{{ $movie->description }}</td>
                        <td>{{ $movie->category->name }}</td>
                        <td class="text-center">
                            <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-secondary btn-sm">Editar</a>
                            <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-light btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

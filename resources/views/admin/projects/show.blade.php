@extends('layouts.admin')

@section('content')
    <h1><a href="{{ route('admin.projects.index') }}">Torna indietro</a></h1>
    <h2>Progetto:</h2>
    <h3>{{ $project->title }}</h3>
    <img src="{{ asset('storage/' . $project->thumb) }}" alt="">
    <h3>{{ $project->type->name }}</h3>
    <p>{{ $project->description }}</p>
    <h6>{{ $project->year }}</h6>
    <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning">Modifica</a>
    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Elimina" class="btn btn-danger">
    </form>

    {{-- Create Project Message --}}
    @if (session('createMessage'))
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Boolfolio</strong>
                    <small>Adesso</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('createMessage') }}
                </div>
            </div>
        </div>
    @endif
@endsection

@extends('layouts.admin')

@section('content')
    <div class="container p-4">
        <h1>Lista progetti:</h1>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Aggiungi nuovo progetto</a>

        {{-- Progetti --}}
        @foreach ($projects as $project)
            <div class="my-4 row ">
                <div class="col-4">
                    <img class="img-fluid" src="{{ asset('storage/' . $project->thumb) }}" alt="">
                </div>
                <div class="col-8">
                    <h3><a href="{{ route('admin.projects.show', $project) }}">{{ $project->title }}</a></h3>
                    <h3>{{ $project->type->name }}</h3>
                    <p>{{ $project->description }}</p>
                    @foreach ($project->technologies as $technology)
                        {{ $technology->name }}
                    @endforeach
                    <h6>{{ $project->year }}</h6>
                </div>
            </div>
        @endforeach

    </div>
    {{-- Update Project Message --}}
    @if (session('updateMessage'))
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Boolfolio</strong>
                    <small>Adesso</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('updateMessage') }}
                </div>
            </div>
        </div>
    @endif
@endsection

@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.projects.update', $project) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo progetto</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                value="{{ old('title', $project->title) }}">
            <div id="emailHelp" class="form-text">Lo slug non verrà aggiornato.({{ $project->slug }})</div>

            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine progetto</label>
            <img src="{{ asset('storage/' . $project->thumb) }}" alt="">
        </div>
        <div class="mb-3">
            <label for="type">Categoria</label>
            <select class="form-select" name="type" id="type">

                @foreach ($types as $type)
                    <option value="{{ $type->id }}" {{ $type->id == $project->type_id ? 'selected' : '' }}>
                        {{ $type->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="3"
                name="description">{{ old('description', $project->description) }}</textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Anno</label>
            <input type="text" class="form-control @error('year') is-invalid @enderror" id="year" name="year"
                value="{{ old('year', $project->year) }}">
            @error('year')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <input type="submit" class="btn btn-primary" value="Salva">
    </form>
    <a href="{{ route('admin.projects.index') }}" class="btn btn-warning">Annulla</a>
@endsection

@extends('layouts.app')

@section('title', 'Project')

@section('content')

    <div class="d-flex justify-content-between align-items-center">
      <h1 class="py-3">Projects</h1>
      <div>
        <a href="{{route('guest.home')}}" class="btn btn-primary">Torna alla home</a>
      </div>
    </div>

    <div class="card">
        <div class="card-body">
          <h3 class="card-title">{{ $project->title }}</h3>
          <p class="card-text">{{ $project->content }}</p>
          <div>
            <strong>Linguaggi di programmazione:</strong>
            {{ $project->programming_languages }}.
          </div>

          <div class="d-flex flex-column align-items-end gap-2">
            <div>
                <strong>Data creazione:</strong>
                {{ $project->getCreatedAt() }}
            </div>
            <div>
                <strong>Data ultima modifica:</strong>
                {{ $project->getUpdatedAt() }}
            </div>
          </div>
        </div>
      </div>
@endsection

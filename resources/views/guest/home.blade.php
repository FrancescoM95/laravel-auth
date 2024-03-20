@extends('layouts.app')

@section('title', 'Home')

@section('content')
<h1 class="py-3">Projects</h1>
<div class="row g-5 py-3">
    @forelse ($projects as $project)
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $project->title }}</h3>
            </div>
            <div class="card-body">
                <p class="card-text overflow-auto" style="height: 300px">{{ $project->content }}</p>
            </div>
            <div class="card-footer">
                <p class="card-text mb-1"><strong>Stack:</strong> {{ $project->programming_languages }}.</p>
                <p class="card-text mb-1"><strong>Data creazione:</strong> {{ $project->getCreatedAt() }}</p>
                <p class="card-text mb-1"><strong>Ultima modifica:</strong>  {{ $project->getUpdatedAt() }}</p>
            </div>
            <a href="{{ route('guest.projects.show', $project->slug)}}" class="btn btn-sm btn-outline-info">
                Vedi dettagli
             </a>
        </div>
    </div>
    @empty
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Non ci sono progetti.</h5>
            </div>
        </div>
    </div>
    @endforelse
</div>


@endsection
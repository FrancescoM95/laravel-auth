@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="row g-5 py-5">
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
                <p class="card-text mb-1"><strong>Data creazione:</strong> {{ $project->created_at }}</p>
                <p class="card-text mb-1"><strong>Ultima modifica:</strong> {{ $project->updated_at }}</p>
                <div class="d-flex justify-content-end gap-2 mt-2">
                    <a href="{{ route('admin.projects.show', $project->id)}}" class="btn btn-sm btn-primary">
                      <i class="far fa-eye"></i>
                    </a>
                    <a href="{{ route('admin.projects.edit', $project->id)}}" class="btn btn-sm btn-secondary">
                      <i class="fa-solid fa-pencil"></i>
                    </a>
                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" id="delete-form">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-sm btn-danger"><i class="far fa-trash-can"></i></button>
                    </form>
                  </div>
            </div>
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
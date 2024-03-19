@extends('layouts.app')

@section('title', 'Project')

@section('content')

    <h1 class="py-3">Project</h1>

    <div class="card">
        <div class="card-body">
          <h3 class="card-title">{{ $project->title }}</h3>
          <p class="card-text">{{ $project->content }}</p>
          <div>
            <strong>Linguaggi di programmazione:</strong>
            {{ $project->programming_language }}.
          </div>

          <div class="d-flex flex-column align-items-end gap-2">
            <div>
                <strong>Data creazione:</strong>
                {{ $project->created_at }}
            </div>
            <div>
                <strong>Data ultima modifica:</strong>
                {{ $project->updated_at }}
            </div>
          </div>

          <div class="d-flex justify-content-between mt-4">
            <a href="{{route('admin.projects.index')}}" class="btn btn-primary">Torna indietro</a>
            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" id="delete-form">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger">Elimina</button>
            </form>
          </div>
          
        </div>
      </div>
@endsection

@section('scripts')
    <script>
        const deleteForm = document.getElementById('delete-form');

        deleteForm.addEventListener('submit', e => {
            e.preventDefault();

            const confirmation = confirm('Sei sicuro di voler eliminare questo progetto?');

            if(confirmation) deleteForm.submit();
        });
    </script>
@endsection
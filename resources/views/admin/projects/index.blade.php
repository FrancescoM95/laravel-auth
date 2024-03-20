@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
      <h1 class="py-3">Projects</h1>
      <div>
        <a href="{{route('admin.projects.create')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Aggiungi progetto</a>
        <a href="{{route('admin.projects.trash')}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Cestino</a>
      </div>
    </div>

    <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Slug</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Linguaggio</th>
            <th scope="col">Data creazione</th>
            <th scope="col">Ultima modifica</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @forelse ($projects as $project)
            <tr>
                <th scope="row">{{ $project->id }}</th>
                <td>{{ $project->title }}</td>
                <td>{{ $project->slug }}</td>
                <td>{{ $project->content }}</td>
                <td>{{ $project->programming_languages }}</td>
                <td>{{ $project->created_at }}</td>
                <td>{{ $project->updated_at }}</td>
                <td>
                  <div class="d-flex gap-2">
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
                </td>
              </tr>
            @empty
               <tr>
                <td>
                  <h3>Non ci sono progetti.</h3>
                </td>
               </tr>
            
            @endforelse
          
        </tbody>
      </table>
@endsection

@section('scripts')
    <script>
        const deleteForm = document.getElementById('delete-form');

        deleteForm.addEventListener('submit', e => {
            e.preventDefault();

            const confirmation = confirm('Sei sicuro di voler spostare questo progetto nel cestino?');

            if(confirmation) deleteForm.submit();
        });
    </script>
@endsection
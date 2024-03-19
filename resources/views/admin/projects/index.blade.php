@extends('layouts.app')

@section('title', 'Projects')

@section('content')

    <h1 class="py-3">Projects</h1>

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
                <td>{{ $project->programming_language }}</td>
                <td>{{ $project->created_at }}</td>
                <td>{{ $project->updated_at }}</td>
                <td>
                  <div class="d-flex gap-2">
                    <a href="{{ route('admin.projects.show', $project)}}" class="btn btn-sm btn-primary">
                      <i class="far fa-eye"></i>
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

            const confirmation = confirm('Sei sicuro di voler eliminare questo progetto?');

            if(confirmation) deleteForm.submit();
        });
    </script>
@endsection
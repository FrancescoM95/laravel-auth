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
            <th scope="col">Creato il</th>
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
                    <a href="{{ route('admin.projects.show', $project)}}" class="btn btn-sm btn-primary">
                      <i class="far fa-eye"></i>
                    </a>
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
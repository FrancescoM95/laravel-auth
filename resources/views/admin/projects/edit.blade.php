@extends('layouts.app')

@section('title', 'Projects')

@section('content')

{{-- VALIDAZIONE --}}
@if ($errors->any())
<div class="alert alert-danger mt-4 p-3">
    <h4>Some fields are invalid!</h4>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="d-flex justify-content-between align-items-center">
    <h1 class="py-3">Modifica</h1>
    <div>
      <a href="{{route('admin.projects.index')}}" class="btn btn-primary">Torna alla lista</a>
    </div>
</div>


<form action="{{route('admin.projects.update', $project->id)}}" method="POST">
@csrf
@method('PUT')
<div class="row g-4 justify-content-end py-5">
    <div class="col-6">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci titolo" value="{{old('title', $project->title)}}">
    </div>
    <div class="col-6">
        <label for="programming_language" class="form-label">Linguaggi di programmazione</label>
        <input type="text" class="form-control" id="programming_language" name="programming_language" placeholder="Insert programming_language" value="{{old('programming_language',  $project->programming_language)}}">
    </div>
    <div class="col-12">
        <label for="content" class="form-label">Descizione</label>
        <textarea class="form-control" id="content" name="content" rows="10" placeholder="Inserisci descizione">{{old('content', $project->content)}}</textarea>
    </div>
    <div class="col-3 d-flex gap-2 justify-content-end">
        <button type="submit" class="btn btn-success">Salva</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
</div>  
</form>
@endsection

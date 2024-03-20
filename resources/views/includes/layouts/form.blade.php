@if ($project->exists)
    <form action="{{route('admin.projects.update', $project->id)}}" method="POST">
    @method('PUT')
@else
    <form action="{{route('admin.projects.store', $project->id)}}" method="POST">
@endif

@csrf
<div class="row g-4 justify-content-end py-5">
    <div class="col-8">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci titolo" value="{{old('title', $project->title)}}">
    </div>
    <div class="col-4">
        <label for="title" class="form-label">Linguaggi di Programmazione</label>
        <div class="form-group d-flex gap-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="htmlCheckbox" name="programming_languages[]" value="HTML" {{ $project->exists && strpos($project->programming_languages, 'HTML') !== false ? 'checked' : '' }}>
                <label class="form-check-label" for="htmlCheckbox">
                    HTML
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="cssCheckbox" name="programming_languages[]" value="CSS" {{ $project->exists && strpos($project->programming_languages, 'CSS') !== false ? 'checked' : '' }}>
                <label class="form-check-label" for="cssCheckbox">
                    CSS
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="jsCheckbox" name="programming_languages[]" value="JavaScript" {{ $project->exists && strpos($project->programming_languages, 'JavaScript') !== false ? 'checked' : '' }}>
                <label class="form-check-label" for="jsCheckbox">
                    JavaScript
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="phpCheckbox" name="programming_languages[]" value="PHP" {{ $project->exists && strpos($project->programming_languages, 'PHP') !== false ? 'checked' : '' }}>
                <label class="form-check-label" for="phpCheckbox">
                    PHP
                </label>
            </div>
        </div>
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

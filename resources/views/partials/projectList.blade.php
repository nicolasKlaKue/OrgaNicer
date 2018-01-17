@if($ProjectList -> isEmpty())
<div class="well">
    <h2>Keine Aufgaben</h2>
</div>
@else
    @foreach($projectList as $project)
        @include('partials.project', $project)
    @endforeach
@endif
@if($projects -> isEmpty())
<div class="well">
    <h2>Keine Aufgaben</h2>
</div>
@else
    @foreach($projects as $project)
        @include('partials.project', $project)
    @endforeach
@endif
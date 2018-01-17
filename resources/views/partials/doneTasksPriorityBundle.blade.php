@if($tasksList -> isEmpty())
<div class="well">
    <h2>Keine erledigten Aufgaben</h2>
</div>
@else
    @foreach($tasksList as $task)
        @include('partials.doneTask', $task)
    @endforeach
@endif
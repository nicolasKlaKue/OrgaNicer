@if($tasksList -> isEmpty())
<div class="well">
    <h2>Keine Aufgaben</h2>
</div>
@else
    @foreach($tasksList as $task)
        @include('partials.task', $task)
    @endforeach
@endif
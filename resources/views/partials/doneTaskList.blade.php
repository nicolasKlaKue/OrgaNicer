<h1>Heute:</h1>
@include('partials.doneTasksPriorityBundle', ['tasksList' => $tasks1])

<h1>Diese Woche:</h1>
@include('partials.doneTasksPriorityBundle', ['tasksList' => $tasks2])

<h1>Diesen Monat:</h1>
@include('partials.doneTasksPriorityBundle', ['tasksList' => $tasks3])

<h1>Bald:</h1>
@include('partials.doneTasksPriorityBundle', ['tasksList' => $tasks4])

<h1>Irgendwann:</h1>
@include('partials.doneTasksPriorityBundle', ['tasksList' => $tasks5])
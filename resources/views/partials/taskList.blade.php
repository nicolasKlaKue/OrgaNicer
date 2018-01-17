<h1>Heute:</h1>
@include('partials.tasksPriorityBundle', ['tasksList' => $tasks1])

<h1>Diese Woche:</h1>
@include('partials.tasksPriorityBundle', ['tasksList' => $tasks2])

<h1>Diesen Monat:</h1>
@include('partials.tasksPriorityBundle', ['tasksList' => $tasks3])

<h1>Bald:</h1>
@include('partials.tasksPriorityBundle', ['tasksList' => $tasks4])

<h1>Irgendwann:</h1>
@include('partials.tasksPriorityBundle', ['tasksList' => $tasks5])
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
        @include('partials.newTaskForm')
        @include('partials.newProjectForm')
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Hello {{Auth::user()->name}} this is your personal dashboard </div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if($tasks1 -> count() == 1)
                    Du hast Heute eine Aufgabe.
                    @else
                    Du hast Heute {{$tasks1 -> count()}} Aufgaben
                    @endif
                </div>
                

            </div>
            @include('partials.taskList')
        </div>
    </div>
</div>
@endsection

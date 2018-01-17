@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="font-weigt-bold text-center">Erledigte Aufgaben:</h1>
    <div class="row">
        <div class="col-md-12">
            @if (session('status'))
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    </div>
                </div>
            @endif
            @include('partials.doneTaskList')
        </div>
    </div>
</div>
@endsection

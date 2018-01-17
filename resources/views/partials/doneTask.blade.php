<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
                <div class="col-md-6">
                <h3>{{$task -> title}} </h3>
                <h4>Angelegt: {{$task->created_at->diffForHumans()}} - Erledigt: {{$task->finished_at->diffForHumans()}}</h4>

                </div>
                <div class="col-md-6">
                    <div class="row">
                    @if($task -> public)
                    <div class="btn">
                        <span class="public-blue glyphicon glyphicon-cloud"></span>
                    </div>
                    @endif
                    @if($task -> archive)
                    <div class="btn">
                        <span class="alert-warning glyphicon glyphicon-book"></span>
                    </div>
                    @endif
                    <form class="panel-body pull-right" action ="{{$task -> path() }}" method="Post">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button type="submit" name="button" title="Löschen (unwiederruflich)"class="btn btn-default "><span class="warning-red glyphicon glyphicon-trash"></span></button>
                    </form>
                    <form class="panel-body pull-right" action ="{{$task -> path() }}/notDone" method="Post">
                        {{csrf_field()}}
                        <button type="submit" name="button" title="Task abgeschlossen" class="btn btn-default "><span class="alert-yellow glyphicon glyphicon-ok"></span></button>
                    </form>
                    </div>
                </div>
        </div>
        <button type="button" class="btn btn-info btn-xs" data-toggle="collapse" data-target="#demo{{$task->id}}">Beschreibung:</button>
        <div id="demo{{$task->id}}" class="collapse">
            <br>
            <div class="well">
                <p>{{$task -> description}}</p>
            </div>
        </div>
    </div>
</div>
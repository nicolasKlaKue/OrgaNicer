<div class="panel panel-default">
    <div class="panel-body background-gray ">
        <div class="row">
          <div class="col-md-6 color-ubuntu">
          <h3 class="background-white">
            {{$project -> title}}
          </h3>
          <h3>
            {{$project -> due_at -> diffForHumans()}}
          </h3>
          </div>
          <div class="col-md-6 color-whitesmoke">
              <p>Contributors: {{$project -> users() -> count()}}</p>
          </div>
        </div>
        <button type="button" class="btn btn-info btn-xs" data-toggle="collapse" data-target="#demo{{$project->id}}">Beschreibung:</button>
        <div id="demo{{$project->id}}" class="collapse">
            <br>
            <div class="well color-darkgray">
                <p>{{$project -> description}}</p>
            </div>
        </div>
    </div>
</div>

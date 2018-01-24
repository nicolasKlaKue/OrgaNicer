<div class="panel panel-default">
    <div class="panel-heading">Neues Projekt erstellen:</div>
    <div class="panel-body">
        <form action="/project" method="POST">
        {{csrf_field()}}
            <div class="form-group">
                <label for="title">Titel:</label>
                <input type="text" id="title" class="form-control" name="title" value="{{old('title')}}" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea type="text" id="description" rows="3" class="form-control" name="description" value="{{old('description')}}"></textarea>
            </div>
            <div class="formgroup">
                <label for="date">Due Date:</label>
                <input name="date" class="form-control" type="date">
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label class="checkbox-inline" for=""><input name="public" type="checkbox">Public <span class="glyphicon glyphicon-cloud public-blue"></span></label>
                    <label class="checkbox-inline" for=""><input name="done" type="checkbox">Done <span class="glyphicon glyphicon-ok success-green"></span></label>
                    <label class="checkbox-inline" for=""><input name="archive" type="checkbox">Archive <span class="glyphicon glyphicon-ok alert-yellow"></span></label>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <button class="btn btn-success btn-block" type="submit" name="button">Erstellen</button>
            </div>
        </form>
    </div>
</div>
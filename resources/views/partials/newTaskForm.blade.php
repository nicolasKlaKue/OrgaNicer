<div class="panel panel-default">
    <div class="panel-heading">Neue Aufgabe erstellen:</div>
    <div class="panel-body">
        <form action="/tasks" method="POST">
        {{csrf_field()}}
            <div class="form-group">
                <label for="title">Titel:</label>
                <input type="text" id="title" class="form-control" name="title" value="{{old('title')}}" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea type="text" id="description" rows="3" class="form-control" name="description" value="{{old('description')}}"></textarea>
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label class="checkbox-inline" for=""><input name="archive" type="checkbox">Archive <span class="glyphicon glyphicon-book"></span></label>
                    <label class="checkbox-inline" for=""><input name="public" type="checkbox">Public <span class="glyphicon glyphicon-cloud"></span></label>
                    <label class="checkbox-inline" for=""><input name="done" type="checkbox">Done <span class="glyphicon glyphicon-ok"></span></label>
                </div>
            </div>
            <div class="form-group">
                <label for="priority">Priority:</label>
                <select name="priority" class="form-control" id="priority">
                    <option value="1">1 - Sehr dringend</option>
                    <option value="2">2 - Dringend</option>
                    <option value="3">3 - Zügig</option>
                    <option value="4">4 - Bald</option>
                    <option value="5">5 - Irgendwann</option>
                </select>
            </div>
            <div class="formgroup">
                <label for="date">Due Date:</label>
                <input name="date" class="form-control" type="date">
            </div>
            <hr>
            <div class="form-group">
                <button class="btn btn-success btn-block" type="submit" name="button">Erstellen</button>
            </div>
        </form>
    </div>
</div>
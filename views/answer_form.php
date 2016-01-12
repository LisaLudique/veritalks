<form action="update.php" method="post">
    <fieldset>
        <div class="form-group">
          <input autocomplete="off" autofocus class="form-control" name="id" placeholder="ID" type="text"/><br><br>
            <input autocomplete="off" name="answer" placeholder="Response" type="text"/><br><br>
            <input autocomplete="off" name="tag[]" value="Academics" type="checkbox"/>Academics
            <input autocomplete="off" name="tag[]" value="Social_Scene" type="checkbox"/>Social Scene
            <input autocomplete="off" name="tag[]" value="Student_Life" type="checkbox"/>Student Life
            <input autocomplete="off" name="tag[]" value="Real_World" type="checkbox"/>Real World
            <input autocomplete="off" name="tag[]" value="Prospective_Students" type="checkbox"/>Prospective Students
            <input autocomplete="off" name="tag[]" value="Financial_Aid" type="checkbox"/>Financial Aid
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Submit
            </button>
        </div>
    </fieldset>
</form>
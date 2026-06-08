<h1>Create Board</h1>

<form method="POST" action="/boards">

    {{ csrf_field() }}

    <div>
        <label>Name</label>
        <input type="text" name="name">
    </div>

    <br>

    <div>
        <label>Description</label>
        <textarea name="description"></textarea>
    </div>

    <br>

    <button type="submit">
        Create Board
    </button>

</form>
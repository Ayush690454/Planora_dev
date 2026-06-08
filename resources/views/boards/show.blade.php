<h1>{{ $board->name }}</h1>

<p>{{ $board->description }}</p>

<hr>
<form method="POST"
      action="/boards/{{ $board->id }}/lists">

    {{ csrf_field() }}

    <input type="text"
           name="name"
           placeholder="List Name">

    <button type="submit">
        Create List
    </button>

</form>

<hr>

<h2>Lists</h2>

@foreach($board->lists as $list)

    <h3>{{ $list->name }}</h3>

    @foreach($list->cards as $card)

        <p>
            {{ $card->title }}
        </p>

    @endforeach

    <form method="POST"
          action="/lists/{{ $list->id }}/cards">

        {{ csrf_field() }}

        <input type="text"
               name="title"
               placeholder="Card Title">

        <button type="submit">
            Add Card
        </button>

    </form>

    <hr>

@endforeach
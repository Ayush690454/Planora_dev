<h1>My Boards</h1>

<a href="/boards/create">
    Create New Board
</a>

<hr>

@foreach($boards as $board)

    <h3>
        <a href="/boards/{{ $board->id }}">
            {{ $board->name }}
        </a>
    </h3>

    <p>{{ $board->description }}</p>

@endforeach
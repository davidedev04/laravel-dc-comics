@extends('layouts.main-layout')
@section('head')
<title>Home</title>
@endsection
@section('content')
<h1>Comics:</h1>
<a href="{{ route('comic.create') }}">CREATE</a>
<br><br>
<ul>
    @foreach ($comics as $comic)
    <li>
        <a href="{{ route('comic.show', $comic -> id) }}">
            {{ $comic -> title }}
        </a>
        <!-- <a class="ms-3" href="{{ route('comic.edit', $comic -> id) }}">Edit</a>
        <form class="ms-3 d-inline-block" action="{{ route('comic.destroy', $comic -> id) }}" method="POST"
            onsubmit="return confirm('Confermare?');">

            @csrf
            @method('DELETE')

            <input type="submit" value="DELETE"> -->
        </form>
    </li>
    @endforeach
</ul>
@endsection
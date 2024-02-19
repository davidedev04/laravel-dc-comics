@extends('layouts.main-layout')
@section('head')
<title>Home</title>
@endsection
@section('content')
<h1>New comic</h1>
<form action="{{ route('comic.store') }}" method="POST">

    @csrf
    @method('POST')

    <label for="title">Title</label>
    <input type="text" name="title" id="title">
    <br>
    <label for="description">Description</label>
    <input type="text" name="description" id="description">
    <br>
    <label for="price">Price</label>
    <input type="number" name="price" id="price">
    <br>
    <input type="submit" value="CREATE">

</form>
@endsection
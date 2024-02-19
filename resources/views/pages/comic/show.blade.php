@extends('layouts.main-layout')
@section('head')
<title>Home</title>
@endsection
@section('content')
<h1>{{ $comic -> title }} - {{ $comic -> price }}$</h1>
<span>{{ $comic -> description }}</span>
@endsection
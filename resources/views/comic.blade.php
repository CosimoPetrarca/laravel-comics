@extends('layouts.app')

@section('page.main')


<div class="comic">
    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
    <h1>{{ $comic['title'] }}</h1>
    <p>{{ $comic['description'] }}</p>
</div>
    
@endsection
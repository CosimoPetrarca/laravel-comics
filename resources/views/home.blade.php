@extends('layouts.app')

@section('page.main')
<div class="jumbo">
</div>



<div class="card">
    @foreach ($comics as $item)
    <h3>{{ $item['title'] }}</h3>
    <img src="{{ $item['thumb'] }}" alt="Immagine">
    @endforeach

</div>

@endsection
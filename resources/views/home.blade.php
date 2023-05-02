@extends('layouts.app')

@section('page.main')
<div class="jumbo">
</div>


<section>
    <div class="btn-top">
        <button>
            <h3>CURRENT SERIES</h3>
        </button>
    </div>
    <div class="locandine">

        @foreach ($comics as $item)
        <div class="prova">
            <img src="{{ $item['thumb'] }}" alt="Immagine">
            <h3>{{ $item['title'] }}</h3>
        </div>
        @endforeach

    </div>
    <div class="btn-bottom">
        <button>
            <h4>LOAD MORE</h4>
        </button>
    </div>
</section>
@endsection
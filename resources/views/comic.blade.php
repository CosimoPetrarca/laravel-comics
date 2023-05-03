@extends('layouts.app')

@section('page.main')
<div class="jumbo">
</div>
<div class="blue-bar"></div>

<div class="d-flex helpme ">
  <div class="comic">
    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
    <h1>{{ $comic['title'] }}</h1>
    <nav id="navbar-example2" style="background-color: #55ba59"; class="navbar bg-body-tertiary px-3 mb-3">
        <a class="navbar-brand text-white" href="#">U.S. Price: {{ $comic['price'] }}</a>
        <ul class="nav nav-pills">
          
          <li class="nav-item">
            <a class="nav-link text-white" href="#scrollspyHeading2">AVAILABLE</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Check Availability</a>
            
          </li>
        </ul>
    </nav>
    <p>{{ $comic['description'] }}</p>
  </div>
  <div class="adv">
    <h6>ADVERTISEMENT</h6>
    <img src="{{Vite::asset('resources/img/advisor.png')}}" alt="adv">
  </div>
</div>

<div class="ms-info">
    <div class="container">
     <div class="row align-items-start pt-4">
      <div class="col-6 talent">
        <h4>Talent</h4>
        <p class="artist-list">Art By:
            @foreach ($comic['artists'] as $artist)
            <span>{{$artist}}</span>
            @endforeach
        </p>
            
        <p class="artist-list">Writen By:
            @foreach ($comic['writers'] as $writer)
            <span>{{$writer}}</span>
            @endforeach
        </p>
      </div>
      <div class="col-6 specs">
        <h4>Specs</h4>
        <p class="artist-list">Series: <span>{{ $comic['type'] }}</span></p>
        <p>U.S. Price: {{ $comic['price'] }}</p>
        <p>On Sale Date: {{ $comic['sale_date'] }}</p>
      </div>
    </div>
    </div>
  </div>



  
@endsection
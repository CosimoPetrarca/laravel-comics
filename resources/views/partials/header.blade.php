<header>
    <div class="container">
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo" srcset="">
        </div>
        <div class="lista">
            <ul>
                @foreach ($navLinks as $link)
                <li><strong><a href="#">{{ $link }}</a></strong></li>
                @endforeach
            </ul>
        </div>
    </div>
</header>

<header class="container">
    <a href="{{ route('home') }}">
        <img src="{{ asset('storage/assets/img/dc-logo.png')}}" alt="">
    </a>
    <ul>
        {{-- @foreach ($links as $link)
            <li>
                <a href="{{ $link['url'] }}">
                    {{ $link['text'] }}
                </a>
            </li>
        @endforeach --}}
    </ul>
</header>
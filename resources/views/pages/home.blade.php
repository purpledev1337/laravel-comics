@extends('layouts.main-layout')

@section('content')
<main>
    <div class="container">
        <section>
            @foreach ($cards as $card)
            <div class="product_card">
                <a href="{{ route('comics') }}">                
                    <img src="{{ $card['thumb']}}" alt="">
                    <div class="product_name">
                        {{ $card['series']}}
                    </div>
                    <div class="product_details">
                    </div>
                </a>
            </div>
            @endforeach
        <div id="current_series_btn">
            Current Series
        </div>
        </section>
        <div id="products_load_more">
        Load More
        </div>
    </div>
</main>
@endsection
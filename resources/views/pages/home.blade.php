@extends('layouts.main-layout')

@section('content')
<main>
    <div class="container">
        <section>
            {{-- for each --}}
            <div class="product_card">
                <a href="{{ route('comics') }}">                
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="img"/>
                    <div class="product_name">
                        Action Comics
                    </div>
                    <div class="product_details">
                    <div>
                        comic book
                    </div>
                    <div>
                        $19.99
                    </div>
                    </div>
                </a>
            </div>
            <div class="product_card">
                <a href="{{ route('comics') }}">                
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/AV1976_01_300-001_HD_5f738f6e39ddd7.18205602.jpg?itok=VgdYdJ01" alt="img"/>
                    <div class="product_name">
                        American Vampire 1976
                    </div>
                    <div class="product_details">
                    <div>
                        comic book
                    </div>
                    <div>
                        $3.99
                    </div>
                    </div>
                </a>
            </div>
            <div class="product_card">
                <a href="{{ route('comics') }}">                
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2018/08/AQMv4_UW_153-001_HD_5b7efa1745a9b8.08589135.jpg?itok=HPTtnrsb" alt="img"/>
                    <div class="product_name">
                        Aquaman
                    </div>
                    <div class="product_details">
                    <div>
                        graphic novel
                    </div>
                    <div>
                        $16.99
                    </div>
                    </div>
                </a>
            </div>
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
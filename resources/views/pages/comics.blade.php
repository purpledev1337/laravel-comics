@extends('layouts.main-layout')

@section('content')
<div id="comics_bar">
    <div class="container">
        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">
    </div>
</div>
<div id="comics_page" class="container">
    <div class="left">
        <h1>Action Comics #1000: The Deluxe Edition</h1>
        <div class="buy_bar">
            <div class="left">
                <div>
                    U.S. Price:
                    <div class="price">$19.99</div>
                </div>
                <div>AVAIBLE</div>
            </div>
            <div class="right">
                <div>Check Avaibility &#8227;</div>
            </div>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore sapiente fugiat maiores, quaerat ut culpa perferendis nostrum nesciunt placeat, magni molestias fugit facere voluptas perspiciatis soluta est esse ducimus labore. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea cum atque facere blanditiis nisi sunt dolor laborum exercitationem nemo asperiores? Accusamus quibusdam facilis magnam nisi ipsam culpa fugit sit iusto?</p>    
    </div>
    <div class="right">
        <h3>Advertisement</h3>
        <img src="{{ asset('storage/assets/img/advertisement.png') }}" alt="">
    </div>
</div>
@endsection
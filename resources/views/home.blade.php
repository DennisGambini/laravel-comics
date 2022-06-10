@extends('layouts.base')

@section('pageTitle')
Home
@endsection

@section('mainContent')


<main id="home">
    <section class="grid">
        <div class="container">
            <div class="row">
                
                @foreach($cards as $card)
                <div class="card">
                    <div class="image">
                        <img src="{{$card['thumb']}}" alt="immagine di {{$card['series']}}">
                    </div>
                    <div class="title">{{$card['series']}}</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="main-footer">
        <div class="container">
            <div class="box">
                <div class="image">
                    <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="immagine">
                </div>
                <div class="text">digital comics</div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="immagine">
                </div>
                <div class="text">dc merchandise</div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="immagine">
                </div>
                <div class="text">subscription</div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="immagine">
                </div>
                <div class="text">comic shop locator</div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="immagine">
                </div>
                <div class="text">dc power visa</div>
            </div>
        </div>
    </section>
</main>










@endsection
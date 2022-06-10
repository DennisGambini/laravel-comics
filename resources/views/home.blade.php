@extends('layouts.base')

@section('pageTitle')
Home
@endsection

@section('mainContent')


<main id="home">
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
</main>










@endsection
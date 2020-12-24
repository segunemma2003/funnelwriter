@extends('frontend.layouts.master')
@section('content')
@push('style')
<link rel="stylesheet" href="{{asset('css/sales-letter.css')}}">
@endpush
<main class="main__content">
            <ul class="cards">
                <a href="{{route('b2b-letter')}}" class="card">
                    <div class="card__circle card__circle--pink"></div>
                    <p class="card__title">B2B</p>
                    <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                </a>
                <a href="{{route('long-letter')}}" class="card">
                    <div class="card__circle card__circle--green"></div>
                    <p class="card__title">Long Form Sales Letter</p>
                    <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                </a>
                <a href="{{route('short')}}" class="card">
                    <div class="card__circle card__circle--orange"></div>
                    <p class="card__title">Short Forms Sales Letter</p>
                    <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                </a>
                <a href="{{route('ez-squeeze')}}" class="card">
                    <div class="card__circle card__circle--green"></div>
                    <p class="card__title">Ez squeeze</p>
                    <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                </a>
                <a href="{{route('bridge')}}" class="card">
                    <div class="card__circle card__circle--orange"></div>
                    <p class="card__title">Bridge</p>
                    <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                </a>
                </li>
                <a href="{{route('highticket')}}" class="card">
                    <div class="card__circle card__circle--purple"></div>
                    <p class="card__title">High Ticket</p>
                    <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                </a>
                <a href="{{route('knockdown')}}" class="card">
                    <div class="card__circle card__circle--green"></div>
                    <p class="card__title">Knocked Down</p>
                    <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                </a>
                <a href="{{route('narative')}}" class="card">
                    <div class="card__circle card__circle--green"></div>
                    <p class="card__title">Narative</p>
                    <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                </a>
                <a href="{{route('returnvisitor')}}" class="card">
                    <div class="card__circle card__circle--green"></div>
                    <p class="card__title">Return Visitor</p>
                    <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                </a>
                <a href="{{route('vampire')}}" class="card">
                    <div class="card__circle card__circle--green"></div>
                    <p class="card__title">Vampire</p>
                    <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                </a>
                <a href="{{route('venetian')}}" class="card">
                    <div class="card__circle card__circle--green"></div>
                    <p class="card__title">Venetian</p>
                    <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                </a>
                <a href="{{route('web3')}}" class="card">
                    <div class="card__circle card__circle--green"></div>
                    <p class="card__title">Web 3.0</p>
                    <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                </a>
                <a href="{{route('workhorse')}}" class="card">
                    <div class="card__circle card__circle--green"></div>
                    <p class="card__title">Knocked Down</p>
                    <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                </a>
                <!-- Content Goes in here -->
            </ul>
        </main>
        @push('script')

@endpush
@endsection

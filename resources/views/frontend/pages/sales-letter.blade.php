@extends('frontend.layouts.master')
@section('content')
@push('style')
<link rel="stylesheet" href="{{asset('css/sales-letter.css')}}">
@endpush
<main class="main__content">
            <ul class="cards">
                <a href="B2B/B2B-letter.html" class="card">
                    <div class="card__circle card__circle--pink"></div>
                    <p class="card__title">B2B</p>
                    <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                </a>
                <a href="Long/long-letter.html" class="card">
                    <div class="card__circle card__circle--green"></div>
                    <p class="card__title">Long Form Sales Letter</p>
                    <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                </a>
                <a href="Short/short-letter.html" class="card">
                    <div class="card__circle card__circle--orange"></div>
                    <p class="card__title">Short Forms Sales Letter</p>
                    <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                </a>
                <a href="Ez-squeeze/ez-squeeze.html" class="card">
                    <div class="card__circle card__circle--green"></div>
                    <p class="card__title">Ez squeeze</p>
                    <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                </a>
                <a href="Bridge/bridge.html" class="card">
                    <div class="card__circle card__circle--orange"></div>
                    <p class="card__title">Bridge</p>
                    <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                </a>
                </li>
                <a href="HighTicket/highticket.html" class="card">
                    <div class="card__circle card__circle--purple"></div>
                    <p class="card__title">High Ticket</p>
                    <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                </a>
                <a href="KnockedDown/knockdown.html" class="card">
                    <div class="card__circle card__circle--green"></div>
                    <p class="card__title">Knocked Down</p>
                    <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                </a>
                <a href="Narative/narative.html" class="card">
                    <div class="card__circle card__circle--green"></div>
                    <p class="card__title">Narative</p>
                    <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                </a>
                <a href="ReturnVisitor/returnvisitor.html" class="card">
                    <div class="card__circle card__circle--green"></div>
                    <p class="card__title">Return Visitor</p>
                    <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                </a>
                <a href="Vampire/vampire.html" class="card">
                    <div class="card__circle card__circle--green"></div>
                    <p class="card__title">Vampire</p>
                    <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                </a>
                <a href="Venetian/venetian.html" class="card">
                    <div class="card__circle card__circle--green"></div>
                    <p class="card__title">Venetian</p>
                    <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                </a>
                <a href="Web3.0/web3.html" class="card">
                    <div class="card__circle card__circle--green"></div>
                    <p class="card__title">Web 3.0</p>
                    <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                </a>
                <a href="WorkHorse/workhorse-letter.html" class="card">
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
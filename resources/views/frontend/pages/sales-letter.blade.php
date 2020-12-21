@extends('frontend.layouts.master')
@section('content')
@push('style')
<link rel="stylesheet" href="{{asset('css/sales-letter.css')}}">
@endpush
        <!-- Main Content -->
        <main class="main__content">
            <ul class="cards">
                <li class="card">
                    <a href="{{route('b2b-letter')}}">
                        <div class="card__circle card__circle--pink"></div>
                        <p class="card__title">B2B</p>
                        <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                    </a>
                </li>
                <li class="card">
                    <a href="{{route('long-letter')}}">
                        <div class="card__circle card__circle--green"></div>
                        <p class="card__title">Long Form Sales Letter</p>
                        <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                    </a>
                </li>
                <li class="card">
                    <a href="{{route('short')}}">
                        <div class="card__circle card__circle--orange"></div>
                        <p class="card__title">Short Forms Sales Letter</p>
                        <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                    </a>
                </li>
                <li class="card">
                    <a href="{{route('ez-squeeze')}}">
                        <div class="card__circle card__circle--green"></div>
                        <p class="card__title">Ez squeeze</p>
                        <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                    </a>
                </li>
                <li class="card">
                    <a href="#">
                        <div class="card__circle card__circle--orange"></div>
                        <p class="card__title">Free Book Giveaway</p>
                        <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                    </a>
                </li>
                <li class="card">
                    <a href="#">
                        <div class="card__circle card__circle--purple"></div>
                        <p class="card__title">Order form Script</p>
                        <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                    </a>
                </li>
                <li class="card">
                    <a href="#">
                        <div class="card__circle card__circle--green"></div>
                        <p class="card__title">Thank You Page Script</p>
                        <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                    </a>
                </li>
                <!-- Content Goes in here -->
            </ul>
        </main>
        @push('script')

@endpush
@endsection
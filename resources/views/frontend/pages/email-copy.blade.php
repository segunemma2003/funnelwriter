@extends('frontend.layouts.master')
@section('content')
@push('style')
@endpush
<main class="main__content">
            <ul class="cards">
                                
                <a href="./B2BLead-gen.html" class="card">
                    <div class="card__circle card__circle--orange"></div>
                    <p class="card__title">B2B lead generator</p>
                    <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                </a>
                
                    <a href="./emailForms.html" class="card">
                        <div class="card__circle card__circle--pink"></div>
                        <p class="card__title">3 Door Email Sequence</p>
                        <p class="card__body">Script That You Can Use To On-board Your New Subscribers And </p>
                    </a>
                
                
                    <a href="./emailcomics.html" class="card">
                        <div class="card__circle card__circle--green"></div>
                        <p class="card__title">‘Yes Goes Silent’ B2B follow up</p>
                        <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                    </a>
                
                
                    <a href="./emailcomics.html" class="card">
                        <div class="card__circle card__circle--orange"></div>
                        <p class="card__title">Affiliate Promotion</p>
                        <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                    </a>
                
                
                    <a href="./emailcomics.html" class="card">
                        <div class="card__circle card__circle--green"></div>
                        <p class="card__title">B2B ‘comics know great business’</p>
                        <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                    </a>
                
                
                    <a href="./emailfacebook.html" class="card">
                        <div class="card__circle card__circle--purple"></div>
                        <p class="card__title">Facebook niche page</p>
                        <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                    </a>
                
                
                    <a href="./emailgiveaway.html" class="card">
                        <div class="card__circle card__circle--green"></div>
                        <p class="card__title">Giveaway bonding to buyer</p>
                        <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                    </a>
                
                
                    <a href="./emailForms.html" class="card">
                        <div class="card__circle card__circle--orange"></div>
                        <p class="card__title">Work smarter product promo</p>
                        <p class="card__body">Script that you can use to onboard your new subscribers and</p>
                    </a>
                
                
                <!-- Content Goes in here -->
            </ul>
        </main>
@push('script')
<script src="{{mix('js/app.js')}}"></script>
@endpush
@endsection

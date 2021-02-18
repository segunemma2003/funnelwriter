@extends('frontend.layouts.master')
@section('header')
<div class="generate">
    <h2  style="color:white !important;">Generate Attention-Grabbing Emails</h2>
    <p  style="color:white !important;">Create emails that subscribers would love to read</p>
    </div>
    <div class="breadcrumb">
    <span>Home</span> / <span class="active">Email copy</span>
</div>
@endsection
@section('content')
@push('style')
@endpush
<main class="main__content">
            <ul class="cards">
                                
                <a href="{{route('emailleadgen')}}" class="card">
                    <div class="card__circle card__circle--orange"></div>
                    <p class="card__title">B2B Lead Nurturing</p>
                    <p class="card__body">Use this email to nurture your B2B leads</p>
                </a>
                
                    <a href="{{route('email3door')}}" class="card">
                        <div class="card__circle card__circle--pink"></div>
                        <p class="card__title">3 Door Email Sequence</p>
                        <p class="card__body">Email that uses a 3 step approach to sell your product</p>
                    </a>
                
                
                    <a href="{{route('emailfollowup')}}" class="card">
                        <div class="card__circle card__circle--green"></div>
                        <p class="card__title">B2B Follow Up Sequence</p>
                        <p class="card__body">Follow up with your subscribers when they miss your offer</p>
                    </a>
                
                
                    <a href="{{route('emailaffiliate')}}" class="card">
                        <div class="card__circle card__circle--orange"></div>
                        <p class="card__title">Affiliate Promotion</p>
                        <p class="card__body">Promote products the right way using email</p>
                    </a>
                
                
                    <a href="{{route('emailcomics')}}" class="card">
                        <div class="card__circle card__circle--green"></div>
                        <p class="card__title">B2B Comic Email</p>
                        <p class="card__body">Leverage a comic storyline to sell your offer</p>
                    </a>
                
                
                    <a href="{{route('emailfacebook')}}" class="card">
                        <div class="card__circle card__circle--purple"></div>
                        <p class="card__title">Facebook Optin Sequence</p>
                        <p class="card__body">Nuture and convert your Facebook optin subcribers</p>
                    </a>
                
                
                    <a href="{{route('emailgiveaway')}}" class="card">
                        <div class="card__circle card__circle--green"></div>
                        <p class="card__title">Giveaway Bonding Sequence</p>
                        <p class="card__body">Establish a strong bonding with your subscribers after giveaway</p>
                    </a>
                
                
                    <a href="{{route('emailworksmart')}}" class="card">
                        <div class="card__circle card__circle--orange"></div>
                        <p class="card__title">Work Smarter Sequence</p>
                        <p class="card__body">Use this email to indoctrinate your subscribers</p>
                    </a>
                
                
                <!-- Content Goes in here -->
            </ul>
        </main>
@push('script')
<script src="{{mix('js/app.js')}}"></script>
@endpush
@endsection

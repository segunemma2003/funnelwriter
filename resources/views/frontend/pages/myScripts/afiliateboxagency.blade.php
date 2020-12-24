@extends('frontend.layouts.master')
@section('desc')
<div class="page__header__breadcrumb">
    <div class="generate">
        <h2>AfiliateBoxAgency</h2>
        <p>Header description goes here</p>
    </div>
    <div class="breadcrumb">
        <span>Home</span> / <span class="active">Headline</span>
    </div>
</div>
@endsection
@section('content')
@push('style')
<link rel="stylesheet" href="{{asset('myscript.css')}}">
@endpush
        <!-- Main Content -->
        <main class="main__content aba">
            <div class="afiliate__box__agency">
                <!-- Content Goes in here -->

            </div>
        </main>
        @push('script')
        <script src="{{asset('myscript.js')}}"></script>

@endpush
@endsection


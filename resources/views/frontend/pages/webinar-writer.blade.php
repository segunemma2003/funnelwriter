@extends('frontend.layouts.master')
@section('desc')
<div class="generate">
    <h2>Generate your sales offer</h2>
    <p>Create your offers</p>
</div>
<div class="breadcrumb">
    <span>Home</span> / <span class="active">Headline</span>
</div>
@endsection
@section('content')
@push('style')
<link rel="stylesheet" href="{{asset('css/sales-letter.css')}}">
@endpush
<main class="main__content">
            <div>
                Hello There
                <!-- Content Goes in here -->
            </div>
        </main>
        @push('script')
<script src="{{mix('js/app.js')}}"></script>
@endpush
@endsection

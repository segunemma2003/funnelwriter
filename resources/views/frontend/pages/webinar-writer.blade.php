@extends('frontend.layouts.master')
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
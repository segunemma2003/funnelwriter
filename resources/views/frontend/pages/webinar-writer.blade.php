@extends('frontend.layouts.master')
@section('title', 'Webinar-Writer')
@section('content')
@push('style')
<link rel="stylesheet" href="{{asset('css/sales-letter.css')}}">
@endpush
        <!-- Main Content -->
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

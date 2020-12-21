@extends('frontend.layouts.master')
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

  
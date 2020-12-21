@extends('frontend.layouts.master')
@section('content')
@push('style')
<link rel="stylesheet" href="{{asset('css/headline.css')}}">
@endpush
<main class="main__content">
            <!-- Headline Navigation Bar -->
            <div class="headline-navigation">
                <ul class="headline-links">
                    <li>
                        <a class="active-link link" href="{{route('headline2')}}">DIY Headline Formulas</a>
                    </li>

                    <li>
                        <a class="link" href="{{route('headline3')}}">Explanatory/Why</a>
                    </li>

                    <li>
                        <a class="link" href="{{route('headline4')}}">Fun/Playful</a>
                    </li>
                    
                    <li>
                        <a class="link" href="{{route('headline5')}}">How To</a>
                    </li>

                    <li>
                        <a class="link" href="{{route('headline6')}}">Numbered Lists</a>
                    </li>

                    <li>
                        <a class="link" href="{{route('headline7')}}">Strong/Controversial</a>
                    </li>
                </ul>
            </div>

            <!-- Headline Main Content -->
            <div class="headline-main-content">
                <!-- Left hand side of the Main Content -->
                <div class="left-main-content">
                    <ul class="">
                        <li>
                            <p>Desired outcome</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Your Headline Branding</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="./images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Keyword(s)</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Supporting keywords</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Comparison 1</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Comparison 2</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Number of Experts in Roundup</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Experts Roundup Topic</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Summary of Topic in Under 4 Words</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Event in Topic</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Hot Button Issue in Topic</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Ridiculous WTF Sentence</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Industry</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Short Quotable Testimonial</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Impressive Number From Your Business</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>
                    </ul>
                </div>

                <!-- Right hand side of the Main Content -->
                <div class="right-main-content">
                    <div class="background-image">
                        <img src="{{asset('images/Group 167.svg')}}" alt="">
                    </div>
                </div>
            </div>
        </main>
@push('script')
<script src="{{asset('js/headline.js')}}"></script>
@endpush
@endsection
@extends('frontend.layouts.master')
@section('content')
@push('style')
<link rel="stylesheet" href="{{asset('css/headline.css')}}">
@endpush
        <!-- Main Content -->
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
                            <p>Topic</p>
                            <input  type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Desired outcome</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Undesirable outcome</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}g" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Audience</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Points in Content</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Helpful Aide</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Seemingly inconsequential Action</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>
                    </ul>
                </div>

                <!-- Right hand side of the Main Content -->
                <div class="right-main-content">
                    <div>
                        <button class="save-project-btn">Save to project</button>
                    </div>

                    <div class="right-content">
                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num1.svg')}}" alt="">The How / Result Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num2.svg')}}" alt="">The Explainer Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num3.svg')}}" alt="">The Ignorance Avoidance Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num4.svg')}}" alt="">The Solutions Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num5.svg')}}" alt="">The Analysis Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num6.svg')}}" alt="">The Teaser Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </main>
        @push('script')
        <script src="{{asset('js/headline.js')}}"></script>
@endpush
@endsection
   
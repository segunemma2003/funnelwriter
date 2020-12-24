@extends('frontend.layouts.master')
@section('desc')
<div class="page__header__breadcrumb">
    <div class="generate">
        <h2 class="headline-header">Kickass Headline Generator</h2>
        <p>write attention grabbing headlines</p>
    </div>
    <div class="breadcrumb">
        <span>Home</span> / <span class="active">Headline</span>
    </div>
</div>
@endsection
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
                        <a href="{{route('headline2')}}">DIY Headline Formulas</a>
                    </li>

                    <li>
                        <a href="{{route('headline3')}}">Explanatory/Why</a>
                    </li>

                    <li>
                        <a href="{{route('headline4')}}">Fun/Playful</a>
                    </li>

                    <li>
                        <a href="{{route('headline5')}}">How To</a>
                    </li>

                    <li>
                        <a href="{{route('headline6')}}">Numbered Lists</a>
                    </li>

                    <li>
                        <a class="active-link" href="{{route('headline7')}}">Strong/Controversial</a>
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
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Desired Outcome (to)</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Successful Outcome (Past Tense)</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Time Frame</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Well Known Celebrity</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Biggest Frustration</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Descriptive Power Word</p>
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
                            <legend> <img src="{{asset('images/num1.svg')}}" alt="">The How to Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num2.svg')}}" alt="">The Ultimate Guide Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num3.svg')}}" alt="">The Celebrity Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num4.svg')}}" alt="">The How To / Without Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num5.svg')}}" alt="">The Tutorial Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num6.svg')}}" alt="">The Results Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num7.svg')}}" alt="">The Like A Boss Headline</legend>
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

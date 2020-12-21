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
                            <p>Desired Outcome (to)</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Action</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Audience (Singular)</p>
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
                            <p>Past Tense</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Common Objection</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Outrageous Claim</p>
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
                            <legend> <img src="{{asset('images/num1.svg')}}" alt="">The See What Happened Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num2.svg')}}" alt="">The Outrageous Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num3.svg')}}" alt="">Objection Preemptive Headline (Negative)</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num4.svg')}}" alt="">Objection Preemptive Headline (Positive)</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num5.svg')}}" alt="">The Quiz Headline 1</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num6.svg')}}" alt="">The Quiz Headline 2</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num7.svg')}}" alt="">The Promise Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num8.svg')}}" alt="">The Trivia Headline</legend>
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
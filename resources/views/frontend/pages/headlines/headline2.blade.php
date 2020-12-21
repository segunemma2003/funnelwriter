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
                            <p>Desired outcome</p>
                            <input class="input" type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Your Headline Branding</p>
                            <input class="input" type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Keyword(s)</p>
                            <input class="input" type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Supporting keywords</p>
                            <input class="input" type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Comparison 1</p>
                            <input class="input" type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Comparison 2</p>
                            <input class="input" type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Number of Experts in Roundup</p>
                            <input class="input" type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Experts Roundup Topic</p>
                            <input class="input" type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Summary of Topic in Under 4 Words</p>
                            <input class="input" type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Event in Topic</p>
                            <input class="input" type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Hot Button Issue in Topic</p>
                            <input class="input" type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Ridiculous WTF Sentence</p>
                            <input class="input" type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Industry</p>
                            <input class="input" type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Short Quotable Testimonial</p>
                            <input class="input" type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="{{asset('images/Vector.svg')}}" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Impressive Number From Your Business</p>
                            <input class="input" type="text" placeholder="Label">
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
                            <legend> <img src="{{asset('images/num1.svg')}}" alt="">The Social Proof Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num2.svg')}}" alt="">The Testimonial Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="./images/Vector3.svg" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num3.svg')}}" alt="">The Sneak Peek Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num4.svg')}}" alt="">The Comparison</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num5.svg')}}" alt="">The Comparison Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num6.svg')}}" alt="">The Expert Round Up Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num7.svg')}}" alt="">The Snackable Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num8.svg')}}" alt="">The WTF Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num9.svg')}}" alt="">The Hot Button Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num10.svg')}}" alt="">The Breaking News Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num11.svg')}}" alt="">The Keyword Headline</legend>
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
        <script src="{{asset('js/headline.js') }}"></script>
@endpush    
@endsection
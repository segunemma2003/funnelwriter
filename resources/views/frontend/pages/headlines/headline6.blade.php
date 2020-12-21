@extends('frontend.layouts.master')
@section('content')
@push('style')
<link rel="stylesheet" href="{{asset('css/headline.css')}}">)
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
                            <p>Undesirable Outcome</p>
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
                    </ul>
                </div>

                <!-- Right hand side of the Main Content -->
                <div class="right-main-content">
                    <div>
                        <button class="save-project-btn">Save to project</button>
                    </div>

                    <div class="right-content">
                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num1.svg')}}" alt="">The List Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num2.svg')}}" alt="">The Sidenote Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num3.svg')}}" alt="">The Proven Methods Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num4.svg')}}" alt="">The Mistakes Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num5.svg')}}" alt="">The Secrets Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num6.svg')}}" alt="">The Lessons Learned Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num7.svg')}}" alt="">The Silver Plotter Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num8.svg')}}" alt="">The Hacks Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num9.svg')}}" alt="">The Steps to Result Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num10.svg')}}" alt="">The Reasons Headline</legend>
                            <div class="output">
                                <form>
                                    <input class="show-output" placeholder="Write attention grabbing headlines"></input>
                                </form>
                                <img class="copy-output" src="{{asset('images/Vector3.svg')}}" alt="">
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <img src="{{asset('images/num11.svg')}}" alt="">The Little Known Methods Headline</legend>
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
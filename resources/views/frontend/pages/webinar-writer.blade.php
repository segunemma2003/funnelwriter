@extends('frontend.layouts.master')
@section('content')
@push('style')
<link rel="stylesheet" href="{{asset('css/webinar-script.css')}}">
@endpush
<main class="main__content">
            <div class="webinar__script1">
                <!-- Content Goes in here -->
                <div class="form__checker">
                    <div class="form__part__title prospect__information">
                        <div class="left__text">
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.5 10.0857V11.0057C21.4988 13.1621 20.8005 15.2604 19.5093 16.9875C18.2182 18.7147 16.4033 19.9782 14.3354 20.5896C12.2674 21.201 10.0573 21.1276 8.03447 20.3803C6.01168 19.633 4.28465 18.2518 3.11096 16.4428C1.93727 14.6338 1.37979 12.4938 1.52168 10.342C1.66356 8.19029 2.49721 6.14205 3.89828 4.5028C5.29935 2.86354 7.19279 1.72111 9.29619 1.24587C11.3996 0.770634 13.6003 0.988061 15.57 1.86572" stroke="#c4c4c4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21.5 3.00562L11.5 13.0156L8.5 10.0156" stroke="#c4c4c4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="text">
                                Prospect Information
                            </span>
                        </div>
                        <div class="right__status">
                            <span class="completed">0</span>/<span class="total">7</span>
                        </div>
                    </div>

                    <div class="form__part__title tell__product">
                        <div class="left__text">
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.5 10.0857V11.0057C21.4988 13.1621 20.8005 15.2604 19.5093 16.9875C18.2182 18.7147 16.4033 19.9782 14.3354 20.5896C12.2674 21.201 10.0573 21.1276 8.03447 20.3803C6.01168 19.633 4.28465 18.2518 3.11096 16.4428C1.93727 14.6338 1.37979 12.4938 1.52168 10.342C1.66356 8.19029 2.49721 6.14205 3.89828 4.5028C5.29935 2.86354 7.19279 1.72111 9.29619 1.24587C11.3996 0.770634 13.6003 0.988061 15.57 1.86572" stroke="#c4c4c4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21.5 3.00562L11.5 13.0156L8.5 10.0156" stroke="#c4c4c4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="text">
                                Tell me about your product
                            </span>
                        </div>
                        <div class="right__status">
                            <span class="completed">0</span>/<span class="total">13</span>
                        </div>
                    </div>

                    <div class="form__part__title process3">
                        <div class="left__text">
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.5 10.0857V11.0057C21.4988 13.1621 20.8005 15.2604 19.5093 16.9875C18.2182 18.7147 16.4033 19.9782 14.3354 20.5896C12.2674 21.201 10.0573 21.1276 8.03447 20.3803C6.01168 19.633 4.28465 18.2518 3.11096 16.4428C1.93727 14.6338 1.37979 12.4938 1.52168 10.342C1.66356 8.19029 2.49721 6.14205 3.89828 4.5028C5.29935 2.86354 7.19279 1.72111 9.29619 1.24587C11.3996 0.770634 13.6003 0.988061 15.57 1.86572" stroke="#c4c4c4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21.5 3.00562L11.5 13.0156L8.5 10.0156" stroke="#c4c4c4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="text">
                                Process 3
                            </span>
                        </div>
                        <div class="right__status">
                            <span class="completed">0</span>/<span class="total">8</span>
                        </div>
                    </div>

                    <div class="form__part__title process4">
                        <div class="left__text">
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.5 10.0857V11.0057C21.4988 13.1621 20.8005 15.2604 19.5093 16.9875C18.2182 18.7147 16.4033 19.9782 14.3354 20.5896C12.2674 21.201 10.0573 21.1276 8.03447 20.3803C6.01168 19.633 4.28465 18.2518 3.11096 16.4428C1.93727 14.6338 1.37979 12.4938 1.52168 10.342C1.66356 8.19029 2.49721 6.14205 3.89828 4.5028C5.29935 2.86354 7.19279 1.72111 9.29619 1.24587C11.3996 0.770634 13.6003 0.988061 15.57 1.86572" stroke="#c4c4c4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21.5 3.00562L11.5 13.0156L8.5 10.0156" stroke="#c4c4c4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="text">
                                Process 4
                            </span>
                        </div>
                        <div class="right__status">
                            <span class="completed">0</span>/<span class="total">4</span>
                        </div>
                    </div>

                    <div class="form__part__title process5">
                        <div class="left__text">
                            <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.5 10.0857V11.0057C21.4988 13.1621 20.8005 15.2604 19.5093 16.9875C18.2182 18.7147 16.4033 19.9782 14.3354 20.5896C12.2674 21.201 10.0573 21.1276 8.03447 20.3803C6.01168 19.633 4.28465 18.2518 3.11096 16.4428C1.93727 14.6338 1.37979 12.4938 1.52168 10.342C1.66356 8.19029 2.49721 6.14205 3.89828 4.5028C5.29935 2.86354 7.19279 1.72111 9.29619 1.24587C11.3996 0.770634 13.6003 0.988061 15.57 1.86572" stroke="#c4c4c4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21.5 3.00562L11.5 13.0156L8.5 10.0156" stroke="#c4c4c4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="text">
                                Process 5
                            </span>
                        </div>
                        <div class="right__status">
                            <span class="completed">0</span>/<span class="total">5</span>
                        </div>
                    </div>
                </div>

                <!-- Formstep 1 -->
                <div class="form form1">
                    <form>
                        <div class="question question1">
                            <label for="input1">
                                <p class="title">What is your prospect's big end goal?</p>
                                <p class="example">(Ex: What you're expecting to achieve like promotion or result)</p>
                            </label>
                            <input class="input" type="text" name="input1" id="input1">
                        </div>

                        <div class="question question2">
                            <label for="input2">
                                <p class="title">In what time will the prospect achieve this goal?</p>
                                <p class="example">
                                    (Ex: Finally, anyone can now set up info Product Sales Funnel Without Help
                                    from any Guru. Use the headline generator to create great headlines)
                                </p>
                            </label>
                            <input class="input" type="text" name="input2" id="input2">
                        </div>

                        <div class="question question3">
                            <label for="input3">
                                <p class="title">Your prospects will not do to achieve the end goal?</p>
                                <p class="example">(Ex: Wires Daily Sales into Your Bank Account)</p>
                            </label>
                            <input class="input" type="text" name="input3" id="input3">
                        </div>

                        <div class="question question4">
                            <label for="input4">
                                <p class="title">Your prospect's likely objections with what you're offering</p>
                                <p class="example">(Ex: build funnels that made ZERO SALES)</p>
                            </label>
                            <input class="input" type="text" name="input4" id="input4">
                        </div>

                        <div class="question question5">
                            <label for="input5">
                                <p class="title">What is the name of the frebie you want to offer?</p>
                                <p class="example">(Ex: buying courses)</p>
                            </label>
                            <input class="input" type="text" name="input5" id="input5">
                        </div>

                        <div class="question question6">
                            <label for="input6">
                                <p class="title">Why is the solution not useful?</p>
                                <p class="example">(Ex: filled with a lot theory and zero thing you can use in real life)</p>
                            </label>
                            <input class="input" type="text" name="input6" id="input6">
                        </div>

                        <div class="question question7">
                            <label for="input7">
                                <p class="title">Add an exciting end result for using your freebie</p>
                                <p class="example">(Ex: filled with a lot theory and zero thing you can use in real life)</p>
                            </label>
                            <input class="input" type="text" name="input7" id="input7">
                        </div>

                        <div class="add__exciting__result">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="23" height="23" rx="4.5" stroke="#4834D4"/>
                                <path d="M12 17V7" stroke="#4834D4" stroke-width="2" stroke-linecap="round"/>
                                <path d="M7 12H17" stroke="#4834D4" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                            <p>Add more exciting result</p>
                        </div>

                        <div class="buttons">
                            <button class="normal" onclick="goToForm(2)">
                                <p>Next</p>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Formstep 2 -->
                <div class="form form2 none">
                    <form>
                        <div class="question question1">
                            <p class="title">Your audience should be able to do</p>

                            <label for="input1">
                                <p class="example">an amazing stuff</p>
                            </label>
                            <input class="input" type="text" name="input1" id="input1">

                            <label for="input2">
                                <p class="example">without</p>
                            </label>
                            <input class="input" type="text" name="input2" id="input2">
                        </div>

                        <div class="question question2">
                            <p class="title">How your audience can</p>

                            <label for="input3">
                                <p class="example">
                                    achieve some big benefit
                                </p>
                            </label>
                            <input class="input" type="text" name="input3" id="input3">

                            <label for="input4">
                                <p class="example">
                                    using
                                </p>
                            </label>
                            <input class="input" type="text" name="input4" id="input4">

                            <label for="input5">
                                <p class="example">
                                    without these struggles
                                </p>
                            </label>
                            <input class="input" type="text" name="input5" id="input5">

                        </div>

                        <div class="add__more__struggles">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="23" height="23" rx="4.5" stroke="#4834D4"/>
                                <path d="M12 17V7" stroke="#4834D4" stroke-width="2" stroke-linecap="round"/>
                                <path d="M7 12H17" stroke="#4834D4" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                            <p>Add more struggles</p>
                        </div>

                        <div class="question question3">
                            <p class="title">How your audience brand themselves</p>

                            <label for="input6">
                                <p class="example">brand yourself as</p>
                            </label>
                            <input class="input" type="text" name="input6" id="input6">

                            <label for="input7">
                                <p class="example">so you can</p>
                            </label>
                            <input class="input" type="text" name="input7" id="input7">

                            <label for="input8">
                                <p class="example">ways to do something</p>
                                <p class="example__light">(ex: " 5 keys, 10 ways...)</p>
                            </label>
                            <input class="input" type="text" name="input8" id="input8">

                           <label for="input9">
                                <p class="example">to get something</p>
                                <p class="example__light">(ex: " to become a copywriter)</p>
                            </label>
                            <input class="input" type="text" name="input9" id="input9">
                        </div>

                        <div class="question question4">
                            <p class="title">How your audience can</p>

                            <label for="input10">
                                <p class="example">surprising benefit</p>
                            </label>
                            <input class="input" type="text" name="input10" id="input10">

                            <label for="input11">
                                <p class="example">from common obstacle</p>
                            </label>
                            <input class="input" type="text" name="input11" id="input11">
                        </div>

                        <div class="question question5">
                            <p class="title">Make a promise to your audience</p>

                            <label for="input12">
                                <p class="example">key benefit</p>
                                <p class="example">(ex: "get recognized for how good your copy are")</p>
                            </label>
                            <input class="input" type="text" name="input12" id="input12">

                            <label for="input13">
                                <p class="example">without</p>
                                <p class="example">(ex: "writing like a dummy")</p>
                            </label>
                            <input class="input" type="text" name="input13" id="input13">
                        </div>

                        <div class="buttons">
                            <button class="inverse" onclick="goToForm(1)">
                                <p>Previous</p>
                            </button>
                            <button class="normal" onclick="goToForm(3)">
                                <p>Next</p>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Formstep 3 -->
                <div class="form form3 none">
                    <form>
                        <div class="question question1">
                            <p class="title">Talents that could help Your audience</p>

                            <label for="input1">
                                <p class="example">talent description</p>
                            </label>
                            <input class="input" type="text" name="input1" id="input1">

                            <label for="input2">
                                <p class="example">audience common problem</p>
                            </label>
                            <input class="input" type="text" name="input2" id="input2">
                        </div>

                        <div class="question question2">
                            <p class="title">Are you tired of</p>

                            <label for="input3">
                                <p class="example">
                                    common negative feeling
                                </p>
                                <p class="example__light">
                                    (ex: ...are you tired of feeling invisible)
                                </p>
                            </label>
                            <input class="input" type="text" name="input3" id="input3">

                            <label for="input4">
                                <p class="example">
                                    while enemies/competitors succeed
                                </p>
                                <p class="example__light">
                                    (ex: ...while others get recognition)
                                </p>
                            </label>
                            <input class="input" type="text" name="input4" id="input4">

                            <label for="input5">
                                <p class="example">
                                    Problem encountered by your audience
                                </p>
                                <p class="example__light">
                                    (Ex: Working way too hard with little return on that investment)
                                </p>
                            </label>
                            <input class="input" type="text" name="input5" id="input5">

                        </div>

                        <div class="question question3">
                            <p class="title">Do you have</p>

                            <label for="input6">
                                <p class="example">key value to deliver</p>
                                <p class="example__light">
                                    (Ex: Do you have ideas on current critical projects)
                                </p>
                            </label>
                            <input class="input" type="text" name="input6" id="input6">

                            <label for="input7">
                                <p class="example">problem encountered when trying to deliver value</p>
                                <p class="example__light">
                                    (Ex: ...but you get ignored or dismissed?)

                                </p>
                            </label>
                            <input class="input" type="text" name="input7" id="input7">

                            <label for="input8">
                                <p class="example">
                                    What does your audience want to achieve that they have been
                                    doing the wrong way
                                </p>
                                <p class="example__light">(Ex: Working way too hard with little return on that investment)</p>
                            </label>
                            <input class="input" type="text" name="input8" id="input8">

                        </div>

                        <div class="buttons">
                            <button class="inverse" onclick="goToForm(2)">
                                <p>Previous</p>
                            </button>
                            <button class="normal" onclick="goToForm(4)">
                                <p>Next</p>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Formstep 4 -->
                <div class="form form4 none">
                    <form>
                        <div class="question question1">
                            <p class="title">Unexpected real problem</p>

                            <label for="input1">
                                <p class="example">the real problem your audience go through</p>
                            </label>
                            <input class="input" type="text" name="input1" id="input1">

                            <label for="input2">
                                <p class="example">Unexpected problem that your audience don't think about</p>
                            </label>
                            <input class="input" type="text" name="input2" id="input2">
                        </div>

                        <div class="question question2">
                            <p class="title">The one thing your audience needs to know</p>

                            <label for="input3">
                                <p class="example">
                                    your audience achieves big result by
                                </p>
                            </label>
                            <input class="input" type="text" name="input3" id="input3">

                            <label for="input4">
                                <p class="example">
                                    but your audience get stuck with the usual struggles of
                                </p>
                            </label>
                            <input class="input" type="text" name="input4" id="input4">

                        </div>

                        <div class="buttons">
                            <button class="inverse" onclick="goToForm(3)">
                                <p>Previous</p>
                            </button>
                            <button class="normal" onclick="goToForm(5)">
                                <p>Next</p>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Formstep 5 -->
                <div class="form form5 none">
                    <form>
                        <div class="question question1">
                            <label for="input1">
                                <p class="example">something amazing you've done</p>
                                <p class="example__light">
                                    (Ex: Creator/author of...)
                                </p>
                            </label>
                            <input class="input" type="text" name="input1" id="input1">

                            <label for="input2">
                                <p class="example">What you did for sometime say year or month</p>
                                <p class="example__light">
                                    (Ex: For the past [years/months/weeks], I've been...)
                                </p>
                            </label>
                            <input class="input" type="text" name="input2" id="input2">
                        </div>

                        <div class="question question2">
                            <p class="title">Your Superpowers is</p>

                            <label for="input3">
                                <p class="example">
                                    helping target persons
                                </p>
                            </label>
                            <input class="input" type="text" name="input3" id="input3">

                            <label for="input4">
                                <p class="example">
                                    achieve big results
                                </p>
                            </label>
                            <input class="input" type="text" name="input4" id="input4">

                            <label for="input5">
                                <p class="example">
                                    without common pains/struggles
                                </p>
                            </label>
                            <input class="input" type="text" name="input5" id="input5">

                        </div>

                        <div class="buttons">
                            <button class="inverse" onclick="goToForm(4)">
                                <p>Previous</p>
                            </button>
                            <button class="normal">
                                <p>Submit</p>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        @push('script')
<script src="{{mix('js/app.js')}}"></script>
<script src="{{asset('js/webinar-script.js')}}"></script>
@endpush
@endsection

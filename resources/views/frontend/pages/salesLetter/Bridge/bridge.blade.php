@extends('frontend.layouts.master')
@section('content')
@push('style')
<link rel="stylesheet" href="{{asset('css/sales-letter.css')}}">
@endpush

<main class="main__content">
          <div class="form">
            <ul class="titles">
              <li>
                <div>
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 10.0857V11.0057C20.9988 13.1621 20.3005 15.2604 19.0093 16.9875C17.7182 18.7147 15.9033 19.9782 13.8354 20.5896C11.7674 21.201 9.55726 21.1276 7.53447 20.3803C5.51168 19.633 3.78465 18.2518 2.61096 16.4428C1.43727 14.6338 0.879791 12.4938 1.02168 10.342C1.16356 8.19029 1.99721 6.14205 3.39828 4.5028C4.79935 2.86354 6.69279 1.72111 8.79619 1.24587C10.8996 0.770634 13.1003 0.988061 15.07 1.86572" stroke="#35EC81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M21 3.00562L11 13.0156L8 10.0156" stroke="#35EC81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                        Process 1
                </div>
                    <span class="status"></span>

              </li>
            </ul>

            <form class="questions" id="ez-squeeze">
              <div id="">
                <ul>
                  <li class="question" id="q1">
                    <label class="label">What is your name?</label>
                    <div class="example">(Ex: Czar Nnamani)</div>
                    <input type="text">
                  </li>
                    <li class="question" id="q2">
                        <label class="label">What is the name of your product?
                        </label>
                        <div class="example">Ex: Killer-Sales-Writing-System</div>
                        <input type="text">
                    </li>
                    <li class="question" id="q3">
                        <label class="label" >What does your readers really want to achieve (Main goal)?</label>
                        <div class="example">
                        (Ex: write highly converting sales copies that pull in crazy cash system)
                        </div>
                        <input type="text">
                    </li>
                    <li class="question" id="q4">
                        <label class="label">What is the scarcity of this product</label>
                        <div class="example">
                        (Ex:7 slot left, 3 hours left etc
                        </div>
                        <input type="text">
                    </li>
                    <!-- <div class="double">
                        <li class="question" >
                            <p class="label">What are the Product Features and Benefit?</p>
                            <label class="label">Product Feature(#<span class="no">1</span>)
                            </label>
                            <div class="example">
                                (Ex: Over 200 powerful template in its engine)
                            </div>
                            <input type="text"></li>
                        </li>
                        <li>
                            <label class="label">Benefit of (feature #<span class="no">1</span>)</label>
                            <div class="example">
                            (Ex: you will be able to write any type of copy fast)
                            </div>
                            <input type="text">
                        </li>
                    </div>
                    <div class="add">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="23" height="23" rx="4.5" stroke="#4834D4"/>
                        <path d="M12 17V7" stroke="#4834D4" stroke-width="2" stroke-linecap="round"/>
                        <path d="M7 12H17" stroke="#4834D4" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    Add more features of the product
                    </div> -->

                    <li class="question" id="q11">
                      <label class="label">What is the Title of  your Call To Acton?</label>
                      <div class="example">(Ex: Buy Now, Rush Your Copy Now, Book Your Slot Now etc</div>
                      <input type="text">
                    </li>
                    <li class="question" id="q4">
                        <label class="label">What are the Product Features</label>
                        <div class="example">
                        (Ex: Over 200 powerful templates inits engine
                        </div>
                        <input type="text">
                        <div class="add">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="23" height="23" rx="4.5" stroke="#4834D4"/>
                                <path d="M12 17V7" stroke="#4834D4" stroke-width="2" stroke-linecap="round"/>
                                <path d="M7 12H17" stroke="#4834D4" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                            Add more features of the product
                            </div>
                    </li>
                    <li class="question" id="q4">
                        <label class="label">What are the Benefits Features</label>
                        <div class="example">
                        (Ex: get daily info product sales from your funnel
                        </div>
                        <input type="text">
                        <div class="add">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="23" height="23" rx="4.5" stroke="#4834D4"/>
                                <path d="M12 17V7" stroke="#4834D4" stroke-width="2" stroke-linecap="round"/>
                                <path d="M7 12H17" stroke="#4834D4" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                            Add more features of the product
                            </div>
                    </li>
                    <li class="question" id="q4">
                        <label class="label">What are the Bonuses you are giving out to your prospect?</label>
                        <div class="example">

                        </div>
                        <input type="text">
                        <div class="add">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="23" height="23" rx="4.5" stroke="#4834D4"/>
                                <path d="M12 17V7" stroke="#4834D4" stroke-width="2" stroke-linecap="round"/>
                                <path d="M7 12H17" stroke="#4834D4" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                            Add more features of the product
                            </div>
                    </li>
                    <li class="question" id="q4">
                        <label class="label">Why Bonus 1 makes the main product better</label>
                        <div class="example">

                        </div>
                        <input type="text">
                        <div class="add">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="23" height="23" rx="4.5" stroke="#4834D4"/>
                                <path d="M12 17V7" stroke="#4834D4" stroke-width="2" stroke-linecap="round"/>
                                <path d="M7 12H17" stroke="#4834D4" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                            Add more features of the product
                            </div>
                    </li>
                    <div class="btns">
                        <a href="./ez-squeeze-summary.html" class="btn-blue getSummary">Next</a>
                        <a href="#prospects" class="btn-light-blue form-nav">Previous</a>
                    </div>
                </div>
              </div>
            </form>
          </div>
        </main>
@push('script')
    <!-- Scripts -->
    <script src="../../public/header&sidenav.js"></script>
    <script src="../letters.js"></script>
    <script>

document.querySelector(".getSummary").addEventListener("click", storeInputs);
        const addInputs = document.querySelectorAll(".form .add");
        addInputs.forEach(addInput => addInput.addEventListener("click", insertInput));

        function insertInput (e){
            const questions = this.previousElementSibling.cloneNode(true);
            const position = 1 + +questions.querySelector(".no").textContent;
            questions.querySelectorAll(".no").forEach( no => no.textContent = position);
            questions.querySelectorAll("input").forEach( input => input.value = "");
            this.parentNode.insertBefore(questions, this);
            setStatuses();
        }

        function storeInputs() {
        try{
            const listItems = document.querySelectorAll("form ul>li");
            const form = Object.create(null);
            listItems.forEach(listItem => {
            const inputs = [...listItem.querySelectorAll("input[type=text]")];
                if(inputs.length === 1){
                    form[`${listItem.id}`] = inputs[0].value;
                }
                else{
                    form[`${listItem.id}`] = inputs.map(input => input.value);
                }
            })

            form["list"] = [];
            document.querySelectorAll(".double").forEach(double => {
                form["list"].push([...double.querySelectorAll("input")].map(input => input.value));
            })
            console.log(form);
            window.sessionStorage.setItem(
            document.querySelector("form.questions").id,
            JSON.stringify(form));
        }
        catch(err){
            console.error(err);
        }
        }
    </script>
<script src="{{mix('js/app.js')}}"></script>
<script src="{{asset('js/letters.js')}}"></script>
@endpush
@endsection

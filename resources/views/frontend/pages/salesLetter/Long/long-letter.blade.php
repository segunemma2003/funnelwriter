@extends('frontend.layouts.master')
@section('content')
@push('style')
<link rel="stylesheet" href="{{asset('css/sales-letter.css')}}">
@endpush
        <!-- Main Content -->
        <main class="main__content">
          <div class="form">
            <ul class="titles">
              <li>
                <div>
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 10.0857V11.0057C20.9988 13.1621 20.3005 15.2604 19.0093 16.9875C17.7182 18.7147 15.9033 19.9782 13.8354 20.5896C11.7674 21.201 9.55726 21.1276 7.53447 20.3803C5.51168 19.633 3.78465 18.2518 2.61096 16.4428C1.43727 14.6338 0.879791 12.4938 1.02168 10.342C1.16356 8.19029 1.99721 6.14205 3.39828 4.5028C4.79935 2.86354 6.69279 1.72111 8.79619 1.24587C10.8996 0.770634 13.1003 0.988061 15.07 1.86572" stroke="#35EC81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M21 3.00562L11 13.0156L8 10.0156" stroke="#35EC81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                        Tell me about your product
                </div>
                    <span class="status"></span>
              </li>
              <li>
                <div>
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 10.0857V11.0057C20.9988 13.1621 20.3005 15.2604 19.0093 16.9875C17.7182 18.7147 15.9033 19.9782 13.8354 20.5896C11.7674 21.201 9.55726 21.1276 7.53447 20.3803C5.51168 19.633 3.78465 18.2518 2.61096 16.4428C1.43727 14.6338 0.879791 12.4938 1.02168 10.342C1.16356 8.19029 1.99721 6.14205 3.39828 4.5028C4.79935 2.86354 6.69279 1.72111 8.79619 1.24587C10.8996 0.770634 13.1003 0.988061 15.07 1.86572" stroke="#35EC81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M21 3.00562L11 13.0156L8 10.0156" stroke="#35EC81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                    Prospect Information
                </div>
                <span class="status"></span>
              </li>
              <li>
                <div>
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 10.0857V11.0057C20.9988 13.1621 20.3005 15.2604 19.0093 16.9875C17.7182 18.7147 15.9033 19.9782 13.8354 20.5896C11.7674 21.201 9.55726 21.1276 7.53447 20.3803C5.51168 19.633 3.78465 18.2518 2.61096 16.4428C1.43727 14.6338 0.879791 12.4938 1.02168 10.342C1.16356 8.19029 1.99721 6.14205 3.39828 4.5028C4.79935 2.86354 6.69279 1.72111 8.79619 1.24587C10.8996 0.770634 13.1003 0.988061 15.07 1.86572" stroke="#35EC81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M21 3.00562L11 13.0156L8 10.0156" stroke="#35EC81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                    Product features
                </div>
                <span class="status"></span>
              </li>
            </ul>

            <form class="questions" id="long">
              <div id="product">
                <ul>
                  <li class="question" id="q22">
                    <label class="label">What is your name?</label>
                    <div class="example">(Ex: Czar Nnamani)</div>
                    <input type="text">
                  </li>
                    <li class="question" id="q2">
                      <label class="label">What is the name of your product?</label>
                      <div class="example">(Ex: Daily info Product Sales System)</div>
                      <input type="text">
                    </li>
                    <li class="question" id="q3">
                      <label class="label" >What is it like?</label>
                      <div class="example">
                        (Ex: " Sure, Done for You, Fill-in-the-Blank Template Program
                        </div>
                      <input type="text">
                    </li>
                    <li class="question" id="q4">
                      <label class="label">Who is it for?</label>
                      <div class="example">
                        (Ex: " Sure, Done for You, Fill-in-the-Blank Template Program
                        </div>
                      <input type="text">
                    </li>
                    <li class="question" id="q23">
                      <label class="label">Who is your target audience?</label>
                      <div class="example">"business owners")</div>
                      <input type="text">
                    </li>
                    <li class="question" id="q24">
                      <label class="label">How many years have you been helping your target audience?</label>
                      <div class="example">(Ex: 7))</div>
                      <input type="text">
                    </li>
                    <li class="question" id="q25">
                      <label class="label">How many people have used your product?</label>
                      <div class="example">(Ex: 1000)</div>
                      <input type="text">
                    </li>
                    <li class="question" id="q26">
                      <label class="label">What do you help them to achieve?</label>
                      <div class="example">(Ex: sales)</div>
                      <input type="text">
                    </li>
                    <li class="question" id="q29">
                      <label class="label">What is the end result of your product?</label>
                      <div class="example">"build a killer funnel that brings in money)</div>
                      <input type="text">
                    </li>
                    <li class="question" id="q20">
                      <label class="label">Main desired result</label>
                      <div class="example">(Ex: get daily product sales from your funnel)</div>
                      <input type="text">
                    </li>


                    <li class="question" id="q21">
                      <label class="label">What is the unique selling point of your product?</label>
                      <div class="example">(Ex: Using a proven framework)</div>
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
                  </ul>
                <div class="btns">
                  <a href="#prospects" class="btn-blue form-nav">Next</a>
                </div>
              </div>
              <div id="prospects">
                <ul>
                  <li class="question" id="q5">
                    <label class="label">What is the prospect's desire?</label>
                    <div class="example">"Wires Daily Sales Into Your Bank Account</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q1">
                    <label class="label" >What prospect want to avoid</label>
                    <div class="example">(Having to build info product funnels from Scratch)</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q6">
                    <label class="label" >What pain does the prospect want to avoid?</label>
                    <div class="example">"Doing Most fo the Work from Scratch")</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q7">
                    <label class="label" >What is the prospect struggling with?</label>
                    <div class="example">(Ex: create an info product funnel)</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q8">
                    <label class="label" >Reason they struggle</label>
                    <div class="example">(Ex: It is a lot of work doing everything from scratch)</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q9">
                    <label class="label" >What wrong belief do they have?</label>
                    <div class="example">(Ex: It should be hard)</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q10">
                    <label class="label" >What do prospect have in common with others getting result?</label>
                    <div class="example">(*skill</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q11">
                    <label class="label" >Solution prospect usully try</label>
                    <div class="example">(Ex: buying courses)</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q12">
                    <label class="label" >Usual problem of this solution</label>
                    <div class="example">(Ex: filled with a lot theory and zero things you can use in real life)</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q13">
                    <label class="label" >Who's providing them this solution</label>
                    <div class="example">"gooroos</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q14">
                    <label class="label" >What is the major thing that pain them about this problem?</label>
                    <div class="example">(Ex: you always get NO SALES when you launch)</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q15">
                    <label class="label" >What little win do they get sometimes</label>
                    <div class="example">(Ex: the usual "I am interested)</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q16">
                    <label class="label" >What is the major win they want?</label>
                    <div class="example">(Ex: the payment alerts to roll in</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q17">
                    <label class="label" >What prospect will love to reduce</label>
                    <div class="example">(Ex: all those Facebook ad losses)</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q18">
                    <label class="label" >What is their desired result?</label>
                    <div class="example">(Ex: turning on your funnel and getting steady sales coming in,
                      sending your inbox crazy with payment notifications
                    </div>
                    <input type="text">
                  </li>
                  <li class="question" id="q19">
                    <label class="label" >Pain prospect want to avoid</label>
                    <div class="example">(Ex: worry about money again)</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q28">
                    <label class="label" >What problem did you have in common with prospect?</label>
                    <div class="example">(Ex: build funnels that made ZERO SALES)</div>
                    <input type="text">
                  </li>
                </ul>
                <div class="btns">
                  <a href="#features" class="btn-blue form-nav">Next</a>
                  <a href="#product" class="btn-light-blue form-nav">Previous</a>
                </div>
              </div>
              <div id="features">
                <ul>
                  <li class="question" id="q27">
                    <label class="label" >Where have you been featured or mentioned</label>
                    <div class="example">(Ex: blogs)</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q30">
                    <label class="label" >Features of the product</label>
                    <div class="example">
                      (Ex: The ‘’Clap method’’ Fill in the blank sales letter template will help you copy and paste a sales letter template that works so you can quickly start selling your products
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
                  <li class="question" id="q31">
                    <label class="label" >What is the timeframe of your guarantee</label>
                    <div class="example">(Ex: 30 days)</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q32">
                    <label class="label" >Frequently asked questions</label>
                    <div class="example">(Ex: How much time is required)</div>
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

                </ul>
                <div class="btns">
                  <a href="{{route('long-letter-summary')}}" class="btn-blue getSummary">Next</a>
                  <a href="#prospects" class="btn-light-blue form-nav">Previous</a>
                </div>
              </div>
            </form>
          </div>
        </main>
    @push('script')<!-- Scripts -->
  <script src="../../public/header&sidenav.js"></script>
  <script src="../letters.js"></script>
  <script>
     document.querySelector(".getSummary").addEventListener("click", storeInputs);
    const addInputs = document.querySelectorAll(".form .add");
    addInputs.forEach(addInput => addInput.addEventListener("click", insertInput));

    function insertInput (e){
      const parent = this.parentNode;
      const inputNode = parent.querySelector("input[type=text]").cloneNode();
      inputNode.value = "";
      parent.insertBefore(inputNode, this);
      setStatuses();
    }

    function storeInputs() {
      try{
        const listItems = document.querySelectorAll("form li");
        const form = Object.create(null);
        listItems.forEach(listItem => {
          const inputs = [...listItem.querySelectorAll("input[type=text]")];
          if(inputs.length === 1){
            form[`${listItem.id}`] = inputs[0].value
          }
          else{
            form[`${listItem.id}`] = inputs.map(input => input.value);
          }
        })

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

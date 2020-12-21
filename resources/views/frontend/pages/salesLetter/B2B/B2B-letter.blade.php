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
                        Process 1 
                </div>
                    <span class="status"></span>  
              </li>
              <li>
                <div>
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 10.0857V11.0057C20.9988 13.1621 20.3005 15.2604 19.0093 16.9875C17.7182 18.7147 15.9033 19.9782 13.8354 20.5896C11.7674 21.201 9.55726 21.1276 7.53447 20.3803C5.51168 19.633 3.78465 18.2518 2.61096 16.4428C1.43727 14.6338 0.879791 12.4938 1.02168 10.342C1.16356 8.19029 1.99721 6.14205 3.39828 4.5028C4.79935 2.86354 6.69279 1.72111 8.79619 1.24587C10.8996 0.770634 13.1003 0.988061 15.07 1.86572" stroke="#35EC81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M21 3.00562L11 13.0156L8 10.0156" stroke="#35EC81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                                   
                    Process 2
                </div>
                <span class="status"></span> 
              </li>
              <li>
                <div>
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 10.0857V11.0057C20.9988 13.1621 20.3005 15.2604 19.0093 16.9875C17.7182 18.7147 15.9033 19.9782 13.8354 20.5896C11.7674 21.201 9.55726 21.1276 7.53447 20.3803C5.51168 19.633 3.78465 18.2518 2.61096 16.4428C1.43727 14.6338 0.879791 12.4938 1.02168 10.342C1.16356 8.19029 1.99721 6.14205 3.39828 4.5028C4.79935 2.86354 6.69279 1.72111 8.79619 1.24587C10.8996 0.770634 13.1003 0.988061 15.07 1.86572" stroke="#35EC81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M21 3.00562L11 13.0156L8 10.0156" stroke="#35EC81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                                   
                    Process 3
                </div>
                <span class="status"></span> 
              </li>
            </ul>
            
            <form class="questions" id="B2B">
              <div id="process1">
                <ul>
                  <li class="question" id="q15">
                    <label class="label">What is your name?</label>
                    <div class="example">"Czar Nnamani</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q4">
                    <label class="label">What is your experience level?</label>
                    <div class="example">(Ex: expert copywriter)</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q5">
                    <label class="label">What is the product?</label>
                    <div class="example">(Ex: eBook, course, masterclass, membership and etc)</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q23">
                    <label class="label">What is the name of your product?</label>
                    <div class="example">(Ex: Killer-Sales-Writing-System(KSWS))</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q1">
                    <label class="label">What is the scarcity of this product?</label>
                    <div class="example">(Ex: 7 slot left, 3 hours left etc)</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q2">
                    <label class="label">What is the Title of your Call To Action?</label>
                    <div class="example">
                      (Ex: Buy Now, Rush Your Copy Now, Book Your Slot Now etc) </div>
                    <input type="text">
                  </li>
                  <li class="question" id="q3">
                    <label class="label">What is the prospect's big struggle?</label>
                    <div class="example">(Ex: sales copies that pull in sales)</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q6">
                    <label class="label">What is your desire end result (be specific) of your product?
                    </label>
                    <div class="example">("Ex: Write highly converting copies that pull in sales without having to higher expensive copywriter)</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q7">
                    <label class="label">How long will it take your customers to achieve the promised result?
                    </label>
                    <div class="example">("EX: 3 days, 4 days, 1 month etc)</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q8">
                    <label class="label">What does your readers really want to achieve (Main goal)?
                    </label>
                    <div class="example">“Ex: write highly converting sales copies that pull in crazy cash system)</div>
                    <input type="text">
                  </li>
                    <li class="question" id="q9">
                      <label class="label">What is not working for your prospect through past solutions(<span class="no">1</span>)?
                      </label>
                      <div class="example">“Ex: hired professional copywriter</div>
                      <input type="text">
                    </li>
                    <li class="question" id="q10">
                      <label class="label">Which ended up in <br>
                        Consequence 1
                      </label>
                      <div class="example">“Ex: me wasting a lot of money on copywriters</div>
                      <input type="text">
                    </li>
                    <li class="question" id="q11">                    <li class="question" id="q9">
                      <label class="label">What is not working for your prospect through past solutions(<span class="no">1</span>)?
                      </label>
                      <div class="example">“Ex: hired professional copywriter                    </div>
                      <input type="text">
                    </li>
                    <li class="question" id="q12">
                      <label class="label">Which result in <br>
                        Consequence 2
                      </label>
                      <div class="example">“Ex: wasting a lot of valuable time on irrelevant courses
                      </div>
                      <input type="text">
                    </li>
                    <li class="question" id="q13">
                      <label class="label">What is not working for your prospect through past solutions(<span class="no">3</span>)?
                      </label>
                      <div class="example">“Ex: cracking and brainstorming
                      <input type="text">
                    </li>
                    <li class="question" id="q14">
                      <label class="label">Which led to <br> Consequence 3
                      </label>
                      <div class="example">“Ex: Yield nothing valuable</div>
                      <input type="text">
                    </li>
                </ul>
                <div class="btns">
                  <a href="#process2" class="btn-blue form-nav">Next</a>
                </div>
              </div>
              <div id="process2">
                <ul>
                  <li class="question" id="q16">
                    <label class="label" >What is your personal result #1?                    </label>
                    <div class="example">(Ex: convert boring ads copies, email sequence into sales machines)
                    </div>
                    <input type="text">
                  </li>
                  <li class="question" id="q17">
                    <label class="label" >What is your personal result #2?                    </label>
                    <div class="example">(Ex: convert boring ads copies, email sequence into sales machines)
                    </div>
                    <input type="text">
                  </li>
                  <li class="question" id="q18">
                    <label class="label" >What is your personal result #3?                    </label>
                    <div class="example">(Ex: convert boring ads copies, email sequence into sales machines)
                    </div>
                    <input type="text">
                  </li>
                  <div class="obstacles">
                    <li class="question" >
                      <label class="label">What was the obstacle you faced before becoming a badass?
                        </label>
                      <div class="example">“Ex: Money
                          </div>
                      <input type="text">
                      <div class="add">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="23" height="23" rx="4.5" stroke="#4834D4"/>
                            <path d="M12 17V7" stroke="#4834D4" stroke-width="2" stroke-linecap="round"/>
                            <path d="M7 12H17" stroke="#4834D4" stroke-width="2" stroke-linecap="round"/>
                        </svg>                            
                        Add more obstacles faced
                      </div>
                    </li>
                  </div>
                  <li class="question" id="q22">
                    <label class="label">What happened that changed everything for you?
                    </label>
                    <div class="example">“Ex: discovered a secret blue print that made my journey a lot easier and better</div>
                    <input type="text">
                  </li>
                  <label class="label">What are the Product Features and Benefits</label>
                  <div class="features">
                    <li class="question">
                      <label class="label">Feature #<span class="no">1</span></label>
                      <div class="example">(Ex: Over 200 powerful template in its engine</div>
                      <input type="text">
                    </li>
                    <li>
                      <label class="label">Benefit #<span class="no">1</span></label>
                      <div class="example">(Ex: get daily info product sales from your funnel)
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
                    Add more product features and benefits
                  </div>
                  <p class="label">What are past customers saying after using your product(Testimonials)?                    </p>
                  <div class="testimonials">
                    
                    <li class="question" id="q9">
                      <label class="label">Testimonial</label>
                      <input type="text">
                    </li>
                    <li>
                      <label class="label">Testimonial Source</label>
                      <input type="text">
                    </li>
                  </div>
                  <div class="add">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="23" height="23" rx="4.5" stroke="#4834D4"/>
                        <path d="M12 17V7" stroke="#4834D4" stroke-width="2" stroke-linecap="round"/>
                        <path d="M7 12H17" stroke="#4834D4" stroke-width="2" stroke-linecap="round"/>
                    </svg>                            
                    Add more testimonials
                  </div>
                  <li class="question" id="q9">
                    <label class="label">What are the Other Solutions your prospect depend on aside using your product?</label>
                    <div class="example">(Ex: Hiring a professional copywriter)
                    </div>
                    <input type="text">
                    <div class="add">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect x="0.5" y="0.5" width="23" height="23" rx="4.5" stroke="#4834D4"/>
                          <path d="M12 17V7" stroke="#4834D4" stroke-width="2" stroke-linecap="round"/>
                          <path d="M7 12H17" stroke="#4834D4" stroke-width="2" stroke-linecap="round"/>
                      </svg>                            
                      Add more other solutions
                    </div>
                  </li>
                </ul>
                <div class="btns">
                  <a href="#process3" class="btn-blue form-nav">Next</a>
                  <a href="#process1" class="btn-light-blue form-nav">Previous</a>
                </div>
              </div>
              <div id="process3">
                <ul>
                  <p class="label" >What are the Bonuses you are giving out to your prospect?
                  </p>
                  <div class="bonuses">
                    <li class="question" id="q1">

                      <label class="label">Bonus #<span class="no">1</span></label>
                      <input type="text">
                      <label class="label">Bonus #<span class="no">1</span> value</label>
                      <input type="text">
                      <label class="label">Why Bonus #<span class="no">1</span> makes the main product better</label>
                      <input type="text">
                    </li>
                  </div>
                  <div class="add">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="23" height="23" rx="4.5" stroke="#4834D4"/>
                        <path d="M12 17V7" stroke="#4834D4" stroke-width="2" stroke-linecap="round"/>
                        <path d="M7 12H17" stroke="#4834D4" stroke-width="2" stroke-linecap="round"/>
                    </svg>                            
                    Add more bonuses
                  </div>
                  <li class="question" id="q6">
                    <label class="label">How much does your total bonuses value worth?                    </label>
                    <div class="example">(Ex: $500)</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q8">
                    <label class="label">What is the reason for scarcity of product?
                    </label>
                    <div class="example">(Ex: this product took me a lot of time, trials and error and experience to prepare)
                    </div>
                    <input type="text">
                  </li>
                  <li class="question" id="q9">
                    <label class="label">What is your guarantee?</label>
                    <div class="example">(Ex: 30 days
                    </div>
                    <input type="text">
                  </li>
                  <li class="question" id="q9">
                    <label class="label">What is the total value of your product without bonus?
                    </label>
                    <div class="example">(Ex: $1000)
                    </div>
                    <input type="text">
                  </li>
                </ul>
                <div class="btns">
                  <a href="B2B-summary.html" class="btn-blue">Next</a>
                  <a href="#process2" class="btn-light-blue form-nav">Previous</a>
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
      
      const addInputs = document.querySelectorAll(".form .add");
      addInputs.forEach(addInput => addInput.addEventListener("click", insertInput));

      function insertInput (e){
        const questions = this.previousElementSibling.cloneNode(true);
        if(questions.querySelector(".no")){
          const position = 1 + +questions.querySelector(".no").textContent;
          questions.querySelectorAll(".no").forEach( no => no.textContent = position);
          questions.querySelectorAll("input").forEach( input => input.value = "");
        }
        else{
          questions.value = "";
        }

        this.parentNode.insertBefore(questions, this);
        setStatuses();
      }
    </script>
  
    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
<script src="{{asset('js/offer-generator.js')}}"></script>
@endpush
@endsection
@extends('frontend.layouts.master')
@section('header')
<div class="generate">
                    <h2  style="color:white !important;">Affiliate Promotion</h2>
                    <p  style="color:white !important;">Promote products the right way using email</p>
                </div>
                <div class="breadcrumb">
                    <span>Home</span> / <span class="active">Email copy</span>
                </div>
@endsection
@section('content')
@push('style')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/emailForms.css')}}">

@endpush

        <!-- Main Content -->
        <main class="main__content">
          <div class="form">
            <ul class="titles">
              <li class="active">
                <div>
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 10.0857V11.0057C20.9988 13.1621 20.3005 15.2604 19.0093 16.9875C17.7182 18.7147 15.9033 19.9782 13.8354 20.5896C11.7674 21.201 9.55726 21.1276 7.53447 20.3803C5.51168 19.633 3.78465 18.2518 2.61096 16.4428C1.43727 14.6338 0.879791 12.4938 1.02168 10.342C1.16356 8.19029 1.99721 6.14205 3.39828 4.5028C4.79935 2.86354 6.69279 1.72111 8.79619 1.24587C10.8996 0.770634 13.1003 0.988061 15.07 1.86572" stroke="#35EC81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M21 3.00562L11 13.0156L8 10.0156" stroke="#35EC81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                  
                    Personal Information
                </div>
                    <span class="status"></span>  
              </li>
              <li>
                <div>
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 10.0857V11.0057C20.9988 13.1621 20.3005 15.2604 19.0093 16.9875C17.7182 18.7147 15.9033 19.9782 13.8354 20.5896C11.7674 21.201 9.55726 21.1276 7.53447 20.3803C5.51168 19.633 3.78465 18.2518 2.61096 16.4428C1.43727 14.6338 0.879791 12.4938 1.02168 10.342C1.16356 8.19029 1.99721 6.14205 3.39828 4.5028C4.79935 2.86354 6.69279 1.72111 8.79619 1.24587C10.8996 0.770634 13.1003 0.988061 15.07 1.86572" stroke="#35EC81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M21 3.00562L11 13.0156L8 10.0156" stroke="#35EC81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                  
                        Tell me about your product 
                </div>
                    <span class="status"></span>  
              </li> <li>
                <div>
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 10.0857V11.0057C20.9988 13.1621 20.3005 15.2604 19.0093 16.9875C17.7182 18.7147 15.9033 19.9782 13.8354 20.5896C11.7674 21.201 9.55726 21.1276 7.53447 20.3803C5.51168 19.633 3.78465 18.2518 2.61096 16.4428C1.43727 14.6338 0.879791 12.4938 1.02168 10.342C1.16356 8.19029 1.99721 6.14205 3.39828 4.5028C4.79935 2.86354 6.69279 1.72111 8.79619 1.24587C10.8996 0.770634 13.1003 0.988061 15.07 1.86572" stroke="#35EC81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M21 3.00562L11 13.0156L8 10.0156" stroke="#35EC81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                  
                    Product features and benefit
                </div>
                    <span class="status"></span>  
              </li>
              <li>
                <div>
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 10.0857V11.0057C20.9988 13.1621 20.3005 15.2604 19.0093 16.9875C17.7182 18.7147 15.9033 19.9782 13.8354 20.5896C11.7674 21.201 9.55726 21.1276 7.53447 20.3803C5.51168 19.633 3.78465 18.2518 2.61096 16.4428C1.43727 14.6338 0.879791 12.4938 1.02168 10.342C1.16356 8.19029 1.99721 6.14205 3.39828 4.5028C4.79935 2.86354 6.69279 1.72111 8.79619 1.24587C10.8996 0.770634 13.1003 0.988061 15.07 1.86572" stroke="#35EC81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M21 3.00562L11 13.0156L8 10.0156" stroke="#35EC81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                          
                Let’s rounnd up         
                </div>
                <span class="status"></span> 
              </li>
            </ul>
            
            <form id="short">
              <div id="products" class="questions active">
                <ul >
                  <!-- <li class="question" id="q4">
                    <label class="label">NAME OF PROFILE</label>
                    <div class="example">What name do you want to use in saving this profile?</div>
                    <input type="text">
                  </li> -->
                  <li class="question">
                    <label class="label">What is your name?</label>
                    <div class="example">(Ex: Tarzs Ighor)</div>
                    <input type="text" id="q1">
                  </li>
                  <!-- <li class="question">
                    <label class="label">YOUR TAG LINE</label>
                    <div class="example">"Your title, which will appear on the bottom of sender name</div>
                    <input type="text" id="">
                  </li> -->
                </ul>
                <div class="btns">
                  <a href="#prospects" class="btn-blue form-nav">Next</a>
                </div>
              </div>
              <div id="prospects" class="questions">
                <ul >
                  <li class="question">
                    <label class="label" >NAME OF PRODUCT YOU ARE PROMOTING</label>
                    <div class="example">Ex: Funnelhack</div>
                    <input type="text" id="q4">
                  </li>
                  <li class="question">
                    <label class="label">WHAT TYPE OF PRODUCT IS IT?</label>
                    <div class="example">(Ex: Training Program, Ebook, Software, Course, Video)
                        </div>
                    <input type="text" id="q3">
                  </li>
                  <li class="question">
                    <label class="label">WHAT IS THE SCARCITY OF THIS PRODUCT</label>
                    <div class="example">(Ex: 7 slot left, 3 hours left etc)</div>
                    <input type="text" id="q5">
                  </li>
                  <li class="question">
                    <label class="label">WHAT IS THE PROSPECT’S BIG STRUGGLE?</label>
                    <div class="example">(Ex: sales copies that pull in sales)</div>
                    <input type="text" id="q6">
                  </li>
                  <li class="question">
                    <label class="label">WHAT IS YOUR DESIRE END RESULT (BE SPECIFIC) OF YOUR PRODUCT?</label>
                    <div class="example">Ex: Write highly converting copies that pull in sales without having to higher expensive copywriter)</div>
                    <input type="text" id="q7">
                  </li>
                  <li class="question">
                    <label class="label">WHAT DOES YOUR READERS REALLY WANT TO ACHIEVE (MAIN GOAL)</label>
                    <div class="example">Ex: write highly converting sales copies that pull in crazy cash system)</div>
                    <input type="text" id="q8">
                  </li>
                </ul>
                <div class="btns">
                    <a href="#products" class="btn-light-blue form-nav">Previous</a>
                  <a href="#proposals" class="btn-blue form-nav">Next</a>
                </div>
              </div>
              <div id="proposals" class="questions">
                <ul >
                  <h3>WHAT ARE THE PRODUCT FEATURES AND BENEFIT?</h3>
                  <div>
                    <li class="question">
                      <label class="label" >PRODUCT FEATURE #<span class="no">1</span></label>
                      <div class="example">Ex: Over 200 powerful template in its engine</div>
                      <input type="text" id="a1">
                    </li>
                    <li class="question">
                      <label class="label" >Benefit of Feature #<span class="no">1</span></label>
                      <div class="example">Ex: Over 200 powerful template in its engine</div>
                      <input type="text" id="a2">
                    </li>
                  </div>
                  <div class="add">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="23" height="23" rx="4.5" stroke="#4834D4"/>
                        <path d="M12 17V7" stroke="#4834D4" stroke-width="2" stroke-linecap="round"/>
                        <path d="M7 12H17" stroke="#4834D4" stroke-width="2" stroke-linecap="round"/>
                    </svg>                            
                    Add more features of the product
                  </div>
                </ul>
                <div class="btns">
                    <a href="#prospects" class="btn-light-blue form-nav">Previous</a>
                  <a href="#preorganised" class="btn-blue form-nav">Next</a>
                </div>
              </div>

              <div id="preorganised" class="questions">
                <ul>
                    <li class="question">
                        <label class="label" >What is not working for your prospect through past solutions(1)? </label>
                        <div class="example">(Ex: Hired expensive copywriters)</div>
                        <input type="text" id="q19">
                      </li>
                      <li class="question">
                        <label class="label">Which ended up in (Consequence 1)</label>
                        <div class="example">(Ex: Wasted a lot of money)
                            </div>
                        <input type="text" id="q20">
                      </li>
                      <li class="question">
                        <label class="label">What is not working for your prospect through past solutions(2)? </label>
                        <div class="example">(Ex: Bought copywriting manuals)</div>
                        <input type="text" id="q21">
                      </li>
                      <li class="question">
                        <label class="label">Which result in (Consequence 2)</label>
                        <div class="example">(Ex: Got stuck and confused)</div>
                        <input type="text" id="q22">
                      </li>
                      <label class="label">What is not working for your prospect through past solutions(3)? </label>
                      <div class="example">(Ex: Bought copywriting manuals)</div>
                      <input type="text" id="q23">
                    </li>
                    <li class="question">
                      <label class="label">Which led to (Consequence 3)</label>
                      <div class="example">(Ex: Got stuck and confused)</div>
                      <input type="text" id="q24">
                    </li>
                    <br>
                    <h3>What are the Bonuses you are giving out to your prospect?</h3>
                    <br>
                    <label class="label" >Bonus #1</label>
                    <div class="example">(Ex: Unlimited support)</div>
                    <input type="text" id="q25">
                  </li>
                  <li class="question">
                    <label class="label">Why Bonus #1 makes the main product better</label>
                    <div class="example">(Ex: You get help fast when you get stuck)
                        </div>
                    <input type="text" id="q26">
                  </li>
                  <li class="question">
                    <label class="label">Bonus #2</label>
                    <div class="example">(Ex: Lead Magnet Template)</div>
                    <input type="text" id="q27">
                  </li>
                  <li class="question">
                    <label class="label">Why Bonus #2 makes the main product better</label>
                    <div class="example">(Ex: You don't have to create anything from scratch)</div>
                    <input type="text" id="q28">
                  </li>
                  <label class="label">Bonus #3</label>
                  <div class="example">(Ex: Facebook Ad copy template)</div>
                  <input type="text" id="q29">
                </li>
                <li class="question">
                  <label class="label">Why Bonus #3 makes the main product better</label>
                  <div class="example">(Ex: It helps you to create your ads like an expert copywriter)</div>
                  <input type="text" id="q30">
                </li>
                  </ul>
                <div class="btns">
                    <a href="#proposals" class="btn-light-blue form-nav">Previous</a>
                    <button data-micromodal-trigger="modal-1" class="btn-blue">Generate Email</button>
                </div>
              </div>
            </form>
          </div>
        </main>
    </section>

    <div id="modal-1" aria-hidden="true" class="modal">
        <div tabindex="-1" data-micromodal-close class>
          <div role="dialog" aria-modal="true" aria-labelledby="export-script" class="modal-body">
            <header>
              <h2 id="export-script">
                Editor
              </h2>
              <button aria-label="Close modal" data-micromodal-close class="close-btn">
                <svg data-micromodal-close width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path data-micromodal-close d="M16.2414 6.34311L6.34187 16.2426C5.95135 16.6331 5.95135 17.2663 6.34187 17.6568C6.7324 18.0473 7.36556 18.0473 7.75609 17.6568L17.6556 7.75732C18.0461 7.36679 18.0461 6.73363 17.6556 6.34311C17.2651 5.95258 16.6319 5.95258 16.2414 6.34311Z" fill="black"/>
                  <path data-micromodal-close d="M17.6554 16.2426L7.75593 6.34309C7.36541 5.95257 6.73225 5.95257 6.34172 6.34309C5.9512 6.73362 5.9512 7.36678 6.34172 7.75731L16.2412 17.6568C16.6317 18.0473 17.2649 18.0473 17.6554 17.6568C18.046 17.2663 18.046 16.6331 17.6554 16.2426Z" fill="black"/>
                </svg>                
              </button>
            </header>
            <div id="modal-1-content">
              <div id="summernote">
            
              </div>
              <div class="modal-btns">
                <button class="btn-blue">
                  Save
                </button>
                <button class="btn-light-blue" data-micromodal-close>
                  Cancel
                </button>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="email-templates hide">
      <div class="email-1">
        <p class="text-bold">Day 1</p>
        <p> <span class="text-bold">Subject</span>: How to <span class="q7"></span></p>
        <p><span class="text-bold">Body</span>:</p>
        <p>Hey</p>
        <p><span class="q1"></span> here and if you're anything like I was not that long ago you've probably been faced with <span class="q6"></span>.</p>
        <p>I tried everything to solve it because it was making my life extremely difficult...</p>
        <p>I <span class="q19"></span>.</p>
        <p>I <span class="q21"></span>.</p>
        <p>And I even <span class="q23"></span>.</p>
        <p>All I got was <span class="q20"></span>, <span class="q22"></span>, and <span class="q24"></span>.</p>
        <p>Womp, womp.</p>
        <p>I had almost given up hope when I finally stumbled onto something that finally worked for me.</p>
        <p>It has to do with (insert a subtle hint about the product that creates curiosity).</p>
        <p>If you'd be interested in hearing more, check your email tomorrow. I'm going to send you a full walkthrough of how I finally <span class="q7"></span>.</p>
        <p>Excited to share this with you.</p>
        <span class="q1"></span>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="email-2">

        <p class="text-bold">Day 2</p>
        <p><span class="text-bold">Subject</span>: The Full Method to <span class="q8"></span></p>
        <span class="text-bold">Body</span>:
        <p>Hi</p>
        <p>Yesterday I wrote you about my struggle with <span class="q6"></span> and all the crappy things that came with it.</p>
        <p>Today I want to tell you about how I finally got over it and solved it for good.</p>
        <p>(Write out the method in step form. What you're selling should be a critical part of the process)</p>
        <p>Because this was such a big thing in my life I wanted to share it and tomorrow I want to do you an even bigger favor.</p>
        <p>I added a few bonuses that will really make <span class="q4"></span> work for you even faster!</p>
        <p>* <span class="q25"></span> - Why do you care? Because this bonus will make it easy to <span class="q26"></span>.</p>
        <p>* <span class="q27"></span> - This bonus will help you <span class="q28"></span>.</p>
        <p>* <span class="q29"></span> - This one is fantastic because you'll be able to <span class="q30"></span>.</p>
        <p>Watch Your Email as I'll be sending you a special link tomorrow so you can pick up <span class="q4"></span> along with my special bonuses and solve your struggle with <span class="q6"></span> forever.</p>
        <p>Excited for you to get this.</p>
        <p>Talk tomorrow</p>
        <span class="q1"></span>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="email-3">
        <p class="text-bold">Day 3</p>
        <p><span class="text-bold">Subject</span>: An End to <span class="q6"></span>... Forever</p>
        <span class="text-bold">Body:</span>
        <p>The <span class="q4"></span> and Special Bonuses are Live for You Here.</p>
        <br>
        <p>==> Click here to get access</p>
        <br>
        <p>Over the last few days we've been talking in depth about my journey with trying to <span class="q8"></span>.</p>
        <p>Today I wanted to give you insider access to something that really helped me, along with several bonuses I created just for you to fast-track your path to <span class="q7"></span>.</p>
        <br>
        <p>It's called "<span class="q4"></span>" and you can get it right here.</p>
        <br>
        <p><span class="q5"></span></p>
        <p>This helped me with <span class="q6"></span> and I have everything you need to know listed on the following page.</p>
        <br>
        <p>==> Click Here to Learn More</p>
        <br>
        <p>I'm so excited for you to get in and start using this.</p>
        <p>Send me a Reply to this email if you have any questions at all.</p>
        <p><span class="q1"></span></p>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="email-4">
        <p class="text-bold">Day 4</p>
        <p><span class="text-bold">Subject</span>: <span class="q4"></span>. Your Questions Answered.</p>
        <p><span class="text-bold"> Body</span> :</p>
        <p>Yesterday I gave you access to a product that has helped me immensely with <span class="q6"></span>.</p>
        <p>Several people hit the reply button and sent in questions. I wanted to make sure I answered those today.</p>
        <p>(insert 3-5 questions, FAQ style)</p>
        <br>
        <p>==> Click Here to Learn About <span class="q4"></span> </p>
        <br>
        <span class="q1"></span>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="email-5">
        <p class="text-bold">Day 5</p>
        <p><span class="text-bold">Subject</span>: The Story of (insert a relevant story reference)</p>
        <p>[Insert a story that relates to audience and transition it into your problem and solution.]</p>
        <br>
        <p>==> Click Here to Check Out <span class="q4"></span> Now</p>
        <br>
        <p>Talk to you soon,</p>
        <span class="q1"></span>
        <br>
        <p>P.S. - Hurry, <span class="q5"></span></p>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="email-6">
        <p class="text-bold">Day 6</p>
        <p><span class="text-bold">Subject</span>: [Closing Tonight] <span class="q4"></span></p>
        <p><span class="q4"></span> is CLOSING in a few short hours...</p>
        <p>So if you've been reading these emails and thinking about joining...</p>
        <p>==> Click Here To Get <span class="q4"></span></p>
        <p>You have nothing to lose...</p>
        <p>If you're not satisfied, you'll get a REFUND on every penny.</p>
        <p>So if you are at all interested...</p>
        <p>Or even just curious...</p>
        <p>Now's the time to jump on this so you can <span class="q8"></span></p>
        <span class="q1"></span>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="email-7">
        <p class="text-bold">Day 7</p>
        <p><span class="text-bold">Subject</span>: [LAST CALL] <span class="q4"></span> & <span class="q1"></span>'s Bonuses</p>
        <p>This is it.</p>
        <p>Tonight at 11:59 PM [insert time zone] we close the doors on <span class="q4"></span>.</p>
        <p>If you haven't gotten in yet, this is your last chance.</p>
        <p>As a reminder, here's what you get inside of <span class="q4"></span></p>
        <p class="hide">*&nbsp;<span class="a1"></span> which is going to help you because <span class="a2"></span></p>
        <p class="hide">*&nbsp;<span class="a3"></span> which you'll love because <span class="a4"></span></p>
        <p class="hide">*&nbsp;<span class="a5"></span> which is great because <span class="a6"></span></p>
        <p class="hide">*&nbsp;<span class="a7"></span> which is beneficial because <span class="a8"></span></p>
        <p class="hide">*&nbsp;<span class="a9"></span> which is good for you because <span class="a10"></span></p>
        <p class="hide">*&nbsp;<span class="a11"></span> which is going to help you because <span class="a12"></span></p>
        <p class="hide">*&nbsp;<span class="a13"></span> which is great because <span class="a14"></span></p>
        <p class="hide">*&nbsp;<span class="a15"></span> which is going to help you because <span class="a16"></span></p>
        <p class="hide">*&nbsp;<span class="a17"></span> which you'll love because <span class="a18"></span></p>
        <p class="hide">*&nbsp;<span class="a19"></span> which is great because <span class="a20"></span></p>
        <p class="hide">*&nbsp;<span class="a21"></span> which is beneficial because <span class="a22"></span></p>
        <p class="hide">*&nbsp;<span class="a23"></span> which is good for you because <span class="a24"></span></p>
        <p class="hide">*&nbsp;<span class="a25"></span> which is great because<span class="a26"></span></p>
        <p class="hide">*&nbsp;<span class="a27"></span> which is going to help you because <span class="a28"></span></p>
        <p class="hide">*&nbsp;<span class="a29"></span> which is great because <span class="a30"></span></p>
        <p class="hide">*&nbsp;<span class="a31"></span> which is going to help you because <span class="a32"></span></p>
        <p class="hide">*&nbsp;<span class="a33"></span> which is good for you because<span class="a34"></span></p>
        <p class="hide">*&nbsp;<span class="a35"></span> which you'll love because <span class="a36"></span></p>
        <p class="hide">*&nbsp;<span class="a37"></span> which is great because <span class="a38"></span></p>
        <p class="hide">*&nbsp;<span class="a39"></span> which is beneficial because <span class="a40"></span></p>
        <p>And to make it even easier for you to <span class="q8"></span>, I personally will deliver you these bonuses (that you can only get from me).</p>
        <p>* <span class="q25"></span> - Why do you care? Because this bonus will make it easy to <span class="q26"></span>.</p>
        <p>* <span class="q27"></span> - This bonus will help you <span class="q28"></span>.</p>
        <p>* <span class="q29"></span> - This one is fantastic because you'll be able to <span class="q30"></span>.</p>
        <p>If you wait until tomorrow, your chance to stop <span class="q6"></span> vanishes.</p>
        <p>Tomorrow you'll wake up with the same problems and no real change.</p>
        <p>Considering the guarantee I've put on this (I personally back it up), you've got nothing to lose.</p>
        <p>==> Click Here to Get Started Now (hurry, this ends tonight)</p>
        <span class="q1"></span>
      </div>
    </div>
        @push('script')
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <!-- Modal-->
    <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>

    <script src="{{asset('js/emailform.js')}}"></script>
    @endpush
@endsection
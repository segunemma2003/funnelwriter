@extends('frontend.layouts.master')
@section('header')
<div class="generate">
                    <h2  style="color:white !important;">3 Door Email Sequence</h2>
                    <p  style="color:white !important;">Email that uses a 3 step approach to sell your product</p>
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
                    <label class="label">YOUR NAME</label>
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
                    <label class="label" >NAME OF PRODUCT</label>
                    <div class="example">(Ex: Daily Info Product Sales System)</div>
                    <input type="text" id="q4">
                  </li>
                  <li class="question">
                    <label class="label">TYPE OF PRODUCT</label>
                    <div class="example">(Ex: Course, EBook, Software etc)
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
                    <label class="label">WHAT IS THE DESIRE OR END RESULT OF YOUR PRODUCT? (BE SPECIFIC)</label>
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
                      <div class="example">Ex: You don't need to create anything from scratch</div>
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
                <ul >
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
                    <label class="label">Which ended up in (Consequence 2)</label>
                    <div class="example">(Ex: Got stuck and confused)</div>
                    <input type="text" id="q22">
                  </li>
                  <li class="question">
                    <label class="label">What happened that changed everything for you?</label>
                    <div class="example">Ex: Ex: discovered a secret blue print that made my journey a lot easier and better</div>
                    <input type="text" id="q23">
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
        <p> <span class="text-bold">Subject</span>: The 3-door path to <span class="q8"></span></p>
        <p><span class="text-bold">Body</span>:</p>
        <p>As you struggle with <span class="q6"></span>, you've probably wasted a ton of time searching for the perfect solution. Opening and closing one door after another.</p>
        <p>Take it from me... Before I was ever able to <span class="q7"></span>, doors were slammed in my face with every failure.</p>
        <p>But I'll never forget what was behind that first door...</p>
        <p>As you've tried to <span class="q8"></span> you have <span class="q19"></span>. And this is commonly the first solution people like you and I try.</p>
        <p>But as I'm sure you've found out, it has only resulted in <span class="q20"></span>. Pushing you further away from your goal.</p>
        <p>Stay tuned, tomorrow I'll reveal what's behind door #2 – my second failed attempt at trying to <span class="q8"></span> and how you can avoid making the same critical error.</p>
        <br>
        <br>
        <p>Talk to you soon,</p>
        <span class="q1"></span>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="email-2">

        <p class="text-bold">Day 2</p>
        <p><span class="text-bold">Subject</span>: Door 2 is a real doozy...</p>
        <span class="text-bold">Body</span>:
        <p>As you try to <span class="q8"></span>, I want to make sure I stop you from going down the same misdirected paths I did.</p>
        <p>All I did was cause grief, and put myself further away from the goal. Wow, did I do that once door #2 was opened...</p>
        <p>So if you have <span class="q21"></span>, please stop now.</p>
        <p>What will happen? <span class="q22"></span>, that's what.</p>
        <p>But of course – Yesterday, I did say I opened 3 different doors. And since you already know that I've been able to <span class="q7"></span>, obviously I stumbled on success.</p>
        <p>Stay tuned. Tomorrow I'll reveal what's waiting for you behind door #3 and how you can achieve your desired results.</p>

        <p>Talk soon,</p>
        <span class="q1"></span>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="email-3">
        <p class="text-bold">Day 3</p>
        <p><span class="text-bold">Subject</span>: And behind door #3...</p>
        <span class="text-bold">Body:</span>
        <p>Yes, we have a winner!</p>
        <p>If you have <span class="q19"></span> or you have <span class="q20"></span>, you're well aware how frustrating it is to <span class="q8"></span>.</p>
        <p>But in order to <span class="q7"></span>, there's still one more thing you can do...</p>
        <p>(Better yet, it actually works.)</p>
        <p>See, I was just like you. Testing out what was behind doors 1 and 2, and falling flat on my face every time.</p>
        <p>But then I <span class="q23"></span>. That's when door #3 flew open...</p>
        <p>I was finally able to <span class="q8"></span>!</p>
        <p>And I'm stoked that you'll finally get the same results too.</p>
        <br>
        <p>Click here to get started right now.</p>
        <br>
        <p>Talk soon,</p>
        <p><span class="q1"></span></p>

      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="email-4">
        <p class="text-bold">Day 4</p>
        <p><span class="text-bold">Subject</span>: Don't let the door hit your butt on the way out...</p>
        <p><span class="text-bold"> Body</span> :</p>
        <p>If you're still fumbling with the lacklustre "solutions" behind doors 1 and 2 that I told you about, stop.</p>
        <p>I've unlocked door 3 for you, and I'm really anxious to find out what you think. I know the results I was finally able to achieve, and I'm stoked to see you do the same.</p>
        <br>
        <p>Click here to get started now.</p>
        <br>
        <p>Once you do, hit reply and let me know what you think.</p>
        <p>Thanks!</p>
        <span class="q1"></span>
        <p>P.S. Just a heads up... <span class="q5"></span>. Don't let this golden door slam in your face. If you want to <span class="q7"></span> like I did, this is your answer.</p>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="email-5">
        <p class="text-bold">Day 5</p>
        <p><span class="text-bold">Subject</span>: Could I be lying?</p>
        <p>If you have <span class="q19"></span> or you have <span class="q22"></span> in order to <span class="q8"></span>, I don't blame you for being skeptical.
        </p>
        <p>Because chances are, you're right where I was before I finally was able to <span class="q7"></span>.</p>
        <p>You may be on the brink of giving up – I know I definitely was!</p>
        <p>But that was before I opened up door #3...</p>
        <p>How I do I know this works?</p>
        <p>Because it has...</p>
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
        <br>
        <p>All you have to do is click here to get started right now.</p>
        <br>
        <p>Talk to you soon,</p>
        <span class="q1"></span>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="email-6">
        <p class="text-bold">Day 6</p>
        <p><span class="text-bold">Subject</span>: Crap, did you miss it?</p>
        <p><span class="text-bold"> Body</span> :</p>
        <p>Hey!</p>
        <p>Just a quick one today. I know I've been emailing you a lot lately. Rambling on about doors and what not.</p>
        <p>(I promise for good reason!)</p>
        <p>I know how badly I wanted to <span class="q8"></span>, because struggling with <span class="q6"></span> sucks. It eats away at you, causing one headache after another.</p>
        <p>So when I finally unlocked door #3, it was the answer I had long been looking for.</p>
        <p>Now, I'm a sucker for success stories.</p>
        <p>Once you click here, and get started... shoot me a quick email and let me know how it worked for you.</p>
        <br>
        <p>Let me know!</p>
        <span class="q1"></span>
        <p>P.S. Make sure you jump on this one quickly. I've heard rumors swirling it may close down at any time.</p>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="email-7">
        <p class="text-bold">Day 7</p>
        <p><span class="text-bold">Subject</span>: Last call before the door slams shut.</p>
        <p><span class="text-bold"> Body</span> :</p>
        <p>You could continue with what's behind door #1 - you're already acquainted with it if you have <span class="q19"></span> which resulted in <span class="q20"></span>.</p>
        <p>Or you could even venture behind door #2. Of course if you have <span class="q21"></span>, then you know already it only ends up in <span class="q22"></span>.</p>
        <p>Now because I don't want to continue struggling with <span class="q6"></span>, I'm giving you the key to what's behind door #3 - the solution that produces proven results.</p>
        <br>
        <p>So here's what you do... Click here now.</p>
        <p>And once you do that, you'll be well on your way to <span class="q8"></span>.</p>
        <p>Because inside you'll find....</p>
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
        <br>
        <p>Don't let this one slip out from under you, click here to secure your copy right now.</p>
        <br>
        <p>Talk to you soon,</p>
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
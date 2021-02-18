@extends('frontend.layouts.master')

@section('header')
<div class="generate">
    <h2  style="color:white !important;">Work Smarter Sequence</h2>
    <p  style="color:white !important;">Use this email to indoctrinate your subscribers</p>
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
                    <div class="example">Funnelhack</div>
                    <input type="text" id="q4">
                  </li>
                  <li class="question">
                    <label class="label">WHAT IS THE TYPE OF PRODUCT?</label>
                    <div class="example">(Ex: Ebook, Course, Software)
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
                    <label class="label">WHAT IS THE DESIRE OR END RESULT (BE SPECIFIC) OF YOUR PRODUCT?</label>
                    <div class="example">Ex: Write highly converting copies that pull in sales without having to higher expensive copywriter)</div>
                    <input type="text" id="q7">
                  </li>
                  <li class="question">
                    <label class="label">WHAT DOES YOUR READERS REALLY WANT TO ACHIEVE? (MAIN GOAL)</label>
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
                        <label class="label">What is the launch date for your product?</label>
                        <div class="example">(Ex: 25 May 2021  etc)</div>
                        <input type="text" id="q19">
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
        <p> <span class="text-bold">Subject</span>: This is what hurts your business most.</p>
        <p><span class="text-bold">Body</span>:</p>
        <p>When it comes to running a business, what's the one thing that crumbles most entrepreneurs?</p>
        <p>Workload.</p>
        <p>You and I, we're a lot alike. So I know that you've likely fallen prey to the line of thinking that pushes you to work harder - long hours, high stress, late nights... you know how it goes.</p>
        <p>Before you wear yourself out, I want to give you the reality check that I wish I got long ago:</p>
        <p>Work Smarter, Not Harder.</p>
        <p>Here's a few quick tips that you can follow to dramatically boost your productivity (without driving yourself crazy):</p>
        <p>* Structure Your Days: Structure equals a routine of success. If you're running around like a madman, you're quickly going to burn out.</p>
        <p>Here's what you do:</p>
        <p>Create a routine that fits your lifestyle. Get up at the same time each morning, drink a cup of coffee in your underwear to get yourself moving (hey - whatever works for you!), Check emails when you first get to the office and then leave them. Block out specific times for phone calls - sticking to a routine is key!</p>
        <p>* Quit Trying to Multitask: Multitasking means you're putting in a half-effort. Stop that.</p>
        <p>Here's what you do</p>
        <p>Focus on one thing at a time, so you don't have to go back and correct your mistakes later.</p>
        <p>* Take a break: Giving yourself a few moments to wind down throughout the day is necessary for maintaining your productivity... and sanity.</p>
        <p>Here's what you do:</p>
        <p>A lot of people convince themselves that breaks are a waste of time when really, pushing yourself can be counterproductive. Give your brain relax time so it can regain fuel by taking a 10 minute break every hour and a half.</p>
        <p>Anyway, I don't want to eat up too much more of your time.</p>
        <p>But I know that for quite some time you've also been trying to <span class="q8"></span></p>
        <p>Stay tuned and check your inbox tomorrow. I'm going to show you something that's going to fast track you towards getting the results you've been chasing after.</p>
        <p>Talk to you soon,</p>
        <span class="q1"></span>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="email-2">

        <p class="text-bold">Day 2</p>
        <p><span class="text-bold">Subject</span>: Okay maybe I was...</p>
        <span class="text-bold">Body</span>:
        <p>A tad harsh yesterday.</p>
        <p>But I promise you. Once I started putting all 3 of those things into practice, my business took a huge turn for the better.</p>
        <p>(Admittedly, I had to have it beaten over my head more than once, but anyway...)</p>
        <p>While we're on the train of working smarter, I really wanted to do something to help push you along.</p>
        <p>I know how much you've really wanted to <span class="q8"></span>.</p>
        <p>So after I spoke with a good friend of mine, and found out that they are finally releasing a <span class="q3"></span> that helps with that... I just had to tell you about it.</p>
        <p>I know I'm teasing you right now, but I was genuinely excited when I found out about this.</p>
        <p>And truth be told, keeping secrets like this is too much for me to handle.</p>
        <p>Check back to your inbox tomorrow at <span class="q19"></span> and I'll give you more details on how to get your hands on this.</p>
        <p>Talk soon,</p>
        <span class="q1"></span>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="email-3">
        <p class="text-bold">Day 3</p>
        <p><span class="text-bold">Subject</span>: Now this is how you work smart...</p>
        <span class="text-bold">Body:</span>
        <p>Finally!</p>
        <p>If you've been struggling with <span class="q6"></span>, things are about to get way easier for you.</p>
        <p>I know I kind of let the secret out yesterday. But today you can actually get your hands on this right now.</p>
        <p>You know how you've been trying to <span class="q8"></span>?</p>
        <p>This <span class="q3"></span> is going to help.</p>
        <p>So what makes this so special?</p>
        <p class="hide"><span class="b1"></span> – <span class="b2"></span></p>
        <p class="hide"><span class="b3"></span> – <span class="b4"></span></p>
        <p class="hide"><span class="b5"></span> – <span class="b6"></span></p>
        <p class="hide"><span class="b7"></span> – <span class="b8"></span></p>
        <p class="hide"><span class="b9"></span> – <span class="b10"></span></p>
        <p class="hide"><span class="b11"></span> – <span class="b12"></span></p>
        <p class="hide"><span class="b13"></span> – <span class="b14"></span></p>
        <p class="hide"><span class="b15"></span> – <span class="b16"></span></p>
        <p class="hide"><span class="b17"></span> – <span class="b18"></span></p>
        <p class="hide"><span class="b19"></span> – <span class="b20"></span></p>
        <p class="hide"><span class="b21"></span> – <span class="b22"></span></p>
        <p class="hide"><span class="b23"></span> – <span class="b24"></span></p>
        <p class="hide"><span class="b25"></span> – <span class="b26"></span></p>
        <p class="hide"><span class="b27"></span> – <span class="b28"></span></p>
        <p class="hide"><span class="b29"></span> – <span class="b30"></span></p>
        <p class="hide"><span class="b31"></span> – <span class="b32"></span></p>
        <p class="hide"><span class="b33"></span> – <span class="b34"></span></p>
        <p class="hide"><span class="b35"></span> – <span class="b36"></span></p>
        <p class="hide"><span class="b37"></span> – <span class="b38"></span></p>
        <p class="hide"><span class="b49"></span> – <span class="b40"></span></p>
        <p>Like I told you the other day... It's all about working smarter.</p>
        <p>For me, generating a routine and more importantly, finding the right tools really helped my business take off. That's what this <span class="q3"></span> is all about</p>
        <p>Click here to get started right now.</p>
        <p>Talk soon,</p>
        <p><span class="q1"></span></p>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="email-4">
        <p class="text-bold">Day 4</p>
        <p><span class="text-bold">Subject</span>: I'm not usually blown away but...</p>
        <p><span class="text-bold"> Body</span> :</p>
        <p>Hey!</p>
        <p>Remember how I told you I'd help you to <span class="q8"></span>?</p>
        <p>I knew this was going to give massive results, not sure I could've expected them to be THIS good. Click here to find out more now.</p>
        <p>What are your thoughts?</p>
        <p>I've already helped a lot of entrepreneurs in your position get out of this same rut. Here's just a quick sample of what they had to say:</p>
        <p>(these have been pouring in!)</p>
        <span class="q1"></span>
        <p>P.S.? Just a heads up... <span class="q5"></span>. The only way to guarantee you get in on this is to click that link above now.</p>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="email-5">
        <p class="text-bold">Day 5</p>
        <p><span class="text-bold">Subject</span>: I'll admit it's a bit much.</p>
        <p>I know I've been shoving the "work smart" idea down your throat this week.</p>
        <p>But when I know how well it's worked for me - and the massive effect it's had on my productivity and success - can ya really blame me?</p>
        <p>Couple more things you should try that really worked for me...</p>
        <p>* Set Aside the Smartphone: Your phone is a huge source of distraction and is majorly disrupting your productivity. Every time a notification rings, your train of thought is lost and you've gotta restart.</p>
        <p>You can build a multi-million dollar empire without having your smartphone glued to your side.</p>
        <p>Don't believe me? Here's proof: Bill Gates and Richard Branson created two of the most successful businesses in history with a prehistoric landline. So there.</p>
        <p>* Learn the difference between urgent and important: This one is kind of tough at first, but once you nail it, you'll see a huge difference.</p>
        <p>Once you're out of the habit of assuming everything "urgent" is important, you'll relieve yourself of huge amounts of stress. You'll be able to focus your energy instead on what's important to help your business grow.</p>
        <p>* Use the Right Tools to Get the Job Done: Yeah I know, this one seems kind of self-serving since I've been introducing you to <span class="q4"></span> all week, doesn't it?</p>
        <p>I completely understand. But I know that you've wanted to <span class="q8"></span> for quite awhile. And when you put the right tools to work for you, it's going to relieve a massive amount of your workload.</p>
        <p>Start putting these "work smart" methods to work and I promise you'll love the results.</p>
        <p>And if you still haven?t grabbed your copy of <span class="q4"></span> make sure you do that by clicking here.</p>
        <p>Before I let you go... <span class="q5"></span>. So you'll want to jump on it quickly before you lose out.</p>
        <p>Trust me... you'll be kicking yourself in the butt later if you miss this.</p>
        <p>(Especially, when you see what a critical part this will play in your business.)</p>
        <p>Talk to you soon,</p>
        <span class="q1"></span>
        <br>
        <br>
        <br>
        <br>
        <div class="email-6">
          <p class="text-bold">Day 6</p>
          <p><span class="text-bold">Subject</span>: Oh no, you didn't miss this did you?</p>
          <p>Hey!</p>
          <p>Just a quick one today, because I know I've been blowing up your inbox this week.</p>
          <p>(I promise for good reason!)</p>
          <p>I just really hate when I see people struggling with <span class="q6"></span>.</p>
          <p>Have you noticed a change in your productivity with these "work smart" tips?</p>
          <p>Let me know!</p>
          <p>Talk to you soon,</p>
          <span class="q1"></span>
          <p>P.S. If you're still trying to <span class="q8"></span>, make sure you check this out. Having the right tools is key, and I know you're going to love the results from this!</p>
          <br>
          <br>
          <br>
          <br>
          <div class="email-7">
            <p class="text-bold">Day 7</p>
            <p><span class="text-bold">Subject</span>: [Last Call] Work Smart Secret</p>
            <p>Last call!</p>
            <p>If you haven't already secured your copy of <span class="q4"></span>, you're uncomfortably close to missing out.</p>
            <p>I don't usually like to bug people, but I know how much you'd love to <span class="q8"></span>.</p>
            <p>And with <span class="q4"></span> you'll get:</p>
            <p class="hide"><span class="b1"></span> – <span class="b2"></span></p>
            <p class="hide"><span class="b3"></span> – <span class="b4"></span></p>
            <p class="hide"><span class="b5"></span> – <span class="b6"></span></p>
            <p class="hide"><span class="b7"></span> – <span class="b8"></span></p>
            <p class="hide"><span class="b9"></span> – <span class="b10"></span></p>
            <p class="hide"><span class="b11"></span> – <span class="b12"></span></p>
            <p class="hide"><span class="b13"></span> – <span class="b14"></span></p>
            <p class="hide"><span class="b15"></span> – <span class="b16"></span></p>
            <p class="hide"><span class="b17"></span> – <span class="b18"></span></p>
            <p class="hide"><span class="b19"></span> – <span class="b20"></span></p>
            <p class="hide"><span class="b21"></span> – <span class="b22"></span></p>
            <p class="hide"><span class="b23"></span> – <span class="b24"></span></p>
            <p class="hide"><span class="b25"></span> – <span class="b26"></span></p>
            <p class="hide"><span class="b27"></span> – <span class="b28"></span></p>
            <p class="hide"><span class="b29"></span> – <span class="b30"></span></p>
            <p class="hide"><span class="b31"></span> – <span class="b32"></span></p>
            <p class="hide"><span class="b33"></span> – <span class="b34"></span></p>
            <p class="hide"><span class="b35"></span> – <span class="b36"></span></p>
            <p class="hide"><span class="b37"></span> – <span class="b38"></span></p>
            <p class="hide"><span class="b49"></span> – <span class="b40"></span></p>
            <p>Don't let this one slip out from under you, click here to secure your copy right now.</p>
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
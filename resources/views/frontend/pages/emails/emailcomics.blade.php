@extends('frontend.layouts.master')

@section('header')
<div class="generate">
    <h2  style="color:white !important;">B2B Comics Sequence</h2>
    <p  style="color:white !important;">Use comic feeling to nuture your B2B leads</p>
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
                  <li class="question">
                    <label class="label">WHAT IS YOUR COMPANY’S PHONE NUMBER?</label>
                    <div class="example">(Ex: +234*******)</div>
                    <input type="text" id="q2">
                  </li>
                </ul>
                <div class="btns">
                  <a href="#prospects" class="btn-blue form-nav">Next</a>
                </div>
              </div>
              <div id="prospects" class="questions">
                <ul >
                  <li class="question">
                    <label class="label" >WHAT IS THE NAME OF YOUR PRODUCT?</label>
                    <div class="example">Funnelhack</div>
                    <input type="text" id="q4">
                  </li>
                  <li class="question">
                    <label class="label">TYPE OF PRODUCT</label>
                    <div class="example">(Ex: Software, Ebook, Course etc)
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
        <p> <span class="text-bold">Subject</span>: What A Comedian Can Teach You About Running A Business</p>
        <p><span class="text-bold">Body</span>:</p>
        <p>Hey! <span class="q1"></span> here and I wanted to share some thoughts with you after watching one of my favorite comedians, Louis CK (if you don't know him, you should really check him out).</p>
        <p>Like many of my fellow marketers, you are likely struggling with <span class="q6"></span>. I started thinking how we can learn a lot about business and marketing, and specifically how to <span class="q8"></span> simply by doing what the funniest comedians on the planet do.</p>
        <p>The life of a comedian is not an easy one. They really put themselves out there. They stand on a stage and try their darndest to make people laugh. That's challenging.</p>
        <p>Our job as marketers isn't that easy either sometimes. We aim to reach, influence, educate and ultimately sell.</p>
        <p>So over the next couple of days, I am going to share some insights on some of the things we can learn about running a successful small business from comedians of all professions!</p>
        <p>Many of their goals align with ours as marketers - so I am really excited about sharing these insights.</p>
        <p>Look out for my email tomorrow with the subject: "[Comedian Series] Knowing This Equals Dollars"</p>
        <p>Stay tuned... Tomorrow I'll send you all the details.</p>
        <p>You don't want to miss this.</p>
        <span class="q1"></span>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="email-2">

        <p class="text-bold">Day 2</p>
        <p><span class="text-bold">Subject</span>: [Comedian Series] Knowing This Equals Dollars</p>
        <span class="text-bold">Body</span>:
        <p>Comedians know one thing very well....their audience!</p>
        <p>They would fall flat on their face if they didn't right? They tell jokes based on the lives of their audience! Makes sense right?</p>
        <p>So how is that different from marketing? It's not!</p>
        <p>The Marketers who know their audience the best are the ones who sell more because their customers relate to them. That's what builds trust.</p>
        <p>The relationship between a comedian and his/her audience is very special, intimate even. The same holds true with a marketer's relationship with his/her subscriber list.</p>
        <p>Connecting with your audience on a personal level, much like comedians do will get you more success online.</p>
        <p>Wanna know the second tip how comedians know business? You'll have to wait until tomorrow.</p>
        <p>But first, take steps to get to know who your customer is -</p>
        <p>* What do they like, dislike?</p>
        <p>* What gets them excited to wake up in the morning?</p>
        <p>* Are they men or women? How Old?</p>
        <p>* Are they single or married? Do they have children?</p>
        <p>This is just the beginning. At least until tomorrow where I'll be talking about the one thing comedians are striving to do that marketers are always striving for...no matter how successful they might be.</p>
        <span class="q1"></span>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="email-3">
        <p class="text-bold">Day 3</p>
        <p><span class="text-bold">Subject</span>: [Comedian Series] Comedians, Like Marketers Are Never...</p>
        <span class="text-bold">Body:</span>
        <p>Comedians are never satisfied. They are always striving to do better. Get more laughs. Improve their game.</p>
        <p>Jerry Seinfeld is well known for refining the same material over many years.</p>
        <p>This goes hand in hand with marketing. After every promotion, there is always something that could have been handled better.</p>
        <p>If you are struggling to <span class="q8"></span>, you should always be refining and improving.</p>
        <p>Speaking of constantly improving, I would recommend taking a look at this <span class="q3"></span> called <span class="q4"></span></p>
        <p>It has things like:
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
        <p>===> Take a look at it here:</p>
        <p>Perfection is not possible, but the pursuit of it certainly can be. The best leaders seek out opportunities to improve regardless of how well they may be currently performing.</p>
        <p>Look out tomorrow for this 3 letter word that will always point you in the direction of success.</p>
        <p><span class="q1"></span></p>

        <p>P.S. Just a heads up... <span class="q5"></span>. The only way to guarantee you get in on this is to click that link above now.</p>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="email-4">
        <p class="text-bold">Day 4</p>
        <p><span class="text-bold">Subject</span>: [Comedian Series] The 3 Letter Word To Success</p>
        <p><span class="text-bold"> Body</span> :</p>
        <p>What's the word?</p>
        <p>It's YES!</p>
        <p>Saying YES to opportunity is taking your business to the next level. Saying no, on the other hand is leaving your business at status quo, leaving little room for change or growth</p>
        <p>In this case, saying "yes" is just an acceptance of an idea. Saying no is too easy and usually the default answer. It's almost the equivalent of "I'll put it off for tomorrow" and never get to it.</p>
        <p>It's more about having an open mind.</p>
        <p>Today's lesson is simple.</p>
        <p>Look out for my email tomorrow to recap and conclude the Comedian Series with something very special that I have for you...</p>
        <p>Until then...</p>
        <span class="q1"></span>
        <p>P.S. Speaking of an open mind, one of the things I struggled with was accepting new ideas. But as soon as I got hold of this <span class="q3"></span> everything changed.</p>
        <p>Take a look here to see for yourself, especially if you are struggling to <span class="q8"></span>.</p>
        <p>Click Here to Check it Out</p>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="email-5">
        <p class="text-bold">Day 5</p>
        <p><span class="text-bold">Subject</span>: [Comedian Series] No Funny Business</p>
        <p>In all seriousness, if you start to develop a similar mindset like comedians do, your business will drastically change for the better.</p>
        <p>In this fun series, we learned that:</p>
        <p>* Comedians do a really good job at knowing their audience (otherwise it would be impossible to get laughs)<span class="q8"></span>.</p>
        <p>* Comedians are never satisfied. They are always striving to do better. Get more laughs. Improve their game.</p>
        <p>* Comedians say yes way more than they say no</p>
        <p>This doesn't sound too far off to what entrepreneurs have to do as a recipe for success to grow their business.</p>
        <p>Let's learn from the funny people of the world because the good ones seem to be getting it right following these simple rules.</p>
        <span class="q1"></span>
        <p>P.S. If you're still trying to <span class="q8"></span>, make sure you check this out. Having the right mindset is key, and I know you're going to love the results from this!</p>

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
   

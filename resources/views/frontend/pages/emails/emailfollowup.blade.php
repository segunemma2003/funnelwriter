@extends('frontend.layouts.master')
@section('header')
<div class="generate">
                    <h2  style="color:white !important;">B2B Follow Up Sequence</h2>
                    <p  style="color:white !important;">Follow up with your subscribers when they miss your offer</p>
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
                    <label class="label">WHAT DOES YOUR READERS REALLY WANT TO ACHIEVE (MAIN GOAL)</label>
                    <div class="example">Ex: write highly converting sales copies that pull in crazy cash system)</div>
                    <input type="text" id="q2">
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
                    <label class="label">What is the deadline for them to take action?</label>
                    <div class="example">Ex: 25 October 2021</div>
                    <input type="text" id="q3">
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
      <div class="email-3">
        <p class="text-bold">Day 3</p>
        <p> <span class="text-bold">Subject</span>: Does <span class="q3"></span> work?</p>
        <p><span class="text-bold">Body</span>:</p>
        <p>{first name}</p>
        <p>Super excited to help you grow your business and <span class="q2"></span>.</p>
        <p>Would love to help close things out by <span class="q3"></span> if possible.</p>
        <p>[insert this question 'What are the next steps to make that happen?' or insert an action item that you know needs to happen to move the process along]</p>
        <p>Thanks</p>
        <span class="q1"></span>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="email-7">
        <p class="text-bold">Day 7</p>
        <p><span class="text-bold">Subject</span>: Checking in :)</p>
        <span class="text-bold">Body</span>:
        <p>Hey {first name}</p>
        <p>Hope you're having an amazing week!</p>
        <p>Wanted to see what you thought of my suggestion to move things along by <span class="q3"></span></p>
        <p>Thanks</p>
        <span class="q1"></span>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="email-14">
        <p class="text-bold">Day 14</p>
        <p><span class="text-bold">Subject</span>: Buried?</p>
        <span class="text-bold">Body:</span>
        <p>Hi {first name}</p>
        <p>Just wanted to follow up in case this email got buried.</p>
        <p>Thanks</p>
        <p><span class="q1"></span></p>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="email-28">
        <p class="text-bold">Day 28</p>
        <p><span class="text-bold">Subject</span>: Wed @ 4 pm or Thurs @ 11 am?</p>
        <p><span class="text-bold"> Body</span> :</p>
        <p>Hey {first name}</p>
        <p>Can we hop on a quick call Wednesday 4 p.m. or Thursday 11 a.m.?</p>
        <p>Cheers</p>
        <span class="q1"></span>
        <p>PS: thought you might find this article interesting [add link to article]</p>
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
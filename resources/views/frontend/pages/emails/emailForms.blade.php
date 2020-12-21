@extends('frontend.layouts.master')
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
                  <li class="question" id="q4">
                    <label class="label">NAME OF PROFILE</label>
                    <div class="example">What name do you want to use in saving this profile?</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q5">
                    <label class="label">YOUR NAME</label>
                    <div class="example">(Ex: Tarzs Ighor)</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q7">
                    <label class="label">YOUR TAG LINE</label>
                    <div class="example">"Your title, which will appear on the bottom of sender name</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q8">
                    <label class="label">WHAT IS YOUR COMPANY’S PHONE NUMBER?</label>
                    <div class="example">(Ex: +234*******)</div>
                    <input type="text">
                  </li>
                </ul>
                <div class="btns">
                  <a href="#prospects" class="btn-blue form-nav">Next</a>
                </div>
              </div>
              <div id="prospects" class="questions">
                <ul >
                  <li class="question" id="q1">
                    <label class="label" >NAME OF PRODUCT</label>
                    <div class="example">What is the name of the product/service you want to sell?</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q2">
                    <label class="label">TYPE OF PRODUCT</label>
                    <div class="example">(Ex: Killer-Sales-Writing-System (KSWS)
                        </div>
                    <input type="text">
                  </li>
                  <li class="question" id="q3">
                    <label class="label">WHAT IS THE SCARCITY OF THIS PRODUCT</label>
                    <div class="example">(Ex: 7 slot left, 3 hours left etc)</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q6">
                    <label class="label">WHAT IS THE PROSPECT’S BIG STRUGGLE?</label>
                    <div class="example">(Ex: sales copies that pull in sales)</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q8">
                    <label class="label">WHAT IS YOUR DESIRE END RESULT (BE SPECIFIC) OF YOUR PRODUCT?</label>
                    <div class="example">Ex: Write highly converting copies that pull in sales without having to higher expensive copywriter)</div>
                    <input type="text">
                  </li>
                  <li class="question" id="q9">
                    <label class="label">WHAT DOES YOUR READERS REALLY WANT TO ACHIEVE (MAIN GOAL)</label>
                    <div class="example">Ex: write highly converting sales copies that pull in crazy cash system)</div>
                    <input type="text">
                  </li>
                </ul>
                <div class="btns">
                    <a href="#products" class="btn-light-blue form-nav">Previous</a>
                  <a href="#proposals" class="btn-blue form-nav">Next</a>
                </div>
              </div>
              <div id="proposals" class="questions">
                <ul >
                  <li class="question" id="q1">
                      <h3>WHAT ARE THE PRODUCT FEATURES AND BENEFIT?</h3>
                    <label class="label" >PRODUCT FEATURE</label>
                    <div class="example">Ex: Over 200 powerful template in its engine</div>
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
                    <a href="#prospects" class="btn-light-blue form-nav">Previous</a>
                  <a href="#preorganised" class="btn-blue form-nav">Next</a>
                </div>
              </div>

              <div id="preorganised" class="questions">
                <ul>
                    <h3>WHAT ARE THE PRODUCT FEATURES AND BENEFIT?</h3>
                    <div>
                        <li class="question" id="q1">
                        <label class="label">TESTIMONIAL #<span class="no">1</span></label>
                        <input type="text">
                        </li>
                        <li class="question" id="q1">
                        <label class="label" >TESTIMONIAL #<span class="no">1</span> SOURCE</label>
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
                  </ul>
                <div class="btns">
                    <a href="#proposals" class="btn-light-blue form-nav">Previous</a>
                    <button data-micromodal-trigger="modal-1" class="btn-blue">Generate Email</button>
                </div>
              </div>
            </form>
          </div>
        </main>
        @push('script')
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <!-- Modal-->
    <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>

    <script src="{{asset('js/emailform.js')}}"></script>
    @endpush
@endsection
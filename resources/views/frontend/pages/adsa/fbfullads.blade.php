@extends('frontend.layouts.master')
@section('content')
@push('style')
<link rel="stylesheet" href="{{asset('css/fbads.css')}}">
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
              </ul>
              
              <form class="questions" id="short">
                <div id="product">
                  <ul>
                    <li class="question" id="q4">
                      <label class="label">What is your name?</label>
                      <div class="example">(Ex: Tarzs Ighor))</div>
                      <input type="text">
                    </li>
                    <li class="question" id="q5">
                      <label class="label">What is the type of product?</label>
                      <div class="example">(Ex: eBook, course, masterclass, membership and etc)</div>
                      <input type="text">
                    </li>
                    <li class="question" id="q12">
                        <label class="label">What is the scarcity of this product?</label>
                        <div class="example">(Ex: 7 slot left, 3 hours left etc)</div>
                        <input type="text">
                      </li>
                    <li class="question" id="q7">
                      <label class="label">Who is your target prospect?</label>
                      <div class="example">(Ex: copywriter etc)</div>
                      <input type="text">
                    </li>
                    <li class="question" id="q10">
                      <label class="label">What is the prospect's big struggle?</label>
                      <div class="example">(Ex: sales copies that pull in sales)</div>
                      <input type="text">
                    </li>
                    <li class="question" id="q11">
                      <label class="label">What is your desired end result (be specific) of your product?</label>
                      <div class="example">(Ex: Write highly converting copies that pull in sales without haing to higher expensive copywriter)</div>
                      <input type="text">
                    </li>
                    <li class="question" id="q13">
                      <label class="label">What does your readers really want to achieve (Main goal)?</label>
                      <div class="example">(Ex: write highly converting sales copies thatpull in crazy cash system</div>
                      <input type="text">
                    </li>
                    
                  </ul>
                  <div class="btns">
                    <a href="#prospects" class="btn-blue form-nav">Next</a>
                  </div>
                </div>
                <div id="prospects">
                  <ul>
                    <li class="question" id="q1">
                      <label class="label" >What are the Product Features</label>
                      <div class="example">(Ex: Over 200 powerful template in its engine)</div>
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
                    <li class="question" id="q2">
                      <label class="label">What are the benefits of features</label>
                      <div class="example">"(Ex: get daily info product sales from your funnel)
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
                    <li class="question" id="q3">
                      <label class="label">What is not working for your prospect through past solutions(1)?</label>
                      <div class="example">hired professional copywriter</div>
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
                    <li class="question" id="q6">
                      <label class="label">Which ended up in consequence</label>
                      <div class="example">(Ex: me wasting a lot of money on copywriters)</div>
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
                    <li class="question" id="q8">
                      <label class="label">What are past customers saying about your product (Testimonials)?</label>
                      <div class="example">(Ex: get daily info product sales from your funnel)</div>
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
                    <li class="question" id="q9">
                        <label class="label">Testimonial Sources</label>
                        <div class="example"></div>
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
                    <li class="question" id="q9">
                      <label class="label">What are the Solutions your prospect depends on aside using your product?</label>
                      <div class="example">(Ex: Hiring a professional copywriter)</div>
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
                    <li class="question" id="q9">
                        <label class="label">What is your guarentee?</label>
                        <div class="example">(Ex: 30 days)</div>
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
                    <a href="{{route('short-letter-summary')}}" class="btn-blue">Next</a>
                    <a href="#product" class="btn-light-blue form-nav">Cancel</a>
                  </div>
                </div>
              </form>
            </div>
          </main>
@push('script')
<script src="{{asset('js/fbads.js')}}"></script>
@endpush
@endsection
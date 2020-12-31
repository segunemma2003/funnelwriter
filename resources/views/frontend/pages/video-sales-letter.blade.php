@extends('frontend.layouts.master')
@section('content')
@push('style')
<link rel="stylesheet" href="{{asset('css/video-sales-letter.css')}}">
@endpush
        <!-- Main Content -->
        <main class="main__content">
            <div class="form">

              <form class="questions" id="long">
                <div id="product">
                  <ul>
                    <li class="question" id="q22">
                      <label class="label">What is your name?</label>
                      <div class="example">(Ex: Czar Nnamani)</div>
                      <input type="text">
                    </li>
                    <ul>
                      <li class="question" id="q2">
                        <label class="label">Who is your target market?</label>
                        <div class="example">(Ex: Digital marketers)</div>
                        <input type="text">
                      </li>
                      <li class="question" id="q3">
                        <label class="label" >Topic of the product in 2-3 words:</label>
                        <div class="example">
                          Ex:Daily info Product Business
                         </div>
                        <input type="text">
                      </li>
                      <li class="question" id="q4">
                        <label class="label">What&#39;s the most significant thin your market wants to do:</label>
                        <div class="example">
                          (Ex: " build profit making funnels)
                          </div>
                        <input type="text">
                      </li>
                      <li class="question" id="q23">
                        <label class="label">Shoking Statement to start video:</label>
                        <div class="example">"Ex: if you really want to build a funnel, you need a budget of at least $5,000.)</div>
                        <input type="text">
                      </li>
                      <li class="question" id="q24">
                        <label class="label">What is their major problem:</label>
                        <div class="example">(Ex: Most people will never build a funnel without spending tons of money on freelancers)</div>
                        <input type="text">
                      </li>
                      <li class="question" id="q25">
                        <label class="label">Problem description</label>
                        <div class="example">(Ex: You don&#39;t have any knowledge about how funnels truly work)</div>
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
                      <li class="question" id="q26">
                        <label class="label">What is distubing about this problem?:</label>
                        <div class="example">(Ex: The people who teach how to make money don&#39;t even have money on their own)</div>
                        <input type="text">
                      </li>
                      <li class="question" id="q29">
                        <label class="label">Why is it bad?</label>
                        <div class="example">(Ex: They teach crap, no-practical crap that leaves you even more confused)</div>
                        <input type="text">
                      </li>
                      <li class="question" id="q20">
                        <label class="label">How does it affect your audience?:</label>
                        <div class="example">(Ex: You feel bad, thinking that the whole idea about funnels is justa hoax and not real)</div>
                        <input type="text">
                      </li>
                      <li class="question" id="q21">
                        <label class="label">What is the name of your solution?:</label>
                        <div class="example">(Ex: Funnelhack)</div>
                        <input type="text">
                    </li>
                    <li class="question" id="q26">
                      <label class="label">Format of your solution:</label>
                      <div class="example">(Ex: Done for You, Fill-in-the-Blank Template Program.)</div>
                      <input type="text">
                    </li>
                    <li class="question" id="q29">
                      <label class="label">What is the big benefit they want?:</label>
                      <div class="example">(Ex: Make money online without all the hard work)</div>
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
                    <li class="question" id="q20">
                      <label class="label">Features of your solution:</label>
                      <div class="example">(Ex: Discover My "Anti-Freebie" Fill-in-the-blank lead magnet template for creating Killer lead magnet that will getpeople to click the buy button)</div>
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
                    <li class="question" id="q21">
                      <label class="label">Why can you make these promises (1)?:</label>
                      <div class="example">(Ex: I have spent over $12,000 investing in course &amp; training packed with strategies on how to build funnels)</div>
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
                    <li class="question" id="q21">
                      <label class="label">Why should they believe you?:</label>
                      <div class="example">(Ex: Take a look at these testimonials)</div>
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
                    <li class="question" id="q21">
                      <label class="label">What's inside your solution:</label>
                      <div class="example">(Ex: Info Product Checklist &amp; Lauch Planner Board with all the templates you need to get started with building your funnel easily)</div>
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
                    <li class="question" id="q21">
                      <label class="label">Bonus</label>
                      <div class="example">(Ex: One Week Expert Blueprint to help you blaze into any niche so fast - it doesn&#30;t matter if nobody knows you there)</div>
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
                    <button type="button" class="btn-blue generate-btn" data-micromodal-trigger="modal-1">Next</button>
                  </div>
                </div>

              </form>
            </div>
          </main>
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

   @push('script')
      
      <script src="{{mix('js/app.js')}}"></script>
      <script src="{{asset('js/video-sales-letter.js')}}"></script>
@endpush
@endsection

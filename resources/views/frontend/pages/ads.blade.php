@extends('frontend.layouts.master')
@section('content')
@push('style')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
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
              
              <form class="questions" >
                <div id="product">
                  <ul>
                    <li class="question">
                      <label class="label">What is your name?</label>
                      <div class="example">(Ex: Tarzs Ighor))</div>
                      <input type="text" id="q1">
                    </li>
                    <li class="question">
                      <label class="label">What is your experience level?</label>
                      <div class="example">(Ex: expert copywriter)</div>
                      <input type="text" id="q43">
                    </li>
                    <li class="question">
                      <label class="label">Who is your target prospect?</label>
                      <div class="example">(Ex: copywriter/internet marketer etc)</div>
                      <input type="text" id="q38">
                    </li>
                    <li class="question">
                      <label class="label">What is the type of your product?</label>
                      <div class="example">(Ex: eBook, course, masterclass, memberhip and etc)</div>
                      <input type="text" id="q3">
                    </li>
                    <li class="question">
                      <label class="label">Who is the name of your product?</label>
                      <div class="example">(Ex: Killer-Sales-Writing-System (KSWS))</div>
                      <input type="text" id="q4">
                    </li>
                    <li class="question">
                      <label class="label">What is the scarcity of this product?</label>
                      <div class="example">(Ex: 7 slot left, 3 hours left etc)</div>
                      <input type="text" id="q5">
                    </li>
                    <li class="question">
                      <label class="label">Whatis the prospect's big struggle?</label>
                      <div class="example">(Ex: sales copies that pull in sales </div>
                      <input type="text" id="q6">
                    </li>
                    <li class="question">
                      <label class="label">What is your desire and result (be specific) of your product?</label>
                      <div class="example">(Ex: Write highly converting copies thatpull in sales without haing to higher expensive copywriter)</div>
                      <input type="text" id="q7">
                    </li>
                    <li class="question">
                      <label class="label">What does your readers really want to achieve (Main goal)?</label>
                      <div class="example">(write highly converting sales copies that pull in crazy cash system)</div>
                      <input type="text" id="q8">
                    </li>
                    <div>
                        <label class="label">What are the product features</label>
                        <li class="question" >
                            <label class="label">Product Feature (#<span class="no">1</span>)</label>
                            <div class="example">(Ex: Over 200 powerful template in its engine)</div>
                            <input type="text" id="a1">
                        </li>
                        <li class="question" >
                            <label class="label">Benefit of (feature #<span class="no">1</span>)</label>
                            <div class="example">(Ex: you will be able to write any type of copy fast                    </div>
                            <input type="text" id="a2">
                        </li>
                    </div>
                    <div class="add">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="23" height="23" rx="4.5" stroke="#4834D4"/>
                            <path d="M12 17V7" stroke="#4834D4" stroke-width="2" stroke-linecap="round"/>
                            <path d="M7 12H17" stroke="#4834D4" stroke-width="2" stroke-linecap="round"/>
                        </svg>                            
                        Add more features and benefits of the product
                    </div>
                  </ul>
                  <div class="btns">
                    <a href="#prospects" class="btn-blue form-nav">Next</a>
                  </div>
                </div>
                <div id="prospects">
                  <ul>
                    <li class="question" >
                      <label class="label" >What is not working for your prospect through past solutions(1)?</label>
                      <div class="example">(Ex: hired professional copywriter)</div>
                      <input type="text" id="q19">
                    </li>
                    <li class="question">
                      <label class="label">Which ended up in consequence</label>
                      <div class="example">"(Ex: me wasting a lot of money on copywriters)
                          </div>
                      <input type="text" id="q20">
                    </li>
                    <li class="question">
                        <label class="label" >What is not working for your prospect through past solutions(2)?</label>
                        <div class="example">(Ex: hired professional copywriter)</div>
                        <input type="text" id="q21">
                      </li>
                      <li class="question">
                        <label class="label">Which result in consequence 2</label>
                        <div class="example">"(Ex: me wasting a lot of money on copywriters)
                            </div>
                        <input type="text" id="q22">
                      </li>
                      <li class="question">
                        <label class="label" >What is not working for your prospect through past solutions(3)?</label>
                        <div class="example">(Ex: hired professional copywriter)</div>
                        <input type="text" id="q23">
                      </li>
                      <li class="question">
                        <label class="label">Which ended up in consequence 3</label>
                        <div class="example">"(Ex: me wasting a lot of money on copywriters)
                            </div>
                        <input type="text"  id="q24">
                      </li>
                    <!-- <li class="question" id="q3">
                      <label class="label">What are the Bonuses you are giving out to your prospect?</label>
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
                    <li class="question" id="q6">
                      <label class="label">Why Bonus 1 makes the main product better</label>
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
                    </li> -->

                    <li class="question">
                      <label class="label">What happened that changed everything for you?</label>
                      <div class="example">(Ex: discovered a secret blue print thatmade my journey a lot easier and better)</div>
                      <input type="text" id="q31">
                    </li>
                    
                    <label class="label">What are past customers saying about your product(Testimonials)?</label>
                <div>
                    <li class="question">
                      <label class="label">Testimonial #<span class="no">1</span></label>
                      <div class="example">(Ex: get daily info product sales from your funnel)</div>
                      <input type="text" id="b1">
                    </li>
                    <li class="question">
                        <label class="label">Testimonial #<span class="no">1</span> source</label>
                        <div class="example"></div>
                        <input type="text" id="b2">
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
                      <li class="question">
                        <label class="label">What was the obstacle you faced before becoming a badass?</label>
                        <label class="label">Obstacle #1</label>
                        <div class="example">(Ex: Money)</div>
                        <input type="text" id="q38">
                      </li>
                      <li class="question>
                        <label class="label">Obstacle #2</label>
                        <div class="example">(Ex: Time)</div>
                        <input type="text" id="q39">
                      </li>
                      <li class="question">
                        <label class="label">What is your personal result #1</label>
                        <div class="example">(Ex: convert boring ads copies, email sequences into sales machines)</div>
                        <input type="text" id="q40">
                      </li>
                      <li class="question">
                        <label class="label">What is your personal result #2</label>
                        <div class="example">(Ex: convert boring ads copies, email sequences into sales machines)</div>
                        <input type="text" id="q41">
                      </li>
                      <li class="question">
                        <label class="label">What are the Other Solutions your prospect depend on aside using your product?</label>
                        <label class="label">Other solution #1</label>
                        <div class="example">(Ex: Hiring a professional copywriter)</div>
                        <input type="text" id="q44">
                      </li>
                      <li class="question">
                        <label class="label">What are the Other Solutions your prospect depend on aside using your product?</label>
                        <label class="label">Other solution #2</label>
                        <div class="example">(Ex: Hiring a professional copywriter)</div>
                        <input type="text" id="q45">
                      </li>
                      <li class="question" id="q9">
                        <label class="label">What is your guarantee?</label>
                        <div class="example">(Ex: 30 days)</div>
                        <input type="text" id="q46">
                      </li>
                  </ul>
                  <div class="btns">
                    <button class="btn-blue show-summary" type="button" data-micromodal-trigger="modal-1">Next</button>
                    <a href="#product" class="btn-light-blue form-nav">Previous</a>
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

    <section class="ad-templates hide">
        <div class="ad1">
            <h2>Ad 1</h2>
            <h3>Top Copy</h3>
            <p>Are you Tired of dealing with <span class="q6"></span>?</p>
            <p>You are not alone. A lot of people end up frustrated when trying to <span class="q8"></span> because they're using methods that just don't cut it.</p>
            <p>You may have <span class="q19"></span>.</p>
            <p>Or maybe you have <span class="q21"></span>.</p>
            <p>Unfortunately, these solutions haven't worked that well and ended up leaving you without a real and lasting solution.</p>
            <p>But Now, There's an Answer that can fix that.</p>
            <p>Introducing <span class="q4"></span>.</p>
            <p>A powerful new <span class="q3"></span> that can help you to <span class="q8"></span> without all the headaches.</p>
            <p>Here's just a few things about <span class="q4"></span> that will help you.</p>
                
            <p class="hide">1) <span class="a1"></span>, which is good because <span class="a2"></span>.</p>
            <p class="hide">2) <span class="a3"></span>, which is good because <span class="a4"></span>.</p>
            <p class="hide">3) <span class="a5"></span>, which is good because <span class="a6"></span>.</p>
            <p class="hide">4) <span class="a7"></span>, which is good because <span class="a8"></span>.</p>
            <p class="hide">5) <span class="a9"></span>, which is good because <span class="a10"></span>.</p>
            <p class="hide">6) <span class="a39"></span>, which is good because <span class="a40"></span>.</p>
            <p class="hide">7) <span class="a11"></span>, which is good because <span class="a12"></span>.</p>
            <p class="hide">8) <span class="a13"></span>, which is good because <span class="a14"></span>.</p>
            <p class="hide">9) <span class="a15"></span>, which is good because <span class="a16"></span>.</p>
            <p class="hide">10) <span class="a17"></span>, which is good because <span class="a18"></span>.</p>
            <p class="hide">11) <span class="a19"></span>, which is good because <span class="a20"></span>.</p>
            <p class="hide">12) <span class="a21"></span>, which is good because <span class="a22"></span>.</p>
            <p class="hide">13) <span class="a23"></span>, which is good because <span class="a24"></span>.</p>
            <p class="hide">14) <span class="a25"></span>, which is good because <span class="a26"></span>.</p>
            <p class="hide">15) <span class="a27"></span>, which is good because <span class="a28"></span>.</p>
            <p class="hide">16) <span class="a29"></span>, which is good because <span class="a30"></span>.</p>
            <p class="hide">17) <span class="a31"></span>, which is good because <span class="a32"></span>.</p>
            <p class="hide">18) <span class="a33"></span>, which is good because <span class="a34"></span>.</p>
            <p class="hide">19) <span class="a35"></span>, which is good because <span class="a36"></span>.</p>
            <p class="hide">20) <span class="a37"></span>, which is good because <span class="a38"></span>.</p>
            
            
            <p>And there's a whole lot more.</p>
            <br>
            <h3>Headline</h3>
            <br>
            <p>Stop Struggling to <span class="q8"></span></p>

            <h3>News Feed Link Description (the Caption)</h3>
            <br>
            Stop the frustration of solutions that don't work and Call To Action.

        </div>
        <div class="ad2">
            <br>
            <br>
            <br>
            <br>
            <br>
            <h2>Ad 2</h2>
            <h3>Top Copy</h3>
            <p><span class="q4">[fw4]</span> is a <span class="q3">[fw3]</span> that will end your struggle with <span class="q6">[fw6]</span>.</p>
            Here's how:
            <p class="hide">1) – <span class="a1"></span>: This is good because <span class="a2"></span>.</p>
            <p class="hide">2) – <span class="a3"></span>: This is powerful because <span class="a4"></span>.</p>
            <p class="hide">3) – <span class="a5"></span>: This is a must have because <span class="a6"></span>.</p>
            <p class="hide">4) – <span class="a7"></span>: You'll want this because <span class="a8"></span>.</p>
            <p class="hide">5) – <span class="a9"></span>: This is good for you because <span class="a10"></span>.</p>
            <p class="hide">6) – <span class="a39"></span>: This is good because <span class="a40"></span>.</p>
            <p class="hide">7) – <span class="a11"></span>: This is powerful because <span class="a12"></span>.</p>
            <p class="hide">8) – <span class="a13"></span>: This is a must have because <span class="a14"></span>.</p>
            <p class="hide">9) – <span class="a15"></span>: You'll want this because <span class="a16"></span>.</p>
            <p class="hide">10) – <span class="a17"></span>: This is good for you because <span class="a18"></span>.</p>
            <p class="hide">11) – <span class="a19"></span>: This is good for you because <span class="a20"></span>.</p>
            <p class="hide">12) – <span class="a21"></span>: This is good because <span class="a22"></span>.</p>
            <p class="hide">13) – <span class="a23"></span>: This is powerful because <span class="a24"></span>.</p>
            <p class="hide">14) – <span class="a25"></span>: This is a must have because <span class="a26"></span>.</p>
            <p class="hide">15) – <span class="a27"></span>: You'll want this because <span class="a28"></span>.</p>
            <p class="hide">16) – <span class="a29"></span>: This is good for you because <span class="a30"></span>.</p>
            <p class="hide">17) – <span class="a31"></span>: This is good for you because <span class="a32"></span>.</p>
            <p class="hide">18) – <span class="a33"></span>: This is good because <span class="a34"></span>.</p>
            <p class="hide">19) – <span class="a35"></span>: This is powerful because <span class="a36"></span>.</p>
            <p class="hide">20) – <span class="a37"></span>: You'll want this because <span class="a38"></span>.</p>
            <p>Call To Action</p>
            <br>
            <h3>Headline</h3>
            <br>
            <p>Introducing <span class="q4"></span></p>
            <br>
            <h3>News Feed Link Description (the Caption)</h3>
            <p>Before <span class="q4"></span>, <span class="q38"></span>. Now, I do and so can you.</p>

            
        </div>
        <div class="ad3">
            <br>
            <br>
            <br>
            <br>
            <br>
            <h2>Ad 3</h2>
            <h3>Top Copy</h3>
            <p class="hide">Introducing the <span class="q3"></span> that will help you to <span class="q8"></span></p>
            <p class="hide">If you're anything like me you've <span class="q19"></span> which has only resulted in <span class="q20"></span>. Or maybe you've <span class="q21"></span> which has just resulted in <span class="q22"></span>.</p>
            <p>It sucks.</p>
            <p>That's why after you purchase <span class="q4"></span> you'll finally be able to <span class="q8"></span>.</p>
            <br>
            <h3>Headline</h3>
            <br>
            <p>Ready to <span class="q8"></span>? Try <span class="q4"></span>.</p>
            <p>News Feed Link Description (the Caption)</p>
            <p>You don't have to struggle with <span class="q6"></span> anymore.</p>

        </div>
        <div class="ad4">
            <br>
            <br>
            <br>
            <br>
            <br>
            <h2>Ad 4</h2>
            <h3>Top Copy</h3>
            <p>Without <span class="q4"></span>, you could always <span class="q44"></span> or try <span class="q45"></span>. But why?</p>
            <p>Your time is much more valuable than that!</p>
            <p>Your Product's Name is a <span class="q3"></span> that will show you how to <span class="q8"></span>. Try it today!</p>
            <br>
            <h3>Headline</h3>
            <span class="q7"></span> Today
            <br>
            <h3>News Feed Link Description (the Caption)</h3>
            <p><span class="q4"></span> comes with a risk free, <span class="q47"></span> guarantee.</p>
        </div>
        <div class="ad5">
            <br>
            <br>
            <br>
            <br>
            <br>
            <h3>Ad 5</h3>
            <h2>Top Copy</h2>
            <p><span class="q43"></span> Shares Simple <span class="q3"></span> that will <span class="q7"></span> Quickly.</p>
            <p>Finally! You'll Be Able to <span class="q8"></span> With This "Secret" <span class="q3"></span> You Can't Live Without</p>
            <h3>Headline</h3>
            <p>Try <span class="q4"></span>Today</p>
            <p>News Feed Link Description (the Caption)</p>
            <p>Finally, being able to <span class="q7"></span> is much closer than you think...</p>
        </div>
        <div class="ad6">
            <br>
            <br>
            <br>
            <br>
            <br>
            <h2>Ad 6</h2>
            <h3>Top Copy</h3>
            <p>I don't know about you, but I've never been a fan of having to deal with <span class="q6"></span>.</p>
            <p>You work way too hard be wasting time on things that aren't pushing you forward. That's why I created this <span class="q3"></span> - to skip over the guesswork and start getting results quickly.</p>
            <p>These days I can <span class="q40"></span> and <span class="q41"></span>. But before I saw any success, I spent a lot of time in the trenches, trying to <span class="q8"></span>.</p>
            <p>I was constantly troubled with various roadblocks. Things like <span class="q38"></span> and <span class="q39"></span>.</p>
            <p>Now, there's no doubt in my mind that eventually you'll be able to get through these roadblocks too. But wouldn't it be great to have help? To start getting results swiftly?</p>
            <p>That's why I'd like to invite you inside <span class="q4"></span>, a <span class="q3"></span> that will show you how to <span class="q8"></span>.</p>
            <br>
            <h3>Headline</h3>
            <br>
            <p>You're Invited to Try <span class="q4"></span></p>
            <br>
            <h3>News Feed Link Description (the Caption)</h3>
            <br>
            <p>Try it today without risk! There's a <span class="q46"></span> money back guarantee.</p>
        </div>
        <div class="ad7">
            <br>
            <br>
            <br>
            <br>
            <br>
            <h2>Ad 7</h2>
            <h3>Top Copy</h3>
            <p>The struggle is real.</p>
            <p>You're trying to <span class="q8"></span> but damn, it's hard.</p>
            <p>You've <span class="q19"></span>, <span class="q21"></span>, and, of course, <span class="q23"></span> with crappy results.</p>
            <p>I get you - I tried all those too and they never worked.</p>
            <p>Then, I <span class="q31"></span> and stopped that foolishness.</p>
            <p>I'd love for you to stop the foolishness too.</p>
            <br>
            <h3>Headline</h3>
            <p>Is <span class="q19"></span> Not Working?</p>
            <br>
            <h3>News Feed Link Description (the Caption)</h3>
            <br>
            <p>Click to learn more about <span class="q4"></span> – a <span class="q3"></span> that will show you how to <span class="q8"></span> .</p>
        </div>
        <div class="ad8">
            <br>
            <br>
            <br>
            <br>
            <br>
            <h2>Ad 8</h2>
            <h3>Top Copy</h3>
            <p><span class="q38"></span> <span class="q8"></span> DOESN'T have to be hard!</p>
            <p>See how you can <span class="q8"></span> with <span class="q4"></span>.</p>
            <br>
            <h3>Headline</h3>
            <br>
            <p class="hide"><span class="q7"></span> !</p>
            <br>
            <h3>News Feed Link Description (the Caption)</h3>
            <br>
            <h3>Try <span class="q4"></span> for <span class="q46"></span> with absolutely no risk.</h3>
        </div>
        <div class="ad9">
            <br>
            <br>
            <br>
            <br>
            <br>
            <h2>Ad 9</h2>
            <h3>Top Copy</h3>
            <p>People ask all the time if it is really possible to <span class="q8"></span> with our <span class="q3"></span>. Well, these <span class="q4"></span> users' experiences PROVE that it is not only possible, it's actually pretty easy.</p>
            <p class="hide">"<span class="a1"></span>" – <span class="a2"></span></p>
            <p class="hide">"<span class="a3"></span>" – <span class="a4"></span></p>
            <p class="hide">"<span class="a5"></span>" – <span class="a6"></span></p>
            <p class="hide">"<span class="a7"></span>" – <span class="a8"></span></p>
            <p class="hide">"<span class="a9"></span>" – <span class="a10"></span></p>
            <p class="hide">"<span class="a11"></span>" – <span class="a12"></span></p>
            <p class="hide">"<span class="a13"></span>" – <span class="a14"></span></p>
            <p class="hide">"<span class="a15"></span>" – <span class="a16"></span></p>
            <p class="hide">"<span class="a17"></span>" – <span class="a18"></span></p>
            <p class="hide">"<span class="a19"></span>" – <span class="a20"></span></p>
            <p class="hide">"<span class="a21"></span>" – <span class="a22"></span></p>
            <p class="hide">"<span class="a23"></span>" – <span class="a24"></span></p>
            <p class="hide">"<span class="a25"></span>" – <span class="a26"></span></p>
            <p class="hide">"<span class="a27"></span>" – <span class="a28"></span></p>
            <p class="hide">"<span class="a29"></span>" – <span class="a30"></span></p>
            <p class="hide">"<span class="a31"></span>" – <span class="a32"></span></p>
            <p class="hide">"<span class="a33"></span>" – <span class="a34"></span></p>
            <p class="hide">"<span class="a35"></span>" – <span class="a36"></span></p>
            <p class="hide">"<span class="a37"></span>" – <span class="a38"></span></p>
            <p class="hide">"<span class="a39"></span>" – <span class="a40"></span></p>
            <br>
            <h3>Headline</h3>
            <br>
            <p>Does <span class="q4"></span> Truly Work?</p>
            <br>
            <h3>News Feed Link Description (the Caption)</h3>
            <p>Yes, it does. Want to see if it will work for you? Try it risk free with our <span class="q46"></span> guarantee.</p>
        </div>
        <div class="ad10">
            <br>
            <br>
            <br>
            <br>
            <br>
            <h2>Ad 10</h2>
            <h3>Top Copy</h3>
            <p>I was such an dufass. I struggled with <span class="q6"></span> for SO FREAKING LONG.</p>
            <p>My friends mocked me... "When are you going to stop with this nonsense? You've <span class="q19"></span> and all it did for you was <span class="q20"></span>." "Oh, you think <span class="q44"></span> is going to work this time?? Hahahaha." and my favorite, "I'll bet you $50 <span class="q23"></span> doesn't work and you end up with <span class="q24"></span>. Actually, let's make it $100."</p>
            <p>Ouch.</p>
            <p>It hurt because they were right. I desperately wanted <span class="q7"></span> and I attempted every solution, no matter the cost.</p>
            <p>I vividly remember the moment I <span class="q31"></span>. That's when it clicked. That's the moment I figured out how to <span class="q7"></span></p>
            <p>YES! I finally triumphed!! I was so happy because I was finally able to <span class="q8"></span>!</p>
            <p>I don't want you to have to endure the mocking that I did because it sucked. Hard. So I created <span class="q4"></span>.</p>
            <p>Now you can <span class="q7"></span> without all the struggles or mocking.</p>
            <br>
            <h3>Headline</h3>
            <br>
            <span class="q8"></span>
            <br>
            <h3>News Feed Link Description (the Caption)</h3>
            <br>
            <p>Click "learn more" to see how I ended the mocking and got <span class="q7"></span> with <span class="q1"></span>.</p>

        </div>
    </section>
          @push('script')
          <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
          <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
          <script src="{{asset('js/fbads.js')}}"></script>
          
@endpush
@endsection
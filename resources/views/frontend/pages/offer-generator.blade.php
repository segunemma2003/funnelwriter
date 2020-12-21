@extends('frontend.layouts.master')
@section('content')
@push('style')
<link rel="stylesheet" href="{{asset('css/offer-generator.css')}}">
@endpush
        <!-- Main Content -->

         <!-- Base Widget section -->
    
    <main class="main__content">
        <!-- widget -->
        <div>
            <div class="widget">
                <div class="frame-1 m-size">
                    <div class="frame-alpha-num">
                        <p class="text">No of offer</p>
                        <p class="figure" id="offer-num">1</p>
                    </div>
                    <div class="frame-icon">
                        <img src="images/Group 1459.png" alt="">
                    </div>
                </div>
        
                <div class="frame-2 m-size">
                    <div class="frame-alpha-num">
                        <p class="text">Total offer price</p>
                        <p class="figure">$<span id="total-price">0</span></p>
                    </div>
                    <div class="frame-icon">
                            <img src="images/Group.png" alt="">
                    </div>
        
                </div>
                <div class="frame-3">
                    <svg class="circle">
                        

                        <linearGradient id="linearColors" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0%" stop-color="rgba(227, 35, 255, 1)"></stop>
                            <stop offset="100%" stop-color="rgba(117, 23, 248, 1)"></stop>
                         </linearGradient>                     
                        <text x="20" y="35" class="percent">10%</text>
                        <circle class="circle__outter" r="24" cx="50%" cy="50%" stroke="black" fill="none" stroke-width="3" stroke-linecap="round" stroke-dasharray="660, 660">
                            
                        </circle>
                        <circle class="circle__inner" r="25" cx="50%" cy="50%" stroke="url(#linearColors)" fill="none" stroke-width="6" stroke-linecap="round" stroke-dasharray="0, 660">
                        
                        </circle>
                        
                    </svg>
                    <div class="strength">
                        <p>Offer strength</p>
                        <div class="strength-text"><span class="empty">&#9662;  Empty</span></div>
                    </div>
                </div>
            </div>
                <!-- Base -->
            <div class="base">
                <div class="left ">
                    <ul class="titles">
                        <li class="active">
                          <div>
                              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M21 10.0857V11.0057C20.9988 13.1621 20.3005 15.2604 19.0093 16.9875C17.7182 18.7147 15.9033 19.9782 13.8354 20.5896C11.7674 21.201 9.55726 21.1276 7.53447 20.3803C5.51168 19.633 3.78465 18.2518 2.61096 16.4428C1.43727 14.6338 0.879791 12.4938 1.02168 10.342C1.16356 8.19029 1.99721 6.14205 3.39828 4.5028C4.79935 2.86354 6.69279 1.72111 8.79619 1.24587C10.8996 0.770634 13.1003 0.988061 15.07 1.86572" stroke="#35EC81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M21 3.00562L11 13.0156L8 10.0156" stroke="#35EC81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>                  
                                  Product Tagline
                          </div>
                              <span class="status"></span>  
                        </li>
                        <li>
                          <div>
                          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M21 10.0857V11.0057C20.9988 13.1621 20.3005 15.2604 19.0093 16.9875C17.7182 18.7147 15.9033 19.9782 13.8354 20.5896C11.7674 21.201 9.55726 21.1276 7.53447 20.3803C5.51168 19.633 3.78465 18.2518 2.61096 16.4428C1.43727 14.6338 0.879791 12.4938 1.02168 10.342C1.16356 8.19029 1.99721 6.14205 3.39828 4.5028C4.79935 2.86354 6.69279 1.72111 8.79619 1.24587C10.8996 0.770634 13.1003 0.988061 15.07 1.86572" stroke="#35EC81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M21 3.00562L11 13.0156L8 10.0156" stroke="#35EC81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>                                   
                            Product Offers
                          </div>
                          <span class="status"></span> 
                        </li>

                        <li>
                            <div>
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 10.0857V11.0057C20.9988 13.1621 20.3005 15.2604 19.0093 16.9875C17.7182 18.7147 15.9033 19.9782 13.8354 20.5896C11.7674 21.201 9.55726 21.1276 7.53447 20.3803C5.51168 19.633 3.78465 18.2518 2.61096 16.4428C1.43727 14.6338 0.879791 12.4938 1.02168 10.342C1.16356 8.19029 1.99721 6.14205 3.39828 4.5028C4.79935 2.86354 6.69279 1.72111 8.79619 1.24587C10.8996 0.770634 13.1003 0.988061 15.07 1.86572" stroke="#35EC81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21 3.00562L11 13.0156L8 10.0156" stroke="#35EC81" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                                   
                                Add Bonuses    
                            </div>
                            <span class="status"></span> 
                        </li>
                      </ul>
                </div>
                <form class="right">
                    <div class="questions questions-1 active">
                        <div id="product"></div>
                            <ul>
                                <li class="question">
                                    <label class="label">Product name</label>
                                    <input type="text" class="input"  placeholder="Type script name" id="tagline">
                                </li>
                                <li class="question">
                                    <label class="label">Detailed Description</label>
                                    <textarea name="" id="description"  class="input" placeholder="Type script name" cols="30" rows="10"></textarea>
                                </li>
                                <li class="question"> 
                                    <label class="label">One line benefit</label>
                                    <input type="text" placeholder="Type script name"  class="input" id="one-benefit">
                                </li>
                            </ul>
                            <span class="required hide">Complete step before proceeding</span>
                            <div class="next-cancel-btn">
                                <button class="next-btn btn-nav" id="questions-2" type="button">Next</button>
                            </div>
                    </div>
                    
                    <div class="questions questions-2">
                        <div style="position: relative;">
                            <div class="dropdown">
                                <fieldset>
                                    <legend>Select an offer:</legend>
                                    <div>
                                        <span style="color:#777777" class="choose">Choose</span>
                                        <svg class="arrow" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.2929 0.292892C12.6834 -0.0976315 13.3166 -0.0976315 13.7071 0.292892C14.0976 0.683417 14.0976 1.31658 13.7071 1.70711L7.70711 7.70711C7.32853 8.08568 6.71894 8.09893 6.32428 7.73715L0.324276 2.23715C-0.0828428 1.86396 -0.110347 1.23139 0.262846 0.824274C0.636039 0.417155 1.26861 0.389653 1.67572 0.762845L6.96992 5.61586L12.2929 0.292892Z" fill="black"/>
                                        </svg>                                
                                    </div>
                                </fieldset>
                            </div>
                            <div class="btn-btn" id="btn-btn">
                                <button class="btn active" id="Ebook" type="button">Ebook</button>
                                <button class="btn" id="WhiteReport" type="button">White Report</button>
                                <button class="btn" id="AudioFile" type="button">Audio file</button>
                                <button class="btn" id="BinderNotes" type="button">Binder notes</button>
                                <button class="btn" id="PDF" type="button">PDF</button>
                                <button class="btn" id="Events" type="button">Events</button>
                                <button class="btn" id="InterviewsSeries" type="button">interviews Series</button>
                                <button class="btn" id="MiniCourse" type="button">Mini Course</button>
                                <button class="btn" id="Masterclass" type="button">Masterclass</button>
                                <button class="btn" id="Challenge" type="button">Challenge</button>
                                <button class="btn" id="Consulting" type="button">Consulting</button>
                                <button class="btn" id="TrelloBoard" type="button">Trello Board</button>
                                <button class="btn" id="Workbook" type="button">Workbook</button>
                                <button class="btn" id="CertificationProgram" type="button">Certification Program</button>
                                <button class="btn" id="Software" type="button">Software/App</button>
                                <button class="btn" id="Toolkit" type="button">Toolkit</button>
                                <button class="btn" id="Calculators" type="button">Calculators</button>
                                <button class="btn" id="BlackBook" type="button">Black Book</button>
                                <button class="btn" id="Calendar" type="button">Calender</button>
                                <button class="btn" id="Planner" type="button">Planner</button>
                                <button class="btn" id="AccountabilityGroup" type="button">Accountability Group</button>
                                <button class="btn" id="SupportCommunity" type="button">Support Community</button>
                                <button class="btn" id="Templates" type="button">Templates</button>
                                <button class="btn" id="DigitalAssets" type="button">Digital Assets</button>
                                <button class="btn" id="EmailCourse" type="button">Email Course</button>
                                <button class="btn" id="Compilation" type="button">Compilation/Bundle</button>
                                <button class="btn" id="Summit" type="button">Summit</button>
                                <button class="btn" id="Checklist" type="button">Checklist</button>
                                <button class="btn" id="VideoSeries" type="button">Video Series</button>
                                <button class="btn" id="SwipeFile" type="button">Swipe File</button>
                                <button class="btn" id="USBDrive" type="button">USB Drive</button>
                                <button class="btn" id="Mastermind" type="button">Mastermind</button>
                                <button class="btn" id="Coaching" type="button">Coaching</button>
                                <button class="btn" id="SideDeck" type="button">Side Deck</button>
                                <button class="btn" id="Playbook" type="button">Playbook</button>
                                <button class="btn" id="Membership" type="button">Membership</button>
                                <button class="btn" id="Retreat" type="button">Retreat</button> 
                                <button class="btn" id="Bootcamp" type="button">Bootcamp</button>
                            </div> 
                            <br>
                            <div class="offers">
                                <div class="offer" id="offerTemplate" data-offer="Ebook">
                                    <p for="" class="offer__label">Ebook</p>
                                    <div class="offer__body">
                                        <div class="offer__title">
                                            <label >Add title</label>
                                            <input type="text" placeholder="Type script name"  class="input" >
                                        </div>
                                        <div class="offer__price">
                                            <label >Price</label>
                                            <input type="number" placeholder="0.00">
                                        </div> 
                                    </div>
                                    <button class="offer__remove" type="button" >Remove</button>
                                </div>
                            </div>
                        </div>
                        <div class="next-cancel-btn">
                            <button class="next-btn btn-nav" id="questions-3"  type="button">Next</button>
                            <button class="cancel-btn btn-nav" id="questions-1"  type="button">Previous</button>
                        </div>
                    </div>

                    <div class="questions questions-3">
                        <p class="bonus-heading">Add as many bonus as you can to make your offer worth it</p>
                        <div class="bonuses">
                            <div class="bonus offer" id="bonusTemplate" >
                                <div class="offer__body">
                                    <div class="offer__title">
                                        <label >Add title</label>
                                        <input type="text" placeholder="Type script name"  class="input">
                                    </div>
                                    <div class="offer__price">
                                        <label >Price</label>
                                        <input type="number" placeholder="0.00">
                                    </div> 
                                </div>
                                <button class="bonus__remove" type="button" >Remove</button>
                            </div>
                        </div>
                        <button class="add-btn add-bonus" type="button">
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="23" height="23" rx="4.5" stroke="#4834D4"/>
                                    <path d="M12 17V7" stroke="#4834D4" stroke-width="2" stroke-linecap="round"/>
                                    <path d="M7 12H17" stroke="#4834D4" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                                </span>&nbsp;&nbsp; Add more bonus or reasons to act
                        </button>
                        <div class="next-cancel-btn">
                            <button class="next-btn see-summary btn-nav"  type="button">Next</button>
                            <button class="cancel-btn btn-nav" id="questions-2"  type="button">Previous</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="base-container hide">
                <div class="offer-5-btn">
                    <button class="offer-5-btn-1">Export script</button>
                    <button class="offer-5-btn-2">Save</button>
                </div>
                <div class="base-header">
                    <h3 id="table-tagline">Product Tagline Goes here</h3>
                </div>
                <div class="problem-set">
                    <div class="prob-1">
                        <div class="prob-1-text">
                            <p class="prob-1-text-prob">Description</p>
                            <p class="prob-1-text-note" id="table-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates, illo. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="prob-1">
                        <div class="prob-1-text">
                            <p class="prob-1-text-prob">Benefit</p>
                            <p class="prob-1-text-note" id="table-benefit">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates, illo. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="offer-value-table">
                    <h3>What will you get</h3>
                    <div class="table" id="table">
                        <table>
                            <tr>
                                <th>Offer</th>
                                <th>Price</th>
                            </tr>
                        </table>
                    </div>

                </div>

                <div class="bonus-value-table">
                    <table>
                        <tr>
                            <th>Bonuses</th>
                            <th>Price</th>
                        </tr>
                    </table>
                </div>

                <div id="go-back-btn">
                    <button id="base" class="go-back-btn btn-nav see-summary">G0 BACK</button>
                </div>
            </div>

            <div class="templates hide">
                <div class="offer" id="offerTemplate" data-offer="template">
                    <p for="" class="offer__label">Ebook</p>
                    <div class="offer__body">
                        <div class="offer__title">
                            <label >Add title</label>
                            <input type="text" placeholder="Type script name"  class="input" >
                        </div>
                        <div class="offer__price">
                            <label >Price</label>
                            <input type="number" placeholder="0.00">
                        </div> 
                    </div>
                    <button class="offer__remove" type="button" >Remove</button>
                </div>

                <div class="offer" id="bonusTemplate" >
                    <div class="offer__body">
                        <div class="offer__title">
                            <label >Add title</label>
                            <input type="text" placeholder="Type script name"  class="input">
                        </div>
                        <div class="offer__price">
                            <label >Price</label>
                            <input type="number" placeholder="0.00">
                        </div> 
                    </div>
                    <button class="bonus__remove" type="button" >Remove</button>
                </div>
            </div>
        </div>
    </main>
    @push('script')
    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
<script src="{{asset('js/offer-generator.js')}}"></script>
@endpush
@endsection
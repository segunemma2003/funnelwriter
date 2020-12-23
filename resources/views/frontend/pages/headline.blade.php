@extends('frontend.layouts.master')
@section('content')
@push('style')
<link rel="stylesheet" href="{{asset('css/headline.css')}}">
@endpush
<main class="main__content">
            <!-- Headline Navigation Bar -->
            <div class="headline-navigation">
                <ul class="headline-links">
                    <li>
                        <a onclick="goToHeadline(1)" class="active-link link" href="#">DIY Headline Formulas</a>
                    </li>

                    <li>
                        <a onclick="goToHeadline(2)" class="link" href="#">Explanatory/Why</a>
                    </li>

                    <li>
                        <a onclick="goToHeadline(3)" class="link" href="#">Fun/Playful</a>
                    </li>
                    
                    <li>
                        <a onclick="goToHeadline(4)" class="link" href="#">How To</a>
                    </li>

                    <li>
                        <a onclick="goToHeadline(5)" class="link" href="#">Numbered Lists</a>
                    </li>

                    <li>
                        <a onclick="goToHeadline(6)" class="link" href="#">Strong/Controversial</a>
                    </li>
                </ul>
            </div>

            <!--First Headline Main Content -->
            <!-- <div class="headline-main-content first-content"> -->
                <!-- Left hand side of the Main Content -->
                <!-- <div class="left-main-content">
                    <ul class="">
                        <li>
                            <p>Desired outcome</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Your Headline Branding</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Keyword(s)</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Supporting keywords</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Comparison 1</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Comparison 2</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Number of Experts in Roundup</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Experts Roundup Topic</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Summary of Topic in Under 4 Words</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Event in Topic</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Hot Button Issue in Topic</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Ridiculous WTF Sentence</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Industry</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Short Quotable Testimonial</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Impressive Number From Your Business</p>
                            <input type="text" placeholder="Label">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>
                    </ul>
                </div> -->

                <!-- Right hand side of the Main Content -->
                <!-- <div class="right-main-content">
                    <div class="background-image">
                        <img src="./images/Group 167.svg" alt="">
                    </div>
                </div> -->
            <!-- </div> -->

            <!-- Second Headline Main Content -->
            <div class="headline-main-content second-content">
                <!-- Left hand side of the Main Content -->
                <div class="left-main-content">
                    <ul class="">
                        <li>
                            <p>Desired outcome</p>
                            <input class="input input-desired" type="text" value="Make Money Online">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Your Headline Branding</p>
                            <input class="input input-headline" type="text" value="Your GetRich.com Guide">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Keyword(s)</p>
                            <input class="input input-keyword" type="text" value="How To Make Money">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Supporting keywords</p>
                            <input class="input input-support-keyword" type="text" value="Make Money Quickly">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Comparison 1</p>
                            <input class="input input-comparison1" type="text" value="Richard Branson">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Comparison 2</p>
                            <input class="input input-comparison2" type="text" value="David Rockefeller">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Number of Experts in Roundup</p>
                            <input class="input input-expert-number" type="text" value="15">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Experts Roundup Topic</p>
                            <input class="input input-expert-roundup" type="text" value="Online Investment Opportunities">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Summary of Topic in Under 4 Words</p>
                            <input class="input input-summary" type="text" value="Making Money Rocks">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Event in Topic</p>
                            <input class="input input-event" type="text" value="David Rockefeller Loses Fortune">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Hot Button Issue in Topic</p>
                            <input class="input input-hot-button" type="text" value="David Rockefeller Gambled Away Family Fortune">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Ridiculous WTF Sentence</p>
                            <input class="input input-ridiculous" type="text" value="ecommerce">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Industry</p>
                            <input class="input input-industry" type="text" value="ecommerce">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Short Quotable Testimonial</p>
                            <input class="input input-short-quote" type="text" value="GetRich.com Helped me Make $1,000 a Day">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Impressive Number From Your Business</p>
                            <input class="input input-impressive" type="text" value="14,000 Users Helped">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>
                    </ul>
                </div>

                <!-- Right hand side of the Main Content -->
                <div class="right-main-content">
                    <div>
                        <button class="save-project-btn">Save to project</button>
                    </div>

                    <div class="right-content">
                        <fieldset class="writer">
                            <legend> 
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
                                <path d="M13.608 11.76V10.432H16.616V22H15.144V11.76H13.608Z" fill="#1B2124"/>
                            </svg>

                                <p>
                                    The Social Proof Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                   <div class="show-output content-edit">
                                        <span class="impressive edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">Helped Me To</span>
                                        <span class="desirable-outcome edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend>
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.25" cx="16" cy="16" r="15.5" fill="#ffffff
" stroke="none"
/>
                                    <path d="M11.816 20.832C13.1707 19.744 14.232 18.8533 15 18.16C15.768 17.456 16.4133 16.7253 16.936 15.968C17.4693 15.2 17.736 14.448 17.736 13.712C17.736 13.0187 17.5653 12.4747 17.224 12.08C16.8933 11.6747 16.3547 11.472 15.608 11.472C14.8827 11.472 14.3173 11.7013 13.912 12.16C13.5173 12.608 13.304 13.2107 13.272 13.968H11.864C11.9067 12.7733 12.2693 11.8507 12.952 11.2C13.6347 10.5493 14.5147 10.224 15.592 10.224C16.6907 10.224 17.56 10.528 18.2 11.136C18.8507 11.744 19.176 12.5813 19.176 13.648C19.176 14.5333 18.9093 15.3973 18.376 16.24C17.8533 17.072 17.256 17.808 16.584 18.448C15.912 19.0773 15.0533 19.8133 14.008 20.656H19.512V21.872H11.816V20.832Z" fill="#000000
"/>
                                </svg>
                                <p>
                                    The Testimonial Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                   <div class="show-output content-edit">
                                        <span class="short-quote edit" contenteditable="true"></span>
                                        <span class="default-text hide-after" contenteditable="false"></span>
                                        <span class="desirable-outcome edit none" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M11.96 13.344C12.0347 12.3627 12.4133 11.5947 13.096 11.04C13.7787 10.4853 14.664 10.208 15.752 10.208C16.4773 10.208 17.1013 10.3413 17.624 10.608C18.1573 10.864 18.5573 11.216 18.824 11.664C19.1013 12.112 19.24 12.6187 19.24 13.184C19.24 13.8453 19.048 14.416 18.664 14.896C18.2907 15.376 17.8 15.6853 17.192 15.824V15.904C17.8853 16.0747 18.4347 16.4107 18.84 16.912C19.2453 17.4133 19.448 18.0693 19.448 18.88C19.448 19.488 19.3093 20.0373 19.032 20.528C18.7547 21.008 18.3387 21.3867 17.784 21.664C17.2293 21.9413 16.5627 22.08 15.784 22.08C14.6533 22.08 13.7253 21.7867 13 21.2C12.2747 20.6027 11.8693 19.76 11.784 18.672H13.192C13.2667 19.312 13.528 19.8347 13.976 20.24C14.424 20.6453 15.0213 20.848 15.768 20.848C16.5147 20.848 17.08 20.656 17.464 20.272C17.8587 19.8773 18.056 19.3707 18.056 18.752C18.056 17.952 17.7893 17.376 17.256 17.024C16.7227 16.672 15.9173 16.496 14.84 16.496H14.472V15.28H14.856C15.8373 15.2693 16.5787 15.1093 17.08 14.8C17.5813 14.48 17.832 13.9893 17.832 13.328C17.832 12.7627 17.6453 12.3093 17.272 11.968C16.9093 11.6267 16.3867 11.456 15.704 11.456C15.0427 11.456 14.5093 11.6267 14.104 11.968C13.6987 12.3093 13.4587 12.768 13.384 13.344H11.96Z" fill="#1B2124"/>
</svg>

                                <p>
                                    The Sneak Peek Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                   <div class="show-output content-edit">
                                        <span class="default-text" contenteditable="false">Inside The</span>
                                        <span class="industry edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">Industry</span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M11.64 19.424V18.32L17.256 10.544H19V18.16H20.6V19.424H19V22H17.56V19.424H11.64ZM17.624 12.064L13.32 18.16H17.624V12.064Z" fill="#1B2124"/>
</svg>
                                <p>
                                    The Branded Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                   <div class="show-output content-edit">
                                        <span class="keyword edit" contenteditable="true"></span>
                                        <span class="default-text hide-after" contenteditable="false"></span>
                                        <span class="headline-branding edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M19.368 11.696H13.752V15.344C13.9973 15.0027 14.36 14.7253 14.84 14.512C15.32 14.288 15.8373 14.176 16.392 14.176C17.2773 14.176 17.9973 14.3627 18.552 14.736C19.1067 15.0987 19.5013 15.5733 19.736 16.16C19.9813 16.736 20.104 17.3493 20.104 18C20.104 18.768 19.96 19.456 19.672 20.064C19.384 20.672 18.9413 21.152 18.344 21.504C17.7573 21.856 17.0267 22.032 16.152 22.032C15.032 22.032 14.1253 21.744 13.432 21.168C12.7387 20.592 12.3173 19.824 12.168 18.864H13.592C13.7307 19.472 14.024 19.9467 14.472 20.288C14.92 20.6293 15.4853 20.8 16.168 20.8C17.0107 20.8 17.6453 20.5493 18.072 20.048C18.4987 19.536 18.712 18.864 18.712 18.032C18.712 17.2 18.4987 16.56 18.072 16.112C17.6453 15.6533 17.016 15.424 16.184 15.424C15.6187 15.424 15.1227 15.5627 14.696 15.84C14.28 16.1067 13.976 16.4747 13.784 16.944H12.408V10.416H19.368V11.696Z" fill="#1B2124"/>
</svg>

                                <p>
                                    The Comparison Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                   <div class="show-output content-edit">
                                        <span class="default-text" contenteditable="false">Are You More Like</span>
                                        <span class="comparison-1 edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">Or</span>
                                        <span class="comparison-2 edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M18.44 13.184C18.2053 12 17.4747 11.408 16.248 11.408C15.2987 11.408 14.5893 11.776 14.12 12.512C13.6507 13.2373 13.4213 14.4373 13.432 16.112C13.6773 15.5573 14.0827 15.1253 14.648 14.816C15.224 14.496 15.864 14.336 16.568 14.336C17.6667 14.336 18.5413 14.6773 19.192 15.36C19.8533 16.0427 20.184 16.9867 20.184 18.192C20.184 18.9173 20.04 19.568 19.752 20.144C19.4747 20.72 19.048 21.1787 18.472 21.52C17.9067 21.8613 17.2187 22.032 16.408 22.032C15.3093 22.032 14.4507 21.7867 13.832 21.296C13.2133 20.8053 12.7813 20.128 12.536 19.264C12.2907 18.4 12.168 17.3333 12.168 16.064C12.168 12.1493 13.5333 10.192 16.264 10.192C17.3093 10.192 18.1307 10.4747 18.728 11.04C19.3253 11.6053 19.6773 12.32 19.784 13.184H18.44ZM16.264 15.568C15.8053 15.568 15.3733 15.664 14.968 15.856C14.5627 16.0373 14.232 16.32 13.976 16.704C13.7307 17.0773 13.608 17.536 13.608 18.08C13.608 18.8907 13.8427 19.552 14.312 20.064C14.7813 20.5653 15.4533 20.816 16.328 20.816C17.0747 20.816 17.6667 20.5867 18.104 20.128C18.552 19.6587 18.776 19.0293 18.776 18.24C18.776 17.408 18.5627 16.7573 18.136 16.288C17.7093 15.808 17.0853 15.568 16.264 15.568Z" fill="#1B2124"/>
</svg>
                                <p>
                                    The Expert Round Up Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                   <div class="show-output content-edit">
                                        <span class="expert-number edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">Experts Share</span>
                                        <span class="expert-roundup edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M20.112 11.568L15.664 22H14.192L18.704 11.712H12.528V10.464H20.112V11.568Z" fill="#1B2124"/>
</svg>
                                <p>
                                    The Snackable Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                   <div class="show-output content-edit">
                                        <span class="summary edit" contenteditable="true"></span>
                                        <span class="default-text hide-after" contenteditable="false"></span>
                                        <span class="desirable-outcome edit none" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M14.104 15.984C13.5067 15.7493 13.048 15.408 12.728 14.96C12.408 14.512 12.248 13.968 12.248 13.328C12.248 12.752 12.392 12.2347 12.68 11.776C12.968 11.3067 13.3947 10.9387 13.96 10.672C14.536 10.3947 15.2293 10.256 16.04 10.256C16.8507 10.256 17.5387 10.3947 18.104 10.672C18.68 10.9387 19.112 11.3067 19.4 11.776C19.6987 12.2347 19.848 12.752 19.848 13.328C19.848 13.9467 19.6827 14.4907 19.352 14.96C19.0213 15.4187 18.568 15.76 17.992 15.984C18.6533 16.1867 19.176 16.544 19.56 17.056C19.9547 17.5573 20.152 18.1653 20.152 18.88C20.152 19.5733 19.9813 20.1813 19.64 20.704C19.2987 21.216 18.8133 21.616 18.184 21.904C17.5653 22.1813 16.8507 22.32 16.04 22.32C15.2293 22.32 14.5147 22.1813 13.896 21.904C13.288 21.616 12.8133 21.216 12.472 20.704C12.1307 20.1813 11.96 19.5733 11.96 18.88C11.96 18.1653 12.152 17.552 12.536 17.04C12.92 16.528 13.4427 16.176 14.104 15.984ZM18.44 13.504C18.44 12.8533 18.2267 12.352 17.8 12C17.3733 11.648 16.7867 11.472 16.04 11.472C15.304 11.472 14.7227 11.648 14.296 12C13.8693 12.352 13.656 12.8587 13.656 13.52C13.656 14.1173 13.8747 14.5973 14.312 14.96C14.76 15.3227 15.336 15.504 16.04 15.504C16.7547 15.504 17.3307 15.3227 17.768 14.96C18.216 14.5867 18.44 14.1013 18.44 13.504ZM16.04 16.624C15.2507 16.624 14.6053 16.8107 14.104 17.184C13.6027 17.5467 13.352 18.096 13.352 18.832C13.352 19.5147 13.592 20.064 14.072 20.48C14.5627 20.896 15.2187 21.104 16.04 21.104C16.8613 21.104 17.512 20.896 17.992 20.48C18.472 20.064 18.712 19.5147 18.712 18.832C18.712 18.1173 18.4667 17.5733 17.976 17.2C17.4853 16.816 16.84 16.624 16.04 16.624Z" fill="#1B2124"/>
</svg>
                                <p>
                                    The WTF Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                   <div class="show-output content-edit">
                                        <span class="ridiculous edit" contenteditable="true"></span>
                                        <span class="default-text hide-after" contenteditable="false"></span>
                                        <span class="desirable-outcome edit none" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M14.864 18.896C14.9707 19.504 15.216 19.9733 15.6 20.304C15.9947 20.6347 16.5227 20.8 17.184 20.8C18.0693 20.8 18.72 20.4533 19.136 19.76C19.5627 19.0667 19.7653 17.8987 19.744 16.256C19.52 16.736 19.1467 17.1147 18.624 17.392C18.1013 17.6587 17.52 17.792 16.88 17.792C16.1653 17.792 15.5253 17.648 14.96 17.36C14.4053 17.0613 13.968 16.6293 13.648 16.064C13.328 15.4987 13.168 14.816 13.168 14.016C13.168 12.8747 13.4987 11.9573 14.16 11.264C14.8213 10.56 15.76 10.208 16.976 10.208C18.4693 10.208 19.5147 10.6933 20.112 11.664C20.72 12.6347 21.024 14.08 21.024 16C21.024 17.344 20.9013 18.4533 20.656 19.328C20.4213 20.2027 20.016 20.8693 19.44 21.328C18.8747 21.7867 18.096 22.016 17.104 22.016C16.016 22.016 15.168 21.7227 14.56 21.136C13.952 20.5493 13.6053 19.8027 13.52 18.896H14.864ZM17.12 16.56C17.8347 16.56 18.4213 16.3413 18.88 15.904C19.3387 15.456 19.568 14.8533 19.568 14.096C19.568 13.296 19.344 12.6507 18.896 12.16C18.448 11.6693 17.8187 11.424 17.008 11.424C16.2613 11.424 15.664 11.6587 15.216 12.128C14.7787 12.5973 14.56 13.216 14.56 13.984C14.56 14.7627 14.7787 15.3867 15.216 15.856C15.6533 16.3253 16.288 16.56 17.12 16.56Z" fill="#1B2124"/>
</svg>
                                <p>
                                    The Hot Button Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                   <div class="show-output content-edit">
                                        <span class="hot-button edit" contenteditable="true"></span>
                                        <span class="default-text hide-after" contenteditable="false"></span>
                                        <span class="desirable-outcome edit none" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M8.78206 11.76V10.432H11.7901V22H10.3181V11.76H8.78206ZM14.7711 16.096C14.7711 14.2613 15.0697 12.832 15.6671 11.808C16.2644 10.7733 17.3097 10.256 18.8031 10.256C20.2857 10.256 21.3257 10.7733 21.9231 11.808C22.5204 12.832 22.8191 14.2613 22.8191 16.096C22.8191 17.9627 22.5204 19.4133 21.9231 20.448C21.3257 21.4827 20.2857 22 18.8031 22C17.3097 22 16.2644 21.4827 15.6671 20.448C15.0697 19.4133 14.7711 17.9627 14.7711 16.096ZM21.3791 16.096C21.3791 15.168 21.3151 14.384 21.1871 13.744C21.0697 13.0933 20.8191 12.5707 20.4351 12.176C20.0617 11.7813 19.5177 11.584 18.8031 11.584C18.0777 11.584 17.5231 11.7813 17.1391 12.176C16.7657 12.5707 16.5151 13.0933 16.3871 13.744C16.2697 14.384 16.2111 15.168 16.2111 16.096C16.2111 17.056 16.2697 17.8613 16.3871 18.512C16.5151 19.1627 16.7657 19.6853 17.1391 20.08C17.5231 20.4747 18.0777 20.672 18.8031 20.672C19.5177 20.672 20.0617 20.4747 20.4351 20.08C20.8191 19.6853 21.0697 19.1627 21.1871 18.512C21.3151 17.8613 21.3791 17.056 21.3791 16.096Z" fill="#1B2124"/>
</svg>
                                <p>
                                    The Breaking News Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                   <div class="show-output content-edit">
                                        <span class="default-text" contenteditable="false">BREAKING:</span>
                                        <span class="event edit" contenteditable="true"></span>
                                        <span class="desirable-outcome edit none" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M11.743 11.76V10.432H14.751V22H13.279V11.76H11.743ZM17.348 11.76V10.432H20.356V22H18.884V11.76H17.348Z" fill="#1B2124"/>
</svg>

                                <p>
                                    The Keyword Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                   <div class="show-output content-edit">
                                        <span class="keyword edit" contenteditable="true"></span>
                                        <span class="default-text hide-after" contenteditable="false"></span>
                                        <span class="support-keyword edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>

            <!--Third Headline Main Content -->
            <div class="headline-main-content third-content none">
                <!-- Left hand side of the Main Content -->
                <div class="left-main-content">
                    <ul class="">
                        <li>
                            <p>Topic</p>
                            <input  class="input-topic" type="text" placeholder="Label" value="Making Money Online">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Desired outcome</p>
                            <input class="input-desired" type="text" placeholder="Label" value="Make Money Online">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Undesirable outcome</p>
                            <input class="input-undesired" type="text" placeholder="Label" value="Feeling Broke">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Audience</p>
                            <input class="input-audience" type="text" placeholder="Label" value="Entrepreneurs">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Points in Content</p>
                            <input class="input-points" type="text" placeholder="Label" value="10">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Helpful Aide</p>
                            <input class="input-help" type="text" placeholder="Label" value="Piggy Banks">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Seemingly inconsequential Action</p>
                            <input class="input-action" type="text" placeholder="Label" value="Saving $1 A Day">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>
                    </ul>
                </div>

                <!-- Right hand side of the Main Content -->
                <div class="right-main-content">
                    <div>
                        <button class="save-project-btn">Save to project</button>
                    </div>

                    <div class="right-content">
                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M13.608 11.76V10.432H16.616V22H15.144V11.76H13.608Z" fill="#1B2124"/>
</svg>

                                <p>
                                    The How / Result Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                   <div class="show-output content-edit">
                                        <span class="default-text" contenteditable="false">How</span>
                                        <span class="action edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">Can Stop You</span>
                                        <span class="undesirable-outcome edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle opacity="0.25" cx="16" cy="16" r="15.5" fill="#ffffff
" stroke="none"
/>
<path d="M11.816 20.832C13.1707 19.744 14.232 18.8533 15 18.16C15.768 17.456 16.4133 16.7253 16.936 15.968C17.4693 15.2 17.736 14.448 17.736 13.712C17.736 13.0187 17.5653 12.4747 17.224 12.08C16.8933 11.6747 16.3547 11.472 15.608 11.472C14.8827 11.472 14.3173 11.7013 13.912 12.16C13.5173 12.608 13.304 13.2107 13.272 13.968H11.864C11.9067 12.7733 12.2693 11.8507 12.952 11.2C13.6347 10.5493 14.5147 10.224 15.592 10.224C16.6907 10.224 17.56 10.528 18.2 11.136C18.8507 11.744 19.176 12.5813 19.176 13.648C19.176 14.5333 18.9093 15.3973 18.376 16.24C17.8533 17.072 17.256 17.808 16.584 18.448C15.912 19.0773 15.0533 19.8133 14.008 20.656H19.512V21.872H11.816V20.832Z" fill="#000000
"/>
</svg>

                                <p>
                                    The Explainer Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                    <div class="show-output content-edit">
                                        <span class="default-text" contenteditable="false">How</span>
                                        <span class="help edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">Help You</span>
                                        <span class="desirable-outcome edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M11.96 13.344C12.0347 12.3627 12.4133 11.5947 13.096 11.04C13.7787 10.4853 14.664 10.208 15.752 10.208C16.4773 10.208 17.1013 10.3413 17.624 10.608C18.1573 10.864 18.5573 11.216 18.824 11.664C19.1013 12.112 19.24 12.6187 19.24 13.184C19.24 13.8453 19.048 14.416 18.664 14.896C18.2907 15.376 17.8 15.6853 17.192 15.824V15.904C17.8853 16.0747 18.4347 16.4107 18.84 16.912C19.2453 17.4133 19.448 18.0693 19.448 18.88C19.448 19.488 19.3093 20.0373 19.032 20.528C18.7547 21.008 18.3387 21.3867 17.784 21.664C17.2293 21.9413 16.5627 22.08 15.784 22.08C14.6533 22.08 13.7253 21.7867 13 21.2C12.2747 20.6027 11.8693 19.76 11.784 18.672H13.192C13.2667 19.312 13.528 19.8347 13.976 20.24C14.424 20.6453 15.0213 20.848 15.768 20.848C16.5147 20.848 17.08 20.656 17.464 20.272C17.8587 19.8773 18.056 19.3707 18.056 18.752C18.056 17.952 17.7893 17.376 17.256 17.024C16.7227 16.672 15.9173 16.496 14.84 16.496H14.472V15.28H14.856C15.8373 15.2693 16.5787 15.1093 17.08 14.8C17.5813 14.48 17.832 13.9893 17.832 13.328C17.832 12.7627 17.6453 12.3093 17.272 11.968C16.9093 11.6267 16.3867 11.456 15.704 11.456C15.0427 11.456 14.5093 11.6267 14.104 11.968C13.6987 12.3093 13.4587 12.768 13.384 13.344H11.96Z" fill="#1B2124"/>
</svg>

                                <p>
                                    The Ignorance Avoidance Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                    <div class="show-output content-edit">
                                        <span class="default-text" contenteditable="false">What You Should Know About</span>
                                        <span class="topic edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M11.64 19.424V18.32L17.256 10.544H19V18.16H20.6V19.424H19V22H17.56V19.424H11.64ZM17.624 12.064L13.32 18.16H17.624V12.064Z" fill="#1B2124"/>
</svg>
                                <p>
                                    The Solutions Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                    <div class="show-output content-edit">
                                        <span class="default-text" contenteditable="false">Why You're Not</span>
                                        <span class="desirable-outcome edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">(And What You Can Do About It)</span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M19.368 11.696H13.752V15.344C13.9973 15.0027 14.36 14.7253 14.84 14.512C15.32 14.288 15.8373 14.176 16.392 14.176C17.2773 14.176 17.9973 14.3627 18.552 14.736C19.1067 15.0987 19.5013 15.5733 19.736 16.16C19.9813 16.736 20.104 17.3493 20.104 18C20.104 18.768 19.96 19.456 19.672 20.064C19.384 20.672 18.9413 21.152 18.344 21.504C17.7573 21.856 17.0267 22.032 16.152 22.032C15.032 22.032 14.1253 21.744 13.432 21.168C12.7387 20.592 12.3173 19.824 12.168 18.864H13.592C13.7307 19.472 14.024 19.9467 14.472 20.288C14.92 20.6293 15.4853 20.8 16.168 20.8C17.0107 20.8 17.6453 20.5493 18.072 20.048C18.4987 19.536 18.712 18.864 18.712 18.032C18.712 17.2 18.4987 16.56 18.072 16.112C17.6453 15.6533 17.016 15.424 16.184 15.424C15.6187 15.424 15.1227 15.5627 14.696 15.84C14.28 16.1067 13.976 16.4747 13.784 16.944H12.408V10.416H19.368V11.696Z" fill="#1B2124"/>
</svg>

                                <p>
                                    The Analysis Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                    <div class="show-output content-edit">
                                        <span class="default-text" contenteditable="false">We Analysed</span>
                                        <span class="points edit" contenteditable="true"></span>
                                        <span class="audience edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">And Here's What We Found</span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M18.44 13.184C18.2053 12 17.4747 11.408 16.248 11.408C15.2987 11.408 14.5893 11.776 14.12 12.512C13.6507 13.2373 13.4213 14.4373 13.432 16.112C13.6773 15.5573 14.0827 15.1253 14.648 14.816C15.224 14.496 15.864 14.336 16.568 14.336C17.6667 14.336 18.5413 14.6773 19.192 15.36C19.8533 16.0427 20.184 16.9867 20.184 18.192C20.184 18.9173 20.04 19.568 19.752 20.144C19.4747 20.72 19.048 21.1787 18.472 21.52C17.9067 21.8613 17.2187 22.032 16.408 22.032C15.3093 22.032 14.4507 21.7867 13.832 21.296C13.2133 20.8053 12.7813 20.128 12.536 19.264C12.2907 18.4 12.168 17.3333 12.168 16.064C12.168 12.1493 13.5333 10.192 16.264 10.192C17.3093 10.192 18.1307 10.4747 18.728 11.04C19.3253 11.6053 19.6773 12.32 19.784 13.184H18.44ZM16.264 15.568C15.8053 15.568 15.3733 15.664 14.968 15.856C14.5627 16.0373 14.232 16.32 13.976 16.704C13.7307 17.0773 13.608 17.536 13.608 18.08C13.608 18.8907 13.8427 19.552 14.312 20.064C14.7813 20.5653 15.4533 20.816 16.328 20.816C17.0747 20.816 17.6667 20.5867 18.104 20.128C18.552 19.6587 18.776 19.0293 18.776 18.24C18.776 17.408 18.5627 16.7573 18.136 16.288C17.7093 15.808 17.0853 15.568 16.264 15.568Z" fill="#1B2124"/>
</svg>
                                <p>
                                    The Teaser Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                    <div class="show-output content-edit">
                                        <span class="default-text" contenteditable="false">These</span>
                                        <span class="points edit" contenteditable="true"></span>
                                        <span class="help edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">Can Help You</span>
                                        <span class="desirable-outcome edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>

            <!--Fourth Headline Main Content -->
            <div class="headline-main-content fourth-content none">
                <!-- Left hand side of the Main Content -->
                <div class="left-main-content">
                    <ul class="">
                        <li>
                            <p>Desired Outcome (to)</p>
                            <input class="input-desired" type="text" placeholder="Label" value="Make Money Online">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Action</p>
                            <input class="input-action" type="text" placeholder="Label" value="Building Wealth">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Audience (Singular)</p>
                            <input class="input-audience" type="text" placeholder="Label" value="Entrepreneur">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Time Frame</p>
                            <input class="input-time" type="text" placeholder="Label" value="2 Weeks">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Past Tense</p>
                            <input class="input-past" type="text" placeholder="Label" value="Spent $100">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Common Objection</p>
                            <input class="input-objection" type="text" placeholder="Label" value="Work Long Hours">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Outrageous Claim</p>
                            <input class="input-claim" type="text" placeholder="Label" value="All Rich People Are Evil">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>
                    </ul>
                </div>

                <!-- Right hand side of the Main Content -->
                <div class="right-main-content">
                    <div>
                        <button class="save-project-btn">Save to project</button>
                    </div>

                    <div class="right-content">
                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M13.608 11.76V10.432H16.616V22H15.144V11.76H13.608Z" fill="#1B2124"/>
</svg>

                                <p>
                                    The See What Happened Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                     <div class="show-output content-edit">
                                        <span class="default-text" contenteditable="false">I</span>
                                        <span class="past edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">Every Day For</span>
                                        <span class="time edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle opacity="0.25" cx="16" cy="16" r="15.5" fill="#ffffff
" stroke="none"
/>
<path d="M11.816 20.832C13.1707 19.744 14.232 18.8533 15 18.16C15.768 17.456 16.4133 16.7253 16.936 15.968C17.4693 15.2 17.736 14.448 17.736 13.712C17.736 13.0187 17.5653 12.4747 17.224 12.08C16.8933 11.6747 16.3547 11.472 15.608 11.472C14.8827 11.472 14.3173 11.7013 13.912 12.16C13.5173 12.608 13.304 13.2107 13.272 13.968H11.864C11.9067 12.7733 12.2693 11.8507 12.952 11.2C13.6347 10.5493 14.5147 10.224 15.592 10.224C16.6907 10.224 17.56 10.528 18.2 11.136C18.8507 11.744 19.176 12.5813 19.176 13.648C19.176 14.5333 18.9093 15.3973 18.376 16.24C17.8533 17.072 17.256 17.808 16.584 18.448C15.912 19.0773 15.0533 19.8133 14.008 20.656H19.512V21.872H11.816V20.832Z" fill="#000000
"/>
</svg>

                                <p>
                                    The Outrageous Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                     <div class="show-output content-edit">
                                        <span class="default-text" contenteditable="false">Why</span>
                                        <span class="claim edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M11.96 13.344C12.0347 12.3627 12.4133 11.5947 13.096 11.04C13.7787 10.4853 14.664 10.208 15.752 10.208C16.4773 10.208 17.1013 10.3413 17.624 10.608C18.1573 10.864 18.5573 11.216 18.824 11.664C19.1013 12.112 19.24 12.6187 19.24 13.184C19.24 13.8453 19.048 14.416 18.664 14.896C18.2907 15.376 17.8 15.6853 17.192 15.824V15.904C17.8853 16.0747 18.4347 16.4107 18.84 16.912C19.2453 17.4133 19.448 18.0693 19.448 18.88C19.448 19.488 19.3093 20.0373 19.032 20.528C18.7547 21.008 18.3387 21.3867 17.784 21.664C17.2293 21.9413 16.5627 22.08 15.784 22.08C14.6533 22.08 13.7253 21.7867 13 21.2C12.2747 20.6027 11.8693 19.76 11.784 18.672H13.192C13.2667 19.312 13.528 19.8347 13.976 20.24C14.424 20.6453 15.0213 20.848 15.768 20.848C16.5147 20.848 17.08 20.656 17.464 20.272C17.8587 19.8773 18.056 19.3707 18.056 18.752C18.056 17.952 17.7893 17.376 17.256 17.024C16.7227 16.672 15.9173 16.496 14.84 16.496H14.472V15.28H14.856C15.8373 15.2693 16.5787 15.1093 17.08 14.8C17.5813 14.48 17.832 13.9893 17.832 13.328C17.832 12.7627 17.6453 12.3093 17.272 11.968C16.9093 11.6267 16.3867 11.456 15.704 11.456C15.0427 11.456 14.5093 11.6267 14.104 11.968C13.6987 12.3093 13.4587 12.768 13.384 13.344H11.96Z" fill="#1B2124"/>
</svg>

                                <p>
                                    Objection Preemptive Headline (Negative)
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                     <div class="show-output content-edit">
                                        <span class="default-text" contenteditable="false">No You Don't Need To</span>
                                        <span class="objection edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">To</span>
                                        <span class="desirable-outcome edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M11.64 19.424V18.32L17.256 10.544H19V18.16H20.6V19.424H19V22H17.56V19.424H11.64ZM17.624 12.064L13.32 18.16H17.624V12.064Z" fill="#1B2124"/>
</svg>
                                <p>
                                    Objection Preemptive Headline (Positive)
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                     <div class="show-output content-edit">
                                        <span class="default-text" contenteditable="false">Yes You Do Need To</span>
                                        <span class="objection edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">To</span>
                                        <span class="desirable-outcome edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M19.368 11.696H13.752V15.344C13.9973 15.0027 14.36 14.7253 14.84 14.512C15.32 14.288 15.8373 14.176 16.392 14.176C17.2773 14.176 17.9973 14.3627 18.552 14.736C19.1067 15.0987 19.5013 15.5733 19.736 16.16C19.9813 16.736 20.104 17.3493 20.104 18C20.104 18.768 19.96 19.456 19.672 20.064C19.384 20.672 18.9413 21.152 18.344 21.504C17.7573 21.856 17.0267 22.032 16.152 22.032C15.032 22.032 14.1253 21.744 13.432 21.168C12.7387 20.592 12.3173 19.824 12.168 18.864H13.592C13.7307 19.472 14.024 19.9467 14.472 20.288C14.92 20.6293 15.4853 20.8 16.168 20.8C17.0107 20.8 17.6453 20.5493 18.072 20.048C18.4987 19.536 18.712 18.864 18.712 18.032C18.712 17.2 18.4987 16.56 18.072 16.112C17.6453 15.6533 17.016 15.424 16.184 15.424C15.6187 15.424 15.1227 15.5627 14.696 15.84C14.28 16.1067 13.976 16.4747 13.784 16.944H12.408V10.416H19.368V11.696Z" fill="#1B2124"/>
</svg>

                                <p>
                                    The Quiz Headline 1
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                     <div class="show-output content-edit">
                                        <span class="default-text" contenteditable="false">QUIZ: What Type Of</span>
                                        <span class="audience edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">Are You?</span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M18.44 13.184C18.2053 12 17.4747 11.408 16.248 11.408C15.2987 11.408 14.5893 11.776 14.12 12.512C13.6507 13.2373 13.4213 14.4373 13.432 16.112C13.6773 15.5573 14.0827 15.1253 14.648 14.816C15.224 14.496 15.864 14.336 16.568 14.336C17.6667 14.336 18.5413 14.6773 19.192 15.36C19.8533 16.0427 20.184 16.9867 20.184 18.192C20.184 18.9173 20.04 19.568 19.752 20.144C19.4747 20.72 19.048 21.1787 18.472 21.52C17.9067 21.8613 17.2187 22.032 16.408 22.032C15.3093 22.032 14.4507 21.7867 13.832 21.296C13.2133 20.8053 12.7813 20.128 12.536 19.264C12.2907 18.4 12.168 17.3333 12.168 16.064C12.168 12.1493 13.5333 10.192 16.264 10.192C17.3093 10.192 18.1307 10.4747 18.728 11.04C19.3253 11.6053 19.6773 12.32 19.784 13.184H18.44ZM16.264 15.568C15.8053 15.568 15.3733 15.664 14.968 15.856C14.5627 16.0373 14.232 16.32 13.976 16.704C13.7307 17.0773 13.608 17.536 13.608 18.08C13.608 18.8907 13.8427 19.552 14.312 20.064C14.7813 20.5653 15.4533 20.816 16.328 20.816C17.0747 20.816 17.6667 20.5867 18.104 20.128C18.552 19.6587 18.776 19.0293 18.776 18.24C18.776 17.408 18.5627 16.7573 18.136 16.288C17.7093 15.808 17.0853 15.568 16.264 15.568Z" fill="#1B2124"/>
</svg>
                                <p>
                                    The Quiz Headline 2
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                     <div class="show-output content-edit">
                                        <span class="default-text" contenteditable="false">QUIZ: Which</span>
                                        <span class="audience edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">Are You?</span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M20.112 11.568L15.664 22H14.192L18.704 11.712H12.528V10.464H20.112V11.568Z" fill="#1B2124"/>
</svg>
                                <p>
                                    The Promise Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                     <div class="show-output content-edit">
                                        <span class="default-text" contenteditable="false">We Can Help You</span>
                                        <span class="desirable-outcome edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M14.104 15.984C13.5067 15.7493 13.048 15.408 12.728 14.96C12.408 14.512 12.248 13.968 12.248 13.328C12.248 12.752 12.392 12.2347 12.68 11.776C12.968 11.3067 13.3947 10.9387 13.96 10.672C14.536 10.3947 15.2293 10.256 16.04 10.256C16.8507 10.256 17.5387 10.3947 18.104 10.672C18.68 10.9387 19.112 11.3067 19.4 11.776C19.6987 12.2347 19.848 12.752 19.848 13.328C19.848 13.9467 19.6827 14.4907 19.352 14.96C19.0213 15.4187 18.568 15.76 17.992 15.984C18.6533 16.1867 19.176 16.544 19.56 17.056C19.9547 17.5573 20.152 18.1653 20.152 18.88C20.152 19.5733 19.9813 20.1813 19.64 20.704C19.2987 21.216 18.8133 21.616 18.184 21.904C17.5653 22.1813 16.8507 22.32 16.04 22.32C15.2293 22.32 14.5147 22.1813 13.896 21.904C13.288 21.616 12.8133 21.216 12.472 20.704C12.1307 20.1813 11.96 19.5733 11.96 18.88C11.96 18.1653 12.152 17.552 12.536 17.04C12.92 16.528 13.4427 16.176 14.104 15.984ZM18.44 13.504C18.44 12.8533 18.2267 12.352 17.8 12C17.3733 11.648 16.7867 11.472 16.04 11.472C15.304 11.472 14.7227 11.648 14.296 12C13.8693 12.352 13.656 12.8587 13.656 13.52C13.656 14.1173 13.8747 14.5973 14.312 14.96C14.76 15.3227 15.336 15.504 16.04 15.504C16.7547 15.504 17.3307 15.3227 17.768 14.96C18.216 14.5867 18.44 14.1013 18.44 13.504ZM16.04 16.624C15.2507 16.624 14.6053 16.8107 14.104 17.184C13.6027 17.5467 13.352 18.096 13.352 18.832C13.352 19.5147 13.592 20.064 14.072 20.48C14.5627 20.896 15.2187 21.104 16.04 21.104C16.8613 21.104 17.512 20.896 17.992 20.48C18.472 20.064 18.712 19.5147 18.712 18.832C18.712 18.1173 18.4667 17.5733 17.976 17.2C17.4853 16.816 16.84 16.624 16.04 16.624Z" fill="#1B2124"/>
</svg>
                                <p>
                                    The Trivia Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                     <div class="show-output content-edit">
                                        <span class="default-text" contenteditable="false">Can You Spot These Problems With</span>
                                        <span class="action edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">?</span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>

            <!--Fifth Headline Main Content -->
            <div class="headline-main-content fifth-content none">
                <!-- Left hand side of the Main Content -->
                <div class="left-main-content">
                    <ul class="">
                        <li>
                            <p>Topic</p>
                            <input class="input-topic" type="text" placeholder="Label" value="Making Money Online">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Desired Outcome (to)</p>
                            <input class="input-desired" type="text" placeholder="Label" value="Make Money Online">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Successful Outcome (Past Tense)</p>
                            <input class="input-success" type="text" placeholder="Label" value="Made Money Online">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Time Frame</p>
                            <input class="input-time" type="text" placeholder="Label" value="2 Weeks">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Well Known Celebrity</p>
                            <input class="input-celeb" type="text" placeholder="Label" value="Bill Gates">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Biggest Frustration</p>
                            <input class="input-frustrate" type="text" placeholder="Label" value="Causing Jealousy">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Descriptive Power Word</p>
                            <input class="input-power" type="text" placeholder="Label" value="Comprehensive">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>
                    </ul>
                </div>

                <!-- Right hand side of the Main Content -->
                <div class="right-main-content">
                    <div>
                        <button class="save-project-btn">Save to project</button>
                    </div>

                    <div class="right-content">
                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M13.608 11.76V10.432H16.616V22H15.144V11.76H13.608Z" fill="#1B2124"/>
</svg>

                                <p>
                                    The How to Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                    <div class="show-output content-edit">
                                        <span class="default-text" contenteditable="false">How To</span>
                                        <span class="desirable-outcome edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle opacity="0.25" cx="16" cy="16" r="15.5" fill="#ffffff
" stroke="none"
/>
<path d="M11.816 20.832C13.1707 19.744 14.232 18.8533 15 18.16C15.768 17.456 16.4133 16.7253 16.936 15.968C17.4693 15.2 17.736 14.448 17.736 13.712C17.736 13.0187 17.5653 12.4747 17.224 12.08C16.8933 11.6747 16.3547 11.472 15.608 11.472C14.8827 11.472 14.3173 11.7013 13.912 12.16C13.5173 12.608 13.304 13.2107 13.272 13.968H11.864C11.9067 12.7733 12.2693 11.8507 12.952 11.2C13.6347 10.5493 14.5147 10.224 15.592 10.224C16.6907 10.224 17.56 10.528 18.2 11.136C18.8507 11.744 19.176 12.5813 19.176 13.648C19.176 14.5333 18.9093 15.3973 18.376 16.24C17.8533 17.072 17.256 17.808 16.584 18.448C15.912 19.0773 15.0533 19.8133 14.008 20.656H19.512V21.872H11.816V20.832Z" fill="#000000
"/>
</svg>

                                <p>
                                    The Ultimate Guide Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                    <div class="show-output content-edit">
                                        <span class="default-text" contenteditable="false">The Ultimate Guide To</span>
                                        <span class="topic edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M11.96 13.344C12.0347 12.3627 12.4133 11.5947 13.096 11.04C13.7787 10.4853 14.664 10.208 15.752 10.208C16.4773 10.208 17.1013 10.3413 17.624 10.608C18.1573 10.864 18.5573 11.216 18.824 11.664C19.1013 12.112 19.24 12.6187 19.24 13.184C19.24 13.8453 19.048 14.416 18.664 14.896C18.2907 15.376 17.8 15.6853 17.192 15.824V15.904C17.8853 16.0747 18.4347 16.4107 18.84 16.912C19.2453 17.4133 19.448 18.0693 19.448 18.88C19.448 19.488 19.3093 20.0373 19.032 20.528C18.7547 21.008 18.3387 21.3867 17.784 21.664C17.2293 21.9413 16.5627 22.08 15.784 22.08C14.6533 22.08 13.7253 21.7867 13 21.2C12.2747 20.6027 11.8693 19.76 11.784 18.672H13.192C13.2667 19.312 13.528 19.8347 13.976 20.24C14.424 20.6453 15.0213 20.848 15.768 20.848C16.5147 20.848 17.08 20.656 17.464 20.272C17.8587 19.8773 18.056 19.3707 18.056 18.752C18.056 17.952 17.7893 17.376 17.256 17.024C16.7227 16.672 15.9173 16.496 14.84 16.496H14.472V15.28H14.856C15.8373 15.2693 16.5787 15.1093 17.08 14.8C17.5813 14.48 17.832 13.9893 17.832 13.328C17.832 12.7627 17.6453 12.3093 17.272 11.968C16.9093 11.6267 16.3867 11.456 15.704 11.456C15.0427 11.456 14.5093 11.6267 14.104 11.968C13.6987 12.3093 13.4587 12.768 13.384 13.344H11.96Z" fill="#1B2124"/>
</svg>

                                <p>
                                    The Celebrity Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                    <div class="show-output content-edit">
                                        <span class="default-text" contenteditable="false">How To</span>
                                        <span class="desirable-outcome edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">Like</span>
                                        <span class="celeb edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M11.64 19.424V18.32L17.256 10.544H19V18.16H20.6V19.424H19V22H17.56V19.424H11.64ZM17.624 12.064L13.32 18.16H17.624V12.064Z" fill="#1B2124"/>
</svg>
                                <p>
                                    The How To / Without Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                    <div class="show-output content-edit">
                                        <span class="default-text" contenteditable="false">How To</span>
                                        <span class="topic edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">How To</span>
                                        <span class="frustrate edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> 
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
                                    <path d="M19.368 11.696H13.752V15.344C13.9973 15.0027 14.36 14.7253 14.84 14.512C15.32 14.288 15.8373 14.176 16.392 14.176C17.2773 14.176 17.9973 14.3627 18.552 14.736C19.1067 15.0987 19.5013 15.5733 19.736 16.16C19.9813 16.736 20.104 17.3493 20.104 18C20.104 18.768 19.96 19.456 19.672 20.064C19.384 20.672 18.9413 21.152 18.344 21.504C17.7573 21.856 17.0267 22.032 16.152 22.032C15.032 22.032 14.1253 21.744 13.432 21.168C12.7387 20.592 12.3173 19.824 12.168 18.864H13.592C13.7307 19.472 14.024 19.9467 14.472 20.288C14.92 20.6293 15.4853 20.8 16.168 20.8C17.0107 20.8 17.6453 20.5493 18.072 20.048C18.4987 19.536 18.712 18.864 18.712 18.032C18.712 17.2 18.4987 16.56 18.072 16.112C17.6453 15.6533 17.016 15.424 16.184 15.424C15.6187 15.424 15.1227 15.5627 14.696 15.84C14.28 16.1067 13.976 16.4747 13.784 16.944H12.408V10.416H19.368V11.696Z" fill="#1B2124"/>
                                </svg>
                                <p>
                                    The Tutorial Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                    <div class="show-output content-edit">
                                        <span class="default-text" contenteditable="false">The</span>
                                        <span class="power edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">To</span>
                                        <span class="topic edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M18.44 13.184C18.2053 12 17.4747 11.408 16.248 11.408C15.2987 11.408 14.5893 11.776 14.12 12.512C13.6507 13.2373 13.4213 14.4373 13.432 16.112C13.6773 15.5573 14.0827 15.1253 14.648 14.816C15.224 14.496 15.864 14.336 16.568 14.336C17.6667 14.336 18.5413 14.6773 19.192 15.36C19.8533 16.0427 20.184 16.9867 20.184 18.192C20.184 18.9173 20.04 19.568 19.752 20.144C19.4747 20.72 19.048 21.1787 18.472 21.52C17.9067 21.8613 17.2187 22.032 16.408 22.032C15.3093 22.032 14.4507 21.7867 13.832 21.296C13.2133 20.8053 12.7813 20.128 12.536 19.264C12.2907 18.4 12.168 17.3333 12.168 16.064C12.168 12.1493 13.5333 10.192 16.264 10.192C17.3093 10.192 18.1307 10.4747 18.728 11.04C19.3253 11.6053 19.6773 12.32 19.784 13.184H18.44ZM16.264 15.568C15.8053 15.568 15.3733 15.664 14.968 15.856C14.5627 16.0373 14.232 16.32 13.976 16.704C13.7307 17.0773 13.608 17.536 13.608 18.08C13.608 18.8907 13.8427 19.552 14.312 20.064C14.7813 20.5653 15.4533 20.816 16.328 20.816C17.0747 20.816 17.6667 20.5867 18.104 20.128C18.552 19.6587 18.776 19.0293 18.776 18.24C18.776 17.408 18.5627 16.7573 18.136 16.288C17.7093 15.808 17.0853 15.568 16.264 15.568Z" fill="#1B2124"/>
</svg>
                                <p>
                                    The Results Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                    <div class="show-output content-edit">
                                        <span class="default-text" contenteditable="false">How We</span>
                                        <span class="success edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">In Only</span>
                                        <span class="time edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M20.112 11.568L15.664 22H14.192L18.704 11.712H12.528V10.464H20.112V11.568Z" fill="#1B2124"/>
</svg>
                                <p>
                                    The Like A Boss Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                    <div class="show-output content-edit">
                                        <span class="default-text" contenteditable="false">How To</span>
                                        <span class="desirable-outcome edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">Like A Boss</span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>

            <!--Sixth Headline Main Content -->
            <div class="headline-main-content sixth-content none">
                <!-- Left hand side of the Main Content -->
                <div class="left-main-content">
                    <ul class="">
                        <li>
                            <p>Topic</p>
                            <input type="text" placeholder="Label" class="input-topic" value="Making Money Online">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Desired Outcome (to)</p>
                            <input type="text" placeholder="Label" class="input-desired" value="Make Money Online">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Undesirable Outcome</p>
                            <input type="text" placeholder="Label" class="input-undesired" value="Feeling Broke">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Points in Content</p>
                            <input type="text" placeholder="Label" class="input-points" value="19">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>
                    </ul>
                </div>

                <!-- Right hand side of the Main Content -->
                <div class="right-main-content">
                    <div>
                        <button class="save-project-btn">Save to project</button>
                    </div>

                    <div class="right-content">
                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M13.608 11.76V10.432H16.616V22H15.144V11.76H13.608Z" fill="#1B2124"/>
</svg>

                                <p>
                                    The List Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                     <div class="show-output content-edit">
                                        <span class="points edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">Ways To</span>
                                        <span class="desirable-outcome edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle opacity="0.25" cx="16" cy="16" r="15.5" fill="#ffffff
" stroke="none"
/>
<path d="M11.816 20.832C13.1707 19.744 14.232 18.8533 15 18.16C15.768 17.456 16.4133 16.7253 16.936 15.968C17.4693 15.2 17.736 14.448 17.736 13.712C17.736 13.0187 17.5653 12.4747 17.224 12.08C16.8933 11.6747 16.3547 11.472 15.608 11.472C14.8827 11.472 14.3173 11.7013 13.912 12.16C13.5173 12.608 13.304 13.2107 13.272 13.968H11.864C11.9067 12.7733 12.2693 11.8507 12.952 11.2C13.6347 10.5493 14.5147 10.224 15.592 10.224C16.6907 10.224 17.56 10.528 18.2 11.136C18.8507 11.744 19.176 12.5813 19.176 13.648C19.176 14.5333 18.9093 15.3973 18.376 16.24C17.8533 17.072 17.256 17.808 16.584 18.448C15.912 19.0773 15.0533 19.8133 14.008 20.656H19.512V21.872H11.816V20.832Z" fill="#000000
"/>
</svg>

                                <p>
                                    The Sidenote Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                     <div class="show-output content-edit">
                                        <span class="points edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">Ways To</span>
                                        <span class="desirable-outcome edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M11.96 13.344C12.0347 12.3627 12.4133 11.5947 13.096 11.04C13.7787 10.4853 14.664 10.208 15.752 10.208C16.4773 10.208 17.1013 10.3413 17.624 10.608C18.1573 10.864 18.5573 11.216 18.824 11.664C19.1013 12.112 19.24 12.6187 19.24 13.184C19.24 13.8453 19.048 14.416 18.664 14.896C18.2907 15.376 17.8 15.6853 17.192 15.824V15.904C17.8853 16.0747 18.4347 16.4107 18.84 16.912C19.2453 17.4133 19.448 18.0693 19.448 18.88C19.448 19.488 19.3093 20.0373 19.032 20.528C18.7547 21.008 18.3387 21.3867 17.784 21.664C17.2293 21.9413 16.5627 22.08 15.784 22.08C14.6533 22.08 13.7253 21.7867 13 21.2C12.2747 20.6027 11.8693 19.76 11.784 18.672H13.192C13.2667 19.312 13.528 19.8347 13.976 20.24C14.424 20.6453 15.0213 20.848 15.768 20.848C16.5147 20.848 17.08 20.656 17.464 20.272C17.8587 19.8773 18.056 19.3707 18.056 18.752C18.056 17.952 17.7893 17.376 17.256 17.024C16.7227 16.672 15.9173 16.496 14.84 16.496H14.472V15.28H14.856C15.8373 15.2693 16.5787 15.1093 17.08 14.8C17.5813 14.48 17.832 13.9893 17.832 13.328C17.832 12.7627 17.6453 12.3093 17.272 11.968C16.9093 11.6267 16.3867 11.456 15.704 11.456C15.0427 11.456 14.5093 11.6267 14.104 11.968C13.6987 12.3093 13.4587 12.768 13.384 13.344H11.96Z" fill="#1B2124"/>
</svg>

                                <p>
                                    The Proven Methods Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                     <div class="show-output content-edit">
                                        <span class="points edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">Proven Methods For</span>
                                        <span class="topic edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M11.64 19.424V18.32L17.256 10.544H19V18.16H20.6V19.424H19V22H17.56V19.424H11.64ZM17.624 12.064L13.32 18.16H17.624V12.064Z" fill="#1B2124"/>
</svg>
                                <p>
                                    The Mistakes Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                     <div class="show-output content-edit">
                                        <span class="points edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">Mistakes Most People Make When</span>
                                        <span class="topic edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M19.368 11.696H13.752V15.344C13.9973 15.0027 14.36 14.7253 14.84 14.512C15.32 14.288 15.8373 14.176 16.392 14.176C17.2773 14.176 17.9973 14.3627 18.552 14.736C19.1067 15.0987 19.5013 15.5733 19.736 16.16C19.9813 16.736 20.104 17.3493 20.104 18C20.104 18.768 19.96 19.456 19.672 20.064C19.384 20.672 18.9413 21.152 18.344 21.504C17.7573 21.856 17.0267 22.032 16.152 22.032C15.032 22.032 14.1253 21.744 13.432 21.168C12.7387 20.592 12.3173 19.824 12.168 18.864H13.592C13.7307 19.472 14.024 19.9467 14.472 20.288C14.92 20.6293 15.4853 20.8 16.168 20.8C17.0107 20.8 17.6453 20.5493 18.072 20.048C18.4987 19.536 18.712 18.864 18.712 18.032C18.712 17.2 18.4987 16.56 18.072 16.112C17.6453 15.6533 17.016 15.424 16.184 15.424C15.6187 15.424 15.1227 15.5627 14.696 15.84C14.28 16.1067 13.976 16.4747 13.784 16.944H12.408V10.416H19.368V11.696Z" fill="#1B2124"/>
</svg>

                                <p>
                                    The Secrets Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                     <div class="show-output content-edit">
                                        <span class="points edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">Secrets To</span>
                                        <span class="topic edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M18.44 13.184C18.2053 12 17.4747 11.408 16.248 11.408C15.2987 11.408 14.5893 11.776 14.12 12.512C13.6507 13.2373 13.4213 14.4373 13.432 16.112C13.6773 15.5573 14.0827 15.1253 14.648 14.816C15.224 14.496 15.864 14.336 16.568 14.336C17.6667 14.336 18.5413 14.6773 19.192 15.36C19.8533 16.0427 20.184 16.9867 20.184 18.192C20.184 18.9173 20.04 19.568 19.752 20.144C19.4747 20.72 19.048 21.1787 18.472 21.52C17.9067 21.8613 17.2187 22.032 16.408 22.032C15.3093 22.032 14.4507 21.7867 13.832 21.296C13.2133 20.8053 12.7813 20.128 12.536 19.264C12.2907 18.4 12.168 17.3333 12.168 16.064C12.168 12.1493 13.5333 10.192 16.264 10.192C17.3093 10.192 18.1307 10.4747 18.728 11.04C19.3253 11.6053 19.6773 12.32 19.784 13.184H18.44ZM16.264 15.568C15.8053 15.568 15.3733 15.664 14.968 15.856C14.5627 16.0373 14.232 16.32 13.976 16.704C13.7307 17.0773 13.608 17.536 13.608 18.08C13.608 18.8907 13.8427 19.552 14.312 20.064C14.7813 20.5653 15.4533 20.816 16.328 20.816C17.0747 20.816 17.6667 20.5867 18.104 20.128C18.552 19.6587 18.776 19.0293 18.776 18.24C18.776 17.408 18.5627 16.7573 18.136 16.288C17.7093 15.808 17.0853 15.568 16.264 15.568Z" fill="#1B2124"/>
</svg>
                                <p>
                                    The Lessons Learned Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                     <div class="show-output content-edit">
                                        <span class="points edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">Lessons I Learned</span>
                                        <span class="topic edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M20.112 11.568L15.664 22H14.192L18.704 11.712H12.528V10.464H20.112V11.568Z" fill="#1B2124"/>
</svg>
                                <p>
                                    The Silver Platter Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                     <div class="show-output content-edit">
                                        <span class="points edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">Easy Ways To</span>
                                        <span class="desirable-outcome edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M14.104 15.984C13.5067 15.7493 13.048 15.408 12.728 14.96C12.408 14.512 12.248 13.968 12.248 13.328C12.248 12.752 12.392 12.2347 12.68 11.776C12.968 11.3067 13.3947 10.9387 13.96 10.672C14.536 10.3947 15.2293 10.256 16.04 10.256C16.8507 10.256 17.5387 10.3947 18.104 10.672C18.68 10.9387 19.112 11.3067 19.4 11.776C19.6987 12.2347 19.848 12.752 19.848 13.328C19.848 13.9467 19.6827 14.4907 19.352 14.96C19.0213 15.4187 18.568 15.76 17.992 15.984C18.6533 16.1867 19.176 16.544 19.56 17.056C19.9547 17.5573 20.152 18.1653 20.152 18.88C20.152 19.5733 19.9813 20.1813 19.64 20.704C19.2987 21.216 18.8133 21.616 18.184 21.904C17.5653 22.1813 16.8507 22.32 16.04 22.32C15.2293 22.32 14.5147 22.1813 13.896 21.904C13.288 21.616 12.8133 21.216 12.472 20.704C12.1307 20.1813 11.96 19.5733 11.96 18.88C11.96 18.1653 12.152 17.552 12.536 17.04C12.92 16.528 13.4427 16.176 14.104 15.984ZM18.44 13.504C18.44 12.8533 18.2267 12.352 17.8 12C17.3733 11.648 16.7867 11.472 16.04 11.472C15.304 11.472 14.7227 11.648 14.296 12C13.8693 12.352 13.656 12.8587 13.656 13.52C13.656 14.1173 13.8747 14.5973 14.312 14.96C14.76 15.3227 15.336 15.504 16.04 15.504C16.7547 15.504 17.3307 15.3227 17.768 14.96C18.216 14.5867 18.44 14.1013 18.44 13.504ZM16.04 16.624C15.2507 16.624 14.6053 16.8107 14.104 17.184C13.6027 17.5467 13.352 18.096 13.352 18.832C13.352 19.5147 13.592 20.064 14.072 20.48C14.5627 20.896 15.2187 21.104 16.04 21.104C16.8613 21.104 17.512 20.896 17.992 20.48C18.472 20.064 18.712 19.5147 18.712 18.832C18.712 18.1173 18.4667 17.5733 17.976 17.2C17.4853 16.816 16.84 16.624 16.04 16.624Z" fill="#1B2124"/>
</svg>
                                <p>
                                    The Hacks Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                     <div class="show-output content-edit">
                                        <span class="points edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">Hacks To</span>
                                        <span class="desirable-outcome edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M14.864 18.896C14.9707 19.504 15.216 19.9733 15.6 20.304C15.9947 20.6347 16.5227 20.8 17.184 20.8C18.0693 20.8 18.72 20.4533 19.136 19.76C19.5627 19.0667 19.7653 17.8987 19.744 16.256C19.52 16.736 19.1467 17.1147 18.624 17.392C18.1013 17.6587 17.52 17.792 16.88 17.792C16.1653 17.792 15.5253 17.648 14.96 17.36C14.4053 17.0613 13.968 16.6293 13.648 16.064C13.328 15.4987 13.168 14.816 13.168 14.016C13.168 12.8747 13.4987 11.9573 14.16 11.264C14.8213 10.56 15.76 10.208 16.976 10.208C18.4693 10.208 19.5147 10.6933 20.112 11.664C20.72 12.6347 21.024 14.08 21.024 16C21.024 17.344 20.9013 18.4533 20.656 19.328C20.4213 20.2027 20.016 20.8693 19.44 21.328C18.8747 21.7867 18.096 22.016 17.104 22.016C16.016 22.016 15.168 21.7227 14.56 21.136C13.952 20.5493 13.6053 19.8027 13.52 18.896H14.864ZM17.12 16.56C17.8347 16.56 18.4213 16.3413 18.88 15.904C19.3387 15.456 19.568 14.8533 19.568 14.096C19.568 13.296 19.344 12.6507 18.896 12.16C18.448 11.6693 17.8187 11.424 17.008 11.424C16.2613 11.424 15.664 11.6587 15.216 12.128C14.7787 12.5973 14.56 13.216 14.56 13.984C14.56 14.7627 14.7787 15.3867 15.216 15.856C15.6533 16.3253 16.288 16.56 17.12 16.56Z" fill="#1B2124"/>
</svg>
                                <p>
                                    The Steps to Result Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                     <div class="show-output content-edit">
                                        <span class="points edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">Steps To</span>
                                        <span class="desirable-outcome edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M8.78206 11.76V10.432H11.7901V22H10.3181V11.76H8.78206ZM14.7711 16.096C14.7711 14.2613 15.0697 12.832 15.6671 11.808C16.2644 10.7733 17.3097 10.256 18.8031 10.256C20.2857 10.256 21.3257 10.7733 21.9231 11.808C22.5204 12.832 22.8191 14.2613 22.8191 16.096C22.8191 17.9627 22.5204 19.4133 21.9231 20.448C21.3257 21.4827 20.2857 22 18.8031 22C17.3097 22 16.2644 21.4827 15.6671 20.448C15.0697 19.4133 14.7711 17.9627 14.7711 16.096ZM21.3791 16.096C21.3791 15.168 21.3151 14.384 21.1871 13.744C21.0697 13.0933 20.8191 12.5707 20.4351 12.176C20.0617 11.7813 19.5177 11.584 18.8031 11.584C18.0777 11.584 17.5231 11.7813 17.1391 12.176C16.7657 12.5707 16.5151 13.0933 16.3871 13.744C16.2697 14.384 16.2111 15.168 16.2111 16.096C16.2111 17.056 16.2697 17.8613 16.3871 18.512C16.5151 19.1627 16.7657 19.6853 17.1391 20.08C17.5231 20.4747 18.0777 20.672 18.8031 20.672C19.5177 20.672 20.0617 20.4747 20.4351 20.08C20.8191 19.6853 21.0697 19.1627 21.1871 18.512C21.3151 17.8613 21.3791 17.056 21.3791 16.096Z" fill="#1B2124"/>
</svg>
                                <p>
                                    The Reasons Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                     <div class="show-output content-edit">
                                        <span class="points edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">Reasons Why You're</span>
                                        <span class="undesirable-outcome edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M11.743 11.76V10.432H14.751V22H13.279V11.76H11.743ZM17.348 11.76V10.432H20.356V22H18.884V11.76H17.348Z" fill="#1B2124"/>
</svg>

                                <p>
                                    The Little Known Methods Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                     <div class="show-output content-edit">
                                        <span class="points edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">Little Known Ways To</span>
                                        <span class="desirable-outcome edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>

            <!--Seventh Headline Main Content -->
            <div class="headline-main-content seventh-content none">
                <!-- Left hand side of the Main Content -->
                <div class="left-main-content">
                    <ul class="">
                        <li>
                            <p>Topic</p>
                            <input class="input-topic"  type="text" value="Making Money Online">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Desired Outcome (to)</p>
                            <input class="input-desired"  type="text" placeholder="Label" value="Make Money Online">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Precious Thing/s</p>
                            <input class="input-precious"  type="text" placeholder="Label" value="Wealth">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Undesirable Outcome</p>
                            <input class="input-undesired"  type="text" placeholder="Label" value="Feeling Broke">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Audience</p>
                            <input class="input-audience"  type="text" placeholder="Label" value="Entrepreneurs">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>

                        <li>
                            <p>Something That Could Affect Outcome</p>
                            <input class="input-affect"  type="text" placeholder="Label" value="Your Negotiating Skills">
                            <span class="input-hint">
                                <img src="./images/Vector.svg" alt="">
                            </span>
                        </li>
                    </ul>
                </div>

                <!-- Right hand side of the Main Content -->
                <div class="right-main-content">
                    <div>
                        <button class="save-project-btn">Save to project</button>
                    </div>

                    <div class="right-content">
                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M13.608 11.76V10.432H16.616V22H15.144V11.76H13.608Z" fill="#1B2124"/>
</svg>

                                <p>
                                    The Fearmonger Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                   <div class="show-output content-edit">
                                        <span class="default-text" contenteditable="false">Warning! Are You Sabotaging Your</span>
                                        <span class="precious edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle opacity="0.25" cx="16" cy="16" r="15.5" fill="#ffffff
" stroke="none"
/>
<path d="M11.816 20.832C13.1707 19.744 14.232 18.8533 15 18.16C15.768 17.456 16.4133 16.7253 16.936 15.968C17.4693 15.2 17.736 14.448 17.736 13.712C17.736 13.0187 17.5653 12.4747 17.224 12.08C16.8933 11.6747 16.3547 11.472 15.608 11.472C14.8827 11.472 14.3173 11.7013 13.912 12.16C13.5173 12.608 13.304 13.2107 13.272 13.968H11.864C11.9067 12.7733 12.2693 11.8507 12.952 11.2C13.6347 10.5493 14.5147 10.224 15.592 10.224C16.6907 10.224 17.56 10.528 18.2 11.136C18.8507 11.744 19.176 12.5813 19.176 13.648C19.176 14.5333 18.9093 15.3973 18.376 16.24C17.8533 17.072 17.256 17.808 16.584 18.448C15.912 19.0773 15.0533 19.8133 14.008 20.656H19.512V21.872H11.816V20.832Z" fill="#000000
"/>
</svg>

                                <p>
                                    The Rally Cry Headline (Positive)
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                   <div class="show-output content-edit">
                                        <span class="default-text" contenteditable="false">Let's Start</span>
                                        <span class="topic edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M11.96 13.344C12.0347 12.3627 12.4133 11.5947 13.096 11.04C13.7787 10.4853 14.664 10.208 15.752 10.208C16.4773 10.208 17.1013 10.3413 17.624 10.608C18.1573 10.864 18.5573 11.216 18.824 11.664C19.1013 12.112 19.24 12.6187 19.24 13.184C19.24 13.8453 19.048 14.416 18.664 14.896C18.2907 15.376 17.8 15.6853 17.192 15.824V15.904C17.8853 16.0747 18.4347 16.4107 18.84 16.912C19.2453 17.4133 19.448 18.0693 19.448 18.88C19.448 19.488 19.3093 20.0373 19.032 20.528C18.7547 21.008 18.3387 21.3867 17.784 21.664C17.2293 21.9413 16.5627 22.08 15.784 22.08C14.6533 22.08 13.7253 21.7867 13 21.2C12.2747 20.6027 11.8693 19.76 11.784 18.672H13.192C13.2667 19.312 13.528 19.8347 13.976 20.24C14.424 20.6453 15.0213 20.848 15.768 20.848C16.5147 20.848 17.08 20.656 17.464 20.272C17.8587 19.8773 18.056 19.3707 18.056 18.752C18.056 17.952 17.7893 17.376 17.256 17.024C16.7227 16.672 15.9173 16.496 14.84 16.496H14.472V15.28H14.856C15.8373 15.2693 16.5787 15.1093 17.08 14.8C17.5813 14.48 17.832 13.9893 17.832 13.328C17.832 12.7627 17.6453 12.3093 17.272 11.968C16.9093 11.6267 16.3867 11.456 15.704 11.456C15.0427 11.456 14.5093 11.6267 14.104 11.968C13.6987 12.3093 13.4587 12.768 13.384 13.344H11.96Z" fill="#1B2124"/>
</svg>

                                <p>
                                    The Rally Cry Headline (Negative)
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                   <div class="show-output content-edit">
                                        <span class="default-text" contenteditable="false">Let's Stop</span>
                                        <span class="undesirable-outcome edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M11.64 19.424V18.32L17.256 10.544H19V18.16H20.6V19.424H19V22H17.56V19.424H11.64ZM17.624 12.064L13.32 18.16H17.624V12.064Z" fill="#1B2124"/>
</svg>
                                <p>
                                    The Question Headline 1
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                   <div class="show-output content-edit">
                                        <span class="default-text" contenteditable="false">Why Are You</span>
                                        <span class="undesirable-outcome edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M19.368 11.696H13.752V15.344C13.9973 15.0027 14.36 14.7253 14.84 14.512C15.32 14.288 15.8373 14.176 16.392 14.176C17.2773 14.176 17.9973 14.3627 18.552 14.736C19.1067 15.0987 19.5013 15.5733 19.736 16.16C19.9813 16.736 20.104 17.3493 20.104 18C20.104 18.768 19.96 19.456 19.672 20.064C19.384 20.672 18.9413 21.152 18.344 21.504C17.7573 21.856 17.0267 22.032 16.152 22.032C15.032 22.032 14.1253 21.744 13.432 21.168C12.7387 20.592 12.3173 19.824 12.168 18.864H13.592C13.7307 19.472 14.024 19.9467 14.472 20.288C14.92 20.6293 15.4853 20.8 16.168 20.8C17.0107 20.8 17.6453 20.5493 18.072 20.048C18.4987 19.536 18.712 18.864 18.712 18.032C18.712 17.2 18.4987 16.56 18.072 16.112C17.6453 15.6533 17.016 15.424 16.184 15.424C15.6187 15.424 15.1227 15.5627 14.696 15.84C14.28 16.1067 13.976 16.4747 13.784 16.944H12.408V10.416H19.368V11.696Z" fill="#1B2124"/>
</svg>

                                <p>
                                    The Question Headline 2
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                   <div class="show-output content-edit">
                                        <span class="default-text" contenteditable="false">Are You Still</span>
                                        <span class="undesirable-outcome edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M18.44 13.184C18.2053 12 17.4747 11.408 16.248 11.408C15.2987 11.408 14.5893 11.776 14.12 12.512C13.6507 13.2373 13.4213 14.4373 13.432 16.112C13.6773 15.5573 14.0827 15.1253 14.648 14.816C15.224 14.496 15.864 14.336 16.568 14.336C17.6667 14.336 18.5413 14.6773 19.192 15.36C19.8533 16.0427 20.184 16.9867 20.184 18.192C20.184 18.9173 20.04 19.568 19.752 20.144C19.4747 20.72 19.048 21.1787 18.472 21.52C17.9067 21.8613 17.2187 22.032 16.408 22.032C15.3093 22.032 14.4507 21.7867 13.832 21.296C13.2133 20.8053 12.7813 20.128 12.536 19.264C12.2907 18.4 12.168 17.3333 12.168 16.064C12.168 12.1493 13.5333 10.192 16.264 10.192C17.3093 10.192 18.1307 10.4747 18.728 11.04C19.3253 11.6053 19.6773 12.32 19.784 13.184H18.44ZM16.264 15.568C15.8053 15.568 15.3733 15.664 14.968 15.856C14.5627 16.0373 14.232 16.32 13.976 16.704C13.7307 17.0773 13.608 17.536 13.608 18.08C13.608 18.8907 13.8427 19.552 14.312 20.064C14.7813 20.5653 15.4533 20.816 16.328 20.816C17.0747 20.816 17.6667 20.5867 18.104 20.128C18.552 19.6587 18.776 19.0293 18.776 18.24C18.776 17.408 18.5627 16.7573 18.136 16.288C17.7093 15.808 17.0853 15.568 16.264 15.568Z" fill="#1B2124"/>
</svg>
                                <p>
                                    The Fortune Teller Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                   <div class="show-output content-edit">
                                        <span class="default-text" contenteditable="false">You Won't Be Able To</span>
                                        <span class="desirable-outcome edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">In 2020</span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M20.112 11.568L15.664 22H14.192L18.704 11.712H12.528V10.464H20.112V11.568Z" fill="#1B2124"/>
</svg>
                                <p>
                                    The Imagination Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                   <div class="show-output content-edit">
                                    <span class="default-text" contenteditable="false">Imagine</span>
                                    <span class="topic edit" contenteditable="true"></span>
                                    <span class="default-text" contenteditable="false">In 2020</span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M14.104 15.984C13.5067 15.7493 13.048 15.408 12.728 14.96C12.408 14.512 12.248 13.968 12.248 13.328C12.248 12.752 12.392 12.2347 12.68 11.776C12.968 11.3067 13.3947 10.9387 13.96 10.672C14.536 10.3947 15.2293 10.256 16.04 10.256C16.8507 10.256 17.5387 10.3947 18.104 10.672C18.68 10.9387 19.112 11.3067 19.4 11.776C19.6987 12.2347 19.848 12.752 19.848 13.328C19.848 13.9467 19.6827 14.4907 19.352 14.96C19.0213 15.4187 18.568 15.76 17.992 15.984C18.6533 16.1867 19.176 16.544 19.56 17.056C19.9547 17.5573 20.152 18.1653 20.152 18.88C20.152 19.5733 19.9813 20.1813 19.64 20.704C19.2987 21.216 18.8133 21.616 18.184 21.904C17.5653 22.1813 16.8507 22.32 16.04 22.32C15.2293 22.32 14.5147 22.1813 13.896 21.904C13.288 21.616 12.8133 21.216 12.472 20.704C12.1307 20.1813 11.96 19.5733 11.96 18.88C11.96 18.1653 12.152 17.552 12.536 17.04C12.92 16.528 13.4427 16.176 14.104 15.984ZM18.44 13.504C18.44 12.8533 18.2267 12.352 17.8 12C17.3733 11.648 16.7867 11.472 16.04 11.472C15.304 11.472 14.7227 11.648 14.296 12C13.8693 12.352 13.656 12.8587 13.656 13.52C13.656 14.1173 13.8747 14.5973 14.312 14.96C14.76 15.3227 15.336 15.504 16.04 15.504C16.7547 15.504 17.3307 15.3227 17.768 14.96C18.216 14.5867 18.44 14.1013 18.44 13.504ZM16.04 16.624C15.2507 16.624 14.6053 16.8107 14.104 17.184C13.6027 17.5467 13.352 18.096 13.352 18.832C13.352 19.5147 13.592 20.064 14.072 20.48C14.5627 20.896 15.2187 21.104 16.04 21.104C16.8613 21.104 17.512 20.896 17.992 20.48C18.472 20.064 18.712 19.5147 18.712 18.832C18.712 18.1173 18.4667 17.5733 17.976 17.2C17.4853 16.816 16.84 16.624 16.04 16.624Z" fill="#1B2124"/>
</svg>
                                <p>
                                    The Reminder Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                   <div class="show-output content-edit">
                                       <span class="default-text" contenteditable="false">Reminder:</span>
                                        <span class="topic edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">Is NOT A Reflection Of</span>
                                        <span class="affect edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M14.864 18.896C14.9707 19.504 15.216 19.9733 15.6 20.304C15.9947 20.6347 16.5227 20.8 17.184 20.8C18.0693 20.8 18.72 20.4533 19.136 19.76C19.5627 19.0667 19.7653 17.8987 19.744 16.256C19.52 16.736 19.1467 17.1147 18.624 17.392C18.1013 17.6587 17.52 17.792 16.88 17.792C16.1653 17.792 15.5253 17.648 14.96 17.36C14.4053 17.0613 13.968 16.6293 13.648 16.064C13.328 15.4987 13.168 14.816 13.168 14.016C13.168 12.8747 13.4987 11.9573 14.16 11.264C14.8213 10.56 15.76 10.208 16.976 10.208C18.4693 10.208 19.5147 10.6933 20.112 11.664C20.72 12.6347 21.024 14.08 21.024 16C21.024 17.344 20.9013 18.4533 20.656 19.328C20.4213 20.2027 20.016 20.8693 19.44 21.328C18.8747 21.7867 18.096 22.016 17.104 22.016C16.016 22.016 15.168 21.7227 14.56 21.136C13.952 20.5493 13.6053 19.8027 13.52 18.896H14.864ZM17.12 16.56C17.8347 16.56 18.4213 16.3413 18.88 15.904C19.3387 15.456 19.568 14.8533 19.568 14.096C19.568 13.296 19.344 12.6507 18.896 12.16C18.448 11.6693 17.8187 11.424 17.008 11.424C16.2613 11.424 15.664 11.6587 15.216 12.128C14.7787 12.5973 14.56 13.216 14.56 13.984C14.56 14.7627 14.7787 15.3867 15.216 15.856C15.6533 16.3253 16.288 16.56 17.12 16.56Z" fill="#1B2124"/>
</svg>
                                <p>
                                    The Urgency Headline 2
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                   <div class="show-output content-edit">
                                       <span class="default-text" contenteditable="false">Start</span>
                                        <span class="topic edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">NOW!</span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M8.78206 11.76V10.432H11.7901V22H10.3181V11.76H8.78206ZM14.7711 16.096C14.7711 14.2613 15.0697 12.832 15.6671 11.808C16.2644 10.7733 17.3097 10.256 18.8031 10.256C20.2857 10.256 21.3257 10.7733 21.9231 11.808C22.5204 12.832 22.8191 14.2613 22.8191 16.096C22.8191 17.9627 22.5204 19.4133 21.9231 20.448C21.3257 21.4827 20.2857 22 18.8031 22C17.3097 22 16.2644 21.4827 15.6671 20.448C15.0697 19.4133 14.7711 17.9627 14.7711 16.096ZM21.3791 16.096C21.3791 15.168 21.3151 14.384 21.1871 13.744C21.0697 13.0933 20.8191 12.5707 20.4351 12.176C20.0617 11.7813 19.5177 11.584 18.8031 11.584C18.0777 11.584 17.5231 11.7813 17.1391 12.176C16.7657 12.5707 16.5151 13.0933 16.3871 13.744C16.2697 14.384 16.2111 15.168 16.2111 16.096C16.2111 17.056 16.2697 17.8613 16.3871 18.512C16.5151 19.1627 16.7657 19.6853 17.1391 20.08C17.5231 20.4747 18.0777 20.672 18.8031 20.672C19.5177 20.672 20.0617 20.4747 20.4351 20.08C20.8191 19.6853 21.0697 19.1627 21.1871 18.512C21.3151 17.8613 21.3791 17.056 21.3791 16.096Z" fill="#1B2124"/>
</svg>
                                <p>
                                    The Audience Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                   <div class="show-output content-edit">
                                        <span class="audience edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">Are You</span>
                                        <span class="undesirable-outcome edit" contenteditable="true"></span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset class="writer">
                            <legend> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="15.5" stroke="#F5F6F9"/>
<path d="M11.743 11.76V10.432H14.751V22H13.279V11.76H11.743ZM17.348 11.76V10.432H20.356V22H18.884V11.76H17.348Z" fill="#1B2124"/>
</svg>

                                <p>
                                    The Command Headline
                                </p>
                            </legend>
                            <div class="output">
                                <form>
                                   <div class="show-output content-edit">
                                        <span class="desirable-outcome edit" contenteditable="true"></span>
                                        <span class="default-text" contenteditable="false">!</span>
                                    </div>
                                </form>
                                <div class="tool-tip">
                                    <svg class="copy-output" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="18" height="20" fill="#E5E5E5"/>
                                        <g clip-path="url(#clip0)">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        <rect class="fill" opacity="0.05" x="-1337" y="-224" width="1440" height="2205" rx="4" fill="#F5F6F9"/>
                                        <rect class="stroke" x="-1008.5" y="-197.5" width="1089" height="1997" rx="3.5" fill="white" stroke="#EFEFEF"/>
                                        <path class="stroke" d="M-469.5 -20C-469.5 -24.1421 -466.142 -27.5 -462 -27.5H42C46.1422 -27.5 49.5 -24.1421 49.5 -20V40C49.5 44.1421 46.1422 47.5 42 47.5H-462C-466.142 47.5 -469.5 44.1421 -469.5 40V-20Z" stroke="#F5F6F9"/>
                                        <path class="fill" d="M4 4V1C4 0.734784 4.10536 0.48043 4.29289 0.292893C4.48043 0.105357 4.73478 0 5 0H17C17.2652 0 17.5196 0.105357 17.7071 0.292893C17.8946 0.48043 18 0.734784 18 1V15C18 15.2652 17.8946 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16H14V19C14 19.552 13.55 20 12.993 20H1.007C0.875127 20.0008 0.744397 19.9755 0.622322 19.9256C0.500247 19.8757 0.389233 19.8022 0.295659 19.7093C0.202084 19.6164 0.127793 19.5059 0.0770543 19.3841C0.0263156 19.2624 0.000129374 19.1319 0 19L0.00300002 5C0.00300002 4.448 0.453 4 1.01 4H4ZM2.003 6L2 18H12V6H2.003ZM6 4H14V14H16V2H6V4Z" fill="#F5F6F9"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0">
                                        <rect x="-1337" y="-487" width="1440" height="2302" rx="12" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                </div>

                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </main>
@push('script')
<script src="{{asset('js/headline.js')}}"></script>
@endpush
@endsection
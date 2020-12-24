@extends('frontend.layouts.master')
@section('desc')
<div class="page__header__breadcrumb">
    <div class="generate">
        <h2>Page Header</h2>
        <p>Header description goes here</p>
    </div>
    <div class="breadcrumb">
        <span>Home</span> / <span class="active">SalesLetter</span>
    </div>
</div>
@endsection
@section('content')
@push('style')
<link rel="stylesheet" href="{{asset('css/sales-letter.css')}}">
@endpush
<main class="main__content">
          <div class="top-btns">
            <button class="btn-blue" data-micromodal-trigger="modal-1">Export script</button>
            <button class="btn-light-blue">Save</button>
          </div>
          <div class="summary" id="ez-squeeze">
            <h2 class="q2 text-center text-red"><span class="q2"></span> in Just <span class="q4"></span>?            </h2>
            <br>
            <h3 class="text-center">Finally! A Simple <span class="q1"></span> That Will Allow You To <span class="q3"></span>.</h3>
            <h4>In This <span class="q1"></span> You'll Discover:</h4>
            Exactly how to <span class="q2"></span> in the quickest way possible (you've never seen it done this way before).
            <div class="list">

            </div>
            <p>* &nbsp;and much more...</p>
            <br>
            <br>
            <h3 class="text-center"><span class="q11"></span></h3>
            <br>
            <h3 class="text-center">[Optin Form Goes Here]</h3>
            <br>
            <br>
            <br>
            <footer class="text-center">
                Your Company Contact Information, Phone, Email, Help Desk,
                <br>
                Legal Disclaimers, Etc. Go Here
                <br>
                &lt;&lt;End Copy&gt;&gt;
            </footer>


            <!--  -->
          </div>
          <div class="bottom-btns">
            <a class="btn-light-blue" href="ez-squeeze.html">Go Back</a>
          </div>
        </main>
    </section>

    <!-- Modal -->
    <div id="modal-1" aria-hidden="true" class="modal">
      <div tabindex="-1" data-micromodal-close class>
        <div role="dialog" aria-modal="true" aria-labelledby="export-script" class="modal-body">
          <header>
            <h2 id="export-script">
              How do you want your script?
            </h2>
            <button aria-label="Close modal" data-micromodal-close class="close-btn">
              <svg data-micromodal-close width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.2414 6.34311L6.34187 16.2426C5.95135 16.6331 5.95135 17.2663 6.34187 17.6568C6.7324 18.0473 7.36556 18.0473 7.75609 17.6568L17.6556 7.75732C18.0461 7.36679 18.0461 6.73363 17.6556 6.34311C17.2651 5.95258 16.6319 5.95258 16.2414 6.34311Z" fill="black"/>
                <path d="M17.6554 16.2426L7.75593 6.34309C7.36541 5.95257 6.73225 5.95257 6.34172 6.34309C5.9512 6.73362 5.9512 7.36678 6.34172 7.75731L16.2412 17.6568C16.6317 18.0473 17.2649 18.0473 17.6554 17.6568C18.046 17.2663 18.046 16.6331 17.6554 16.2426Z" fill="black"/>
              </svg>
            </button>
          </header>
          <div id="modal-1-content">
            <ul class="export-options">
              <li class="export-option export-docx">
                <div>
                  <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M52 64H12C5.372 64 0 58.628 0 52V12C0 5.372 5.372 0 12 0H52C58.628 0 64 5.372 64 12V52C64 58.628 58.628 64 52 64Z" fill="#FFF9DD"/>
                    <path d="M23 39.3337H22V43.3337H23C23.186 43.3337 23.334 43.1877 23.334 42.9997V39.6657C23.334 39.4797 23.186 39.3337 23 39.3337Z" fill="#FFD200"/>
                    <path d="M29.666 39.3337H29C28.814 39.3337 28.666 39.4797 28.666 39.6677V42.9997C28.666 43.1857 28.812 43.3337 29 43.3337H29.666C29.852 43.3337 30 43.1877 30 42.9997V39.6657C30 39.4797 29.854 39.3337 29.666 39.3337Z" fill="#FFD200"/>
                    <path d="M39 36.6658C32.574 36.6658 27.334 31.4258 27.334 24.9998C27.334 21.3858 28.988 18.1458 31.588 15.9998H19.668C17.64 15.9998 16 17.6398 16 19.6658V44.3318C16 46.3598 17.64 47.9998 19.666 47.9998H39C41.026 47.9998 42.666 46.3598 42.666 44.3338V36.0798C41.52 36.4538 40.28 36.6658 39 36.6658ZM25.334 42.9998C25.334 44.2798 24.28 45.3338 23 45.3338H21C20.454 45.3338 20 44.8798 20 44.3338V38.3338C20 37.7878 20.454 37.3338 21 37.3338H23C24.28 37.3338 25.334 38.3878 25.334 39.6678V42.9998ZM32 42.9998C32 44.2798 30.946 45.3338 29.666 45.3338H29C27.72 45.3338 26.666 44.2798 26.666 42.9998V39.6658C26.666 38.3858 27.72 37.3318 29 37.3318H29.666C30.946 37.3318 32 38.3858 32 39.6658V42.9998ZM35.666 43.3338H37.666C38.218 43.3338 38.666 43.7818 38.666 44.3338C38.666 44.8858 38.218 45.3338 37.666 45.3338H35.666C34.38 45.3338 33.332 44.2878 33.332 42.9998V39.6658C33.332 38.3798 34.378 37.3318 35.666 37.3318H37.666C38.218 37.3318 38.666 37.7798 38.666 38.3318C38.666 38.8838 38.218 39.3318 37.666 39.3318H35.666C35.482 39.3318 35.332 39.4818 35.332 39.6658V42.9998C35.334 43.1838 35.484 43.3338 35.666 43.3338Z" fill="#FFD200"/>
                    <path d="M39 15.9998C34.038 15.9998 30 20.0378 30 24.9998C30 29.9618 34.038 33.9998 39 33.9998C43.962 33.9998 48 29.9618 48 24.9998C48 20.0378 43.962 15.9998 39 15.9998ZM42.666 26.3338H40.332V28.6678C40.332 29.4038 39.734 30.0018 38.998 30.0018C38.262 30.0018 37.664 29.4038 37.664 28.6678V26.3338H35.33C34.598 26.3338 34 25.7358 34 24.9998C34 24.2638 34.598 23.6658 35.334 23.6658H37.668V21.3318C37.668 20.5958 38.266 19.9978 39.002 19.9978C39.738 19.9978 40.336 20.5958 40.336 21.3318V23.6658H42.67C43.406 23.6658 44.004 24.2638 44.004 24.9998C44.004 25.7358 43.402 26.3338 42.666 26.3338Z" fill="#FFE777"/>
                  </svg>
                  <p>Download as docx</p>
                </div>
              </li>
              <li class="export-option export-pdf">
                <div>
                  <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M52 64H12C5.372 64 0 58.628 0 52V12C0 5.372 5.372 0 12 0H52C58.628 0 64 5.372 64 12V52C64 58.628 58.628 64 52 64Z" fill="#FFE6E2"/>
                    <path d="M22.666 39.3337H22V40.6677H22.666C23.04 40.6677 23.332 40.3737 23.332 40.0017C23.334 39.6257 23.04 39.3337 22.666 39.3337Z" fill="#FC573B"/>
                    <path d="M29.666 39.3337H28.666V43.3337H29.666C29.852 43.3337 30 43.1877 30 42.9997V39.6657C30 39.4797 29.854 39.3337 29.666 39.3337Z" fill="#FC573B"/>
                    <path d="M39 36.666C32.574 36.666 27.334 31.426 27.334 25C27.334 21.386 28.988 18.146 31.588 16H19.668C17.64 16 16 17.64 16 19.666V44.332C16 46.36 17.64 48 19.666 48H39C41.026 48 42.666 46.36 42.666 44.334V36.08C41.52 36.454 40.28 36.666 39 36.666ZM22.666 42.666H22V44.332C22 44.878 21.546 45.332 21 45.332C20.454 45.332 20 44.878 20 44.332V38.332C20 37.786 20.454 37.332 21 37.332H22.666C24.132 37.332 25.332 38.532 25.332 39.998C25.334 41.466 24.134 42.666 22.666 42.666ZM32 43C32 44.28 30.946 45.334 29.666 45.334H27.666C27.12 45.334 26.666 44.88 26.666 44.334V38.334C26.666 37.788 27.12 37.334 27.666 37.334H29.666C30.946 37.334 32 38.388 32 39.668V43ZM37.666 40.666C38.218 40.666 38.666 41.114 38.666 41.666C38.666 42.218 38.218 42.666 37.666 42.666H35.332V44.332C35.332 44.884 34.884 45.332 34.332 45.332C33.78 45.332 33.332 44.884 33.332 44.332V39.666C33.332 38.38 34.378 37.332 35.666 37.332H37.666C38.218 37.332 38.666 37.78 38.666 38.332C38.666 38.884 38.218 39.332 37.666 39.332H35.666C35.482 39.332 35.332 39.482 35.332 39.666V40.666H37.666Z" fill="#FC573B"/>
                    <path d="M39 16C34.038 16 30 20.038 30 25C30 29.962 34.038 34 39 34C43.962 34 48 29.962 48 25C48 20.038 43.962 16 39 16ZM42.666 26.334H40.332V28.668C40.332 29.404 39.734 30.002 38.998 30.002C38.262 30.002 37.664 29.404 37.664 28.668V26.334H35.33C34.598 26.334 34 25.736 34 25C34 24.264 34.598 23.666 35.334 23.666H37.668V21.332C37.668 20.596 38.266 19.998 39.002 19.998C39.738 19.998 40.336 20.596 40.336 21.332V23.666H42.67C43.406 23.666 44.004 24.264 44.004 25C44.004 25.736 43.402 26.334 42.666 26.334Z" fill="#FD907E"/>
                  </svg>
                  <p>Download as PDF</p>
                </div>
              </li>
              <li class="export-option export-email">
                <div>
                  <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M51.998 63.9998H11.998C5.37005 63.9998 -0.00195312 58.6278 -0.00195312 51.9998V11.9998C-0.00195312 5.37176 5.37005 -0.000244141 11.998 -0.000244141H51.998C58.626 -0.000244141 63.998 5.37176 63.998 11.9998V51.9998C63.998 58.6278 58.626 63.9998 51.998 63.9998Z" fill="#C6F4FF"/>
                    <path d="M53.6943 17.8772C53.5596 17.7224 53.4038 17.5935 53.2329 17.4929C52.478 16.9436 51.5498 16.6184 50.5469 16.6184H13.4492C12.4468 16.6184 11.519 16.9436 10.7642 17.4924C10.5928 17.593 10.4365 17.7219 10.3013 17.8777C9.42285 18.7122 8.87305 19.8899 8.87305 21.1946V42.8049C8.87305 45.3284 10.9258 47.3811 13.4492 47.3811H50.5469C53.0703 47.3811 55.123 45.3284 55.123 42.8049V21.1946C55.123 19.8899 54.5732 18.7117 53.6943 17.8772ZM46.8027 20.3684L31.998 29.7781L17.1934 20.3684H46.8027ZM50.5469 43.6311H13.4492C12.9937 43.6311 12.623 43.2605 12.623 42.8049V21.907L30.9922 33.5823C31.2993 33.7771 31.6484 33.8748 31.998 33.8748C32.3477 33.8748 32.6968 33.7771 33.0039 33.5823L51.373 21.907V42.8049C51.373 43.2605 51.0024 43.6311 50.5469 43.6311Z" fill="#54DDFE"/>
                  </svg>
                  <p>Send to email</p>
                </div>
              </li>
            </ul>
            <div>
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
    <!-- Scripts -->
    <script src="../../public/header&sidenav.js"></script>
    <script>
         function populateInputs(){
            const inputs = JSON.parse(
                window.sessionStorage.getItem(document.querySelector(".summary").id)
            );

            for (input in inputs){
                [...document.querySelectorAll(`.${input}`)].forEach(placeholder => {
                    if( Array.isArray(inputs[input]) ){
                        inputs[input] = inputs[input].map( ([val1, val2]) =>  "*&nbsp;" + val1 + " which is huge because " +  val2).join("<br>")
                    }
                    placeholder.innerHTML = inputs[input];
                })
            }
        }

        window.onload = populateInputs;
    </script>
<script src="{{mix('js/app.js')}}"></script>
@endpush
@endsection

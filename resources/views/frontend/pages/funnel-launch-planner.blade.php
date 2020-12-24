@extends('frontend.layouts.master')
@section('desc')
<div class="page__header__breadcrumb">
    <div class="generate">
        <h2>60 Day Launch Planner Checklist</h2>
        <p>Header description goes here</p>
    </div>
    <div class="breadcrumb">
        <span>Home</span> / <span class="active">Headline</span>
    </div>
</div>
@endsection
@section('content')
@push('style')
<link rel="stylesheet" href="{{asset('css/sales-letter.css')}}">
@endpush

        <!-- Main Content -->
        <main class="main__content">
            <div class="funnel__launch__planner">
                <!-- Content Goes in here -->
                <div class="funnel__header__top">
                    <div class="title__left">
                        <p class="title">AfiliBox Launch Planner</p>

                        <div class="none options">
                            <ul>
                                <li class="dark">Settings</li>
                                <li class="dark">Pause this plan</li>
                                <li class="red">Delete</li>
                            </ul>
                        </div>
                        <p class="active">Active</p>
                        <img class="toggle__option__menu" src="images/funnel-option.svg" alt="option">
                    </div>

                    <div class="add__new">
                        <button class="normal">
                            <i class="fas fa-plus"></i>
                            Add new funnel plan
                        </button>
                    </div>
                </div>

                <div class="navigation">
                    <ul>
                        <li class="active">ToDo</li>
                        <li>Completed</li>
                    </ul>
                </div>

                <div class="funnel__container todo__funnels">
                    <div class="funnel funnel1">
                        <div class="funnel__top">
                            <div class="left__check custom-checkbox check-all">
                                <input
                                    class="check-all inp-checkboxx"
                                    id='check-all-1'
                                    type="checkbox"

                                />
                                <label class="checkboxx" for="check-all-1">
                                    <span>
                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                    </span>
                                </label>
                            </div>

                            <div class="funnel__top__title">
                                <p>8 Weeks To Launch</p>
                                <p>NAIL YOUR NICHE & VALIDATE YOUR OFFER</p>
                            </div>

                            <div class="funnel__top__date">
                                <p>5 Dec 2020 - 30 Mar 2021</p>
                            </div>

                            <div class="none options">
                                <ul>
                                    <li class="dark">Card settings</li>
                                    <li class="dark">Move all card items</li>
                                    <li class="red">Delete</li>
                                </ul>
                            </div>

                            <img class="toggle__option__menu" src="images/funnel-option.svg" alt="option">
                        </div>

                        <ul class="funnel__body">
                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check1'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check1">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Start with a nailing your niche to help to help you solidify exactly who your offer is for</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check2'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check2">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Get a clear understanding of your genius zone and the problem you can solve</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check3'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check3">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Validate that you have a viable paying audience</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check4'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check4">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Confirm (or pivot/re-package) that you are uniquely positioned to offer your program</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check5'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check5">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Decide on the length and main content of your offer</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="funnel funnel2">
                        <div class="funnel__top">
                            <div class="left__check custom-checkbox check-all">
                                <input
                                    class="check-all inp-checkboxx"
                                    id='check-all-2'
                                    type="checkbox"

                                />
                                <label class="checkboxx" for="check-all-2">
                                    <span>
                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                    </span>
                                </label>
                            </div>

                            <div class="funnel__top__title">
                                <p>7 Weeks To Launch</p>
                                <p>OPTIMISE, NAME & PRICE YOUR OFFER</p>
                            </div>

                            <div class="funnel__top__date">
                                <p>5 Dec 2020 - 30 Mar 2021</p>
                            </div>

                            <div class="none options">
                                <ul>
                                    <li class="dark">Card settings</li>
                                    <li class="dark">Move all card items</li>
                                    <li class="red">Delete</li>
                                </ul>
                            </div>

                            <img class="toggle__option__menu" src="images/funnel-option.svg" alt="option">
                        </div>

                        <ul class="funnel__body">
                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="check-all-nest inp-checkboxx"
                                            id='check-all-nest-1'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check-all-nest-1">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Understand and optimise your offer</p>
                                    </div>
                                </div>

                                <ul class="nested__row__body">
                                    <li class="nested__row">
                                        <div class="normal__row">
                                            <div class="left__check custom-checkbox">
                                                <input
                                                    class="inp-checkboxx"
                                                    id='check6'
                                                    type="checkbox"

                                                />
                                                <label class="checkboxx" for="check6">
                                                    <span>
                                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="funnel__row__text">
                                                <p>understand and optimise your offer</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row">
                                            <div class="left__check custom-checkbox">
                                                <input
                                                    class="inp-checkboxx"
                                                    id='check7'
                                                    type="checkbox"

                                                />
                                                <label class="checkboxx" for="check7">
                                                    <span>
                                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="funnel__row__text">
                                                <p>Shape your story</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row">
                                            <div class="left__check custom-checkbox">
                                                <input
                                                    class="inp-checkboxx"
                                                    id='check8'
                                                    type="checkbox"

                                                />
                                                <label class="checkboxx" for="check8">
                                                    <span>
                                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="funnel__row__text">
                                                <p>Unique positioning</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row">
                                            <div class="left__check custom-checkbox">
                                                <input
                                                    class="inp-checkboxx"
                                                    id='check9'
                                                    type="checkbox"

                                                />
                                                <label class="checkboxx" for="check9">
                                                    <span>
                                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="funnel__row__text">
                                                <p>Main competitors</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row">
                                            <div class="left__check custom-checkbox">
                                                <input
                                                    class="inp-checkboxx"
                                                    id='check10'
                                                    type="checkbox"

                                                />
                                                <label class="checkboxx" for="check10">
                                                    <span>
                                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="funnel__row__text">
                                                <p>Key Objections</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check11'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check11">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Come up with a magnetising name for your offer that demonstrates the promise of what it will deliver</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check12'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check12">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Write a catchy USP for your offer</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check13'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check13">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Price your offer and decide on the payment plans</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check14'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check14">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Purchase the domain for your offer</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="funnel funnel3">
                        <div class="funnel__top">
                            <div class="left__check custom-checkbox check-all">
                                <input
                                    class="check-all inp-checkboxx"
                                    id='check-all-3'
                                    type="checkbox"

                                />
                                <label class="checkboxx" for="check-all-3">
                                    <span>
                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                    </span>
                                </label>
                            </div>

                            <div class="funnel__top__title">
                                <p>6 Weeks To Launch</p>
                                <p>PACKAGE YOUR PRODUCT & SET UP CHECKOUT</p>
                            </div>

                            <div class="funnel__top__date">
                                <p>5 Dec 2020 - 30 Mar 2021</p>
                            </div>

                            <div class="none options">
                                <ul>
                                    <li class="dark">Card settings</li>
                                    <li class="dark">Move all card items</li>
                                    <li class="red">Delete</li>
                                </ul>
                            </div>

                            <img class="toggle__option__menu" src="images/funnel-option.svg" alt="option">
                        </div>

                        <ul class="funnel__body">
                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check15'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check15">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Map out offer content (modules, videos, workbooks, etc.)</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check16'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check16">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Create the first 1-2 modules* of your offer content (unless you are delivering the program LIVE)</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="check-all-nest inp-checkboxx"
                                            id='check-all-nest-2'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check-all-nest-2">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Write post purchase email (this is the email your clients/customers will get after sucessfully purchasing your offer)</p>
                                    </div>
                                </div>

                                <ul class="nested__row__body">
                                    <li class="nested__row">
                                        <div class="normal__row">
                                            <div class="left__check custom-checkbox">
                                                <input
                                                    class="inp-checkboxx"
                                                    id='check17'
                                                    type="checkbox"

                                                />
                                                <label class="checkboxx" for="check17">
                                                    <span>
                                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="funnel__row__text">
                                                <p>Include details on both how the program works, what is included, how your members will receive their content, times of coaching calls etc.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check18'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check18">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Create a post purchase email automation to be triggered by the "customer" tag being added to anyone who purchases</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check19'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check19">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Connect Zapier to ESP to automatically apply the "customer" tag when a purchase is made.</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="check-all-nest inp-checkboxx"
                                            id='check-all-nest-3'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check-all-nest-3">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Confirm that your post purchase process is ready to go (after successful payment is received for your offer)</p>
                                    </div>
                                </div>

                                <ul class="nested__row__body">
                                    <li class="nested__row">
                                        <div class="normal__row">
                                            <div class="left__check custom-checkbox">
                                                <input
                                                    class="inp-checkboxx"
                                                    id='check20'
                                                    type="checkbox"

                                                />
                                                <label class="checkboxx" for="check20">
                                                    <span>
                                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="funnel__row__text">
                                                <p>Your post purchase email autoresponder is triggered after you've received a payment</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row">
                                            <div class="left__check custom-checkbox">
                                                <input
                                                    class="inp-checkboxx"
                                                    id='check21'
                                                    type="checkbox"

                                                />
                                                <label class="checkboxx" for="check21">
                                                    <span>
                                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="funnel__row__text">
                                                <p>Your checkout and ESP are integrated. If they are not, you can use Zapier</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row">
                                            <div class="left__check custom-checkbox">
                                                <input
                                                    class="inp-checkboxx"
                                                    id='check22'
                                                    type="checkbox"

                                                />
                                                <label class="checkboxx" for="check22">
                                                    <span>
                                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="funnel__row__text">
                                                <p>Post purchase receipt is being delivered. (This is likely already setup to automatically trigger after a successful transaction via your payment processor or checkout provider e.g. Teachable, but double check)</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="funnel funnel4">
                        <div class="funnel__top">
                            <div class="left__check custom-checkbox check-all">
                                <input
                                    class="check-all inp-checkboxx"
                                    id='check-all-4'
                                    type="checkbox"

                                />
                                <label class="checkboxx" for="check-all-4">
                                    <span>
                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                    </span>
                                </label>
                            </div>

                            <div class="funnel__top__title">
                                <p>5 Weeks To Launch</p>
                                <p>CREATE YOUR LAUNCH MAGNET</p>
                            </div>

                            <div class="funnel__top__date">
                                <p>5 Dec 2020 - 30 Mar 2021</p>
                            </div>

                            <div class="none options">
                                <ul>
                                    <li class="dark">Card settings</li>
                                    <li class="dark">Move all card items</li>
                                    <li class="red">Delete</li>
                                </ul>
                            </div>

                            <img class="toggle__option__menu" src="images/funnel-option.svg" alt="option">
                        </div>

                        <ul class="funnel__body">
                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check23'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check23">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Decide your launch Magnet</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="check-all-nest inp-checkboxx"
                                            id='check-all-nest-4'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check-all-nest-4">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Create Your Launch Magnet</p>
                                    </div>
                                </div>

                                <ul class="nested__row__body">
                                    <li class="nested__row">
                                        <div class="normal__row">
                                            <div class="left__check custom-checkbox">
                                                <input
                                                    class="inp-checkboxx"
                                                    id='check24'
                                                    type="checkbox"

                                                />
                                                <label class="checkboxx" for="check24">
                                                    <span>
                                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="funnel__row__text">
                                                <p>Create webinar slides</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row">
                                            <div class="left__check custom-checkbox">
                                                <input
                                                    class="inp-checkboxx"
                                                    id='check25'
                                                    type="checkbox"

                                                />
                                                <label class="checkboxx" for="check25">
                                                    <span>
                                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="funnel__row__text">
                                                <p>Record any pre-recorded element</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row">
                                            <div class="left__check custom-checkbox">
                                                <input
                                                    class="inp-checkboxx"
                                                    id='check26'
                                                    type="checkbox"

                                                />
                                                <label class="checkboxx" for="check26">
                                                    <span>
                                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="funnel__row__text">
                                                <p>Create any workbook/handouts that will be offered as an incentive</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row">
                                            <div class="funnel__row__text alone">
                                                <p>Make sure you have set up:</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row">
                                            <div class="left__check custom-checkbox">
                                                <input
                                                    class="inp-checkboxx"
                                                    id='check27'
                                                    type="checkbox"

                                                />
                                                <label class="checkboxx" for="check27">
                                                    <span>
                                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="funnel__row__text">
                                                <p>If you're delivering your offer content (challenge, mini-course) in an online platform (e.g Teachable), your content is recorded, loaded and is ready.</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row">
                                            <div class="left__check custom-checkbox">
                                                <input
                                                    class="inp-checkboxx"
                                                    id='check28'
                                                    type="checkbox"

                                                />
                                                <label class="checkboxx" for="check28">
                                                    <span>
                                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="funnel__row__text">
                                                <p>If you're delivering your offer content (webinar) LIVE, your webinar content is in a presentation and your webinar streaming page and link is set up.</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row">
                                            <div class="left__check custom-checkbox">
                                                <input
                                                    class="inp-checkboxx"
                                                    id='check29'
                                                    type="checkbox"

                                                />
                                                <label class="checkboxx" for="check29">
                                                    <span>
                                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="funnel__row__text">
                                                <p>If you are delivering your offer content (PDF resource, email course) via email, your program content is linked inside your post purchase delivery emails.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="funnel funnel5">
                        <div class="funnel__top">
                            <div class="left__check custom-checkbox check-all">
                                <input
                                    class="check-all inp-checkboxx"
                                    id='check-all-5'
                                    type="checkbox"

                                />
                                <label class="checkboxx" for="check-all-5">
                                    <span>
                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                    </span>
                                </label>
                            </div>

                            <div class="funnel__top__title">
                                <p>4 Weeks To Launch</p>
                                <p>OPT IN + TY PAGES & EMAIL AUTORESPONDER</p>
                            </div>

                            <div class="funnel__top__date">
                                <p>5 Dec 2020 - 30 Mar 2021</p>
                            </div>

                            <div class="none options">
                                <ul>
                                    <li class="dark">Card settings</li>
                                    <li class="dark">Move all card items</li>
                                    <li class="red">Delete</li>
                                </ul>
                            </div>

                            <img class="toggle__option__menu" src="images/funnel-option.svg" alt="option">
                        </div>

                        <ul class="funnel__body">
                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="check-all-nest inp-checkboxx"
                                            id='check-all-nest-5'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check-all-nest-5">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Create Opt in & Thank You pages using the Launch Website or other landing page software</p>
                                    </div>
                                </div>

                                <ul class="nested__row__body">
                                    <li class="nested__row">
                                        <div class="normal__row">
                                            <div class="left__check custom-checkbox">
                                                <input
                                                    class="inp-checkboxx"
                                                    id='check30'
                                                    type="checkbox"

                                                />
                                                <label class="checkboxx" for="check30">
                                                    <span>
                                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="funnel__row__text">
                                                <p>Come up with enticing name and USP for your Webinar/Challenge</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row">
                                            <div class="left__check custom-checkbox">
                                                <input
                                                    class="inp-checkboxx"
                                                    id='check31'
                                                    type="checkbox"

                                                />
                                                <label class="checkboxx" for="check31">
                                                    <span>
                                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="funnel__row__text">
                                                <p>Decide on the 3 takeaways someone will get if they attend attending (HOW, WHAT, WHY)</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row">
                                            <div class="left__check custom-checkbox">
                                                <input
                                                    class="inp-checkboxx"
                                                    id='check32'
                                                    type="checkbox"

                                                />
                                                <label class="checkboxx" for="check32">
                                                    <span>
                                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="funnel__row__text">
                                                <p> Create OPT IN page</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row">
                                            <div class="left__check custom-checkbox">
                                                <input
                                                    class="inp-checkboxx"
                                                    id='check33'
                                                    type="checkbox"

                                                />
                                                <label class="checkboxx" for="check33">
                                                    <span>
                                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="funnel__row__text">
                                                <p>Create THANK YOU page</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="check-all-nest inp-checkboxx"
                                            id='check-all-nest-6'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check-all-nest-6">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Connect your Funnel:</p>
                                    </div>
                                </div>

                                <ul class="nested__row__body">
                                    <li class="nested__row">
                                        <div class="normal__row">
                                            <div class="left__check custom-checkbox">
                                                <input
                                                    class="inp-checkboxx"
                                                    id='check34'
                                                    type="checkbox"

                                                />
                                                <label class="checkboxx" for="check34">
                                                    <span>
                                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="funnel__row__text">
                                                <p>Connect your OPT IN page to your THANK YOU page after a successful opt in</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row">
                                            <div class="left__check custom-checkbox">
                                                <input
                                                    class="inp-checkboxx"
                                                    id='check35'
                                                    type="checkbox"

                                                />
                                                <label class="checkboxx" for="check35">
                                                    <span>
                                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="funnel__row__text">
                                                <p>Write  your welcome email (this is the email your new subscribers/sign ups will get immediately after opting in to your launch magnet)</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row">
                                            <div class="left__check custom-checkbox">
                                                <input
                                                    class="inp-checkboxx"
                                                    id='check36'
                                                    type="checkbox"

                                                />
                                                <label class="checkboxx" for="check36">
                                                    <span>
                                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="funnel__row__text">
                                                <p>Test your funnel making sure the automatic email gets sent</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="funnel funnel6">
                        <div class="funnel__top">
                            <div class="left__check custom-checkbox check-all">
                                <input
                                    class="check-all inp-checkboxx"
                                    id='check-all-6'
                                    type="checkbox"

                                />
                                <label class="checkboxx" for="check-all-6">
                                    <span>
                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                    </span>
                                </label>
                            </div>

                            <div class="funnel__top__title">
                                <p>3 Weeks To Launch</p>
                                <p>LIVE LAUNCH EMAILS AND SOCIAL MEDIA</p>
                            </div>

                            <div class="funnel__top__date">
                                <p>5 Dec 2020 - 30 Mar 2021</p>
                            </div>

                            <div class="none options">
                                <ul>
                                    <li class="dark">Card settings</li>
                                    <li class="dark">Move all card items</li>
                                    <li class="red">Delete</li>
                                </ul>
                            </div>

                            <img class="toggle__option__menu" src="images/funnel-option.svg" alt="option">
                        </div>

                        <ul class="funnel__body">
                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check37'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check37">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Decide on bonuses</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check38'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check38">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Create your Sales Page (part of Launch Website)</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="funnel funnel7">
                        <div class="funnel__top">
                            <div class="left__check custom-checkbox check-all">
                                <input
                                    class="check-all inp-checkboxx"
                                    id='check-all-7'
                                    type="checkbox"

                                />
                                <label class="checkboxx" for="check-all-7">
                                    <span>
                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                    </span>
                                </label>
                            </div>

                            <div class="funnel__top__title">
                                <p>2 Weeks To Launch</p>
                                <p>OPTIMISE, NAME & PRICE YOUR OFFER</p>
                            </div>

                            <div class="funnel__top__date">
                                <p>5 Dec 2020 - 30 Mar 2021</p>
                            </div>

                            <div class="none options">
                                <ul>
                                    <li class="dark">Card settings</li>
                                    <li class="dark">Move all card items</li>
                                    <li class="red">Delete</li>
                                </ul>
                            </div>

                            <img class="toggle__option__menu" src="images/funnel-option.svg" alt="option">
                        </div>

                        <ul class="funnel__body">
                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check39'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check39">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Record & run your pre launch ads for 5 days</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check40'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check40">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Create your custom audience for</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check41'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check41">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Create custom conversations for</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check42'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check42">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Create your lookalike audiences*</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check43'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check43">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Create your launch phase sign up ads - at least 2 of :</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check44'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check44">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Identify your cold audience interests to target</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check45'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check45">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Start running ads to your hot/warm audience for 72 hours testing to see which ad is the winner</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="funnel funnel8">
                        <div class="funnel__top">
                            <div class="left__check custom-checkbox check-all">
                                <input
                                    class="check-all inp-checkboxx"
                                    id='check-all-8'
                                    type="checkbox"

                                />
                                <label class="checkboxx" for="check-all-8">
                                    <span>
                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                    </span>
                                </label>
                            </div>

                            <div class="funnel__top__title">
                                <p>1 Week To Launch</p>
                                <p>LAUNCH BABY LAUNCH!</p>
                            </div>

                            <div class="funnel__top__date">
                                <p>5 Dec 2020 - 30 Mar 2021</p>
                            </div>

                            <div class="none options">
                                <ul>
                                    <li class="dark">Card settings</li>
                                    <li class="dark">Move all card items</li>
                                    <li class="red">Delete</li>
                                </ul>
                            </div>

                            <img class="toggle__option__menu" src="images/funnel-option.svg" alt="option">
                        </div>

                        <ul class="funnel__body">
                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check46'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check46">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Continue scaling up the winning ad as per the ad strategy schedule outlined in my FB Launch Magic software*</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check47'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check47">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Optimise Personal and Business FB profiles</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check48'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check48">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Create Pop up FB group if you are having one to facilitate your challenge/webinar</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check49'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check49">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Create and schedule daily challenge posts</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check50'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check50">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Write your sales emails (this is the email sequence you will send to your email list after launch event to buy/book call)</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check51'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check51">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Schedule Emails in ESP</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="funnel funnel9">
                        <div class="funnel__top">
                            <div class="left__check custom-checkbox check-all">
                                <input
                                    class="check-all inp-checkboxx"
                                    id='check-all-9'
                                    type="checkbox"

                                />
                                <label class="checkboxx" for="check-all-9">
                                    <span>
                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                    </span>
                                </label>
                            </div>

                            <div class="funnel__top__title">
                                <p>Launch Period</p>
                                <p>1-2 WEEKS</p>
                            </div>

                            <div class="funnel__top__date">
                                <p>5 Dec 2020 - 30 Mar 2021</p>
                            </div>

                            <div class="none options">
                                <ul>
                                    <li class="dark">Card settings</li>
                                    <li class="dark">Move all card items</li>
                                    <li class="red">Delete</li>
                                </ul>
                            </div>

                            <img class="toggle__option__menu" src="images/funnel-option.svg" alt="option">
                        </div>

                        <ul class="funnel__body">
                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check52'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check52">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Host your LAUNCH EVENT (Webinar/Challenge etc.)</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check53'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check53">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Start sending live launch emails</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check54'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check54">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Create urgency and scarcity with fast action bonuses, enrollment closing and price increasing</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check55'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check55">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Customer support for new members (look out for questions in your inbox and on social)</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check56'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check56">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Open private facebook group (*if this is something you are including with this offer)</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="funnel funnel10">
                        <div class="funnel__top">
                            <div class="left__check custom-checkbox check-all">
                                <input
                                    class="check-all inp-checkboxx"
                                    id='check-all-10'
                                    type="checkbox"

                                />
                                <label class="checkboxx" for="check-all-10">
                                    <span>
                                    <svg width="12px" height="10px" viewBox="0 0 12 10">
                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                    </span>
                                </label>
                            </div>

                            <div class="funnel__top__title">
                                <p>POST LAUNCH</p>
                            </div>

                            <div class="funnel__top__date">
                                <p>5 Dec 2020 - 30 Mar 2021</p>
                            </div>

                            <div class="none options">
                                <ul>
                                    <li class="dark">Card settings</li>
                                    <li class="dark">Move all card items</li>
                                    <li class="red">Delete</li>
                                </ul>
                            </div>

                            <img class="toggle__option__menu" src="images/funnel-option.svg" alt="option">
                        </div>

                        <ul class="funnel__body">
                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check57'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check57">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Virtual dance party (celebrate...you did it)</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check58'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check58">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Focus on delivering the most amazing offer possible</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row">
                                    <div class="left__check custom-checkbox">
                                        <input
                                            class="inp-checkboxx"
                                            id='check59'
                                            type="checkbox"

                                        />
                                        <label class="checkboxx" for="check59">
                                            <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="funnel__row__text">
                                        <p>Do a Post Launch Breakdown:</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="funnel__container  completed__funnels none">
                    <div class="funnel funnel1">
                        <div class="funnel__top">
                            <div class="funnel__top__title">
                                <p>8 Weeks To Launch</p>
                                <p>NAIL YOUR NICHE & VALIDATE YOUR OFFER</p>
                            </div>

                            <div class="funnel__top__date">
                                <p>5 Dec 2020 - 30 Mar 2021</p>
                            </div>

                            <div class="none options">
                                <ul>
                                    <li class="dark">Card settings</li>
                                    <li class="dark">Move all card items</li>
                                    <li class="red">Delete</li>
                                </ul>
                            </div>

                            <img class="toggle__option__menu" src="images/funnel-option.svg" alt="option">
                        </div>

                        <ul class="funnel__body">
                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Start with a nailing your niche to help to help you solidify exactly who your offer is for</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Get a clear understanding of your genius zone and the problem you can solve</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Validate that you have a viable paying audience</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Confirm (or pivot/re-package) that you are uniquely positioned to offer your program</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Decide on the length and main content of your offer</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="funnel funnel2">
                        <div class="funnel__top">
                            <div class="funnel__top__title">
                                <p>7 Weeks To Launch</p>
                                <p>OPTIMISE, NAME & PRICE YOUR OFFER</p>
                            </div>

                            <div class="funnel__top__date">
                                <p>5 Dec 2020 - 30 Mar 2021</p>
                            </div>

                            <div class="none options">
                                <ul>
                                    <li class="dark">Card settings</li>
                                    <li class="dark">Move all card items</li>
                                    <li class="red">Delete</li>
                                </ul>
                            </div>

                            <img class="toggle__option__menu" src="images/funnel-option.svg" alt="option">
                        </div>

                        <ul class="funnel__body">
                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Understand and optimise your offer</p>
                                    </div>
                                </div>

                                <ul class="nested__row__body">
                                    <li class="nested__row">
                                        <div class="normal__row none">
                                            <div class="funnel__row__text">
                                                <p>understand and optimise your offer</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row none">
                                            <div class="funnel__row__text">
                                                <p>Shape your story</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row none">
                                            <div class="funnel__row__text">
                                                <p>Unique positioning</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row none">
                                            <div class="funnel__row__text">
                                                <p>Main competitors</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row none">
                                            <div class="funnel__row__text">
                                                <p>Key Objections</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Come up with a magnetising name for your offer that demonstrates the promise of what it will deliver</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Write a catchy USP for your offer</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Price your offer and decide on the payment plans</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Purchase the domain for your offer</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="funnel funnel3">
                        <div class="funnel__top">
                            <div class="funnel__top__title">
                                <p>6 Weeks To Launch</p>
                                <p>PACKAGE YOUR PRODUCT & SET UP CHECKOUT</p>
                            </div>

                            <div class="funnel__top__date">
                                <p>5 Dec 2020 - 30 Mar 2021</p>
                            </div>

                            <div class="none options">
                                <ul>
                                    <li class="dark">Card settings</li>
                                    <li class="dark">Move all card items</li>
                                    <li class="red">Delete</li>
                                </ul>
                            </div>

                            <img class="toggle__option__menu" src="images/funnel-option.svg" alt="option">
                        </div>

                        <ul class="funnel__body">
                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Map out offer content (modules, videos, workbooks, etc.)</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Create the first 1-2 modules* of your offer content (unless you are delivering the program LIVE)</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Write post purchase email (this is the email your clients/customers will get after sucessfully purchasing your offer)</p>
                                    </div>
                                </div>

                                <ul class="nested__row__body">
                                    <li class="nested__row">
                                        <div class="normal__row none">
                                            <div class="funnel__row__text">
                                                <p>Include details on both how the program works, what is included, how your members will receive their content, times of coaching calls etc.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Create a post purchase email automation to be triggered by the "customer" tag being added to anyone who purchases</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Connect Zapier to ESP to automatically apply the "customer" tag when a purchase is made.</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Confirm that your post purchase process is ready to go (after successful payment is received for your offer)</p>
                                    </div>
                                </div>

                                <ul class="nested__row__body">
                                    <li class="nested__row">
                                        <div class="normal__row none">
                                            <div class="funnel__row__text">
                                                <p>Your post purchase email autoresponder is triggered after you've received a payment</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row none">
                                            <div class="funnel__row__text">
                                                <p>Your checkout and ESP are integrated. If they are not, you can use Zapier</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row none">
                                            <div class="funnel__row__text">
                                                <p>Post purchase receipt is being delivered. (This is likely already setup to automatically trigger after a successful transaction via your payment processor or checkout provider e.g. Teachable, but double check)</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="funnel funnel4">
                        <div class="funnel__top">
                            <div class="funnel__top__title">
                                <p>5 Weeks To Launch</p>
                                <p>CREATE YOUR LAUNCH MAGNET</p>
                            </div>

                            <div class="funnel__top__date">
                                <p>5 Dec 2020 - 30 Mar 2021</p>
                            </div>

                            <div class="none options">
                                <ul>
                                    <li class="dark">Card settings</li>
                                    <li class="dark">Move all card items</li>
                                    <li class="red">Delete</li>
                                </ul>
                            </div>

                            <img class="toggle__option__menu" src="images/funnel-option.svg" alt="option">
                        </div>

                        <ul class="funnel__body">
                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Decide your launch Magnet</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Create Your Launch Magnet</p>
                                    </div>
                                </div>

                                <ul class="nested__row__body">
                                    <li class="nested__row">
                                        <div class="normal__row none">
                                            <div class="funnel__row__text">
                                                <p>Create webinar slides</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row none">
                                            <div class="funnel__row__text">
                                                <p>Record any pre-recorded element</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row none">
                                            <div class="funnel__row__text">
                                                <p>Create any workbook/handouts that will be offered as an incentive</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row none">
                                            <div class="funnel__row__text alone">
                                                <p>Make sure you have set up:</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row none">
                                            <div class="funnel__row__text">
                                                <p>If you're delivering your offer content (challenge, mini-course) in an online platform (e.g Teachable), your content is recorded, loaded and is ready.</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row none">
                                            <div class="funnel__row__text">
                                                <p>If you're delivering your offer content (webinar) LIVE, your webinar content is in a presentation and your webinar streaming page and link is set up.</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row none">
                                            <div class="funnel__row__text">
                                                <p>If you are delivering your offer content (PDF resource, email course) via email, your program content is linked inside your post purchase delivery emails.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="funnel funnel5">
                        <div class="funnel__top">
                            <div class="funnel__top__title">
                                <p>4 Weeks To Launch</p>
                                <p>OPT IN + TY PAGES & EMAIL AUTORESPONDER</p>
                            </div>

                            <div class="funnel__top__date">
                                <p>5 Dec 2020 - 30 Mar 2021</p>
                            </div>

                            <div class="none options">
                                <ul>
                                    <li class="dark">Card settings</li>
                                    <li class="dark">Move all card items</li>
                                    <li class="red">Delete</li>
                                </ul>
                            </div>

                            <img class="toggle__option__menu" src="images/funnel-option.svg" alt="option">
                        </div>

                        <ul class="funnel__body">
                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Create Opt in & Thank You pages using the Launch Website or other landing page software</p>
                                    </div>
                                </div>

                                <ul class="nested__row__body">
                                    <li class="nested__row">
                                        <div class="normal__row none">
                                            <div class="funnel__row__text">
                                                <p>Come up with enticing name and USP for your Webinar/Challenge</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row none">
                                            <div class="funnel__row__text">
                                                <p>Decide on the 3 takeaways someone will get if they attend attending (HOW, WHAT, WHY)</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row none">
                                            <div class="funnel__row__text">
                                                <p> Create OPT IN page</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row none">
                                            <div class="funnel__row__text">
                                                <p>Create THANK YOU page</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Connect your Funnel:</p>
                                    </div>
                                </div>

                                <ul class="nested__row__body">
                                    <li class="nested__row">
                                        <div class="normal__row none">
                                            <div class="funnel__row__text">
                                                <p>Connect your OPT IN page to your THANK YOU page after a successful opt in</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row none">
                                            <div class="funnel__row__text">
                                                <p>Write  your welcome email (this is the email your new subscribers/sign ups will get immediately after opting in to your launch magnet)</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nested__row">
                                        <div class="normal__row none">
                                            <div class="funnel__row__text">
                                                <p>Test your funnel making sure the automatic email gets sent</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="funnel funnel6">
                        <div class="funnel__top">
                            <div class="funnel__top__title">
                                <p>3 Weeks To Launch</p>
                                <p>LIVE LAUNCH EMAILS AND SOCIAL MEDIA</p>
                            </div>

                            <div class="funnel__top__date">
                                <p>5 Dec 2020 - 30 Mar 2021</p>
                            </div>

                            <div class="none options">
                                <ul>
                                    <li class="dark">Card settings</li>
                                    <li class="dark">Move all card items</li>
                                    <li class="red">Delete</li>
                                </ul>
                            </div>

                            <img class="toggle__option__menu" src="images/funnel-option.svg" alt="option">
                        </div>

                        <ul class="funnel__body">
                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Decide on bonuses</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Create your Sales Page (part of Launch Website)</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="funnel funnel7">
                        <div class="funnel__top">
                            <div class="funnel__top__title">
                                <p>2 Weeks To Launch</p>
                                <p>OPTIMISE, NAME & PRICE YOUR OFFER</p>
                            </div>

                            <div class="funnel__top__date">
                                <p>5 Dec 2020 - 30 Mar 2021</p>
                            </div>

                            <div class="none options">
                                <ul>
                                    <li class="dark">Card settings</li>
                                    <li class="dark">Move all card items</li>
                                    <li class="red">Delete</li>
                                </ul>
                            </div>

                            <img class="toggle__option__menu" src="images/funnel-option.svg" alt="option">
                        </div>

                        <ul class="funnel__body">
                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Record & run your pre launch ads for 5 days</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Create your custom audience for</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Create custom conversations for</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Create your lookalike audiences*</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Create your launch phase sign up ads - at least 2 of :</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Identify your cold audience interests to target</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Start running ads to your hot/warm audience for 72 hours testing to see which ad is the winner</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="funnel funnel8">
                        <div class="funnel__top">
                            <div class="funnel__top__title">
                                <p>1 Week To Launch</p>
                                <p>LAUNCH BABY LAUNCH!</p>
                            </div>

                            <div class="funnel__top__date">
                                <p>5 Dec 2020 - 30 Mar 2021</p>
                            </div>

                            <div class="none options">
                                <ul>
                                    <li class="dark">Card settings</li>
                                    <li class="dark">Move all card items</li>
                                    <li class="red">Delete</li>
                                </ul>
                            </div>

                            <img class="toggle__option__menu" src="images/funnel-option.svg" alt="option">
                        </div>

                        <ul class="funnel__body">
                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Continue scaling up the winning ad as per the ad strategy schedule outlined in my FB Launch Magic software*</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Optimise Personal and Business FB profiles</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Create Pop up FB group if you are having one to facilitate your challenge/webinar</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Create and schedule daily challenge posts</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Write your sales emails (this is the email sequence you will send to your email list after launch event to buy/book call)</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Schedule Emails in ESP</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="funnel funnel9">
                        <div class="funnel__top">
                            <div class="funnel__top__title">
                                <p>Launch Period</p>
                                <p>1-2 WEEKS</p>
                            </div>

                            <div class="funnel__top__date">
                                <p>5 Dec 2020 - 30 Mar 2021</p>
                            </div>

                            <div class="none options">
                                <ul>
                                    <li class="dark">Card settings</li>
                                    <li class="dark">Move all card items</li>
                                    <li class="red">Delete</li>
                                </ul>
                            </div>

                            <img class="toggle__option__menu" src="images/funnel-option.svg" alt="option">
                        </div>

                        <ul class="funnel__body">
                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Host your LAUNCH EVENT (Webinar/Challenge etc.)</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Start sending live launch emails</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Create urgency and scarcity with fast action bonuses, enrollment closing and price increasing</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Customer support for new members (look out for questions in your inbox and on social)</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Open private facebook group (*if this is something you are including with this offer)</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="funnel funnel10">
                        <div class="funnel__top">
                            <div class="funnel__top__title">
                                <p>POST LAUNCH</p>
                            </div>

                            <div class="funnel__top__date">
                                <p>5 Dec 2020 - 30 Mar 2021</p>
                            </div>

                            <div class="none options">
                                <ul>
                                    <li class="dark">Card settings</li>
                                    <li class="dark">Move all card items</li>
                                    <li class="red">Delete</li>
                                </ul>
                            </div>

                            <img class="toggle__option__menu" src="images/funnel-option.svg" alt="option">
                        </div>

                        <ul class="funnel__body">
                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Virtual dance party (celebrate...you did it)</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Focus on delivering the most amazing offer possible</p>
                                    </div>
                                </div>
                            </li>

                            <li class="funnel__row">
                                <div class="normal__row none">
                                    <div class="funnel__row__text">
                                        <p>Do a Post Launch Breakdown:</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
        @push('script')
<script src="{{mix('js/app.js')}}"></script>
@endpush
@endsection

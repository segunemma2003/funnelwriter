@extends('frontend.layouts.master')
@section('content')
@push('style')
<link rel="stylesheet" href="{{asset('css/sales-letter.css')}}">
@endpush

        <!-- Main Content -->
        <main class="main__content">
            <div class="settings">
                <!-- Content Goes in here -->
                <div class="settings__links">
                    <ul>
                        <li class="active" onclick="goToSettings('account')">
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.60473 9.78139C9.8284 9.78139 11.6312 7.59177 11.6312 4.89072C11.6312 2.18962 11.0393 0 7.60473 0C4.17013 0 3.57812 2.18962 3.57812 4.89072C3.57812 7.59177 5.38094 9.78139 7.60473 9.78139Z" fill="#C4C4C4"/>
                                <path d="M15.2109 17.3776C15.2131 17.3325 15.2117 17.0648 15.2109 17.3776V17.3776Z" fill="#C4C4C4"/>
                                <path d="M15.2017 17.051C15.1271 12.3457 14.5126 11.0049 9.81007 10.1562C9.81007 10.1562 9.14812 10.9997 7.60526 10.9997C6.06239 10.9997 5.40033 10.1562 5.40033 10.1562C0.749148 10.9957 0.0972578 12.3166 0.0115429 16.8981C0.0045143 17.2723 0.00125715 17.2919 0 17.2485C0.000285716 17.3299 0.000628449 17.4804 0.000628449 17.7428C0.000628449 17.7428 1.12018 19.9998 7.60526 19.9998C14.0902 19.9998 15.2099 17.7428 15.2099 17.7428C15.2099 17.5742 15.21 17.4569 15.2102 17.3772C15.2089 17.404 15.2064 17.352 15.2017 17.051Z" fill="#C4C4C4"/>
                            </svg>                                
                            <p>Account</p>
                        </li>
                        <li onclick="goToSettings('notifications')">
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 20C9.1 20 10 19.1 10 18H6C6 18.5304 6.21071 19.0391 6.58579 19.4142C6.96086 19.7893 7.46957 20 8 20ZM14 14V9C14 5.93 12.36 3.36 9.5 2.68V2C9.5 1.17 8.83 0.5 8 0.5C7.17 0.5 6.5 1.17 6.5 2V2.68C3.63 3.36 2 5.92 2 9V14L0 16V17H16V16L14 14Z" fill="#C4C4C4"/>
                            </svg>                                
                            <p>Notifications</p>
                        </li>
                        <li class="upgrade">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 14.3636V7.09091M13.6364 10L10 6.36364L6.36364 10M10 18C14.4182 18 18 14.4182 18 10C18 5.58182 14.4182 2 10 2C5.58182 2 2 5.58182 2 10C2 14.4182 5.58182 18 10 18Z" stroke="#C4C4C4" stroke-width="2.5"/>
                            </svg>                                
                            <p>Upgrade</p>
                        </li>
                        <li>
                            <svg width="15" height="20" viewBox="0 0 15 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 6.25C9.31125 6.25 8.75 5.68875 8.75 5V0H1.25C0.56125 0 0 0.56125 0 1.25V18.75C0 19.44 0.56125 20 1.25 20H13.75C14.44 20 15 19.44 15 18.75V6.25H10ZM4.375 3.8275V3.125C4.375 2.78 4.655 2.5 5 2.5C5.345 2.5 5.625 2.78 5.625 3.125V3.82875C6.01625 3.9175 6.38125 4.0825 6.6825 4.3275C6.95125 4.545 6.99125 4.93875 6.7725 5.20625C6.55375 5.475 6.16 5.51375 5.89375 5.29625C5.6575 5.105 5.34 5 5 5C4.3225 5 3.75 5.42875 3.75 5.9375C3.75 6.44625 4.3225 6.875 5 6.875C6.37875 6.875 7.5 7.85625 7.5 9.0625C7.5 10.0787 6.7 10.9275 5.625 11.1725V11.875C5.625 12.22 5.345 12.5 5 12.5C4.655 12.5 4.375 12.22 4.375 11.875V11.1713C3.98375 11.0825 3.61875 10.9175 3.3175 10.6725C3.04875 10.4538 3.00875 10.06 3.2275 9.7925C3.44625 9.5225 3.83875 9.485 4.10625 9.7025C4.3425 9.895 4.66 10 5 10C5.6775 10 6.25 9.57125 6.25 9.0625C6.25 8.55375 5.6775 8.125 5 8.125C3.62125 8.125 2.5 7.14375 2.5 5.9375C2.5 4.92125 3.3 4.0725 4.375 3.8275ZM11.875 17.5H3.125C2.78 17.5 2.5 17.22 2.5 16.875C2.5 16.53 2.78 16.25 3.125 16.25H11.875C12.22 16.25 12.5 16.53 12.5 16.875C12.5 17.22 12.22 17.5 11.875 17.5ZM11.875 15H3.125C2.78 15 2.5 14.72 2.5 14.375C2.5 14.03 2.78 13.75 3.125 13.75H11.875C12.22 13.75 12.5 14.03 12.5 14.375C12.5 14.72 12.22 15 11.875 15ZM11.875 12.5H9.375C9.03 12.5 8.75 12.22 8.75 11.875C8.75 11.53 9.03 11.25 9.375 11.25H11.875C12.22 11.25 12.5 11.53 12.5 11.875C12.5 12.22 12.22 12.5 11.875 12.5ZM11.875 10H9.375C9.03 10 8.75 9.72 8.75 9.375C8.75 9.03 9.03 8.75 9.375 8.75H11.875C12.22 8.75 12.5 9.02875 12.5 9.375C12.5 9.72 12.22 10 11.875 10Z" fill="#C4C4C4"/>
                            </svg>                                
                            <p>Account Billing</p>
                        </li>
                    </ul>
                </div>

                <div class="settings__pages">
                    <div class="settings__page account">
                        <p class="title">General Info</p>
                        <div class="profile__photo">
                            <img src="images/profile-image.svg" alt="profile">
                            <button class="normal upload">Upload new picture</button>
                            <button class="inverse delete">Delete</button>
                        </div>
                        <form>
                            <div class="inputs">
                                <div class="firstname">
                                    <label for="firstname">First Name</label>
                                    <input type="text" name="firstname" id="firstname" placeholder="John">
                                </div>

                                <div class="lastname">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" name="lastname" id="lastname" placeholder="Doe">
                                </div>

                                <div class="email">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" placeholder="johndoe@gmail.com">
                                </div>

                                <div class="username">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" id="username" placeholder="JohnnyD">
                                </div>

                                <div class="location">
                                    <label for="location">Location</label>
                                    <input type="text" name="location" id="location" placeholder="Lagos">
                                </div>
                            </div>

                            <button class="normal save">Save</button>
                        </form>
                    </div>

                    <div class="settings__page none notifications">
                        <div class="title__top">
                            <p>Notifications</p>
                            <div class="DND">
                                <p>Do not disturb</p>
                                <div class="custom--checkbox">
                                    <input
                                      type="checkbox"
                                      id="toggle"
                                      class="checked"
                                    />
                                    <label for="toggle" class="toggle">
                                      <span></span>
                                    </label>
                                  </div>
                            </div>
                        </div>
                        <div class="notification unread">
                            <div class="dot"></div>
                            <div class="notification__details">
                                <p>Your profile settings is incomplete</p>
                                <p class="ago">29m ago</p>
                            </div>
                        </div>

                        <div class="notification unread">
                            <div class="dot"></div>
                            <div class="notification__details">
                                <p>Your profile settings is incomplete</p>
                                <p class="ago">29m ago</p>
                            </div>
                        </div>

                        <div class="notification">
                            <div class="dot"></div>
                            <div class="notification__details">
                                <p>Your profile settings is incomplete</p>
                                <p class="ago">29m ago</p>
                            </div>
                        </div>

                        <div class="notification">
                            <div class="dot"></div>
                            <div class="notification__details">
                                <p>Your profile settings is incomplete</p>
                                <p class="ago">29m ago</p>
                            </div>
                        </div>

                        <div class="notification">
                            <div class="dot"></div>
                            <div class="notification__details">
                                <p>Your profile settings is incomplete</p>
                                <p class="ago">29m ago</p>
                            </div>
                        </div>

                        <div class="notification">
                            <div class="dot"></div>
                            <div class="notification__details">
                                <p>Your profile settings is incomplete</p>
                                <p class="ago">29m ago</p>
                            </div>
                        </div>

                        <div class="mark__all__read">
                            <p>Mark all as read</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @push('script')
    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
<script src="{{asset('js/offer-generator.js')}}"></script>
@endpush
@endsection
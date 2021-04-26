@extends('frontend.layouts.master')
@section('content')
@push('style')
<link rel="stylesheet" href="{{asset('css/Settings.css')}}">
@endpush


<main class="main__content">
    <div class="settings">
        <div class="settings__pages">
            <div class="settings__page account">
                <p class="title">General Info</p>

                <form method="post">
                    @csrf
                    <div class="inputs">
                        <div class="firstname">
                            <label for="firstname">Title: </label>
                            <input type="text" name="name" id="name"  value="{{ old('name') }}" required >
                            @error('name')
                                {{ $message }}
                            @enderror


                        </div>
                        <div class="firstname">
                            <label for="desc">Description: </label>
                            <textarea type="text" name="desc" id="name"  value="{{ old('desc') }}" rows="10" cols="10"></textarea>
                            @error('desc')
                                {{ $message }}
                            @enderror


                        </div>

                        {{-- <div class="lastname">
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
                        </div> --}}
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
<script src="{{asset('js/Settings.js')}}"></script>
@endpush
@endsection


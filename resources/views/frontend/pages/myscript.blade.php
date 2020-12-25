@extends('frontend.layouts.master')
@section('content')
@push('style')
<link rel="stylesheet" href="{{asset('css/myscript.css')}}">
@endpush

        <!-- Main Content -->
        <main class="main__content">
            <div class="my__projects">
                <!-- Content Goes in here -->
                <div class="my__projects__header">
                    <h2 class="title">My Projects</h2>
                </div>

                <div class="projects__container">
                    <div class="project">
                        <img class="menu" src="images/options.svg" alt="menu-options">
                        <div class="none options">
                            <ul>
                                <li class="dark">Archive</li>
                                <li class="dark">Mark as important</li>
                                <li class="red">Delete</li>
                            </ul>
                        </div>
                        <div class="top">
                            <img src="images/folder_orange.svg" alt="folder-orange">
                            <p class="items__created orange">12 items created</p>
                        </div>
                        <a href="{{route('affiliateboxlaunch')}}" class="project__title text-blue">AfiliateBox Launch</a>
                        <p class="project__description text-light-blue">Preparing to sale the project</p>
                    </div>

                    <div class="project">
                        <img class="menu" src="images/options.svg" alt="menu-options">
                        <div class="none options">
                            <ul>
                                <li class="dark">Archive</li>
                                <li class="dark">Mark as important</li>
                                <li class="red">Delete</li>
                            </ul>
                        </div>
                        <div class="top">
                            <img src="images/folder_blue.svg" alt="folder-orange">
                            <p class="items__created blue">4 items created</p>
                        </div>
                        <a href="{{route('affiliateboxagency')}}" class="project__title text-blue">AfiliateBox agency</a>
                        <p class="project__description text-light-blue">Writing copy for client</p>
                    </div>

                    <div class="project">
                        <img class="menu" src="images/options.svg" alt="menu-options">
                        <div class="none options">
                            <ul>
                                <li class="dark">Archive</li>
                                <li class="dark">Mark as important</li>
                                <li class="red">Delete</li>
                            </ul>
                        </div>
                        <div class="top">
                            <img src="images/folder_blue.svg" alt="folder-orange">
                            <p class="items__created blue">4 items created</p>
                        </div>
                        <a href="{{route('affiliateboxagency')}}" class="project__title text-blue">AfiliateBox agency</a>
                        <p class="project__description text-light-blue">Writing copy for client</p>
                    </div>

                    <div class="project">
                        <img class="menu" src="images/options.svg" alt="menu-options">
                        <div class="none options">
                            <ul>
                                <li class="dark">Archive</li>
                                <li class="dark">Mark as important</li>
                                <li class="red">Delete</li>
                            </ul>
                        </div>
                        <div class="top">
                            <img src="images/folder_orange.svg" alt="folder-orange">
                            <p class="items__created orange">12 items created</p>
                        </div>
                        <a href="{{route('affiliateboxlaunch')}}" class="project__title text-blue">AfiliateBox Launch</a>
                        <p class="project__description text-light-blue">Preparing to sale the project</p>
                    </div>

                    <div class="project">
                        <img class="menu" src="images/options.svg" alt="menu-options">
                        <div class="none options">
                            <ul>
                                <li class="dark">Archive</li>
                                <li class="dark">Mark as important</li>
                                <li class="red">Delete</li>
                            </ul>
                        </div>
                        <div class="top">
                            <img src="images/folder_blue.svg" alt="folder-orange">
                            <p class="items__created blue">4 items created</p>
                        </div>
                        <a href="{{route('affiliateboxagency')}}" class="project__title text-blue">AfiliateBox agency</a>
                        <p class="project__description text-light-blue">Writing copy for client</p>
                    </div>

                    <div class="project">
                        <img class="menu" src="images/options.svg" alt="menu-options">
                        <div class="none options">
                            <ul>
                                <li class="dark">Archive</li>
                                <li class="dark">Mark as important</li>
                                <li class="red">Delete</li>
                            </ul>
                        </div>
                        <div class="top">
                            <img src="images/folder_blue.svg" alt="folder-orange">
                            <p class="items__created blue">4 items created</p>
                        </div>
                        <a href="{{route('affiliateboxagency')}}" class="project__title text-blue">AfiliateBox agency</a>
                        <p class="project__description text-light-blue">Writing copy for client</p>
                    </div>
                </div>
            </div>
        </main>
        @push('script')
<script src="{{mix('js/app.js')}}"></script>
<script src="{{asset('js/myscript.js')}}"></script>
@endpush
@endsection

@extends('frontend.layouts.master')
@section('desc')
<div class="page__header__breadcrumb">
    <div class="generate">
        <h2>Tutorial videos</h2>
        <p>Header description goes here</p>
    </div>
    <div class="breadcrumb">
        <span>Home</span> / <span class="active">Training</span>
    </div>
</div>
@endsection
@section('content')
@push('style')
<link rel="stylesheet" href="{{asset('training.css')}}">
@endpush

<main class="main__content">
            <div class="training">
                <!-- Content Goes in here -->
                <div class="training__header">
                    <div class="title">
                        <p>All tutorials</p>
                    </div>
                </div>

                <div class="selected__tutorial__section">
                    <div class="selected__tutorial__img__top">
                        <img src="images/tutorial-banner.jpg" alt="tutorial-poster">
                        <img class='play' src="images/play.svg" alt="play">
                    </div>

                    <div class="selected__tut__ctas">
                        <div class="img">
                            <img src="images/like-blue.svg" alt="like">
                            <p>Favorite</p>
                        </div>
                        <div class="img">
                            <img src="images/share-blue.svg" alt="share">
                            <p>Share</p>
                        </div>
                        <div class="img">
                            <img src="images/download-blue.svg" alt="download">
                            <p>download</p>
                        </div>
                    </div>

                    <div class="about__course">
                        <div class="title">
                            <p>About this course</p>
                        </div>

                        <div class="description">
                            <p>
                                In this course you would learn to mix traditional media with
                                digital mastery and apply some custom-made textures to a vector
                                illustration imported into Adobe Photoshop.
                            </p>
                        </div>
                    </div>

                    <a class='see__more' href="#">See More</a>
                </div>

                <div class="similar__tutorials">
                    <div class="title">
                        <p>Similar Tutorials</p>
                    </div>

                    <div class="tutorial__container">

                        <div class="tutorial__card">
                            <div class="tutorial__card__img__top">
                                <img src="images/tutorial1.jpg" alt="tutorial-poster">
                                <img class='play' src="images/play.svg" alt="play">
                            </div>
                            <div class="tutorial__card__content">
                                <a href='#' class="content__title">Introduction to funnelwriting</a>
                                <p class="content__description">Learn how to create funnels</p>
                                <div class="ctas">
                                    <div class="options">
                                        <div class="img">
                                            <img src="images/like.svg" alt="like">
                                        </div>
                                        <div class="img">
                                            <img src="images/download.svg" alt="download">
                                        </div>
                                        <div class="img">
                                            <img src="images/share.svg" alt="share">
                                        </div>
                                    </div>
                                    <p class="video__length">
                                        ~12 mins
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tutorial__card">
                            <div class="tutorial__card__img__top">
                                <img src="images/tutorial2.jpg" alt="tutorial-poster">
                                <img class='play' src="images/play.svg" alt="play">
                            </div>
                            <div class="tutorial__card__content">
                                <a href='#' class="content__title">Introduction to funnelwriting</a>
                                <p class="content__description">Learn how to create funnels</p>
                                <div class="ctas">
                                    <div class="options">
                                        <div class="img">
                                            <img src="images/like.svg" alt="like">
                                        </div>
                                        <div class="img">
                                            <img src="images/download.svg" alt="download">
                                        </div>
                                        <div class="img">
                                            <img src="images/share.svg" alt="share">
                                        </div>
                                    </div>
                                    <p class="video__length">
                                        ~12 mins
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tutorial__card">
                            <div class="tutorial__card__img__top">
                                <img src="images/tutorial3.jpg" alt="tutorial-poster">
                                <img class='play' src="images/play.svg" alt="play">
                            </div>
                            <div class="tutorial__card__content">
                                <a href='#' class="content__title">Introduction to funnelwriting</a>
                                <p class="content__description">Learn how to create funnels</p>
                                <div class="ctas">
                                    <div class="options">
                                        <div class="img">
                                            <img src="images/like.svg" alt="like">
                                        </div>
                                        <div class="img">
                                            <img src="images/download.svg" alt="download">
                                        </div>
                                        <div class="img">
                                            <img src="images/share.svg" alt="share">
                                        </div>
                                    </div>
                                    <p class="video__length">
                                        ~12 mins
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @push('script')
        <script src="{{asset('js/training.js')}}"></script>
@endpush
@endsection

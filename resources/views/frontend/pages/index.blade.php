@extends('frontend.layouts.master')
@section('title','Dashboard')
@section('dashboard')
<div class="page__header__breadcrumb">
    <div class="generate">
        <h2>Welcome, Jethro</h2>
        <p>Header description goes here</p>
    </div>
    <div class="create__new__project">
        <button>
            <i class="fas fa-plus"></i>
            Create a new project
        </button>
    </div>
</div>
@endsection
@section('content')
@push('style')
@endpush
<main class="main__content">
            <div class="dashboard">
                <!-- Content Goes in here -->
                <div class="stats">
                    <div class="project__scripts__number">
                        <div class="projects">
                            <div class="projects__stats">
                                <p class="value">3</p>
                                <p>No of projects</p>
                            </div>
                            <div class="projects__image">
                                <img class="first" src="images/blue_bg.svg" alt="blue-bg">
                                <img src="images/folder_1.svg" alt="folder">
                            </div>
                        </div>
                        <div class="scripts__stats">
                            <p class="value">23</p>
                            <p>No of scripts created</p>
                        </div>
                    </div>
                    <div class="monthly__stats">
                        <div class="monthly__stats__header">
                           <p class="title">Monthly Statistics</p>
                            <img class="monthly__stats__header__image" src="images/monthly_stats.svg" alt="bar-chart">
                        </div>
                        <div class="chart">
                            <img src="images/Chart.svg" alt="chart">
                        </div>
                        <div class="months">
                            <p>Aug</p>
                            <p>Sep</p>
                            <p>Oct</p>
                            <p class="active">Nov</p>
                            <p>Dec</p>
                        </div>
                    </div>
                    <div class="funnels__number">
                        <div class="funnels__active">
                            <div class="funnels__active__stats">
                                <p class="value">3</p>
                                <p>Active funnel plans</p>
                            </div>
                            <img class="funnels__active__image" src="images/folder_white.svg" alt="document-list">
                        </div>
                        <div class="funnels__completed">
                            <p class="value">1</p>
                            <p>Completed funnels</p>
                        </div>
                    </div>
                </div>

                <div class="recent__projects">
                    <div class="recent__projects__header">
                        <h2 class="title">Recent Projects</h2>
                        <div class="see_more">
                            <p>See more</p>
                            <img src="images/see-more.svg" alt="arrow-left">
                        </div>
                    </div>

                    <div class="projects__container">
                        <div class="project">
                            <div class="top">
                                <img src="images/folder_orange.svg" alt="folder-orange">
                                <p class="items__created orange">12 items created</p>
                            </div>
                            <p class="project__title text-blue">AfiliateBox Launch</p>
                            <p class="project__description text-light-blue">Preparing to sale the project</p>
                        </div>

                        <div class="project">
                            <div class="top">
                                <img src="images/folder_blue.svg" alt="folder-orange">
                                <p class="items__created blue">4 items created</p>
                            </div>
                            <p class="project__title text-blue">AfiliateBox agency</p>
                            <p class="project__description text-light-blue">Writing copy for client</p>
                        </div>

                        <div class="project">
                            <div class="top">
                                <img src="images/folder_blue.svg" alt="folder-orange">
                                <p class="items__created blue">4 items created</p>
                            </div>
                            <p class="project__title text-blue">AfiliateBox agency</p>
                            <p class="project__description text-light-blue">Writing copy for client</p>
                        </div>
                    </div>
                </div>

                <div class="newly__created__copies">
                    <div class="newly__created__copies__header">
                        <h2 class="title">Newly Created Copies & Scripts</h2>
                        <div class="see_more">
                            <p>See more</p>
                            <img src="images/see-more.svg" alt="arrow-left">
                        </div>
                    </div>

                    <div class="created__copies__container">
                        <div class="created__copy">
                            <p class="copy__title text-blue">Long form sales letter</p>
                            <div class="middle">
                                <img src="images/folder_blue.svg" alt="folder-blue">
                                <p class="copy__description text-light-blue">AfiliateBox Launch</p>
                            </div>
                            <div class="created__at">
                                <span class="date">6 Dec 2020 </span><span class="time text-light-blue">at 04:30pm</span>
                            </div>
                        </div>

                        <div class="created__copy">
                            <p class="copy__title text-blue">Long form sales letter</p>
                            <div class="middle">
                                <img src="images/folder_blue.svg" alt="folder-blue">
                                <p class="copy__description text-light-blue">AfiliateBox Launch</p>
                            </div>
                            <div class="created__at">
                                <span class="date">6 Dec 2020 </span><span class="time text-light-blue">at 04:30pm</span>
                            </div>
                        </div>

                        <div class="created__copy">
                            <p class="copy__title text-blue">Long form sales letter</p>
                            <div class="middle">
                                <img src="images/folder_blue.svg" alt="folder-blue">
                                <p class="copy__description text-light-blue">AfiliateBox Launch</p>
                            </div>
                            <div class="created__at">
                                <span class="date">6 Dec 2020 </span><span class="time text-light-blue">at 04:30pm</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@push('script')
@endpush
@endsection

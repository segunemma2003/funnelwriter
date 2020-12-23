@extends('frontend.layouts.master')
@section('content')
@push('style')
<link rel="stylesheet" href="{{asset('myscript.css')}}">
@endpush

        <!-- Main Content -->
        <main class="main__content abl">
            <div class="afiliate__box__launch">
                <!-- Content Goes in here -->
                <table>
                    <thead>
                        <tr>
                            <th>
                                <div class="custom-checkbox check-all">
                                    <input
                                        class="inp-checkboxx"
                                        id='check-all'
                                        type="checkbox"
                                        onclick='click'
                                    />
                                    <label class="checkboxx" for="check-all">
                                        <span>
                                        <svg width="10px" height="8px" viewBox="0 0 12 10">
                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                        </svg>
                                        </span>
                                    </label>
                                </div>
                            </th>
                            <th>
                                <div class="flex">
                                    <p>Scripts</p>
                                    <img src="images/arrow-colored.svg" alt="arrow-up-down">
                                </div>
                            </th>
                            <th>
                                <div class="flex">
                                    <p>Size</p>
                                    <img src="images/arrow-plain.svg" alt="arrow-plain">
                                </div>
                            </th>
                            <th>
                                <div class="flex">
                                    <p>Date</p>
                                    <img src="images/arrow-plain.svg" alt="arrow-plain">
                                </div>
                            </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="check__container">
                                <div class="custom-checkbox">
                                    <input
                                        class="inp-checkboxx"
                                        id='check1'
                                        type="checkbox"
                                        style='display: "none"'
                                        onclick='click'
                                    />
                                    <label class="checkboxx" for="check1">
                                        <span>
                                        <svg width="12px" height="10px" viewBox="0 0 12 10">
                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                        </svg>
                                        </span>
                                    </label>
                                </div>
                            </td>
                            <td>Short form sales letter</td>
                            <td>0.2mb</td>
                            <td>21 Mar 19:30 EEST</td>
                            <td>
                                <img class='options-img' src="images/options.svg" alt="options-menu">
                                <div class="none options">
                                    <ul>
                                        <li class="dark">Download as PDF</li>
                                        <li class="dark">Download as .doc</li>
                                        <li class="dark">Send to email</li>
                                        <li class="red">Delete</li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="custom-checkbox">
                                    <input
                                        class="inp-checkboxx"
                                        id='check2'
                                        type="checkbox"
                                        style='display: "none"'
                                        onclick='click'
                                    />
                                    <label class="checkboxx" for="check2">
                                        <span>
                                        <svg width="12px" height="10px" viewBox="0 0 12 10">
                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                        </svg>
                                        </span>
                                    </label>
                                </div>
                            </td>
                            <td>Short form sales letter</td>
                            <td>0.2mb</td>
                            <td>21 Mar 19:30 EEST</td>
                            <td>
                                <img class='options-img' src="images/options.svg" alt="options-menu">
                                <div class="none options">
                                    <ul>
                                        <li class="dark">Download as PDF</li>
                                        <li class="dark">Download as .doc</li>
                                        <li class="dark">Send to email</li>
                                        <li class="red">Delete</li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="custom-checkbox">
                                    <input
                                        class="inp-checkboxx"
                                        id='check3'
                                        type="checkbox"
                                        style='display: "none"'
                                        onclick='click'
                                    />
                                    <label class="checkboxx" for="check3">
                                        <span>
                                        <svg width="12px" height="10px" viewBox="0 0 12 10">
                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                        </svg>
                                        </span>
                                    </label>
                                </div>
                            </td>
                            <td>Short form sales letter</td>
                            <td>0.2mb</td>
                            <td>21 Mar 19:30 EEST</td>
                            <td>
                                <img class='options-img' src="images/options.svg" alt="options-menu">
                                <div class="none options">
                                    <ul>
                                        <li class="dark">Download as PDF</li>
                                        <li class="dark">Download as .doc</li>
                                        <li class="dark">Send to email</li>
                                        <li class="red">Delete</li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="custom-checkbox">
                                    <input
                                        class="inp-checkboxx"
                                        id='check4'
                                        type="checkbox"
                                        style='display: "none"'
                                        onclick='click'
                                    />
                                    <label class="checkboxx" for="check4">
                                        <span>
                                        <svg width="12px" height="10px" viewBox="0 0 12 10">
                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                        </svg>
                                        </span>
                                    </label>
                                </div>
                            </td>
                            <td>Short form sales letter</td>
                            <td>0.2mb</td>
                            <td>21 Mar 19:30 EEST</td>
                            <td>
                                <img class='options-img' src="images/options.svg" alt="options-menu">
                                <div class="none options">
                                    <ul>
                                        <li class="dark">Download as PDF</li>
                                        <li class="dark">Download as .doc</li>
                                        <li class="dark">Send to email</li>
                                        <li class="red">Delete</li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
        @push('script')
        <script src="{{asset('myscript.js')}}"></script>

@endpush
@endsection
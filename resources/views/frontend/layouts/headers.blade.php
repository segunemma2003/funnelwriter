<header>
        <nav class="top__nav" id="top__nav">
            <ul>
                <li>
                    <a href="#" class="logo">
                        <img src="{{asset('publics/images/logo.svg')}}" alt="logo">
                    </a>
                </li>
                <li class="middle">
                    <div class="search">
                        <img src="{{asset('publics/images/Search.svg')}}" alt="search">
                        <form>
                            <input type="search" id="search" placeholder="Find your scripts & copies" autocomplete="">
                        </form>
                    </div>
                    <a href="#">Upgrade your account</a>
                </li>
                <li class="notifications__profile">
                    <a href="#">
                        <img src="{{asset('publics/images/notifications.svg')}}" alt="notifications">
                    </a>
                    <a href="#">
                        <div class="profile">
                            <img src="{{asset('publics/images/profile.svg')}}" alt="profile">
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </a>
                </li>
            </ul>
            @yield('desc')
        </nav>
        @yield('dashboard')
    </header>

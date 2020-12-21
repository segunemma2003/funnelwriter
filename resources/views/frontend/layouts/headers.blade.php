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
        </nav>
        <div class="page__header__breadcrumb">
            <div class="generate">
                <h2>Welcome, {{auth()->user()->name}}</h2>
                <p>Header description goes here</p>
            </div>
            <div class="create__new__project">
                <button>
                    <i class="fas fa-plus"></i>
                    Create a new project
                </button>
            </div>
        </div>
    </header>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SignIn Page CSS -->
    <link rel="stylesheet" href="{{asset('css/signin.css')}}">

    <title>SignIn Funnel Writer</title>
</head>
<body>
    <header>
        <nav>
            <img src="{{asset('images/logo.svg')}}" alt="funnel-logo">
        </nav>
    </header>

    <main>
        <div class="signin__form">
            <h2>Welcome back!</h2>
            <p>Sign in to start creating your scripts & copies.</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="email">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Johndoe@gamil.com" @error('email') is-invalid @enderror value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="password">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" @error('password') is-invalid @enderror required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <a href="{{ route('password.request') }}">Forgot Password?</a>
                </div>

                <button class="normal__login">Login</button>
            </form>
        </div>
    </main>

    <script src=""></script>
</body>
</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/png" href="/img/logo toko.png" sizes="300x300" />
    <title>@yield('title', 'Lektro Shop')</title>
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home.index') }}">
                <img src="{{ asset('/img/logo toko.png') }}" alt="Logo" class="logo" style="max-height: 70px;">
                Lektro Shop
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto justify-content-center">
                    <a class="nav-link active me-3" href="{{ route('home.index') }}">Home</a>
                    <a class="nav-link active me-3" href="{{ route('product.index') }}">Products</a>
                    <a class="nav-link active me-3" href="{{ route('cart.index') }}">Cart</a>
                    <a class="nav-link active me-3" href="{{ route('home.about') }}">About</a>
                </div>
                <div class="navbar-nav ms-auto">
                    @guest
                        <a class="nav-link active me-3 btn btn-primary" href="{{ route('login') }}">Login</a>
                        <a class="nav-link active btn btn-success" href="{{ route('register') }}">Register</a>
                    @else
                        <a class="nav-link active me-3" href="{{ route('myaccount.orders') }}">My Orders</a>
                        <form id="logout" action="{{ route('logout') }}" method="POST">
                            <a role="button" class="nav-link active btn btn-dark"
                                onclick="document.getElementById('logout').submit();">Logout</a>
                            @csrf
                        </form>
                    @endguest
                </div>
            </div>
        </div>
    </nav>
    <!-- header -->

    <header class="masthead bg-primary text-white text-center py-4">
        <div class="container d-flex align-items-center flex-column">
            <h2>@yield('subtitle', 'Lektro Shop')</h2>
        </div>
    </header>

    <div class="container my-4">
        @yield('content')
    </div>

    <!-- footer -->
    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>
                Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
                    href="https://twitter.com/danielgarax">
                    Rangga
                </a> - <b>Prabaswara</b>
            </small>
        </div>
    </div>
    <!-- footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
</body>

</html>

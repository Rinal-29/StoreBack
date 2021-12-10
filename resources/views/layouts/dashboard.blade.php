<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    {{-- Style --}}
    @stack('prepand-style')
    @include('includes.style')
    @stack('addon-style')
</head>

<body>
    <div class="page-dashboard">
        <div class="d-flex" id="wrapper" data-aos="fade-right">
            <!-- Sidebar -->
            {{-- Sidebar --}}
            <div class="border-right" id="sidebar-wrapper">
                <div class="sidebar-heading text-center">
                    <img src="/images/dashboard-store-logo.svg" alt="dashboar logo" class="my-4">
                </div>
                <div class="list-group list-group-flush">
                    <a href=" {{ route('dashboard') }} " class="list-group-item list-group-item-action">Dashboard</a>
                    <a href="{{ route('dashboard-product') }}" class="list-group-item list-group-item-action">My Product</a>
                    <a href="{{ route('dashboard-transaction') }}" class="list-group-item list-group-item-action">Transactions</a>
                    <a href="{{ route('dashboard-setting-store') }}" class="list-group-item list-group-item-action">Store Setting</a>
                    <a href="{{ route('dashboard-setting-account') }}" class="list-group-item list-group-item-action">My Account</a>
                    <a href="{{ route('home') }}" class="list-group-item list-group-item-action">Sign Out</a>
                </div>
            </div>

            <!-- page content -->
            <div id="page-content-wrapper">

                <!-- Top Navbar -->
                <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-store" data-aos="fade-down">
                    <div class="container-fluid">
                        <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
                            &laquo; Menu
                        </button>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                            <span class="navbar-toggler-icon">
                            </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav d-none d-lg-flex ml-auto">
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                                        <img src="/images/icon-user.png" alt="image url" class="rounded-circle mr-2 profile-picture">
                                        Hi, Rinal
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="/dashboard.html" class="dropdown-item">Dashboard</a>
                                        <a href="/dashboard-account.html" class="dropdown-item">Settings</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="/" class="dropdown-item">Logout</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link d-inline-block mt-2">
                                        <img src="/images/icon-cart-filled.svg" alt="icon cart">
                                        <div class="card-badge">3</div>
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav d-block d-lg-none">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Hi, Rinal
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link d-inline-block">
                                        Cart
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                {{-- Content --}}
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    @stack('prepand-script')
    <script src="/vendor/jquery/jquery.slim.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        $('#menu-toggle').click(function(e) {
            $('#wrapper').toggleClass("toggled");
        });
    </script>
    @stack('addon-script')
</body>

</html>
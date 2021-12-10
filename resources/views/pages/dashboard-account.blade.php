@extends('layouts.dashboard')

@section('title')
Store dashboard account
@endsection

@section('content')
<!-- page content -->
<div id="page-content-wrapper">
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

    <!-- Section Content -->
    <div class="section-content section-dashboard-name" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">
                    My Account
                </h2>
                <p class="dashboard-subtitle">
                    Update your current profile
                </p>
            </div>
            <div class="dashbooard-content">
                <div class="row">
                    <div class="col-12">
                        <form action="">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Your Name</label>
                                                <input type="text" class="form-control" id="name" name="name" value="Renal">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Your Email</label>
                                                <input type="email" class="form-control" id="email" name="email" value="test@gmail.com">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="addressOne">Address 1</label>
                                                <input type="text" class="form-control" id="addressOne" name="addressOne" value="Setra Duta Cemara">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="addressTwo">Address 2</label>
                                                <input type="text" class="form-control" id="addressTwo" name="addressTwo" value="BTP BLOK AD No.306">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="province">Province</label>
                                            <select name="province" id="province" class="form-control">
                                                <option value="South Sulawesi">Sulawesi Selatan</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="city">City</label>
                                            <select name="city" id="city" class="form-control">
                                                <option value="Makassar">Makassar</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="postalCode">Postal Code</label>
                                            <input type="text" class="form-control" id="postalCode" name="postalCode" value="90243">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="country">Country</label>
                                                <input type="text" class="form-control" id="country" name="country" value="Indonesia">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone">Phone</label>
                                                <input type="number" class="form-control" id="phone" name="phone" value="086126216">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-right">
                                            <button type="submit" class="btn btn-success px-5">
                                                Save Now
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
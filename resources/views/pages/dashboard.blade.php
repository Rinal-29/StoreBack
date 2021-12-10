@extends('layouts.dashboard')

@section('title')
Store Dashboard
@endsection

@section('content')
<!-- Section Content -->
<div class="section-content section-dashboard-name" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">
                Dashboard
            </h2>
            <p class="dashboard-subtitle">
                Look what you have made today!
            </p>
        </div>
        <div class="dashbooard-content">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">
                                Costumer
                            </div>
                            <div class="dashboard-card-subtitle">
                                15,209
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">
                                Revenue
                            </div>
                            <div class="dashboard-card-subtitle">
                                $931,290
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">
                                Transaction
                            </div>
                            <div class="dashboard-card-subtitle">
                                22,409,399
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12 mt-2">
                    <h5 class="mb-3">Recent Transaction</h5>
                    <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="/images/dashboard-icon-product-1.png" alt="icon-product">
                                </div>
                                <div class="col-md-4">
                                    Shirup Marzan
                                </div>
                                <div class="col-md-3">
                                    Rinal Hakim
                                </div>
                                <div class="col-md-3">
                                    9 Desember 2021
                                </div>
                                <div class="col-md-1 d-none d-md-block">
                                    <img src="/images/dashboard-arrow-right.svg" alt="arrow">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="/images/dashboard-icon-product-2.png" alt="icon-product">
                                </div>
                                <div class="col-md-4">
                                    LeBrone X
                                </div>
                                <div class="col-md-3">
                                    Masyoshi
                                </div>
                                <div class="col-md-3">
                                    10 Desember 2021
                                </div>
                                <div class="col-md-1 d-none d-md-block">
                                    <img src="/images/dashboard-arrow-right.svg" alt="arrow">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="/images/dashboard-icon-product-3.png" alt="icon-product">
                                </div>
                                <div class="col-md-4">
                                    Soffa Lembutte
                                </div>
                                <div class="col-md-3">
                                    Shaynas
                                </div>
                                <div class="col-md-3">
                                    12 Desember 2021
                                </div>
                                <div class="col-md-1 d-none d-md-block">
                                    <img src="/images/dashboard-arrow-right.svg" alt="arrow">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
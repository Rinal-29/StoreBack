@extends('layouts.success')

@section('title')
Store Success Page
@endsection

@section('content')
<div class="page-content page-success">
    <div class="section-success" data-aos="zoom-in">
        <div class="container">
            <div class="row align-items-center row-login justify-content-center">
                <div class="col-lg-6 text-center">
                    <img src="/images/success.svg" alt="success image" class="mb-4">
                    <h2>Transaction Processed!</h2>
                    <p>please wait email confoguration from us and we are confirm this payment directly!</p>
                    <div>
                        <a href="/dashboard.html" class="btn btn-success mt-4 w-50"> My Dashboard</a>
                        <a href="/index.html" class="btn btn-signup mt-4 w-50">Go To Shop</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
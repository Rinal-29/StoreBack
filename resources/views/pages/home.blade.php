@extends('layouts.app')

@section('title')
Store Home Page
@endsection

@section('content')
<div class="page-content page-home">
    <section class="store carousel" data-aos="zoom-in">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="storeCarousel" class="carousel" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#storeCarousel" data-slide-to="0">
                            </li>
                            <li data-target="#storeCarousel" data-slide-to="1">
                            </li>
                            <li data-target="#storeCarousel" data-slide-to="2">
                            </li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/images/banner.jpg" alt="banner image" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/banner.jpg" alt="banner image" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/banner.jpg" alt="banner image" class="d-block w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="store-trend-categories">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up">
                    <h5>Trend Categories</h5>
                    <div class="row">
                        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
                            <a class="component-categories d-block" href="">
                                <div class="categories-image">
                                    <img src="/images/categories-gadgets.svg" alt="categori 1" class="w-100">
                                    <p class="categories-text">
                                        Gadgets
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
                            <a class="component-categories d-block" href="">
                                <div class="categories-image">
                                    <img src="/images/categories-furniture.svg" alt="categori 2" class="w-100">
                                    <p class="categories-text">
                                        Furniture
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
                            <a class="component-categories d-block" href="">
                                <div class="categories-image">
                                    <img src="/images/categories-makeup.svg" alt="categori 3" class="w-100">
                                    <p class="categories-text">
                                        Make Up
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
                            <a class="component-categories d-block" href="">
                                <div class="categories-image">
                                    <img src="/images/categories-sneaker.svg" alt="categori 4" class="w-100">
                                    <p class="categories-text">
                                        Sneaker
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500">
                            <a class="component-categories d-block" href="">
                                <div class="categories-image">
                                    <img src="/images/categories-tools.svg" alt="categori 5" class="w-100">
                                    <p class="categories-text">
                                        Tools
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
                            <a class="component-categories d-block" href="">
                                <div class="categories-image">
                                    <img src="/images/categories-baby.svg" alt="categori 6" class="w-100">
                                    <p class="categories-text">
                                        Baby
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="store-new-product">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up">
                    <h5>New Products</h5>
                    <div class="row">
                        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                            <a href="/details.html" class="component-products d-block">
                                <div class="product-thumbnail">
                                    <div class="product-image" style="background-image: url('/images/products-apple-watch.jpg');">
                                    </div>
                                </div>
                                <div class="product-text">
                                    Apple Watch 4
                                </div>
                                <div class="product-price">
                                    $990
                                </div>
                            </a>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                            <a href="/details.html" class="component-products d-block">
                                <div class="product-thumbnail">
                                    <div class="product-image" style="background-image: url('/images/products-orange-bogotta.jpg');">
                                    </div>
                                </div>
                                <div class="product-text">
                                    Orange Bogotta
                                </div>
                                <div class="product-price">
                                    $94.509
                                </div>
                            </a>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                            <a href="/details.html" class="component-products d-block">
                                <div class="product-thumbnail">
                                    <div class="product-image" style="background-image: url('/images/products-sofa-ternyaman.jpg');">
                                    </div>
                                </div>
                                <div class="product-text">
                                    Sofa Ternyaman
                                </div>
                                <div class="product-price">
                                    $1.409
                                </div>
                            </a>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                            <a href="/details.html" class="component-products d-block">
                                <div class="product-thumbnail">
                                    <div class="product-image" style="background-image: url('/images/products-bubuk-maketti.jpg');">
                                    </div>
                                </div>
                                <div class="product-text">
                                    Bubuk Maketti
                                </div>
                                <div class="product-price">
                                    $225
                                </div>
                            </a>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                            <a href="/details.html" class="component-products d-block">
                                <div class="product-thumbnail">
                                    <div class="product-image" style="background-image: url('/images/products-tatakan-gelas.jpg');">
                                    </div>
                                </div>
                                <div class="product-text">
                                    Tatakan Gelas
                                </div>
                                <div class="product-price">
                                    $45.188
                                </div>
                            </a>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                            <a href="/details.html" class="component-products d-block">
                                <div class="product-thumbnail">
                                    <div class="product-image" style="background-image: url('/images/products-mavic-kawe.jpg');">
                                    </div>
                                </div>
                                <div class="product-text">
                                    Mavic kave
                                </div>
                                <div class="product-price">
                                    $503
                                </div>
                            </a>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
                            <a href="/details.html" class="component-products d-block">
                                <div class="product-thumbnail">
                                    <div class="product-image" style="background-image: url('/images/products-black-edition-nike.jpg');">
                                    </div>
                                </div>
                                <div class="product-text">
                                    Black Edition Nike
                                </div>
                                <div class="product-price">
                                    $70.482
                                </div>
                            </a>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800">
                            <a href="/details.html" class="component-products d-block">
                                <div class="product-thumbnail">
                                    <div class="product-image" style="background-image: url('/images/products-monkey-toys.jpg');">
                                    </div>
                                </div>
                                <div class="product-text">
                                    Monkey Toys
                                </div>
                                <div class="product-price">
                                    $783
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@extends('layouts.app')

@section('title')
Store Cart Page
@endsection

@section('content')
<!-- Page Content -->
<div class="page-content page-cart">
    <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">
                                Cart
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="store-cart">
        <div class="container">

            <!-- table -->
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-12 table-responsive">
                    <table class="table table-borderless table-cart">
                        <thead>
                            <tr>
                                <td>Image</td>
                                <td>Name &amp; Seller</td>
                                <td>Price</td>
                                <td>Menu</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width: 20%;"><img src="/images/product-cart-1.jpg" alt="" class="cart-image w-100"></td>
                                <td style="width: 30%;">
                                    <div class="product-title">Sofa Ternyaman</div>
                                    <div class="product-subtitle">by Afrinal Hakim</div>
                                </td>
                                <td style="width: 30%;">
                                    <div class=" product-title">$29,122
                                    </div>
                                    <div class="product-subtitle">USD</div>
                                </td>
                                <td style="width: 20%;">
                                    <a href="#" class="btn btn-remove-cart">Remove</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 20%;"><img src="/images/product-cart-2.jpg" alt="" class="cart-image w-100"></td>
                                <td style="width: 30%;">
                                    <div class="product-title">Sneakers</div>
                                    <div class="product-subtitle">by Afrinal Hakim</div>
                                </td>
                                <td style="width: 30%;">
                                    <div class=" product-title">$80,309
                                    </div>
                                    <div class="product-subtitle">USD</div>
                                </td>
                                <td style="width: 20%;">
                                    <a href="#" class="btn btn-remove-cart">Remove</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 20%;"><img src="/images/product-cart-3.jpg" alt="" class="cart-image w-100"></td>
                                <td style="width: 30%;">
                                    <div class="product-title">Coffe Holder</div>
                                    <div class="product-subtitle">by Afrinal Hakim</div>
                                </td>
                                <td style="width: 30%;">
                                    <div class=" product-title">$13,492
                                    </div>
                                    <div class="product-subtitle">USD</div>
                                </td>
                                <td style="width: 20%;">
                                    <a href="#" class="btn btn-remove-cart">Remove</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Shipping Details -->
            <div class="row" data-aos="fade-up" data-aos-delay="150">
                <div class="col-12">
                    <hr>
                </div>
                <div class="col-12 mb-4">
                    <h2>Shipping Details</h2>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="200">
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
            <div class="row mb-3" data-aos="fade-up" data-aos-delay="250">
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
            <div class="row" data-aos="fade-up" data-aos-delay="300">
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

            <!-- Payment Information -->
            <div class="row" data-aos="fade-up" data-aos-delay="450">
                <div class="col-12">
                    <hr>
                </div>
                <div class="col-12 mb-2">
                    <h2>Payment Information</h2>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="500">
                <div class="col-4 col-md-2">
                    <div class="product-title">
                        $10
                    </div>
                    <div class="product-subtitle">
                        Country Tax
                    </div>
                </div>
                <div class="col-4 col-md-3">
                    <div class="product-title">
                        $200
                    </div>
                    <div class="product-subtitle">
                        Product Insurance
                    </div>
                </div>
                <div class="col-4 col-md-2">
                    <div class="product-title">
                        $580
                    </div>
                    <div class="product-subtitle">
                        Ship Jakarta
                    </div>
                </div>
                <div class="col-4 col-md-2">
                    <div class="product-title text-success">
                        $382,409
                    </div>
                    <div class="product-subtitle">
                        Total
                    </div>
                </div>
                <div class="col-8 col-md-3">
                    <a href="/success.html" class="btn btn-success mt-3 px-4 btn-block">
                        Check Out Now
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
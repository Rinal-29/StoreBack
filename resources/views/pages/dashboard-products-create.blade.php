@extends('layouts.dashboard')

@section('title')
Store Dashboard - My Product
@endsection

@section('content')
<!-- Section Content -->
<div class="section-content section-dashboard-name" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">
                Create Product
            </h2>
            <p class="dashboard-subtitle">
                Create your product here
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
                                            <label for="product-name">Product Name</label>
                                            <input type="product-name" name="product-name" id="product-name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input type="number" name="price" id="price" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="category">Kategori</label>
                                            <select name="category" class="form-control">
                                                <option value="" disabled>Select Category</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="editor">Description</label>
                                            <textarea name="editor" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="thumbnails">Thumbnails</label>
                                            <input type="file" name="thumbnails" id="thumbnails" class="form-control">
                                            <p class="text-muted">
                                                kamu dapat memilih lebih dari satu file
                                            </p>
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
@endsection
@extends('layouts.dashboard')

@section('title')
Store dashboard settings
@endsection

@section('content')
<!-- Section Content -->
<div class="section-content section-dashboard-name" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">
                Store Settings
            </h2>
            <p class="dashboard-subtitle">
                Make store that profitable
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
                                            <label for="storeName">Store Name</label>
                                            <input type="storeName" name="storeName" id="storeName" class="form-control" v-model="storeName">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="category">Kategori</label>
                                            <select name="category" class="form-control">
                                                <option value="" disabled>Select Category</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <label>Store</label>
                                        <p class="text-muted">
                                            Apakah anda ingin membuka toko ?
                                        </p>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="openStoreTrue" name="is_store_open" value="true">
                                            <label for="openStoreTrue" class="custom-control-label">Open</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="openStoreFalse" name="is_store_open" value="false">
                                            <label for="openStoreFalse" class="custom-control-label">Close</label>
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
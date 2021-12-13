@extends('layouts.dashboard')

@section('title')
Store Dashboard - Transactions Details
@endsection

@section('content')
<!-- Section Content -->
<div class="section-content section-dashboard-name" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">
                #STORE0839
            </h2>
            <p class="dashboard-subtitle">
                Transaction / Details
            </p>
        </div>
        <div class="dashboard-content" id="transactionDetails">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <img src="/images/product-details-dashboard.png" alt="detail dashboard" class="w-100 mb-3">
                                </div>
                                <div class="col-12 col-md-8">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="product-title">Costumer Name</div>
                                            <div class="product-subtitle">Afrinal Hakim</div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="product-title">Product Name</div>
                                            <div class="product-subtitle">Shirup Marzzan</div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="product-title">Date of Transactions</div>
                                            <div class="product-subtitle">9 Desember 2021</div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="product-title">Payment Status</div>
                                            <div class="product-subtitle">
                                                <div class="text-danger">Pending</div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="product-title">Total Amount</div>
                                            <div class="product-subtitle">$280,409</div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="product-title">Mobile</div>
                                            <div class="product-subtitle">+629000 11001</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mt-4">
                                    <h5>Shipping Information</h5>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="product-title">Address 1</div>
                                            <div class="product-subtitle">Pappel La Casssa</div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="product-title">Address 2</div>
                                            <div class="product-subtitle">Blok AD 306</div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="product-title">Province</div>
                                            <div class="product-subtitle">West Java</div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="product-title">City</div>
                                            <div class="product-subtitle">Makassar</div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="product-title">Postal Code</div>
                                            <div class="product-subtitle">1239992</div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="product-title">Country</div>
                                            <div class="product-subtitle">Indonesia</div>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <div class="product-title">Shipping Status</div>
                                            <select name="status" id="status" class="product-subtitle form-control" v-model="status">
                                                <option value="PENDING">Pending</option>
                                                <option value="SHIPPING">Shipping</option>
                                                <option value="SUCCESS">Success</option>
                                            </select>
                                        </div>
                                        <template v-if="status == 'SHIPPING'">
                                            <div class="col-md-3">
                                                <div class="product-title">Input Resi</div>
                                                <input type="text" class="form-control" name="resi" v-model="resi">
                                            </div>
                                            <div class="col-md-2">
                                                <button type="submit" class="btn btn-success btn-block mt-4">
                                                    Update Resi
                                                </button>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12 text-right">
                                    <button type="submit" class="btn btn-success btn-lg mt-4">
                                        Save Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('addon-script')
<script src="/vendor/vue/vue.js"></script>
<script>
    var transactionDetails = new Vue({
        el: '#transactionDetails',
        data: {
            status: "SHIPPING",
            resi: "BDO12308012132",
        }
    });
</script>
@endpush
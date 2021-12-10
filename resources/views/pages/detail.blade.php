@extends('layouts.app')

@section('title')
Store Detail Page
@endsection

@section('content')
<!-- Page Content -->
<div class="page-content page-details">

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
                                Details Product
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="store-gallery" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-8" data-aos="zoom-in">
                    <transition name="slide-fade" mode="out-in">
                        <img :src="photos[activePhoto].url" :key="photos[activePhoto].id" class="w-100 main-page" alt="photo gallery">
                    </transition>
                </div>
                <div class="col-lg-2">
                    <div class="row">
                        <div class="col-3 col-lg-12 mt-2 mt-lg-0" v-for="(photo, index) in photos" :key="photo.id" data-aos="zoom-in" data-aos-delay="100">
                            <a href="#" @click="changeActive(index)">
                                <img :src="photo.url" class="w-100 thumbnail-image" :class="{ active: index == activePhoto }" alt="thumbnail images">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="store-detail-container" data-aos="fade-up">

        <section class="store-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h1>Sofa Ternyaman</h1>
                        <div class="owner">By Afrinal Hakim</div>
                        <div class="price">$1, 409</div>
                    </div>
                    <div class="col-lg-2" data-aos="zoom-in">
                        <a href="/cart.html" class="btn btn-success px-4 btn-block mb-2">
                            Add to cart
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="store-description">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga sed tenetur distinctio voluptatibus
                            maiores? Velit, corporis quis! Repudiandae esse similique mollitia, provident maxime impedit laboriosam
                            quasi perferendis cum, facilis dolor?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit harum quos cumque! Neque soluta quam
                            laboriosam autem nobis, id veniam minus quod incidunt molestiae qui omnis? Nam aliquid sit consequuntur?
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="store-review">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 mt-3 mb-3">
                        <h5>Costumer Review (3)</h5>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <ul class="list-unstyled">
                                <li class="media">
                                    <img src="/images/icons-testimonial-1.png" alt="testi" class="mr-3 rounded-circle">
                                    <div class="media-body">
                                        <h5 class="mt-2 mb-1">
                                            Hazza Risky
                                        </h5>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod illum minima nam animi, obcaecati
                                        beatae non, vero expedita repellendus doloribus repellat eaque reiciendis ratione laboriosam
                                        voluptas necessitatibus pariatur. Ea, laboriosam!
                                    </div>
                                </li>

                                <li class="media">
                                    <img src="/images/icons-testimonial-2.png" alt="testi" class="mr-3 rounded-circle">
                                    <div class="media-body">
                                        <h5 class="mt-2 mb-1">
                                            Anna Sukkirata
                                        </h5>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod illum minima nam animi, obcaecati
                                        beatae non, vero expedita repellendus doloribus repellat eaque reiciendis ratione laboriosam
                                        voluptas necessitatibus pariatur. Ea, laboriosam!
                                    </div>
                                </li>

                                <li class="media">
                                    <img src="/images/icons-testimonial-3.png" alt="testi" class="mr-3 rounded-circle">
                                    <div class="media-body">
                                        <h5 class="mt-2 mb-1">
                                            Dakimu Wangi
                                        </h5>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod illum minima nam animi, obcaecati
                                        beatae non, vero expedita repellendus doloribus repellat eaque reiciendis ratione laboriosam
                                        voluptas necessitatibus pariatur. Ea, laboriosam!
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

@push('addon-script')
<script src="/vendor/vue/vue.js"></script>
<script>
    var gallery = new Vue({
        el: "#gallery",
        mounted() {
            AOS.init();
        },
        data: {
            activePhoto: 0,
            photos: [{
                    id: 1,
                    url: "/images/product-details-1.jpg"
                },
                {
                    id: 2,
                    url: "/images/product-details-2.jpg"
                },
                {
                    id: 3,
                    url: "/images/product-details-3.jpg"
                },
                {
                    id: 4,
                    url: "/images/product-details-4.jpg"
                },
            ],
        },
        methods: {
            changeActive(id) {
                this.activePhoto = id;
            }
        }
    })
</script>
@endpush
@extends('layouts.website.master')
@section('content')
    <!-- BANNER SEC -->
        <section class="banner-imnner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="iner-baner-head">
                            <h1>GALLERY</h1>
                            <p>Lorem ipsum is  Dummy of text Set <br> amet doloripsum is dummy of lorem ipsum</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
        </section>
    <!-- BANNER SEC -->
    <!-- GALLERY SECTION  -->
        <section class="gallery">
            <div class="container">
                <div class="row gallery-main"></div>
                    <div class="row images-roww">
                        <div class="col-md-4 box-image-1">
                            <div class="row">
                                <div class="image-box box---1">
                                    <img src="{{ asset('public/assets/website') }}/images/gallery-img-1.png" class="img-fluid"  alt="">
                                </div>
                                <div class="image-box box---2">
                                    <img src="{{ asset('public/assets/website') }}/images/gallery-img-2.png" class="img-fluid"  alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 box-image-2">
                            <div class="row">
                                <div class="image-box">
                                    <img src="{{ asset('public/assets/website') }}/images/gallery-img-3.png" class="img-fluid"  alt="">
                                </div>
                                <div class="image-box">
                                    <img src="{{ asset('public/assets/website') }}/images/gallery-img-4.png" class="img-fluid"  alt="">
                                </div>
                                <div class="image-box">
                                    <img src="{{ asset('public/assets/website') }}/images/gallery-img-5.png" class="img-fluid"  alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 box-image-3">
                            <div class="row">
                                <div class="image-box">
                                    <img src="{{ asset('public/assets/website') }}/images/gallery-img-6.png" class="img-fluid"  alt="">
                                </div>
                                <div class="image-box">
                                    <img src="{{ asset('public/assets/website') }}/images/gallery-img-7.png" class="img-fluid"  alt="">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
    <!-- GALLERY SECTION  -->
@endsection

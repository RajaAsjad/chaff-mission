@extends('layouts.website.master')
@section('content')
    <!-- RENTALS SECTION -->
        <section class="rental-secc">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="rental-inner">
                            <h1>PROPERTIES  / RVS
                                Rentals </h1>
                            <p>Lorem Ipsum is Dummy of text Set
                                amet doloripsum is dummy of lorem ipsum</p>
                        </div>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
            </div>
        </section>
    <!-- RENTALS SECTION -->
    <!-- TAB SEC -->
        <section class="tab-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab my--tabz">
                            <button class="tablinks active" onclick="openCity(event, 'London')">PROPERTIES / RVS</button>
                            <button class="tablinks" onclick="openCity(event, 'Paris')">RENTALS</button>
                          </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="London" class="tabcontent" style="display: block;">
                            <div class="row prop-divs">
                                <div class="col-md-4">
                                    <div class="property-card">
                                        <div class="head-conntent">
                                            <img src="{{ asset('public/assets/website') }}/images/property-img.png" alt="">
                                            <div class="this-content">
                                                <div class="this--heading">
                                                    <h3>ROOMS : 4</h3>
                                                    <h3>BED : 4</h3>
                                                    <h3>BATHROOM : 2</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-contt">
                                            <h3>Lorem Ipsum Dolor Sit Amet</h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing remaining essentially unchanged</p>
                                            <div class="main-contt-inner">
                                                <h2>$ <span>100</span> </h2>
                                                <img src="{{ asset('public/assets/website') }}/images/testimonials-stars.png" alt="">
                                            </div>
                                            <div class="last-anchor">
                                                <a href="" class="universal-btn">more info</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="property-card">
                                        <div class="head-conntent">
                                            <img src="{{ asset('public/assets/website') }}/images/property-img.png" alt="">
                                            <div class="this-content">
                                                <div class="this--heading">
                                                    <h3>ROOMS : 4</h3>
                                                    <h3>BED : 4</h3>
                                                    <h3>BATHROOM : 2</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-contt">
                                            <h3>Lorem Ipsum Dolor Sit Amet</h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing remaining essentially unchanged</p>
                                            <div class="main-contt-inner">
                                                <h2>$ <span>100</span> </h2>
                                                <img src="{{ asset('public/assets/website') }}/images/testimonials-stars.png" alt="">
                                            </div>
                                            <div class="last-anchor">
                                                <a href="" class="universal-btn">more info</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="property-card">
                                        <div class="head-conntent">
                                            <img src="{{ asset('public/assets/website') }}/images/property-img.png" alt="">
                                            <div class="this-content">
                                                <div class="this--heading">
                                                    <h3>ROOMS : 4</h3>
                                                    <h3>BED : 4</h3>
                                                    <h3>BATHROOM : 2</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-contt">
                                            <h3>Lorem Ipsum Dolor Sit Amet</h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing remaining essentially unchanged</p>
                                            <div class="main-contt-inner">
                                                <h2>$ <span>100</span> </h2>
                                                <img src="{{ asset('public/assets/website') }}/images/testimonials-stars.png" alt="">
                                            </div>
                                            <div class="last-anchor">
                                                <a href="" class="universal-btn">more info</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row prop-divs">
                                <div class="col-md-4">
                                    <div class="property-card">
                                        <div class="head-conntent">
                                            <img src="{{ asset('public/assets/website') }}/images/property-img.png" alt="">
                                            <div class="this-content">
                                                <div class="this--heading">
                                                    <h3>ROOMS : 4</h3>
                                                    <h3>BED : 4</h3>
                                                    <h3>BATHROOM : 2</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-contt">
                                            <h3>Lorem Ipsum Dolor Sit Amet</h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing remaining essentially unchanged</p>
                                            <div class="main-contt-inner">
                                                <h2>$ <span>100</span> </h2>
                                                <img src="{{ asset('public/assets/website') }}/images/testimonials-stars.png" alt="">
                                            </div>
                                            <div class="last-anchor">
                                                <a href="" class="universal-btn">more info</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="property-card">
                                        <div class="head-conntent">
                                            <img src="{{ asset('public/assets/website') }}/images/property-img.png" alt="">
                                            <div class="this-content">
                                                <div class="this--heading">
                                                    <h3>ROOMS : 4</h3>
                                                    <h3>BED : 4</h3>
                                                    <h3>BATHROOM : 2</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-contt">
                                            <h3>Lorem Ipsum Dolor Sit Amet</h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing remaining essentially unchanged</p>
                                            <div class="main-contt-inner">
                                                <h2>$ <span>100</span> </h2>
                                                <img src="{{ asset('public/assets/website') }}/images/testimonials-stars.png" alt="">
                                            </div>
                                            <div class="last-anchor">
                                                <a href="" class="universal-btn">more info</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="property-card">
                                        <div class="head-conntent">
                                            <img src="{{ asset('public/assets/website') }}/images/property-img.png" alt="">
                                            <div class="this-content">
                                                <div class="this--heading">
                                                    <h3>ROOMS : 4</h3>
                                                    <h3>BED : 4</h3>
                                                    <h3>BATHROOM : 2</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-contt">
                                            <h3>Lorem Ipsum Dolor Sit Amet</h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing remaining essentially unchanged</p>
                                            <div class="main-contt-inner">
                                                <h2>$ <span>100</span> </h2>
                                                <img src="{{ asset('public/assets/website') }}/images/testimonials-stars.png" alt="">
                                            </div>
                                            <div class="last-anchor">
                                                <a href="" class="universal-btn">more info</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                          <div id="Paris" class="tabcontent">
                            <h3>Paris</h3>
                            <p>Paris is the capital of France.</p>
                          </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- TAB SEC -->
    @endsection

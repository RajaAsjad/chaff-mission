@extends('layouts.website.master')
@section('content')
    <!-- BANNER SEC -->
        <section class="banner-imnner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="iner-baner-head">
                            <h1>VIRTUAL <br> <span>Tour</span> </h1>
                            <p>Lorem ipsum is  Dummy of text Set <br> amet doloripsum is dummy of lorem ipsum</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
        </section>
    <!-- BANNER SEC -->
    <!-- VICTUAL TOUR  -->
        <section class="victual-tour">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 tour-heading">
                        <h1>DISCOVER A VIRTUAL TOUR</h1>
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type scrambled standard dummy text ever since the <br> 1500, when an unknown printer took a galley of </p>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row tour-last">
                    <div class="col-md-6 tour-image">
                            <img src="{{ asset('public/assets/website') }}/images/tour-1.png" alt="">
                            <div class="center-img">
                                <a href=""><img src="{{ asset('public/assets/website') }}/images/center-tour.png" alt=""></a>
                            </div>
                    </div>
                    <div class="col-md-6 tour-image">
                        <img src="{{ asset('public/assets/website') }}/images/tour-2.png" alt="">
                        <div class="center-img">
                            <a href=""><img src="{{ asset('public/assets/website') }}/images/center-tour.png" alt=""></a>
                        </div>

                    </div>
                    <div class="tour-button">
                        <a href="#" class="universal-btn">Explore a tour</a>
                    </div>

                </div>
            </div>
        </section>
    <!-- VICTUAL TOUR  -->
    @endsection

@extends('layouts.website.master')
@section('content')
  <!-- BANNER SEC -->
    <section class="Deals">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="iner-baner-head">
                        <h1>Deals</h1>
                        <p class="extra-text">Home > Deals</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna alion.</p>
                    </div>    
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER SEC -->
    <!-- DEALS SECTION -->
    <section class="all-deals">
        <div class="container">
            <div class="row">
                <div class="deals-main-des">
                    <h3>CHAFF MISSIONS</h3>
                    <h1>BEST DEALS FOR PROPERTIES</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            <div class="row properties-deals">
                @foreach($property_best_deals as $property_best_deal)
                    <div class="col-md-4">
                        <div class="dealz-box">
                            <div class="dealz-box-img">
                                <img src="{{ asset('public/admin/assets/images/property') }}/{{$property_best_deal->hasProperty->image}}" alt="">
                            </div>
                            <div class="dealz-box-content">
                                <div class="dealz-box-heading">
                                    <h3>{{$property_best_deal->hasProperty->name}}</h3>
                                    <img src="{{ asset('public/assets/website') }}/images/new-starz.png" alt="">
                                </div>
                                <div class="dealz-box-description">
                                    <p>{{$property_best_deal->hasProperty->short_description}}</p>
                                </div>
                                <div class="dealz-box-price">
                                    <div class="pricess">
                                        <span>${{$property_best_deal->price}}</span>
                                    </div>
                                    <div class="other-info-deals">
                                        <div class="pro-detailz">
                                            <img src="{{ asset('public/assets/website') }}/images/washrooms-img.png" alt="">
                                            <span>{{$property_best_deal->hasProperty->bathroom}}</span>
                                        </div>
                                        <div class="pro-detailz">
                                            <img src="{{ asset('public/assets/website') }}/images/beds.png" alt="">
                                            <span>{{$property_best_deal->hasProperty->bed}}</span>
                                        </div>
                                        <div class="pro-detailz">
                                            <img src="{{ asset('public/assets/website') }}/images/beds.png" alt="">
                                            <span>{{$property_best_deal->hasProperty->room}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dealz-box-button">
                                <a href="" class="dealz-box-a">read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row justify-content-center row-load-more for-deal-margin">
                <a href="" class="load-more">Load more</a>
            </div>
            <div class="row">
                <div class="deals-main-des">
                    <h3>CHAFF MISSIONS</h3>
                    <h1>BEST DEALS FOR RENTALS</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            <div class="row properties-deals">
                @foreach($rental_best_deals as $rental_best_deal)
                    <div class="col-md-4">
                        <div class="dealz-box">
                            <div class="dealz-box-img">
                                <img src="{{ asset('public/admin/assets/images/rental') }}/{{$rental_best_deal->hasRental->image}}" alt="">
                            </div>
                            <div class="dealz-box-content">
                                <div class="dealz-box-heading">
                                    <h3>{{$rental_best_deal->hasRental->name}}</h3>
                                    <img src="{{ asset('public/assets/website') }}/images/new-starz.png" alt="">
                                </div>
                                <div class="dealz-box-description">
                                    <p>{{$rental_best_deal->hasRental->short_description}}</p>
                                </div>
                                <div class="dealz-box-price">
                                    <div class="pricess">
                                        <span>${{$rental_best_deal->price}}</span>
                                    </div>
                                    <div class="other-info-deals">
                                        <div class="pro-detailz">
                                            <img src="{{ asset('public/assets/website') }}/images/car-seats.png" alt="">
                                            <span>{{$rental_best_deal->hasRental->seat}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dealz-box-button">
                                <a href="" class="dealz-box-a">read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row justify-content-center row-load-more for-deal-margin">
                <a href="" class="load-more">Load more</a>
            </div>
            <div class="row">
                <div class="deals-main-des">
                    <h3>CHAFF MISSIONS</h3>
                    <h1>BEST DEALS FOR RVS</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            <div class="row properties-deals">
                @foreach($rv_best_deals as $rv_best_deal)
                    <div class="col-md-4">
                        <div class="dealz-box">
                            <div class="dealz-box-img">
                                <img src="{{ asset('public/admin/assets/images/RV') }}/{{$rv_best_deal->hasRV->image}}" alt="">
                            </div>
                            <div class="dealz-box-content">
                                <div class="dealz-box-heading">
                                    <h3>{{$rv_best_deal->hasRV->name}}</h3>
                                    <img src="{{ asset('public/assets/website') }}/images/new-starz.png" alt="">
                                </div>
                                <div class="dealz-box-description">
                                    <p>{{$rv_best_deal->hasRV->short_description}}</p>
                                </div>
                                <div class="dealz-box-price">
                                    <div class="pricess">
                                        <span>${{$rv_best_deal->price}}</span>
                                    </div>
                                    <div class="other-info-deals">
                                        <div class="pro-detailz">
                                            <img src="{{ asset('public/assets/website') }}/images/car-seats.png" alt="">
                                            <span>{{$rv_best_deal->hasRV->seat}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dealz-box-button">
                                <a href="" class="dealz-box-a">read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- <div class="col-md-4">
                    <div class="dealz-box">
                        <div class="dealz-box-img">
                            <img src="{{ asset('public/assets/website') }}/images/new-car-2.png" alt="">
                        </div>
                        <div class="dealz-box-content">
                            <div class="dealz-box-heading">
                                <h3>Range Rover</h3>
                                <img src="{{ asset('public/assets/website') }}/images/new-starz.png" alt="">
                            </div>
                            <div class="dealz-box-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="dealz-box-price">
                                <div class="pricess">
                                    <span>$100</span>
                                </div>
                                <div class="other-info-deals">
                                    <div class="pro-detailz">
                                        <img src="{{ asset('public/assets/website') }}/images/car-seats.png" alt="">
                                        <span>5</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dealz-box-button">
                            <a href="" class="dealz-box-a">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="dealz-box">
                        <div class="dealz-box-img">
                            <img src="{{ asset('public/assets/website') }}/images/new-car-3.png" alt="">
                        </div>
                        <div class="dealz-box-content">
                            <div class="dealz-box-heading">
                                <h3>Range Rover</h3>
                                <img src="{{ asset('public/assets/website') }}/images/new-starz.png" alt="">
                            </div>
                            <div class="dealz-box-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="dealz-box-price">
                                <div class="pricess">
                                    <span>$100</span>
                                </div>
                                <div class="other-info-deals">
                                    <div class="pro-detailz">
                                        <img src="{{ asset('public/assets/website') }}/images/car-seats.png" alt="">
                                        <span>5</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dealz-box-button">
                            <a href="" class="dealz-box-a">read more</a>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="row justify-content-center row-load-more for-deal-margin">
                <a href="" class="load-more">Load more</a>
            </div>
        </div>
    </section>
    <!-- DEALS SECTION -->
    @endsection

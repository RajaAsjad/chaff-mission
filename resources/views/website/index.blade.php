@extends('layouts.website.master')
@section('content')
    <!-- BANNER SEC -->
        <section class="find-a-car">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="rental-car">
                            <div class="form-group first-input">
                                <label for="first">Pickup Location</label>
                                <input type="text" class="form-control" placeholder="" id="first">
                              </div>
                              <label>
                                <input type="checkbox" value="Sure!" id="newsletter"> Return to a different Location?
                              </label>
                              <div class="row date-pick-time">
                                  <div class="col-md-3">
                                    <label for="exampleFormControlSelect1">Pickup Date:</label>
                                    <div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
                                        <input class="form-control" type="text" readonly />
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Time:</label>
                                        <select class="form-control" id="exampleFormControlSelect1" value="ABC">
                                          <option>10:AM</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                        </select>
                                      </div>
                                  </div>
                                  <div class="col-md-2 right-now">
                                      <button><img src="{{ asset('public/assets/website') }}/images/right-arrow.png" alt=""></button>
                                  </div>
                                  <div class="col-md-3">
                                    <label for="exampleFormControlSelect1">Return Date:</label>
                                    <div id="datepicker2" class="input-group date" data-date-format="mm-dd-yyyy">
                                        <input class="form-control" type="text" readonly />
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    </div>
                                  </div>
                                  <div class="col-md-2 last-sel">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Time:</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                        </select>
                                      </div>
                                  </div>
                              </div>
                              <div class="row last-row">
                                  <div class="col-md-2 house-btn">
                                      <label for="">House</label>
                                      <button>HOUSE</button>
                                  </div>
                                  <div class="col-md-2 car-btn">
                                      <label for="">Car</label>
                                      <button>CARSSS</button>
                                  </div>
                                  <div class="col-md-3">

                                  </div>
                                  <div class="col-md-5 search-now">
                                    <button>SEARCH NOW <span class="fa fa-search form-control-feedback"></span></button>
                                  </div>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-6 banner-h-one">
                        <h1 class="FIND">FIND THE</h1>
                        <h1 class="NEXT">NEXT PLACE</h1>
                        <h1 class="VISIT">TO VISIT</h1>
                    </div>
                </div>
            </div>
        </section>
    <!-- BANNER SEC -->
    <!-- CHOOSE YOUR VEHICLE  -->
        <section class="choose-vehicle">
            <div class="container-fluid">
                <h1 class="CHOOSE-YOUR">CHOOSE YOUR VEHICLE</h1>
                <h2 class="MODIFY-YOUR">MODIFY YOUR NEEDS</h2>
                <div class="row slider-row">
                    <div class="col-md-12 live-slider">
                        @foreach($rentals as $rental)
                        <div class="bid-box">
                            <img src="{{ asset('public/admin/assets/images/rental') }}/{{$rental->image}}" alt="">
                            <div class="bottom-content"><h1>{{$rental->name}}</h1>
                                <div class="for-hov">
                                    <a href="" >VIEW DETAILS <img src="{{ asset('public/assets/website') }}/images/link-arrow.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="explore-more">
                            <a href="" class="universal-btn">EXPLORE MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- CHOOSE YOUR VEHICLE  -->
    <!-- FIND BEST DESTINATION -->
        <section class="find-des">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 click-pin">
                        <h1 class="pin-h1">CLICK THE PIN TO FIND<br> BEST DESTINATION</h1>
                    </div>
                </div>
                <div class="row my-tabz">
                    <div class="col-md-12 info">
                        <div class="col-md-12 panel with-nav-tabs panel-default">
                            <div class="panel-heading">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab1default" data-toggle="tab">TEXAS</a></li>
                                    <li><a id="map-tab" href="#tab3default" data-toggle="tab">COLARADO</a></li>
                                </ul>
                        </div>
                        <div class="panel-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade in active show" id="tab1default">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2946817.75697282!2d-101.01147709677042!3d30.93578224915623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864070360b823249%3A0x16eb1c8f1808de3c!2sTexas%2C%20USA!5e0!3m2!1sen!2s!4v1649709449857!5m2!1sen!2s" width="80%" height="500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                    <div class="tab-pane fade" id="tab3default">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3175952.4460282787!2d-107.79443303553688!3d38.98071694707563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x874014749b1856b7%3A0xc75483314990a7ff!2sColorado%2C%20USA!5e0!3m2!1sen!2s!4v1649709635866!5m2!1sen!2s" width="80%" height="500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- FIND BEST DESTINATION -->
    <!-- book car html start -->
        <section class="book-car">
            <div class="container book-car-main">
                <div class="row book-a-car">
                    <div class="col-md-6">
                            <div class="book-car-img">
                                <img src="{{ asset('public/assets/website') }}/images/book-a-car.png" alt="">
                            </div>
                    </div>
                    <div class="col-md-6 heading">
                        <div class="book-car-heading">
                                <h1>BOOK A CAR</h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  dummy text ever since the 1500</p>
                        </div>
                        <div class="book-car-button">
                            <a href="#" class="universal-btn">View details</a>
                        </div>
                    </div>
                </div>
                <div class="row book-a-car">
                    <div class="col-md-6 heading">
                        <div class="book-car-heading">
                            <h1>BECOME A HOST</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  dummy text ever since the 1500</p>
                        </div>
                        <div class="book-car-button">
                            <a href="#" class="universal-btn">View details</a>
                        </div>
                </div>
                <div class="col-md-6">
                        <div class="book-car-img">
                            <img src="{{ asset('public/assets/website') }}/images/become-a-host.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- book car html start -->
    <!-- about us html start -->
        <section class="about-us">
            <div class="container about-main">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-us-img">
                            <img src="{{ asset('public/admin/assets/images/about') }}/{{$abouts[0]['image']}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-us-heading">
                            <h1>{{$abouts[0]['heading']}}<span>{{$abouts[0]['short_description']}}</span></h1>
                            <p>{!! $abouts[0]['description'] !!}</p>
                        </div>
                        <div class="book-car-button">
                            <a href="#" class="universal-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- about us html start -->
    <!-- car rent html start -->
        <section class="rent-car">
            <div class="container">
                <div class="row head-roww">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="car-rent-heading">
                            <h1>Make 4 Simple Steps To <br> Rent a Car!</h1>
                            <p>Lorem ispum is simple dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <!-- @foreach($steprents as $steprent)
                    <div class="col-md-3 rent-menu">
                        <div class="rent-card">
                            <img src="{{ asset('public/admin/assets/images/car_rent/') }}/{{$steprent->image}}" alt="">
                            <h6>{{$steprent->heading}}</h6>
                            <p>{!! $steprent->description !!}</p>
                        </div>
                    </div>
                    @endforeach -->
                    <div class="col-md-3 rent-menu">
                        <div class="rent-card">
                            <img src="{{ asset('public/admin/assets/images/car_rent/') }}/{{$steprents[0]['image']}}" alt="">
                            <h6>{{$steprents[0]['heading']}}</h6>
                            <p>{!! $steprents[0]['description'] !!}</p>
                        </div>
                    </div>
                    <div class="col-md-3 rent-menu">
                        <div class="rent-card">
                            <img src="{{ asset('public/admin/assets/images/car_rent/') }}/{{$steprents[1]['image']}}" alt="">
                            <h6>{{$steprents[1]['heading']}}</h6>
                            <p>{!! $steprents[1]['description'] !!}</p>
                        </div>
                    </div>
                    <div class="col-md-3 rent-menu">
                        <div class="rent-card">
                            <img src="{{ asset('public/admin/assets/images/car_rent/') }}/{{$steprents[2]['image']}}" alt="">
                            <h6>{{$steprents[2]['heading']}}</h6>
                            <p>{!! $steprents[2]['description'] !!}</p>
                        </div>
                    </div>
                    <div class="col-md-3 rent-menu">
                        <div class="rent-card-last">
                            <img src="{{ asset('public/admin/assets/images/car_rent/') }}/{{$steprents[3]['image']}}" alt="">
                            <h6>{{$steprents[3]['heading']}}</h6>
                            <p>{!! $steprents[3]['description'] !!}</p>
                        </div>
                    </div>
                    <div class="book-car-button">
                        <a href="#" class="universal-btn">Get started</a>
                    </div>
                </div>
            </div>
        </section>
    <!-- car rent html start -->
@endSection

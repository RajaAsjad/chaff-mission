@extends('layouts.website.master')
@section('content')
    <!-- BANNER SEC -->
    <section class="banner-imnner-about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="iner-baner-head">
                        <h1>ABOUT</h1>
                        <p class="extra-text">Home > About</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna alion.</p>
                    </div>    
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER SEC -->
    <!-- VICTUAL TOUR  -->
    <section class="about-us-sec">
        <div class="container">
            <div class="row about-row-first">
                <div class="col-md-7">
                    <h3>{{$abouts[1]['heading']}}</h3>
                    <h1>{{$abouts[1]['short_description']}}</h1>
                    <p>{!! $abouts[1]['description'] !!}</p>
                </div>
                <div class="col-md-5">
                    <div class="about-inner-img">
                        <img src="{{ asset('public/admin/assets/images/about') }}/{{$abouts[1]['image']}}" alt="">
                    </div>
                </div>
            </div>
            <div class="row about-row-first flex-row-reverse">
                <div class="col-md-7">
                <h3>{{$abouts[2]['heading']}}</h3>
                <h1>{{$abouts[2]['short_description']}}</h1>
                <p>{!! $abouts[2]['description'] !!}</p>
                </div>
                <div class="col-md-5">
                    <div class="about-inner-img">
                        <img src="{{ asset('public/admin/assets/images/about') }}/{{$abouts[2]['image']}}" alt="">
                    </div>
                </div>
            </div>
            <div class="row last-para">
                <div class="col-md-12">
                <p>{!! $abouts[3]['description'] !!}</p>
                </div>
            </div>
        </div>
        <!-- <div class="container">
            <div class="row about-row-first">
                <div class="col-md-7">
                    <h3>WELCOME TO COMPANY</h3>
                    <h1>ABOUT CHAFF MISSION</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
                </div>
                <div class="col-md-5">
                    <div class="about-inner-img">
                        <img src="{{ asset('public/assets/website') }}/images/about-inner1.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row about-row-first flex-row-reverse">
                <div class="col-md-7">
                    <h3>Duis aute irure dolor</h3>
                    <h1>SED UT PERSPICIATIS</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
                </div>
                <div class="col-md-5">
                    <div class="about-inner-img">
                        <img src="{{ asset('public/assets/website') }}/images/about-inner2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row last-para">
                <div class="col-md-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
                </div>
            </div>
        </div> -->
    </section>
    <!-- VICTUAL TOUR  -->
    @endsection

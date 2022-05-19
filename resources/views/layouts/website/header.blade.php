    <!-- HEADER CODE -->
    <section class="header-main">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group has-search">
                                <span class="fa fa-search form-control-feedback"></span>
                                <input type="text" class="form-control" placeholder="Search">
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="navigation-chaf">
                                <ul>
                                    <li><a href="{{ route('index') }}">Home</a></li>
                                    <li><a href="{{ route('about_us') }}">About</a></li>
                                    <li><a href="{{ route('rentals') }}">Rentals</a></li>
                                    <li><a href="{{ route('virtualtour') }}">Virtual Tour</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="chaff-logo">
                        <img src="{{ asset('public/assets/website/images/chef-logo.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="row all-right-btnz">
                        <div class="col-md-4 hdr-three">
                            <div class="anchor-firstt">
                                <a href="{{ route('book-appointment')}}"> Book Appintment</a>
                            </div>
                        </div>
                        <div class="col-md-6 hdr-right">
                            @if(Auth::check())
                                <div class="user-log">
                                    <a href="{{ route('home') }}"><span><i class="fa fa-user-circle" aria-hidden="true"></i> {{ Auth::user()->name }}</span></a>
                                </div>
                            @else 
                                <div class="loggin">
                                    <a href="{{ route('login') }}">LOGIN</a>
                                </div>
                                <div class="sign_up">
                                    <a href="{{ route('register') }}">SIGN UP</a>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="navigation-chaf">
                                <ul>
                                    <li><a href="{{ route('careers') }}">Careers</a></li>
                                    <li><a href="{{ route('gallerys') }}">Gallery</a></li>
                                    <li><a href="{{ route('deal') }}">Deals</a></li>
                                    <li><a href="">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HEADER CODE -->

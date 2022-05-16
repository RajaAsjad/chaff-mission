   <!-- TESTIMONIALS SECTION -->
    <section class="testimonial-section">
        <div class="container">
            <div class="row testi-head">
                <h1>OUR REVIEWS</h1>
                <h3>WHAT CLIENTS ARE SAYING</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="gtco-testimonials">
                        <div class="owl-carousel owl-carousel1 owl-theme">
                            @foreach($testimonials as $testimonial)
                                <div>
                                    <div class="card text-center"><img class="card-img-top" src="{{ asset('public/assets/website') }}/images/testimonials-qomas.png" alt="">
                                        <div class="card-body">
                                            <p class="card-text">{!! $testimonial->comment !!} </p>
                                        </div>
                                        <div class="card-foot-con">
                                            <div class="first-slide-img">
                                                <img src="{{ asset('public/admin/assets/images/testimonials') }}/{{ $testimonial->image }}" alt="">
                                            </div>
                                            <div class="other-cont">
                                                <img src="{{ asset('public/assets/website') }}/images/testimonials-stars.png" alt="">
                                                <h3>{{$testimonial->name}}</h3>
                                                <h6>{{$testimonial->designation}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TESTIMONIALS SECTION -->
    <!-- footer html start -->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center" style="margin: 0;">
                <div class="col-md-3 foot-img">
                        <img src="{{ asset('public/assets/website/images/chef-logo.png') }}" alt="">
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.</p>
                </div>
                <div class="col-md-3 footer-list">
                        <h3>QUCIK LINK</h3>
                        <ul>
                        <a href="{{ route('about_us') }}"> <li>About</li> </a>
                        <a href=""> <li>FAQs</li></a>
                        <a href=""> <li>Our locations</li></a>
                        <a href=""> <li>Blogs & Articles</li></a>
                        <a href=""> <li>Deals</li></a>
                        </ul>
                </div>
                <div class="col-md-3 footer-list">
                        <h3>SUPPORT</h3>
                        <ul>
                        <a href=""><li>Subscriptions</li></a>
                        <a href=""> <li>Privacy policy</li></a>
                        <a href=""> <li>Sitemap</li></a>
                        <a href=""> <li>Terms and Conditions</li></a>
                        <a href=""> <li>Manage Cookies</li></a>
                        </ul>
                </div>
                <div class="col-md-3 foot-input">
                    <h3>SUBCRIBE TO NEWSlETTER</h3>
                    <p> To stay up-to-date on our promotion, discount, sales special offer and more</p>
                    <form action="{{ route('newsletter.store') }}" method="POST">
                        @csrf
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter Email Address">
                            <button type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                    </form>
                    <div class="icon">
                        <a href=""> <i class="fa fa-whatsapp" aria-hidden="true"></i> </a>
                        <a href=""> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
                        <a href=""> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href=""> <i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="footer-last">
        <p> © Copyright 2022 CHAFF MISSION LLC</p>
        <p>Desing & Developed PIXLES LOGO</p>
    </div>


@extends('layouts.website.master')
@section('content')
<!-- BANNER SEC -->
    <section class="Deals">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="iner-baner-head">
                        <h1>CONTACT</h1>
                        <p class="extra-text">Home > contact</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna alion.</p>
                    </div>    
                </div>
            </div>
        </div>
    </section>
<!-- BANNER SEC -->
<!-- CONTACT SECATION  -->
    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-info">
                        <h3>PHASELLUS PELLENTESQUE</h3>
                        <h1>CONTACT INFO</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="contact-deatails">
                        <div class="icon">
                            <a href=""><span><i class="fa fa-map-marker" aria-hidden="true"></i></span></a>
                        </div>
                        <div class="icon-deatial">
                            <span>Address:</span>
                            <span> 987 Main st. New York, NY, 00001, U.S.A</span>
                        </div>
                    </div>
                    <div class="contact-deatails">
                        <div class="icon">
                            <a href=""><span><i class="fa fa-phone" aria-hidden="true"></i></span></a>
                        </div>
                        <div class="icon-deatial">
                            <span>Telephone: </span>
                            <span> +000 123 456 798 0</span>
                        </div>
                    </div>    
                    <div class="contact-deatails">
                        <div class="icon">
                            <a href=""><span><i class="fa fa-fax" aria-hidden="true"></i></span></a>
                        </div>
                        <div class="icon-deatial">
                            <span>Fax: </span>
                            <span> +000 123 456 798 0</span>
                        </div>
                    </div>
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2946817.75697282!2d-101.01147709677042!3d30.93578224915623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864070360b823249%3A0x16eb1c8f1808de3c!2sTexas%2C%20USA!5e0!3m2!1sen!2s!4v1649709449857!5m2!1sen!2s" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>    
                <div class="col-md-6">
                    <div class="contact-form">
                        <h3>MAIL US</h3>
                        <h1>DROP A LINE</h1>
                        <form action="{{ route('contactus.store') }}" id="regform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                            @csrf
                            <label for="name"></label>
                            <input type="text" class="form-control mb-3" name="name" id="input1" placeholder="Name">
                            <label for="email"></label>
                            <input type="email" class="form-control mb-3" name="email" id="input1" placeholder="Email">
                            <label for="phone"></label>
                            <input type="phone" class="form-control mb-3" name="phone" id="input1" placeholder="Phone">
                            <label for="address"></label>
                            <input type="text" class="form-control mb-3" name="address" id="input1" placeholder="Address">
                            <label for="message"></label>
                            <textarea class="form-control" id="textarea1" rows="3" name="message" placeholder="Message"></textarea>
                            <div class="contact-frm-btn">
                                <button type="submit" class="send-msg">SEND MESSAGE</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>    
        </div>
    </section>
<!-- CONTACT SECATION  -->
@endsection

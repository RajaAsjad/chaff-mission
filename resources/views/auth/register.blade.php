@extends('layouts.website.master')
@section('content')
    <!-- BANNER SEC -->
    <section class="New_gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="iner-baner-head">
                        <h1>SIGN-UP</h1>
                        <p class="extra-text">Home > Sing-up</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna alion.</p>
                    </div>    
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER SEC -->
    <!-- SIGN_UP HTML  -->
    <section class="enroll">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="enroll-heading">
                        <h3>Do you need this?</h3>
                        <h1>SIGN-UP</h1>
                    </div>
                    <div class="enroll-form">
                        <form method="POST" action="{{route('register')}}">
                            @csrf
                            <input type="hidden" name="role" value="Customer">
                            <input type="text" class="form-control" name="first_name" id="input1" placeholder="First Name" value="{{ old('first_name') }}" required autofocus>
                            <span style="color: red">{{ $errors->first('first_name') }}</span>
                            <input type="text" class="form-control" name="last_name" id="input1" placeholder="Last Name" value="{{ old('last_name') }}" required autofocus>
                            <span style="color: red">{{ $errors->first('last_name') }}</span>
                            <input type="email" class="form-control" name="email" id="input2" placeholder="Email" value="{{ old('email') }}" required autofocus>
                            <span style="color: red">{{ $errors->first('email') }}</span>
                            <input type="phone" class="form-control" name="phone" id="input3" placeholder="Phone" value="{{ old('phone') }}" required autofocus>
                            <span style="color: red">{{ $errors->first('phone') }}</span>
                            <input type="password" class="form-control" name="password" id="input5" placeholder="Password">
                            <span style="color: red">{{ $errors->first('password') }}</span>
                            <input type="password" class="form-control" name="password_confirmation" id="input6" placeholder="Confirm Password">
                            <span style="color: red">{{ $errors->first('password_confirmation') }}</span>
                            <div class="enroll-frm-btn">
                                <button type="submit" class="transation11" name="form1">Register</button>
                            </div>
                        </form>
                         
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label " for="exampleCheck1">Term & Condition and Privacy Policy</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="enroll-image">
                        <img src="{{ asset('public/assets/website') }}/images/enroll.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

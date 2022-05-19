@extends('layouts.website.master')
@section('content')
  <!-- BANNER SEC -->
  <section class="banner-imnner-about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="iner-baner-head">
                    <h1>BOOK A APPOINTMENT</h1>
                    <p class="extra-text">Home > Book A Appointment</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna alion.</p>
                </div>    
            </div>
        </div>
    </div>
</section>
<!-- BANNER SEC -->
    <!-- BOOK AN APPOINTMENT -->
    <section class="book-appointment">
        <div class="container">
            
            <div class="row">
                <div class="col-md-12">
                    <div class="book-appointment-form mt-5">
                        @if(count($errors) > 0 )
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <ul class="p-0 m-0" style="list-style: none;">
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
                        <form action="{{ route('save-appointment') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="">Address</label>
                                    <input type="text" name="address" placeholder="Address" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="exampleSelect11">City</label>
                                    <select name="city" class="form-control" id="exampleSelect11">
                                        <option value="California">California</option>
                                        <option value="Colarado">Colarado</option>
                                        <option value="Texas">Texas</option>
                                        <option value="Chicago">Chicago</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleSelect22">State</label>
                                    <select name="state" class="form-control" id="exampleSelect22">
                                        <option value="California">California</option>
                                        <option value="Colarado">Colarado</option>
                                        <option value="Texas">Texas</option>
                                        <option value="Chicago">Chicago</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="">Pickup date</label>
                                    <input type="text" name="pickup_date" id="datepicker20" autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleSelect">Select Time</label>
                                    <select class="form-control" name="pickup_time" id="exampleSelect">
                                        <option value="12:00am">12:00am</option>
                                        <option value="12:30am">12:30am</option>
                                        <option value="1:00am">1:00am</option>
                                        <option value="1:30am">1:30am</option>
                                        <option value="2:00am">2:00am</option>
                                        <option value="2:30am">2:30am</option>
                                        <option value="3:00am">3:00am</option>
                                        <option value="3:30am">3:30am</option>
                                        <option value="4:00am">4:00am</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="">Return date</label>
                                    <input type="text" name="return_date" id="datepicker11" autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleSelect1">Select Time</label>
                                    <select name="return_time" class="form-control" id="exampleSelect1">
                                        <option value="12:00am">12:00am</option>
                                        <option value="12:30am">12:30am</option>
                                        <option value="1:00am">1:00am</option>
                                        <option value="1:30am">1:30am</option>
                                        <option value="2:00am">2:00am</option>
                                        <option value="2:30am">2:30am</option>
                                        <option value="3:00am">3:00am</option>
                                        <option value="3:30am">3:30am</option>
                                        <option value="4:00am">4:00am</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="exampleSelect2">Type of car</label>
                                    <select name="car_type" class="form-control" id="exampleSelect2">
                                        @if(!empty($cartypes))
                                            @foreach($cartypes as $cartype)
                                                <option value="{{ $cartype->slug}}">{{ $cartype->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="exampleFormControlTextarea3">Appointment Description</label>
                                    <textarea name="description" class="form-control" id="exampleFormControlTextarea3" rows="7"></textarea>
                                  </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="submit" value="BOOK APPOINTMENT" class="book-appointment-btn">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- BOOK AN APPOINTMENT -->

    @endsection

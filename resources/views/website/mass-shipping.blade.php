@extends('layouts.website.master')
@section('title', $page_title)
@section('content')
    @if(Session::has('message'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
    <div class="img text-center p-3">
        <img src="{{ asset('public/assets/website/images/star_shipping.jpeg') }}" height="100" alt="Image" />
    </div>
    <form action="{{ route('mass.store') }}" id="regform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <textarea class="form-control" placeholder="Shipper's Name and Address" name="shipper" rows="3" required></textarea>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <textarea class="form-control" placeholder="Consignee" name="consignee" rows="3" required></textarea>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <textarea class="form-control" placeholder="Notify Party" name="notify_party" rows="3"></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <textarea class="form-control" placeholder="2nd Notify" name="notify_party_2"></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <textarea class="form-control" placeholder="Delievery Agent" name="delivery_agent"></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Vessel and Voyage" name="vessel">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Place of receipt" name="place_of_recpt">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Port of Loading" name="port_of_loading">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="BL No." name="B_L_no" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Port of Discharge" name="port_of_discharge">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Place of Delievery " name="place_of_delivery">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <textarea class="form-control" placeholder="Containers and Seal marks and numbers" name="numbers"></textarea>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <textarea class="form-control" placeholder="No. of packages of shipping units" name="number_of_pkg"></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <textarea class="form-control" placeholder="Description of Goods & Packages" name="desc_of_good"></textarea>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <textarea class="form-control" placeholder="Gross Weight" name="gross_weight"></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <textarea class="form-control" placeholder="Measurement" name="measurments"></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Total No. of Containers and packages" name="total_container_or_pkg">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Temperature Control Instructions" name="temp_cont_isnt">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Shipped on board date" name="shipped_board_date">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Number of Original B/L" name="no_of_orignal_B_L">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Payment Terms" name="payment_term">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Date of issue of B/L" name="date_of_issue">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Place of issue of B/L" name="place_of_issue">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Total Amount" name="total_amount">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Signed by carrier" name="signed_carrier">
                </div>
            </div>
        </div>

        <div class="row mt-2 mb-5">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <input type="submit" class="btn btn-success btn-block" value="Submit" name="submit">
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </form>
@endsection

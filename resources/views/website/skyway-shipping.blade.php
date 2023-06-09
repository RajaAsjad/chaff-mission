@extends('layouts.website.master')
@section('title', $page_title)
@section('content')

    @if(Session::has('message'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
    <div class="img text-center p-3">
        <img src="{{ asset('public/assets/website/images/skyshipping.png') }}" height="100" alt="Image" />
    </div>
    <form action="{{ route('skyway.store') }}" id="regform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
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
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Pre Carriage by" name="pre_carriage_by">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Place of receipt" name="place_of_recpt">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Vessel" name="vessel">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Voyage No." name="voy_no">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Bill of lading" name="B_L_no" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Port of Loading" name="port_of_loading">
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
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Container No" name="container_no">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Seal No." name="seal_no">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Marks" name="marks">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Numbers" name="numbers">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <textarea type="text" class="form-control form-control-sm" placeholder="No. of packages " name="number_of_pkg"></textarea>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <textarea type="text" class="form-control form-control-sm" placeholder="General Description of Goods" name="desc_of_good"></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Gross Weight (Kgs)" name="gross_weight">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Measurments" name="measurments">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Kind of Packages" name="kind_of_pkg">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="No of Sequence of Original B/L" name="no_of_orignal_B_L">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Place of Issue of B/L" name="place_of_issue">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="date" class="form-control form-control-sm" name="date_of_issue">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="CARRIER's RECEIPT" name="carrier_receipt">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="SIGNED on behalf of the carrier" name="signed_carrier">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm text-uppercase" placeholder="Freight Prepaid" name="freight_prepaid">
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

        </div>
    </form>
@endsection

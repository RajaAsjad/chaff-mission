@extends('layouts.website.master')
@section('title', $page_title)
@section('content')

    @if(Session::has('message'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
    <div class="img text-center p-3">
        <img src="{{ asset('public/assets/website/images/starShipping.png') }}" height="150" alt="Image" />
    </div>
    <form action="{{ route('six_star.store') }}" id="regform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
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
            <div class="col-md-3">
                <div class="form-group">
                    <textarea class="form-control" rows="1" placeholder="Pre Carriage By" name="pre_carriage_by"></textarea>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <textarea class="form-control" rows="1" placeholder="Place of Receipt" name="place_of_recpt"></textarea>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <textarea class="form-control" rows="1" placeholder="Freight" name="freight"></textarea>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <textarea class="form-control" rows="1" placeholder="BL Status" name="BL_status"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <textarea class="form-control" rows="1" placeholder="Number of BL" name="num_of_BL" required></textarea>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <textarea class="form-control" rows="1" placeholder="Bill of Lading No" name="bill_of_landing_no"></textarea>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <textarea class="form-control" rows="1" placeholder="Vessel" name="vessel"></textarea>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <textarea class="form-control" rows="1" placeholder="Voyage" name="voyage"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <textarea class="form-control" rows="1" placeholder="Port of Loading" name="port_of_loading"></textarea>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <textarea class="form-control" rows="1" placeholder="Port of Discharge" name="port_of_discharge"></textarea>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <textarea class="form-control" rows="1" placeholder="Final Place of Delievery" name="place_of_delivery"></textarea>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <input type="date" class="form-control form-control-sm" placeholder="Place and of Date of issue" name="date_of_issue">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <textarea class="form-control" placeholder="Marks and Nos Containers and Seals" name="marks"></textarea>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <textarea class="form-control" placeholder="No. of kind of packages" name="kind_of_pkg"></textarea>
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

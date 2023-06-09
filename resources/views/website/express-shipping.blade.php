@extends('layouts.website.master')
@section('title', $page_title)
@section('content')

    @if(Session::has('message'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
    <div class="img text-center p-3">
        <img src="{{ asset('public/assets/website/images/express.png') }}" alt="Image" />
    </div>

    <form action="{{ route('express.store') }}" id="regform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <textarea class="form-control" placeholder="Shipper" name="shipper" rows="3" required></textarea>
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
                    <textarea class="form-control" placeholder="2nd Notify" name="notify_party_2" rows="3"></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Place of Receipt" name="place_of_recpt">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Port of Loading" name="port_of_loading">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="vessel" name="vessel">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Voyage No." name="voy_no">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Place of Delievery" name="place_of_delivery">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Item No." name="item_no">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Container No." name="container_no">
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
                    <textarea type="text" class="form-control form-control-sm" placeholder="No. of Packages" name="number_of_pkg"></textarea>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <textarea type="text" class="form-control form-control-sm" placeholder="Description of Goods" name="desc_of_good"></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Gross Cargo Weight (Kilos)" name="gross_weight">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Measurments" name="measurments">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Total No. Of Packages" name="total_no_of_pkg">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="date" class="form-control form-control-sm" placeholder="Shipped on Board Date" name="shipped_board_date">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Place of Issue" name="place_of_issue">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="date" class="form-control form-control-sm" placeholder="Date of Issue" name="date_of_issue">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" placeholder="BL NO." name="B_L_no" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input class="form-control form-control-sm text-uppercase" type="text" name="freight_prepaid" placeholder="Freight Prepaid">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input class="form-control form-control-sm" type="text" name="place_of_recpt_2" placeholder="Place of Receipt 2">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <textarea class="form-control" placeholder="Carrier" name="carrier" rows="3"></textarea>
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

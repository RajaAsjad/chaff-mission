@extends('layouts.admin.app')
<title> All Data Skyway Shipping</title>
@section('content')
    <style>
        .form-control[readonly] {
            background-color: #ffffff;
            opacity: 1;
            border-radius: 5px;
        }

        .container {
            margin-bottom: 50px;
        }
    </style>
    <section class="content-header">
        <div class="content-header-left">
            <h1>View All Data Skyway Shipping</h1>
        </div>
        <div class="content-header-right">
            <a href="{{ route('skyway.index') }}" class="btn btn-primary btn-sm">View All</a>
            <a href="javascript:;" onclick="window.print()" style="color:#ffffff" class="btn btn-sm btn-white mb-10px"><i
                    class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
        </div>
    </section>

    <section class="content">
        <div class="container" id="divToPrint">
            <div class="img text-center p-3 mb-5">
                <img src="{{ asset('public/assets/website/images/skyshipping.png') }}" height="100" alt="Image" style="margin-bottom: 30px" />
            </div>
            <div class="row">
                <table width="100%">
                    <tr>
                        <td>
                            <div class="col-md-12">
                                <label for="">Shipper</label>
                                <div class="form-group">
                                    <textarea readonly class="form-control" rows="3">{!! $skyway->shipper !!}</textarea>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Consignee</label>
                                <div class="form-group">
                                    <textarea readonly class="form-control" rows="3">{!! $skyway->consignee !!}</textarea>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Notify Party</label>
                                <div class="form-group">
                                    <textarea readonly class="form-control" rows="3">{!! $skyway->notify_party !!}</textarea>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="col-md-12">
                                <label for="">Notify Party 2</label>
                                <div class="form-group">
                                    <textarea readonly class="form-control">{!! $skyway->notify_party_2 !!}</textarea>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-md-12">
                                <label for="">Pre Carriage by</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly value="{{ $skyway->pre_carriage_by }}">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Place of receipt</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly value="{{ $skyway->place_of_recpt }}">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Vessel</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly value="{{ $skyway->vessel }}">
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <div class="col-md-6">
                                <label for="">Voyage No.</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly value="{{ $skyway->voy_no }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">B/L No.</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly value="{{ $skyway->B_L_no }}">
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-md-12">
                                <label for="">Port of Loading</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly value="{{ $skyway->port_of_loading }}">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Port of Discharge</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly value="{{ $skyway->port_of_discharge }}">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Place of Delievery</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly value="{{ $skyway->place_of_delivery }}">
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-md-12">
                                <label for="">Container No</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly
                                        value="{{ $skyway->container_no }}">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Seal No.</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly
                                        value="{{ $skyway->seal_no }}">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Marks</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly
                                        value="{{ $skyway->marks }}">
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                         <td>
                            <div class="col-md-12">
                                <label for="">Numbers</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly
                                        value="{{ $skyway->numbers }}">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">No. of Packages</label>
                                <div class="form-group">
                                    <textarea type="text" class="form-control form-control-sm" readonly> {!! $skyway->number_of_pkg !!}</textarea>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Description of Goods</label>
                                <div class="form-group">
                                    <textarea type="text" class="form-control form-control-sm" readonly> {!! $skyway->desc_of_good !!}</textarea>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <div class="col-md-6">
                                <label for="">Gross Weight</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly value="{{ $skyway->gross_weight }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">Measurments</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly value="{{ $skyway->measurments }}">
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <div class="col-md-12">
                                <label for="">Kind of Packages</label>
                                <div class="form-group">
                                    <textarea class="form-control" readonly rows="2"> {!! $skyway->kind_of_pkg !!} </textarea>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-md-12">
                                <label for="">No of Sequence of Original B/L</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" name="no_of_orignal_B_L" readonly value="{{ $skyway->no_of_orignal_B_L }}" >
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Place of Issue</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" name="place_of_issue" readonly value="{{ $skyway->place_of_issue }}" >
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Date of Issue</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly value="{{ $skyway->date_of_issue }}">
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <div class="col-md-6">
                                <label for="">CARRIER's RECEIPT</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly value="{{ $skyway->carrier_receipt }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">SIGNED on behalf of the carrier</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly value="{{ $skyway->signed_carrier }}">
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <div class="col-md-12">
                                <label for="">FREIGHT PREPAID</label>
                                <div class="form-group">
                                    <textarea class="form-control" readonly rows="2"> {!! $skyway->freight_prepaid !!} </textarea>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            $('.editor_short').summernote({
                height: 150
            });
        });
    </script>
@endsection

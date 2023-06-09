@extends('layouts.admin.app')
<title> All Data Express Shipping</title>
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
            <h1>View All Data Express Shipping</h1>
        </div>
        <div class="content-header-right">
            <a href="{{ route('express.index') }}" class="btn btn-primary btn-sm">View All</a>
            <a href="javascript:;" onclick="window.print()" style="color:#ffffff" class="btn btn-sm btn-white mb-10px"><i
                    class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
        </div>
    </section>

    <section class="content">
        <div class="container" id="divToPrint">
            <div class="img text-center p-3 mb-5">
                <img src="{{ asset('public/assets/website/images/express.png') }}" alt="Image" style="margin-bottom: 30px" />
            </div>
            <div class="row">
                <table width="100%">
                    <tr>
                        <td>
                            <div class="col-md-12">
                                <label for="">Shipper</label>
                                <div class="form-group">
                                    <textarea readonly class="form-control" rows="3">{!! $express->shipper !!}</textarea>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Consignee</label>
                                <div class="form-group">
                                    <textarea readonly class="form-control" rows="3">{!! $express->consignee !!}</textarea>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Notify Party</label>
                                <div class="form-group">
                                    <textarea readonly class="form-control" rows="3">{!! $express->notify_party !!}</textarea>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="col-md-12">
                                <label for="">Notify Party 2</label>
                                <div class="form-group">
                                    <textarea readonly class="form-control">{!! $express->notify_party_2 !!}</textarea>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-12">
                                <label for="">Place of receipt</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly value="{{ $express->place_of_recpt }}">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Port of Loading</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly value="{{ $express->port_of_loading }}">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Vessel</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly value="{{ $express->vessel }}">
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-md-12">
                                <label for="">Voyage No.</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly value="{{ $express->voy_no }}">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Place of Delievery</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly
                                        value="{{ $express->place_of_delivery }}">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Item No.</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly value="{{ $express->item_no }}">
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
                                        value="{{ $express->container_no }}">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Seal No.</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly
                                        value="{{ $express->seal_no }}">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Marks</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly
                                        value="{{ $express->marks }}">
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
                                        value="{{ $express->numbers }}">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">No. of Packages</label>
                                <div class="form-group">
                                    <textarea type="text" class="form-control form-control-sm" readonly> {!! $express->number_of_pkg !!}</textarea>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="col-md-12">
                                <label for="">Description of Goods</label>
                                <div class="form-group">
                                    <textarea type="text" class="form-control form-control-sm" readonly> {!! $express->desc_of_good !!}</textarea>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-md-12">
                                <label for="">Gross Weight</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly
                                        value="{{ $express->gross_weight }}">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Measurments</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly value="{{ $express->measurments }}">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Total No. Of Packages</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly  value="{{ $express->total_no_of_pkg }}">
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-md-12">
                                <label for="">Shipped on Board Date</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly value="{{ $express->shipped_board_date }}">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Place of Issue</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly
                                        value="{{ $express->place_of_issue }}">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Date of Issue</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly
                                        value="{{ $express->date_of_issue }}">
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-md-12">
                                <label for="">BL No.</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly
                                        value="{{ $express->B_L_no }}">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Freight Prepaid</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly
                                        value="{{ $express->freight_prepaid }}">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Place of receipt 2</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly
                                        value="{{ $express->place_of_recpt_2 }}">
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <div class="col-md-12">
                                <label for="">Carrier</label>
                                <div class="form-group">
                                    <textarea class="form-control" readonly rows="3"> {!! $express->carrier !!} </textarea>
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

@extends('layouts.admin.app')
<title> All Data mass Shipping</title>
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
            <h1>View All Data mass Shipping</h1>
        </div>
        <div class="content-header-right">
            <a href="{{ route('mass.index') }}" class="btn btn-primary btn-sm">View All</a>
            <a href="javascript:;" onclick="window.print()" style="color:#ffffff" class="btn btn-sm btn-white mb-10px"><i
                    class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
        </div>
    </section>

    <section class="content">
        <div class="container" id="divToPrint">
            <div class="img text-center p-3 mb-5">
                <img src="{{ asset('public/assets/website/images/star_shipping.jpeg') }}" alt="Image" style="margin-bottom: 30px" />
            </div>
            <div class="row">
                <table width="100%">
                    <tr>
                        <td>
                            <div class="col-md-12">
                                <label for="">Shipper</label>
                                <div class="form-group">
                                    <textarea readonly class="form-control" rows="3">{!! $mass->shipper !!}</textarea>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Consignee</label>
                                <div class="form-group">
                                    <textarea readonly class="form-control" rows="3">{!! $mass->consignee !!}</textarea>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Notify Party</label>
                                <div class="form-group">
                                    <textarea readonly class="form-control" rows="3">{!! $mass->notify_party !!}</textarea>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="col-md-12">
                                <label for="">Notify Party 2</label>
                                <div class="form-group">
                                    <textarea readonly class="form-control">{!! $mass->notify_party_2 !!}</textarea>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="col-md-12">
                                <label for="">Delievery Agent</label>
                                <div class="form-group">
                                    <textarea readonly class="form-control">{!! $mass->delivery_agent !!}</textarea>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-md-12">
                                <label for="">Vessel and Voyage</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly value="{{ $mass->vessel }}" >
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Place of receipt</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly  value="{{ $mass->place_of_recpt }}" >
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Port of Loading</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly value="{{ $mass->port_of_loading }} " >
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-md-12">
                                <label for="">BL No.</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly value="{{ $mass->B_L_no }}" >
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Port of Discharge</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm"  readonly value="{{ $mass->port_of_discharge }}" >
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Place of Delievery</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly value="{{ $mass->place_of_delivery }}" >
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="col-md-6">
                                <label for="">Containers and Seal Marks and Numbers</label>
                                <div class="form-group">
                                    <textarea class="form-control" name="numbers" readonly >{!! $mass->numbers !!}</textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="">No. of Packages of Shipping units</label>
                                <div class="form-group">
                                    <textarea class="form-control" name="number_of_pkg" readonly>{!! $mass->number_of_pkg !!}</textarea>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <div class="col-md-6">
                                <label for="">Description of Goods & Packages</label>
                                <div class="form-group">
                                    <textarea class="form-control" name="desc_of_good" readonly >{!! $mass->desc_of_good !!}</textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="">Gross Weight</label>
                                <div class="form-group">
                                    <textarea class="form-control" name="gross_weight" readonly >{!! $mass->gross_weight !!}</textarea>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <div class="col-md-12">
                                <label for="">Measurement</label>
                                <div class="form-group">
                                    <textarea class="form-control" name="measurments" readonly >{!! $mass->measurments !!}</textarea>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <div class="col-md-6">
                                <label for="">Total No. Of Containers & Packages</label>
                                <div class="form-group">
                                    <input type="text" readonly class="form-control form-control-sm" value="{{ $mass->total_container_or_pkg }}" >
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="">Temperature Control Instructions</label>
                                <div class="form-group">
                                    <input type="text" readonly class="form-control form-control-sm" value="{{ $mass->temp_cont_isnt }}" >
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-md-12">
                                <label for="">Shipped on Board Date</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly value="{{ $mass->shipped_board_date }}">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Number of Original B/L</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly value="{{ $mass->no_of_orignal_B_L }}">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Payment Terms</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly  value="{{ $mass->payment_term }}">
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-md-12">
                                <label for="">Date of Issue of B/L</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly value="{{ $mass->date_of_issue }}">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Place of Issue of B/L</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly value="{{ $mass->place_of_issue }}">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Total Amount</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly value="{{ $mass->total_amount }}">
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <div class="col-md-12">
                                <label for="">Signed by Carrier</label>
                                <div class="form-group">
                                    <input class="form-control form-control-sm" type="text" readonly  value="{{ $mass->signed_carrier }}">
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

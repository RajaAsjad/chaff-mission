@extends('layouts.admin.app')
<title> All Data Six Star Logistics</title>
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
            <h1>View All Data Six Star Logistics</h1>
        </div>
        <div class="content-header-right">
            <a href="{{ route('six_star.index') }}" class="btn btn-primary btn-sm">View All</a>
            <a href="javascript:;" onclick="window.print()" style="color:#ffffff" class="btn btn-sm btn-white mb-10px"><i
                    class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
        </div>
    </section>

    <section class="content">
        <div class="container" id="divToPrint">
            <div class="img text-center p-3 mb-5">
                <img src="{{ asset('public/assets/website/images/starShipping.png') }}" height="150" alt="Image" style="margin-bottom: 30px" />
            </div>
            <div class="row">
                <table width="100%">
                    <tr>
                        <td>
                            <div class="col-md-12">
                                <label for="">Shipper</label>
                                <div class="form-group">
                                    <textarea readonly class="form-control" rows="3">{!! $sixStar->shipper !!}</textarea>
                                </div>
                            </div>
                        </td>
                        <td colspan="2">
                            <div class="col-md-12">
                                <label for="">Consignee</label>
                                <div class="form-group">
                                    <textarea readonly class="form-control" rows="3">{!! $sixStar->consignee !!}</textarea>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Notify Party</label>
                                <div class="form-group">
                                    <textarea readonly class="form-control" rows="3">{!! $sixStar->notify_party !!}</textarea>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div class="col-md-12">
                                <label for="">Notify Party 2</label>
                                <div class="form-group">
                                    <textarea readonly class="form-control">{!! $sixStar->notify_party_2 !!}</textarea>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div class="col-md-12">
                                <label for="">Delievery Agent</label>
                                <div class="form-group">
                                    <textarea class="form-control" readonly  name="delivery_agent" >{!! $sixStar->delivery_agent !!}</textarea>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                           <div class="col-md-12">
                               <label for="">Pre Carriage By</label>
                                <div class="form-group">
                                    <textarea class="form-control" rows="2" readonly >{!! $sixStar->pre_carriage_by !!}</textarea>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Place of Receipt</label>
                                <div class="form-group">
                                    <textarea class="form-control" rows="2"  readonly >{!! $sixStar->place_of_recpt !!}</textarea>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Freight</label>
                                <div class="form-group">
                                    <textarea class="form-control" rows="2" readonly >{!! $sixStar->freight !!}</textarea>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">BL Status</label>
                                <div class="form-group">
                                    <textarea class="form-control" rows="2" readonly>{!! $sixStar->BL_status !!}</textarea>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-md-12">
                                <label for="">Number of BL</label>
                                <div class="form-group">
                                    <textarea class="form-control" rows="2" readonly >{!! $sixStar->num_of_BL !!}</textarea>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Bill of Lading No</label>
                                <div class="form-group">
                                    <textarea class="form-control" rows="2" readonly >{!! $sixStar->bill_of_landing_no !!}</textarea>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Vessel</label>
                                <div class="form-group">
                                    <textarea class="form-control" rows="2" readonly >{!! $sixStar->vessel !!}</textarea>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Voyage</label>
                                <div class="form-group">
                                    <textarea class="form-control" rows="2" readonly >{!! $sixStar->voyage !!}</textarea>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-md-12">
                                <label for="">Port of Loading</label>
                                <div class="form-group">
                                    <textarea class="form-control" rows="2" readonly>{!! $sixStar->port_of_loading !!}</textarea>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Port of Discharge</label>
                                <div class="form-group">
                                    <textarea class="form-control" rows="2" readonly >{!! $sixStar->port_of_discharge !!}</textarea>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Final Place of Delievery</label>
                                <div class="form-group">
                                    <textarea class="form-control" rows="2" readonly >{!! $sixStar->place_of_delivery !!}</textarea>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <label for="">Date of Issue</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" readonly value="{{ $sixStar->date_of_issue }}">
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <div class="col-md-6">
                                <label for="">Containers and Seal Marks and Numbers</label>
                                <div class="form-group">
                                    <textarea class="form-control" readonly >{!! $sixStar->marks !!}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">No. of kind of Packages </label>
                                <div class="form-group">
                                    <textarea class="form-control" readonly >{!! $sixStar->kind_of_pkg !!}</textarea>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <div class="col-md-6">
                                <label for="">Description of Goods & Packages</label>
                                <div class="form-group">
                                    <textarea class="form-control" readonly >{!! $sixStar->desc_of_good !!}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">Gross Weight</label>
                                <div class="form-group">
                                    <textarea class="form-control" readonly >{!! $sixStar->gross_weight !!}</textarea>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <div class="col-md-12">
                                <label for="">Measurement</label>
                                <div class="form-group">
                                    <textarea class="form-control" readonly >{!! $sixStar->measurments !!}</textarea>
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

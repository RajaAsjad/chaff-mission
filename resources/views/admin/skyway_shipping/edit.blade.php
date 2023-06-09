
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('public/admin/assets/images/page') }}/{{ $home_page_data['header_favicon'] }}" type="image/png" sizes="16x16">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <title>Edit Skyway Shipping </title>

    <!-- Include the jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include the jQuery UI library -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>


</head>

<style>
    label{
        font-weight:bold;
    }
</style>
<body>
    <div class="container ">
        <div class="buttons text-left p-3">
            <a href="{{ route('skyway.index') }}"><button class="btn btn-outline-danger"> <i class="fa fa-arrow-left"></i>  Go Back</button></a>
        </div>
        <div class="img text-center p-3">
            <img src="{{ asset('public/assets/website/images/skyshipping.png') }}" height="100"  alt="Image" />
        </div>
        <form action="{{route('skyway.update', $skyway->id)}}" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
            @csrf
            {{ method_field('PATCH') }}
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="">Shipper</label>
                    <textarea class="form-control" placeholder="Shipper" name="shipper" rows="3" required>{!! $skyway->shipper !!}</textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="">Consignee</label>
                    <textarea class="form-control" placeholder="Consignee" name="consignee" rows="3" required>{!! $skyway->consignee !!}</textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Notify Party</label>
                        <textarea class="form-control" placeholder="Notify Party" name="notify_party" rows="3">{!! $skyway->notify_party !!}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Notify Party 2</label>
                        <textarea class="form-control" placeholder="Notify Party 2" name="notify_party_2" >{!! $skyway->notify_party_2 !!}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Pre Carriage by</label>
                        <input type="text" class="form-control form-control-sm"  name="pre_carriage_by" value="{{ $skyway->pre_carriage_by }} " >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Place of receipt</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Place of receipt" name="place_of_recpt" value="{{ $skyway->place_of_recpt }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Vessel</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Vessel" name="vessel" value="{{ $skyway->vessel }}" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Voyage No.</label>
                        <input type="text" class="form-control form-control-sm"  name="voy_no" value="{{ $skyway->voy_no }}" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">B/L No.</label>
                        <input type="text" class="form-control form-control-sm" placeholder="B/L No." name="B_L_no"  value="{{ $skyway->B_L_no }}" required >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Port of Loading</label>
                        <input type="text" class="form-control form-control-sm"  name="port_of_loading" value="{{ $skyway->port_of_loading }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Port of Discharge</label>
                        <input type="text" class="form-control form-control-sm"  name="port_of_discharge" value="{{ $skyway->port_of_discharge }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Place of Delievery</label>
                        <input type="text" class="form-control form-control-sm"  name="place_of_delivery" value="{{ $skyway->place_of_delivery }}" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Container No.</label>
                        <input type="text" class="form-control form-control-sm"  name="container_no" value="{{ $skyway->container_no }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Seal No.</label>
                        <input type="text" class="form-control form-control-sm" name="seal_no" value="{{ $skyway->seal_no }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="">Marks</label>
                        <input type="text" class="form-control form-control-sm" name="marks" value="{{ $skyway->marks }}" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Numbers</label>
                        <input type="text" class="form-control form-control-sm" name="numbers" value="{{ $skyway->numbers }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">No. of Packages</label>
                        <textarea type="text" class="form-control form-control-sm" name="number_of_pkg" >{!! $skyway->number_of_pkg !!}</textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Description of Goods</label>
                        <textarea type="text" class="form-control form-control-sm" name="desc_of_good" >{!! $skyway->desc_of_good !!} </textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Gross Weight (Kilos)</label>
                        <input type="text" class="form-control form-control-sm" name="gross_weight" value="{{ $skyway->gross_weight }}" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Measurments</label>
                        <input type="text" class="form-control form-control-sm" name="measurments" value="{{ $skyway->measurments }}" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                    <label for="">Kind of Packages</label>
                    <textarea class="form-control" name="kind_of_pkg" rows="2">{!! $skyway->kind_of_pkg !!}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">No of Sequence of Original B/L</label>
                        <input type="text" class="form-control form-control-sm" name="no_of_orignal_B_L" value="{{ $skyway->no_of_orignal_B_L }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Place of Issue</label>
                        <input type="text" class="form-control form-control-sm" name="place_of_issue" value="{{ $skyway->place_of_issue }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Date of Issue</label>
                        <input type="text" id="datepicker" class="form-control form-control-sm" name="date_of_issue" value="{!! date('m/d/Y', strtotime($skyway->date_of_issue)) !!}" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">CARRIER's RECEIPT</label>
                        <input type="text" class="form-control form-control-sm" name="carrier_receipt" value="{{ $skyway->carrier_receipt }}" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">SIGNED on behalf of the carrier</label>
                        <input type="text" class="form-control form-control-sm" name="signed_carrier" value="{{ $skyway->signed_carrier }}" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                    <label for="">FREIGHT PREPAID</label>
                    <textarea class="form-control" name="freight_prepaid" rows="2">{!! $skyway->freight_prepaid !!}</textarea>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="col-sm-2 control-label">Status</label>
                <div class="col-sm-12">
                    <select name="status" class="form-control" id="">
                        <option value="1" {{ $skyway->status==1?'selected':'' }}>Active</option>
                        <option value="0" {{ $skyway->status==0?'selected':'' }}>In-Active</option>
                    </select>
                </div>
            </div>
            <div class="row mt-5 mb-5">
                <div class="col-md-4">

                </div>

                <div class="col-md-4">
                    <input type="submit" class="btn btn-warning btn-block" value="Update" name="Update">
                </div>
                <div class="col-md-4">

                </div>
            </div>

        </div>
    </form>
    </body>
</html>
<script>
    $(document).ready(function() {
      $("#datepicker").datepicker();
    });
</script>


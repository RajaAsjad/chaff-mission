
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
    <title>Edit Paragon Logistics</title>

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
            <a href="{{ route('paragon.index') }}"><button class="btn btn-outline-danger"> <i class="fa fa-arrow-left"></i>  Go Back</button></a>
        </div>
        <div class="img text-center p-3">
            <img src="{{ asset('public/assets/website/images/paragon.jpg') }}" alt="Image" />
        </div>
        <form action="{{route('paragon.update', $paragons->id)}}" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
            @csrf
            {{ method_field('PATCH') }}
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="">Shipper</label>
                    <textarea class="form-control" placeholder="Shipper" name="shipper" rows="3" required>{!! $paragons->shipper !!}</textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="">Consignee</label>
                    <textarea class="form-control" placeholder="Consignee" name="consignee" rows="3" required>{!! $paragons->consignee !!}</textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Notify Party</label>
                        <textarea class="form-control" placeholder="Notify Party" name="notify_party" rows="3">{!! $paragons->notify_party !!}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Notify Party 2" name="notify_party_2" >{!! $paragons->notify_party_2 !!}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Pre Carriage by</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Pre Carriage by" name="pre_carriage_by" value="{{ $paragons->pre_carriage_by }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Place of receipt</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Place of receipt" name="place_of_recpt" value="{{ $paragons->place_of_recpt }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Vessel</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Vessel" name="vessel" value="{{ $paragons->vessel }}" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Voy No.</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Voy No." name="voy_no" value="{{ $paragons->voy_no }}" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">B/L No.</label>
                        <input type="text" class="form-control form-control-sm" placeholder="B/L No." name="B_L_no" value="{{ $paragons->B_L_no }}" required >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Port of Loading</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Port of Loading" name="port_of_loading" value="{{ $paragons->port_of_loading }} " >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Port of Discharge</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Port of Discharge" name="port_of_discharge" value="{{ $paragons->port_of_discharge }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Place of Delievery</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Place of Delievery" name="place_of_delivery" value="{{ $paragons->place_of_delivery }}" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Final Destination (Merchant's reference only)</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Final Destination (Merchant's reference only)" name="final_destination" value="{{ $paragons->final_destination }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Container No</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Container No" name="container_no" value="{{ $paragons->container_no }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Seal No.</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Seal No." name="seal_no" value="{{ $paragons->seal_no }}" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Marks</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Marks" name="marks" value="{{ $paragons->marks }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Numbers</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Numbers" name="numbers" value="{{ $paragons->numbers }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">No. of Container or Pkgs</label>
                        <textarea type="text" class="form-control form-control-sm" placeholder="No. of Container or Pkgs " name="container_or_pkg" >{!! $paragons->container_or_pkg !!}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Gross Weight</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Gross Weight " name="gross_weight" value="{{ $paragons->gross_weight }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Measurments</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Measurments" name="measurments"value="{{ $paragons->measurments }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Kind of Packages</label>
                        <textarea type="text" class="form-control form-control-sm" placeholder="Kind of Packages" name="kind_of_pkg" >{!! $paragons->kind_of_pkg !!}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                    <label for="">Description of Goods</label>
                    <textarea class="form-control" placeholder="Description of Goods" id="dog" name="desc_of_good" rows="3" >{!! $paragons->desc_of_good !!}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Total Number of Containers or other packages or (in Word)</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Total Number of Containers or other packages or (in Word)"  name="total_container_or_pkg" value="{{$paragons->total_container_or_pkg}}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Merchant's Declared Value (See Clauses 18 & 23)</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Merchant's Declared Value (See Clauses 18 & 23)" name="merchant_declared_value" value="{{$paragons->merchant_declared_value}}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Freight and Charges</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Freight and Charges" name="freight_charges" value="{{ $paragons->freight_charges }}" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Revenue Tons</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Revenue Tons" name="revenue_tons" value="{{ $paragons->revenue_tons }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="">Rate</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Rate" name="rate" value="{{ $paragons->rate }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Per</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Per" name="per" value="{{ $paragons->per }}" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Prepaid</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Prepaid" name="prepaid" value="{{ $paragons->prepaid }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Collect</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Collect" name="collect" value="{{ $paragons->collect }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Exchange Rate</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Exchange Rate" name="exchange_rate" value="{{ $paragons->exchange_rate }}" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Prepaid</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Prepaid" name="prepaid_2" value="{{ $paragons->prepaid_2 }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Payable at</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Payable at" name="payable_at" value="{{ $paragons->payable_at }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Total Prepaid in local Currency</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Total Prepaid in local Currency" name="total_prepaid_local_currency" value="{{ $paragons->total_prepaid_local_currency }}" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">No. of Original B(s)/L</label>
                        <input type="text" class="form-control form-control-sm" placeholder="No. of Original B(s)/L" name="no_of_orignal_B_L" value="{{ $paragons->no_of_orignal_B_L }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Place of issue</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Place of issue" name="place_of_issue" value="{{ $paragons->place_of_issue }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Date of issue</label>
                        <input type="text" id="datepicker" class="form-control form-control-sm" name="date_of_issue" value="{!! date('m/d/Y', strtotime($paragons->date_of_issue)) !!}" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">As Carrier</label>
                        <input type="text" class="form-control form-control-sm" placeholder="As Carrier" name="as_carrier" value="{{ $paragons->as_carrier }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="">Freight Prepaid</label>
                    <div class="form-group">
                        <input class="form-control form-control-sm" type="text" name="freight_prepaid" placeholder="Freight Prepaid" value="{{ $paragons->freight_prepaid }}" >
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="col-sm-2 control-label">Status</label>
                <div class="col-sm-12">
                    <select name="status" class="form-control" id="">
                        <option value="1" {{ $paragons->status==1?'selected':'' }}>Active</option>
                        <option value="0" {{ $paragons->status==0?'selected':'' }}>In-Active</option>
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

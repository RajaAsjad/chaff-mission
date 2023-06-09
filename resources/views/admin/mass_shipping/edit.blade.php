
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
    <title>Edit Mass Shipping </title>

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
            <a href="{{ route('mass.index') }}"><button class="btn btn-outline-danger"> <i class="fa fa-arrow-left"></i>  Go Back</button></a>
        </div>
        <div class="img text-center p-3">
            <img src="{{ asset('public/assets/website/images/star_shipping.jpeg') }}" alt="Image" />
        </div>
        <form action="{{route('mass.update', $mass->id)}}" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
            @csrf
            {{ method_field('PATCH') }}
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="">Shipper</label>
                    <textarea class="form-control" placeholder="Shipper" name="shipper" rows="3" required>{!! $mass->shipper !!}</textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="">Consignee</label>
                    <textarea class="form-control" placeholder="Consignee" name="consignee" rows="3" required>{!! $mass->consignee !!}</textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Notify Party</label>
                        <textarea class="form-control" placeholder="Notify Party" name="notify_party" rows="3">{!! $mass->notify_party !!}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Notify Party 2</label>
                        <textarea class="form-control" placeholder="Notify Party 2" name="notify_party_2" >{!! $mass->notify_party_2 !!}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Delievery Agent</label>
                        <textarea class="form-control" name="delivery_agent" >{!! $mass->delivery_agent !!}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Vessel and Voyage</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Vessel" name="vessel" value="{{ $mass->vessel }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Place of receipt</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Place of receipt" name="place_of_recpt" value="{{ $mass->place_of_recpt }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Port of Loading</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Port of Loading" name="port_of_loading" value="{{ $mass->port_of_loading }} " >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">BL No.</label>
                        <input type="text" class="form-control form-control-sm" name="B_L_no" value="{{ $mass->B_L_no }}" required >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Port of Discharge</label>
                        <input type="text" class="form-control form-control-sm"  name="port_of_discharge" value="{{ $mass->port_of_discharge }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Place of Delievery</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Place of Delievery" name="place_of_delivery" value="{{ $mass->place_of_delivery }}" >
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Containers and Seal Marks and Numbers</label>
                        <textarea class="form-control" name="numbers" >{!! $mass->numbers !!}</textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label for="">No. of Packages of Shipping units</label>
                        <textarea class="form-control" name="number_of_pkg" >{!! $mass->number_of_pkg !!}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Description of Goods & Packages</label>
                        <textarea class="form-control" name="desc_of_good" >{!! $mass->desc_of_good !!}</textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label for="">Gross Weight</label>
                        <textarea class="form-control" name="gross_weight" >{!! $mass->gross_weight !!}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Measurement</label>
                        <textarea class="form-control" name="measurments" >{!! $mass->measurments !!}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Total No. Of Containers & Packages</label>
                        <input type="text" class="form-control form-control-sm" name="total_container_or_pkg" value="{{ $mass->total_container_or_pkg }}" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Temperature Control Instructions</label>
                        <input type="text" class="form-control form-control-sm" name="temp_cont_isnt" value="{{ $mass->temp_cont_isnt }}" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Shipped on Board Date</label>
                        <input type="text" id="datepicker" class="form-control form-control-sm" name="shipped_board_date" value="{!! date('m/d/Y', strtotime($mass->shipped_board_date)) !!}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Number of Original B/L</label>
                        <input type="text" class="form-control form-control-sm" name="no_of_orignal_B_L" value="{{ $mass->no_of_orignal_B_L }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Payment Terms</label>
                        <input type="text" class="form-control form-control-sm" name="payment_term" value="{{ $mass->payment_term }}" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Date of Issue of B/L</label>
                        <input type="text" id="datepicker2" class="form-control form-control-sm" name="date_of_issue" value="{!! date('m/d/Y', strtotime($mass->date_of_issue)) !!}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Place of Issue of B/L</label>
                        <input type="text" class="form-control form-control-sm" name="place_of_issue" value="{{ $mass->place_of_issue }}" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Total Amount</label>
                        <input class="form-control form-control-sm" type="text" name="total_amount" value="{{ $mass->total_amount }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Signed by Carrier</label>
                        <input class="form-control form-control-sm" type="text" name="signed_carrier" value="{{ $mass->signed_carrier }}">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="col-sm-2 control-label">Status</label>
                <div class="col-sm-12">
                    <select name="status" class="form-control" id="">
                        <option value="1" {{ $mass->status==1?'selected':'' }}>Active</option>
                        <option value="0" {{ $mass->status==0?'selected':'' }}>In-Active</option>
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
<script>
    $(document).ready(function() {
      $("#datepicker2").datepicker();
    });
</script>

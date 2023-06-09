
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
    <title>Edit Six Star Logistics</title>

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
            <a href="{{ route('six_star.index') }}"><button class="btn btn-outline-danger"> <i class="fa fa-arrow-left"></i>  Go Back</button></a>
        </div>
        <div class="img text-center p-3">
            <img src="{{ asset('public/assets/website/images/starShipping.png') }}" height="150" alt="Image" />
        </div>
        <form action="{{route('six_star.update', $sixStar->id)}}" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
            @csrf
            {{ method_field('PATCH') }}
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="">Shipper</label>
                    <textarea class="form-control" name="shipper" rows="3" required>{!! $sixStar->shipper !!}</textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="">Consignee</label>
                    <textarea class="form-control"  name="consignee" rows="3" required>{!! $sixStar->consignee !!}</textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Notify Party</label>
                        <textarea class="form-control"  name="notify_party" rows="3">{!! $sixStar->notify_party !!}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Notify Party 2</label>
                        <textarea class="form-control" name="notify_party_2" >{!! $sixStar->notify_party_2 !!}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Delievery Agent</label>
                        <textarea class="form-control"  name="delivery_agent" >{!! $sixStar->delivery_agent !!}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Pre Carriage By</label>
                        <textarea class="form-control" rows="1" name="pre_carriage_by">{!! $sixStar->pre_carriage_by !!}</textarea>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Place of Receipt</label>
                        <textarea class="form-control" rows="1"  name="place_of_recpt">{!! $sixStar->place_of_recpt !!}</textarea>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Freight</label>
                        <textarea class="form-control" rows="1"  name="freight">{!! $sixStar->freight !!}</textarea>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">BL Status</label>
                        <textarea class="form-control" rows="1"  name="BL_status">{!! $sixStar->BL_status !!}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Number of BL</label>
                        <textarea class="form-control" rows="1"  name="num_of_BL" required>{!! $sixStar->num_of_BL !!}</textarea>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Bill of Lading No</label>
                        <textarea class="form-control" rows="1"  name="bill_of_landing_no">{!! $sixStar->bill_of_landing_no !!}</textarea>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Vessel</label>
                        <textarea class="form-control" rows="1"  name="vessel">{!! $sixStar->vessel !!}</textarea>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Voyage</label>
                        <textarea class="form-control" rows="1"  name="voyage">{!! $sixStar->voyage !!}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Port of Loading</label>
                        <textarea class="form-control" rows="1" name="port_of_loading">{!! $sixStar->port_of_loading !!}</textarea>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Port of Discharge</label>
                        <textarea class="form-control" rows="1"  name="port_of_discharge">{!! $sixStar->port_of_discharge !!}</textarea>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Final Place of Delievery</label>
                        <textarea class="form-control" rows="1" name="place_of_delivery">{!! $sixStar->place_of_delivery !!}</textarea>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Place of Date of issue</label>
                        <input type="text" id="datepicker" class="form-control form-control-sm" name="date_of_issue" value="{!! date('m/d/Y', strtotime($sixStar->date_of_issue)) !!}" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Containers and Seal Marks and Numbers</label>
                        <textarea class="form-control" name="marks" >{!! $sixStar->marks !!}</textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label for="">No. of kind of Packages </label>
                        <textarea class="form-control" name="kind_of_pkg" >{!! $sixStar->kind_of_pkg !!}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Description of Goods & Packages</label>
                        <textarea class="form-control" name="desc_of_good" >{!! $sixStar->desc_of_good !!}</textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label for="">Gross Weight</label>
                        <textarea class="form-control" name="gross_weight" >{!! $sixStar->gross_weight !!}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Measurement</label>
                        <textarea class="form-control" name="measurments" >{!! $sixStar->measurments !!}</textarea>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="col-sm-2 control-label">Status</label>
                <div class="col-sm-12">
                    <select name="status" class="form-control" id="">
                        <option value="1" {{ $sixStar->status==1?'selected':'' }}>Active</option>
                        <option value="0" {{ $sixStar->status==0?'selected':'' }}>In-Active</option>
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

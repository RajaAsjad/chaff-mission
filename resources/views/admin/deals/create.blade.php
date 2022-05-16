@extends('layouts.admin.app')
@section('title', $page_title)
@section('content')
<section class="content-header">
	<div class="content-header-left">
		<h1>Add Deal</h1>
	</div>
	<div class="content-header-right">
		<a href="{{ route('deals.index') }}" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route('deals.store') }}" id="regform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
				@csrf
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="category" class="col-sm-2 control-label">Category<span style="color: red">*</span></label>
							<div class="col-sm-9">
								<select class="form-control custom-select select2" name="category" id="category">
									<option selected>Select Category</option>
									@foreach ($categories as $category)
										<option value="{{ $category->id }}">{{ $category->name }}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="deal_product" class="col-sm-2 control-label">Product<span style="color: red">*</span></label>
							<div class="col-sm-9">
								<select class="form-control custom-select select2" name="deal_product" id="deal_product">
									<option selected>Select Product</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Deal Name <span style='color:red'>*</span></label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="deal_name" value="" placeholder="Enter deal name">
								<span style="color: red">{{ $errors->first('deal_name') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Price  <span style='color:red'>*</span></label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="price" value="" placeholder="Enter Price">
								<span style="color: red">{{ $errors->first('price') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Date  <span style='color:red'>*</span></label>
							<div class="col-sm-9" style="display:flex;">
							<input type="text" class="start-date form-control" value="" name="start_date">
							<span class="input-group-addon" style="width: 40px;">to</span>
							<input type="text" class="end-date form-control" value=""  name="end_date">
								<span style="color: red">{{ $errors->first('date') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left">Submit</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
@endsection
@push('js')
<script>

	$(document).on('change', '#category', function(){
		var category= $(this).val();

		$.ajax({
        url:"{{ route('getproducts') }}",
        type: 'GET',
        data: {
        "_token": "{{ csrf_token() }}",
        "category": category
        },
        success: function(response){
			console.log(response);
            var html = '';
			html += "<option selected>Select Product</option>";
			$.each(response, function(key, value) {
				html += "<option value=" + value.id + ">" + value.name + "</option>";
			});
			$('#deal_product').html(html);
        }
    });
	
	});


	$(document).ready(function() {
		$("#regform").validate({
			rules: {
				name: "required"
			}
		});
	});


	$('.start-date').datepicker({
  templates: {
    leftArrow: '<i class="fa fa-chevron-left"></i>',
    rightArrow: '<i class="fa fa-chevron-right"></i>'
  },
  format: "dd/mm/yyyy",
  startDate: new Date(),
  keyboardNavigation: false,
  autoclose: true,
  todayHighlight: true,
  disableTouchKeyboard: true,
  orientation: "bottom auto"
});

$('.end-date').datepicker({
  templates: {
    leftArrow: '<i class="fa fa-chevron-left"></i>',
    rightArrow: '<i class="fa fa-chevron-right"></i>'
  },
  format: "dd/mm/yyyy",
  startDate: moment().add(1, 'days').toDate(),
  keyboardNavigation: false,
  autoclose: true,
  todayHighlight: true,
  disableTouchKeyboard: true,
  orientation: "bottom auto"

});


$('.start-date').datepicker().on("changeDate", function () {
  var startDate = $('.start-date').datepicker('getDate');
  var oneDayFromStartDate = moment(startDate).add(1, 'days').toDate();
  $('.end-date').datepicker('setStartDate', oneDayFromStartDate);
  $('.end-date').datepicker('setDate', oneDayFromStartDate);
});

$('.end-date').datepicker().on("show", function () {
  var startDate = $('.start-date').datepicker('getDate');
  $('.day.disabled').filter(function (index) {
    return $(this).text() === moment(startDate).format('D');
  }).addClass('active');
});
</script>
@endpush

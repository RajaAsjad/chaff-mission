@extends('layouts.admin.app')
@section('title', $page_title)
@section('content')

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Deal</h1>
	</div>
	<div class="content-header-right">
		<a href="{{ route('deals.index') }}" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route('deals.update', $deal->id) }}" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
				@csrf
				{{ method_field('PATCH') }}
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="category" class="col-sm-2 control-label">Category<span style="color: red">*</span></label>
							<div class="col-sm-9">
								<select class="form-control custom-select select2" name="category" id="category">
									<option selected>Select Category</option>
									@foreach ($categories as $category)
										<option value="{{ $category->id }}" {{ $deal->category==$category->id?'selected':'' }}>{{ $category->name }}</option>
									@endforeach
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label for="deal_product" class="col-sm-2 control-label">Product<span style="color: red">*</span></label>
							<div class="col-sm-9">
								<select class="form-control custom-select select2" name="deal_product" id="deal_product">
									<option selected>Select Product</option>
									@foreach ($products as $product)
										<option value="{{ $product->id }}" {{ $product->id==$deal->deal_product?'selected':'' }}>{{ $product->name }}</option>
									@endforeach
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Deal Name <span style="color:red">*</span></label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="deal_name" value="{{$deal->deal_name}}">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Price<span style="color:red">*</span></label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="price" value="{{$deal->price}}">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Date <span style='color:red'>*</span></label>
							<div class="col-sm-9" style="display:flex;">
							<input type="text" class="start-date form-control" value="{{$deal->start_date}}" name="start_date">
							<span class="input-group-addon" style="width: 40px;">to</span>
							<input type="text" class="end-date form-control" value="{{$deal->end_date}}"  name="end_date">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Status</label>
							<div class="col-sm-9">
								<select name="status" class="form-control" id="">
									<option value="1" {{ $deal->status==1?'selected':'' }}>Active</option>
									<option value="0" {{ $deal->status==0?'selected':'' }}>In-Active</option>
								</select>
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
			"category": category
        	},
			success: function(response){
				// console.log(response);
				var html = '';
				html += "<option selected>Select Product</option>";
				$.each(response, function(key, value) {
					html += "<option value=" + value.id + ">" + value.name + "</option>";
				});
				$('#deal_product').html(html);
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

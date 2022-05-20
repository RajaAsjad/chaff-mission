@extends('layouts.admin.app')
@section('title', $page_title)
@section('content')
<input type="hidden" id="page_url" value="{{ route('booking.index') }}">
<section class="content-header">
	<div class="content-header-left">
		<h1>{{ $page_title }}</h1>
	</div>
	{{-- <div class="content-header-right">
		<a href="{{ route('blog.create') }}" class="btn btn-primary btn-sm">Add blog</a>
	</div> --}}
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			@if (session('status'))
				<div class="callout callout-success">
					{{ session('status') }}
				</div>
			@endif

			<div class="box box-info">
				<div class="box-body">
                    <div class="row">
                        <div class="col-sm-1">Search:</div>
                        <div class="d-flex col-sm-6">
                            <input type="text" id="search" class="form-control" placeholder="Search">
                        </div>
                        <div class="d-flex col-sm-5">
                            <select name="" id="status" class="form-control status" style="margin-bottom:5px">
                                <option value="All" selected>Search by status</option>
                                <option value="1">Confirmed</option>
                                <option value="2">Pending</option>
                                <option value="3">Cancelled</option>
                            </select>
                        </div>
                    </div>
					<table id="" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>SL</th>
								<th class="col-sm-1">Booking No#</th>
								<th class="col-sm-1">Category</th>
								<th class="col-sm-1">Product</th>
								<th class="col-sm-1">Customer</th>
								<th class="col-sm-1">Phone</th>
								<th class="col-sm-1">Trip Date</th>
								<th class="col-sm-1">Duration</th>
								<th class="col-sm-1">Status</th>
								<th class="col-sm-2">Created at</th>
								<th class="col-sm-2">Action</th>
							</tr>
						</thead>
						<tbody id="body">
							@foreach($models as $key=>$model)
								<tr id="id-{{ $model->slug }}">
									<td>{{ $models->firstItem()+$key }}.</td>
									<td>{{ $model->booking_number }}</td>
									<td>{{ isset($model->hasProduct->hasCategory)?$model->hasProduct->hasCategory->name:'--' }}</td>
									<td>{{ isset($model->hasProduct)?$model->hasProduct->name:'--' }}</td>
									<td>{{ isset($model->hasCustomer)?$model->hasCustomer->name:'--' }}</td>
									<td>{{ $model->hasCustomer->phone??'--' }}</td>
									<td><span class="badge badge-info">{{ date('d, F-y', strtotime($model->trip_start_date)) }}</span> - <span class="badge badge-info">{{ date('d, F-y', strtotime($model->trip_end_date)) }}</span></td>
									<td><span class="badge badge-info">{{ $model->total_days }} - Days</span></td>
									<td>
										@if($model->status==0)
											<span class="badge badge-info">Pending</span>
										@elseif($model->status==1)
											<span class="badge badge-primary">Confirmed</span>
										@elseif($model->status==3)
											<span class="badge badge-primary">Cancelled</span>
										@endif
									</td>
									<td><span class="badge badge-info">{{ date('d, F-y H:i A', strtotime($model->created_at)) }}</span></td>
									<td>
										<button class="btn btn-warning btn-xs booking-status-btn" data-booking-status="{{ $model->status }}"><i class="fa fa-tasks"></i> Status</button>
										<a href="{{ route('booking.show', $model->booking_number) }}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> View</a>
                                        <a href="{{ route('booking.invoice', $model->booking_number) }}" class="btn btn-primary btn-xs"><i class="fa fa-file"></i> Invoice</a>
									</td>
								</tr>
							@endforeach
                            <tr>
                                <td colspan="11">
									Displying {{$models->firstItem()}} to {{$models->lastItem()}} of {{$models->total()}} records
                                    <div class="d-flex justify-content-center">
                                        {!! $models->links('pagination::bootstrap-4') !!}
                                    </div>
                                </td>
                            </tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="booking-status-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-sm" role="document" style="width:40%!important;">
			<div class="modal-content">
				<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-tasks"></i> Status</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>
				<div class="modal-body">
					<form action="">
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label for="booking-status">Booking Status</label>
									<select name="booking_status" id="booking-status" class="form-control">
										<option value="" selected>Select booking status</option>
										<option value="1">Confirmed</option>
										<option value="2">Pending</option>
										<option value="3">Cancel</option>
									</select>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@push('js')
	<script>
		$(document).on('click', '.booking-status-btn', function(){
			var status = $(this).attr('data-booking-status');
			$('#booking-status-modal').modal('show');
		});
	</script>
@endpush

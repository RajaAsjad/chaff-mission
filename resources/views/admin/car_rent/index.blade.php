@extends('layouts.admin.app')
@section('title', $page_title)
@section('content')
<input type="hidden" id="page_url" value="{{ route('car_rent.index') }}">
<section class="content-header">
	<div class="content-header-left">
		<h1>All Car Rent</h1>
	</div>
	@can('about-create')
	<div class="content-header-right">
		<a href="{{ route('car_rent.create') }}" class="btn btn-primary btn-sm">Add Car Rent</a>
	</div>
	@endcan
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
                                <option value="1">Active</option>
                                <option value="2">In-Active</option>
                            </select>
                        </div>
                    </div>
					<table id="" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>SL</th>
								<th>Image</th>
								<th>Heading</th>
								<th>Description</th>
								<th>Status</th>
								<th>Created by</th>
								<th width="140">Action</th>
							</tr>
						</thead>
						<tbody id="body">
							@foreach($car_rents as $key=>$car_rent)
								<tr id="id-{{ $car_rent->slug }}">
									<td>{{ $car_rents->firstItem()+$key }}.</td>
                                    <td>
										@if($car_rent->image)
											<img src="{{ asset('public/admin/assets/images/car_rent/'.$car_rent->image) }}" alt="" style="width:60px;">
										@else
											<img src="{{ asset('public/admin/assets/images/default.jpg') }}" style="width:60px;">
										@endif
									</td>
									<td>{{($car_rent->heading)}}</td>
									<td>{!! \Illuminate\Support\Str::limit($car_rent->description , 60) !!}</td>
									<td>
										@if($car_rent->status)
											<span class="badge badge-success">Active</span>
										@else
											<span class="badge badge-danger">In-Active</span>
										@endif
									</td>
                                    <td>{{isset($car_rent->hasCreatedBy)?$car_rent->hasCreatedBy->name:'N/A'}}</td>
									<td width="250px">
									@can('car_rent-edit')
										<a href="{{route('car_rent.edit', $car_rent->slug)}}" data-toggle="tooltip" data-placement="top" title="Edit Car Rent" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
									@endcan
									@can('car_rent-delete')
										<button class="btn btn-danger btn-xs delete" data-slug="{{ $car_rent->slug }}" data-del-url="{{ url('car_rent', $car_rent->slug) }}"><i class="fa fa-trash"></i> Delete</button>
									@endcan
									</td>
								</tr>
							@endforeach
                            <tr>
                                <td colspan="6">
                                    <div class="d-flex justify-content-center">
                                        {!! $car_rents->links('pagination::bootstrap-4') !!}
                                    </div>
                                </td>
                            </tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@push('js')
@endpush

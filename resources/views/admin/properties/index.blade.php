@extends('layouts.admin.app')
@section('title', $page_title)
@section('content')
<input type="hidden" id="page_url" value="{{ route('property.index') }}">
<section class="content-header">
	<div class="content-header-left">
		<h1>All Properties</h1>
	</div>
	@can('property-list')
	<div class="content-header-right">
		<a href="{{ route('property.create') }}" class="btn btn-primary btn-sm">Add Properties</a>
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
								<th>Property Name</th>
								<th>Description</th>
								<th>Room</th>
								<th>Bed</th>
								<th>Bathroom</th>
								<th>Price</th>
								<th>Status</th>
								<th>Created by</th>
								<th width="140">Action</th>
							</tr>
						</thead>
						<tbody id="body">
							@foreach($models as $key=>$model)
								<tr id="id-{{ $model->slug }}">
									<td>{{ $models->firstItem()+$key }}.</td>
                                    <td>
										@if($model->image)
											<img src="{{ asset('public/admin/assets/images/properties/'.$model->image) }}" alt="" style="width:60px;">
										@else
											<img src="{{ asset('public/admin/assets/images/default.jpg') }}" style="width:60px;">
										@endif
									</td>
									<td>{{($model->name)}}</td>
									<td>{!!\Illuminate\Support\Str::limit($model->description,60)!!}</td>
									<td>{{($model->room)}}</td>
									<td>{{($model->bed)}}</td>
									<td>{{($model->bathroom)}}</td>
									<td>{{($model->price)}}</td>
									<td>
										@if($model->status)
											<span class="badge badge-success">Active</span>
										@else
											<span class="badge badge-danger">In-Active</span>
										@endif
									</td>
                                    <td>{{isset($model->hasCreatedBy)?$model->hasCreatedBy->name:'N/A'}}</td>
									<td width="250px">
										@can('property-edit')
											<a href="{{route('property.edit', $model->slug)}}" data-toggle="tooltip" data-placement="top" title="Edit properties" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
										@endcan
										@can('property-delete')
											<button class="btn btn-danger btn-xs delete" data-slug="{{ $model->slug }}" data-del-url="{{ url('property', $model->slug) }}"><i class="fa fa-trash"></i> Delete</button>
										@endcan
									</td>
								</tr>
							@endforeach
                            <tr>
                                <td colspan="6">
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
</section>
@endsection

@push('js')
@endpush

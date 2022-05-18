@extends('layouts.admin.app')
@section('title', $page_title)
@section('content')
<input type="hidden" id="page_url" value="{{ route('how_to_rent.index') }}">
<section class="content-header">
	<div class="content-header-left">
		<h1>{{ $page_title }}</h1>
	</div>
	@can('about-create')
	<div class="content-header-right">
		<a href="{{ route('how_to_rent.create') }}" class="btn btn-primary btn-sm">Add New How to rent</a>
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
								<th>Created by</th>
								<th>Status</th>
								<th width="140">Action</th>
							</tr>
						</thead>
						<tbody id="body">
							@foreach($how_to_rents as $key=>$how_to_rent)
								<tr id="id-{{ $how_to_rent->slug }}">
									<td>{{ $how_to_rents->firstItem()+$key }}.</td>
                                    <td>
										@if($how_to_rent->image)
											<img src="{{ asset('public/admin/assets/images/how_to_rents/'.$how_to_rent->image) }}" alt="" style="width:60px;">
										@else
											<img src="{{ asset('public/admin/assets/images/default.jpg') }}" style="width:60px;">
										@endif
									</td>
									<td>{{($how_to_rent->heading)}}</td>
									<td>{!! \Illuminate\Support\Str::limit($how_to_rent->description , 60) !!}</td>
									<td>{{isset($how_to_rent->hasCreatedBy)?$how_to_rent->hasCreatedBy->name:'N/A'}}</td>
									<td>
										@if($how_to_rent->status)
											<span class="badge badge-success">Active</span>
										@else
											<span class="badge badge-danger">In-Active</span>
										@endif
									</td>
									<td width="250px">
										<a href="{{route('how_to_rent.edit', $how_to_rent->slug)}}" data-toggle="tooltip" data-placement="top" title="Edit Car Rent" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
										<button class="btn btn-danger btn-xs delete" data-slug="{{ $how_to_rent->slug }}" data-del-url="{{ url('how_to_rent', $how_to_rent->slug) }}"><i class="fa fa-trash"></i> Delete</button>
									</td>
							</tr>
							@endforeach
                            <tr>
                                <td colspan="6">
                                    <div class="d-flex justify-content-center">
                                        {!! $how_to_rents->links('pagination::bootstrap-4') !!}
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

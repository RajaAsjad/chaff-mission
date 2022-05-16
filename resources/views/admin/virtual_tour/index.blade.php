@extends('layouts.admin.app')
@section('title', $page_title)
@section('content')
<input type="hidden" id="page_url" value="{{ route('virtualtour.index') }}">
<section class="content-header">
	<div class="content-header-left">
		<h1>All Virtual Tour</h1>
	</div>
	@can('virtualtour-create')
	<div class="content-header-right">
		<a href="{{ route('virtualtour.create') }}" class="btn btn-primary btn-sm">Add Virtual Tour</a>
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
                            <select name="status" id="status" class="form-control status" style="margin-bottom:5px">
                                <option value="All" selected>Search by status</option>
                                <option value="1">Active</option>
                                <option value="2">In-Active</option>
                            </select>
                        </div>
                    </div>
					<table id="" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="30">SL</th>
								<th>Image</th>
								<th>Name</th>
								<th>Description</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody id="body">
							@foreach($tours as $key=>$tour)
								<tr id="id-{{ $tour->slug }}">
									<td>{{ $tours->firstItem()+$key }}.</td>
									<td>
										@if($tour->image)
											<img src="{{ asset('public/admin/assets/images/virtual_tour/'.$tour->image) }}" alt="" style="width:60px;">
										@else
											<img src="{{ asset('public/admin/assets/images/virtual_tour/no-photo1.jpg') }}" style="width:60px;">
										@endif
									</td>
									<td>{{ $tour->name??'N/A' }}</td>
									<td>{!! \Illuminate\Support\Str::limit($tour->description??'N/A',60) !!}</td>
									<td>
										@if($tour->status)
										<span class="badge badge-success">Active</span>
										@else
										<span class="badge badge-danger">In-Active</span>
										@endif
									</td>
									<td>
										@can('virtualtour-edit')
											<a href="{{route('virtualtour.edit', $tour->slug)}}" data-toggle="tooltip" data-placement="top" title="Edit Virtual Tour" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
										@endcan
										@can('virtualtour-delete')
                                            <button class="btn btn-danger btn-xs delete" data-slug="{{ $tour->slug }}" data-del-url="{{ url('virtualtour', $tour->slug) }}"><i class="fa fa-trash"></i> Delete</button>
										@endcan
									</td>
								</tr>
							@endforeach
                            <tr>
                                <td colspan="6">
									Displying {{$tours->firstItem()}} to {{$tours->lastItem()}} of {{$tours->total()}} records
                                    <div class="d-flex justify-content-center">
                                        {!! $tours->links('pagination::bootstrap-4') !!}
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

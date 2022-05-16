@extends('layouts.admin.app')
@section('title', $page_title)
@section('content')
<input type="hidden" id="page_url" value="{{ route('gallery.index') }}">
<section class="content-header">
	<div class="content-header-left">
		<h1>All Gallery</h1>
	</div>
	@can('gallery-create')
	<div class="content-header-right">
		<a href="{{ route('gallery.create') }}" class="btn btn-primary btn-sm">Add Gallery</a>
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
                        <!-- <div class="col-sm-1">Search:</div>
                        <div class="d-flex col-sm-6">
                            <input type="text" id="search" class="form-control" placeholder="Search">
                        </div> -->
                        <div class="d-flex col-sm-6">
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
								<th>Slug</th>
								<th>Category</th>
								<th>Status</th>
								<th>Created by</th>
								<th width="140">Action</th>
							</tr>
						</thead>
						<tbody id="body">
							@foreach($galleries as $key=>$gallery)
								<tr id="id-{{ $gallery->slug }}">
									<td>{{ $galleries->firstItem()+$key }}.</td>
                                    <td>
										@if($gallery->image)
											<img src="{{ asset('public/admin/assets/images/gallery/'.$gallery->image) }}" alt="" style="width:60px;">
										@else
											<img src="{{ asset('public/admin/assets/images/default.jpg') }}" style="width:60px;">
										@endif
									</td>
									<td>{{ $gallery->slug }}</td>
									<td>{{ isset($gallery->hascategory)?$gallery->hascategory->name:'N/A' }}</td>
									<td>
										@if($gallery->status)
											<span class="badge badge-success">Active</span>
										@else
											<span class="badge badge-danger">In-Active</span>
										@endif
									</td>
                                    <td>{{isset($gallery->hasCreatedBy)?$gallery->hasCreatedBy->name:'N/A'}}</td>
									<td width="250px">
										@can('gallery-edit')
											<a href="{{route('gallery.edit', $gallery->slug)}}" data-toggle="tooltip" data-placement="top" title="Edit Gallery" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
										@endcan
										@can('gallery-delete')
											<button class="btn btn-danger btn-xs delete" data-slug="{{ $gallery->slug }}" data-del-url="{{ url('gallery', $gallery->slug) }}"><i class="fa fa-trash"></i> Delete</button>
										@endcan
									</td>
								</tr>
							@endforeach
                            <tr>
                                <td colspan="6">
                                    <div class="d-flex justify-content-center">
                                        {!! $galleries->links('pagination::bootstrap-4') !!}
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

@extends('layouts.admin.app')
@section('title', $page_title)
@section('content')
<input type="hidden" id="page_url" value="{{ route('rv.index') }}">
<section class="content-header">
	<div class="content-header-left">
		<h1>All R.V</h1>
	</div>
	@can('rv-create')
	<div class="content-header-right">
		<a href="{{ route('rv.create') }}" class="btn btn-primary btn-sm">Add R.V</a>
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
								<th>Price</th>
								<th>Description</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody id="body">
							@foreach($rvs as $key=>$rv)
								<tr id="id-{{ $rv->slug }}">
									<td>{{ $rvs->firstItem()+$key }}.</td>
									<td>
										@if($rv->image)
											<img src="{{ asset('public/admin/assets/images/RV/'.$rv->image) }}" alt="" style="width:60px;">
										@else
											<img src="{{ asset('public/admin/assets/images/RV/no-photo1.jpg') }}" style="width:60px;">
										@endif
									</td>
									<td>{{ $rv->name }}</td>
									<td>{{ $rv->price }}</td>
									<td>{!! \Illuminate\Support\Str::limit($rv->description,60) !!}</td>
									<td>
										@if($rv->status)
										<span class="badge badge-success">Active</span>
										@else
										<span class="badge badge-danger">In-Active</span>
										@endif
									</td>
									<td>
										@can('rv-edit')
											<a href="{{route('rv.edit', $rv->slug)}}" data-toggle="tooltip" data-placement="top" title="Edit R.V" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
										@endcan
										@can('rv-delete')
                                            <button class="btn btn-danger btn-xs delete" data-slug="{{ $rv->slug }}" data-del-url="{{ url('rv', $rv->slug) }}"><i class="fa fa-trash"></i> Delete</button>
										@endcan
									</td>
								</tr>
							@endforeach
                            <tr>
                                <td colspan="6">
									Displying {{$rvs->firstItem()}} to {{$rvs->lastItem()}} of {{$rvs->total()}} records
                                    <div class="d-flex justify-content-center">
                                        {!! $rvs->links('pagination::bootstrap-4') !!}
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

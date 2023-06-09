@extends('layouts.admin.app')
@section('title', $page_title)
@section('content')
<input type="hidden" id="page_url" value="{{ route('skyway.index') }}">
<section class="content-header">
	<div class="content-header-left">
		<h1>All Skyway Shipping</h1>
	</div>
	@can('skyway-create')
	<div class="content-header-right">
		<a href="{{ route('skyway-shipping') }}" class="btn btn-primary btn-sm">Add Skyway Shipping</a>
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
                                <option value="0">In-Active</option>
                            </select>
                        </div>
                    </div>
					<table id="" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>#No.</th>
								<th>B/L No.</th>
								<th>Shipper</th>
								<th>Consignee</th>
								<th>Status</th>
								<th width="220">Action</th>
							</tr>
						</thead>
						<tbody id="body">
							@foreach($skyway_shippings as $key=>$skyway)
								<tr id="id-{{ $skyway->id }}">
									<td>{{ $skyway_shippings->firstItem()+$key }}.</td>

									<td>{{$skyway->B_L_no}}</td>
                                    <td>{!! \Illuminate\Support\Str::limit($skyway->shipper,50) !!}</td>
                                    <td>{!! \Illuminate\Support\Str::limit($skyway->consignee,50) !!}</td>
									<td>
										@if($skyway->status)
											<span class="label label-success">Active</span>
										@else
											<span class="label label-danger">In-Active</span>
										@endif
									</td>
                                    <td>
                                        <a href="{{ route('skyway.show', $skyway->id) }}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> View</a>

										@can('skyway-edit')
											<a href="{{route('skyway.edit', $skyway->id)}}" data-toggle="tooltip" data-placement="top" title="Edit skyway shipping" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
										@endcan
										@can('skyway-delete')
                                            <button class="btn btn-danger btn-xs delete" data-slug="{{ $skyway->id }}" data-del-url="{{ url('skyway', $skyway->id) }}"><i class="fa fa-trash"></i> Delete</button>
										@endcan
									</td>
								</tr>
							@endforeach
                            <tr>
                                <td colspan="6">
                                    <div class="d-flex justify-content-center">
                                        {!! $skyway_shippings->links('pagination::bootstrap-4') !!}
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

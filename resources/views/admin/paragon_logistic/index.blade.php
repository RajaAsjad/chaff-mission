@extends('layouts.admin.app')
@section('title', $page_title)
@section('content')
<input type="hidden" id="page_url" value="{{ route('paragon.index') }}">
<section class="content-header">
	<div class="content-header-left">
		<h1>All Paragon Logistics</h1>
	</div>
	@can('paragon-create')
	<div class="content-header-right">
		<a href="{{ route('paragon-logistic') }}" class="btn btn-primary btn-sm">Add Paragon Logistics</a>
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
							@foreach($paragon_logistics as $key=>$paragon_logistic)
								<tr id="id-{{ $paragon_logistic->id }}">
									<td>{{ $paragon_logistics->firstItem()+$key }}.</td>

									<td>{{$paragon_logistic->B_L_no}}</td>
                                    <td>{!! \Illuminate\Support\Str::limit($paragon_logistic->shipper,50) !!}</td>
                                    <td>{!! \Illuminate\Support\Str::limit($paragon_logistic->consignee,50) !!}</td>
									<td>
										@if($paragon_logistic->status)
											<span class="label label-success">Active</span>
										@else
											<span class="label label-danger">In-Active</span>
										@endif
									</td>
                                    <td>
                                        <a href="{{ route('paragon.show', $paragon_logistic->id) }}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> View</a>

										@can('paragon-edit')
											<a href="{{route('paragon.edit', $paragon_logistic->id)}}" data-toggle="tooltip" data-placement="top" title="Edit Paragon Logistics" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
										@endcan
										@can('paragon-delete')
                                            <button class="btn btn-danger btn-xs delete" data-slug="{{ $paragon_logistic->id }}" data-del-url="{{ url('paragon', $paragon_logistic->id) }}"><i class="fa fa-trash"></i> Delete</button>
										@endcan
									</td>
								</tr>
							@endforeach
                            <tr>
                                <td colspan="6">
                                    <div class="d-flex justify-content-center">
                                        {!! $paragon_logistics->links('pagination::bootstrap-4') !!}
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

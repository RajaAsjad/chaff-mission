@extends('layouts.admin.app')
@section('title', $page_title)
@section('content')
<input type="hidden" id="page_url" value="{{ route('deals.index') }}">
<section class="content-header">
	<div class="content-header-left">
		<h1>All Deals</h1>
	</div>

	<div class="content-header-right">
		<a href="{{ route('deals.create') }}" class="btn btn-primary btn-sm">Add Deal</a>
	</div>

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
								<th>Deal Name</th>
								<th>Price</th>
								<th>Status</th>
								<th>Created by</th>
								<th width="140">Action</th>
							</tr>
						</thead>
						<tbody id="body">
							@foreach($deals as $key=>$deal)
								<tr id="id-{{ $deal->id }}">
									<td>{{ $deals->firstItem()+$key }}.</td>
									<td>{{ $deal->deal_name }}</td>
									<td>{{ $deal->price }}</td>
									<td>
										@if($deal->status)
											<span class="badge badge-success">Active</span>
										@else
											<span class="badge badge-danger">In-Active</span>
										@endif
									</td>
									<td>{{isset($deal->hasCreatedBy)?$deal->hasCreatedBy->name:'N/A'}}</td>
									<td width="250px">
											<a href="{{route('deals.edit', $deal->id)}}" data-toggle="tooltip" data-placement="top" title="Edit Deal" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
										
                                            <button class="btn btn-danger btn-xs delete" data-slug="{{ $deal->id }}" data-del-url="{{ url('deals', $deal->id) }}"><i class="fa fa-trash"></i> Delete</button>
										
									</td>
								</tr>
							@endforeach
                            <tr>
                                <td colspan="6">
									Displying {{$deals->firstItem()}} to {{$deals->lastItem()}} of {{$deals->total()}} records
                                    <div class="d-flex justify-content-center">
                                        {!! $deals->links('pagination::bootstrap-4') !!}
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

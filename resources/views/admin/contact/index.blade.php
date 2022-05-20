@extends('layouts.admin.app')
@section('title', $page_title)
@section('content')
<input type="hidden" id="page_url" value="{{ route('contact.index') }}">
<section class="content-header">
	<div class="content-header-left">
		<h1>{{$page_title}}</h1>
	</div>

	<div class="content-header-right">
		<a href="{{ route('contact.create') }}" class="btn btn-primary btn-sm">Add Contact</a>
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
								<th>Name</th>
								<th>Description</th>
								<th>Address</th>
								<th>Status</th>
								<th width="140">Action</th>
							</tr>
						</thead>
						<tbody id="body">
							@foreach($contacts as $key=>$contact)
								<tr id="id-{{ $contact->id }}">
									<td>{{ $contacts->firstItem()+$key }}.</td>
									<td>{{$contact->name}}</td>
									<td>{!!\Illuminate\Support\Str::limit($contact->description,30)!!}</td>
									<td>{{$contact->address}}</td>
									<td>
										@if($contact->status)
											<span class="badge badge-success">Active</span>
										@else
											<span class="badge badge-danger">In-Active</span>
										@endif
									</td>
									<td width="250px">
										<a href="{{route('contact.edit', $contact->slug)}}" data-toggle="tooltip" data-placement="top" title="Edit contact" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
										<button class="btn btn-danger btn-xs delete" data-slug="{{ $contact->slug }}" data-del-url="{{ url('contact', $contact->slug) }}"><i class="fa fa-trash"></i> Delete</button>
									</td>
								</tr>
							@endforeach
                            <tr>
                                <td colspan="6">
									Displying {{$contacts->firstItem()}} to {{$contacts->lastItem()}} of {{$contacts->total()}} records
                                    <div class="d-flex justify-content-center">
                                        {!! $contacts->links('pagination::bootstrap-4') !!}
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

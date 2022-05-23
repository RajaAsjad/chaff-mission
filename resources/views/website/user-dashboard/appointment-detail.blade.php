@extends('layouts.user.app')
@section('title', $page_title)
@section('content')
<style>
	button.btn-for {
    background: #fccc24;
    border: 1px solid #fccc24;
    width: 100%;
    border-radius: 5px;
    font-weight: 600;
	}
</style>
<section class="content-header">
	<div class="content-header-left">
		<h1>{{ $page_title }}</h1>
	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<table class="table my-tables  table-bordered  table-responsive text-nowrap">
				<thead>
					<tr>
						<th scope="col">Customer Id</th>
						<th scope="col">Address</th>
						<th scope="col">City</th>
						<th scope="col">State</th>
						<th scope="col">Pickup Date</th>
						<th scope="col">Return Time</th>
						<th scope="col">status</th>
						<th scope="col">Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($appointments as $appointment)
					<tr>
						<th scope="row">{{ $appointment->customer_id }}</th>
						<td>{{ $appointment->address }}</td>
						<td>{{ $appointment->city }}</td>
						<td>{{ $appointment->state }}</td>
						<td>{{ $appointment->pickup_date }}</td>
						<td>{{ $appointment->return_time }}</td>
						<td>
							@if($appointment->status)
								<span class="badge badge-success">Active</span>
							@else
								<span class="badge badge-danger">In-Active</span>
							@endif
						</td>
						<td><button class="btn-for">VIEW</button></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</section>
@endsection

@push('js')
@endpush

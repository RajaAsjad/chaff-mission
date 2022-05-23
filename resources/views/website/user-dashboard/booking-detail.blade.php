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
						<th scope="col">Booking Number</th>
						<th scope="col">Trip Start Date</th>
						<th scope="col">Trip End Date</th>
						<th scope="col">Per Day Price</th>
						<th scope="col">Total Payment</th>
						<th scope="col">Payment Status</th>
						<th scope="col">Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($bookings_details as $bookings_detail)
					<tr>
						<th scope="row">{{ $bookings_detail->booking_number }}</th>
						<td>{{ $bookings_detail->trip_start_date }} </td>
						<td>{{ $bookings_detail->trip_end_date }} </td>
						<td>{{ $bookings_detail->per_day_price }} </td>
						<td>{{ $bookings_detail->total_payment }}</td>
						<td>{{ $bookings_detail->payment_status }}</td>
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

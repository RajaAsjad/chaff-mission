@extends('layouts.admin.app')
@section('content')

<section class="content-header">
	<div class="content-header-left">
		<h1>Show Career Details</h1>
	</div>
	<div class="content-header-right">
		<a href="{{ route('career.index') }}" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table class="table bordered">
					<tr>
						<th>First Name</th>
						<td>{{ $models->first_name }}</td>
					</tr>
					<tr>
						<th>Last Name</th>
						<td>{{ $models->last_name }}</td>
					</tr>
					<tr>
						<th>Email</th>
						<td>{{ $models->email }}</td>
					</tr>
					<tr>
						<th>Phone</th>
						<td>{{ $models->phone }}</td>
					</tr>
					<tr>
						<th>Address</th>
						<td>{{ $models->address }}</td>
					</tr>
					<tr>
						<th>City</th>
						<td>{{ $models->city }}</td>
					</tr>
					<tr>
						<th>State</th>
						<td>{{ $models->state }}</td>
					</tr>
					<tr>
						<th>Postal</th>
						<td>{{ $models->postal }}</td>
					</tr>
					<tr>
						<th>Status</th>
						<td>
							@if($models->status)
								<span class="badge badge-success">Active</span>
							@else 
								<span class="badge badge-danger">In-Active</span>
							@endif
						</td>
					</tr>
					<tr>
						<th>CV</th>
						<td><iframe src="{{ asset('public/admin/assets/images/file') }}/{{$models->CV_file}}" title="testPdf" height="500px" width="500"></iframe></td>
					</tr>
					
				</table>
			</div>
		</div>
	</div>
</section>

<script>
	$(document).ready(function() {
		$('.editor_short').summernote({
			height: 150
		});
	});
</script>
@endsection
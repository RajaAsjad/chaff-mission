@extends('layouts.admin.app')
@section('title', $page_title)
@section('content')

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Category</h1>
	</div>
	<div class="content-header-right">
		<a href="{{ route('contact.index') }}" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route('contact.update', $contact->slug) }}" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
				@csrf
				{{ method_field('PATCH') }}
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Name <span style="color:red">*</span></label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="name" value="{{$contact->name}}">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Address <span style='color:red'>*</span></label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="address" value="{{ $contact->address }}" placeholder="Enter Address">
								<span style="color: red">{{ $errors->first('address') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Telephone <span style='color:red'>*</span></label>
							<div class="col-sm-9">
								<input type="phone" autocomplete="off" class="form-control" name="telephone" value="{{ $contact->telephone }}" placeholder="Enter Telephone">
								<span style="color: red">{{ $errors->first('telephone') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Fax <span style='color:red'>*</span></label>
							<div class="col-sm-9">
								<input type="phone" autocomplete="off" class="form-control" name="fax" value="{{ $contact->fax }}" placeholder="Enter Fax">
								<span style="color: red">{{ $errors->first('fax') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Location <span style='color:red'>*</span></label>
							<div class="col-sm-9">
								<input type="phone" autocomplete="off" class="form-control" name="location" value="{{ $contact->location }}" placeholder="Enter Location">
								<span style="color: red">{{ $errors->first('location') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">short_description <span style='color:red'>*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control" name="short_description" maxlength="200" style="height:140px;" placeholder="Enter Short Description">{{ $contact->short_description }}</textarea>
								<span style="color: red">{{ $errors->first('short_description') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Description </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="description" style="height:140px;">{!! $contact->description !!}</textarea>
								<span style="color: red">{{ $errors->first('description') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Status</label>
							<div class="col-sm-9">
								<select name="status" class="form-control" id="">
									<option value="1" {{ $contact->status==1?'selected':'' }}>Active</option>
									<option value="0" {{ $contact->status==0?'selected':'' }}>In-Active</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left">Submit</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

@endsection
@push('js')
<script>
	$(document).ready(function() {
		$("#regform").validate({
			rules: {
				name: "required"
			}
		});
	});
</script>
@endpush

@extends('layouts.admin.app')
@section('title', $page_title)
@section('content')
<section class="content-header">
	<div class="content-header-left">
		<h1>Add Contact</h1>
	</div>
	<div class="content-header-right">
		<a href="{{ route('contact.index') }}" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route('contact.store') }}" id="regform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
				@csrf
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Name <span style='color:red'>*</span></label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter Name">
								<span style="color: red">{{ $errors->first('name') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Address <span style='color:red'>*</span></label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="address" value="{{ old('address') }}" placeholder="Enter Address">
								<span style="color: red">{{ $errors->first('address') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Telephone <span style='color:red'>*</span></label>
							<div class="col-sm-9">
								<input type="phone" autocomplete="off" class="form-control" name="telephone" value="{{ old('telephone') }}" placeholder="Enter Telephone">
								<span style="color: red">{{ $errors->first('telephone') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Fax <span style='color:red'>*</span></label>
							<div class="col-sm-9">
								<input type="phone" autocomplete="off" class="form-control" name="fax" value="{{ old('fax') }}" placeholder="Enter Fax">
								<span style="color: red">{{ $errors->first('fax') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Location <span style='color:red'>*</span></label>
							<div class="col-sm-9">
								<input type="phone" autocomplete="off" class="form-control" name="location" value="{{ old('location') }}" placeholder="Enter Location">
								<span style="color: red">{{ $errors->first('location') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">short_description <span style='color:red'>*</span></label>
							<div class="col-sm-9">
							<textarea class="form-control" name="short_description" maxlength="200" style="height:140px;" placeholder="Enter short_description"></textarea>
								<span style="color: red">{{ $errors->first('short_description') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Description </label>
							<div class="col-sm-9">
								<textarea class="form-control texteditor" name="description" maxlength="200" style="height:140px;" placeholder="Enter description"></textarea>
								<span style="color: red">{{ $errors->first('description') }}</span>
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
		tinymce.init({
				selector: "textarea.texteditor",
				theme: "modern",
				height: 150,
				plugins: [
					"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
					"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
					"save table contextmenu directionality emoticons template paste textcolor"
				],
				toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

			});

		$("#regform").validate({
			rules: {
				name: "required"
			}
		});
	});
</script>
@endpush

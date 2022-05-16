@extends('layouts.admin.app')
@section('title', $page_title)
@section('content')
<section class="content-header">
	<div class="content-header-left">
		<h1>Add R.V</h1>
	</div>
	<div class="content-header-right">
		<a href="{{ route('rv.index') }}" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route('rv.store') }}" id="regform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
				@csrf
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Name <span style="color: red">*</span></label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter Name">
								<span style="color: red">{{ $errors->first('name') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Seat<span style="color: red">*</span></label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="seat" value="{{ old('seat') }}" placeholder="Enter Seat">
								<span style="color: red">{{ $errors->first('seat') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Price </label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="price" value="{{ old('price') }}" placeholder="Enter Price">
								<span style="color: red">{{ $errors->first('price') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Short Description<span style="color: red">*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control" name="short_description" style="height:140px;" value="{{ old('short_description') }}" placeholder="Enter Description"></textarea>
								<span style="color: red">{{ $errors->first('short_description') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Description<span style="color: red">*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control texteditor" name="description" style="height:200px;" placeholder="Enter Description"></textarea>
								<span style="color: red">{{ $errors->first('description') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Image <span style="color: red">*</span></label>
							<div class="col-sm-6" style="padding-top:5px">
								<input type="file" name="image" class="form-control" accept="image" id="image">
								<span style="color: red">{{ $errors->first('image') }}</span>
							</div>
							<div class="col-sm-4">
								<img style="width: 80px" id="banner_preview"  src="{{ asset('public/admin/assets/images/default.jpg') }}"  alt="Image Not Found ">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-9">
								<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
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
		if ($(".texteditor").length > 0) {
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
		}

		$("#regform").validate({
			rules: {
				image: "required",
				name: "required",
				comment: "required",
			}
		});
		image.onchange = evt => {
		const [file] = image.files
		if (file) {
			banner_preview.src = URL.createObjectURL(file)
		}
		}
	});
</script>
@endpush

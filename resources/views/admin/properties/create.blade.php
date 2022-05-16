@extends('layouts.admin.app')
@section('title', $page_title)
@section('content')
<section class="content-header">
	<div class="content-header-left">
		<h1>Add Property</h1>
	</div>
	@can('property-list')
	<div class="content-header-right">
		<a href="{{ route('property.index') }}" class="btn btn-primary btn-sm">View All</a>
	</div>
	@endcan
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route('property.store') }}" id="regform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
				@csrf
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Name<span style="color: red">*</span></label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter Name">
								<span style="color: red">{{ $errors->first('name') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Room<span style="color: red">*</span></label>
							<div class="col-sm-9">
								<input type="number" autocomplete="off" class="form-control" name="room" value="{{ old('room') }}" placeholder="Enter Room">
								<span style="color: red">{{ $errors->first('room') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Bed<span style="color: red">*</span></label>
							<div class="col-sm-9">
								<input type="number" autocomplete="off" class="form-control" name="bed" value="{{ old('bed') }}" placeholder="Enter Bed">
								<span style="color: red">{{ $errors->first('bed') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Bathroom<span style="color: red">*</span></label>
							<div class="col-sm-9">
								<input type="number" autocomplete="off" class="form-control" name="bathroom" value="{{ old('bathroom') }}" placeholder="Enter Bathroom">
								<span style="color: red">{{ $errors->first('bathroom') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Price<span style="color: red">*</span></label>
							<div class="col-sm-9">
								<input type="number" autocomplete="off" class="form-control" name="price" value="{{ old('price') }}" placeholder="Enter Price">
								<span style="color: red">{{ $errors->first('price') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Short Description<span style="color: red">*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control" name="short_description" style="height:140px;" value="{{ old('short_description') }}" placeholder="Enter Short Description"></textarea>
								<span style="color: red">{{ $errors->first('short_description') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label texteditor">Description<span style="color: red">*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control texteditor" name="description" style="height:140px;" placeholder="Enter Description"></textarea>
								<span style="color: red">{{ $errors->first('description') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Image <span style="color: red">*</span></label>
                            <div class="col-sm-6" style="padding-top:5px">
                                <input type="file" class="form-control" accept="image*"  name="image" id="image">
                                <span style="color: red">{{ $errors->first('image') }}</span>
                            </div>
                            <div class="col-sm-4" >
                                    <img style="width: 80px" id="banner_preview"  src="{{ asset('public/admin/assets/images/default.jpg') }}"  alt="Image Not Found ">
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
				/* title: "required"
                description: "required" */
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

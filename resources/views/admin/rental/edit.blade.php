@extends('layouts.admin.app')
@section('title', $page_title)
@section('content')

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Rental</h1>
	</div>
	@can('car-list')
	<div class="content-header-right">
		<a href="{{ route('rental.index') }}" class="btn btn-primary btn-sm">View All</a>
	</div>
	@endcan
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<form action="{{route('rental.update', $model->slug)}}" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
				@csrf
				{{ method_field('PATCH') }}
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Name <span style="color:red">*</span></label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="name" value="{{$model->name}}">
							</div>
						</div>
						 <div class="form-group">
							<label for="" class="col-sm-2 control-label">Short Description<span style="color: red">*</span></label>
							<div class="col-sm-9">
							<textarea class="form-control" name="short_description" style="height:140px;">{!! $model->short_description !!}</textarea>
							</div>
						</div>
						<div class="form-group">
                            <label for="" class="col-sm-2 control-label">Description<span style="color: red">*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control texteditor" name="description" style="height:140px;">{!! $model->description !!}</textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Color <span style="color:red">*</span></label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="color" value="{{$model->color}}">
							</div>
						</div>
						<div class="form-group">
                            <label for="" class="col-sm-2 control-label">Rent<span style="color: red">*</span></label>
							<div class="col-sm-9">
							<input type="text" autocomplete="off" class="form-control" name="rent" value="{{ $model->rent }}" placeholder="Enter Rent">
							</div>
						</div>
						<div class="form-group">
                            <label for="" class="col-sm-2 control-label">Seat<span style="color: red">*</span></label>
							<div class="col-sm-9">
							<input type="text" autocomplete="off" class="form-control" name="seat" value="{{ $model->seat }}" placeholder="Enter Seat">
							</div>
						</div>
						<div class="form-group">
                            <label for="" class="col-sm-2 control-label">Image</label>
                            <div class="col-sm-6" style="padding-top:5px">
                                <input type="file" class="form-control" accept="image*" name="image" id="image">
                            </div>
                            <div class="col-sm-4" >
                                <img style="width: 80px " id="banner_preview"  src="{{ asset('public/admin/assets/images/rental') }}/{{ $model->image }}" alt="">
                            </div>
                        </div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Status</label>
							<div class="col-sm-9">
								<select name="status" class="form-control" id="">
									<option value="1" {{ $model->status==1?'selected':'' }}>Active</option>
									<option value="0" {{ $model->status==0?'selected':'' }}>In-Active</option>
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
			/* 	title: "required"
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

@extends('layouts.admin.app')
@section('title', $page_title)
@section('content')
<section class="content-header">
	<div class="content-header-left">
		<h1>{{ $page_title }}</h1>
	</div>
	<div class="content-header-right">
		<a href="{{ route('product.index') }}" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route('product.store') }}" id="regform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
				@csrf
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Category <span style="color: red">*</span></label>
							<div class="col-md-9">
								<select name="category_slug" id="category_slug" class="form-control">
									<option value="" selected>Select Category</option>
									@foreach ($categories as $category)
										<option value="{{ $category->slug }}">{{ $category->name }}</option>
									@endforeach
								</select>
								<span style="color: red">{{ $errors->first('category_slug') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Car Type <span style="color: red">*</span></label>
							<div class="col-md-9">
								<select name="car_type_slug" id="car_type" class="form-control">
									<option value="" selected>Select Car Type</option>
									@foreach ($car_types as $car_type)
										<option value="{{ $car_type->slug }}">{{ $car_type->name }}</option>
									@endforeach
								</select>
								<span style="color: red">{{ $errors->first('category_slug') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Name<span style="color: red">*</span></label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter product name">
								<span style="color: red">{{ $errors->first('name') }}</span>
							</div>
						</div>
                        <div class="form-group">
							<label for="" class="col-sm-2 control-label">Seat<span style="color: red">*</span></label>
							<div class="col-sm-9">
                                <input type="number" name="seats" id="" value="{{ old('seats') }}"  class="form-control" placeholder="Enter Seat">
								<span style="color: red">{{ $errors->first('seats') }}</span>
							</div>
                        </div>
                        <div class="form-group">
							<label for="" class="col-sm-2 control-label">Doors<span style="color: red">*</span></label>
							<div class="col-sm-9">
                                <input type="number" name="doors" id="" value="{{ old('doors') }}" class="form-control" placeholder="Enter Doors">
								<span style="color: red">{{ $errors->first('doors') }}</span>
							</div>
                        </div>
                        <div class="form-group">
							<label for="" class="col-sm-2 control-label">MPG<span style="color: red">*</span></label>
							<div class="col-sm-9">
                                <input type="number" name="mpg" id="" value="{{ old('mpg') }}" min="1" max="40" class="form-control" placeholder="Enter MPG">
								<span style="color: red">{{ $errors->first('mpg') }}</span>
							</div>
                        </div>
                        <div class="form-group">
							<label for="" class="col-sm-2 control-label">Fuel<span style="color: red">*</span></label>
							<div class="col-sm-9">
								<input type="text" name="fuel" value="{{ old('fuel') }}" id="fuel" class="form-control" placeholder="Enter Fuel">
								<span style="color: red">{{ $errors->first('fuel') }}</span>
							</div>
						</div>
						{{-- <div class="form-group">
							<label for="" class="col-sm-2 control-label">Rooms<span style="color: red">*</span></label>
							<div class="col-sm-9">
								<input type="number" name="rooms" value="{{ old('rooms') }}" id="rooms" class="form-control" placeholder="Enter Rooms">
								<span style="color: red">{{ $errors->first('rooms') }}</span>
							</div>
						</div>
                        <div class="form-group">
							<label for="" class="col-sm-2 control-label">Beds<span style="color: red">*</span></label>
							<div class="col-sm-9">
								<input type="number" name="beds" id="" value="{{ old('beds') }}" class="form-control" placeholder="Enter Beds">
								<span style="color: red">{{ $errors->first('beds') }}</span>
							</div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Bathrooms<span style="color: red">*</span></label>
                            <div class="col-sm-9">
								<input type="number" name="bathrooms" id="" value="{{ old('bathrooms') }}" class="form-control" placeholder="Enter Bathrooms">
								<span style="color: red">{{ $errors->first('bathrooms') }}</span>
                            </div>
                        </div> --}}
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Color <span style="color: red">*</span></label>
                            <div class="col-sm-1">
                                <input type="color" name="color" value="{{ old('color') }}" id="color" class="form-control">
                                <span style="color: red">{{ $errors->first('color') }}</span>
                            </div>
                        </div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Rent Per Day<span style="color: red">*</span></label>
							<div class="col-sm-9">
                                <input type="number" name="rent_per_day" id="" value="{{ old('rent_per_day') }}" class="form-control" placeholder="Enter Rent Per Day">
								<span style="color: red">{{ $errors->first('rent_per_day') }}</span>
							</div>
                        </div>
                        <div class="form-group">
							<label for="" class="col-sm-2 control-label">Description<span style="color: red">*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control texteditor" name="description" style="height:200px;" placeholder="Enter description"></textarea>
								<span style="color: red">{{ $errors->first('description') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Thumbnail <span style="color: red">*</span></label>
                            <div class="col-sm-6" style="padding-top:5px">
                                <input type="file" class="form-control" accept="image*"  name="thumbnail" id="thumbnail">
                                <span style="color: red">{{ $errors->first('thumbnail') }}</span>
                            </div>
							<div class="col-sm-4" >
								<img style="width: 80px" id="thumbnail_preview"  src="{{ asset('public/admin/assets/images/default.jpg') }}"  alt="Image Not Found ">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Image <span style="color: red">*</span></label>
                            <div class="col-sm-6" style="padding-top:5px">
                                <input type="file" class="form-control" multiple accept="image*"  name="images[]" id="image">
                                <span style="color: red">{{ $errors->first('images') }}</span>
                            </div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-9">
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

		thumbnail.onchange = evt => {
			const [file] = thumbnail.files
			if (file) {
				thumbnail_preview.src = URL.createObjectURL(file)
			}
		}
	});
</script>
@endpush

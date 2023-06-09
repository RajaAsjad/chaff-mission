@extends('layouts.admin.app')
@section('content')
<section class="content-header">
	<div class="content-header-left">
		<h1>@if(!empty($model)) Edit @else Add @endif Page Setting of <strong>{{ $model->title }}</strong></h1>
	</div>
	<div class="content-header-right">
		<a href="{{ route('page.index') }}" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route('page_setting.store') }}" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
				@csrf

				<input type="hidden" name="parent_slug" id="" value="{{ $model->slug }}">
				<div class="box box-info">
					<div class="box-body">
                        <div class="form-group">
							<label for="" class="col-sm-2 control-label">Title</label>
							<div class="col-sm-9">
								<input type="text" name="home_about_title" class="form-control" value="{{ isset($page_data['home_about_title'])?$page_data['home_about_title']:'' }}" placeholder="Enter title">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Heading</label>
							<div class="col-sm-9">
								<input type="text" name="home_about_heading" class="form-control" value="{!! isset($page_data['home_about_heading'])?$page_data['home_about_heading']:'' !!}" placeholder="Enter heading">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Description</label>
							<div class="col-sm-9">
								<textarea name="home_about_description" class="form-control texteditor" cols="30" rows="10" placeholder="Enter heading description">{!! isset($page_data['home_about_description'])?$page_data['home_about_description']:'' !!}</textarea>
							</div>
						</div>
                        <div class="form-group">
							<label for="" class="col-sm-2 control-label">Short Description </label>
							<div class="col-sm-9">
								<input type="text" name="short_description" class="form-control" value="{{ isset($page_data['short_description'])?$page_data['short_description']:'' }}" placeholder="Enter short description">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form_about">Update</button>
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
	});
</script>
@endpush

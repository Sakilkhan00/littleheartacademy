@extends('admin.layouts.header')
	@section('title',__('Add Course'))
	@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Course
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Add Course</h3>
            </div>
            <form method="post" action="{{ route('course.store') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                  <label>Title</label><strong class="error">*</strong>
                  <input type="text" class="form-control my-colorpicker1" placeholder="Title" name="title" value="{{ old('title') }}">
                </div>
               
                <div class="form-group {{ $errors->has('meta_title') ? ' has-error' : '' }}">
                  <label>Meta Title</label><strong class="error">*</strong>
                  <input type="text" class="form-control my-colorpicker1" placeholder="Meta Title" name="meta_title" value="{{ old('meta_title') }}">
                </div>
                <div class="form-group {{ $errors->has('meta_keywords') ? ' has-error' : '' }}">
                  <label>Meta Keywords</label><strong class="error">*</strong>
                  <input type="text" class="form-control my-colorpicker1" placeholder="Meta Keywords" name="meta_keywords" value="{{ old('meta_keywords') }}">
                </div>
                <div class="form-group {{ $errors->has('meta_description') ? ' has-error' : '' }}">
                  <label>Meta Description</label><strong class="error">*</strong>
                  <input type="text" class="form-control my-colorpicker1" placeholder="Meta Description" name="meta_description" value="{{ old('meta_description') }}">
                </div>                                                 
                <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                  <label>Image</label><strong class="error">*</strong><br>
                  <img id="preview_img" src="{{ url('public/images/profile.png') }}" class="" width="200" height="150"/>
                  <input type="file" name="image" id="image" onchange="loadPreviewImage(this);" class="form-control"accept="image/jpeg, image/png">
                </div>  
                <div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}">
                  <label>Status</label><strong class="error">*</strong>
                  <select class="form-control" name="status">
                    <option value="">--Select Status--</option>
                    <option value="1" {{ old('status')==1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status')==0 ? 'selected' : '' }}>Deactive</option>
                  </select>
                </div>
                <div class="form-group {{ $errors->has('short_description') ? ' has-error' : '' }}">
                  <label>Short Description</label><strong class="error">*</strong>
                  <textarea class="ckeditor form-control" name="short_description">{{ old('short_description') }}</textarea>
                </div>
                <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                  <label>Description</label><strong class="error">*</strong>
                  <textarea class="ckeditor form-control" name="description">{{ old('description') }}</textarea>
                </div>
                <div class="form-group pull-right">
                  <button class="btn btn-info" type="submit">Save</button>
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>

    </section>
  </div>
	@endsection
  
@extends('admin.layouts.header')
	@section('title',__('Add Selection'))
	@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Selection
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
              <h3 class="box-title">Add Selection</h3>
            </div>
            <form method="post" action="{{ url('admin/selection') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                  <label>Title</label><strong class="error">*</strong>
                  <input type="text" class="form-control my-colorpicker1" placeholder="Title" name="title" value="{{ old('title') }}">
                </div>  

                <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                  <label>Image</label><strong class="error">*</strong><br>
                  <img id="preview_img" src="{{ url('public/images/profile.png') }}" class="" width="200" height="150"/>
                  <input type="file" name="image" id="image" onchange="loadPreviewImage(this);" class="form-control"accept="image/jpeg, image/png">
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
  
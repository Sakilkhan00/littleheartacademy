@extends('admin.layouts.header')
	@section('title',__('Add Blog'))
	@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Setting
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
              <h3 class="box-title">Add Setting</h3>
            </div>
            <form method="post" action="{{ route('career.store') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                  <label>Name</label><strong class="error">*</strong>
                  <input type="text" class="form-control my-colorpicker1" placeholder="Name" name="name" value="{{ old('name') }}">
                </div>                                            
                <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                  <label>Logo</label><strong class="error">*</strong><br>
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
  
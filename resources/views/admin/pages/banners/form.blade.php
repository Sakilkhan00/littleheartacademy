@extends('admin.layouts.header')
	@section('title',__('Add Banners'))
	@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Banners
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
              <h3 class="box-title">Add Banners</h3>
            </div>
            <form method="post" action="{{ route('banner.store') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                  <label>Title</label><strong class="error">*</strong>
                  <input type="text" class="form-control my-colorpicker1" placeholder="Title" name="title" value="{{ old('title') }}">
                </div> 
                <label for="toggleCheckbox">Show Youtube Video</label>
                <input type="checkbox" id="toggleCheckbox">
                <div id="videoInput" style="display: none;">
                    <input type="hidden" id="linkIpt" name="linkIpt" value="1">
                    <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                      <label>Youtube Video URL:</label><strong class="error">*</strong>
                      <input id="videoUrl" type="text" class="form-control my-colorpicker1" placeholder="Link" name="link" value="{{ old('link') }}">
                    </div>
                </div>
  
                <div id="imageInput" class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
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
  <script>
        const toggleCheckbox = document.getElementById('toggleCheckbox');
        const videoInput = document.getElementById('videoInput');
        const imageInput = document.getElementById('imageInput');
        const linkIpt = document.getElementById('linkIpt');

        toggleCheckbox.addEventListener('change', function() {
            if (this.checked) {
                videoInput.style.display = 'block';
                imageInput.style.display = 'none';
                linkIpt.value = '';
            } else {
                videoInput.style.display = 'none';
                imageInput.style.display = 'block';
                linkIpt.value = '1';
            }
        });
    </script>
	@endsection

  
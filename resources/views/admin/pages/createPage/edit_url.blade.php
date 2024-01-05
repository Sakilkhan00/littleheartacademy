@extends('admin.layouts.header')
	@section('title',__('Edit Page'))
	@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Edit Page
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
              <h3 class="box-title">Edit Page</h3>
            </div>
            <form method="post" action="{{ route('update_URL') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
              	<input type="hidden" name="id" value="{{$pageURL->id}}">
              	 <div class="form-group {{ $errors->has('menu_id') ? ' has-error' : '' }}">
                  <label>Select Navbar Menu</label><strong class="error">*</strong>
                  <select class="form-control" name="menu_id">
                    <option value="">--Select Navbar Menu--</option>
                    @foreach($navbar as $item)
                    	<option value="{{$item->id}}" @if($pageURL->menu_id == $item->id) selected @endif>{{$item->name}}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                  <label>Title</label><strong class="error">*</strong>
                  <input type="text" class="form-control my-colorpicker1" placeholder="Title" name="title" value="{{ old('title',$pageURL->title) }}">
                </div>

                <div class="form-group {{ $errors->has('website_url') ? ' has-error' : '' }}">
                  <label>Website URL :</label><strong class="error">*</strong>
                   <input type="text" class="form-control my-colorpicker1" placeholder="Enter Website Url" name="website_url" value="{{ old('website_url',$pageURL->website_url) }}">
                </div>

                <div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}">
                  <label>Status</label><strong class="error">*</strong>
                  <select class="form-control" name="status">
                    <option value="">--Select Status--</option>
                    <option value="1" {{ old('status',$pageURL->status)==1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status',$pageURL->status)==0 ? 'selected' : '' }}>Deactive</option>
                  </select>
                </div>
                
                <div class="form-group pull-right">
                  <button class="btn btn-info" type="submit">Update</button>
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>

    </section>
  </div>
	@endsection
  
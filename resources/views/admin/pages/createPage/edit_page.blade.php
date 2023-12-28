@extends('admin.layouts.header')
	@section('title',__('Add Edit'))
	@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Edit
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
              <h3 class="box-title">Add Edit</h3>
            </div>
            <form method="post" action="{{ route('update_createPage') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <input type="hidden" name="id" value="{{$page->id}}">
                <div class="form-group {{ $errors->has('menu_id') ? ' has-error' : '' }}">
                  <label>Select Navbar Menu</label><strong class="error">*</strong>
                  <select class="form-control" name="menu_id">
                    <option value="">--Select Navbar Menu--</option>
                    @foreach($navbar as $item)
                    <option value="{{$item->id}}" @if($page->menu_id == $item->id) selected @endif>{{$item->name}}</option>
                    @endforeach
                  </select>
                </div>
                
                <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                  <label>Title</label><strong class="error">*</strong>
                  <input type="text" class="form-control my-colorpicker1" placeholder="Title" name="title" value="{{ old('title',$page->title) }}">
                </div>
                <div class="form-group {{ $errors->has('meta_title') ? ' has-error' : '' }}">
                  <label>Meta Title</label><strong class="error">*</strong>
                  <input type="text" class="form-control my-colorpicker1" placeholder="Meta Title" name="meta_title" value="{{ old('meta_title',$page->meta_title) }}">
                </div>
                <div class="form-group {{ $errors->has('meta_keywords') ? ' has-error' : '' }}">
                  <label>Meta Keywords</label><strong class="error">*</strong>
                  <input type="text" class="form-control my-colorpicker1" placeholder="Meta Keywords" name="meta_keywords" value="{{ old('meta_keywords',$page->meta_keywords) }}">
                </div>
                <div class="form-group {{ $errors->has('meta_description') ? ' has-error' : '' }}">
                  <label>Meta Description</label><strong class="error">*</strong>
                  <input type="text" class="form-control my-colorpicker1" placeholder="Meta Description" name="meta_description" value="{{ old('meta_description',$page->meta_description) }}">
                </div> 
                <div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}">
                  <label>Status</label><strong class="error">*</strong>
                  <select class="form-control" name="status">
                    <option value="">--Select Status--</option>
                    <option value="1" {{ old('status',$page->status)==1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status',$page->status)==0 ? 'selected' : '' }}>Deactive</option>
                  </select>
                </div>
                <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                  <label>Description</label><strong class="error">*</strong>
                  <textarea class="ckeditor form-control" name="description">{{ old('description',$page->description) }}</textarea>
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
  
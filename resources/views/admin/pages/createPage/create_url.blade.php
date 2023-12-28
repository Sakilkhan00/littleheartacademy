@extends('admin.layouts.header')
	@section('title',__('Add Navbar Menu'))
	@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Navbar
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
              <h3 class="box-title">Add Navbar Menu</h3>
            </div>
            <form method="post" action="{{ url('admin/store-page-url') }}">
              {{ csrf_field() }}
              <div class="box-body">

                <div class="form-group {{ $errors->has('menu_id') ? ' has-error' : '' }}">
                  <label>Select Navbar Menu</label><strong class="error">*</strong>
                  <select class="form-control" name="menu_id">
                    <option value="">--Select Navbar Menu--</option>
                    @foreach($navbar as $item)
                    <option value="{{$item->id}}" {{ old('menu_id')==1 ? 'selected' : '' }}>{{$item->name}}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                  <label>Name :</label><strong class="error">*</strong>
                  <input type="text" class="form-control my-colorpicker1" placeholder="Name" name="title" value="{{ old('title') }}">
                </div>       
                  
                <div class="form-group {{ $errors->has('website') ? ' has-error' : '' }}">
                  <label>Website URL :</label><strong class="error">*</strong>
                   <input type="text" class="form-control my-colorpicker1" placeholder="Enter Website Url" name="website" value="{{ old('website') }}">
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
  
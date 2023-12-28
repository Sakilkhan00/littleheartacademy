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
            <form method="post" action="{{ route('navbar_store') }}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                  <label>Name :</label><strong class="error">*</strong>
                  <input type="text" class="form-control my-colorpicker1" placeholder="Name" name="name" value="{{ old('name') }}">
                </div>       
                  
                <div class="form-group {{ $errors->has('ordering') ? ' has-error' : '' }}">
                  <label>Ordering :</label><strong class="error">*</strong>
                   <input type="text" class="form-control my-colorpicker1" placeholder="Ordering" name="ordering" value="{{ old('ordering') }}">
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
  
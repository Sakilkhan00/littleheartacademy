@extends('admin.layouts.header')
	@section('title',__('Add User'))
	@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      User
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
              <h3 class="box-title">Add User</h3>
            </div>
            <form method="post" action="{{ route('users.store') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                  <label>Name</label><strong class="error">*</strong>
                  <input type="text" class="form-control my-colorpicker1" placeholder="Name" name="name" value="{{ old('name') }}">
                </div>
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                  <label>Email</label><strong class="error">*</strong>
                  <input type="text" class="form-control my-colorpicker1" placeholder="Email" name="email" value="{{ old('email') }}">
                </div>
                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                  <label>Password</label><strong class="error">*</strong>
                  <input type="text" class="form-control my-colorpicker1" placeholder="Password" name="password" value="{{ old('password') }}">
                </div>
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
  
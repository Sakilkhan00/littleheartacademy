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
            <form method="post" action="{{route('setting.add')}}?action=logo_watermark" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">                                    
                <div class="form-group {{ $errors->has('favicon') ? ' has-error' : '' }}">
                  <label>Favicon Icon</label><strong class="error">*</strong><br>
                  <input type="file" name="favicon" id="favicon" onchange="loadPreviewImage(this);" class="form-control"accept="image/jpeg, image/png">
                  <p>Ideal Size 16x16 PX</p>
                </div> 

                <div class="form-group {{ $errors->has('file') ? ' has-error' : '' }}">
                  <label>Logo </label><strong class="error">*</strong><br>
                  <input type="file" name="file" id="file" onchange="loadPreviewImage(this);" class="form-control"accept="image/jpeg, image/png">
                  <p>Ideal Size 168x57 PX</p>
                </div> 

                <div class="form-group {{ $errors->has('footer_logo') ? ' has-error' : '' }}">
                  <label>Footer Logo </label><strong class="error">*</strong><br>
                  <input type="file" name="footer_logo" id="footer_logo" onchange="loadPreviewImage(this);" class="form-control"accept="image/jpeg, image/png">
                  <p>Ideal Size 168x57 PX</p>
                </div>   

                <div class="form-group {{ $errors->has('adminlogo') ? ' has-error' : '' }}">
                  <label>Admin Logo </label><strong class="error">*</strong><br>
                  <input type="file" name="adminlogo" id="adminlogo" onchange="loadPreviewImage(this,'adminlogo');" class="form-control"accept="image/jpeg, image/png">
                  <p>Ideal Size 235x62 PX</p>
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
  
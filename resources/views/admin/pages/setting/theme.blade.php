@extends('admin.layouts.header')
@section('title',__('Theme Setting'))

@php @$config = CstmConfig(); @endphp
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
            <form method="post" action="{{route('setting.add')}}?action=theme_setting" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">                                    
              
   
                <div class="form-group">
                    <label class="">Meta Keywords:</label>
                    <div>
                        <input name="meta_keywords" type="text" class="form-control" value="{{@$config['meta_keywords']}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="">Meta Description:</label>
                    <div>
                        <input name="meta_description" type="text" class="form-control" value="{{@$config['meta_description']}}">
                    </div>
                </div>

                <!--Default Horizontal Form-->
                <div class="form-group">
                    <label class="">Contact Address:</label>
                    <div>
                        <input name="contact_address" type="text" class="form-control" value="{{@$config['contact_address']}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="">Contact Email:</label>
                    <div>
                        <input name="contact_email" type="text" class="form-control" value="{{@$config['contact_email']}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="">Contact Phone:</label>
                    <div>
                        <input name="contact_phone" type="text" class="form-control" value="{{@$config['contact_phone']}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="">Copyright Text:</label>
                    <div>
                        <input name="copyright_text" type="text" class="form-control" value="{{@$config['copyright_text']}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="">Footer Text:</label>
                    <div>
                        <textarea name="footer_text" class="form-control">{{@$config['footer_text']}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label>Footer Facebook Page Link:</label>
                    <div>
                        <input name="facebook_link" type="text" class="form-control" value="{{@$config['facebook_link']}}">
                    </div>
                </div>
                <div class="form-group">
                    <label>Footer Twitter Page Link:</label>
                    <div>
                        <input name="twitter_link" type="text" class="form-control" value="{{@$config['twitter_link']}}">
                    </div>
                </div>
                <div class="form-group">
                    <label>Footer Pinterest Page Link:</label>
                    <div>
                        <input name="googleplus_link" type="text" class="form-control" value="{{@$config['googleplus_link']}}">
                    </div>
                </div>
                <div class="form-group">
                    <label>Footer Youtube Page/Video Link:</label>
                    <div>
                        <input name="youtube_link" type="text" class="form-control" value="{{@$config['youtube_link']}}">
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
  
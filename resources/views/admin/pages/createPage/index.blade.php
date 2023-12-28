@extends('admin.layouts.header')
	@section('title',__('List Pages'))
	@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Pages
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('admin/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pages</h3>
              <div style="float: right;">
                <a class="btn btn-info btn-sm" role="button" href="{{ route('add_createPage') }}" title="Add Blog">+ Add Sub Navbar Menu With Page </a>
                <a class="btn btn-info btn-sm" role="button" href="{{ url('admin/create-page-url') }}" title="Add Blog">+ Add Sub Navbar Menu With URL </a>             
                 </div>
            </div>
            <div class="box-body">
              <table id="table_list" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Menu Name</th>
                  <th>Sub Menu Name</th>
                  <th>Type</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @php $i=1 @endphp
                  @foreach($page as $row)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{ $row->name }}</td>
                      <td>{{ $row->title }}</td>
                      @if(empty($row->website_url))
                      <td>PAGE</td>
                      @else
                      <td>URL</td>
                      @endif
                      <td>
                        @if($row->status == '1')
                          <span class="label label-success">Active</span>
                        @else
                          <span class="label label-danger">Not Active</span>
                        @endif
                      </td>
                      <td>
                        <a href="{{ route('delete_createPage',$row->id) }}" title="Delete Page" onclick="return confirm('Are you sure you want to delete')">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </a>&nbsp;
                          @if(empty($row->website_url))
                          <a href="{{ route('edit_createPage',$row->id) }}" title="Edit Page">
                            <i class="fa fa-edit" aria-hidden="true"></i>
                          </a>
                          @else
                          <a href="{{ route('edit_URL',$row->id) }}" title="Edit Page">
                            <i class="fa fa-edit" aria-hidden="true"></i>
                          </a>
                          @endif
                      </td>
                    </tr>
                  @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

	@endsection
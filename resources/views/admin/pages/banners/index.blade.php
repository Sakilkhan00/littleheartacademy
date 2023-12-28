@extends('admin.layouts.header')
	@section('title',__('List Banners'))
	@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Banners
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
              <h3 class="box-title">Banners</h3>
              <div style="float: right;">
                <a class="btn btn-info btn-sm" role="button" href="{{ route('banner.create') }}" title="Add Banner">+ Add Banner </a>
              </div>
            </div>
            <div class="box-body">
              <table id="table_list" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @php $i=1 @endphp
                  @foreach($banners as $row)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{ $row->title }}</td>
                      @if($row->type == 1)
                      <td>
                        <img width="100" src="{{ asset('public/assets/banner') }}/{{ $row->image }}">
                      </td>
                      @else
                      <td>Youtube Url</td>
                      @endif
                      <td>
                        <a href="{{ route('banner.destroy',$row->id) }}" title="Delete Item" onclick="return confirm('Are you sure you want to delete')">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </a>&nbsp;
                          <a href="{{ route('banner.edit',$row->id) }}" title="Edit Item">
                            <i class="fa fa-edit" aria-hidden="true"></i>
                          </a>
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
@extends('admin.layouts.header')
	@section('title',__('List selection'))
	@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Selection
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
              <h3 class="box-title">Selection</h3>
              <div style="float: right;">
                <a class="btn btn-info btn-sm" role="button" href="{{ route('add_selection') }}" title="Add Selection">+ Add Selection </a>
              </div>
            </div>
            <div class="box-body">
              <table id="table_list" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @php $i=1 @endphp
                  @foreach($selection as $row)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>
                        <img src="{{ url('public/assets/selection/'.$row->image_path) }}" style="border-radius: 50%;height: 80px;object-fit: cover;width:80px;background-size:cover;" class="img-fluid" alt="{{ $row->title }}">
                      </td>
                      <td>{{ $row->title }}</td>
                      
                      <td>
                        <a href="{{ url('admin/delete-selection/'.$row->id) }}" title="Delete Category" onclick="return confirm('Are you sure you want to delete')">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </a>&nbsp;
                          <a href="{{ url('admin/edit-selection/'.$row->id) }}" title="Edit Category">
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
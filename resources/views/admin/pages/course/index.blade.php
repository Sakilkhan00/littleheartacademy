@extends('admin.layouts.header')
  @section('title',__('List Course'))
  @section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Course
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
              <h3 class="box-title">Course</h3>
              <div style="float: right;">
                <a class="btn btn-info btn-sm" role="button" href="{{ route('course.create') }}" title="Add Blog">+ Add course </a>
              </div>
            </div>
            <div class="box-body">
              <table id="table_list" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Image</th>
                  <th>Title</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @php $i=1 @endphp
                  @foreach($course as $row)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td class="text-center">
                        <img src="{{ url('public/storage/course/'.$row->image) }}" style="object-fit: cover;width:80px;background-size:cover;" class="img-fluid" alt="Product Image">
                      </td>
                      <td>{{ $row->title }}</td>
                      <td>
                        @if($row['status'] == '1')
                          <span class="label label-success">Active</span>
                        @else
                          <span class="label label-danger">Not Active</span>
                        @endif
                      </td>
                      <td>
                        <a href="{{ url('admin/course/delete/'.$row->id) }}" title="Delete Guide" onclick="return confirm('Are you sure you want to delete')">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </a>&nbsp;
                          <a href="{{ route('course.edit',$row->id) }}" title="Edit Guide">
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
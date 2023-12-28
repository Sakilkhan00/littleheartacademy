@extends('admin.layouts.header')
	@section('title',__('List Navbar'))
	@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Navbar
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
              <h3 class="box-title">Navbar List</h3>
              <div style="float: right;">
                <a class="btn btn-info btn-sm" role="button" href="{{ route('navbar_add') }}" title="Add Blog">+ Add Navbar Menu </a>
                <a class="btn btn-info btn-sm" role="button" href="{{ route('add_createPage') }}" title="Add Blog">+ Add Sub Navbar Menu With Page </a>
                <a class="btn btn-info btn-sm" role="button" href="{{ url('admin/create-page-url') }}" title="Add Blog">+ Add Sub Navbar Menu With URL </a>
              </div>
            </div>
            <div class="box-body">
              <table id="table_list" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Name</th>
                  <th>Route	</th>
                  <th>Ordering</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @php $i=1 @endphp
                  @foreach($nav as $row)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{ $row->name }}</td>
                      <td>{{ $row->route }}</td>
                      <td>{{ $row->ordering }}</td>
                      <td>
                        <a href="{{ route('navbar_delete', $row->id) }}" title="Delete Category" onclick="return confirm('Are you sure you want to delete')">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </a>&nbsp;
                          <a href="{{ route('navbar_edit', $row->id) }}" title="Edit Category">
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
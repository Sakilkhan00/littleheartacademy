@extends('admin.layouts.header')
	@section('title',__('List Contact'))
	@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Contact
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
              <h3 class="box-title">Contact</h3>
              <div style="float: right;">
                
              </div>
            </div>
            <div class="box-body">
              <table id="table_list" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Name</th>
                  <th>Business Email</th>
                  <th>Request Type</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @php $i=1 @endphp
                  @foreach($contact as $row)
                    <tr>
                      <td>{{ $i++ }}</td>
                      <td>
                        {{ $row->name }}
                      </td>
                      <td>{{ $row->business_email }}</td>
                      <td>
                        {{$row->request_type}}
                      </td>
                      <td>
                        <a href="{{ route('contact_us.show', $row->id) }}" title="Show Data">
                            Show more details
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
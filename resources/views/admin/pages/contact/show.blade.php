@extends('admin.layouts.header')
	@section('title',__('Show Contact'))
	@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      Contact
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
              <h3 class="box-title">Show Contact</h3>
            </div>
          </div>
          <table class="table">
            <tr>
              <th width="200">Name</th>
              <td>{{ $contact->name }}</td>
            </tr>
            <tr>
              <th width="200">Last Name</th>
              <td><?php echo  $contact->last_name ? $contact->last_name : '-' ?></td>
            </tr>
            <tr>
              <th width="200">Phone Number</th>
              <td>{{$contact->phone}}</td>
            </tr>
            <tr>
              <th width="200">Business Email</th>
              <td>{{$contact->business_email}}</td>
            </tr>
            <tr>
              <th width="200">Company</th>
              <td>{{$contact->company}}</td>
            </tr>
            <tr>
              <th width="200">Request Type</th>
              <td>{{$contact->request_type}}</td>
            </tr>
              <th width="200">Description</th>
              <td>{{$contact->description}}</td>
            </tr>
            @if(!empty($contact->attach))
            <tr>
              <th width="200">Attachment file</th>
              <td>
                <a href="{{ asset('storage/pdf/'.$contact->attach) }}" target="_blank"><i class="fa fa-eye"></i></a>
              </td>
            </tr>
            @endif
          </table>
        </div>
      </div>

    </section>
  </div>
	@endsection
  
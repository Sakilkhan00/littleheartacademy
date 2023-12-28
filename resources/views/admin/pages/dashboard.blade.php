@extends('admin.layouts.header')
  @section('title',__('Dashboard'))
  @section('content')
    <div class="content-wrapper">
      <section class="content-header">
        <h1>Dashboard
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>

      <section class="content">
        <div class="row">
          
          <div class="col-lg-3 col-xs-6">          
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>{{ $total_blog }}</h3>
                <p>Total Blog </p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-xs-6">          
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>{{ $total_post }}</h3>
                <p>Total Job Post </p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

        </div>
    </section>
  </div>
  @endsection
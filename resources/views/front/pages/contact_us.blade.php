
@extends('front.layouts.app')
@section('title', "Contact Us")


<?php $config = CstmConfig();?>
@section('content') 
  <div class="section">
            <div class="container">
                <h1>Contact Us</h1>
            </div>
        </div>
        
        
<section class="contact py-5 bg-light" id="contact">
<div class="container">
    <div class="row">
        <div class="col-md-12">
                <h4><b>Get in touch</b></h4>
            <hr>
        </div>
        <div class="col-md-6">
            <div class="address">
                
                        <h4><b>Address:</b></h4>
            <ul class="list-unstyled">
                <li> {{$config['contact_address']}}</li>
            </ul>
            <!--<p>Please don't send anything to this address.</p>-->
            </div>
            <div class="email">
                        <h4><b>Email:</b></h4>
            <ul class="list-unstyled">
               
                <li> {{$config['contact_email']}}</li>
            </ul>
            </div>
            <div class="phone">
                        <h4><b>Phone:</b></h4>
                <ul class="list-unstyled">
                <li> {{$config['contact_phone']}}</li>
              
            </ul>
            </div>
            <hr>
            <div class="social">
            <ul class="list-inline list-unstyled">
                <li class="list-inline-item">
                    <a href="{{$config['facebook_link']}}"><i class="fa fa-facebook-square fa-2x"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="{{$config['youtube_link']}}"><i class="fa fa-youtube-play fa-2x"></i></a>
                </li>
            </ul>
        </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                     <form action="{{ route('contact_store') }}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <input id="Full Name" name="full_name" placeholder="Full Name" class="form-control" type="text" required="required">
                            </div>
                            <div class="form-group col-md-6">
                              <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" required="required">
                            </div>
                          </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input id="Mobile No." name="mobile" placeholder="Mobile No." class="form-control" required="required" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <select id="subject" name="subject" class="form-control" required="required">
                                    <option selected>Choose ...</option>
                                    <option value="New Buyer"> New Buyer</option>
                                    <option value="Auction"> Auction</option>
                                    <option value="Complaint"> Complaint</option>
                                    <option value="Feedback"> Feedback</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea id="comment" name="comment" cols="40" rows="5" placeholder="Your Message"class="form-control" required="required"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
</div>
</section>
<br clear="all"/>

<!-- Teacher end --> 
@endsection
       
       
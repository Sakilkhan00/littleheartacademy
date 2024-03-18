
@extends('front.layouts.app')
@section('title', "About Us")


<?php $config = CstmConfig();?>
@section('content') 
  <div class="section">
        <div class="container py-5 text-center">
            <h1>About Us</h1>
        </div>
    </div>
        
<section class="contact py-5 bg-light" id="contact">
<!-- 	<div class="row m-0">
	    <div class="col-lg-5 col-12">
	    	<div class="img-cver">
	    		<img decoding="async" src="https://img.etimg.com/thumb/msid-92194882,width-420,height-315,imgsize-1591359,,resizemode-75/edtech.jpg" title="" alt="" loading="lazy">
	    	</div>
	    </div>
	    <div class="col-lg-7 col-12">
	    	<h2 class="elementor-heading-title">About Us</h2>
	    	<p>This coaching provides preparation for the entrance exam for sainik school, military schools, Navodaya Vidyalaya's, Gurukul and CHS.</p>
	    </div>
	</div> -->


	<div class="container py-3">
		<div class="text-center">
	  	<h2 class="elementor-heading-title">About Us</h2>
	  	<p>This coaching provides preparation for the entrance exam for sainik school, military schools, Navodaya Vidyalaya's, Gurukul and CHS.</p>
	  </div>
		<h3><b>Why Us</b></h3>
			<ol style="margin-left: 20px">
        <li>Excellent staff</li>
        <li>Weekly test with results displayed to the parents</li>
        <li>Good accommodation</li>
        <li>Good food</li>
        <li>A.C. classrooms</li>
        <li>Highest success rate in exams.</li>
      </ol>
		
		<h5><strong>Our Vision</strong></h5>
		<p>Impart quality education to meet the needs of profession and society, and achieve excellence in teaching-learning and research. Attract and develop talented and committed human resource, and provide an environment conducive to innovation, creativity, team-spirit and entrepreneurial leadership..</p>

		<h5><strong>Our Mission</strong></h5>
			<ol style="margin-left: 20px">
        <li>Set goals</li>
        <li>Create an action plan to reach goals</li>
        <li>Generate better results</li>
        <li>Set their practice and approach in the right direction</li>
        <li>Make their vision achievable</li>
      </ol>
	</div>
</section>
<style type="text/css">
	.img-cver{
	    padding: 3em 3em 0em 0em;
	    background-image: url(https://navodayawale.com/wp-content/uploads/2022/09/Pattern.png);
	    background-position: top right;
	    background-repeat: no-repeat;
	}
	.img-cver img {
		width: 100%;
	    height: 320px;
	    object-fit: cover;
	    object-position: center center;
	    border-radius: 10px 10px 10px 10px;
	}
	.elementor-heading-title {
	    color: #D4AF37;
	    text-transform: uppercase;
	}
</style>
@endsection
       
       
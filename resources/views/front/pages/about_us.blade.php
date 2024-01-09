
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
	<div class="row m-0">
	    <div class="col-lg-5 col-12">
	    	<div class="img-cver">
	    		<img decoding="async" src="https://img.etimg.com/thumb/msid-92194882,width-420,height-315,imgsize-1591359,,resizemode-75/edtech.jpg" title="" alt="" loading="lazy">
	    	</div>
	    </div>
	    <div class="col-lg-7 col-12">
	    	<h6 class="elementor-heading-title">About Institute</h6>
	    	<p>Navodaya wale exists to help students. We take a unique and innovative approach to teaching that helps students connect with the subject matter they need to master. Through personalized and focused teaching processes, our students develop the tools they need for ongoing success in their fields of study. Our success depends on our attention to the needs of our students and truly helping them to achieve – we don’t succeed unless our students succeed.
			<br>
			The ethos of navodaya wale is to recognize the potential in every student and provide the highest quality of education to help them succeed. We are here to help our students achieve their full academic potential using unique teaching methods (utm). Our teachers consist of qualified teachers, professionals and current undergraduates. We believe that learning a subject from different perspectives allows a student to thoroughly understand the topic. 
			<br>
			Our main goal at navodaya wale is to ensure that we can create an environment that will be inspiring to our students and can provide them with the confidence and enthusiasm to attain the highest possible results. Our teachers are experienced, highly academic and strive to offer the best quality education.
		</p>
	    </div>
	</div>
	<div class="container py-3">
		<h3><b>Why Us</b></h3>
		<p>Navodaya wale is a nurturing place. We care about each other. We accept others for whom they are. Students don’t compete against each other; they compete against themselves to be better – to aim high. Character-building happens every day. We believe boys and girls learn best when they learn together. We have 20 diversity and inclusion standards in our curriculum, so students leave here believing the best decisions are made when many different voices are heard. 
		<br>
		We give children an opportunity to be extraordinary. Our small size, coupled with caring teachers and coaches, allows us to know, understand, proactively guide and love every child. Our centers of experiences are some of the ways we give students an opportunity to develop their passions.</p>
		
		<h5><strong>Our Vision</strong></h5>
		<p>Navodaya wale is an innovative learning environment that develops children into purpose-driven leaders of the future. Our focus on diversity, community, and resilience creates an educational experience unlike any other.</p>

		<h5><strong>Our Mission</strong></h5>
		<p>Navodaya wale is a diverse community dedicated to educating in mind, body, and spirit through particular emphasis upon academic excellence and aesthetic appreciation. Navodaya wale seeks to produce men of character and integrity who have the skills and ability to make a positive contribution to the communities in which they live and work.</p>
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
       
       
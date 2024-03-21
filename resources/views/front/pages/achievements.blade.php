@extends('front.layouts.app')
@section('title', "Achievements Selection Images")


<?php $config = CstmConfig();?>
@section('content')
<section class="about"> 
		<div class="innerHeading-wrap"> 
			<div class="container"> 
				<h1>Achievements &amp; Selections</h1> 
			</div> 
		</div> 
</section> 
  <div class="section">
        <div class="gallery-wrap ">
            <div class="container">
	            <div class="row">
	                @if(!empty($achievements))
	                @foreach($achievements as $img)
	                <div class="col-lg-4 col-md-6">
	                    <div class="galleryImg">
	                        <img loading="eager" class="w-100" src="{{ asset('public/assets/selection')}}/{{$img->image_path}}" alt="{{$img->title}}"  height="300px">
	                        <div class="portfolio-overley">
	                            <div class="content"> 
	                                <a href="{{ asset('public/assets/selection')}}/{{$img->image_path}}" class="fancybox image-link" data-fancybox="images" title="{{$img->title}}"><i class="fas fa-search-plus"></i></a> 
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                @endforeach
	                @endif
	            </div>
            </div>
        </div>
    </div>

@endsection
       
       
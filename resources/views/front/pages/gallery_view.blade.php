
@extends('front.layouts.app')
@section('title', "Gallery Images")


<?php $config = CstmConfig();?>
@section('content') 
  <div class="section">
        <div class="container py-5 text-center">
            <h1>Photo Gallery</h1>
        </div>
        <div class="gallery-wrap ">
            <div class="container">
                        <div class="row">
                            @if(!empty($gallery))
                            @foreach($gallery as $img)
                            <div class="col-lg-4 col-md-6">
                                <div class="galleryImg"><img class="w-100" src="{{ asset('public/assets/gallery')}}/{{$img->image_path}}" alt="{{$img->title}}"  height="300px">
                                    <div class="portfolio-overley">
                                        <div class="content"> <a href="{{ asset('public/assets/gallery')}}/{{$img->image_path}}" class="fancybox image-link" data-fancybox="images" title="{{$img->title}}"><i class="fas fa-search-plus"></i></a> </div>
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
       
       
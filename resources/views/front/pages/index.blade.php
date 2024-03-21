@extends('front.layouts.app') 
@section('title', "Little Heart Academy") 
<?php $config = CstmConfig();?> 
@section('content') 
@if(!empty($banner)) 

<div class="tp-banner-container">
  <div class="tp-banner">
    <ul> 
        @foreach($banner as $item) 
            @if($item->type == 0) 
            <li data-slotamount="7" data-transition="3dcurtain-horizontal" data-masterspeed="1000" data-saveperformance="on">
            <iframe width="100%" height="500" src="{{$item->video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="caption lft large-title tp-resizeme slidertext2" data-x="center" data-y="170" data-speed="600" data-start="1600">
            <span></span>
            </div>
        </li> 
        @else 
        <li data-slotamount="7" data-transition="3dcurtain-horizontal" data-masterspeed="1000" data-saveperformance="on">
            <img loading="eager" src="{{ asset('public/assets/banner')}}/{{$item->image}}" alt="">
            <div class="caption lft large-title tp-resizeme slidertext2" data-x="center" data-y="170" data-speed="600" data-start="1600">
            <span></span>
            </div>
        </li>
        <a href="{{ url('contact-us') }}" class="contact_btn_bnner">Contact us</a> 
        @endif 
      @endforeach 
    </ul>
  </div>
</div> 
@endif
<!-- Revolution slider end -->
<!-- School Start -->
<div class="our-course-categories-two ">
  <div class="container">
    <div class="categories_wrap">
      <ul class="row unorderList">
        <li class="col-lg-3 col-md-6">
          <!-- single-course-categories -->
          <div class="categories-course">
            <div class="item-inner">
              <div class="cours-icon">
                <span class="coure-icon-inner">
                  <img loading="eager" src="{{ asset('public/assets/images/teacher.png')}}" alt="teacher">
                </span>
              </div>
              <div class="cours-title">
                <h4>Expert teachers</h4>
                <p>“ One book, one pen, one child and one teacher can change the world.”</p>
              </div>
            </div>
          </div>
          <!--// single-course-categories -->
        </li>
        <li class="col-lg-3 col-md-6">
          <!-- single-course-categories -->
          <div class="categories-course">
            <div class="item-inner">
              <div class="cours-icon">
                <span class="coure-icon-inner">
                  <img loading="eager" src="{{ asset('public/assets/images/book.png')}}" alt="Quality Education">
                </span>
              </div>
              <div class="cours-title">
                <h4>Quality Education</h4>
                <p>"An investment in knowledge pays the best interest."</p>
              </div>
            </div>
          </div>
          <!--// single-course-categories -->
        </li>
        <li class="col-lg-3 col-md-6">
          <!-- single-course-categories -->
          <div class="categories-course">
            <div class="item-inner">
              <div class="cours-icon">
                <span class="coure-icon-inner">
                  <img loading="eager" src="{{ asset('public/assets/images/support.png')}}" alt="Life Time Support">
                </span>
              </div>
              <div class="cours-title">
                <h4>Life Time Support</h4>
                <p>"Education is simply the soul of a society as it passes from one generation to another."</p>
              </div>
            </div>
          </div>
          <!--// single-course-categories -->
        </li>
        <!-- single-course-categories -->
        <li class="col-lg-3 col-md-6">
          <div class="categories-course">
            <div class="item-inner">
              <div class="cours-icon">
                <span class="coure-icon-inner">
                  <img loading="eager" src="{{ asset('public/assets/images/scholarship.png')}}" alt="Latest Updates">
                </span>
              </div>
              <div class="cours-title">
                <h4>Latest Updates</h4>
                <p>* Special Education</p>
                <p>* Hostel Facility Available</p>
                <p>* Affordable Courses</p>
              </div>
            </div>
          </div>
          <!--// single-course-categories -->
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- School End -->
<!-- About Start -->
<section class="contact py-5 bg-light" id="contact">
  <div class="container">
      <div class="row m-0">
          <div class="col-lg-5 col-12 d-flex align-items-center">
            <div class="img-cver">
              <img decoding="async" src="https://img.etimg.com/thumb/msid-92194882,width-420,height-315,imgsize-1591359,,resizemode-75/edtech.jpg" title="" alt="" loading="lazy">
            </div>
          </div>
          <div class="col-lg-7 col-12">
          <div class="title">
            <h2>About Us</h2>
          </div>
            <p> This coaching provides preparation for the entrance exam for sainik school, military schools, Navodaya Vidyalaya's, Gurukul and CHS.</p>
            <ul class="nav nav-pills mb-3" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#vision" role="tab">Vision</a>
              </li>
              <li class="nav-item ml-3">
                <a class="nav-link" data-toggle="tab" href="#mission" role="tab">Mission</a>
              </li>
              <li class="nav-item ml-3">
                <a class="nav-link" data-toggle="tab" href="#why-us" role="tab">Why us</a>
              </li>
            </ul><!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="vision" role="tabpanel">
                  <p>Impart quality education to meet the needs of profession and society, and achieve excellence in teaching-learning and research. Attract and develop talented and committed human resource, and provide an environment conducive to innovation, creativity, team-spirit and entrepreneurial leadership.</p>
                </div>
                <div class="tab-pane" id="mission" role="tabpanel">
                  <ol>
                    <li>Set goals</li>
                    <li>Create an action plan to reach goals</li>
                    <li>Generate better results</li>
                    <li>Set their practice and approach in the right direction</li>
                    <li>Make their vision achievable</li>
                  </ol>
                </div>
                <div class="tab-pane" id="why-us" role="tabpanel">
                  <ol>
                    <li>Excellent staff</li>
                    <li>Weekly test with results displayed to the parents</li>
                    <li>Good accommodation</li>
                    <li>Good food</li>
                    <li>A.C. classrooms</li>
                    <li>Highest success rate in exams.</li>
                  </ol>
                </div>
              </div>
              <div class="readmore">
                <a href="{{ url('about-us') }}">Read More</a>
              </div>
          </div>
      </div>
  </div>
</section>

<section class="new_bg">
  <div class="container py-5">
    <div class="col-12 col-lg-10 mx-auto text-white text-center">
      <h2>Supporting Students to know their ability </h2>
      <p class="text-white">One of the best places to prepare for exams is Little Heart Sainik Academy. It offers courses for Sainik, Military, Navodaya Vidyalaya, Gurukul, Central Hindu School, Army Public School, and Devnarayana Yojna. Our faculty is dedicated, intelligent, and able to continuously deliver excellent results.</p>
        <div class="readmore">
          <a href="{{ url('contact-us') }}">Contact Us</a>
      </div>
    </div>
  </div>
</section>
<div class="about-wrap  " id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="aboutImg">
          <img loading="eager" src="{{ asset('public/assets/uploads/institute_img.jpg')}}" alt="Institute" width="500px" height="500px">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="about_box">
          <div class="title">
            <h2>An Institute for Academy & <span>Competitive Excellence</span>
            </h2>
          </div>
          <p>Institute provide valuable insights into various academic courses as well as competitive exams, including time-saving strategies </p>
          <ul class="edu_list">
            <li>
              <div class="learing-wrp">
                <div class="edu_icon">
                  <img loading="eager" src="{{ asset('public/assets/images/education.png')}}" alt="Regular Coaching">
                </div>
                <div class="learn_info">
                  <h3>Regular Coaching Classes</h3>
                </div>
              </div>
            </li>
            <li>
              <div class="learing-wrp">
                <div class="edu_icon">
                  <img loading="eager" src="{{ asset('public/assets/images/academy.png')}}" alt="Extra Curricular">
                </div>
                <div class="learn_info">
                  <h3>Extra Curricular Activities</h3>
                </div>
              </div>
            </li>
            <li>
              <div class="learing-wrp">
                <div class="edu_icon">
                  <img loading="eager" src="{{ asset('public/assets/images/class.png')}}" alt="Special Education">
                </div>
                <div class="learn_info">
                  <h3>Special Education</h3>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About End -->
<!-- Choice Start -->
<div class="choice-wrap ">
  <div class="container">
    <div class="title">
      <h1>We Are The Best <span>Choice For Your Child</span>
      </h1>
    </div>
    <p></p>
    <div class="readmore">
      <a href="{{ url('contact-us') }}">Contact Us</a>
    </div>
  </div>
</div>
<!-- Choice End --> 
@if($config['gallery_section'] == 1)
<!-- Gallery Start -->
<div class="gallery-wrap ">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="gallery_box">
          <div class="gallery_left text-center">
            <div class="title">
              <h1>Photo Gallery</h1>
            </div>
            <p>Hard to forget such strong memories with the best people.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="row"> 
            @if(!empty($gallery)) 
            @foreach($gallery as $img) 
            <div class="col-lg-3 col-md-6">
              <div class="galleryImg">
                <img loading="eager" src="{{ asset('public/assets/gallery')}}/{{$img->image_path}}" alt="{{$img->title}}" width="300px" height="300px">
                <div class="portfolio-overley">
                    <div class="content">
                      <a href="{{ asset('public/assets/gallery')}}/{{$img->image_path}}" class="fancybox image-link" data-fancybox="images" title="{{$img->title}}">
                          <i class="fas fa-search-plus"></i>
                      </a>
                    </div>
                </div>
              </div>
            </div> 
          @endforeach 
          @endif 
        </div>
      </div>
      <div class="col-lg-12 text-center">
        <div class="readmore ">
          <a href="{{ url('gallery-view') }}">View All Gallery</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Gallery End --> 
@endif
<!-- Enroll Start -->
<div class="choice-wrap enroll-wrap">
  <div class="container">
    <div class="title">
      <h1>Call To Enroll Your Child</h1>
    </div>
    <p></p>
    <div class="phonewrp">
      <img loading="eager" src="{{ asset('public/assets/images/phone_icon.png')}}" alt="">
      <a href="tel:{{$config['contact_phone']}}">{{$config['contact_phone']}}</a>
    </div>
  </div>
</div>
<!-- Enroll End -->
<!-- Teacher Start --> 
@if($config['course_section'] == 1) 
<section class="teachers-area-three teacher-wrap pt-100 pb-70  ">
  <div class="container content-row">
    <div class="title center_title">
      <h1>Our Courses</h1>
    </div>
    <div class="row"> 
        @if(!empty($course)) 
        @foreach($course as $item) 
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 mt-4">
            <a class="card shadow course_box h-100" href="#">
              <img loading="eager" src="{{ asset('public/storage/course/')}}/{{$item->image}}" class="card-img-top" alt="{{$item->title}}">
              <div class="card-body">
                <h5 class="card-title">{{$item->title}}</h5>
              </div>
            </a>
          </div>
        <!-- <div class="col-lg-3 col-sm-6">
          <div class="single-teachers">
            <div class="teacherImg">
              <img loading="eager" src="{{ asset('public/storage/course/')}}/{{$item->image}}" alt="{{$item->title}}">
            </div>
            <div class="teachers-content">
              <h4>
                <a href="#">{{$item->title}}</a>
              </h4>
            </div>
        </div>
      </div>  -->
      @endforeach 
      @else 
      <h6>Course available soon</h6> 
      @endif 
    </div>
  </div>
</section> 
@endif
<!-- Teacher end -->
<div id="myModal" class="modal fade applysamplepaper in" role="dialog" style="display: block;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <h4 class="modal-title ">Apply for registration</h4>
        <button type="button" class="close colse_modal" data-dismiss="modal">×</button>
        <br clear="all">
        
        <form id="samplepaper_form"> 
          @csrf 
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Student Name <span class="compulsory">*</span>
                </label>
                <input type="text" name="student_name" placeholder="Enter Student Name" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>DOB <span class="compulsory">*</span>
                </label>
                <input type="date" name="dob" placeholder="Enter DOB" class="form-control" required="required">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>State <span class="compulsory">*</span>
                </label>
                <select name="state" id="state" class="form-control" required="">
                  <option value="">Select State</option>
                  <option value="Andaman &amp; Nicobar Islands" rel="1">Andaman &amp; Nicobar Islands</option>
                  <option value="Andhra Pradesh" rel="2">Andhra Pradesh</option>
                  <option value="Arunachal Pradesh" rel="3">Arunachal Pradesh</option>
                  <option value="Assam" rel="4">Assam</option>
                  <option value="Bihar" rel="5">Bihar</option>
                  <option value="Chandigarh" rel="6">Chandigarh</option>
                  <option value="Chhattisgarh" rel="7">Chhattisgarh</option>
                  <option value="Dadra &amp; Nagar Haveli" rel="8">Dadra &amp; Nagar Haveli</option>
                  <option value="Daman &amp; Diu" rel="9">Daman &amp; Diu</option>
                  <option value="Delhi" rel="10">Delhi</option>
                  <option value="Goa" rel="11">Goa</option>
                  <option value="Gujarat" rel="12">Gujarat</option>
                  <option value="Haryana" rel="13">Haryana</option>
                  <option value="Himachal Pradesh" rel="14">Himachal Pradesh</option>
                  <option value="Jammu &amp; Kashmir" rel="15">Jammu &amp; Kashmir</option>
                  <option value="Jharkhand" rel="16">Jharkhand</option>
                  <option value="Karnataka" rel="17">Karnataka</option>
                  <option value="Kerala" rel="18">Kerala</option>
                  <option value="Lakshadweep" rel="19">Lakshadweep</option>
                  <option value="Madhya Pradesh" rel="20">Madhya Pradesh</option>
                  <option value="Maharashtra" rel="21">Maharashtra</option>
                  <option value="Manipur" rel="22">Manipur</option>
                  <option value="Meghalaya" rel="23">Meghalaya</option>
                  <option value="Mizoram" rel="24">Mizoram</option>
                  <option value="Nagaland" rel="25">Nagaland</option>
                  <option value="Odisha" rel="26">Odisha</option>
                  <option value="Puducherry" rel="27">Puducherry</option>
                  <option value="Punjab" rel="28">Punjab</option>
                  <option value="Rajasthan" rel="29">Rajasthan</option>
                  <option value="Sikkim" rel="30">Sikkim</option>
                  <option value="Tamil Nadu" rel="31">Tamil Nadu</option>
                  <option value="Tripura" rel="32">Tripura</option>
                  <option value="Uttar Pradesh" rel="33">Uttar Pradesh</option>
                  <option value="Uttarakhand" rel="34">Uttarakhand</option>
                  <option value="West Bengal" rel="35">West Bengal</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>City <span class="compulsory">*</span>
                </label>
                <select name="city" id="city" class="form-control" required="">
                  <option value="">Select City</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Father Name <span class="compulsory">*</span>
                </label>
                <input type="text" name="father_name" placeholder="Enter Father's Name" class="form-control" required="required">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Mobile Number <span class="compulsory">*</span>
                </label>
                <input type="text" pattern="[1-9]{1}[0-9]{9}" minlength="10" maxlength="10" name="mobile1" id="mobile_no_1" placeholder="Enter Mobile Number" class="form-control" required="required">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Pincode <span class="compulsory">*</span>
                </label>
                <input type="text" name="pincode" placeholder="Enter Pincode" class="form-control" required="required">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Apply For Class <span class="compulsory">*</span>
                </label>
                <select name="class_name" id="class_name" class="form-control">
                  <option value="Class 4">Class 4</option>
                  <option value="Class 5">Class 5</option>
                  <option value="Class 6">Class 6</option>
                  <option value="Class 7">Class 7</option>
                  <option value="Class 8">Class 8</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Address <span class="compulsory">*</span>
                </label>
                <textarea rows="3" name="address" placeholder="Enter Your Address" class="form-control" required="required"></textarea>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Any Question? </label>
                <textarea rows="3" name="remark" placeholder="Enter Your Message" class="form-control"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 float-right ">
              <div class="form-group float-right">
                <button type="submit" class="samplepaper_form_btn btn btn-primary mybutton6">Submit</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div> 

<!-- Notify -->
<div id="popup_message" class="popup_message">
      <div class="popup-content">
          <h5 style="color:green;" id="popup_content"></h5>
          <p id="countdown">5</p>
          <button id="closePopup" class="btn btn-danger">Close</button>
      </div>
  </div>

@endsection

@section("footer_script")
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script>
function showPopup(message, duration) {
    $('#popup_content').text(message);
    $('#popup_message').fadeIn();
    var seconds = duration;

    var countdownInterval = setInterval(function () {
        seconds--;
        $('#countdown').text(seconds);

        if (seconds <= 0) {
            clearInterval(countdownInterval);
            $('#popup_message').fadeOut();
        }
    }, 1000);
}

$("#closePopup").click(function(){
   $('#popup_message').fadeOut();
});
                   

    if ($("#samplepaper_form").length > 0) {
      $("#samplepaper_form").validate({
      rules: {
         student_name: {
            required: true,
         },
         dob: {
            required: true,
         },
         state: {
            required: true,
         }, 
         city: {
            required: true,
         }, 
         pincode: {
            required: true,
         },  
         mobile1: {
            required: true,
            number:true,
            maxlength:10
         }, 
         state: {
            required: true,
         },    
      },
      messages: {
         student_name: {
            required: "Please enter student name",
         },
      },
      submitHandler: function(form) {
            $.ajaxSetup({
               headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
            });
            $('.samplepaper_form_btn').html('Please Wait...');
            $(".samplepaper_form_btn").attr("disabled", true);
              $.ajax({
                 url: "{{ route('samplepaper.store') }}",
                 type: "POST",
                 data: $('#samplepaper_form').serialize(),
                 success: function( response ) {
                    $('#samplepaper_form')[0].reset();
                    $('.samplepaper_form_btn').html('Submit');
                    $(".samplepaper_form_btn").attr("disabled", false);
                    $('.colse_modal').trigger('click');
                    showPopup("Request sent successfully.",5);
                 }
              });
         }
      })
   }
</script>
@endsection
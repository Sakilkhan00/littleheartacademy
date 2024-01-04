
@extends('front.layouts.app')
@section('title', "Little Heart Academy")
<?php $config = CstmConfig();?>
@section('content') 
<style>
    element.style {
}
a {
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    transition: all .3s ease;
    color: #000000;
}


element.style {
}
img {
    max-width: 80%;
}
img {
    vertical-align: middle;
    border-style: none;
}
* {
    margin: 0;
    padding: 0;
}
</style>



<!-- Revolution slider start -->
@if(!empty($banner))
        <div class="tp-banner-container">
   <div class="tp-banner">
      <ul>
        @foreach($banner as $item)
            @if($item->type == 0)
             <li data-slotamount="7" data-transition="3dcurtain-horizontal" data-masterspeed="1000" data-saveperformance="on">
                <iframe width="100%" height="700" src="{{$item->video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="caption lft large-title tp-resizeme slidertext2" data-x="center" data-y="170" data-speed="600" data-start="1600"><span>  </span></div>
             </li>
         @else
             <li data-slotamount="7" data-transition="3dcurtain-horizontal" data-masterspeed="1000" data-saveperformance="on">
                <img src="{{ asset('public/assets/banner')}}/{{$item->image}}" alt="">
                <div class="caption lft large-title tp-resizeme slidertext2" data-x="center" data-y="170" data-speed="600" data-start="1600"><span>  </span></div>
             </li>
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
                                    <div class="cours-icon"> <span class="coure-icon-inner"> <img src="{{ asset('public/assets/images/teacher.png')}}" alt=""> </span> </div>
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
                                    <div class="cours-icon"> <span class="coure-icon-inner"> <img src="{{ asset('public/assets/images/book.png')}}" alt=""> </span> </div>
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
                            <div class="categories-course" >
                                <div class="item-inner">
                                    <div class="cours-icon"> <span class="coure-icon-inner"> <img src="{{ asset('public/assets/images/support.png')}}" alt=""> </span> </div>
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
              <div class="cours-icon"> <span class="coure-icon-inner"> <img src="{{ asset('public/assets/images/scholarship.png')}}" alt=""> </span> </div>
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
        <div class="about-wrap  " id="about">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-7">
                        <div class="aboutImg"><img src="{{ asset('public/assets/uploads/1699423354_97b08fe242f7899e0568.jpg')}}" alt="" width="500px" height="500px"></div>
                    </div>
                    <div class="col-lg-5">
                        <div class="about_box">
                            <div class="title">
                                <h2>An Institute for Academy & <span>Competitive Excellence</span></h2>
                            </div>
                            <p>Institute provide valuable insights into various academic courses as well as competitive exams, including time-saving strategies </p>
                            <ul class="edu_list">
                                <li>
                                    <div class="learing-wrp">
                                        <div class="edu_icon"><img src="{{ asset('public/assets/images/education.png')}}" alt=""></div>
                                        <div class="learn_info">
                                            <h3>Regular Coaching Classes</h3>
                                            
                                        </div>
                                    </div>
                                </li>
                    
                                <li>
                                    <div class="learing-wrp">
                                        <div class="edu_icon"><img src="{{ asset('public/assets/images/academy.png')}}" alt=""></div>
                                        <div class="learn_info">
                                            <h3>Extra Curricular Activities</h3>
                                            
                                        </div>
                                    </div>
                                </li>
                                   <li>
                                    <div class="learing-wrp">
                                          <div class="edu_icon"><img src="{{ asset('public/assets/images/class.png')}}"></div>
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
                    <h1>We Are The Best <span>Choice For Your Child</span></h1>
                </div>
                <p></p>
                <div class="readmore"><a href="{{ url('contact-us') }}">Contact Us</a></div>
            </div>
        </div>
        <!-- Choice End --> 

        @if($config['gallery_section'] == 1)
        <!-- Gallery Start -->
        <div class="gallery-wrap ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="gallery_box">
                            <div class="gallery_left">
                                <div class="title">
                                    <h1>Photo Gallery</h1>
                                </div>
                                <p>Hard to forget such strong memories with the best people.</p>
                                
                                <div class="readmore"><a href="#">View All Gallery</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            @if(!empty($gallery))
                            @foreach($gallery as $img)
                            <div class="col-lg-4 col-md-6">
                                <div class="galleryImg"><img src="{{ asset('public/assets/gallery')}}/{{$img->image_path}}" alt="" width="300px" height="200px">
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
                <div class="phonewrp"><img src="{{ asset('public/assets/images/phone_icon.png')}}" alt=""><a href="tel:{{$config['contact_phone']}}">{{$config['contact_phone']}}</a></div>
            </div>
        </div>
        <!-- Enroll End --> 
<!-- Teacher Start -->
@if($config['course_section'] == 1)
<section class="teachers-area-three teacher-wrap pt-100 pb-70  ">
  <div class="container">
    <div class="title center_title">
      <h1>Our Courses</h1>
    </div>
    <div class="row">
        @if(!empty($course))
        @foreach($course as $item)
        <div class="col-lg-3 col-sm-6">
            <div class="single-teachers">
            <div class="teacherImg"> <img src="{{ asset('public/storage/course/')}}/{{$item->image}}" alt="{{$item->title}}">
              </div>
              <div class="teachers-content">
                <h4>
                    <a href="#">{{$item->title}}</a>
                    <!-- <a href="{{ route('course.view', $item->slug) }}">{{$item->title}}</a> -->
                </h4>
              </div>
            </div>
          </div>
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
                <h4 class="modal-title ">Apply Free Solved Sample Papers </h4>

                <button type="button" class="close colse_modal" data-dismiss="modal">×</button>
                <br clear="all">
                <script>
                    function check()
                    {
                        if (document.getElementById("mobile_no_1").value == document.getElementById("mobile_no_2").value)
                        {
                            alert("Mobile No. 1 can't be same Mobile No. 2");
                            return false;
                        }
                        return true;
                    }
                </script>
                <form action="{{ route('samplepaper.store') }}" method="post" enctype="multipart/form-data" onsubmit="return check();">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Student Name <span class="compulsory">*</span></label>
                                <input type="text" name="student_name" placeholder="Enter Student Name" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email Id <span class="compulsory">*</span></label>
                                <input type="email" name="email" placeholder="Enter Email Address" class="form-control" required="required">
                            <div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>DOB <span class="compulsory">*</span></label>
                                <input type="date" name="dob" placeholder="Enter DOB" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                   <label>State <span class="compulsory">*</span></label>
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
                                <label>City <span class="compulsory">*</span></label>                     
                                <select name="city" id="city" class="form-control" required="">
                                    <option value="">Select City</option>                            
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pincode <span class="compulsory">*</span></label>
                                <input type="text" name="pincode" placeholder="Enter Pincode" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Landmark <span class="compulsory">*</span></label>
                                <input type="text" name="landmark" placeholder="Enter Landmark" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mobile Number<span class="compulsory">*</span></label>
                                <input type="text" pattern="[1-9]{1}[0-9]{9}" minlength="10" maxlength="10" name="mobile1" id="mobile_no_1" placeholder="Enter Mobile Number" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mobile Number<span class="compulsory">*</span></label>
                                <input type="text" oninput="check()" pattern="[1-9]{1}[0-9]{9}" minlength="10" maxlength="10" name="mobile2" id="mobile_no_2" placeholder="Enter Mobile Number" class="form-control" required="required">
                            </div>
                        </div>

                    </div>
                    <div class="row ">
                        <div class="col-md-4">               
                            <h5 class="one">Family Details<br>
                                <small style="font-size:13px;">All fields are mandatory<span class="compulsory">*</span></small>
                            </h5>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Father Name <span class="compulsory">*</span></label>
                                <input type="text" name="father_name" placeholder="Enter Father's Name" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Father Occupation <span class="compulsory">*</span></label>
                                <input type="text" name="father_occupation" placeholder="Enter Father Occupation" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Annual Family Income <span class="compulsory">*</span></label>
                                <select type="text" name="annual_family_income" class="form-control" required="required">
                                    <option value="">Select Option</option>
                                    <option value="0 to 1 lakh">0 to 1 lakh</option>
                                    <option value="1 to 2 lakh">1 to 2 lakh</option>
                                    <option value="2 to 3 lakh">2 to 3 lakh</option>
                                    <option value="3 to 4 lakh">3 to 4 lakh</option>
                                    <option value="4 to 5 lakh">4 to 5 lakh</option>
                                    <option value="5 to 6 lakh">5 to 6 lakh</option>
                                    <option value="6 to 8 lakh">6 to 8 lakh</option>
                                    <option value="8 to 10 lakh and more">8 to 10 lakh and more</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mobile No.<span class="compulsory">*</span></label>
                                <input type="text" pattern="[1-9]{1}[0-9]{9}" minlength="10" maxlength="10" name="mobile3" id="mobile_no_3" placeholder="Enter Mobile No" class="form-control" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-6">               
                            <h5 class="one">Sample Paper &amp; Demo Class Details<br>
                                <small style="font-size:13px;">All fields are mandatory<span class="compulsory">*</span></small>
                            </h5>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Apply For Class <span class="compulsory">*</span></label>
                                <select name="class_name" id="class_name" class="form-control">
                                    <option value="Class 1">Class 1</option>
                                    <option value="Class 2">Class 2</option>
                                    <option value="Class 3">Class 3</option>
                                    <option value="Class 4">Class 4</option>
                                    <option value="Class 5">Class 5</option>
                                    <option value="Class 6">Class 6</option>
                                    <option value="Class 7">Class 7</option>
                                    <option value="Class 8">Class 8</option>
                                    <option value="Class 9">Class 9</option>
                                    <option value="Class 10">Class 10</option>
                                    <option value="Class 11">Class 11</option>
                                    <option value="Class 12">Class 12</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select Free Solved Sample Papers<span class="compulsory">*</span></label>
        <!--                        <input type="text" name="class" placeholder="Enter Class Name" class="form-control" required="required"/>-->
                                <select name="class" class="form-control" required="required">
                                    <option value="CAREER DEFENCE SCHOOL">CAREER DEFENCE SCHOOL</option>
                                    <option value="SAINIK SCHOOL">SAINIK SCHOOL</option>
                                    <option value="MILITARY SCHOOL">MILITARY SCHOOL</option>
                                    <option value="RIMC DEHRADUN">RIMC DEHRADUN</option>
                                    <option value="GURUKUL KURUKSHETRA">GURUKUL KURUKSHETRA</option>
                                    <option value="GURUKUL NILOKHERI">GURUKUL NILOKHERI</option>                                                                                             
                                    <option value="RAI SPORT SCHOOL">RAI SPORT SCHOOL</option>
                                    <option value="UP SAINIK SCHOOL LUCKNOW">UP SAINIK SCHOOL LUCKNOW</option>
                                    <option value="KITTUR SAINIK SCHOOL">KITTUR SAINIK SCHOOL</option>
                                    <option value="APS DAGSHAI">APS DAGSHAI</option>
                                    <option value="CENTRAL HINDU SCHOOL">CENTRAL HINDU SCHOOL(CHS)</option>
                                    <option value="NAVODAYA VIDHYALAYA">NAVODAYA VIDHYALAYA</option>
                                    <option value="GURUKUL CHAMANVATIKA">GURUKUL CHAMANVATIKA</option>
                                    <option value="OAK GROVE SCHOOL">OAK GROVE SCHOOL</option>
                                    <option value="U.P. Vidhya Gyan for Class 6">U.P. Vidhya Gyan for Class 6</option>
                                    <option value="NTSE For Class 10">NTSE For Class 10</option>
                                    <option value="NDA For Class 12">NDA For Class 12</option>
                                    <option value="ALIGARH MUSLIM UNIVERSITY">ALIGARH MUSLIM UNIVERSITY</option>  
                                    <option value="Merchant Navy For Class 12">Merchant Navy For Class 12</option>
                                    <option value="IIT-JEE For Class 12">IIT-JEE For Class 12</option>
                                    <option value="NEET For Class 12">NEET For Class 12</option>
                                    <option value="MNS FOR CLASS 12">MNS FOR CLASS 12</option>
                                    <option value="Nursing Assistant For Class 12">Nursing Assistant For Class 12</option>
                                    <option value="R.K. Mission for Class 6">MNS FOR CLASS 12</option>
                                    <option value="Simultala Awasiya Vidhyalaya for Class 6">Simultala Awasiya Vidhyalaya for Class 6</option>
                                    <option value="Netarhat Awasiya Vidhyalaya for Class 6">Netarhat Awasiya Vidhyalaya for Class 6</option>
                                    <option value="Bhonsala Military School for 6 to 11">Bhonsala Military School for 6 to 11</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Want to Join Live Demo Classes ?<span class="compulsory">*</span></label>
                                <select name="demo_class" id="demo_class" class="form-control">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>                           
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Interested in Course <span class="compulsory">*</span></label>
                                <select name="interested" id="interested" required="required" class="form-control">
                                    <option value="1 Year Schooling Program">Schooling + Competitive Program</option>
                                    <option value="Recorded Videos Course">Recorded Videos Course</option>
                                    <option value="2 Months Crash Course(Nov to Dec)">2 Months Crash Course(Nov to Dec)</option>                            
                                    <option value="Live Evening Classes(Daily 4pm to 7pm)">Live Evening Classes(Daily 4pm to 7pm)</option>
                                    <option value="15 Books Set">15 Books Set With 50 Solved Sample Papers</option>
                                </select>
                            </div>
                        </div>

                    </div>

                   


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Address <span class="compulsory">*</span></label>
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
                                   <input type="hidden" name="staff_id" value="327"/>
                                <input type="submit" name="submit" value="Submit" class="btn btn-primary mybutton6">
                            </div>
                        </div>
                        <br clear="all">
                        <p style="text-align:center;color:Red">Note : <b>Free Solved Sample Papers </b>Will Be Received in 5 to 6 Days</p>

                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
       
       
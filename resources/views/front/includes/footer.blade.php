<?php $config = CstmConfig();?>
 <!-- Footer Start -->
 <div class="footer-wrap">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="footer_logo">
            <img alt="footer logo" loading="eager" class="footer-default" width="150px" src="{{asset('public/storage/logo/')}}/{{CstmConfig()['site_logo_footer']}}"></div>
        <p>{{CstmConfig()['footer_text']}}</p>
      </div>
      <div class="col-lg-2 col-md-4">
        <h3>Quick links</h3>
        <ul class="footer-links">
          <li> <a href="{{ url('/') }}">Home</a></li>
          <li> <a href="{{ url('about-us') }}">About</a></li>
          <li> <a href="{{ url('contact-us') }}">Contact Us</a></li>
          <li> <a href="{{ url('privacy_policy') }}">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-4">
        <h3>Opening Hours</h3>
        <ul class="unorderList hourswrp">
          <li>Monday <span>8:00-4:00</span></li>
          <li>Tuesday <span>8:00-4:00</span></li>
          <li>Wednesday <span>8:00-4:00</span></li>
          <li>Thursday <span>8:00-4:00</span></li>
          <li>Friday <span>8:00-4:00</span></li>
          <li>Saturday <span>8:00-4:00</span></li>
          <li>Sunday <span>Closed</span></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-4">
        <div class="footer_info">
          <h3>Get in Touch</h3>
          <ul class="footer-adress">
            <li class="footer_address"> <i class="fas fa-map-signs"></i> <span>{{$config['contact_address']}}</span> </li>
            <li class="footer_email"> <i class="fas fa-envelope" aria-hidden="true"></i> <span><a href="mailto:{{$config['contact_email']}}"> {{$config['contact_email']}}</a></span> </li>
            <li class="footer_phone"> <i class="fas fa-phone-alt"></i> <span><a href="tel:{{$config['contact_phone']}}"> {{$config['contact_phone']}}</a></span> </li>
          </ul>
          <div class="social-icons footer_icon">
            <ul>
              <li><a href="{{$config['facebook_link']}}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
              <li><a href="{{$config['twitter_link']}}"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
              <!-- <li><a href="{{$config['contact_address']}}"><i class="fab fa-instagram" aria-hidden="true"></i></a></li> -->
              <li><a href="{{$config['youtube_link']}}"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="footer-bottom text-center">
    <div class="container">
        <div class="copyright-text">{{$config['copyright_text']}}</div>
    </div>
</div>
<script src="{{ asset('public/assets/js/jquery.min.js')}}?{{ rand() }}" defer></script>


<script src="{{ asset('public/assets/js/bootstrap.min.js')}}?{{ rand() }}" defer></script>
<script src="{{ asset('public/assets/js/popper.min.js')}}?{{ rand() }}" async></script>


<script src="{{ asset('public/assets/rs-plugin/js/jquery.themepunch.tools.min.js')}}?{{ rand() }}" async></script>
<script src="{{ asset('public/assets/rs-plugin/js/jquery.themepunch.revolution.min.js')}}?{{ rand() }}" async></script>


<script src="{{ asset('public/assets/js/jquery.fancybox.min.js')}}?{{ rand() }}" async></script>
<script src="{{ asset('public/assets/js/owl.carousel.js')}}?{{ rand() }}" defer></script>
<script src="{{ asset('public/assets/js/script.js')}}?{{ rand() }}" async></script>


<script src="{{ asset('public/assets/js/animate.js')}}?{{ rand() }}"></script>
<script>
  new WOW().init(); // Initialize WOW.js
</script>
<style>
    .modal-content
    {
        border-radius:0px !important;
        background: linear-gradient(355deg, rgba(166,162,240,1) 0%, rgba(164,164,214,1) 35%, rgba(210,215,211,1) 100%);
    }
    .modal-header
    {
        background: blue;
        color: #fff;
    }
    .modal-body .form-control
    {
    }
    .modal-body label
    {
        font-style: initial !important;
    }
    .applysamplepaper .modal-title
    {
        background:#5f676e;
        padding:10px;
        color:white;
        border-radius:15px;
        text-align: center;
        font-weight: bold;
    }
    .applysamplepaper .colse_modal
    {
        position: absolute;
        right: 27px;
        margin-top: -40px;
        color: white;
        opacity: 1;
    }
    .mybutton6, .mybutton5
    {
        background:#0b0e6d;
        width: 300px;
        font-weight: bold;
    }
    label
    {
        font-weight: normal !important;
        font-size:14px !important;
    }
    .compulsory
    {
        color:red;            
    }
    .blink_me {
        animation: blinker 1s linear infinite;
    }
    @keyframes blinker {
        50% {
            opacity: 0;
        }
    }
</style>

    <div id="modelOTPBOX" class="modal fade" role="dialog">
        <div class="modal-dialog" style="background:white;">
            <div class="modal-content" style="overflow:hidden;padding:30px;">
                <div class="form-group">
                    <label>Enter OTP</label>
                    <input type="text" name="otp" id="userotp" class="form-control" placeholder="Enter OTP">
                </div>
                <input type="button" name="otpbutn" value="Submit" onclick="checkOTP()" class="btn btn-primary">
            </div>
        </div>
    </div>

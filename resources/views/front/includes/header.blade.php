<?php $config = CstmConfig();?>
<!--Header Start-->
<div class="header-wrap">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-1 col-md-12 navbar-light">
            <div class="logo"> 
               <a href="{{ url('/') }}">
               <img alt="logo" loading="eager" class="logo-default" width="50px" src="{{asset('public/storage/logo/')}}/{{$config['site_logo']}}"></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
         </div>
         <div class="col-lg-8 col-md-12">
            <div class="navigation-wrap" id="filters">
               <nav class="navbar navbar-expand-lg navbar-light">
                  <a class="navbar-brand" href="#">Menu</a>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <button class="close-toggler" type="button" data-toggle="offcanvas"> <span><i class="fas fa-times-circle" aria-hidden="true"></i></span> </button>
                     <ul class="navbar-nav mr-auto">
                        @foreach ($navbars as $navbarItem)
                              @if($navbarItem['route'] =='home')
                               <li class="nav-item">
                                   <a class="nav-link active" href="{{ url('/') }}">{{ $navbarItem['name'] }}</a>
                               </li>
                              @elseif($navbarItem['route'] =='contact Us')
                               <li class="nav-item">
                                   <a class="nav-link" href="{{url('contact-us')}}">{{ $navbarItem['name'] }}</a>
                               </li>
                              @else
                              @if(!empty($navbarItem['subMenu']))
                                 <li class='nav-item'>
                                    <a class='nav-link' href='#.'>{{ $navbarItem['name'] }}</a> <i class='fas fa-caret-down'></i>
                                    <ul class='submenu'>
                                       @foreach ($navbarItem['subMenu'] as $subItem)
                                          @if(empty($subItem['website_url']))
                                             <li><a href="{{url('page')}}/{{$subItem['slug']}}">{{$subItem['title']}}</a></li>
                                          @else
                                             <li><a href="{{$subItem['website_url']}}" target="_blank">{{$subItem['title']}}</a></li>
                                          @endif
                                       @endforeach
                                    </ul>
                                 </li>
                              @else
                                 <li class="nav-item">
                                      <a class="nav-link" href="{{url($navbarItem['route'])}}">{{ $navbarItem['name'] }}</a>
                                  </li>
                              @endif
                           @endif
                        @endforeach
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
         <div class="">
            <div class="header_info">
               <div class="loginwrp"><a href="tel:{{$config['contact_phone']}}"><i class="fas fa-phone-alt"></i> {{$config['contact_phone']}}</a></div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--Header End-->
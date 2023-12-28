<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title') - {{ config('app.name') }}</title>
  <link rel = "icon" href = "{{ url('public/frontent/images/favicon.png') }}" type = "image/x-icon"> 
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ url('public/backend/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('public/backend/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ url('public/backend/bower_components/Ionicons/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ url('public/backend/dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ url('public/backend/dist/css/skins/_all-skins.min.css') }}">
  <link rel="stylesheet" href="{{ url('public/backend/bower_components/morris.js/morris.css') }}">
  <link rel="stylesheet" href="{{ url('public/backend/bower_components/jvectormap/jquery-jvectormap.css') }}">
  <link rel="stylesheet" href="{{ url('public/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('public/backend/bower_components/datetime/css/jquery.datetimepicker.min.css') }}"/ >
  <link rel="stylesheet" href="{{ url('public/backend/bower_components/fullcalendar/dist/fullcalendar.min.css') }}">
  <link rel="stylesheet" href="{{ url('public/backend/bower_components/fullcalendar/dist/fullcalendar.print.min.css') }}" media="print">
  <link rel="stylesheet" type="text/css" href="{{ url('public/backend/zoom/php-jwt-master/src/BeforeValidException.php') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('public/backend/zoom/php-jwt-master/src/ExpiredException.php') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('public/backend/zoom/php-jwt-master/src/SignatureInvalidException.php') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('public/backend/zoom/php-jwt-master/src/JWT.php') }}"> 
  <link rel="stylesheet" type="text/css" href="{{ url('public/backend/bower_components/time/jquery.timepicker.css') }}" />
  
  
  <!--<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css"rel="Stylesheet"type="text/css"/>-->

  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
  <!--<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>-->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-S4NVKB3R1W"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-S4NVKB3R1W');
        </script>
  <style type="text/css">
     .select2-selection__choice__display
     {
      color: red;
     }
     .form-group strong
     {
      color: red;
      font-weight: normal;
     }
     .error
     {
      font-size: 15px;
     }
   </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  @include('admin.components.navigation_bar')

  @include('admin.components.leftside-menubar')

  @yield('content')

  @include('admin.layouts.footer')

</div>

  <script src="{{ url('public/backend/bower_components/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ url('public/backend/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
  <script src="{{ url('public/backend/bower_components/ckeditor/ckeditor.js') }}"></script>
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#table_list').DataTable();
        
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif

        @if(Session::has('success'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
            toastr.success("{{ session('success') }}");
        @endif

        @if(Session::has('error'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
            toastr.error("{{ session('error') }}");
        @endif 
        
        jQuery('#date').datetimepicker({  
          format:'d-m-Y',
          minDate : 0,
          timepicker:false,
        });

        
        
    });

    function loadPreviewImage(input, id) 
    {
      id = id || '#preview_img';
      if (input.files && input.files[0]) 
      {
          var reader = new FileReader();
          reader.onload = function (e) 
          {
              $(id).attr('src', e.target.result).width(200).height(150);
          };
          reader.readAsDataURL(input.files[0]);
      }
    }
  </script>
  <script src="{{ url('public/backend/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('public/backend/bower_components/morris.js/morris.min.js') }}"></script>
  <script src="{{ url('public/backend/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
  <script src="{{ url('public/backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
  <script src="{{ url('public/backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
  <script src="{{ url('public/backend/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
  <script src="{{ url('public/backend/bower_components/moment/min/moment.min.js') }}"></script>
  <script src="{{ url('public/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
  <script src="{{ url('public/backend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
  <script src="{{ url('public/backend/bower_components/fastclick/lib/fastclick.js') }}"></script>
  <script src="{{ url('public/backend/dist/js/adminlte.min.js') }}"></script>
  <script src="{{ url('public/backend/dist/js/pages/dashboard.js') }}"></script>
  <script src="{{ url('public/backend/dist/js/demo.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script src="{{ url('public/backend/bower_components/datetime/js/jquery.datetimepicker.js') }}"></script>
  <script src="{{ url('public/backend/bower_components/time/jquery.timepicker.js') }}"></script>
  <script src="{{ url('public/backend/bower_components/time/datepair.js') }}"></script>
  <script src="{{ url('public/backend/bower_components/time/jquery.datepair.js') }}"></script>
  
  <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
</body>
</html>

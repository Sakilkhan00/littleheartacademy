<!doctype html>
<html lang="en">
    <head>
        <title>@yield('title', config('app.name') )</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="favicon.ico">
        @include('front.includes.head')
    </head>
    <body>  
      @include('front.includes.header')
      @yield('content')
      @yield('footer_script')
      
      @include('front.includes.footer')

      <script>
        $(document).ready(function() {
            $("#myModal").modal('show');
        });
    </script>
    <script>
        var userotp = "";
        $(document).ready(function() {
            $("#state").change(function() {
                $("#loaderr5").text('Loading...');
                $.ajax({
                    url: "https://www.careerdefenceschool.com/getCities.php?state_id=" + $('option:selected', this).attr('rel'),
                    success: function(result)
                    {
                        $("#city").html(result);
                        $("#loaderr5").text('');
                    }
                })
            });
        });
    </script>

    </body>
</html>

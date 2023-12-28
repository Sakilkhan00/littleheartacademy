<!DOCTYPE html>
<html lang="en">
<head>
  <title>Page not found</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    /*======================
    404 page
=======================*/

.page_404 {
  padding: 40px 0;
  background: #fff;
  font-family: "Arvo", serif;
}

.page_404 img {
  width: 100%;
}

.four_zero_four_bg {
  background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
  height: 400px;
  background-position: center;
}

.four_zero_four_bg h1 {
  font-size: 80px;
}

.four_zero_four_bg h3 {
  font-size: 80px;
}

.link_404 {
    font-family: arial;
}
.contant_box_404 {
  margin-top: -50px;
}
p,h3,h2,h4,.btn{
    font-family: 'Trebuchet MS', sans-serif;
}
</style>
<body>
<section class="page_404">
	<div class="container">
		<div class="row">	
		<div class="col-sm-12 ">
		<div class="col-sm-12 col-sm-offset-1  text-center">
			<h1 class="text-center " style="font-family: 'Brush Script MT', cursive; font-size:60px">404</h1>
		<div class="four_zero_four_bg">
		</div>
		
		<div class="contant_box_404">
		<h3 class="h2">
		Look like you're lost
		</h3>
		
		<p>The page you are looking for not avaible!</p>
		
		<a href="{{ url('/') }}" class="btn btn-success link_404">Go to Back</a>
	</div>
		</div>
		</div>
		</div>
	</div>
</section>

</body>
</html>

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
    /*====================== 401 page =======================*/

body {
	text-align: center;
	margin: 0;
	background: linear-gradient(120deg, #6F1E51 0%, #ED4C67 100%);
	background-repeat: no-repeat;
	background-attachment: fixed;
	color: #fff;
}

img {
	width: 200px;
	margin: auto;
	padding-top: 3em;
}

h1 {
	font-weight: 200;
	font-size: 3em;
	margin: 1em;
}

p {
	font-size: 1.2em;
}

p,h3,h2,h4,.btn{
    font-family: 'Trebuchet MS', sans-serif;
}
</style>
<body>
<div>
	<img src="https://images.plurk.com/5pHVCIyRNMdudWmVrrtQ.png" alt="">
	<h1>Trying to access is currently unavailable.</h1>
	<a href="{{ url('/') }}" class="btn btn-success link_404">Go to Back</a>
</div>

</body>
</html>

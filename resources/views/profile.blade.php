<!DOCTYPE html>
<html>
<head>
	<title>view Profile</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	<div class="container">
		<div class="col-md-6">
			<img class="img-responsive" src="/images/profile.jpg">
		</div>

		
			<div class="col-md-6">
				@for($i = 1 ; $i<=12 ; $i++)
					{{-- <p>Name : Apirat Pramchana</p>
					<p>Comtact : <a href="https://www.facebook.com/">facebook</a></p> --}}
					<li>{{$num}} * {{$i}} = {{$i * $num}}</li>
				@endfor
			</div>
		
	</div>
		



</body>
</html>



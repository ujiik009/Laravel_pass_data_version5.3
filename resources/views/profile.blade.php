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
				@foreach ($data as $infomation)
					<div>
						<p>รหัสประจำตัว : {{$infomation['student_code']}}</p>
						<p>ชื้อขนามสกุล : {{$infomation['student_name']}}</p>
						<p>หมู่เรียน : {{$infomation['student_sec']}}</p>
					</div>
				@endforeach

				
				
				
			</div>
		
	</div>
		



</body>
</html>



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
				@foreach ($data as $key => $infomation)

					<div>
						<p>index : {{$loop->index}}</p>
						<p>ลำดับ : {{$loop->iteration}}</p>
						<p>เหืลืออีก : {{$loop->remaining}}</p>
						<p>จำนวน  : {{$loop->count}}</p>
						<p>ใช้อันที่ 1 ไหม : {{($loop->first == true) ? "yes" : "no"}}</p>
						<p>ใช้อันสุดท้ายไหม : {{($loop->last== true) ? "yes" : "no"}}</p>
						<p>loop ระดับไหน : {{$loop->depth}}</p>
						<p>รหัสประจำตัว : {{$infomation['student_code']}}</p>
						<p>ชื้อขนามสกุล : {{$infomation['student_name']}}</p>
						<p>หมู่เรียน : {{$infomation['student_sec']}}</p>
					</div>
					<hr>
				@endforeach

				
				
				
			</div>
		
	</div>
		



</body>
</html>



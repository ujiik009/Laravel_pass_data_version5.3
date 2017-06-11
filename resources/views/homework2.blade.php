<!DOCTYPE html>
<html>
<head>
	<title>
		My Profile
	</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	<div class="container">
		<div class="col-md-6">
			<img class="img-responsive img-rounded img-profile " src="/images/profile.jpg">
		</div>
			<div class="col-md-6 col-R" >
				<h3>
					<p><b>Name : </b> {{$profiles['name']}}</p>
					<p><b>Age : </b> {{$profiles['age']}} year old</p>
					<p><b>Skills : </b>
						@foreach ($profiles['skills'] as $index => $skill_name)
							<div>
								<h4>{{$index}}</h4>
								<ul>
									@foreach ($skill_name as $skill)
										<li>{{$skill}}</li>
									@endforeach
								</ul>
							</div>
						@endforeach
					</p>
					<p><b>Degree : </b> {{$profiles['degree']}}</p>
					<p><b>contact :</b> {!!$profiles['contact']!!}</p>
				</h3>
			</div>
		
	</div>
</body>
</html>
<h2>Your Remider :</h2>
@foreach ($remiders as $remider)
	<div class="well">
	<span>{{$remider}}</span>
	<a  class="btn btn-success pull-right">Finish</a>
</div>
@endforeach

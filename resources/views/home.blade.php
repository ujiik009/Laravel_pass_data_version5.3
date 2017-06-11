@extends('template')

@section('content')
  <h3> New Remider	</h3>
  <form method="post" action="remider/new">
  		<div class="form-group">
  			<label>
  				Remider :
  			</label>
  			<textarea name="remider" rows="8" cols="80" class="form-control"></textarea>
  		</div>
  		<div class="form-group">
  			{{csrf_field()}}
  			<input class="btn btn-success" type="submit" value="Create New Remider">
  			
  		</div>
  </form>
@endsection

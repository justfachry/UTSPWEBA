@extends('layouts.master')

@section('content')
<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Inputs</h3>
								</div>
								<div class="panel-body">
									<form action="/student/{{$student->id}}/update" method="POST">
											{{csrf_field()}}
										<div class="form-group">
											<label for="exampleInputEmail1">Name</label>
											<input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" value="{{$student->name}}">
										</div>
										
										<div class="form-group">
											<label for="exampleFormControlSelect1">Select Gender</label>
											<select name="gender"class="form-control" id="exampleFormControlSelect1">
											<option value="M" @if($student->gender == 'M') selected @endif>Male</option>
											<option value="F" @if($student->gender == 'F') selected @endif>Female</option>
											</select>
										</div>

										<div class="form-group">
											<label for="exampleInputEmail1">Religion</label>
											<input name="religion" type="text" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Religion" value="{{$student->religion}}">
										</div>

											<div class="form-group">
												<label for="exampleFormControlTextarea1">Region</label>
												<textarea name="region" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$student->region}}</textarea>
											</div>
											<button type="submit" class="btn btn-warning">Update</button>
									</form>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
</div>	
@stop

@section('content1')	

	<h1>Edit Student Data</h1>
	@if(session('success'))
	<div class="alert alert-success" role="alert">
  {{session('success')}}
</div>
	@endif
	<div class="row">
		<div class="col-lg-12">
		<form action="/student/{{$student->id}}/update" method="POST">
		  	{{csrf_field()}}
		  <div class="form-group">
		    <label for="exampleInputEmail1">Name</label>
		    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" value="{{$student->name}}">
		  </div>
		 
		  <div class="form-group">
		    <label for="exampleFormControlSelect1">Select Gender</label>
		    <select name="gender"class="form-control" id="exampleFormControlSelect1">
		      <option value="M" @if($student->gender == 'M') selected @endif>Male</option>
		      <option value="F" @if($student->gender == 'F') selected @endif>Female</option>
		    </select>
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Religion</label>
		    <input name="religion" type="text" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Religion" value="{{$student->religion}}">
		  </div>

			<div class="form-group">
			    <label for="exampleFormControlTextarea1">Region</label>
			    <textarea name="region" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$student->region}}</textarea>
			  </div>
			  <button type="submit" class="btn btn-warning">Update</button>
      </form>
      </div>
	</div>
	
@endsection
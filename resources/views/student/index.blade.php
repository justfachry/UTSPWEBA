@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Siswa</h3>
									<div class="right">
										<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
									</div>
								</div>
								<div class="panel-body no-padding">
									<table class="table">
										<thead>
											<tr>
												<th>NAME</th>
												<th>GENDER</th>
												<th>RELIGION</th>
												<th>REGION</th>
												<th>ACTION</th>
											</tr>
										</thead>
										<tbody>
											@foreach($student_data as $student)
											<tr>
												<td><a href="/student/{{$student->id}}/profile">{{$student->name}}</a></td>
												<td>{{$student->gender}}</td>
												<td>{{$student->religion}}</td>
												<td>{{$student->region}}</td>
												<td><a href="/student/{{$student->id}}/edit" class="btn btn-warning btn-sm">Edit</a></td>
												<td><a href="/student/{{$student->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure??')">Delete</a></td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/student/create" method="POST">
		  	{{csrf_field()}}
		  <div class="form-group">
		    <label for="exampleInputEmail1">Name</label>
		    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
		  </div>
		 
		  <div class="form-group">
		    <label for="exampleFormControlSelect1">Select Gender</label>
		    <select name="gender"class="form-control" id="exampleFormControlSelect1">
		      <option value="M">Male</option>
		      <option value="F">Female</option>
		    </select>
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Religion</label>
		    <input name="religion" type="text" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Religion">
		  </div>

			<div class="form-group">
			    <label for="exampleFormControlTextarea1">Region</label>
			    <textarea name="region" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			  </div>

		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
    </div>
  </div>

@stop


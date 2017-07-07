@extends('day3/template')

@section('title')
	Activity 2
@stop

@section('content')

    <div class="modal-content" class="col-8">
      <div class="modal-header">
        <h5 class="modal-title">Register New Employee</h5>
      </div>
      <div class="modal-body">
        <center>

<form method="post" action="procreg">
	

	<div class="form-group row">
	  <label for="example-text-input1" class="col-2 col-form-label">First Name:</label>
	  <div class="col-10">
	    <input class="form-control" type="text" name="fname" placeholder="First Name" id="example-text-input1">
	  </div>
	</div>
	
	<div class="form-group row">
	  <label for="example-text-input2" class="col-2 col-form-label">First Name:</label>
	  <div class="col-10">
	    <input class="form-control" type="text" name="mname" placeholder="Middle Name" id="example-text-input2">
	  </div>
	</div>

	<div class="form-group row">
	  <label for="example-text-input3" class="col-2 col-form-label">First Name:</label>
	  <div class="col-10">
	    <input class="form-control" type="text" name="lname" placeholder="Last Name" id="example-text-input3">
	  </div>
	</div>
	
	<div class="form-group row">
	    <label for="exampleSelect3" class="col-2 col-form-label">Gender:</label>
	    <div class="col-10">
	    <select class="form-control" id="exampleSelect3" name="gn">
	      	<option value="M">Male</option>
			<option value="F">Female</option>
	    </select>
	    </div>
	  </div>

	<div class="form-group row">
	    <label for="exampleSelect4" class="col-2 col-form-label">Civil Status:</label>
	    <div class="col-10">
	    <select class="form-control" id="exampleSelect4" name="cs">
	      	<option value="S">Single</option>
			<option value="M">Married</option>
	    </select>
	    </div>
	  </div>

	<div class="form-group row">
	    <label for="exampleSelect1" class="col-2 col-form-label">Department:</label>
	    <div class="col-10">
	    <select class="form-control" id="exampleSelect1" name="dept">
	      	<option value="Accounting">Accounting</option>
			<option value="Budget">Budget</option>
			<option value="Human Resource">Human Resource</option>
			<option value="Maintenance">Maintenance</option>
			<option value="Treasury">Treasury</option>
	    </select>
	    </div>
	  </div>

	  <div class="form-group row">
	    <label for="exampleSelect2" class="col-2 col-form-label">Position:</label>
	    <div class="col-10">
	    <select class="form-control" id="exampleSelect2" name="pos">
	      	<option value="Medical Chief">Medical Chief</option>
						<option value="Finance Manager">Finance Manager</option>
						<option value="Administrative Officer V">Administrative Officer V</option>
						<option value="Supervising Administrative Officer">Supervising Administrative Officer</option>
						<option value="Utility">Utility</option>
	    </select>
	    </div>
	  </div>

	  <div class="form-group row">
    <label for="exampleInputFile">File input</label>
    <input type="file" name="imgfile" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">Profile picture.</small>
  </div>

	  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
		<input class="btn btn-primary" type="submit" value="Submit">
		
	</form>

		</center>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>



	<br/>
@stop
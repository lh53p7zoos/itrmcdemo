@extends('activity2/template1')

@section('title')
	Activity 2
@stop

@section('body')
	<br/>
	<form method="get" action="view">
		<table>
			<tr>
				<td align="right">First Name:</td><td><input type="text" name="fname" placeholder="First Name" /></td>
			</tr>
			<tr>
				<td align="right">Middle Name:</td><td><input type="text" name="mname" placeholder="Middle Name" /></td>
			</tr>
			<tr>
				<td align="right">Last Name:</td><td><input type="text" name="lname" placeholder="Last Name" /></td>
			</tr>

			<tr>
				<td align="right">Gender:</td><td><select name="gender"><option value="M">Male</option><option value="F">Female</option></select></td>
			</tr>

			<tr>
				<td align="right">Civil Status:</td><td><select name="cstatus"><option value="S">Single</option><option value="M">Married</option></select></td>
			</tr>

			<tr>
				<td align="right">Birthdate:</td><td><input type="datetime" name="bdate" placeholder="mm/dd/yyyy" /></td>
			</tr>

			<tr>
				<td align="right">Department:</td><td>
					<select name="dept">
						<option value="Accounting">Accounting</option>
						<option value="Budget">Budget</option>
						<option value="Human Resource">Human Resource</option>
						<option value="Maintenance">Maintenance</option>
						<option value="Treasury">Treasury</option>
					</select>
				</td>
			</tr>

			<tr>
				<td align="right">Position:</td><td>
					<select name="pos">
						<option value="Medical Chief">Medical Chief</option>
						<option value="Finance Manager">Finance Manager</option>
						<option value="Administrative Officer V">Administrative Officer V</option>
						<option value="Supervising Administrative Officer">Supervising Administrative Officer</option>
						<option value="Utility">Utility</option>
					</select>
				</td>
			</tr>

			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="Submit" /></td>
			</tr>
		</table>
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
	</form>
	<br/>
@stop
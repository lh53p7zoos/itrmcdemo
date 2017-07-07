@extends('day2/template1')

@section('title')
	Child Two
@stop

@section('body')
	This is Child Two Page
	
	<form method="get" action="child3">
		<table>
			<tr>
				<td>First Name:</td><td><input type="text" name="fname" /></td>
			</tr>
			<tr>
				<td>Last Name:</td><td><input type="text" name="lname" /></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="Submit" /></td>
			</tr>
		</table>
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
	</form>
	
@stop
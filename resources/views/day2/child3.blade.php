@extends('day2/template1')

@section('title')
	Child Three
@stop

@section('body')
	This is Child Three Page
	

	<table>
		<tr>
			<td>First Name:</td><td>{{$data['fname']}}</td>
		</tr>
		<tr>
			<td>Last Name:</td><td>{{$data['lname']}}</td>
		</tr>
		
	</table>
	
@stop
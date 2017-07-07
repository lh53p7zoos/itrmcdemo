@extends('day2/template1')

@section('title', 'Child Four')

@section('body')
	This is Child Four Page <br />
	

	<table>
		<tr>
			<td>Grade:</td><td>{{$grade}}</td>
		</tr>
		<tr>
			<td>Status:</td>
			<td>
				@if($grade >= 75)
					<font color='green'>Passed</font>
				@else
					<font color='red'>Failed</font>
				@endif
			</td>
		</tr>
		
	</table>
	
@stop
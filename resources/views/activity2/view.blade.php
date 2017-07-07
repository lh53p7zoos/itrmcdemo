@extends('activity2/template1')

@section('title')
	Activity 2
@stop

@section('body')
	<br/>
	<table>
		<tr>
			<td align="right">Full Name:</td><td><b>{{$data['fullname']}}</b></td>
		</tr>

		<tr>
			<td align="right">Birthdate:</td><td><b>{{$data['bdate']}}</b></td>
		</tr>

		<tr>
			<td align="right">Department:</td><td><b>{{$data['dept']}}</b></td>
		</tr>

		<tr>
			<td align="right">Position:</td><td><b>{{$data['pos']}}</b></td>
		</tr>

		<tr>
			<td align="right">Path:</td><td><b>{{$data['path']}}</b></td>
		</tr>

		<tr>
			<td align="right">Url:</td><td><b>{{$data['url']}}</b></td>
		</tr>

		<tr>
			<td align="right">Full Url:</td><td width="200"><b>{{$data['furl']}}</b></td>
		</tr>

		<tr>
			<td colspan="2" align="center"><a href="register"><input type="button" name="back" value="Back" /></a></td>
		</tr>
	</table>
	<br/>
@stop
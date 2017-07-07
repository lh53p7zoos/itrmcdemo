@extends('day2/template1')

@section('title')
	Proccessing File Uploading
@stop

@section('body')
	<br/>
	<h3>File Uploaded</h3>
	<img src="{{$data['imgpath']}}">
	<br/>
	<table>
		<tr>
			<td align="right">Filename:</td><td><b>{{$data['filename']}}</b></td>
		</tr>
		<tr>
			<td align="right">File Extension:</td><td><b>{{$data['fileext']}}</b></td>
		</tr>
		<tr>
			<td align="right">File Size:</td><td><b>{{$data['filesize']}} Kb</b></td>
		</tr>

		<tr>
			<td align="right">Mime Type:</td><td><b>{{$data['mime']}}</b></td>
		</tr>
	</table>
@stop
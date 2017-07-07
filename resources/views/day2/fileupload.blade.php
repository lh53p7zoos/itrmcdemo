@extends('day2/template1')

@section('title')
	File Uploading
@stop

@section('body')
	<br/>
	<h3> File Uploading</h3>
	<form method="post" action="proccess" enctype="multipart/form-data">
		<table>
			<tr>
				<td align="right">File:</td><td><input type="file" name="file1" placeholder="Image File" /></td>
			</tr>

			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="Submit" /></td>
			</tr>
		</table>
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
	</form>
	<br/>
@stop
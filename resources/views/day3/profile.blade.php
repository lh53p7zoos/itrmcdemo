@extends('day3/template')

@section('title','Profile')

@section('content')

    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">New File Created</h5>
        
      </div>
      <div class="modal-body">
        <center>

	      	<img src="{{ $data['imgpath'] }}">
			<br/>
			<table>

				<tr>
					<td align="right">Name:</td><td><b>{{$data['fullname']}}</b></td>
				</tr>
				<tr>
					<td align="right">Name:</td><td><b>{{$data['dept']}}</b></td>
				</tr>
				<tr>
					<td align="right">Name:</td><td><b>{{$data['pos']}}</b></td>
				</tr>

			</table>

		</center>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>

@stop
{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
<table>
	<tr>
		<td>
			{!! Form::label('name', 'Name: ', ['class'=>'input-group-addon bold']) !!}
		</td>
		<td width="50"> : </td>
		<td>
			{!! Form::text('name', null, ['class' => 'form-control']) !!}
		</td>
	</tr>
	<tr>
		<td>
			{!! Form::label('description', 'Keterangan: ', ['class'=>'input-group-addon bold']) !!}
		</td>
		<td> : </td>
		<td>
			{!! Form::textarea('description', null, ['class' => 'form-control', 'rows'=> 4]) !!}
		</td>
	</tr>
</table>
<br><br>
<div class="input-group pull-right">
	<a href="{{ redirect()->getUrlGenerator()->previous() }}" class="btn btn-default">Back</a> &nbsp;&nbsp;&nbsp;
	{!! Form::submit($submitButton, ['class' => 'btn btn-primary']) !!}
</div>
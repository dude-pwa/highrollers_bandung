<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="input-group">
	{!! Form::label('model_name', 'Model Name: ', ['class'=>'input-group-addon bold']) !!}
	{!! Form::text('model_name', null, ['class' => 'form-control']) !!}
</div> <br><br><br>
<div class="input-group pull-right">
	<a href="{{ redirect()->getUrlGenerator()->previous() }}" class="btn btn-default">Back</a> &nbsp;&nbsp;&nbsp;
	{!! Form::submit($submitButton, ['class' => 'btn btn-primary']) !!}
</div>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="input-group">
	{!! Form::label('category_name', 'Nama Kategori: ', ['class'=>'input-group-addon bold']) !!}
	{!! Form::text('category_name', null, ['class' => 'form-control']) !!}
</div> <br>
<div class="input-group pull-right">
	<a href="{{ redirect()->getUrlGenerator()->previous() }}" class="btn btn-default">Back</a> &nbsp;&nbsp;&nbsp;
	{!! Form::submit($submitButton, ['class' => 'btn btn-primary']) !!}
</div>
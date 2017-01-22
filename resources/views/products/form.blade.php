<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="input-group">
	{!! Form::label('category_id', 'Category: ', ['class'=>'input-group-addon bold']) !!}
	{{ Form::select('category_id', $categories) }}
</div> <br>
<div class="input-group">
	{!! Form::label('product_model_id', 'Model: ', ['class'=>'input-group-addon bold']) !!}
	{{ Form::select('product_model_id', $product_models) }}
</div> <br>
{{--<div class="input-group">--}}
	{{--{!! Form::label('code', 'Product Code: ', ['class'=>'input-group-addon bold']) !!}--}}
	{{--{!! Form::text('code', null, ['class' => 'form-control']) !!}--}}
{{--</div> <br>--}}
<div class="input-group">
	{!! Form::label('article_name', 'Article Name: ', ['class'=>'input-group-addon bold']) !!}
	{!! Form::text('article_name', null, ['class' => 'form-control']) !!}
</div> <br>
<div class="input-group pull-right">
	<a href="{{ redirect()->getUrlGenerator()->previous() }}" class="btn btn-default">Back</a> &nbsp;&nbsp;&nbsp;
	{!! Form::submit($submitButton, ['class' => 'btn btn-primary']) !!}
</div>
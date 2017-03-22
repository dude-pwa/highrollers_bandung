{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
<table>
	<tr>
		<td class="left">
			<div class="input-group">
				{!! Form::label('date_checked', 'Tanggal Check: ', ['class'=>'input-group-addon bold']) !!}
				{!! Form::date('date_checked', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
			</div> <br>
			<div class="input-group">
				{!! Form::label('is_accesories', 'Is Accesories: ', ['class'=>'input-group-addon bold']) !!}
{{--				{!! Form::checkbox('is_accesories', 1, null, ['id'=>'is_accesories']) !!}--}}
				<input name="is_accesories" type="checkbox" value="1" id="is_accesories">
			</div> <br>
			<div class="input-group">
				{!! Form::label('category_id', 'Category: ', ['class'=>'input-group-addon bold']) !!}
				{{ Form::select('category_id', $categories, null, ['class' => 'form-control form-select']) }}
			</div> <br>
			<div class="input-group">
				{!! Form::label('product_model_id', 'Model: ', ['class'=>'input-group-addon bold']) !!}
				{{ Form::select('product_model_id', $product_models, null, ['class' => 'form-control form-select']) }}
			</div> <br>
			<div class="input-group">
				{!! Form::label('article_name', 'Article Name: ', ['class'=>'input-group-addon bold']) !!}
				{!! Form::text('article_name', null, ['class' => 'form-control']) !!}
			</div> <br>
			<div class="input-group">
				{!! Form::label('color', 'Color: ', ['class'=>'input-group-addon bold']) !!}
				{!! Form::text('color', null, ['class' => 'form-control']) !!}
			</div> <br>
			<div class="input-group">
				{!! Form::label('price_normal', 'Normal Price: ', ['class'=>'input-group-addon bold']) !!}
				{!! Form::text('price_normal', null, ['class' => 'form-control']) !!}
			</div> <br>
			<div class="input-group">
				{!! Form::label('price_over_size', 'Over Size Price: ', ['class'=>'input-group-addon bold']) !!}
				{!! Form::text('price_over_size', null, ['class' => 'form-control']) !!}
			</div> <br>
			<div class="input-group" id="input-topi">
				{!! Form::label('qty_topi', 'Qty: ', ['class'=>'input-group-addon bold']) !!}
				{!! Form::text('qty_topi', null, ['class' => 'form-control', $readOnlyForm]) !!}
			</div> <br>
			<br><br><br>
		</td>
		<td width="70px">&nbsp;</td>
		<td>
			<div id="input-size">
			<div class="input-group">
				{!! Form::label('size_s', 'Size S Qty.: ', ['class'=>'input-group-addon bold']) !!}
				{!! Form::text('size_s', null, ['class' => 'form-control', $readOnlyForm]) !!}
			</div> <br>
			<div class="input-group">
				{!! Form::label('size_m', 'Size M Qty.: ', ['class'=>'input-group-addon bold']) !!}
				{!! Form::text('size_m', null, ['class' => 'form-control', $readOnlyForm]) !!}
			</div> <br>
			<div class="input-group">
				{!! Form::label('size_l', 'Size L Qty.: ', ['class'=>'input-group-addon bold']) !!}
				{!! Form::text('size_l', null, ['class' => 'form-control', $readOnlyForm]) !!}
			</div> <br>
			<div class="input-group">
				{!! Form::label('size_ll', 'Size LL Qty.: ', ['class'=>'input-group-addon bold']) !!}
				{!! Form::text('size_ll', null, ['class' => 'form-control', $readOnlyForm]) !!}
			</div> <br>
			<div class="input-group">
				{!! Form::label('size_xl', 'Size XL Qty.: ', ['class'=>'input-group-addon bold']) !!}
				{!! Form::text('size_xl', null, ['class' => 'form-control', $readOnlyForm]) !!}
			</div> <br>
			<div class="input-group">
				{!! Form::label('size_xxl', 'Size XXL Qty.: ', ['class'=>'input-group-addon bold']) !!}
				{!! Form::text('size_xxl', null, ['class' => 'form-control', $readOnlyForm]) !!}
			</div> <br>
			<div class="input-group">
				{!! Form::label('size_xxxl', 'Size XXXL Qty.: ', ['class'=>'input-group-addon bold']) !!}
				{!! Form::text('size_xxxl', null, ['class' => 'form-control', $readOnlyForm]) !!}
			</div> <br>
			</div>
		</td>
	</tr>
</table>


{{--<div class="input-group">--}}
	{{--{!! Form::label('code', 'Product Code: ', ['class'=>'input-group-addon bold']) !!}--}}
	{{--{!! Form::text('code', null, ['class' => 'form-control']) !!}--}}
{{--</div> <br>--}}



<div class="input-group">
	{!! Form::label('pict_front', 'Front Image: ', ['class'=>'input-group-addon bold']) !!}
	{!! Form::file('pict_front', null, ['class' => 'form-control']) !!}
</div> <br>
<div class="input-group">
	{!! Form::label('pict_back', 'Back Image: ', ['class'=>'input-group-addon bold']) !!}
	{!! Form::file('pict_back', null, ['class' => 'form-control']) !!}
</div> <br>
<div class="input-group">
	{!! Form::label('pict_closeup', 'Closeup Image: ', ['class'=>'input-group-addon bold']) !!}
	{!! Form::file('pict_closeup', null, ['class' => 'form-control']) !!}
</div> <br>
<div class="input-group pull-right">
	<a href="{{ redirect()->getUrlGenerator()->previous() }}" class="btn btn-default">Back</a> &nbsp;&nbsp;&nbsp;
	{!! Form::submit($submitButton, ['class' => 'btn btn-primary']) !!}
</div>


<script type="text/javascript">
	$("#input-topi").hide();

	$("#is_accesories").change(function(){
		if($(this).prop('checked')){
			$("#input-topi").show();
			$("#input-size").hide();
		}else{
			$("#input-topi").hide();
			$("#input-size").show();
		}
	});
</script>
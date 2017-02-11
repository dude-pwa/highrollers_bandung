@extends('layouts.admin')

@section('content')
	<br>
	<a href="{{ url('admin/master_sizes/create') }}" class="btn btn-primary">Add New Master Size</a>
	<br><br>
	<div class="panel panel-success">
		<h1 class="panel-heading">Product Model Lists</h1>
		<table class="table table-striped small">
			<tr>
				<th class="col-md-1">No.</th>
				<th class="col-md-2">Name</th>
				<th class="col-md-2">Keterangan</th>
				<th colspan="2" class="center">Action</th>
			</tr>
			<?php $i = 0; ?>
				@foreach($master_sizes as $master_size)
					<tr>
						<td>{{($master_sizes->currentpage()-1)*$master_sizes->perpage()+1 + $i}}</td>
						<td>{{ strtoupper($master_size->name) }}</td>
						<td>{{ strtoupper($master_size->description) }}</td>

						{{--@if (!Auth::guest())--}}
						<td class="col-md-1" align="right">
							<a href="{{ url('admin/master_sizes/'.$master_size->id.'/edit') }}" class="btn btn-xs btn-info">Edit</a>
						</td>
						<td class="col-md-1 delete" align="left">
							{!! Form::open(['method'=>'delete', 'route'=>['admin.master_sizes.destroy', $master_size->id]]) !!}
							{!! Form::submit('Delete', ['class'=>'btn btn-xs btn-danger']) !!}
							{!!Form::close()!!}
						</td>
						{{--@endif--}}
					</tr>
				<?php $i += 1 ?>
				@endforeach
		</table>

		<br>
		<div class="center">
			{{$master_sizes->links()}}
		</div>
	</div>
	<br>

@endsection


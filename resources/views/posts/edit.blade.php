@extends('layouts.app')

@section('content')	
		@include('inc.messages')
		<div class="container-fluid div-top-200" style="color: white;">
			<h1>Edit Item</h1>

			{!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
				<div class="form-group">
					{{Form::label('manufacturer', 'Manufacturer')}}
					{{Form::text('manufacturer', $post->manufacturer, ['class' => 'form-control', 'placeholder' => 'Manufacturer'])}}
				</div>

				<div class="form-group">
					{{Form::label('model', 'Model')}}
					{{Form::text('model', $post->model, ['class' => 'form-control', 'placeholder' => 'Model'])}}		
				</div>

				<div class="form-group">
					{{Form::label('yom', 'Year Of Manufacture')}}
					{{Form::text('yom', $post->yom, ['class' => 'form-control', 'placeholder' => 'Year Of Manufacture'])}}		
				</div>

				<div class="form-group">
					{{Form::label('item_img', 'Upload Item Images: ')}}
					{{Form::file('item_img', ['multiple' => 'true'])}}		
				</div>

				{{Form::hidden('_method', 'PUT')}}
				{{Form::submit('Update Item', ['class' => 'btn btn-primary'])}}
    		{!! Form::close() !!}

		</div>
@endsection
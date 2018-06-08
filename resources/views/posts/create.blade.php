@extends('layouts.app')

@section('content')	
		@include('inc.messages')
		<div class="container-fluid div-top-200" style="color: white;">
			<h1>Add Item</h1>

			{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
				<div class="form-group">
					{{Form::label('manufacturer', 'Manufacturer')}}
					{{Form::text('manufacturer', '', ['class' => 'form-control', 'placeholder' => 'Manufacturer'])}}
				</div>

				<div class="form-group">
					{{Form::label('model', 'Model')}}
					{{Form::text('model', '', ['class' => 'form-control', 'placeholder' => 'Model'])}}		
				</div>

				<div class="form-group">
					{{Form::label('yom', 'Year Of Manufacture')}}
					{{Form::text('yom', '', ['class' => 'form-control', 'placeholder' => 'Year Of Manufacture'])}}		
				</div>

				<div class="form-group">
					{{Form::label('desc', 'Description')}}
					{{Form::textarea('desc', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}		
				</div>

				<div class="form-group">
					{{Form::label('item_img', 'Upload Item Images: ')}}
					{{Form::file('item_img')}}		
				</div>

				{{Form::submit('Add Item', ['class' => 'btn btn-primary'])}}
    		{!! Form::close() !!}

		</div>
@endsection
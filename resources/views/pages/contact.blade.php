@extends('layouts.app')
@section('content')
		<div class="container-fluid text-center contact-img">
			<div class="row" style="padding-top: 40px;">
				<div class="col-md-6">
					<h1 style="color: white">Contact Us</h1>
					<h2></h2>
				</div>
				<div class="col-md-6" style="color: white">
					{!! Form::open(['action' => 'PostsController@contactUs', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
							<div class="form-group">
								{{Form::label('fullname', 'Full Name')}}
								{{Form::text('fullname', '', ['class' => 'form-control', 'placeholder' => 'Full Name'])}}
							</div>

							<div class="form-group">
								{{Form::label('email', 'E-mail')}}
								{{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'E-mail'])}}		
							</div>

							<div class="form-group">
								{{Form::label('message', 'Message')}}
								{{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Message', 'rows' => '7'])}}		
							</div><br>
						{{Form::submit('Send', ['class' => 'btn btn-primary btn-block'])}}
		    		{!! Form::close() !!}
				</div>
			</div>			
		</div>
@endsection
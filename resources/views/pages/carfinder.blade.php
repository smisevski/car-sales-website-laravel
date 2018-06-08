@extends('layouts.app')

@section('content')
				<div class="container-fluid text-center appon-cov-img">
					<h1 style="font-size: 72px; padding-top: 180px; color:#c43d07">CARFINDER</h1>
				</div>

					<div class="container-fluid text-center" style="background-color: #1a1a1c; padding-top: 40px; padding-bottom: 40px; color: white">
							<h1 style="color: #c43d07">Want a special car?</h1>
							<h4 style="color: #2D6599">You do not see it in our cars list?</h4>
							<h4 style="color: #656668">Complete the „Car finder form“ and we will try to find the car you want?</h4>
					
						

						<div class="container-fluid" style="margin-top: 30px">
							{!! Form::open(['action' => 'PostsController@search', 'method' => 'POST']) !!}
								<div class="row">

									<div class="col-md-6" style="background-image: url('images/carfinderkeys')">
										<h3 style="color: white;font-weight: bold">Contact information</h3>
										<div class="form-group">
											{{Form::label('name', 'Name')}}
											{{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
										</div>

										<div class="form-group">
											{{Form::label('surname', 'Surname')}}
											{{Form::text('surname', '', ['class' => 'form-control', 'placeholder' => 'Surname'])}}		
										</div>

										<div class="form-group">
											{{Form::label('address', 'Address')}}
											{{Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Address'])}}		
										</div>

										<div class="form-group">
											{{Form::label('telephone', 'Telephone')}}
											{{Form::text('telephone', '', ['class' => 'form-control', 'placeholder' => 'Telephone'])}}		
										</div>

										<div class="form-group">
											{{Form::label('e-mail', 'E-mail')}}
											{{Form::text('e-mail', '', ['class' => 'form-control', 'placeholder' => 'E-mail'])}}		
										</div>
									
									</div>

									<div class="col-md-6">
										<h3 style="color: white;font-weight: bold">Specification</h3>

										<div class="form-group">
										{{Form::label('yom', 'Year Of Manufacture')}}
										<br>
										{{Form::selectRange( 'yom', 1920, 2018, "Any Year", ['class' => 'custom-select'])}} 		
										</div>

										<div class="form-group">
											{{Form::label('manufacturer', 'Manufacturer')}}
											{{Form::text('manufacturer', '', ['class' => 'form-control', 'placeholder' => 'Manufacturer'])}}
										</div>

										<div class="form-group">
											{{Form::label('model', 'Model')}}
											{{Form::text('model', '', ['class' => 'form-control', 'placeholder' => 'Model'])}}		
										</div>

										<div class="form-group">
											{{Form::label('maxprice', 'Maximum Price')}}
											{{Form::text('maxprice', '', ['class' => 'form-control', 'placeholder' => 'Maximum Price (USD)'])}}		
										</div>

										<div class="form-group">
											{{Form::label('additional', 'Additional Requirments')}}
											{{Form::textarea('additional', '', ['class' => 'form-control', 'placeholder' => 'Additional Requirments', 'rows' => '7' , 'cols' => '40'])}}		
										</div>
									</div>
								</div>
								<div class="row">
									<div class="container-fluid">
										{{Form::submit('Find Car', ['class' => 'btn btn-primary btn-block'])}}
										{{ csrf_field() }}
									</div>
								</div>
			    			{!! Form::close() !!}
		    			</div>
		    			
						
					
				</div>	

@endsection
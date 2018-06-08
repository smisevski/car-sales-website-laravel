@extends('layouts.app')

@section('content')
				<div class="container-fluid" style="padding-left: 0px!important;padding-right: 0px!important;">
					
				</div>
				<div class="container-fluid text-center" style="background-image: url('images/applyonline.png');background-repeat: no-repeat; background-position: center; padding-top: 40px; padding-bottom: 40px; color: white">
							<h1 style="color: #c43d07">Apply Online!</h1>
							<h4 style="color: #2D6599">Worry not, only follow through our appliance form,</h4>
							<h4 style="color: white">, and leave the rest to our commercial specialists!</h4>
							
							<div class="container">
								{!! Form::open(['action' => 'PostsController@applyonline', 'method' => 'POST']) !!}
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											
											{{Form::text('firstname', '', ['class' => 'form-control', 'placeholder' => 'First Name'])}}
										</div>

										<div class="form-group">
											
											{{Form::text('middlename', '', ['class' => 'form-control', 'placeholder' => 'Middle Name'])}}		
										</div>

										<div class="form-group">
											
											{{Form::text('lastname', '', ['class' => 'form-control', 'placeholder' => 'Last Name'])}}		
										</div>

										<div class="form-group">
											
											{{Form::text('address1', '', ['class' => 'form-control', 'placeholder' => 'Address1'])}}
										</div>

										<div class="form-group">
											
											{{Form::text('address2', '', ['class' => 'form-control', 'placeholder' => 'Address2'])}}		
										</div>

										<div class="form-group">
											
											{{Form::text('city', '', ['class' => 'form-control', 'placeholder' => 'City'])}}
											<select name="state" class="custom-select">
												<option value="0">California</option>
												<option value="1">Nevada</option>
												<option value="3">Colorado</option>
											</select> 
											{{Form::text('zip', '', ['class' => 'form-control', 'placeholder' => 'Zip'])}}		
										</div>

										<div class="form-group">
											
											{{Form::text('socialsec', '', ['class' => 'form-control', 'placeholder' => 'Social Security'])}}		
										</div>

										<div class="form-group">
											
											{{Form::text('dob', '', ['class' => 'form-control', 'placeholder' => 'Date of birth'])}}		
										</div>

										<div class="form-group">
											
											{{Form::text('drlicnum', '', ['class' => 'form-control', 'placeholder' => 'Driver Licence Number'])}}		
										</div>

										<div class="form-group">
											
											<select name="state" class="custom-select">
												<option value="0">California</option>
												<option value="1">Nevada</option>
												<option value="3">Colorado</option>
											</select>		
										</div>

										<div class="form-group">
											
											{{Form::text('drlicex', '', ['class' => 'form-control', 'placeholder' => 'Driver Licence Exp.'])}}		
										</div>

										<div class="form-group">
									
											{{Form::text('mobile', '', ['class' => 'form-control', 'placeholder' => 'Mobile Phone'])}}		
										</div>

										<div class="form-group">
										
											{{Form::text('homeph', '', ['class' => 'form-control', 'placeholder' => 'Home Phone'])}}		
										</div>

										<div class="form-group">
										
											{{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'E-mail.'])}}		
										</div>

									</div>

									<div class="col-md-6" style="border-left: 1px solid white; margin-top: 10px; margin-bottom: 10px">
										<h5 style="color: #656668">If you like to add a Co-Buyer in your car credit appliance, click the button.</h5>
										<a id="cobuyer"  class="btn btn-primary btn-block">Add Co-Buyer</a>
										<div id="cobuyerform" class="demo111" style="margin-top: 15px">
											<div class="form-group">
											
											{{Form::text('cfirstname', '', ['class' => 'form-control', 'placeholder' => 'First Name'])}}
											</div>

											<div class="form-group">
												
												{{Form::text('cmiddlename', '', ['class' => 'form-control', 'placeholder' => 'Middle Name'])}}		
											</div>

											<div class="form-group">
												
												{{Form::text('clastname', '', ['class' => 'form-control', 'placeholder' => 'Last Name'])}}		
											</div>

											<div class="form-group">
												
												{{Form::text('caddress1', '', ['class' => 'form-control', 'placeholder' => 'Address1'])}}
											</div>

											<div class="form-group">
												
												{{Form::text('caddress2', '', ['class' => 'form-control', 'placeholder' => 'Address2'])}}		
											</div>

											<div class="form-group">
												
												{{Form::text('ccity', '', ['class' => 'form-control', 'placeholder' => 'City'])}}
											<select name="state" class="custom-select">
												<option value="0">California</option>
												<option value="1">Nevada</option>
												<option value="3">Colorado</option>
											</select> 
												{{Form::text('czip', '', ['class' => 'form-control', 'placeholder' => 'Zip'])}}		
											</div>

											<div class="form-group">
												
												{{Form::text('csocialsec', '', ['class' => 'form-control', 'placeholder' => 'Social Security'])}}		
											</div>

											<div class="form-group">
												
												{{Form::text('cdob', '', ['class' => 'form-control', 'placeholder' => 'Date of birth'])}}		
											</div>

											<div class="form-group">
												
												{{Form::text('cdrlicnum', '', ['class' => 'form-control', 'placeholder' => 'Driver Licence Number'])}}		
											</div>

											<div class="form-group">
												
											<select name="state" class="custom-select">
												<option value="0">California</option>
												<option value="1">Nevada</option>
												<option value="3">Colorado</option>
											</select>		
											</div>

											<div class="form-group">
												
												{{Form::text('cdrlicex', '', ['class' => 'form-control', 'placeholder' => 'Driver Licence Exp.'])}}		
											</div>

											<div class="form-group">
										
												{{Form::text('cmobile', '', ['class' => 'form-control', 'placeholder' => 'Mobile Phone'])}}		
											</div>

											<div class="form-group">
											
												{{Form::text('chomeph', '', ['class' => 'form-control', 'placeholder' => 'Home Phone'])}}		
											</div>

											<div class="form-group">
											
												{{Form::text('cemail', '', ['class' => 'form-control', 'placeholder' => 'E-mail.'])}}		
											</div>
										</div>
									</div>
								</div>

										{{Form::submit('Send Application', ['class' => 'btn btn-primary btn-block'])}}
										{{ csrf_field() }}

				    			{!! Form::close() !!}
							</div>
							
				</div>
					
@endsection
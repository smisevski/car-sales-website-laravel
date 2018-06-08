@extends('layouts.app')

@section('content')
		
		<div class="container-fluid coverimg">
			<div class="row">
				<div class="col-md-6">
					<div class="div-top-80" style="padding-left: 30px; padding-right: 30px; text-align: justify-all;">
						<h1 style="color: #c43d07">Looking for a fast, fun and reliable car?</h1><br>
						<h2 style="color: #2D6599">Want a great car at an amazing price?</h2><br>
						<h2 style="color: #2D6599">Look no further, World Class Auto is here to help you!</h2><br>
						<h4 style="color: #656668">World Class Auto is your premier pre-owned car dealer for used cars and trucks.</h4><hr style="background-color: gray">
						<a href="/contact" class="btn btn-primary">Contact Us</a>
					</div>
				</div>
				<div class="col-md-6"></div>
			</div>
		</div>
@endsection


@section('finder')
		<div class="container-fluid" style="background-color: #181823;padding-bottom:40px;padding-top:40px;color: white">
			<div class="row">
				<div class="col-md-4">
					<label style="font-weight: bolder;" for="manufact">Manufacturer</label><br>
					<select class="custom-select" name="manufact" id="manufact">
						<option value="">Any</option>
						@if($items)
							@foreach($items as $item)
								<option value="{{$item->id}}">{{$item->manufacturer}}</option>
							@endforeach
						@endif
					</select><br><hr>
					<label style="font-weight: bolder;" for="model">Model</label><br>
					<select class="custom-select" name="model" id="model">
						<option value="">Any</option>
						@if($items)
							@foreach($items as $item)
								<option value="{{$item->id}}">{{$item->model}}</option>
							@endforeach
						@endif
					</select>
				</div>

				<div class="col-md-4">
					<label style="font-weight: bolder;" for="yom">Year Of Manufacture</label><br>
					<select class="custom-select" name="yom" id="yom">
						<option value="">Any</option>
						
							@for($i=1920; $i<=2018; $i++)
								<option value="{{$i}}">{{$i}}</option>
							@endfor
						
					</select><br><hr>
					<label style="font-weight: bolder;" for="maxpr">Maximum price</label><br>
					<input type="text" name="maxpr" id="maxpr" class="form-control" placeholder="Maximum price (USD)">
				</div>

				<div class="col-md-4 text-center">
					<div class="container text-center" style="padding-top: 30px; font-size: 30px">
						<h3 style="color: white">You can search right away<br> for what is at disposal.</h3>
						<h4 style="color: black!important">It's easy from here!</h4>
					</div>
				</div>
			
			</div>

			<div id="result" class="container-fluid"  style="color:black;padding-top: 20px">
				
			</div>			
		</div>
@endsection

@section('inventory')
		<div id="inventory" class="container-fluid inventory-img">
			<div class="row" style="height: 400px">
				<div class="col-md-6">
					<h3></h3>
				</div>
				<div class="col-md-6" style="border-left: 1px solid #656668; margin-top: 25px;">
					<div class="container" style="margin-top: 40px">
						<h1 class="text-style-1" style="color:#2D6599 ">INVENTORY</h1>
						<h2 class="text-style-1" style="color: white">Have a look at our wide selection of wheels.</h2>
						<h3 style="color: #c43d07" class="text-style-1">Are you content with a specific model?<br>It's for you to have it!</h3><br><hr style="background-color: gray">
						<a style="margin-top: 20px" class="btn btn-primary btn-block" href="/inventory">Inventory</a>
					</div>	
				</div>
			</div>
		</div>		
@endsection

@section('carfinder')
		<div id="carfinder" class="container-fluid no-padding div-top-200 carfinder-img" style="color: white; padding-bottom: 40px">
			<div class="row">
				<div class="col-md-6">
					<div class="container text-center" style="border-right: 2px solid #2D6599; margin-top: 20px;">
						<h1 style="font-size: 68px">...STILL SEARCHING FOR A FUN... </h1>
						<br>
						<h1 style="font-size: 68px">AND REALIABLE CAR?</h1>
						
						<h1 class="text-center" style="font-size: 38px">Fill in the Car Finder Form, and we will find it for you!</h1> <hr style="background-color: gray">
						<a style="font-size: 24px;" href="/carfinder" class="btn btn-primary">Car Finder</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="container text-center" style="margin-top: 143px">
						<h1 class="text-center" style="font-size: 42px">Also, we offer you the best sales policy, through a simple form.<br><br>
						Complete the Online Appliance, and let our sales specialist to take care for your car credit.</h1>
						<br><hr style="background-color: gray">
						<a style="font-size: 24px" href="/applyonline" class="btn btn-primary btn-style-1">Apply Online</a>
					</div>					
				</div>
			</div>
		</div>
@endsection


@section('prozir')
		<div class="container-fluid text-center" style="background-color: transparent!important; font-weight: bolder;">
			<div class="container text-center" style="margin-top: 140px">
				<img src="images/logo.jpg" width="340" height="180">
				<h1><em style="color:#2D6599">World</em> <em style="color:white">Class</em> <em style="color:#c43d07">Auto</em></h1>
			</div>
		</div>
@endsection


@section('specoffback')
		<div class="container-fluid specoffback">
			<div style="padding-top:px;">
				<div class="text-center">
					<h2 style="font-weight: bold; color:black">Special Offers</h2>
				</div>
				<div class="text-center">
				@if($so)
					<div class="text-center soitem w3-content w3-display-container">
						@foreach($so as $s)
							<div class="w3-display-container mySlides">
								<a href="/posts/{{$s->id}}"><img id="specoffslika" width="456" height="310" src="storage/item_imgs/{{$s->item_img}}">
								<img id="specoffslika1" width="256" height="170" src="/storage/item_imgs/{{$s->item_img}}">
								</a>
								<div class="w3-display-bottomleft w3-container w3-padding-16 w3-black">
								   {{$s->manufacturer}}, {{$s->model}}
								</div>
							</div>
						@endforeach
						<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
						<button class="w3-button w3-black w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
					</div>	
				@endif
				</div>
			</div>
		</div>
@endsection
@extends('layouts.app')

@section('content')
		<div class="container-fluid" style="margin-top: 40px">
			<h1 style="color: #2D6599">INVENTORY</h1>
			<h2 style="color: #2D6599">Our inventory stock listing. Check it out, and choose your prefered one.</h2>
		</div>
		<div class="container-fluid container-items">
			<div class="row">
				<div class="col-md-6">
					<div style="padding-bottom: 20px;" class="container-fluid">
						@if(count($posts) > 0)
							@foreach($posts as $post)
								<div class="card card-block bg-faded" style="margin-top: 15px; margin-bottom: 15px">
									<div class="row">
										<div class="col-md-4">
											<a href="/posts/{{$post->id}}"><img width="210" height="130" src="storage/item_imgs/{{$post->item_img}}"></a>
										</div>
										<div class="col-md-8">
											<h3><a href="/posts/{{$post->id}}">{{$post->manufacturer}}</a></h3>
											<h4>{{$post->model}}</h4>
											<strong>Year of Manufacture: {{$post->yom}}</strong><br>
											<small>posted at- {{$post->created_at}}</small>
										</div>
									</div>
								</div>
							@endforeach
						@endif
						{{ $posts->links() }}
					</div>
				</div>
				<div class="col-md-6">
					<div class="container-fluid inventory-filter">

						<div class="container-fluid" style="padding-bottom: 40px">
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
							</select><br><hr>

							<label style="font-weight: bolder;" for="yom">Year Of Manufacture</label><br>
							<select class="custom-select" name="yom" id="yom">
							<option value="">Any</option>
						
							@for($i=1920; $i<=2018; $i++)
								<option value="{{$i}}">{{$i}}</option>
							@endfor
						
							</select><br><hr>
							<label style="font-weight: bolder;" for="maxpr">Maximum price</label>
							<input type="text" name="maxpr" id="maxpr" class="form-control" placeholder="Maximum price (USD)">
						</div>

					</div>					
				</div>
			</div>
		</div>
@endsection
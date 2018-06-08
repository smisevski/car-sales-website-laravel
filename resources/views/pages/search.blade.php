@extends('layouts.app')


@section('content')
<div class="container-fluid div-top-200" style="color: black">
		@include('inc.messages')
		<div class="card card-block bg-faded">
			<div class="row">
				<div class="col-md-4">
					<img width="420" height="260" src="/storage/item_imgs/{{$search->item_img}}">
				</div>

				<div class="col-md-8">
					<h2>Manufacturer: {{$search->manufacturer}}</h2>
					<h3>Model: {{$search->model}}</h3>
					<h3>Year of manufacture: {{$search->yom}}</h3>
				</div>
			</div>	
		</div>
		
</div>

@endsection
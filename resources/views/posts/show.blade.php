@extends('layouts.app')

@section('content')
		<div class="container-fluid" style="color: white; margin-top: 50px">
			

			@if(!Auth::guest())
				{!! Form::open(['action' => ['PostsController@imgupload', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
					<span class="btn btn-file btn-default">
					{{Form::file('item_gal[]', ['multiple' => 'true'])}} 
					</span><br>
					{{Form::submit('Update Gallery', ['class' => 'btn btn-primary'])}}	
				{!! Form::close() !!}
			@endif
			<hr>
			<div class="row">
				<div class="col-md-6">
					<img width="500" height="350" src="/storage/item_imgs/{{$post->item_img}}">
				</div>
			
				<div class="col-md-6">
					<h1>Manufacturer: {{$post->manufacturer}}</h1>
					<h3>Model: {{$post->model}}</h3>
					<h3>Year Of Manufacture: {{$post->yom}}</h3>
					<h3>Description:</h3>
					<p style="text-align: justify;">{{$post->desc}}</p>
				</div>
			
			</div><hr>
				<div class="row">
				<div id="my-slideshow">
						<ul class="bjqs">
							@foreach($gallery as $img)
								<div class="gallery">
										<a target="_blank" href="/storage/item_imgs/{{$img->name}}">
											 <img width="210" height="130" src="/storage/item_imgs/{{$img->name}}">
										</a>
								</div>
											
							@endforeach
						</ul>
				</div>
				</div>
		</div>
		
@endsection